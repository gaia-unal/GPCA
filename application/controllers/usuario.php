<?php

//Clase Usuario, encargada de todas las operaciones y 
//metodos de los usuarios.

class Usuario extends CI_Controller {


    //Metodo constructor de la clase
    public function __construct() {
        parent::__construct();
        $this->load->model("usuario_model");//Import al modelo de la clase
        
    }

    //Metodo para obtener datos basicos del usuario
   /* public function get_usr_data($username) {
        $this->load->view('base/login_view');
    }*/
    
///metodo que carga la vista acerca


 
 public function menu() {
        
            $content = array(
                "main_view" => "menu/menu_view",
                "encabezado" => "Menus Accesibles",
                "url" => "usuario/menu/"
                );
 
        $this->load->view('menu/menu_template', $content);
        
    }


public function listas() {
        
            $content = array(
                "main_view" => "base/list_view",
                "encabezado" => "Listas Accesibles",
                "url" => "usuario/list/"
                );
 
        $this->load->view('base/base_template', $content);
        
    }
    public function equipo() {
       
            $content = array(
                "main_view" => "base/equipo_view",
                "encabezado" => "Equipo gpca",
                "url" => "usuario/equipo/"
            );
                $this->load->view('base/base_template', $content);
        
    }
         
            

    public function leyes() {
        
             $content = array(
                "main_view" => "base/laws_view",
                "encabezado" => "Leyes",
                "url" => "usuario/leyes/"
            );
                $this->load->view('base/base_template', $content);
        }


    public function tools() {
        
             $content = array(
                "main_view" => "base/validadores_view",
                "encabezado" => "Tools",
                "url" => "usuario/Tools/"
            );
                $this->load->view('base/base_template', $content);
        }

    public function etiquetas() {
        
             $content = array(
                "main_view" => "base/etiquetas_view",
                "encabezado" => "Etiquetas",
                "url" => "usuario/Etiquetas/"
            );
                $this->load->view('base/base_template', $content);
        }

    public function link() {
        
             $content = array(
                "main_view" => "base/link_view",
                "encabezado" => "Link",
                "url" => "usuario/Link/"
            );
                $this->load->view('base/base_template', $content);
        }

     public function tables() {
        
             $content = array(
                "main_view" => "tables/tables_view",
                "encabezado" => "tables",
                "url" => "usuario/tables/"
            );
                $this->load->view('tables/table_template', $content);
        }

     public function tableone() {
        
             $content = array(
                "main_view" => "tables/tableone_view",
                "encabezado" => "tables",
                "url" => "usuario/tablesone/"
            );
                $this->load->view('tables/table_template', $content);
        }
    public function tableirregular() {
        
             $content = array(
                "main_view" => "tables/tableirregular_view",
                "encabezado" => "tables",
                "url" => "usuario/tableirregular/"
            );
                $this->load->view('tables/table_template', $content);
        }
    public function tablemulti() {
        
             $content = array(
                "main_view" => "tables/tablemulti_view",
                "encabezado" => "tables",
                "url" => "usuario/tablemulti/"
            );
                $this->load->view('tables/table_template', $content);
        }

    public function caption() {
        
             $content = array(
                "main_view" => "tables/tablecaption_view",
                "encabezado" => "tables",
                "url" => "usuario/tablecaption/"
            );
                $this->load->view('tables/table_template', $content);
        }

    public function encabezado() {
        
             $content = array(
                "main_view" => "base/encabezado_view",
                "encabezado" => "encabezado",
                "url" => "usuario/encabezado/"
            );
                $this->load->view('base/base_template', $content);
        }
    
    public function images() {
        
             $content = array(
                "main_view" => "base/images_view",
                "encabezado" => "images",
                "url" => "usuario/images/"
            );
                $this->load->view('base/base_template', $content);
        }

    public function vertical() {
        
             $content = array(
                "main_view" => "menu/vertical_view",
                "encabezado" => "vertical",
                "url" => "usuario/vertical/"
            );
                $this->load->view('menu/menu_template', $content);
        }

