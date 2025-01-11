<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقویم شمسی</title>

    <!-- بارگذاری فایل CSS تقویم -->
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/air-datepicker@3.0.0/air-datepicker.css">--}}
    <link href="
https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.css
" rel="stylesheet">

    <!-- بارگذاری پلاگین AirDatepicker -->
{{--    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.0.0/air-datepicker.js"></script>--}}
    <script src="
https://cdn.jsdelivr.net/npm/air-datepicker@3.5.3/air-datepicker.min.js
"></script>

    <!-- بارگذاری زبان فارسی برای تقویم -->
    <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.0.0/i18n/datepicker.fa.js"></script>
</head>
<body>

<!-- فیلد تاریخ -->
<div>
    <label for="date">انتخاب تاریخ:</label>
    <input type="text" id="date" name="date" class="form-control" placeholder="انتخاب تاریخ" />
</div>

<!-- فعال‌سازی تقویم شمسی -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // تنظیمات به صورت شیء ارسال می‌شود
        const datepicker = new AirDatepicker('#date', {
            locale: 'fa', // زبان فارسی
            calendarType: 'jalali', // تقویم شمسی
            dateFormat: 'yyyy/MM/dd', // فرمت تاریخ
            view: 'years', // نمایش انتخاب سال
        });
    });
</script>

</body>
</html>
