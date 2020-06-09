<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );


class Main extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( "usuario_model" );
        $this->load->model ( "admin_model" );
	}
	/**
	 * Controlador inicial, configurado en routes.php
	 */

   /* function verify_usr($username){
        $rol = $this->usuario_model->get_rol ($username);
        if ($rol [0] ['use_rol_id'] == 1) {
            $route = "admin";
        }elseif ($rol [0] ['use_rol_id'] == 2){
            $route = "est";
        }elseif ($rol [0] ['use_rol_id'] == 3){
            $route = "prof";
        }elseif ($rol [0] ['use_rol_id'] == 4){
            $route = "exp";
        }elseif ($rol [0] ['use_rol_id'] == 5){
            $route = "rep";
        }else {
            $route = "base";
        }

        return $route;
    }*/


	public function index() {
        
            $content = array (
                "main_view" => "base/init_view",
            )
            ;
            $this->load->view ( 'base/base_template', $content );


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */