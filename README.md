
# Laravel Dual Date Converter

🔁 A Laravel package to convert Jalali (Shamsi) dates to Gregorian and vice versa.  
📅 Support for multiple formats like `1382/08/21`, `13820821`, and `1382-08-21`.

---

## 🚀 Features / قابلیت‌ها

- ✅ Convert Jalali to Gregorian (شمسی به میلادی)
- ✅ Convert Gregorian to Jalali (میلادی به شمسی)
- ✅ Accept multiple date input formats
- ✅ Publishable helper to `app/Helpers`

---

## 📦 Installation / نصب

```bash
composer require tahaazare/dual-date-converter
```

(یا اگر به‌صورت لوکال استفاده می‌کنید، با path به پروژه متصل کنید)

---

## ⚙️ Usage / نحوه استفاده

```php
use App\Helpers\DualDateHelper;

DualDateHelper::toGregorian('13820821');    // 2003-11-12
DualDateHelper::toJalali('2003-11-12');     // 1382-08-21
```

---

## 📤 Publish Helper

```bash
php artisan vendor:publish --tag=dual-date-helper
```

📁 بعد از اجرا فایل `DualDateHelper.php` به مسیر زیر منتقل می‌شود:

```
app/Helpers/DualDateHelper.php
```

---

## 📃 License / مجوز

MIT © TahaaZare
