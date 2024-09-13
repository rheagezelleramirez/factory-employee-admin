Run the setup script to start the project:

```bash
chmod +x setup.sh
./setup.sh
```

Technical Exam Requirements:

1. Create an admin panel to manage factories and their employees using Laravel Framework with a database.
- Basic Laravel Auth: ability to log in as administrator
- Use database seeds to create first user with email admin@admin.com and password "password"
- Add CRUD functionality (Create / Read / Update / Delete) for two menu items: Factories and Employees. You can use the default Laravel template.
- Factories DB table consists of the following fields: factory_name (required), location (required), email, website
- Employees DB table consists of the following fields: firstname (required), lastname (required), factory_id (foreign key to Factories), email, and phone
- Use database migrations to create those schemas above
- Use basic Laravel resource controllers with default methods - index, create, store, show, update, destroy etc.
- Use Laravel's validation function, using Request classes
- Use Laravel's pagination for showing Factories/Employees list, 10 entries per page
- We want to track the user activity. Create a Model Event Service that will capture all changes in eloquent model (Factories and Employees) events and log the model name, record id, changes ( old values and new values for updates only) and user id in the laravel.log.
- Use Laravel's starter kit for auth and basic themes, but remove ability to register
2. Code Structure (cleanliness of codebase)
