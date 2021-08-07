<?php
	
	class DbOperations{
		
		private $con;
		
		function __construt(){
			
			include_once dirname(__FILE__).'/DbConnects.php';
			
			$db =  	new DbConnects();
			
			$this->con = connect();
			
		}
		function createUser($gidertürü, $gideraciklama ,$giderucret ,giderTarih){
			
			$stmt= this->con->prepare("INSERT INTO `giderler` (`giderId`, `giderTürü`, 
			`giderAciklama`, `giderUcret`, `giderTarih`)VALUES (NULL , ?, ?, NULL, NULL);");
			
			$stmt->bind_param( "sss", $giderTürü, $giderAciklama, $giderUcret, $giderTarih);
			
			($stmt->execute()){
				return true;
			}else{
				return false;
			}
		}
	}
?>