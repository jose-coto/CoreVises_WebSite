<?php

    require_once 'nusoap/lib/nusoap.php';
    
    class DefaultModel{
        private $conn;
        public function __construct() {
          
        }//construct
        
        public function validateLogin($email, $pass){
            
            $wsdl="http://192.168.43.98/UserWebService.asmx?WSDL";
            
            $client=new nusoap_client($wsdl,true);
            
            $param=array('email'=>$email, 'password'=>$pass);
            
            $result=$client->call("validateLogin", $param);
            
            foreach ($result as $rs){
                $return=$rs;
            }
            
            return $return;
        }//validateLogin2
        
        
        
        public function registerUser($idCard,$name,$email,$password,$address,$phone){
            
            $wsdl="http://192.168.43.98/UserWebService.asmx?WSDL";
            
            $client=new nusoap_client($wsdl,true);
            
            $param=array('fullName'=>$name,'identificationCard'=>$idCard,'phone'=>$phone,'address'=>$address,'email'=>$email,'password'=>$password);
            
            $result2=$client->call("insertUser", $param);
            
            foreach ($result2 as $rs){
                $return2=$rs;
            }
            
            return $return2;
        }//validateLogin2
        
        public function getProducts() {
            $wsdl="http://192.168.43.98/WebServiceProduct.asmx?WSDL";
            
            $client=new nusoap_client($wsdl,true);
                        
            $result=$client->call("getProducts");
            
            foreach ($result as $rs){
                $return2=$rs;              
            }
            
            return $return2;
        }
        
        public function getDollar() {
            $wsdl="http://192.168.43.98:80/WebServiceProduct.asmx?WSDL";
            
            $client=new nusoap_client($wsdl,true);
            
            $users=$client->call("getChangeRage");
            
            foreach($users as $user){
                $returnUsers= $user;
            }
            
            $string=  substr($returnUsers, 0, 6);
            
            return $string;
        }
        
        public function getProductsByCategory($search) {
            $wsdl="http://192.168.43.98/WebServiceProduct.asmx?WSDL";
            
            $client=new nusoap_client($wsdl,true);
            
            $param=array('category'=>$search);
                        
            $result=$client->call("getProductsByCategory", $param);
            
            foreach ($result as $rs){
                $return=$rs;              
            }
            
            return $return;
        }
        
        public function getProductsByName($search) {
            $wsdl="http://192.168.43.98/WebServiceProduct.asmx?WSDL";
            
            $client=new nusoap_client($wsdl,true);
            
            $param=array('namep'=>$search);
                        
            $result=$client->call("getProductsByName", $param);
            
            foreach ($result as $rs){
                $return=$rs;              
            }
            
            return $return;
        }
        
}//class
    
?>

