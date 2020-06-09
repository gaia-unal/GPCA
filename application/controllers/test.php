<?php
/**
 * Created by PhpStorm.
 * User: leescobarg
 * Date: 19/09/14
 * Time: 12:15 PM
 */

class Test extends CI_Controller{
    function __construct(){
        parent::__construct ();
        $this->load->model("usuario_model");
    }

   public function list() {
        
            $content = array(
                "main_view" => "base/list_view",
                "encabezado" => "listas Accesibles",
                "url" => "test/list/"
                );
 
        $this->load->view('base/base_template', $content);
        
    }

    


}