# fossjobs basic php

Open source freelance job platform, inspired from [fossjobs.net](https://www.fossjobs.net/)

# Launch for dev

Launching for local development is using `docker compose` which is a part of `docker`.

The base docker image used is : [mattrayner/lamp](https://hub.docker.com/r/mattrayner/lamp)

Instructions on how to install `docker` for
[Windows](https://docs.docker.com/desktop/install/windows-install/),
[Linux](https://docs.docker.com/desktop/install/linux-install/),
[Mac](https://docs.docker.com/desktop/install/mac-install/).

## Start for local development

### Clone and move to working directory

```
git clone https://github.com/nazimboudeffa/fossjobs-basic-php.git
cd fossjobs-basic-php
```

### Start the app

```sh
docker compose up

```

Note: Check first time run instructions in later section.

### Access the server logs

```sh
docker exec -it neofreelance tail /var/log/apache2/access.log /var/log/apache2/error.log -f

```

### Access application

[http://localhost](http://localhost)

### Access PhpMyAdmin

[http://localhost/phpmyadmin](http://localhost/phpmyadmin)

```
Username: admin
Password: dev124
```

## first time (setup)

First time run of `docker compose up` might take a while to download the dependencies.

It will give you the password for the `admin` user for mysql in the logs, be sure to keep it:

```
neofreelance  | You can now connect to this MySQL Server with <your-admin-password>
```

While docker container is running, to setup the DB, in a second terminal run:

```sh
docker exec -it neofreelance sh /db/setup.sh
```

## reset DB

To reset your DB, just delete the `mysql` folder in the root of this project, then run the first time commmands.
