//Creating New Vagrant-Homestead
composer require laravel/homestead --dev
vendor/bin/homestead make
ssh-keygen -t rsa -C "dendi@gmail.com"
vagrant up

