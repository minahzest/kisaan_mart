<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Account_Controller extends MY_Controller {
    
    
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('cust_logged_in')==null){
            redirect(base_url());
        }
    }
}
