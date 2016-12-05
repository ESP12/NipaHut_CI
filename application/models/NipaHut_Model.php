<?php
/**
 * Created by PhpStorm.
 * User: Helias
 * Date: 11/14/2016
 * Time: 8:53 PM
 */
class NipaHut_Model extends CI_Model{
    public function __construct() {
        $this->load->database();
    }
    //user loagin
    public function login(){
        //initialize session
        $this->load->library('session');

        //retrieve data from database
        $login->load->query("SELECT * FROM guest WHERE ")
    }
}