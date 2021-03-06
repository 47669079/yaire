<?php

   namespace X\App\Controllers;

   use X\Sys\Controller;
   use X\Sys\Session;

  /**
  * Description of login
  *  Controlador que se encarga del login de los usuarios.
  *
  * @author aitor y olalla
  */

   class Login extends Controller{


   		public function __construct($params){
   			parent::__construct($params);
            $this->addData(array(
               'page'=>'Login'));
   			$this->model=new \X\App\Models\mLogin();
   			$this->view =new \X\App\Views\vLogin($this->dataView,$this->dataTable);


                }
      /**
      *
      * home: funcion que se llama al entrar a login, donde cargamos la vista.
      *
      */

   		function home()
      {
        $this->view->__construct($this->dataView,$this->dataTable);
        $this->view->show();

   		}

      /**
      *
      * ckuser: funcion que comprueba que el usuario existe.
      *
      */

      function ckuser()
      {
        $email=filter_input(INPUT_POST, 'email');
        $pass=filter_input(INPUT_POST, 'pass');

        $result = $this->model->get_user($email,$pass);

        if(!empty($result))
        {
            $_SESSION["user"]=$result[0]['username'];
            $_SESSION["iduser"]=$result[0]['id_userweb'];
            $_SESSION["rol"]=$result[0]['roles'];

            echo 1;
        }
        else
        {
            echo "Error de login";
        }

      }

      /**
      *
      * logout: funcion que destruye la variable de session.
      *
      */

      function logout()
      {
        Session::destroy();
        header('Location: /');
      }


   }
