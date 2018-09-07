<?php
namespace App\Definition;

class Facade
{
  protected static $instance;

  private function __construct() {}
  public static function getInstance()
  {
    if (!isset(self::$instance) or self::$instance == null) {
      self::$instance = static::newInstance();
    }
    return self::$instance;
  }
}
