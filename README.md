For linux Server
=================

For Redis server Installation 
==============================
sudo apt install redis-server

sudo systemctl enable redis-server

For Increasing Memory
======================
sudo vim /etc/redis/redis.conf

maxmemory 256mb

maxmemory-policy allkeys-lru

sudo systemctl restart redis-server

For PHP Redis extension Install
================================
sudo apt install php-redis

sudo phpenmod -v 7.4 -s ALL redis

For test redis server is configured or not
==========================================
redis-cli 

ping

pong

For redis server information
=============================
redis-cli -> info

redis-cli -> info stats

redis-cli -> info server
