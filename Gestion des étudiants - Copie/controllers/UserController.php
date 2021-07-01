<?php
namespace ism\controllers;
use ism\lib\Role;
use ism\lib\Request;
use ism\lib\Session;
use ism\lib\Response;
use ism\models\UserModel;
use ism\lib\AbstractModel;
use ism\models\CoursModel;
use ism\lib\AbstractController;
use ism\models\RessourcesModel;

class UserController extends AbstractController
{
   
    public function __construct()
    {
        parent::__construct();
        $this->model= new UserModel();
    }

    
     public function add(){
        if(!Role::estAdmin())Response::redirectUrl("security/login");
        $login = Session::getSession("login");
        $role = Session::getSession("role");
        Session::destroyKey("login");
        Session::destroyKey("role");
        Session::destroyKey("action");
        $model = new UserModel();
        $model->insert(["login" => $login,"role" => $role]);
        if ($role=="ROLE_AC") {
            Response::redirectUrl("user/showListeAC");

        } else {
            Response::redirectUrl("user/showListeRP");

        }
    }
    public function delete(){
        if(!Role::estAdmin())Response::redirectUrl("security/login");
        $login = Session::getSession("login");
        Session::destroyKey("login");
        Session::destroyKey("action");
        $model = new UserModel();
        $model->delete($login);
        Response::redirectUrl("user/showListeAC");
    }

    public function updateUser(Request $requeste){
        if ($requeste->isPost()) {
            $id = Session::getSession("user_connect")["id"];
            $data=$requeste->getBody();
            $model = new UserModel();
            $model->updateUser($id,$data);
            Response::redirectUrl("user/userProfil");
        }
        $this->render("user/update");
    }
public function showAdmin(Request $requeste){
    if ($requeste->isPost()) {
         $role = Session::getSession("user_connect")["role"];
            $sql=$requeste->getBody();
        $s= $this->model->selectBy($sql, ["role"], true);
        $this->render("user/admin.bien", ["user" => $s]);
    }
    $this->render("user/update");
}
public function admin(Request $requeste){
    $this->render("user/admin");
}
public function ac(Request $requeste){
    $this->render("user/ac");
}
public function rp(Request $requeste){
    $this->render("user/rp");
}
public function prof(Request $requeste){
    $this->render("user/prof");
}
public function etudiant(Request $requeste){
    $this->render("user/etudiant");
}

}

?>