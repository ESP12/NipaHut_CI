<?php
/**
 * Created by PhpStorm.
 * User: Helias
 * Date: 12/7/2016
 * Time: 6:20 PM
 */

$config = array(
  'signup' => array(
      'field' => 'register-password',
      'label' => 'Password',
      'rules' => 'trim|required|matches[register-confirmpassword]'
  )
);