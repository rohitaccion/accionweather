1. Overview
This Documentation describes the installation and configuration steps of AccionWeather App.

2. Requirements

Please ensure that your server meets the following minimum requirements:
Software	Modules
PHP 7, or higher	MySQL, cURL, OpenSSL, mbstring
Apache 2, or higher	mod_rewrite
MySQL 5, or higher	
The following services are also required:
Service	Information (API Key used) 
OpenWeatherMap API Key	20bb8866a70ad51db15dcd7d84b0a4aa
3. Installation
After you've downloaded the files and extracted the contents from the ZIP package, you can start the installation process.

3.1. Importing the database
1. Create a new MySQL database name of DB (weather).
2. Use your server’s MySQL username and password.
3. Import the Database.sql file from the MySQL folder into your MySQL database.

3.2. Setting-up and uploading the files
1. With a text editor open the Script/app/includes/config.php file and update the values YOURDBUSER, YOURDBNAME, YOURDBPASS, http://localhost/accionweather/ with your own information.
2. Copy the contents of the AccionWeather folder on the location where you want the script to be installed at.

4. OpenWeatherMap API
1. Register an account at OpenWeatherMap.
2. Once registered, go to your API Keys and copy the key.
3. Add the API Key in the Database > Settings Table > weather_api_key.


5. Important Information
1. Make sure you've uploaded the .htaccess files that comes with the application and that you have mod_rewrite enabled on your server. 
2. You're probably using MacOS, which by default is hiding the .htaccess files, enable the option to see hidden files. 
3. Application returning blank page? This generally happens when one of the server requirements is not met, make sure your current server configuration should match with the Requirements.
