wget "https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar"
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp
wp cli update
wp core download --allow-root --path=/var/www/html/
chown -R www-data:www-data /var/www/html/
wp core install --allow-root --path=/var/www/html/ --url=pfelipa.42.fr --title=dong --admin_user=pfelipa --admin_password=password --admin_email=ass@cheeks.com
cd /var/www/html/
wp user create  --allow-root pfelipa2 cheeks@ass.com --user_pass=password