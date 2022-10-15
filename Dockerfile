FROM mattrayner/lamp:latest-1804-php7

CMD ["/run.sh"]
# See https://github.com/mattrayner/docker-lamp/issues/124
RUN ["sed", "-i", "'s/<Directory \/>/<Directory \/var\/www\/html>/g'", "/etc/apache2/sites-available/000-default.conf"]
RUN ["apachectl", "graceful"]