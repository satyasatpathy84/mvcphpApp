<?php
class AdministratorModel
{
 function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
	
	public function builder_verify()
    {
        // clean the input from javascript code for example
        $sql = "SELECT * from project_builder as pb JOIN state_master as sm ON pb.state=sm.state_id JOIN city_master as cm ON pb.city=cm.city_id where pb.status=:st ";
         $query = $this->db->prepare($sql);
         $query->execute(array(':st' => 0));
		return $query->fetchall();
		 //print_r($dat);
    }
	
	public function project_verify()
    {
        // clean the input from javascript code for example
        $sql = "SELECT * from project_detail as pd JOIN project_builder as pb ON pd.builder_id=pb.builder_id JOIN state_master as sm ON pd.state=sm.state_id JOIN city_master as cm ON pd.city=cm.city_id  where pd.status=:st ";
         $query = $this->db->prepare($sql);
         $query->execute(array(':st' => 0));
		return $query->fetchall();
		 //print_r($dat);
    }
	
	
	
	//** REMOVE BUILDER
	
	public function removebuilder($builder_id)
	{
		
		try
		{
		$sql = "delete from  project_builder where builder_id=:builder_id";
         $query = $this->db->prepare($sql);

         $query->execute(array(':builder_id'=>$builder_id));
	}
	
	catch( PDOExecption $e ) { 
    print "Error!: " . $e->getMessage() . "</br>";
	}
	}
	
	public function verifybuilder($builder_id)
	{
		
		try
		{
		$sql = "update  project_builder set status='1' where builder_id=:builder_id";
         $query = $this->db->prepare($sql);

         $query->execute(array(':builder_id'=>$builder_id));
	}
	
	catch( PDOExecption $e ) { 
    print "Error!: " . $e->getMessage() . "</br>";
	}
	}
	
	
	
	
	public function removeproject($project_id)
	{
		
		try
		{
		$sql = "delete from  project_detail where project_id=:project_id ";
         $query = $this->db->prepare($sql);

         $query->execute(array(':project_id'=>$project_id));
	}
	
	catch( PDOExecption $e ) { 
    print "Error!: " . $e->getMessage() . "</br>";
	}
	}
	
	public function verifyproject($project_id)
	{
		try
		{
		$sql = "update  project_detail set status='1' where project_id=:project_id ";
         $query = $this->db->prepare($sql);

         $query->execute(array(':project_id'=>$project_id));
	}
	
	catch( PDOExecption $e ) { 
    print "Error!: " . $e->getMessage() . "</br>";
	}
	}
	
	
	
	
}
?>