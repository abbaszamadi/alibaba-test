### تنظیمات دیتابیس داکر
-- تنظیمات و کانفیگ های داکر برای  دیتابیس در پوشه ی env قرار دارد.

-- دو کلید MYSQL_USER و MYSQL_PASSWORD جهت اتصال لاراول به دیتابیس باید استفاده شوند.

### - ورژن استفاده شده لاراول :‌9.42.2 

### - نصب پروژه لاراول و  node به ترتیب دستورات زیر:
-- docker-compose run --rm composer install

-- docker-compose run --rm npm install

-- docker-compose run --rm composer migrate

-- docker-compose run --rm npm run build


### اجرای مقادیر تنظیمات اولیه
-- پس از نصب لاراول و اجرای migration ها دستور زیر جهت مقدار دهی اولیه action ها باید اجرا شود تا بتوان از سطح دسترسی استفاده کرد.
- docker-compose run --rm artisan db:seed
- docker-compose run --rm artisan add_actions
### - سیستم authentication
 - از ابزار breeze برای authentication استفاده شده است.
با ایجاد سطح دسترسی جدید میتوان مشخص کرد که چه کاربری بتواند چه کاری انجام دهد.
