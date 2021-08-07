<?php
	
	require_once '.../includes/DbOperations.php';
	$response = array();
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(
			isset($_POST['giderTürü']) and
				isset($_POST['giderAciklama']) and
					isset($_POST['giderUcret']) and
						isset($_POST['giderTarih']) and
		){
			$db = new DbOperations();
			
			if($db =createUser(
			$_POST['giderTürü'] 
			$_POST['giderAciklama']
			$_POST['giderUcret'] 
			$_POST['giderTarih'] 
			)){
				$response['error'] = false;
				$response['message'] = "Succesfully";
			}else{
				$response['error'] = true;
				$response['message'] = "No Succesfully";
			}
			
		}else{
			$response['error'] = true;
			$response['message'] = "Required fields are missing";
		}
	}else{
		$response['error'] = true;
		$response['message'] = "Invalid Request";
	}
	echo json_encode($response);
?>