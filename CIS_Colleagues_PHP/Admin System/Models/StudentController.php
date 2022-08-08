<?php
     require 'StudentModel.php';
    require 'Student.php';
    require_once 'config.php';
    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();
    
	class Controller 
	{

 		function __construct() 
		{          
			$this->objconfig = new config();
			$this->objsm =  new Model($this->objconfig);
		}
        // mvc handler request
		public function mvcHandler() 
		{
			$act = isset($_GET['act']) ? $_GET['act'] : NULL;
			switch ($act) 
			{
                case 'add' :                    
					$this->signUp();//signUp
					break;									
				case 'retrieve' :					
					$this -> logIn();//logIn
					break;								
				
			}
		}		
        // redirection function
		public function pageRedirect($url)
		{
			header('Location:'.$url);
				  ob_end_flush();
			       exit();
		}	
		
		
        // check validation
		public function checkValidationSignUp($Student1)
        {   
		 $str=$Student1->email;
	     $char= strpos($str,"@");
         $officialemail=substr($str,$char+1);
         
		   $noerror=true;
		  
				// Validate email        
				if(empty($Student1->email)){
				$Student1->email_msg = "Field is empty."; $noerror=false;
				}elseif(!($officialemail=='st.uqu.edu.sa')){
				 $Student1->email_msg = "Make sure to use the university email."; $noerror=false;
				}else{$Student1->email_msg ="";}            
				
				// Validate name            
				if(empty($Student1->name)){
					$Student1->name_msg = "Field is empty.";$noerror=false;     
				} elseif(!filter_var($Student1->name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[a-zA-Z]/")))){
					$Student1->name_msg = "Invalid entry.";$noerror=false;
				}else{$Student1->name_msg =" ";}
				
				// Validate password
				 if(empty($Student1->password)){
				  $Student1->password_msg = "Field is empty."; $noerror=false;     
				} elseif(!preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $Student1->password)){
				  $Student1->password_msg = "Make sure you have entered numbers and letters."; $noerror=false;
				}else{$Student1->password_msg =" ";}
				
				// Validate department
				 if(empty($Student1->department)){
					$Student1->department_msg = "Field is empty."; $noerror=false;     
				 }else{$Student1->department_msg =" ";}
				 
	        

            return $noerror;
	   
	   
        }
		
		
		        // check validation
		public function checkValidationLogin($Student1)
        {   
	        	// Validate email   
		       $str=$Student1->email;
	           $char= strpos($str,"@");
               $officialemail=substr($str,$char+1);
         
		       $noerror=true;
		         
				if(empty($Student1->email)){
				  $Student1->loginemail_msg = "Field is empty."; $noerror=false;
				}elseif(!($officialemail=='st.uqu.edu.sa')){
				 $Student1->loginemail_msg = "Make sure to use the university email."; $noerror=false;
				}else{$Student1->loginemail_msg ="";}            
		   
				// Validate password
				 if(empty($Student1->password)){
				  $Student1->loginpassword_msg = "Field is empty."; $noerror=false;     
				} elseif(is_numeric($Student1->password)){
				  $Student1->loginpassword_msg = "Invalid entry.Use letters and numbers "; $noerror=false;
				}else{$Student1->loginpassword_msg =" ";}
			
			

            return $noerror;
	   
	   
        }
        
	
		
		
		public function logIn()
		{
            try{
                $Student1=new Student();
                if (isset($_POST['retrievebtn'])) 
                {   
                    // read form value
					$Student1->set_email( trim($_POST['email']));
					$Student1->set_password(trim($_POST['password']));
                 
				
                    //call validation function
                    $chk=$this->checkValidationLogin($Student1);   
                  				
                    if($chk)
                    {   
			     	
                        //call insert record      
							   
                        $res = $this -> objsm ->selectRecord($Student1);
					
                        if($res=='student'){
							
                         $this->pageRedirect("../Student System/SEventView.html");   
                        }
					    else{ $this->pageRedirect("alert.html"); }
                    }else{   
                   					
                    $_SESSION['Student_User']=serialize($Student1);//add session obj    
                   						
                    $this->pageRedirect("../Student System/SignInUpView.php");                
                    }
                }
            }catch (Exception $e) 
            {
                $this->close_db();	
                throw $e;
            }
        }
		
		
		public function signUp()
		{
            try{
                $Student1=new Student();
                if (isset($_POST['addbtn'])) 
                {   
                    // read form value
					
                    
                    $Student1->set_name(trim($_POST['name']));
					$Student1->set_email(trim($_POST['email']));
					$Student1->set_password(trim($_POST['password']));
                    $Student1->set_department(trim($_POST['department']));
				
                      //call validation function
                    $chk=$this->checkValidationSignUp($Student1);   
                  				
                    if($chk)
                    {   
			     	
                        //call insert record      
							   
                        $res = $this -> objsm ->insertRecord($Student1);
					
                        if($res){
							
                            $this->pageRedirect("alert2.html");   
                        }else{
							
							
                          $this->pageRedirect("alert3.html");    
                           
                        }
                    }else
                    {   
                   					
                    $_SESSION['Student_User']=serialize($Student1);//add session obj    
                   						
                    $this->pageRedirect("../Student System/SignInUpView.php");                
                    }
                }
            }catch (Exception $e) 
            {
                $this->close_db();	
                throw $e;
            }
        }

    }
		
		
	
?>