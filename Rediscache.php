<?php

namespace App\Utility;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class RedisCache{
    
    
    public static function setConfig(){
        $redis = new \Redis(); 
        $redis->connect(REDIS_HOST, REDIS_PORT); 
        return $redis;
    }

    
    public static function write($key,$value) {
        static::setConfig()->set($key,$value);
    }
    
    public static function push($key,$value) {
        
        static::setConfig()->rpush($key,json_encode($value));
    }
    
    public static function pop($key) {
       return current(json_decode(static::setConfig()->lpop($key),true));
    }
    
    public static function get($key) {
       return static::setConfig()->lRange($key, 0, -1);
    }
    
    public static function totalItem($key) {
       return static::setConfig()->llen($key);
    }
    
    public static function getInfoByIndex($key,$index) {
       return static::setConfig()->lGet($key,$index);
    }
}
