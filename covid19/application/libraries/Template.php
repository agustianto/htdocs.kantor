<?php
class Template {
    protected $_ci;
	function __construct() {
	    $this->_ci = &get_instance(); 		
	}
    function views($template = NULL, $data = NULL) {
        if ($template != NULL) {
            $data['head'] = $this->_ci->load->view('Admin/_Template/head', $data, TRUE);
            // $data['topbar'] = $this->_ci->load->view('Admin/_Template/topbar', $data, TRUE);
            // $data['sidebar'] = $this->_ci->load->view('Admin/_Template/sidebar', $data, TRUE);
            $data['konten'] = $this->_ci->load->view($template, $data, TRUE);
            $data['content'] = $this->_ci->load->view('Admin/_Template/content', $data, TRUE);
            // $data['footer'] = $this->_ci->load->view('Admin/_Template/footer', $data, TRUE);
            echo $data['Template']= $this->_ci->load->view('Admin/_Template/Template', $data, TRUE); 
        }
    }
}?>
