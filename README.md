# Event Core Blocks

A suite of 6 custom Gutenberg blocks for landing pages. Built with WordPress Block API v3.

## Technical Stack
* **Framework:** React / WordPress Block Editor API
* **PHP:** Server-side rendering for dynamic content
* **Build Tool:** `@wordpress/scripts`
* **Standard:** `block.json` (metadata-driven)

## Block List
1.  **Hero Section:** Static block. Editable H1 and paragraph.
2.  **Agenda Wrapper:** Container block. Acts as a section parent.
3.  **Upcoming Events:** **Dynamic block.** Queries WordPress posts via PHP. Supports "posts per page" attribute.
4.  **Features Grid:** Layout container. Uses `InnerBlocks` with a 3-item template.
5.  **Features Item:** Child block for Grid. Supports title and description. Restricted to `features-grid` parent.
6.  **Testimonial:** Static block. Media Library integration for author photo + RichText for quote.

## Setup
1. Clone to `/wp-content/plugins/`
2. Run `npm install`
3. Run `npm run build`
4. Activate in WordPress plugins menu

## Structure
* `/src`: Source React components and SCSS.
* `/build`: Compiled assets for production (enqueued by WordPress).
* `block.json`: Block registration and attributes.