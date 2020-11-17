<?php
namespace controller;
include_once "mvc/view/View.php";
use view\View;
include_once "mvc/model/Patient.php";
use model\Model;

class Controller
{
    private $view;
    private $model;
    public function __construct(){
        $this->model = new Model();
        $this->view = new View($this->model);
    }
    public function readPatientenAction(){
        $this->view->showPatienten();
    }

    public function showFormPatientAction($id=null){
       $this->view->showFormPatienten($id);
    }
    public function createPatientAction(){
        $naam = filter_input(INPUT_POST,'naam');
        $adres = filter_input(INPUT_POST,'adres');
        $woonplaats = filter_input(INPUT_POST,'woonplaats');
        $geboortedatum = filter_input(INPUT_POST,'geboortedatum');
        $soortverzekering = filter_input(INPUT_POST,'soortverzekering');
        $zknummer = filter_input(INPUT_POST,'zknummer');
        $result = $this->model->insertPatient($naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering);
        $this->view->showPatienten($result);
    }
    public function updatePatientAction(){
        $id = filter_input(INPUT_POST,'id');
        $naam = filter_input(INPUT_POST,'naam');
        $adres = filter_input(INPUT_POST,'adres');
        $woonplaats = filter_input(INPUT_POST,'woonplaats');
        $geboortedatum = filter_input(INPUT_POST,'geboortedatum');
        $zknummer = filter_input(INPUT_POST,'zknummer');
        $soortverzekering = filter_input(INPUT_POST,'soortverzekering');
        $result=$this->model->updatePatient($id,$naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering);
        $this->view->showPatienten($result);
    }
    public function deletePatientAction($id){
        $result = $this->model->deletePatient($id);
        $this->view->showPatienten($result);
    }
    public function readUsersAction(){
        $this->view->showUsers();
    }

    public function showFormUserAction($id=null){
       $this->view->showFormUsers($id);
    }
    public function createUserAction(){
        $uname = filter_input(INPUT_POST,'uname');
        $pswrd = filter_input(INPUT_POST,'pswrd');
        $result = $this->model->insertUser($uname,$pswrd);
        $this->view->showUsers($result);
    }
    public function updateUserAction(){
        $id = filter_input(INPUT_POST,'id');
        $uname = filter_input(INPUT_POST,'uname');
        $pswrd = filter_input(INPUT_POST,'pswrd');
        $result=$this->model->updateUser($id,$uname,$pswrd);
        $this->view->showUsers($result);
    }
    public function deleteUserAction($id){
        $result = $this->model->deleteUser($id);
        $this->view->showUsers($result);
    }
}