# Local Installation Guide

Navigate to the plugin directory and run the following commands

1. `git clone https://bitbucket.org/wedevs/cpm-pro-module.git`
2. `cd <plugin-dir-name>`
3. `composer install` 
4. `composer dumpautoload -o`
5. `npm install`
6. `npm run start`
7. Activate plugin


Note: To keep the plugin size normal we've limited the font's for mpdf.
There is `allowed_fonts.json` file list required fonts name that will be keep the required font's and other font's will be deleted.

How this works: after composer install "php cleanup_fonts.php" command will run and cleanup the mpdf ttfonts folder acording to our need.
