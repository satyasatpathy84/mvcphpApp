<?php

class Admin extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
	
	
	//main
	public function index()
	{
		echo "hello";
	}	
	
    public function login()
    {       
			 $user_model=$this->loadModel('UserModel');
	       $state = $user_model->getstate();
			 $id=$_SESSION['session_user'];
			if(isset($id))
			{
			 $user_detail=$user_model->getalluser($id);
      		require 'application/views/common/user_top.php';
			}
			else
			{
			  require 'application/views/common/top.php';
			}
	       require 'application/views/home_page/index.php';
		   require 'application/views/common/footer.php';
        
    }
	


  } 
?>