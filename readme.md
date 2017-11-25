

## User email verification with laravel
This repository contains code discussed in the blog post here: https://phpbits.in/email-verification-with-laravel-5-5/

## Installation
If you want to run this demo project, follow these steps:

1. Clone this repo.
2. Copy contents of `.env.example` to a `.env` file.
3. Update `DB_DATABASE` , `DB_USERNAME` and `DB_PASSWORD` with your database details.
4. Sign up for an account on [Mailtrap](https://mailtrap.io/) and copy the SMTP `username` and `password` and update the `MAIL_USERNAME` and `MAIL_PASSWORD` with the same on your `.env` file.
5. Run `php artisan migrate` to migrate the database.
6. Run `php artisan key:generate` to generate `APP_KEY`.
7. You're all good to go. Run `php artisan serve` and the app should be up and running.
