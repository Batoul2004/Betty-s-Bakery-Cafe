# Betty-s-Bakery-Cafe
Responsive webapp for Managing bakerycustomer interactions Includes Menudisplay Order booking Tracking Admin dashboard for inventory and sales User authentication for admins and customers Technologies HTML CSS JavaScript PHP MySQL Bootstrap. For viewing &amp; personal use only Running the code is permitted. Modification &amp; redistribution are not allowed
# Betty's Bakery and Cafe

A responsive and user-friendly web application for managing bakery operations and customer interactions.

## Features

- **Online Menu:** Displays bakery items with descriptions, prices, and images.
- **Order Placement and Tracking:** Customers can place and track their orders online.
- **Admin Dashboard:** Manage inventory, track sales, and monitor customer orders.
- **Secure Authentication:** User authentication system for admins and customers.

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL

## Installation

### Prerequisites
- A web server with PHP installed (e.g., XAMPP, WAMP, or LAMP).
- MySQL database.
- Git (optional, for cloning the repository).

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/bettys-bakery.git
   ```

2. Navigate to the project directory:
   ```bash
   cd bettys-bakery
   ```

3. Import the database:
   - Open your database management tool (e.g., phpMyAdmin).
   - Create a new database (e.g., `bettys_bakery`).
   - Import the SQL file located in the `database/` folder.

4. Configure the database connection:
   - Open the `config.php` file in the project.
   - Update the database credentials:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_NAME', 'bettys_bakery');
     define('DB_USER', 'your_db_user');
     define('DB_PASS', 'your_db_password');
     ```

5. Start the server:
   - If using XAMPP, move the project folder to the `htdocs` directory and start Apache and MySQL.
   - Access the application via `http://localhost/bettys-bakery`.

## Usage

1. **Admin Login:**
   - Navigate to the admin panel at `http://localhost/bettys-bakery/admin`.
   - Use the default admin credentials (update in the database after the first login).

2. **Customer Features:**
   - Browse the menu, add items to the cart, and place orders.
   - Track order status via the customer dashboard.

## Screenshots

*Include some screenshots of the application (e.g., menu page, admin dashboard, order tracking).*

## Contributing

1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature-name
   ```
3. Make your changes and commit them:
   ```bash
   git commit -m "Add feature description"
   ```
4. Push to the branch:
   ```bash
   git push origin feature-name
   ```
5. Open a pull request.

## License

Note: This project is for viewing and personal use only. Running the code is permitted, but modification or redistribution is not allowed.

---

Feel free to suggest improvements or report bugs in the [issues section](https://github.com/batoul04/bettys-bakery/issues).
