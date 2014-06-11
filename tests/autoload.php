<?php
function __autoload($class_name) {
  include 'src/model/' . $class_name . '.php';
}