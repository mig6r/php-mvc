<?php

namespace PHPInitiation\Controller\Users;

use PHPInitiation\Controller\Controller;
use PHPInitiation\Model\User\User;
use PHPInitiation\Model\User\UserAvatar;
use PHPInitiation\Model\User\UserInfo;
use PHPInitiation\Model\User\UserLogin;
use PHPInitiation\Repository\UserLoginRepository;
use PHPInitiation\Validator\ValidatorInfo;
use PHPInitiation\Validator\ValidatorSignin;



class UsersController extends Controller
{


    /**
     * Create a user
     */
    public function new()

    {

        session_start();
        if ($this->session("user")){
            header("location: ./");
            exit;
        }
        $title = "Inscription";
        $error = [];

        // if (filter_input_array(INPUT_POST)) {
        if (filter_input(INPUT_POST, "new_user")) {

            $userLogin = new UserLogin;
            $validatorSignin = new ValidatorSignin();
            $userInfo = new UserInfo;
            $validatorInfo = new ValidatorInfo();

            $error = $validatorInfo->valid($userInfo) + $validatorSignin->valid($userLogin);

            if (0 === count($error)) {

                try {

                    $repository = new userLoginRepository();
                    $repository->persist($userLogin);

                } catch (\PDOException $e) {

                    //if("23000" === $e->errorInfo[0])
                    if ("23000" === $e->getCode()) {
                        $error["email"] = "L'email existe déja";
                    } else {
                        $error["pdo"] = "Problème avec le serveur";
                    }

                }
    }
}
        //include(__DIR__ . "/../../../template/users/users_new.html.php");
        // On ne veut plus que la vue est accès à nos données, on fait donc l'include dans une classe parent
        // $data = [];
        //$data["error"] = $error;
        //$data["title"] = $title;
        //parent::display("users/users_new.html.php", $data);

        //On peut viser directement le parent pour plus de lisibilité
        //parent::display("users/users_new.html.php", ["error" => $error, "title" => $title]);

        $this->display("users/users_new.html.php", ["error" => $error, "title" => $title]);
    }

    /**
     * Read Users
     */
    public function read()
    {

        try {

            $repository = new userLoginRepository();
            $users = $repository->findAll();

        }catch(\PDOException $e){

        }
/*        $avatar = new UserAvatar();
        $login = new UserLogin();
        $info = new UserInfo();
        $user = new User();

        $info->setFirstName("john");
        $user->setInfo($info);

        $avatar2 = new UserAvatar();
        $login2 = new UserLogin();
        $info2 = new UserInfo();
        $user2 = new User();

        $info2->setFirstName("Kelly");
        $user2->setInfo($info2);

        $avatar3 = new UserAvatar();
        $login3 = new UserLogin();
        $info3 = new UserInfo();
        $user3 = new User();
        $info3->setFirstName("Bob");
        $user3->setInfo($info3);



        $title = "Users";
        $users = [
            $user,
            $user2,
            $user3
        ];*/
        $this->display("users/users.html.php", ["users" => $users, "title" => "Utilisateurs"]);
        //include(__DIR__ . "/../../../template/users/users.html.php");
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}