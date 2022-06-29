<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Auth
{

    public $CI;

    //this is the expiration for a non-remember session
    //var $session_expire    = 600;

    public function __construct() {
        $this->CI = &get_instance();
    }

    
    public function getdomain() {
        return 'orangeapes.com';
    }


    public function callurl($data, $url) {

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            'method'  => 'POST',
            "Accept: application/json",
            "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result =  curl_exec($curl);      
        return json_decode($result);
    }


     
    public function logged_in()
    {
        $this->checkcookies();
        return (bool) $this->CI->session->userdata('userpanel');
    }


    public function is_logged_in($default_redirect = false)
    {

        //var_dump($this->CI->session->userdata('session_id'));
        //$redirect allows us to choose where a customer will get redirected to after they login
        //$default_redirect points is to the login page, if you do not want this, you can set it to false and then redirect wherever you wish.

        $this->checkcookies();

        $admin = $this->CI->session->userdata('userpanel');
        if (empty($admin)) {
            $_SESSION['redirect_to'] = current_url();
            redirect('./');
            return false;
        } else {
            if ($default_redirect) {
                redirect('dashboard');
            }
            return true;
        }
    }


    public function checkcookies()
    {
        $cookie_email = $this->CI->input->cookie('email');
        $cookie_password = $this->CI->input->cookie('password');

        if (!empty($cookie_email) && !empty($cookie_password)) {
            $login_post = array(
                'email'    => $cookie_email,
                'password' => $cookie_password
            );

            $result   = $this->CI->staff_model->checkLogin($login_post);

            if ($result) {
                $session_data   = array(
                    'id'                  => $result->id,
                    'vendor_name'        => $result->vendor_name,
                    'vendor_email'       => $result->vendor_email,
                    'vendor_logo'        => $result->vendor_logo,
                    'vendor_phone'       => $result->vendor_phone,
                    'vendor_address'     => $result->vendor_address,
                    'vendor_url'         => $result->vendor_url,
                    'vendor_role'        => $result->vendor_staff_role,
                );

                $this->CI->session->set_userdata('userpanel', $session_data);
            }
        }
    }


    public function logout()
    {
        $cookie = array('name'   => 'email', 'value'  => '', 'expire' => 0);
        $this->CI->input->set_cookie($cookie);
        $cookie = array('name'   => 'password', 'value'  => '', 'expire' => 0);
        $this->CI->input->set_cookie($cookie);


        $this->CI->session->unset_userdata('userpanel');
        $this->CI->session->sess_destroy();
    }


    public function getdetails($column)
    {
        $admin = $this->CI->session->userdata('userpanel');
        if (!empty($admin)) {
            $game = $this->CI->setting_model->getdetails($column, $admin['vendor_url']);
            if ($game[0][$column]) {
                return $game[0][$column];
            } else {
                return '';
            }
        } else {
            return '';
        }
    }


    public function getcmsdetails($column)
    {
        $admin = $this->CI->session->userdata('userpanel');
        if (!empty($admin)) {
            $game = $this->CI->cms_model->getdetails($column, $admin['vendor_url']);
            if ($game[0][$column]) {
                return $game[0][$column];
            } else {
                return '';
            }
        } else {
            return '';
        }
    }

    public function getid()
    {
        $sess = $this->CI->session->userdata('userpanel');
        if (!empty($sess)) {
            return $sess['id'];
        } else {
            return '';
        }
    }

    public function getemail()
    {
        $sess = $this->CI->session->userdata('userpanel');
        if (!empty($sess)) {
            return $sess['email'];
        } else {
            return '';
        }
    }

    


    public function unauthorized($module,$access) {
        $sess = $this->CI->session->userdata('userpanel');
        $role = $sess['vendor_role'];

        if($role != 'admin') {
            $exist = $this->CI->staff_model->checkaccess($this->getid(), $module,$access);
            if($exist > 0) {
                return true;
            }else{
                redirect('unauthorized');
            }
        }
    }


    public function writeunauthorized($module,$access) {
        $sess = $this->CI->session->userdata('userpanel');
        $role = $sess['vendor_role'];

        if($role != 'admin') {
            $exist = $this->CI->staff_model->checkaccess($this->getid(), $module,$access);
            if($exist > 0) {
                return true;
            }
            
            return false;
        }
    }
}