    public function horizontal() {
        
             $content = array(
                "main_view" => "menu/horizontal_view",
                "encabezado" => "horizontal",
                "url" => "usuario/horizontal/"
            );
                $this->load->view('menu/menu_template', $content);
        }
        public function desplegable() {
        
             $content = array(
                "main_view" => "menu/desplegable_view",
                "encabezado" => "desplegable",
                "url" => "usuario/desplegable/"
            );
                $this->load->view('menu/menu_template', $content);
        }

        public function aria() {
        
             $content = array(
                "main_view" => "menu/aria_view",
                "encabezado" => "aria",
                "url" => "usuario/aria/"
            );
                $this->load->view('menu/menu_template', $content);
        }

        public function forms() {
        
             $content = array(
                "main_view" => "form/forms_view",
                "encabezado" => "forms",
                "url" => "usuario/forms/"
            );
                $this->load->view('form/form_template', $content);
        }

        public function label() {
        
             $content = array(
                "main_view" => "form/label_view",
                "encabezado" => "label",
                "url" => "usuario/label/"
            );
                $this->load->view('form/form_template', $content);
        }

        public function agrupacion() {
        
             $content = array(
                "main_view" => "form/group_view",
                "encabezado" => "agrupacion",
                "url" => "usuario/agrupacion/"
            );
                $this->load->view('form/form_template', $content);
        }

        public function instrucciones() {
        
             $content = array(
                "main_view" => "form/instrucciones_view",
                "encabezado" => "instrucciones",
                "url" => "usuario/instrucciones/"
            );
                $this->load->view('form/form_template', $content);
        }

        public function input() {
        
             $content = array(
                "main_view" => "form/input_view",
                "encabezado" => "input",
                "url" => "usuario/input/"
            );
                $this->load->view('form/form_template', $content);
        }

        public function notificaciones() {
        
             $content = array(
                "main_view" => "form/notifications_view",
                "encabezado" => "notificaciones",
                "url" => "usuario/notificaciones/"
            );
                $this->load->view('form/form_template', $content);
        }

         public function personalizado() {
        
             $content = array(
                "main_view" => "form/personalizado_view",
                "encabezado" => "personalizado",
                "url" => "usuario/personalizado/"
            );
                $this->load->view('form/form_template', $content);
        }


        public function validate() {
        
             $content = array(
                "main_view" => "validator/validate_view",
                "encabezado" => "validate",
                "url" => "usuario/validate/"
            );
                $this->load->view('base/base_template', $content);
        }

        public function validar() {
        
        $code=$this->input->post("code");
        $this->usuario_model->guardar_usuario();
        $this->login();

        }


    //Metodo que carga la pagina de inicio de sesión
   /* public function login() {
        $this->load->view('base/login_view');
    }*/

    //Metodo para crear una nueva cuenta
   /* public function registro(){
        if ($this->session->userdata('logged_in')) {
            redirect(base_url(), 'refresh');//Definir que pasa si ya esta loggeado
        } else {
            $content = array(
                "preferencias" => $this->usuario_model->get_preferencias(), 
                "nivel_educativo" => $this->usuario_model->get_nivel_educativo(),
                "main_view" => "register/registro_view"
            );
            $this->load->view('base/base_template', $content);
        }
    }
*/
  

