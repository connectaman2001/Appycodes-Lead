# Appycodes Lead

**Appycodes Lead** is a lightweight WordPress plugin for simple lead generation.  
It allows you to collect leads through a clean AJAX-powered form and manage them directly inside your WordPress admin dashboard.

## 🚀 Features

- Frontend form with **Name** and **Email**
- **AJAX form submission** with validation and loader
- Automatically stores leads in a custom database table (`wp_appycodes_lead`)
- **Email notifications** to admin and user
- Admin dashboard to:
  - View all leads
  - Filter by date
  - Export leads to CSV
  - Enable/disable email notifications
- Secure and follows WordPress coding standards

## 🧩 Folder Structure

appycodes-lead/
│
├── appycodes-lead.php # main plugin file
├── includes/
│ ├── class-db.php
│ ├── ajax-handler.php
│ ├── admin-page.php
│ ├── email-functions.php
│ └── settings.php
├── assets/
│ ├── js/
│ │ └── lead-form.js
│ └── css/
│ └── lead-form.css
└── uninstall.php


## ⚙️ Installation

1. Download the plugin ZIP or clone this repository:
   ```bash
   git clone https://github.com/YOURUSERNAME/Appycodes-Lead.git
   
2. Copy the folder appycodes-lead into your wp-content/plugins/ directory.
3.  Activate Appycodes Lead from your WordPress dashboard.
