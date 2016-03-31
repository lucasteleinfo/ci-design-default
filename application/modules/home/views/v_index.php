<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if($tela!='ws'){
    $this->load->view('includes/v_header');
}
if($tela==null){
    $this->load->view('telas/v_body');
} else {
    $this->load->view('telas/v_'.$tela);
}
if($tela!='ws'){
    $this->load->view('includes/v_footer');
}
?>