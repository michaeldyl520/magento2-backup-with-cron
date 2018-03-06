# magento2-backup-with-cron
This is the use of magento2 scheduled tasks perform their own shell command to back up the database operation.
## Installation
Please enter your magento2 root directory, execute the following command:
```shell
composer config repositories.michaeldyl520-magento2-mysql-backup-with-cron vcs git@github.com:michaeldyl520/magento2-mysql-backup-with-cron.git
```
```shell
composer require michaeldyl520/magento2-mysql-backup-with-cron
```
Maybe you need run:
```shell
php bin/magento setup:upgrade && php bin/magento cache:clean
```
