echo "Creating DB..."
mysql -e "create database jobberbase;"
echo "Creating Tables..."
mysql neofreelance < /db/setup.sql
echo "Creating dev user..."
mysql -e "CREATE USER 'dev'@'localhost' IDENTIFIED WITH mysql_native_password BY 'dev123';"
mysql -e "GRANT ALL PRIVILEGES ON jobberbase.* TO 'dev'@'localhost' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES;"
echo "Enabling .htaccess overrides..."
sed -i 's/<Directory \/>/<Directory \/var\/www\/html>/g' /etc/apache2/sites-available/000-default.conf
apachectl graceful

echo "Done!"