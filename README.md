# jobberbase basic php

Open source freelance job platform, forked from [fossjobs.net](https://www.fossjobs.net/)

## Configure Apache

Add a site available and ssl like I do in my wiki

## Clone and move to working directory

```
git clone https://github.com/nazimboudeffa/jobberbase-basic-php.git
cd jobberbase-basic-php
```

##

Create a database in phpmyadmin called jobberbase and use `bulma`

## Configure

Go to `public/_config` folder and edit `config.env.php` file, only live part

```
// live
$__instances['live'] = array(
        'prefix' => 'neofreelance.com',
        'db_host' => 'localhost',
        'db_port' => 3306,
        'db_user' => 'phpmyadminuser',
        'db_password' => 'phpmyadminpassword',
        'db_name' => 'jobberbase',
        'db_prefix' => '',
        'app_url' => 'https://neofreelance.com/',
        'lang_code' => 'en',
        'ini_error_reporting' => E_ERROR | E_PARSE, // hide all errors on prod
        'ini_display_errors' => 'Off',
        'location' => 'online',
        'environment' => 'prod',
        'rewrite_mode' => 'apache_mod_rewrite'
);
```


Create a folder called `_cache` in `public/_templates/bulma`

```
sudo chown -R www-data:www-data _cache
```

Again

Create a folder called `_cache` in `public/admin/_templates`

```
sudo chown -R www-data:www-data _cache
```
