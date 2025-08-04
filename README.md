# PRODUCT-CATALOG-PHP

This is a simple project for managing a product catalog, developed in **native PHP** with a focus on **Hexagonal Architecture**. The project simulates an order and generates a PDF report, without the need for a database.

## 🚀 Getting Started

Follow these steps to get a copy of the project on your local machine and run it.

### Prerequisites

You need the following installed on your system:

  * **PHP**: Version 7.4 or higher.
  * **Composer**: For managing PHP dependencies.
  * **Local web server**: Such as Apache or Nginx (XAMPP, WAMP, or MAMP are good options to start).

### 🛠️ Installation

1.  **Clone the repository** to your local machine:

    ```bash
    git clone https://github.com/your-username/product-catalog-php.git
    cd product-catalog-php
    ```

2.  **Install Composer dependencies**:

    ```bash
    composer install
    ```

3.  **Web Server Configuration**:

      * Configure your local web server so that the project's root directory is the main folder (where `index.php` is located).
      * No database configuration is required.

4.  **Run the project**:

      * Open your browser and navigate to your local server's URL. For example: `http://localhost/product-catalog-php`.
      * To generate the PDF, visit `http://localhost/product-catalog-php/generate_pdf.php`.

-----

## 📂 Project Structure

  * `assets/`: Static files such as CSS, JavaScript, and images.
  * `src/`: Contains the application's source code, organized according to Hexagonal Architecture (Domain, Application, Infrastructure).
  * `tests/`: Project tests. Includes `data_test.php` with static test data.
  * `vendor/`: PHP dependencies installed by Composer.
  * `composer.json`: List of PHP dependencies.
  * `composer.lock`: Exact versions of the dependencies.
  * `data.php`: File where **order and page data are simulated**. It acts as an "Infrastructure" layer in this project.
  * `generate_pdf.php`: Script for generating PDFs.
  * `index.php`: The web application's entry point that displays the order details.

-----

## 📄 License

This project is licensed under the MIT License. For more details, see the [LICENSE](https://www.google.com/search?q=LICENSE) file.

-----

## 🤝 Contributions

Contributions, issues, and suggestions are welcome. Feel free to open an issue or submit a pull request.
