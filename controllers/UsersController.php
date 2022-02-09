<?php

class UsersController{

	public function register()
   {
       if (isset($_POST['submit'])) {
       	$options = [
           'cost' => 12
       	];
       	$password = password_hash($_POST['password'], PASSWORD_BCRYPT,$options);
          $data = array(
            'fullname' => $_POST['fullname'],
            'username' => $_POST['username'], 
            'password' => $password,
         );
          $result = User::creatUser($data);
          if ($result === 'ok') {
                session::set('error','compte crée.');
                redirect::to('login');
          }else{
            echo $result;
          }
       }
   }


   
   public function auth()
      {
       if(isset($_POST['submit'])){
        $data['username'] = $_POST['username'];
        $result = User::login($data);
          if ($result->username === $_POST['username'] && password_verify($_POST['password'],$result->password)) {
                $_SESSION['logged'] = true;
                $_SESSION['username'] = $result->username;
                Redirect::to('home');
          }else{
            session::set('error','Pseudo ou mot de pass est incorrect');
            redirect::to('login');
          }
       }
   }

   static public function logout(){
    session_destroy();
   }
 }


?>