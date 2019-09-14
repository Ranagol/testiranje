<?php

class Singleton {
  // Holds the class instance. Static properties can remembere shit even after the cycle.
  private static $instance = null;

  // The constructor is private to prevent initiation with outer code. We will still use this constructor, but, through our getInstance() function.
  private function __construct(){
    // The expensive process (e.g.,db connection) goes here.
  }

  // The object is created from within the class itself only if the class has no instance.
  public static function getInstance(){
    if (self::$instance == null){
      self::$instance = new Singleton();
    }
  return self::$instance;
  }

}



?>