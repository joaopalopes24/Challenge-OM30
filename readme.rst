# Challenge OM30

This system was created in order to meet the challenge proposed by the company OM30. We are working with CodeIgniter 3 on this project.

- CodeIgniter - https://github.com/bcit-ci/CodeIgniter/tree/3.1-stable

For the front-end we are basing most of the project on the AdminLTE 3 template, which can be found at https://adminlte.io/themes/v3/index.html.

- BootStrap v4.6 - https://github.com/twbs/bootstrap/tree/v4-dev

## About this project

- Initial Date: 08/06/2021
- Developer: João Pedro Lopes
- Status: `Finalizado`
- Conclusion Date: 18/06/2021

### Requirements
- PHP >= 5.6
- CodeIgniter = v3.1.11
- PostgreSQL v9.6

### How to install
- Clone the project
    ```bash
        git clone https://github.com/joaopalopes24/Challenge-OM30.git
    ```

- Update the database settings
    - application > config > database.php 
    ```php
        	'hostname' => 'desafio-postgres',
          'username' => 'desafio',
          'password' => '123456',
          'database' => 'desafio-ci',
          'dbdriver' => 'postgre',
    ```

- Run Migrations with Seeders
    ```bash
        Access the controller Migrate.php
    ```

## Observation
- When put into production, remove the readme.md and the reference files to avoid uploading to the production system