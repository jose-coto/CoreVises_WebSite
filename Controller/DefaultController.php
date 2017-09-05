<?php
@session_start();
include_once 'model/DefaultModel.php';

class DefaultController {

    private $model;

    public function __construct() {
        $this->model = new DefaultModel();
    }

    public function invoke() {
        if (isset($_GET['index'])) {
            if ($_GET['index'] == "login") {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $return = $this->model->validateLogin($email, $password);
                    if ($return=="true") {
                        include 'view/homeView.php';
                        exit();
                    } else {
                        include 'view/loginErrorView.php';
                        exit();
                    }
            }else if ($_GET['index'] == "register") {
                $idCard = $_POST['idCard'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['pass'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $return2 = $this->model->registerUser($idCard,$name,$email,$password,$address,$phone);
                    if ($return2!=NULL) {                    
                        include 'view/homeView.php';
                        exit();
                    } else {
                        include 'view/registerView.php';
                        exit();
                    }
            } else if ($_GET['index'] == "search") {
                if($_POST['search']==""){
                    $return = $this->model->getProducts();
                    $return2 = $this->model->getDollar();
                    include 'view/listView.php';
                    exit();
                } else{
                    $search = $_POST['search'];
                    if($search=="Ropa"||$search=="Tecnologia"||$search=="Muebles"||$search=="Libros"||$search=="Linea Blanca"||$search=="Accesorios"){
                        
                        $return = $this->model->getProductsByCategory($search);
                        $return2 = $this->model->getDollar();
                        include 'view/listView.php';
                        exit(); 
                    } else{
                        $return = $this->model->getProductsByName($search);
                        if($return===""){
                            include 'view/listViewError.php';
                            exit();
                        }else{
                            $return2 = $this->model->getDollar();
                            include 'view/listView2.php';
                            exit();  
                        }
                    }
                     
            }}else if($_GET['index'] == "loginView"){
                include 'View/indexView.php';
                exit();
            } else if($_GET['index'] == "registerView"){
                include 'View/registerView.php';
                exit();
            } else if($_GET['index'] == "singOut"){
                include 'View/indexView.php';
                exit();
            }
        }//invoke
        include 'View/indexView.php';
    }

//class
}
?>


