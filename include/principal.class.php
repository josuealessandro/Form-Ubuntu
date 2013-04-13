<?php

class Principal{
	
	public function conn(){
            $conn = new PDO('mysql:host=localhost;port=3306;dbname=josue145_form_ubuntu;charset=UTF-8', 'josue145_ubuntu', 'ubuntu2013');
            return $conn;
	}
        
        public function login($conn, $login, $senha){
            //$conn = new PDO();
            $sql = "
                SELECT 
                  id, nome, login, ativo 
                FROM
                  admin 
                WHERE login = '".$login."' 
                  AND senha = MD5('".$senha."') 
            ";
            
            $rows = $conn->query($sql);
            
            $dados = array();
            foreach($rows as $row){
                $dados[]=$row;
            }
            
            return $dados;
        }
	
}
?>