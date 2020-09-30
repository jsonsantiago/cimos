<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Stripe_library{ 

    function __construct(){ 
        require APPPATH .'third_party/stripe-php/init.php'; 
    } 
 
}