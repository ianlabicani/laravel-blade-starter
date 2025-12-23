# Laravel Blade Starter Template

A clean and minimal Laravel starter template with **Laravel Breeze** authentication and **RBAC-ready structure** for building role-based applications quickly. Perfect for projects that need user authentication, role management, and separate dashboards right out of the box.

## Features

-   ✨ **Laravel 12** - Latest Laravel framework
-   🔐 **Laravel Breeze** - Simple authentication scaffolding
-   👥 **RBAC Structure** - Role-based access control ready
-   🎨 **Tailwind CSS** - Modern utility-first CSS framework
-   🚀 **Role-Based Dashboards** - Separate dashboards for Super Admin, Admin, and users
-   📱 **Responsive Design** - Mobile-friendly layouts
-   🎯 **Font Awesome Icons** - Beautiful icons throughout
-   🎭 **No-Role Page** - Dedicated page for users without assigned roles
-   🧪 **Pest Testing** - Modern PHP testing framework

## Requirements

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   MySQL or any supported database

## Installation

### Creating a New Project from This Template

You can create a new project using Composer's `create-project` command:

```bash
composer create-project ianlabicani/laravel-blade-starter your-project-name
```

### Manual Installation

1. Clone the repository:

```bash
git clone https://github.com/ianlabicani/laravel-blade-starter.git your-project-name
cd your-project-name
```

2. Run the setup script:

```bash
composer run setup
```

This will automatically:

-   Install PHP dependencies
-   Copy `.env.example` to `.env`
-   Generate application key
-   Run database migrations
-   Install NPM dependencies
-   Build frontend assets

3. Configure your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4. Run migrations to create database tables:

```bash
php artisan migrate
```

5. (Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

## Available Scripts

This template includes several useful Composer scripts to streamline your development workflow:

### Setup Script

```bash
composer run setup
```

Sets up the entire project from scratch:

-   Installs all PHP dependencies
-   Creates `.env` file from example
-   Generates application key
-   Runs database migrations
-   Installs Node.js dependencies
-   Builds frontend assets

### Development Script

```bash
composer run dev
```

Starts all development services concurrently:

-   Laravel development server (`php artisan serve`)
-   Queue worker (`php artisan queue:listen`)
-   Vite dev server (`npm run dev`)

This uses `concurrently` to run all three services in one terminal window with color-coded output.

### Test Script

```bash
composer run test
```

Runs the test suite:

-   Clears configuration cache
-   Executes all Pest tests

## Project Structure

### Authentication Views

All authentication views are located in `resources/views/auth/`:

-   `login.blade.php` - User login
-   `register.blade.php` - User registration
-   `forgot-password.blade.php` - Password reset request
-   `reset-password.blade.php` - Password reset form
-   `verify-email.blade.php` - Email verification
-   `confirm-password.blade.php` - Password confirmation

### Layout Templates

-   `resources/views/public/layout.blade.php` - Public pages layout
-   `resources/views/admin/layout.blade.php` - Admin dashboard layout
-   `resources/views/super-admin/layout.blade.php` - Super Admin dashboard layout

### Role-Based Routing

-   `routes/web.php` - Public and dashboard routes
-   `routes/auth.php` - Authentication routes
-   `routes/admin.php` - Admin-only routes
-   `routes/super-admin.php` - Super Admin-only routes

### Models

-   `app/Models/User.php` - User model with role relationships
-   `app/Models/Role.php` - Role model

## Usage

### Running the Application

Start the development server:

```bash
composer run dev
```

Or manually start services:

```bash
# Terminal 1: Laravel Server
php artisan serve

# Terminal 2: Queue Worker
php artisan queue:listen

# Terminal 3: Vite Dev Server
npm run dev
```

Visit `http://localhost:8000` in your browser.

### Role Management

Users can have roles assigned through the `role_user` pivot table. The dashboard automatically redirects users based on their role:

-   **Super Admin** → Super Admin Dashboard
-   **Admin** → Admin Dashboard
-   **No Role** → No-Role Page (informational page)

### Customization

1. **Update branding**: Modify the app name in `resources/views/public/layout.blade.php`
2. **Customize colors**: Edit Tailwind classes throughout the views
3. **Add new roles**: Create migrations and update the Role model
4. **Extend dashboards**: Add new routes and views in respective role folders

## Testing

Run the test suite:

```bash
composer run test
```

Or use Pest directly:

```bash
./vendor/bin/pest
```

## Built With

-   [Laravel 12](https://laravel.com) - PHP Framework
-   [Laravel Breeze](https://laravel.com/docs/starter-kits#breeze) - Authentication Scaffolding
-   [Tailwind CSS](https://tailwindcss.com) - CSS Framework
-   [Font Awesome](https://fontawesome.com) - Icon Library
-   [Vite](https://vitejs.dev) - Frontend Build Tool
-   [Pest](https://pestphp.com) - Testing Framework

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Credits

Created by [Ian Labicani](https://github.com/ianlabicani)
