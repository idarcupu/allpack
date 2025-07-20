<?php

namespace Idaravel\AllPack;

class Idar {

    private static $helpers = [
      'tglIndo'
    ];

    public static function __callStatic($method, $args){
      if(in_array($method, self::$helpers)){
          return Helpers::$method(...$args);
      }

      $table = \Illuminate\Support\Str::snake($method);
      return new IdarQuery($table);
    }
}
