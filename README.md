# Library
Simple Symfony based Library

***Project was created using:***
  - Symfony 3.4.15 without Flex
  - MySQL
  - Bootstrap 4.1.3
  - Twig
  - Sass
  - Composer
  - Webpack
  - Encore
  - knp-paginator-bundle
  - FOS User Bundle
  - Data Fixtures

### instructions to run the project ###
  1. Prior to this test, you need to have SQL server configured and  running e.g. use XAMPP, LAMPP etc. clone the project, running in command line:
  
     ```
     git clone https://github.com/sauliusGTO3000/Library.git
     ```
     
  2. Once Project is cloned, navigate inside project directory('../Library/library'), run the following commands in command line:
  
      ```
      composer install
      ```
        when asked for additional details, proceed with following:
            - Database_host(127.0.0.1) press enter
           
            - Database_posrt press enter
            
            - Database_name(symphony): library
            
            - Database_user: username of your database, if you dont have one - press Enter
            
            - Database_password: password of your database, if you dont have one - press Enter
            
            - Mailer_transport(smtp): presss enter
            
            - Mailer_host(127.0.0.1): presss enter
            
            - Mailer_user(null): foo@bar.com
            
            - Mailer_password: presss enter
            
            - Secret: b53019dfef241757df4f98c2a1780cd5ee3322f4
            
      once that is complete, run the following commands:
      
      ```
      php bin/console doctrine:database:create
      ```
      ```
      php bin/console doctrine:schema:create
      ```
      ```
      yarn install
      ```
      ```
      yarn encore dev
      ```
      ```
      php bin/console doctrine:fixtures:load --append
      ```
      ```
      php bin/console server:run
      ```
      Leave this command line window open for the rest of the testing.
      
  3. Navigate to provided address in your browser, e.g. http://127.0.0.1:8000
  4. At this point - project has list of Authors and Categories loaded, you will need to proceed and register your user http://127.0.0.1:8000/register/  in order to create, edit, delete books
  
