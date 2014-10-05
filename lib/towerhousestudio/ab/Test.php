<?php

namespace Towerhousestudio\AB;

use Namshi\AB\Test as NamshiTest;

class Test extends NamshiTest
{ 
  /**
   * Gets the test configuration from a file and instantiates
   * an AB Test object with a selected variation
   * @param string $name
   */
  public static function read($name)
  {
    //If $name is an absolute path use it, otherwise default to the config folder
    $path = substr_count($name, '.php') ? $name : ROOT_PATH . '/config/test/' . $name . '.php';
    
    if (is_file($path)) {
      $config = include $path;
      $abTest = new Test($config['name'], $config['probabilities']);
      
      //Get the same test seed used during this session
      $session_key = 'test_variation_seed';
      if (!isset($_SESSION[$session_key])) { 
        $_SESSION[$session_key] = uniqid(); 
        session_commit();
      }
      $abTest->setSeed($_SESSION[$session_key]);
      $selected = $abTest->getVariation();
      $abTest->setParameters($config['variations'][$selected]);
      $abTest->tracking_code = $config['tracking_code'];
      return $abTest;
    } else {
      //Handle this on development time
      throw new \Exception("Invalid configuration file `$path`");
    }
  }
}
