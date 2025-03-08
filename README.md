Laravel Portfolio
A personal portfolio website built with Laravel and Blade, featuring authentication and MySQL as the database. Deployed on Laravel Cloud for seamless hosting and scalability.

🚀 Features
🔒 User authentication (login, registration)
📄 Dynamic portfolio sections (projects, about, contact)
🖼️ Image uploads for portfolio items
📧 Contact form with email notifications
🎨 Blade templates for clean and structured views
🛠️ Tech Stack
Framework: Laravel 10
Frontend: Blade, Tailwind CSS (or Bootstrap if used)
Database: MySQL
Authentication: Laravel Breeze / Jetstream (if applicable)
Deployment: Laravel Cloud
📌 Requirements
Before you begin, ensure you have the following installed:

PHP 8.1+
Composer
MySQL
Laravel CLI
🔧 Installation
Follow these steps to set up the project locally:

bash
Copy
Edit
# Clone the repository
git clone https://github.com/your-username/laravel-portfolio.git

# Navigate to project folder
cd laravel-portfolio

# Install dependencies
composer install

# Create .env file
cp .env.example .env

# Generate application key
php artisan key:generate

# Set up the database
php artisan migrate --seed

# Start the development server
php artisan serve
🔑 Environment Variables
Make sure to configure your .env file with the necessary database and application settings:

ini
Copy
Edit
APP_NAME="Laravel Portfolio"
APP_ENV=production
APP_KEY=your-key
APP_DEBUG=false
APP_URL=https://your-laravel-cloud-url

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_user
DB_PASSWORD=your_password
🚀 Deployment on Laravel Cloud
Push your latest changes to GitHub
Connect your repository to Laravel Cloud
Deploy using Laravel Cloud’s automated build system
Run migrations on the server:
bash
Copy
Edit
php artisan migrate --force
php artisan config:cache
php artisan route:cache
Your portfolio is now live! 🎉
📜 License
This project is licensed under the MIT License.

🙌 Contributing
Feel free to fork this repository and submit a pull request for improvements.