    //Metodo que muestra el perfil del usuario.
   /* public function perfil() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $rol = $this->usuario_model->get_rol ( $session_data ['username'] );
            if ($rol [0] ['use_rol_id'] == 1) {
                $content = array(
                    "user" => $session_data['username'],
                    "usr_data" => $this->usuario_model->get_usr_data($session_data['username']),
                    "usr_all_data" => $this->usuario_model->get_all_admin_data($session_data['username']),
                    "main_view" => "admin/perfil_view"
                );
                $this->load->view('base/admin_template', $content);
            } else {
                if ($rol [0] ['use_rol_id'] == 5) {
                    $content = array(
                        "user" => $session_data['username'],
                        "usr_data" => $this->usuario_model->get_usr_data($session_data['username']),
                        "usr_all_data" => $this->usuario_model->get_all_admin_data($session_data['username']),
                        "main_view" => "admin/perfil_view"
                    );
                    $this->load->view('base/rep_template', $content);
                }else {
                    $content = array(
                        "user" => $session_data['username'],
                        "usr_data" => $this->usuario_model->get_usr_data($session_data['username']),
                        "usr_all_data" => $this->usuario_model->get_all_usr_data($session_data['username']),
                        "main_view" => "usr/perfil_view"
                    );
                    $this->load->view('base/est_template', $content);
                }
            }

        } else {
            redirect(base_url(), 'refresh');
        }
    }
*/

    
    /*
    public function save_user(){

        $this->usuario_model->guardar_usuario();
        $this->login();

    }*/
/*
    public function xml_service(){

        $this->load->view('base/xml_service');
    }

    
    public function search_service($params){
        $content = array(
            "main_view" => "base/service_view",
                "encabezado" => "This XML file does not appear to have any style information associated with it. The document tree is shown below.",
                "url" => "usuario/search_service/"
                "metadatos"=> $this->usuario_model->get_metadatos($params);
        );
            $this->load->view('base/base_template', $content);
    }

*/
   /* public function editar_usr(){
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $rol = $this->usuario_model->get_rol ( $session_data ['username'] );
            if ($rol [0] ['use_rol_id'] == 1) {
                $content = array(
                    "user" => $session_data['username'],
                    "usr_data" => $this->usuario_model->get_usr_data($session_data['username']),
                    "usr_all_data" => $this->usuario_model->get_all_usr_data($session_data['username']),
                    "main_view" => "admin/perfil_view"
                );
                $this->load->view('base/admin_template', $content);
            } else {
                $content = array(
                    "user" => $session_data['username'],
                    "usr_data" => $this->usuario_model->get_usr_data($session_data['username']),
                    "usr_all_data" => $this->usuario_model->get_all_usr_data($session_data['username']),
                    "main_view" => "usr/editar_view"
                );
                $this->load->view('base/est_template', $content);
            }

        } else {
            redirect(base_url(), 'refresh');
        }
    }
*/
   /* function update_user(){
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');

            $this->usuario_model->update_user($session_data["username"]);
            $this->perfil();
        } else {
            redirect(base_url(), 'refresh');
        }
    }
*/
   /* public function chpasswd(){
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $this->load->view("usr/chpasswd_view");

        } else {
            redirect(base_url(), 'refresh');
        }
    }

    public function verificar_passwd() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $res = $this->usuario_model->verificar_passwd(md5($_POST["passwd"]),$session_data["username"]);
            if ($res == 1) {
                echo 1;
            }elseif ($res == 0) {
                echo 0;
            }
        } else {
            redirect(base_url(), 'refresh');
        }


    }

    function upd_passwd(){
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $this->usuario_model->actualizar_passwd(md5($_POST["passwd_new"]),$session_data["username"]);
            $this->session->unset_userdata('logged_in');
            redirect(base_url(), 'refresh');

        } else {
            redirect(base_url(), 'refresh');
        }
    }
*/
    /*

    public function mail(){

        // El mensaje
        $mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";

        // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
        $mensaje = wordwrap($mensaje, 70, "\r\n");

        // Enviarlo
        mail('leegixus@gmail.com', 'Mi título', $mensaje);

    }*/

    
    //Metodo que guarda los registros cuando se crea una cuenta por parte del estudiante, 
    // en la tabla usuario y estudiante

   /*
    public function exito($id, $name) {

        $content = array(
            "title" => "Registro éxitoso",
            "main_view" => "register/exito_view",
            "username" => $id,
            "name" => $name
        );
        $this->load->view('base/base_template', $content);
    }

    /*public function test_result() {

        $this->clasificaresp();
    }*/

    
   
  
    
}
