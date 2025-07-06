# PowerShell Script to Package the Chrome Extension for the Web Store
# Version: 1.1 - Added failsafe features

# --- Parameters ---
param (
    [switch]$Confirm
)

# --- Configuration ---
$SourceDirectory = $PSScriptRoot
$DestinationDirectory = Join-Path $SourceDirectory "market-deployment"
$ManifestFile = Join-Path $SourceDirectory "manifest.json"

# List of files and folders essential for the extension to run
$ItemsToPackage = @(
    "manifest.json",
    "background.js",
    "popup.html",
    "popup.js",
    "options.html",
    "options.js",
    "offscreen.html",
    "offscreen.js",
    "icons",
    "lib",
    "licenses"
)

# --- Failsafe Checks ---
# 1. Critical File Check: Ensure manifest.json exists before doing anything else.
if (-not (Test-Path $ManifestFile)) {
    Write-Host "FATAL ERROR: manifest.json not found in the source directory." -ForegroundColor Red
    Write-Host "Please run this script from the root directory of the extension." -ForegroundColor Red
    exit 1 # Stop the script immediately
}

# 2. Deletion Confirmation: If -Confirm switch is used, ask before deleting.
if ($Confirm -and (Test-Path $DestinationDirectory)) {
    $response = Read-Host "The directory '$DestinationDirectory' already exists. Are you sure you want to remove it? (y/n)"
    if ($response -ne 'y') {
        Write-Host "Operation cancelled by user." -ForegroundColor Yellow
        exit
    }
}

# --- Script Body ---
try {
    # 1. Clean up previous deployment folder
    if (Test-Path $DestinationDirectory) {
        Write-Host "Removing existing deployment directory: $DestinationDirectory"
        Remove-Item -Recurse -Force -Path $DestinationDirectory -ErrorAction Stop
    }

    # 2. Create a fresh deployment folder
    Write-Host "Creating new deployment directory: $DestinationDirectory"
    New-Item -ItemType Directory -Force -Path $DestinationDirectory -ErrorAction Stop | Out-Null

    # 3. Copy all necessary files and folders
    Write-Host "Copying necessary files to the deployment directory..."
    foreach ($item in $ItemsToPackage) {
        $sourcePath = Join-Path $SourceDirectory $item
        if (Test-Path $sourcePath) {
            Copy-Item -Path $sourcePath -Destination $DestinationDirectory -Recurse -ErrorAction Stop
            Write-Host "  - Copied: $item"
        }
        else {
            Write-Warning "  - WARNING: Could not find '$item' in the source directory. It was not packaged."
        }
    }

    # Include Standard Sites feature files
    Copy-Item -Path "website/standard-sites.html" -Destination $DestinationDirectory/website/standard-sites.html
    Copy-Item -Path "website/standard-sites.js" -Destination $DestinationDirectory/website/standard-sites.js

    # Include analytics.php
    Copy-Item -Path "website/components/analytics.php" -Destination $DestinationDirectory/website/components/analytics.php

    # 4. Create the ZIP file for the Chrome Web Store
    $ZipFilePath = Join-Path $SourceDirectory "Smart-Tab-Organiser-Market-Package.zip"
    if (Test-Path $ZipFilePath) {
        Remove-Item $ZipFilePath -ErrorAction Stop
    }
    Compress-Archive -Path "$DestinationDirectory\*" -DestinationPath $ZipFilePath -ErrorAction Stop

    Write-Host ""
    Write-Host "------------------------------------------------------------" -ForegroundColor Green
    Write-Host "Packaging complete!" -ForegroundColor Green
    Write-Host "The 'market-deployment' folder contains the unpacked extension." -ForegroundColor Green
    Write-Host "The 'Smart-Tab-Organiser-Market-Package.zip' file is ready to be uploaded to the Chrome Web Store." -ForegroundColor Green
    Write-Host "------------------------------------------------------------" -ForegroundColor Green

}
catch {
    # 5. Catch any unexpected errors from the 'try' block
    Write-Host ""
    Write-Host "An unexpected error occurred:" -ForegroundColor Red
    Write-Host $_.Exception.Message -ForegroundColor Red
    Write-Host "Packaging failed." -ForegroundColor Red
    exit 1
} 