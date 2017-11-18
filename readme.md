# Basic Authentication And Signup [BAS]
The project is developed using CodeIgniter 3.0,Jquery,Jquery Validation,Mysql,Bootstrap 3.0 ,HTML,CSS .

## Aim of Project
The aim of the project is to demonstrate the authentication system using PHP password_hash() and PASSWORD_BCRYPT algorithm,
the project also has a signup system which checks for redundancy based on the email address disallowing users registering with same email address.

The post login page displays the users data stored in the mysql db while registration.



## Installation Requirement
1. PHP 5.6 or above with working password_hash()
2. Mysql 4 or above
3. Apache with mod_rewrite enabled

## Steps to install
1. Create a db user and note down the credentials
2. Upload the project files to the host
3. Goto Project->Application->config folder
4. Look for database.php file , enter the credentials for db in this file
5. now open the config.php file in the same folder, enter the url of the project that you would like to use , this can be your domain name
   ex: $config['base_url'] = 'http://localhost/BasicAuthenticationAndSignup'
6. Now we need to migrate the database schema to the host db, once you have completed all above steps , goto to following url
   ex: http://BasicAuthenticationAndSignup.com/migrate-now
7. The above step will create db schema , now the installation is complete , yu can now visit he url you configured earlier .




