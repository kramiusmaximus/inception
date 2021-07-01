#!usr/bin/env bash 
sed -i "s/bind-addr/\#bind-addr/" "/etc/mysql/mariadb.conf.d/50-server.cnf"
sed -i "s/\#port /port /" "/etc/mysql/mariadb.conf.d/50-server.cnf"
chown -R mysql:mysql /var/lib/mysql
if [ ! -d var/lib/mysql/wordpress ]; then
	service mysql start
	mysql -u root -e "create database if not exists $MYSQL_DATABASE"
	mysql -u root -e "create user if not exists '$MYSQL_USER' identified by '$MYSQL_PASSWORD'"
	mysql -u root -e "grant all privileges on $MYSQL_DATABASE.* to '$MYSQL_USER'"
	mysql -u root -r "alter user root@localhost indentified by 'password'"
	service mysql stop
else
	mkdir -p /var/run/mysqld
	touch /var/run/mysqld/mysqld.pid
	mkfifo /var/run/mysqld/mysqld.sock
fi
chown -R mysql /var/run/mysqld
exec "$@"
