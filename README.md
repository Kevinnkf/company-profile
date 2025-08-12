# Company Profile Project

This project is a simple PHP application that displays a company profile using XAMPP and MySQL as the database. 

## Project Structure

```
company-profile
├── src
│   ├── index.php
│   ├── config
│   │   └── database.php
│   ├── controllers
│   │   └── CompanyController.php
│   ├── models
│   │   └── Company.php
│   ├── views
│   │   └── profile.php
├── public
│   └── assets
│       └── style.css
├── README.md
```

## Setup Instructions

1. **Install XAMPP**: Download and install XAMPP from the official website.

2. **Start Apache and MySQL**: Open the XAMPP Control Panel and start the Apache and MySQL services.

3. **Create Database**: Open phpMyAdmin (usually at `http://localhost/phpmyadmin`) and create a new database named `company_profile`.

4. **Import Database Schema**: Create a table named `companies` with the following structure:
   - `id` INT AUTO_INCREMENT PRIMARY KEY
   - `name` VARCHAR(255) NOT NULL
   - `description` TEXT NOT NULL

5. **Configure Database Connection**: Edit the `src/config/database.php` file to set your database connection parameters.

6. **Run the Application**: Place the `company-profile` folder in the `htdocs` directory of your XAMPP installation. Access the application by navigating to `http://localhost/company-profile/src/index.php` in your web browser.

## Usage

- The application retrieves and displays the company profile from the database.
- You can modify the `src/models/Company.php` file to add more properties or methods as needed.
- Update the `src/views/profile.php` file to change the layout or design of the company profile page.

## Contributing

Feel free to fork the repository and submit pull requests for any improvements or features you would like to add.

## License

This project is open-source and available under the MIT License.