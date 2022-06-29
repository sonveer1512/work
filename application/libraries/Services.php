<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Services
{
    public $CI;

    //this is the expiration for a non-remember session
    //var $session_expire    = 600;

    public function __construct() {
        $this->CI = &get_instance();
    }

    /*
      this checks to see if the admin is logged in
      we can provide a link to redirect to, and for the login page, we have $default_redirect,
      this way we can check if they are already logged in, but we won't get stuck in an infinite loop if it returns false.
    */

    public function getapiurl() {
        //return 'https://axepertexhibits.com/orangeapesadmin/api/';
        return 'http://localhost/projects/orangeapesadmin/api/';
    }


    // get vendor details api 
    public function getvendordetails() {
        return $this->getapiurl().'vendordetails/vendorlist';
    }

    
    public function getbannerdetails() {
        return $this->getapiurl().'banner/bannerlist';
    }


    public function gethomecategories() {
        return $this->getapiurl().'category/gettopforhomepage';
    }
    
    
    public function getcategories() {
        return $this->getapiurl().'category/getcategories';
    }

    public function getprodetailsbycat() {
        return $this->getapiurl().'productbycat/productbycat';
    }
    
    
    public function getpropaginationdetails() {
        return $this->getapiurl().'productbycat/productbydetails';
    }
    
    
    public function getblogpropaginationdetails() {
        return $this->getapiurl().'blogs/listing';
    }
    
    
    public function getblogdetails() {
        return $this->getapiurl().'blogs/details';
    }
    
    
    public function gethomepageblogs() {
        return $this->getapiurl().'blogs/gethomepageblogs';
    }   
    
    
    public function gethomepagetestimonial() {
        return $this->getapiurl().'testimonials';
    }


    public function getproductdetailsforcart() {
        return $this->getapiurl().'productbycat/productdetails';
    }


    public function getcontentdetails() {
        return $this->getapiurl().'content/contentlist';
    }
    
    
    public function savecontactdata() {
        return $this->getapiurl().'contact/savecontactdata';
    }
    
    
    
    public function savenewsletterdata() {
        return $this->getapiurl().'contact/savenewsletterdata';
    }
   
   

}

?>