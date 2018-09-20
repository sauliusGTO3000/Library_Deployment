# Library
Simple Symfony based Library


A simple web page for image uploading. Project is temporarily deployed on https://www.sauliusgto3000.lt until 9/19/2018

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

### instructions to run the project ###
  1. clone the project
  
     ```
     https://github.com/sauliusGTO3000/Library.git
     ```
     
  2. inside project directory, run the following:
  
      ```
      composer install
      ```
        when asked for additional details, proceed with following:
            - Database_host(127.0.0.1) press enter
            - Database_posrt press enter
            - Database_name(symphony): library
            - Database_user: root
            - Database_password: root
            - Mailer_transport(smtp): presss enter
            - Mailer_host(127.0.0.1): presss enter
            - Mailer_user(null): foo@bar.com
            - Mailer_password: presss enter
            - Secret: presss enter

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
      php bin/console server:run
      ```
  3. Navigate to provided address in your browser, e.g. http://127.0.0.1:8000
  
