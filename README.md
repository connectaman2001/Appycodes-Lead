# 🧩 Appycodes Lead

**Appycodes Lead** is a lightweight, secure, and extendable WordPress plugin for collecting and managing leads.  
It creates a simple AJAX-powered form that captures **Name** and **Email**, stores them in a custom database table, and provides a full-featured **admin panel** for viewing, filtering, and exporting leads.

---

## 🚀 Features

✅ Custom database table `wp_appycodes_lead` created on activation  
✅ AJAX form submission (no page reload)  
✅ Frontend validation (empty fields + valid email)  
✅ Server-side sanitization and nonce protection  
✅ Loader on submit button while processing  
✅ Email notifications to admin & user (can be disabled)  
✅ Admin lead management table with:
  - Date filter (From/To)
  - CSV export
  - Pagination
✅ Developer hooks (actions & filters) for customization  
✅ Clean uninstall (optional table removal)

---

## 🧠 Plugin Overview

| Area | Description |
|------|--------------|
| **Plugin Name** | Appycodes Lead |
| **Purpose** | Collect and manage website leads |
| **Database Table** | `wp_appycodes_lead` |
| **Fields** | ID, Name, Email, Created_At |
| **Shortcode** | `[appycodes_lead_form]` |
| **Admin Menu** | Appycodes Lead → Leads / Settings |

---

## ⚙️ Requirements

- **WordPress:** 5.0 or later (tested up to 6.8.3)  
- **PHP:** 7.4 or later (PHP 8.4+ supported)  
- **Mail:** `wp_mail()` or SMTP plugin for sending emails

---

## 🧩 Installation

1. **Clone or Download**
   ```bash
   git clone https://github.com/YOUR_USERNAME/Appycodes-Lead.git appycodes-lead


👨‍💻 Author

Developed by: Aman
🌐 Website: https://appycodes.com

📧 Support: support@appycodes.com