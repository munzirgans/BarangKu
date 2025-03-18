# MyInvento App
## Summary
**MyInvento** is a simple and efficient inventory management app that allows users to add, edit, delete, and track item data effortlessly. The dashboard provides insights into total items, total inventory value, newly added items, and the most expensive item. With authentication, form validation, responsive and user-friendly website design. **MyInvento** was created to complete the test case task for the Full-Stack Developer job application at **AssistXEnterprise**.

## Tech Stack
Tech stack used in the development of **MyInvento App** includes:
- Laravel 12 – Monolith (FE & BE)
- MySQL – Database Management System
- Bootstrap 4 – Frontend styling
- SB Admin 2 – Admin dashboard template

## Project Setup
Here are the steps to set up the MyInvento-App project:
1. Clone repository
    ```
    git clone https://github.com/munzirgans/MyInvento-App.git
    cd MyInvento-App
    ```
2. Install Dependencies with Composer
    ```
    composer install
    ```

3. Copy the Environment File

    Copy the .env.example then paste it to .env

4. Generate the Application Key
    ```
    php artisan key:generate
    ```
5. Configure Database in .env

    Modify the following values according to your database credentials, this app using MySQL as DBMS, so don't forget to change value of `DB_CONNECTION` variable:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

6. Run Database Migrations
    ```
    php artisan migrate
    ```
7. Start the Laravel Development Server
    ```
    php artisan serve
    ```
8. Access MyInvento-App at http://localhost:8000

    Enjoy exploring MyInvento-App! 😊.
