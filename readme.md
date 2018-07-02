

## Installation
If you want to run this demo project, follow these steps:

## Installation - pre-requisite:
1. install xampp on your local machine
2. install visual studio code editor
3. lone this repo i.e download this project files.


1. Clone this repo.
2. Copy contents of `.env.example` to a `.env` file.
3. Update `DB_DATABASE` , `DB_USERNAME` and `DB_PASSWORD` with your database details.
4. Sign up for an account on [Mailtrap](https://mailtrap.io/) and copy the SMTP `username` and `password` and update the `MAIL_USERNAME` and `MAIL_PASSWORD` with the same on your `.env` file.
5. Open Terminal in your Code editor Run `php artisan migrate` to migrate the database.
6. also Run `php artisan key:generate` to generate `APP_KEY`.
7. You're all good to go. Run `php artisan serve` and the app should be up and running.


Open Terminal in your Code editor run php tinker to create defualt suport type in the db
Open Terminal in your Code editor php artisan tinker

finally run copy the below into visual studio code terminal and hit enter

$category = new App\Surport
$category->name = "Technical"
$category->save()

everything should work just fine :-)
