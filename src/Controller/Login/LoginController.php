<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 25/02/2019
 * Time: 14:54
 */

namespace PHPInitiation\Controller\Login;
use PHPInitiation\Connection\Connection;
use PHPInitiation\Controller\Controller;
use PHPInitiation\Model\User\UserLogin;
use PHPInitiation\Repository\UserLoginRepository;
use PHPInitiation\Validator\ValidatorLogin;




class LoginController extends Controller
{
    public function login(){



        if ($this->session("user")){
            header("location: ./");
            exit;
        }


            $error = [];

        if(filter_input(INPUT_POST, "login")){

            $validator = new ValidatorLogin();
            $userLogin = new UserLogin;
            $error = $validator->valid($userLogin);


            if (!$error){

                try {

                    $repository = new UserLoginRepository();
                    $users = $repository->findByEmail($userLogin);

                    if ($users && password_verify($userLogin->getPassword(), $users[0]->getPassword())) {
                        $this->session("user", [
                            "id" => $users[0]->getId(),
                            "token" => md5(
                                filter_input(INPUT_SERVER, "HTTP_USER_AGENT")
                                .filter_input(INPUT_SERVER, "REMOTE_ADDR")
                        ) ]);
                        header('Location: users');
                        exit;
                    }
                    $error["error"] = "le compte n'existe pas";

                }catch(\PDOException $e){
                    $error["error"] = "Please retry later:" . $e->getMessage();
                }
            }
        }

        $this->display("login/login.html.php", ["error" => $error, "title" => "Identification"]);

    }

    public function logout(){
        $this->session(false);
        header("location: login");
        exit;
    }


}