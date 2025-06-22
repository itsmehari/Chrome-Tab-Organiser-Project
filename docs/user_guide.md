# User Guide: Smart Tab Organiser

Welcome to Smart Tab Organiser! This guide will help you get the most out of the extension.

## Opening the Extension

Click the Smart Tab Organiser icon in your Chrome toolbar to open the main popup window. The first time you open it, you can click the **"❓"** icon for an interactive tour of the key features.

## Main Views

The popup is organized into two main views: **Analyzer** and **Saved**. You can switch between them using the tabs at the top.

### 1. Analyzer View

This is the default view. It provides tools to organize and understand your current tabs.

#### Main Actions

- **Suggest Groups by Content**: Click this to analyze the content of your tabs and get smart grouping suggestions.
- **Organize All Tabs**: Click this to begin a smart, two-step organization process.
  1.  First, the extension will find all websites where you have many tabs open and automatically group them by domain.
  2.  Then, if there are any "scattered" tabs left over, a prompt will ask if you want to group them as well. You can choose to group them or leave them as they are.
- **Close Duplicate Tabs**: Instantly finds and closes any tabs that are duplicates, cleaning up your workspace with a single click.
- **Undo/Redo**: Accidentally organized or closed a group? No problem. Use the Undo (`Undo`) and Redo (`Redo`) buttons to reverse or reapply your last action.

#### Comprehensive Stats

The dashboard gives you an at-a-glance overview of your browser session:

- **Total Tabs, Windows, and Groups**: A quick count of your browser's state.
- **Audible Tabs (Interactive)**: Shows how many tabs are currently playing sound. **Click this stat** to instantly jump to the noisy tab.
- **Duplicate Tabs**: Counts how many tabs are open to the exact same URL. Use the "Close Duplicate Tabs" button to clean them up.
- **Memory Savers**: Shows the number of tabs Chrome has put to sleep to save memory.

#### Domain Analysis

This section lists all websites where you have multiple tabs open. For each website, you can:

- **Save**: Closes all tabs from that domain and adds them to your "Saved" list for later.
- **Organize**: Groups just the tabs for that specific website.
- **Close All**: Closes all tabs for that website.
- **Copy**: Copies all the URLs for that website to your clipboard.

#### Top Domains by Tab Count

A pie chart showing the 5 websites you have the most tabs open for, giving you a visual sense of your current session.

### 2. Saved View

This view holds all the tab groups you've saved for later, creating a clean workspace without losing important pages.

- **How to Save**: In the "Analyzer" view, find a domain you want to save and click the green "Save" button. All tabs from that domain will be closed and added to your saved list.
- **Restore a Group**: In the "Saved" view, find the group you want to bring back and click "Restore". All its tabs will open in a new window, and the group will be removed from your saved list.
- **Delete a Group**: If you no longer need a saved group, click the "Delete" button to permanently remove it.

## Settings & Options

You can access the main settings page by clicking the **"⚙️"** icon in the popup header or by right-clicking the extension icon and choosing "Options".

On the options page, you can:

- **Manage Sessions**: Save or restore your entire browser state (all windows and tabs).
- **Configure Defaults**: Set preferences for auto-organization and default group colors. You can also set a custom "chunk size" to control how many tabs are placed in each new window during organization.
- **Manage Data**: Reset all settings or clear your saved sessions and groups.

- Content-based grouping uses local NLP powered by compromise (browser UMD build), ensuring privacy and compatibility with Chrome extensions.
