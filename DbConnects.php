<?php
	
	class DbConnnects{
		
		private $con;
		
		function __construt(){
			
		}
		function connect(){
			include_once dirname(__FILE__).'/Constants.php';
			
			$this->con = new mysqli(dbHost,dbUser,dbPassword,dbName);
			
			if(mysqli_connect_errno()){
				echo "Failed to connect with database".mysqli_connect_err();
			}
			return this->con;
		}
	}
?>