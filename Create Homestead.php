//Creating New Vagrant-Homestead
composer require --dev laravel/browser-kit-testing "1.*"
composer require --dev guzzlehttp/guzzle
composer clear-cache
composer create-project --prefer-dist laravel/laravel landingpage
composer require laravel/homestead --dev
vendor/bin/homestead make
ssh-keygen -t rsa -C "dendi@gmail.com"
vagrant up

//Fixed Conflicts
composer global require consolidation/cgr
cgr require laravel/homestead --dev

//
composer create-project --prefer-dist laravel/laravel landingpage
vagrant init laravel/homestead-7
vagrant up
bash init.sh



vagrant box add laravel/homestead
if fails
git clone https://github.com/laravel/homestead.git ~/Homestead
cd ~/Homestead
git checkout v7.1.2


//Working Perfect on Creating Homestead Box
vagrant box add laravel/homestead-7
git clone https://github.com/laravel/homestead.git Homestead
cd ~/Homestead1
git checkout v7.1.2
bash init.sh
vagrant up
fix pdo Error
sudo apt-get install php7.0-sqlite3 
sudo apt-get install php7.0-mysql

//Create new Box
vagrant box add hashicorp/precise64



folders:
    - map: 'E:\POS'
      to: /home/vagrant/code

sites:
    - map: POS.com
      to: /home/vagrant/code/public

databases:
    - homestead

    //Edit Php.ini on vagrant
    sudo nano /etc/php5/apache2/php.ini

    In Ubuntu/Debian you can use:

PHP5: sudo apt-get install php5-mysql
PHP7: sudo apt-get install php7.0-mysql
Lastly, to get it working, you will need to restart your web-server:

Apache: sudo /etc/init.d/apache2 restart

//fix pdo
sudo apt-get install php5-mysql
Nginx: sudo /etc/init.d/nginx restart
