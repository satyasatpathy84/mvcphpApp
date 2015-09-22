<?php
class LoginModel
{
 function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
	
  public function checklogin($username,$password)
    {
        // clean the input from javascript code for example
        $username = strip_tags($username);
        $password = strip_tags($password);
       

         $sql = "SELECT username,role,id from login where username=:username and password=:password";
         $query = $this->db->prepare($sql);
         $query->execute(array(':username' => $username, ':password' => $password));
		 return $query->fetch(PDO::FETCH_ASSOC);
 		
    }
	
}

?>