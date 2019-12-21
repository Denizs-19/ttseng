========================================
DRBImageVerification
http://www.dbscripts.net/imageverification/

By Don Barnes

Version 1.0
========================================

Requirements
------------

PHP 4.4 or higher
GD library

    * It is strongly recommended that register_globals be set to off 
      in your php.ini file.
    * In order to use this image verification script, you must be using PHP 
      with the GD library image functions properly installed and enabled.  
      In addition, this feature currently requires that cookies to be enabled 
      on the client web browser.

Installation
------------

1) Extract the ZIP file into the desired destination folder on your website.

2) Modify the settings in config.php to match your environment and desired 
   configuration.  Descriptions of the settings are included in the 
   comments within that file.
   
3) Integrate the DRBImageVerification API with your own PHP scripts.  The included 
   index.php file provides a sample form that demonstrates how to do this.

Upgrade
-------

If you are already running DRBImageVerification and need to upgrade to the latest 
version, you must perform the following steps.

1) Backup your config.php file.

2) Extract the ZIP file into the desired destination folder on your website, 
   overwriting the existing files.
   
3) Replace your config.php file with the file that you backed up in step 1.
   
Uninstall
---------

You can uninstall DRBImageVerification by following the steps below.

1) Delete the DRBImageVerification files from your webserver.
   
2) Remove any references to DRBImageVerification from the pages in your website.

Customization
-------------

The included index.php file demostrates how to add a challenge response test 
to almost any PHP page with a form.  See config.php for the available 
customization options.

Modifying PHP files in the includes folder other than config.php is not 
recommended, as this may make it difficult or impossible to upgrade to newer 
versions of DRBImageVerification in the future.

License
-------

DRBImageVerification may be used free of charge.  If you find this software useful, 
a simple link back to our website would be extremely appreciated.

You may not distribute code modifications to DRBImageVerification 
without permission from the author.

DRBImageVerification is provided "as is", without warrant 
of any kind, either expressed or implied. 

Version History
---------------
1.0
	* Initial public release
