<?php
// track-install.php
$type = isset($_GET['type']) ? $_GET['type'] : 'unknown';
$log = date('c') . "\t" . $_SERVER['REMOTE_ADDR'] . "\t" . ($_SERVER['HTTP_USER_AGENT'] ?? '-') . "\t" . ($_SERVER['HTTP_REFERER'] ?? '-') . "\t" . $type . "\n";
file_put_contents(__DIR__ . '/install_requests.log', $log, FILE_APPEND);
header('Location: https://chrome.google.com/webstore/detail/smart-tab-organiser/?utm_source=' . urlencode($type));
exit; 