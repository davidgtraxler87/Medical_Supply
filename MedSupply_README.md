# Medical Supply eCommerce Web Application

This web application is intended to allow a customer, or a representative of a medical institution, to order the medical supplies required to mainstain stock. The user can login/register, build a profile that will store the user's address and credit card information, and contact MedSupply with comments or questions. From the products page, the user will be able to select the quantity of a required product and invoke the "Add to cart" button. This will force a "Cart" icon to appear, which the user can click, taking them to the Orders page. From there, the user can press the "Purchase" button, which will clear the cart information, and fire a confirmation email to the email address in their profile. MedSupply is an e-commerce web application that is built for conceptual and learning purposes only.

## Getting Started

This application is intended to be accessed via a web browser. Until the application is deployed, please follow these instructions. This will get you a local copy of the project on your machine for development and testing purposes, only. 

### Prerequisites

If running from a browser, no installation is required. The popular web browser Google Chrome and Mozilla Firefox are recommended. 

If running from an IDE, install the following:
- XAMPP (open-sourced web server solution stack; includes Apache, mysql, and php)
- Composer (dependency manager)
- PHP compatible Integrated Development Environment(IDE; PhpStorm was used for this project)

### Installing

If running from a browser, no installation is required.
If running from an IDE, complete the following:
1. Download a ZIP file for the project and unzip the file. 
2. Ensure .env has proper database configuration set up; refer to laravel framework documentation for assistance
3. Open the terminal (like cmd or gitbash) and run the following commands:
- composer install 
- php artisan key:generate
- php artisan migrate
- php artisan serve


## Functionality

### Home
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_Home.JPG"  width="475" height="300">

### About
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_About.JPG" width="450" height="600">

### Products
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_Products.JPG" width="600" height="500">

### Contact
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_Contact.JPG" width="600" height="500">

### Login
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_Login.JPG" width="400" height="685">

### Register
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_Register.JPG" width="400" height="685">

### Profile 
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_Profile.jpg" width="400" height="685">

### Cart
<img src="https://github.com/davidgtraxler87/Medical_Supply/blob/master/MedSupplyScreenshots/MedSupply_Cart.JPG" width="400" height="685">


## Built With
* [PHP](https://www.php.net/) - Server-side scripting language
* [JavaScript](https://www.javascript.com/) - High-Level programming language
* [HTML](https://www.w3.org/html/) - Markup Language
* [CSS](https://developer.mozilla.org/en-US/docs/Web/CSS) - Style Sheet language
* [jQuery](https://jquery.com/) - JavaScript Library
* [Laravel](https://laravel.com/) - PHP web framework 
* [Bootstrap](https://getbootstrap.com/) - CSS framework
* [XAMPP](https://www.apachefriends.org/index.html) - open-sourced web server solution stack
* [Composer](https://getcomposer.org/) - Dependency Management
* [Colorlib](https://colorlib.com/wp/templates/) - Bootstrap template


## Authors

* **David Traxler** 



