<?php
namespace App\Definition;

class Controller
{
  protected $container;

  public function __construct(\Psr\Container\ContainerInterface $container)
  {
    $this->container = $container;
  }
}
