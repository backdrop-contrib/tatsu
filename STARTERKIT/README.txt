BUILD A THEME WITH ZEN
----------------------

The base Zen theme is designed to be easily extended by its sub-themes. You
shouldn't modify any of the CSS or PHP files in the zen/ folder; but instead you
should create a sub-theme of zen which is located in a folder outside of the
root zen/ folder. The examples below assume zen and your sub-theme will be
installed in sites/all/themes/, but any valid theme directory is acceptable
(read the sites/example.sites.php for more info.)

  Why? To learn why you shouldn't modify any of the files in the zen/ folder,
  see https://drupal.org/node/245802


*** IMPORTANT NOTE ***
*
* In Drupal 7, the theme system caches which template files and which theme
* functions should be called. This means that if you add a new theme,
* preprocess or process function to your template.php file or add a new template
* (.tpl.php) file to your sub-theme, you will need to rebuild the "theme
* registry." See https://drupal.org/node/173880#theme-registry
*
* Drupal 7 also stores a cache of the data in .info files. If you modify any
* lines in your sub-theme's .info file, you MUST refresh Drupal 7's cache by
* simply visiting the Appearance page at admin/appearance.
*

There are 2 ways to create a Zen sub-theme:
1. An automated way using Drush
2. The manual way


CREATING A SUB-THEME WITH DRUSH
-------------------------------

 1. Install Drush. See https://github.com/drush-ops/drush for details.

 2. Ensure drush knows about the zen command.

    After you have installed Zen, Drush requires you to enable the Zen theme
    before using Zen's Drush commands. To make the drush zen command available
    to use, type:

      drush en zen -y

 3. See the options available to the drush zen command by typing:

      drush help zen

 4. Create a sub-theme by running the drush zen command with the desired
    parameters. IMPORTANT: The machine name of your sub-theme must start with an
    alphabetic character and can only contain lowercase letters, numbers and
    underscores. Type:

      drush zen [machine_name] [name] [options]

    Here are some examples:
    * Use:  drush zen "Amazing name"
      to create a sub-theme named "Amazing name" with a machine name
      (automatically determined) of amazing_name, using the default options.
    * Use:  drush zen zomg_amazing "Amazing name"
      to create a sub-theme named "Amazing name" with a machine name of
      zomg_amazing, using the default options.
    * Use:  drush zen "Amazing name" --path=sites/default/themes --description="So amazing."
      to create a sub-theme in the specified directory with a custom
      description.

 5. Check your website to see what themes are used as the default and admin
    themes. Type:

      drush status theme

 6. Set your website's default theme to be the new sub-theme. Type:

      drush vset theme_default zomg_amazing

      (Replace "zomg_amazing" with the actual machine name of your sub-theme.)

 7. Skip to the "ADDITIONAL SETUP" section below to finish creating your
    sub-theme.


CREATING A SUB-THEME MANUALLY
-------------------------------

 1. Setup the location for your new sub-theme.

    Copy the STARTERKIT folder out of the Tatsu/ folder and rename it to be your
    new sub-theme. IMPORTANT: The name of your sub-theme must start with an
    alphabetic character and can only contain lowercase letters, numbers and
    underscores.

    For example, copy the sites/all/themes/tatsu/STARTERKIT folder and rename it
    as sites/all/themes/foo.

      Why? Each theme should reside in its own folder. To make it easier to
      upgrade Tatsu, sub-themes should reside in a folder separate from the base
      theme.

 2. Setup the basic information for your sub-theme.

    In your new sub-theme folder, rename the STARTERKIT.info.txt file to include
    the name of your new sub-theme and remove the ".txt" extension. Then edit
    the .info file by editing the name and description field.

    For example, rename the foo/STARTERKIT.info file to foo/foo.info. Edit the
    foo.info file and change "name = Tatsu Sub-theme Starter Kit" to "name = Foo"
    and "description = Read..." to "description = A Tatsu sub-theme".

      Why? The .info file describes the basic things about your theme: its
      name, description, CSS files, and JavaScript
      files. See the Backdrop CMS developer documentation for more info:
      https://api.backdropcms.org/themes

 3. Edit your sub-theme to use the proper function names.

    Edit the template.php and theme-settings.php files in your sub-theme's
    folder; replace ALL occurrences of "STARTERKIT" with the name of your
    sub-theme.

    For example, edit foo/template.php and foo/theme-settings.php and replace
    every occurrence of "STARTERKIT" with "foo".

    It is recommended to use a text editing application with search and
    "replace all" functionality.

 4. Set your website's default theme.

    Log in as an administrator on your Backdrop CMS site, go to the Appearance page at
    admin/appearance and click the "Enable and set default" link next to your
    new sub-theme.

    Make sure that you also enable the Tatsu theme.


ADDITIONAL SETUP
----------------

Your new Tatsu sub-theme uses Gulp.js as a task runner, so that it can do many
different tasks automatically:
 - Build your CSS from your Sass using libSass and node-sass.
 - Add vendor prefixes for the browsers you want to support using Autoprefixer.
 - Watch all of your files as you develop and re-build everything on the fly.

Set up your front-end development build tools:

 1. Install Node.js and npm, the Node.js package manager.

    Detailed instructions are available on the "npm quick start guide":
    https://github.com/kss-node/kss-node/wiki/npm-quick-start-guide

 2. The package.json file in your new sub-theme contains the versions of all the
    Node.js software you need. To install them run:

      npm install

 3. Install the gulp-cli tool globally. Normally, installing a Node.js globally
    is not recommended, which is why both Gulp and Grunt have created wrapper
    commands that will allow you to run "gulp" or "grunt" from anywhere, while
    using the local version of gulp or grunt that is installed in your project.
    To install gulp's global wrapper, run:

      npm install -g gulp-cli

 4. Set the URL used to access the Drupal website under development. Edit your
    gulpfile.js file and change the options.drupalURL setting:

      options.drupalURL = 'http://localhost';

 5. The default gulp task will build your CSS. To run the default gulp task, type:

      gulp

    To watch all your files as you develop, type:

      gulp watch


We would like to acknowledge the work done by John Albin and others with the Zen
theme for Drupal. We used their work as a starting point for this sub-theme
Starter Kit.
