<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tes extends CI_Controller {

    function __construct() {
        parent:: __construct();
    }
    
    function index() {
      $url ='202.155.119.168:8080/smsapi/pages/sendSmsLatinConcat.do?g3p4i=faldoapi1&G4PIpw=F4ldoapi1&src=CapitalLifeIndonesia&dst=6287765460350&msg=Selamat&InfoCharCounter=&PID=&DCS=&Submit=Submit';
      //$url = str_replace(" ", "%20", $urls);
      file_get_contents($url);

    }
}