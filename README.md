<h3>Prerequisites</h3>

This application was created using Laravel 11 and Vanilla Javascript


Completed Stories

1 - Create a shopping list that can contain a list of groceries (groceries will exist in 'products' table of database)

2 - Create a way for a user to add an item to the shopping list

3 - Create a way for user to remove an item to the shopping list

4 - When I’ve bought something from my list I want to be able to cross it off the list

5 - Persist the data so I can view the list if I move away from the page

7 - Display the total cost for the whole shop

8 - Spending limit in place which can be set/reset by the user

9 - Ability to share shopping list via email

10 - Add a login system to persist shopping lists for different users (Registration and login system)


Incomplete Stories (not enough time left)

6 - Create a way for user to be able to change the order of items in their shopping list



<h3>How to setup</h3>

- git clone https://github.com/alexsomersetdesign/shopping-app-laravel.git
- cd shopping-app-laravel
- composer install
- npm install
- cp .env.example .env

Please now add credentials to .env for database and mail and then run the following commands

- php artisan key:generate
- php artisan config:clear
- php artisan migrate
- php artisan db:seed --class=ProductsTableSeeder

Please now run the following

- npm run build
- php artisan serve






- Register a user and login

If there are any issues whatsoever, please do not hesitate to contact me.

  

