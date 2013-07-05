#!/bin/sh

version = 0.8.6

wget http://alexeyrybak.com/blitz/blitz-0.8.6.tar.gz -O blitz.tar.gz
mkdir blitz
tar xvf blitz.tar.gz -C blitz --strip-components=1
cd blitz
phpize
./configure
sudo make install
