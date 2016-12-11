<?php
/**
 * Created by PhpStorm.
 * User: Helias
 * Date: 11/14/2016
 * Time: 8:53 PM
 */
class NipaHut_Model extends CI_Model{


    //user login
    public function login(){
        if (isset($_POST['sbt-login'])){
            $data_login = array(
              'username' => $this->input->post('login-username'),
              'password' => md5($this->input->post('login-password'))
            );

            $this->db->select('*');
            $this->db->from('admins');
            $this->db->where('username',$data_login['usename']);
            $this->db->where('passwords',$data_login['password']);


            $query = $this->db->get();

            if ($query->num_rows() == 1){
                    return true;
            }else{
                $this->db->select('*');
                $this->db->from('guest');
                $this->db->where('username',$data_login['usename']);
                $this->db->where('guestpassword',$data_login['password']);


                $query = $this->db->get();

                if ($query->num_rows() == 1){
                    return true;
                }else{
                    return false;
                }
            }
        }
    }

    //read user information function

    public function read_user_information($username){
        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where($condition);


        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return array(
              'page' => 'admin',
              'query' => $query
            );

        } else {
            $condition = "username =" . "'" . $username . "'";
            $this->db->select('*');
            $this->db->from('guest');
            $this->db->where($condition);


            $query = $this->db->get();

            if ($query->num_rows() == 1){
                return array(
                    'page' => 'guest',
                    'query' => $query
                );
            }else{
                return false;
            }

        }
    }

    //new user is registered here
    public function register(){
        $data = array(
            'username' => $this->input->post('register-username'),
            'guestpassword' => md5($this->input->post('register-password')),
            'firstname' => $this->input->post('register-firstname'),
            'lastname'=> $this->input->post('register-lastname'),
            'gender' => $this->input->post('register-gender'),
            'emailaddress' => $this->input->post('register-emailaddress'),
            'mobilenumber' => $this->input->post('register-mobilenumber'),
        );


        return $this->db->insert('guest', $data);
    }

}