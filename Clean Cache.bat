@echo off
title ShareTrail Cache cleaner
cls
echo Cleaning laravel cache, please wait...
php artisan cache:clear
php artisan route:cache
php artisan config:clear
php artisan view:clear
pause
exit