# PowerShell Script to Create a Clean Deployment Package for a Chrome Extension

# --- Configuration ---
$ProjectName = "Smart-Tab-Organiser-CC"
$SourceDirectory = Get-Location
$BuildDirectory = Join-Path $SourceDirectory "build"
$DistDirectory = Join-Path $SourceDirectory "dist"
$DeployIgnoreFile = Join-Path $SourceDirectory ".deployignore"

# --- Main Script ---

# Function to print colored messages
function Write-Host-Colored {
    param(
        [string]$Message,
        [string]$Color
    )
    Write-Host $Message -ForegroundColor $Color
}

# 1. Verification Step
Write-Host-Colored "Verifying deployment configuration..." "Cyan"
if (-not (Test-Path $DeployIgnoreFile)) {
    Write-Host-Colored ".deployignore file not found. Aborting." "Red"
    exit 1
}

# 2. Linter Check
Write-Host-Colored "Running linter to check code quality..." "Cyan"
& npm run lint
if ($LASTEXITCODE -ne 0) {
    Write-Host-Colored "Linter check failed. Please fix the errors before deploying." "Red"
    exit 1
}

# 3. Build Step
Write-Host-Colored "Running build script to minify assets..." "Cyan"
& npm run build
if ($LASTEXITCODE -ne 0) {
    Write-Host-Colored "Build script failed. Please check the build configuration." "Red"
    exit 1
}

# 4. Packaging Step
Write-Host-Colored "Packaging final extension..." "Cyan"

# Clean destination directory
if (Test-Path $DistDirectory) {
    Write-Host-Colored "Cleaning destination directory: $DistDirectory" "Yellow"
    Remove-Item -Recurse -Force $DistDirectory
}
New-Item -ItemType Directory -Force -Path $DistDirectory | Out-Null

# Read ignore patterns
$ignorePatterns = Get-Content $DeployIgnoreFile | Where-Object { $_ -and -not $_.StartsWith("#") }

# Copy files, respecting .deployignore
Write-Host-Colored "Copying manifest, HTML, and icons..." "Green"
Get-ChildItem -Path $SourceDirectory -Recurse -Exclude $ignorePatterns | ForEach-Object {
    $destinationPath = $_.FullName.Replace($SourceDirectory, $DistDirectory)
    if (-not (Test-Path (Split-Path $destinationPath -Parent))) {
        New-Item -ItemType Directory -Force -Path (Split-Path $destinationPath -Parent) | Out-Null
    }
    if (-not $_.PSIsContainer) {
        Copy-Item $_.FullName -Destination $destinationPath
    }
}

# Copy minified files from build folder
Write-Host-Colored "Copying minified JavaScript files..." "Green"
Copy-Item -Path (Join-Path $BuildDirectory "*.js") -Destination $DistDirectory

# 5. Final Message
Write-Host-Colored "----------------------------------------" "White"
Write-Host-Colored "Deployment complete!" "Green"
Write-Host-Colored "The ready-to-upload extension is in the '$DistDirectory' folder." "White"
Write-Host-Colored "----------------------------------------" "White" 