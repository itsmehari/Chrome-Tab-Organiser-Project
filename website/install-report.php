<?php
// install-report.php
$secret = 'YOUR_SECRET_KEY'; // Change this to a strong secret
if (!isset($_GET['key']) || $_GET['key'] !== $secret) {
  http_response_code(403);
  echo 'Access denied.';
  exit;
}
$logfile = __DIR__ . '/install_requests.log';
$rows = file_exists($logfile) ? file($logfile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
$summary = [];
foreach ($rows as $row) {
  $parts = explode("\t", $row);
  $type = $parts[4] ?? 'unknown';
  $summary[$type] = ($summary[$type] ?? 0) + 1;
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Install Tracking Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { font-family: 'Lato', Arial, sans-serif; background: #f8fafc; }
    h1, h3 { font-family: 'Poppins', Arial, sans-serif; }
    .container { max-width: 900px; }
    .table { border-radius: 14px; box-shadow: 0 2px 12px rgba(37,99,235,0.07); background: #fff; }
    .table thead { background: #2563eb; color: #fff; }
    .table-bordered th, .table-bordered td { border: 1.5px solid #e0e7ff; }
    .mb-4 { margin-bottom: 1.5rem !important; }
    .py-5 { padding-top: 3rem !important; padding-bottom: 3rem !important; }
    .rounded { border-radius: 14px !important; }
    .shadow { box-shadow: 0 2px 12px rgba(37,99,235,0.07) !important; }
  </style>
</head>
<body class="bg-light">
<div class="container py-5">
  <h1 class="mb-4 text-primary" style="font-family: 'Poppins', Arial, sans-serif;">Smart Tab Organiser – Install Tracking Report</h1>
  <h3 class="text-secondary" style="font-family: 'Poppins', Arial, sans-serif;">Summary by Source</h3>
  <table class="table table-bordered w-auto mb-4">
    <thead><tr><th>Source (type)</th><th>Count</th></tr></thead>
    <tbody>
      <?php foreach ($summary as $type => $count): ?>
        <tr><td><?= htmlspecialchars($type) ?></td><td><?= $count ?></td></tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <h3 class="text-secondary" style="font-family: 'Poppins', Arial, sans-serif;">All Install Events</h3>
  <div style="max-height:400px;overflow:auto;">
  <table class="table table-striped table-sm">
    <thead><tr><th>Date</th><th>IP</th><th>User Agent</th><th>Referrer</th><th>Type</th></tr></thead>
    <tbody>
      <?php foreach ($rows as $row): $parts = explode("\t", $row); ?>
        <tr>
          <td><?= htmlspecialchars($parts[0] ?? '') ?></td>
          <td><?= htmlspecialchars($parts[1] ?? '') ?></td>
          <td style="max-width:200px;overflow-x:auto;white-space:nowrap;"><?= htmlspecialchars($parts[2] ?? '') ?></td>
          <td style="max-width:200px;overflow-x:auto;white-space:nowrap;"><?= htmlspecialchars($parts[3] ?? '') ?></td>
          <td><?= htmlspecialchars($parts[4] ?? '') ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
</div>
<?php include 'components/footer.php'; ?>
<?php include 'components/analytics.php'; ?>
</body>
</html> 