# Juke Task
[Short-description about what project does]

[![Commitizen friendly](https://img.shields.io/badge/commitizen-friendly-brightgreen.svg)](http://commitizen.github.io/cz-cli/)

[Describe Project]

## Requirements

- Project Configuration:
  - Create a new Laravel project using Composer. ✅
  - Configure database and necessary credentials at .env file ✅

- Migration and Model:
  - Create a Task model with the necessary fields (id, title, description, user_id). ✅
  - Create a migration to tasks table ✅

- Controller and Routes:
  - Create a TaskController controller with methods to list, create, update and delete tasks.
  - Configure nominated routes to each one operation.

- Authentication:
  - Use the Laravel's default authentication system.
  - TaskController's routes must demand authorization.

- Database Query:
  - In tasks listing, return the tasks associated with authenticated user.

- Use MVC Design Pattern:
  - Consider responsibilities's separation using Service Classes or Repositories

- Firebase Integration:
  - Utilize the Firebase's library to notify the front-end with tasks changes (optional)

## Installation and Setup