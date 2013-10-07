<?php defined('SYSPATH') or die('No direct script access.');

  return array
  (
     'username' => array
     (
        'is_unique'  => 'Username is already taken'
        'not_empty'  => 'Please fill all fields',
        'max_length' => 'Username too long'
     ),
     'password' => array
     (
        'max_length' => 'Password too long',
        'not_empty'  => 'Please fill all fields'
      ),
     'email' => array 
     (
        'not_empty'  => 'Please fill all fields',
        'email'      => 'The Email you have entered is not valid'
      ),
  );

?>