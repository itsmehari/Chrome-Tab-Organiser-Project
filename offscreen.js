'use strict';

// Listens for messages from the background script to copy data to the clipboard
chrome.runtime.onMessage.addListener(handleMessages);

async function handleMessages(message) {
  if (message.target !== 'offscreen') {
    return;
  }

  if (message.action === 'copyToClipboard') {
    const helper = document.getElementById('clipboard-helper');
    helper.value = message.data;
    helper.select();
    document.execCommand('copy');
    helper.value = '';
  }
} 