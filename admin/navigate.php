<?php
include '../function.php';
include_once '../session.php';
Session::init();

$function = new Functions();

//---ADDING SECTION---//

	//Add User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-user'])){
		
		$flag = $function->addUser($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new User has been added! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: Add-user.php");
	}
	
	//Edit User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-user'])){		
		$user_users_id = $_GET['user_id'];
		
			$flag = $function->UpdateUser($_POST, $user_users_id);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-user.php?user_id=".$user_users_id);
	}
	//Delete User
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-user'])){		
	
		if (isset($_POST['users_id'])) {
	        $user_id = $_POST['users_id'];
	        $flag = $function->DeleteUser($user_id);
				if ($flag == 1) {
					$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>User has been deleted! </center> </div><br>";
				} else {
					$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
				}
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: users.php");
	}

	//Add Patient
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-patient'])){
		
		$flag = $function->addPatients($_POST);
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Patient has been added! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		
		header("Location: Add-patient.php");
	}
	
	//Edit Patient
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-patient'])){		
		$patient_Patient_id = $_GET['patient_id'];

		
	    	$flag = $function->UpdatePatients($_POST, $patient_Patient_id);		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Patient has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-patient.php?patient_id=".$patient_Patient_id);
	}

	//Delete Patient
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-delete-patient'])){		
	
		if (isset($_POST['Patient_id'])) {
	        $patient_id = $_POST['Patient_id'];
	        $flag = $function->DeletePatient($patient_id);
				if ($flag == 1) {
					$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Patient has been deleted! </center> </div><br>";
				} else {
					$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
				}
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: patients.php");
	}
	//Add Room
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-room'])){
		
		$flag = $function->AddRoom($_POST);
		if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Room has been added! </center> </div><br>");
		}
		else{
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
		}
	
	header("Location: Add-Room.php");
	}
	
	//Edit Room
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-Room'])){		
		$Room_Room_id = $_GET['Room_id'];

		
	    	$flag = $function->UpdateRooms($_POST,$Room_Room_id );		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Room has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-Room.php?Room_id=".$Room_Room_id );
	}

	//Delete Room
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-Rooms'])) {
		if (isset($_POST['Room_id'])) {
			$Room_id = $_POST['Room_id'];
			$flag = $function->DeleteRoom($Room_id);
				if ($flag == 1) {
					$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Room has been deleted! </center> </div><br>";
				} else {
					$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
				}
		    } else {
		        $_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		    }
		header("Location: Rooms.php");
	}

	//Add Appointment
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-appointment'])){
		
		$flag = $function->AddAppointment($_POST);
		if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Appointment has been added! </center> </div><br>");
		}
		else{
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
		}
	
	header("Location: Add-appointment.php");
	}

	//Edit Appointment
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-appointment'])){		
		$Appointment_Appointment_id = $_GET['Appointment_id'];

		
	    	$flag = $function->UpdateAppointment($_POST,$Appointment_Appointment_id );		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Appointment has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-appointment.php?Appointment_id=".$Appointment_Appointment_id );
	}

	//Delete Appointment
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-appointment'])) {
		if (isset($_POST['Appointment_id'])) {
			$Appointment_id = $_POST['Appointment_id'];
			$flag = $function->DeleteAppointment($Appointment_id); 
	
			if ($flag == 1) {
				$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Appointment has been deleted! </center> </div><br>";
			} else {
				$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
			}
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		}
		header("Location: appointment.php");
	}

	//Add Medical
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-medical'])){
		
		$flag = $function->AddMedical($_POST);
		if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Medical Record has been added! </center> </div><br>");
		}
		else{
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
		}
	
	header("Location: Add-medical.php");
	}

	//Edit Medical
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-medical'])){		
		$Record_Record_id = $_GET['Record_id'];

		
	    	$flag = $function->UpdateMedical($_POST,$Record_Record_id );		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Medical Record has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-medical.php?Record_id=".$Record_Record_id );
	}

	//Delete Medical
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-medical'])) {
		if (isset($_POST['Record_id'])) {
			$Record_id = $_POST['Record_id'];
			$flag = $function->DeleteMedical($Record_id); 
	
			if ($flag == 1) {
				$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Medical Record has been deleted! </center> </div><br>";
			} else {
				$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
			}
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		}
		header("Location: medical.php");
	}

	//Add Medicine
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-medicine'])){
		
		$flag = $function->AddMedicine($_POST);
		if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Medicine has been added! </center> </div><br>");
		}
		else{
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
		}
	
	header("Location: Add-medicine.php");
	}

	//Edit Medicine
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-medicine'])){		
		$Medicine_Medicine_id = $_GET['Medicine_id'];

		
	    	$flag = $function->UpdateMedicine($_POST,$Medicine_Medicine_id );		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Medicine has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-medicine.php?Medicine_id=".$Medicine_Medicine_id );
	}

	//Delete Medicine
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-medicine'])) {
		if (isset($_POST['Medicine_id'])) {
			$Medicine_id = $_POST['Medicine_id'];
			$flag = $function->DeleteMedicine($Medicine_id); 
	
			if ($flag == 1) {
				$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Medicine has been deleted! </center> </div><br>";
			} else {
				$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
			}
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		}
		header("Location: medicine.php");
	}

	
	//Add Supply
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-supply'])){
		
		$flag = $function->AddSupply($_POST);
		if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Supply has been added! </center> </div><br>");
		}
		else{
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
		}
	
	header("Location: Add-supply.php");
	}

	//Edit Supply
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-supply'])){		
		$Supply_Supply_id = $_GET['Supply_id'];

		
	    	$flag = $function->UpdateSupply($_POST,$Supply_Supply_id );		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Supply has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-supply.php?Supply_id=".$Supply_Supply_id );
	}

	//Delete Supply
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-supply'])) {
		if (isset($_POST['Supply_id'])) {
			$Supply_id = $_POST['Supply_id'];
			$flag = $function->DeleteSupply($Supply_id); 
	
			if ($flag == 1) {
				$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Supply has been deleted! </center> </div><br>";
			} else {
				$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
			}
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		}
		header("Location: supply.php");
	}

	//Add Billing
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-billing'])){
		
		$flag = $function->AddBilling($_POST);
		if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Billing has been added! </center> </div><br>");
		}
		else{
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
		}
	
	header("Location: Add-billing.php");
	}

	//Edit Billing
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-billing'])){		
		$Billing_Billing_id = $_GET['Billing_id'];

		
	    	$flag = $function->UpdateBilling($_POST,$Billing_Billing_id );		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Billing has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-billing.php?Billing_id=".$Billing_Billing_id );
	}

	//Delete Billing
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-billing'])) {
		if (isset($_POST['Billing_id'])) {
			$Billing_id = $_POST['Billing_id'];
			$flag = $function->DeleteBilling($Billing_id); 
	
			if ($flag == 1) {
				$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Billing has been deleted! </center> </div><br>";
			} else {
				$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
			}
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		}
		header("Location: billing.php");
	}

	//Add Category
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-add-category'])){
		
		$flag = $function->AddCategory($_POST);
		if($flag==1){
			Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i> A new Category has been added! </center> </div><br>");
		}
		else{
			Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
		}
	
	header("Location: Add-category.php");
	}

	//Edit Category
	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn-edit-category'])){		
		$Category_Category_id = $_GET['Category_id'];
 
		
	    	$flag = $function->UpdateCategory($_POST,$Category_Category_id );		
			if($flag==1){
			    Session::set("msg", "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Category has been changed! </center> </div><br>");
			}
			else{
			    Session::set("msg", "<div style='background-color: #ED4337; color:white; border: solid #ED4337  color:white;1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>");
			}
		header("Location: Edit-category.php?Category_id=".$Category_Category_id );
	}

	//Delete Category
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-delete-category'])) {
		if (isset($_POST['Category_id'])) {
			$Category_id = $_POST['Category_id'];
			$flag = $function->DeleteCategory($Category_id); 
	
			if ($flag == 1) {
				$_SESSION["msg"] = "<div style='background-color: #9fdf9f; color:black; border: solid #9fdf9f 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-check'></i>Category has been deleted! </center> </div><br>";
			} else {
				$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Something went wrong! </center> </div><br>";
			}
		} else {
			$_SESSION["msg"] = "<div style='background-color: #ED4337; color:white; border: solid #ED4337 1px; border-radius: 5px; padding: 10px;'><center><i class='fa fa-warning'></i>Invalid request! </center> </div><br>";
		}
		header("Location: category.php");
	}
	





	
?>