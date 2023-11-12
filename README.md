# Basic-E-Commerce

A basic e-commerce site built using PHP, Alpine.js and Tailwind CSS.

## Prerequisite

- Have Docker installed
- Have Docker Compose installed
- Have NodeJs and NPM installed (optional but preferred)
- Have Composer installed (optional but preferred)

## Getting Started

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/AlstonChan/Basic-E-Commerce
    ```

2. Then run the docker commands to spin up the container.

    ```bash
    docker-compose up -d
    ```

3. Next you need to install required npm packages and composer packages, populate env file then build CSS output file.

    If you do not have either `composer` or `npm` installed on your machine, you may use these tools in the container rather than having to download the tools. If you already have these tools install, you may skip the first *3* steps instead, unless your version of downloads output error when executing.

    1. Enter the container bash by using `exec` command

        ```bash
        docker exec -it commerce-php8.2 bash
        ```

    2. Next, change directory (cd) to where all the files are mounted to the container

        ```bash
        cd /var/www/default
        ```

    3. To confirm you are in the correct directory:
        - Enter `pwd` should return `/var/www/default`
        - Enter `ls -al` should list all the file you just clone

    4. Install `npm` packages and build CSS file. Here we build the css in watch mode, intended for development only, for more options, look at the **NPM Options** section.

        ```bash
        npm install
        npm run css:dev
        ```

    5. Install `composer` packages

        ```bash
        composer install
        ```

    6. Populate env file:

        ```env
        cp .env.sample .env
        ```

4. Navigate to <http://localhost:3000> to visit the page or visit <http://localhost:3001> for **`phpmyadmin`** page.

## NPM Options

1. **`npm run css:dev`** : Compile tailwind css in watch mode, updating the css on save, do not minify the css, suitable for development.
2. **`npm run css:prod`** : Compile tailwind css once and minify the css, suitable for production.

## Additional Configuration File

### httpd.conf

The configuration file for apache2.4

### php.ini

The configuration file for php 8.2

### .jsbeautifyrc

The configuration file for vscode extension **PHP Intelephense**, works with the extension to provide further code formatting capabilities. The full configuration can be found on [beautify GitHub](https://github.com/beautify-web/js-beautify#css--html).
