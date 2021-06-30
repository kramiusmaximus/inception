FROM debian:buster

RUN apt update
RUN apt-get -y upgrade
RUN	apt -y install wget
RUN	apt -y install unzip
RUN	apt -y install gnupg
RUN	apt -y install -y php7.3-fpm php7.3-mysql php7.3-xml php7.3-curl php7.3-gd php7.3-intl php7.3-mbstring php7.3-soap php7.3-xmlrpc php7.3-zip

RUN mkdir -p /var/www/html/
COPY wp-config.php /tmp
RUN cp /tmp/wp-config.php /var/www/html/
COPY wp.sh /tmp
RUN chmod +x /tmp/wp.sh
RUN ./tmp/wp.sh

RUN sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf"

#RUN service php7.3-fpm start
#RUN service php7.3-fpm stop

EXPOSE 9000 3306
ENTRYPOINT ["./tmp/wp.sh"]
CMD /usr/sbin/php-fpm7.3 --nodaemonize
#CMD tail -f /dev/null

