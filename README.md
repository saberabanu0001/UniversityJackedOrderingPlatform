# University Jacket Ordering Platform

This project is a **web-based platform** designed to simplify and standardize the ordering process for university jackets. It provides an intuitive interface for university members to browse, select, and order jackets while ensuring efficient order management.

---

## Features

- **User Authentication**: Secure login, registration, and profile management.
- **Product Catalog**: Display of available jacket options.
- **Order Management**: Users can place, track, and update their orders.
- **Contact and Support**: Dedicated contact page for inquiries.
- **Responsive Design**: Ensures usability across devices.

---

## Project Structure

UniversityJackedOrderingPlatform/ │ ├── image/ # Directory for image assets ├── node_modules/ # Node.js dependencies (if applicable) │ ├── aboutUs.php # About Us page ├── contact.php # Contact page for inquiries ├── db_connect.php # Database connection file ├── home.php # Homepage for the platform ├── login.php # User login page ├── logout.php # User logout functionality ├── products.php # Product catalog page ├── profile.php # User profile page ├── profile_update.php # Profile update functionality ├── register.php # User registration page ├── register_post.php # Registration handling script ├── shop_now.php # Page for browsing and ordering jackets ├── styles.css # Global stylesheet for the platform

---

## Installation and Setup

### Prerequisites

- **XAMPP** (Apache, PHP, MySQL)
- **Git** (for cloning the repository)

### Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/UniversityJacketOrderingPlatform.git
   cd UniversityJacketOrderingPlatform
Move to htdocs: Place the project folder in C:\xampp\htdocs.

Set Up the Database:

Open phpMyAdmin.
Create a new database (e.g., university_jackets).
Import the db_connect.php schema or any provided .sql file.
Start XAMPP Services:

Open the XAMPP Control Panel.
Start Apache and MySQL.
Run the Platform: Open a browser and navigate to:

http://localhost/UniversityJacketOrderingPlatform
Usage
Browse Products:

View available jacket options on the shop_now.php page.
Register/Login:

Create an account or log in using the register.php or login.php pages.
Manage Profile:

Update personal information via the profile_update.php page.
Place Orders:

Select a jacket and place an order through the product catalog.
Technologies Used
Backend: PHP, MySQL
Frontend: HTML, CSS, JavaScript
Database: MySQL
Future Enhancements
Order History: Add a page to display users' past orders.
Admin Panel: Manage products and orders from an admin dashboard.
Payment Integration: Add payment gateways for seamless transactions.
License
This project is licensed under the MIT License.

Author
Developed by SABERA BANU.
