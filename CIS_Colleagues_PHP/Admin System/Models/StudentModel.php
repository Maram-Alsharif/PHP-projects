<?php
	   
	class Model
	{
	  
		// set database config for mysql
		function __construct($consetup)
		{
			$this->host = $consetup->host;
			$this->user = $consetup->user;
			$this->pass =  $consetup->pass;
			$this->db = $consetup->db;            					
		}
		// open mysql data base
		public function open_db()
		{
			$this->condb=new mysqli($this->host,$this->user,$this->pass,$this->db);
			if ($this->condb->connect_error) 
			{
    			die("Erron in connection: " . $this->condb->connect_error);
			}
		}
		// close database
		public function close_db()
		{
			$this->condb->close();
		}	

	      // insert record
		public function insertRecord($Student1)
		{
			try
			{	
				$this->open_db(); //call open_db function
				$query1=$this->condb->prepare("SELECT * FROM student WHERE uni_email=?");
				$query1->bind_param("s",$Student1->email);
				$query1->execute();
				$res1= $query1->get_result();
			    $check=1;
			   while ($row = mysqli_fetch_array ($res1)) {		
			    if($row['uni_email']== $Student1->email){
			   
				 $check=0;
				 break;
				 return false;
				}
			   }

			   if($check==1){
				$salt = "codeflix";
                $Student1->password  .=$salt;				   
				$query=$this->condb->prepare("INSERT INTO student (s_FName,uni_email,password,department) VALUES (?, ?,?,?)");
				$query->bind_param("ssss",$Student1->name,$Student1->email,$Student1->password ,$Student1->department);
				$query->execute();
				$res= $query->get_result();
				$query->close();
				$this->close_db();//call close_db function
				return true;
				}
			
			 
			}catch (Exception $e) 
			{
				$this->close_db();	
            	throw $e;
        	}
		}
		
		
		
		      // select record     
		public function selectRecord($Student1)
		{
			try
			{
                $this->open_db(); //call open_db function
				$query1=$this->condb->prepare("SELECT * FROM student WHERE uni_email=?");
				$query1->bind_param("s",$Student1->email);
				$query1->execute();
				$res1= $query1->get_result();
			 
			   while ($row = mysqli_fetch_array ($res1)) {	
                $salt = "codeflix";
                $Student1->password  .=$salt;			   
			    if(($row['uni_email']== $Student1->email)&&($row['password']== $Student1->password)){
			   
				 
				 return 'student';
				}
			   }
			   
			
			 return'non';
			 
			}
			catch(Exception $e)
			{
				$this->close_db();
				throw $e; 	
			}
			
		}
		
		
	
		
}
?>