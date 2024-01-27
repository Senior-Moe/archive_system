# archive_system
Open Source Cloud Archive System

## Requirment
All you need to install archive_system:
* Debian Gnu/Linux OS.
* Git
* LAMP (There is script to install LAMP)
## Installation
First of all, you must to clone the repository to your server.

```bash
git clone https://github.com/Mohammed-Alnahdi/archive_system.git
cd archive_system
```

Then install LAMP By:

```bah
chmod +x lamp.sh
sudo bash lamp.sh
```
after installing lamp, copy the files to /var/www/html/ by :

```bash
cp -rv . /var/www/html
```
