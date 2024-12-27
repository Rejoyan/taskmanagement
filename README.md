# Task Management API

## Setup
1. Clone the repository.
2. Run `composer install`.
3. Create a `.env` file and set up your database configuration.
4. Run `php artisan migrate` to set up the database.
5. Start the server using `php artisan serve`.

## Endpoints
### Add a Task
**POST** `/api/tasks`  
Body: `{ "title": "Your Task" }`

### Mark Task as Completed
**PATCH** `/api/tasks/{id}`  
Body: `{ "is_completed": true }`

### Get Pending Tasks
**GET** `/api/tasks`
