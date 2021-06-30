FROM debian:buster
RUN apt update
RUN apt-get -y upgrade
RUN	apt -y install nginx openssl
RUN openssl req -x509  -days 365 -newkey rsa:2048 -nodes -keyout pfelipa.42.fr.key -out pfelipa.42.fr.crt -subj "/C=RU/ST=Msk Oblast/L=Msk/O=42/OU=Shkola 42/CN=deeznuts"
RUN mv pfelipa.42.fr.key etc/ssl/private/
RUN mv pfelipa.42.fr.crt etc/ssl/certs/
COPY /pfelipa.42.fr /tmp/
RUN mv /tmp/pfelipa.42.fr /etc/nginx/sites-available/
RUN ln -s /etc/nginx/sites-available/pfelipa.42.fr /etc/nginx/sites-enabled/pfelipa.42.fr
RUN unlink /etc/nginx/sites-enabled/default
RUN mkdir -p var/www/html/
EXPOSE 443
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
CMD nginx
