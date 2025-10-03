# PaliStore: An Ethical E-commerce Aggregator

PaliStore is a web application built with the Laravel framework designed to promote ethical consumerism. It functions as an e-commerce aggregator that scrapes product data from various online stores, filters them based on ethical criteria (e.g., excluding boycotted brands), and presents them to the user.

The application includes a comprehensive admin panel for analytics, a user authentication system, a product management interface, and a news section populated by scraping live news sources.

## Table of Contents

  - [About The Project](https://www.google.com/search?q=%23about-the-project)
  - [Key Features](https://www.google.com/search?q=%23key-features)
  - [Technology Stack](https://www.google.com/search?q=%23technology-stack)
  - [Getting Started](https://www.google.com/search?q=%23getting-started)
      - [Prerequisites](https://www.google.com/search?q=%23prerequisites)
      - [Installation](https://www.google.com/search?q=%23installation)
  - [Usage](https://www.google.com/search?q=%23usage)
      - [Data Scraping](https://www.google.com/search?q=%23data-scraping)
      - [Admin Panel](https://www.google.com/search?q=%23admin-panel)
  - [Testing](https://www.google.com/search?q=%23testing)
  - [Project Structure](https://www.google.com/search?q=%23project-structure)
  - [License](https://www.google.com/search?q=%23license)

## About The Project

PaliStore was created to provide consumers with a "murder-free" shopping alternative. Its core functionality revolves around using Laravel Dusk for browser automation to scrape product information—including titles, images, and links—from specified e-commerce websites.

The scraped data is then saved to a local database. The system is designed to specifically filter out and exclude products from certain brands during the scraping process. In addition to products, the application also scrapes news articles from sources like Al Jazeera to keep users informed.

The project features a robust backend with distinct functionalities:

  * **User-facing:** A product listing, a news/blog section, user registration/login, and donation information pages.
  * **Admin-facing:** A dashboard with analytics on site visits, user counts, and product statistics, along with full CRUD (Create, Read, Update, Delete) functionality for managing the product database.

## Key Features

  * **Automated Product Scraping:** Utilizes Laravel Dusk to automatically gather product data from e-commerce sites like Punjab Cash and Carry[cite: 2180].
  * **Ethical Brand Filtering:** Excludes specified brands (e.g., Nestle, Pepsi) during the scraping process[cite: 2183].
  * **Automated News Scraping:** Scrapes live news content from Al Jazeera to populate the blog section[cite: 2156].
  * **Admin Analytics Dashboard:** Provides administrators with key metrics, including total site views, user sign-ups, and product counts broken down by source[cite: 13, 14, 17, 18, 19, 23].
  * **Full Product Management:** Admin interface for Creating, Reading, Updating, and Deleting products in the database[cite: 2014, 2022, 2004].
  * **User Authentication:** Standard registration and login system for users[cite: 64, 69].
  * **Visit Tracking:** Logs visitor IP addresses to track site views[cite: 77, 78].
  * **RESTful API for Data:** Includes API endpoints for fetching data for analytics charts and product searches[cite: 2153, 2154].

## Technology Stack

  * **Backend:** PHP 8.1+, Laravel 10
  * **Database:** MySQL
  * **Frontend:** Blade Templates, Bootstrap, Vanilla JavaScript
  * **Testing & Scraping:** Laravel Dusk, PHPUnit
  * **Development Environment:** Vite

## Getting Started

Follow these instructions to get a local copy of the project up and running for development and testing purposes.

### Prerequisites

Ensure you have the following installed on your system:

  * PHP (version `^8.1` recommended) [cite: 177]
  * Composer
  * Node.js & NPM
  * A database server (e.g., MySQL)
  * A configured Chrome/Chromium browser for Laravel Dusk

### Installation

1.  **Clone the repository:**

    ```bash
    git clone https://your-repository-url.com/palistore.git
    cd palistore
    ```

2.  **Install PHP dependencies:**

    ```bash
    composer install
    ```

3.  **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

4.  **Set up the environment file:**
    Copy the example environment file and generate an application key.

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Configure your `.env` file:**
    Open the `.env` file and update the database credentials (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`) and other environment variables like `APP_URL`.

    ```dotenv
    APP_NAME=PaliStore
    APP_URL=http://localhost:8000

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=palistore
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6.  **Run database migrations:**
    This will create all the necessary tables in your database.

    ```bash
    php artisan migrate
    ```

7.  **Build frontend assets:**

    ```bash
    npm run dev
    ```

8.  **Serve the application:**

    ```bash
    php artisan serve
    ```

    Your application should now be running at `http://localhost:8000`.

## Usage

### Data Scraping

The application's core product and news data is populated via Laravel Dusk browser tests. You must have a compatible version of ChromeDriver installed and running.

1.  **Install Dusk Driver:**
    ```bash
    php artisan dusk:install
    ```
2.  **Scrape Products:**
    Run the `ScrapeEcommerceSiteTest` to populate the `products` table.
    ```bash
    php artisan dusk tests/Browser/ScrapeEcommerceSiteTest.php
    ```
3.  **Scrape News:**
    Run the `NewsTest` to populate the `info` table for the blog.
    ```bash
    php artisan dusk tests/Browser/NewsTest.php
    ```

### Admin Panel

The admin panel provides analytics and database management tools.

  * **Access:** Navigate to `/admin` in your browser.
  * **Login:** Use the credentials for a user in the `admin` table. You may need to create one manually or build a seeder.
  * **Features:**
      * View site analytics, including charts for visitor traffic[cite: 1979].
      * Manage products: Add, update, and delete product listings[cite: 1980, 1981, 1982].

## Testing

The application includes unit, feature, and browser tests.

  * **Run all PHPUnit tests (Unit & Feature):**

    ```bash
    php artisan test
    ```

  * **Run all Dusk browser tests:**
    Ensure your `.env` file is configured and ChromeDriver is running.

    ```bash
    php artisan dusk
    ```

## Project Structure

  * `app/Http/Controllers`: Contains the main application logic for handling web requests (e.g., `productController`, `DataController`).
  * `app/Models`: Defines the Eloquent models that interact with the database (e.g., `scrapped_data`, `testt`, `Visit`).
  * `config`: Stores all application configuration files.
  * `database/migrations`: Contains the database schema definitions.
  * `resources/views`: Holds all the Blade templates for the frontend.
  * `routes`: Defines all web and API routes (`web.php`, `api.php`).
  * `tests/Browser`: Contains the Laravel Dusk tests used for data scraping and browser automation.

## License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).