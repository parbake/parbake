# jasonsnider.com

The is the source code for jasonsnider.com; a web application built with CakePHP and various plugins.
 
To use simply clone the repository as a CakePHP app directory.

````
git clone git@github.com:jasonsnider/cakephp-plugins-app.git app
````

You will want to make Cake/Cache and app/tmp writable by the server, I do this by changing ownership to the Apache 
(www-data) process and the user group that is responsible for maintaining the web directories (jasonsnider). Server 
paths, user and groups names will likely vary.

````
sudo chown www-data:jasonsnider /var/www/jasonsnider.com/lib/Cake/Cache -fR
sudo chown www-data:jasonsnider /var/www/jasonsnider.com/app/tmp -fR

sudo chown www-data:jasonsnider /var/www/jasonsnider.com/app/Vendor/HtmlPurifier/library/HTMLPurifier/DefinitionCache/Serializer -fR
````

Create a database called `cakephp_plugins` and the a username of root with the password of `password`. Since the goal
of this application is to help with the local development of CakePHP plugins, I'm not worried about security.