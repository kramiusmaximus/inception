FROM debian:buster

RUN apt update
RUN apt-get -y upgrade
RUN	apt-get install -y default-mysql-server
COPY init.sh /var/www/
EXPOSE 3306
RUN chmod +x /var/www/init.sh
ENTRYPOINT ["/var/www/init.sh"]
CMD mysqld
#CMD tail -f /dev/null
