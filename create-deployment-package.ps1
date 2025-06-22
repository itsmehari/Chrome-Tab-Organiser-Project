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

# Copy specific files and folders to dist
Write-Host-Colored "Copying manifest, HTML, and icons..." "Green"
Copy-Item -Path (Join-Path $SourceDirectory "manifest.json") -Destination $DistDirectory
Copy-Item -Path (Join-Path $SourceDirectory "*.html") -Destination $DistDirectory
Copy-Item -Path (Join-Path $SourceDirectory "icons") -Destination $DistDirectory -Recurse
Copy-Item -Path (Join-Path $SourceDirectory "lib") -Destination $DistDirectory -Recurse

# Ensure dist/lib exists
$DistLibDirectory = Join-Path $DistDirectory "lib"
if (-not (Test-Path $DistLibDirectory)) {
    New-Item -ItemType Directory -Force -Path $DistLibDirectory | Out-Null
}
# Always copy compromise.min.js to dist/lib
$CompromiseSrc = Join-Path $SourceDirectory "lib\compromise.min.js"
$CompromiseDst = Join-Path $DistLibDirectory "compromise.min.js"
Copy-Item -Path $CompromiseSrc -Destination $CompromiseDst -Force
Write-Host-Colored "Ensured compromise.min.js is present in dist/lib." "Green"

# Copy minified files from build folder
Write-Host-Colored "Copying minified JavaScript files..." "Green"
Copy-Item -Path (Join-Path $BuildDirectory "*.js") -Destination $DistDirectory
# Copy preview.js for content-based grouping preview
Copy-Item -Path (Join-Path $SourceDirectory "preview.js") -Destination $DistDirectory

# 5. Final Message
Write-Host-Colored "----------------------------------------" "White"
Write-Host-Colored "Deployment complete!" "Green"
Write-Host-Colored "The ready-to-upload extension is in the '$DistDirectory' folder." "White"
Write-Host-Colored "----------------------------------------" "White" 