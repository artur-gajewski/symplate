Symplate
========

Have you ever noticed how repeatative starting a new Symfony2 project is? You always need to install the framework, build the layout, apply 3rd party bundles, etc...

The purpose of Symplate is to offer you modern looking template to start you off with:

- fully responsive layout (bootstrap)
- multi-lingual interface
- RSS feed capability (eko/feedbundle)
- Gravatar implementation (ornicar/gravatar-bundle)
- Pagination (knplabs/knp-paginator-bundle)
- Javascript routing (friendsofsymfony/jsrouting-bundle)
- Fixtures for testing (xi/fixtures)
- Date converting filters (artur-gajewski/date-converter-bundle)
- Google analtyics (antimattr/google-bundle)
- Doctrine migrations

#Installation

Clone this project to your drive:

    $ git clone git@github.com:artur-gajewski/symplate.git

Now go to your newly created directory.

Copy the distribution file for the parameters to your local file:

    $ cp app/config/parameters.yml-dist app/config/parameters.yml

Modify the parameters.yml to reflect your database connections and smtp settings.

Create the following directories inside app folder:

- cache
- logs

Prepare cache and logs folder permissions by running (double check your apache user on the first one):

    $ sudo chmod -Rf +a "daemon allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
    $ sudo chmod -Rf +a "`whoami` allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    $ curl -s https://getcomposer.org/installer | php

Then, use the `install` command to install all dependancies:

    $ php composer.phar install

After all dependancies are installed, make sure your app/cache and app/logs
folder have write access. If there is no write access, the web server might
output an internal error.

#JavaScript routes:

Available routes needs to be provided for the frontend too:

    $ app/console fos:js-routing:dump

#Google Analytics

This application comes bundled with Google Bundle by antimattr/GoogleBundle. You can configure
your Google Analytics parameters in app/config/google.yml file. By default, Google Analytics is
disabled. You need to enable it by changing enable_google_analytics parameter to true in
app/config/parameters.yml file.

For more features of Google Bundle, refer to https://github.com/antimattr/GoogleBundle

#Contributing

We welcome any developers with various skills and background. Anyone is free to join the team and develop Symplate.

If you want to join the team, please contact me and provide me with your github account ID so that I can add you to the team.

#Welcome

Enjoy and thanks for your interest toward Symplate project.

Artur Gajewski

info@arturgajewski.com

Skype: artur.t.gajewski

