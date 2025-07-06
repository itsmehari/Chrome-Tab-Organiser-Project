# Master SEO & Social Sharing Implementation Plan

## 1. Goal

To apply a comprehensive set of technical and social SEO enhancements to every relevant page of the Smart Tab Organiser website. This ensures consistency, maximizes search visibility, and improves social sharing appearance.

## 2. Implementation Checklist

Apply all relevant items from this checklist to each page.

### 2.1. Core Meta Tags

- **Title:** Ensure the `<title>` tag is unique and descriptive (e.g., "Features - Smart Tab Organiser").
- **Description:** Ensure `<meta name="description">` is unique and compelling (150-160 characters).
- **Robots:** Ensure `<meta name="robots" content="index, follow">` exists.

### 2.2. Canonical URL

- Add a `<link rel="canonical" href="...">`. The URL must be the full, absolute path to the page.
- **Example:** For `pricing.php`, the URL is `https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/pricing.php`.

### 2.3. Social SEO (Open Graph & Twitter Cards)

- **og:title:** Should match the page's `<title>`.
- **og:description:** Should match the `<meta name="description">`.
- **og:url:** Should match the canonical URL.
- **og:image:** Use the absolute URL: `https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/assets/Smart-Tab-Manager-Logo.png`. (You may need to create this image).
- **og:type:** Use `website`.
- **twitter:card:** Use `summary_large_image`.
- **twitter:title:** Should match the `og:title`.
- **twitter:description:** Should match the `og:description`.
- **twitter:image:** Should match the `og:image`.

### 2.4. Structured Data (JSON-LD Schema)

- **Placement:** This `<script type="application/ld+json">` tag goes in the `<head>`.
- **Apply only the relevant schema** for each page type.

#### a) For the Homepage (`index.php`):

```json
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Smart Tab Organiser",
  "url": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://colourchemist.co.in/Smart-Tab-Manager-Chrome-Extension/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
```

#### b) For Pages with an FAQ Section (e.g., `pricing.php`, `features.php`):

```json
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    // Add each question and answer here
    {
      "@type": "Question",
      "name": "Is there a free plan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can use the basic features for free, forever."
      }
    }
  ]
}
```

#### c) For the Primary Product Page (e.g., `features.php` or `download.php`):

```json
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Smart Tab Organiser",
  "operatingSystem": "Chrome OS, Windows, macOS, Linux",
  "applicationCategory": "BrowserExtension",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "ratingCount": "120"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  }
}
```

### 2.5. Content & Accessibility

- Confirm a single `<h1>` exists.
- Ensure all `<img>` tags have descriptive `alt` attributes.

## 3. Instructions for AI

- Open the target file.
- Read this context file (`SEO_IMPLEMENTATION_CONTEXT.md`) completely.
- Add all new tags within the `<head>` section of the HTML.
- Replace placeholders (like in the canonical URL) with the correct information for the target file.
- Generate the complete code changes required and apply them.
