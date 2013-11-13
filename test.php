<?php

$ip = '172.17.42.1';

// update with your port number
$port = 11211;

$memcache_obj = new Memcache;
$memcache_obj->connect($ip, $port);
$memcache_obj->set('rule_1', 'You DO NOT talk about FIGHT CLUB');
$v = $memcache_obj->get('rule_1');

echo "$v\n";
