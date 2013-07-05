#!/bin/sh

version = 0.8.6

wget http://alexeyrybak.com/blitz/blitz-0.8.6.tar.gz -O blitz.tar.gz
mkdir blitz
tar xvf blitz.tar.gz -C blitz --strip-components=1
cd blitz
phpize
./configure
PHP_EXT_PATH="`sudo make install|tail -n 1|awk '{print $(NF)}'`"
echo "ext = $PHP_EXT_PATHblitz.so" | sudo tee /etc/php5/mods-available/50-blitz.ini
sudo ln -s /etc/php5/mods-available/50-blitz.ini /etc/php5/conf.d/50-blitz.ini
