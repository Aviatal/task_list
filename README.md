
# Task List App

A simple task list application built with Laravel. The application allows users to add, edit, view, and delete tasks, as well as mark them as completed.

## Requirements

Before you begin, ensure you have the following installed:

- PHP >= 8.0
- Composer
- Node.js (for frontend development with Tailwind CSS)
- Laravel

## Installation

Follow these steps to set up the application:

### 1. Clone the repository

```bash
git clone <repository-url>
cd <project-directory>
```

### 2. Install dependencies

Run the following command to install the required PHP dependencies via Composer:

```bash
composer install
```

### 3. Set up environment variables

Copy the `.env.example` file to create your `.env` file:

```bash
cp .env.example .env
```

Then, generate the application key:

```bash
php artisan key:generate
```

### 4. Set up the database

Edit the `.env` file and configure the database connection. Example for MySQL:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_list
DB_USERNAME=root
DB_PASSWORD=
```

After updating the `.env` file, run the following command to migrate the database and seed it if necessary:

```bash
php artisan migrate
php artisan db:seed # Optional: Seed the database with some initial data
```

### 5. Install frontend dependencies

Run the following command to install the required frontend dependencies using npm:

```bash
npm install
```

Then, build the frontend assets:

```bash
npm run dev
```

### 6. Start the local development server

You can now start the Laravel development server using Artisan:

```bash
php artisan serve
```

This will start the server at `http://127.0.0.1:8000`, and you should be able to access the application in your browser.

## Usage

- **Task List Page**: Displays all tasks.
- **Add Task**: Allows you to add a new task.
- **Edit Task**: Allows you to edit an existing task.
- **View Task**: Displays the details of a specific task.
- **Delete Task**: Deletes a task from the list.
- **Mark as Completed**: Allows you to toggle the completion status of a task.

## Styling

The styling of this application was handled by **Artificial Intelligence**, ensuring a modern and responsive layout using **Tailwind CSS**.

## Contributing

Feel free to submit issues and pull requests. If you encounter bugs or have feature requests, let me know!

## License

This project is open-source and available under the [MIT License](LICENSE).
