#!/bin/bash

EXIT_SUCCESS=0
EXIT_FAILURE=1
PASSWORD="Mummy4321"

echo "Hello, This is Installing LaMp in Debian 12"
echo "Preparing to Install"
sleep 3
[ "$EUID" -ne 0 ] \
    && echo "root required to execute this script." >&2 \
            && exit $EXIT_FAILURE
#Installing new update

printf "Updating Repository and Upgrade Packages\n\n"
sleep 5
apt update && apt upgrade -y

#Installing MariaDB

sleep 5
printf "\n\nInstalling MariaDB...\n\n"
apt install -y mariadb-server mariadb-client

printf "\n\nMariaDB Setup...\n\n"
sleep 3
printf "\n\n\n\n"
mysql_secure_installation <<EOF


y
$PASSWORD
$PASSWORD
y
y
y
y
EOF

# Installing Apache
printf "\n\nInstalling Apache...\n\n"
sleep 3

apt install apache2 apache2-doc -y

#Installing PHP
printf "\n\nInstalling PHP...\n\n"
sleep 3

apt install php8.2 php-mysql -y && echo "<?php phpinfo(); ?>" >> /var/www/html/test.php


#Installing PHP
printf "\n\nInstalling phpMyadmin...\n\n"
sleep 3
apt install phpmyadmin -y && echo "Include /etc/phpmyadmin/apache.conf" >> /etc/apache2/apache2.conf

echo "restarting services...."

systemctl enable --now apache2

systemctl enable --now mysql


echo "The System is Done!!!"
