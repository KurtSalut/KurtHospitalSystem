<?php
include 'conn.php';

Class Functions
{
	private $db;
	public function __construct(){
	$this->db = new conn(); 
	}



	//Create User
	public function addUser($data){		
	$sql ="INSERT INTO tbl_users (First_name, Middle_name, Last_name, Suffix, Street, Barangay, Municipality, Province, Contact, Email, Status, Role, Password) VALUES (:First_name, :Middle_name, :Last_name, :Suffix, :Street, :Barangay, :Municipality, :Province, :Contact, :Email, :Status, :Role, :Password)";
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([ ':First_name' => $data['First_name'],
				  ':Middle_name' => $data['Middle_name'],
				  ':Last_name' => $data['Last_name'],
				  ':Suffix' => $data['Suffix'],
				  ':Street' => $data['Street'],
				  ':Barangay' => $data['Barangay'],
				  ':Municipality' => $data['Municipality'],
				  ':Province' => $data['Province'],
				  ':Contact' => $data['Contact'],
				  ':Email' => $data['Email'],
				  ':Status' => $data['Status'],
				  ':Role' => $data['Role'],
				  ':Password' => $data['Password']]);

														
		if($r){
			// success!!!
			return 1;
			
		
		}else{
			// somthing wrong with queries
			return 0;
		}
							
	}

	//Read All Users
	public function GetAllUsers(){
	$sql = 'SELECT * FROM tbl_users ORDER BY users_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read All Foreignkey 
	public function GetAllUsersId(){
		$sql = 'SELECT * FROM tbl_users ORDER BY users_id DESC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
		}


	//Read Only User
	public function GetUserInfo($id){
		$sql = 'SELECT * FROM tbl_users WHERE users_id=:users_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':users_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}



	//Update User
	public function UpdateUser($data, $id){
		$sql = 'UPDATE tbl_users SET First_name=:First_name, Middle_name=:Middle_name, Last_name=:Last_name, Suffix=:Suffix, Street=:Street, Barangay=:Barangay, Municipality=:Municipality, Province=:Province, Contact=:Contact, Email=:Email, Status=:Status,  Role=:Role, Password=:Password WHERE users_id = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':First_name' => $data['First_name'],
						  ':Middle_name' => $data['Middle_name'],
						  ':Last_name' => $data['Last_name'],
						  ':Suffix' => $data['Suffix'],
						  ':Street' => $data['Street'],
						  ':Barangay' => $data['Barangay'],
						  ':Municipality' => $data['Municipality'],
						  ':Province' => $data['Province'],
						  ':Contact' => $data['Contact'],
						  ':Email' => $data['Email'],
						  ':Status' => $data['Status'],
						  ':Role' => $data['Role'],
						  ':Password' => $data['Password'],
						  ':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

	//Delete User
	public function DeleteUser($id){
		$sql = 'DELETE FROM tbl_users WHERE users_id=:users_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':users_id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

 



	//Create Patient
	public function addPatients($data){		
	$sql ="INSERT INTO tbl_patient (First_name, Middle_name, Last_name, Date_of_Birth, Age, Contact_number, Address)
	 VALUES (:First_name, :Middle_name, :Last_name, :Date_of_Birth, :Age, :Contact_number, :Address)";
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([ ':First_name' => $data['First_name'],
					  ':Middle_name' => $data['Middle_name'],
					  ':Last_name' => $data['Last_name'],
					  ':Date_of_Birth' => $data['Date_of_Birth'],
					  ':Age' => $data['Age'],
					  ':Contact_number' => $data['Contact_number'],
					  ':Address' => $data['Address']]);
					  
													
	if($r){
		// success!!!
		return 1;
		
	}else{
		// somthing wrong with queries
		return 0;
	}

	}


	//Read All Patient
	public function GetAllPatients(){
	$sql = 'SELECT * FROM tbl_patient ORDER BY Patient_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read All Foreignkey
	public function GetAllPatientId(){
		$sql = 'SELECT * FROM tbl_patient ORDER BY Patient_id DESC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
		}
	

	//Read Only Patient
		public function GetPatientInfo ($id){
		$sql = 'SELECT * FROM tbl_patient WHERE Patient_id=:Patient_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Patient_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Update Patient
	public function UpdatePatients($data, $id){
		$sql = 'UPDATE tbl_patient SET First_name=:First_name, Middle_name=:Middle_name, Last_name=:Last_name, Date_of_Birth=:Date_of_Birth, Age=:Age, Contact_number=:Contact_number, Address=:Address WHERE Patient_id = :id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':First_name' => $data['First_name'],
						  ':Middle_name' => $data['Middle_name'],
						  ':Last_name' => $data['Last_name'],
						  ':Date_of_Birth' => $data['Date_of_Birth'],
						  ':Age' => $data['Age'],
						  ':Contact_number' => $data['Contact_number'],
						  ':Address' => $data['Address'],
						  ':id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}
	//Delete Patient
	public function DeletePatient($id){
		$sql = 'DELETE FROM tbl_patient WHERE Patient_id=:Patient_id';
		$stmt = $this->db->conn->prepare($sql);
		$r = $stmt->execute([':Patient_id' => $id]);
		if($r){
			return 1;
		}else{
			return 0;
		}
	}

	// Create Rooms
public function AddRoom($data) {        
    // SQL query to insert data into tbl_room
    $sql ="INSERT INTO tbl_room (Room_type, Room_number, Capacity, Patient_id, Category_id) VALUES (:Room_type, :Room_number, :Capacity, :Patient_id, :Category_id)";
    $stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Room_type' => $data['Room_type'],
						  ':Room_number' => $data['Room_number'],
						  ':Capacity' => $data['Capacity'],
						  ':Patient_id' => $data['Patient_id'],
						  ':Category_id' => $data['Category_id']]);
    
    if($r) {
        // Success!!!
        return 1;
    } else {
        // Something wrong with the query
        return 0;
    }
}

	//Read All Room
	public function GetAllRoom(){
		$sql = 'SELECT * FROM tbl_room ORDER BY Room_id DESC';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
		}
	
		//Read Only Room
			public function GetRoomInfo ($id){
			$sql = 'SELECT * FROM tbl_room WHERE Room_id=:Room_id';
			$stmt = $this->db->conn->prepare($sql);
			$stmt->execute([':Room_id' => $id]);
			$data = $stmt->fetch(PDO::FETCH_OBJ);
			return $data;
		}
		
//Update Room
public function UpdateRooms($data, $id){
	$sql = 'UPDATE tbl_room SET Room_type=:Room_type, Room_number=:Room_number, Capacity=:Capacity, Patient_id=:Patient_id, Category_id=:Category_id WHERE Room_id = :Room_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Room_type' => $data['Room_type'],
					  ':Room_number' => $data['Room_number'],
					  ':Capacity' => $data['Capacity'],
					  ':Patient_id' => $data['Patient_id'],
					  ':Category_id' => $data['Category_id'],
					  ':Room_id' => $id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

 

//Delete Room
public function DeleteRoom($_id){
	$sql = 'DELETE FROM tbl_room WHERE Room_id=:Room_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Room_id' => $_id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Create Appointment
public function AddAppointment($data) {
    
        $sql = "INSERT INTO tbl_appointment (Patient_name, Doctor_name, Date, Time, users_id, Patient_id) 
                VALUES (:Patient_name, :Doctor_name, :Date, :Time, :users_id, :Patient_id)";
        $stmt = $this->db->conn->prepare($sql);
        $r = $stmt->execute([
            ':Patient_name' => $data['Patient_name'],
            ':Doctor_name' => $data['Doctor_name'],
            ':Date' => $data['Date'],
            ':Time' => $data['Time'],
            ':users_id' => $data['users_id'],
            ':Patient_id' => $data['Patient_id']]);
            

        if ($r) {
            // Success!!!
            return 1;
        } else {
            // Something wrong with the query
            return 0;
}
}


//Read All Appointment
public function GetAllAppointment(){
	$sql = 'SELECT * FROM tbl_appointment ORDER BY Appointment_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read Only Appointment
		public function GetAppointmentInfo ($id){
		$sql = 'SELECT * FROM tbl_appointment WHERE Appointment_id=:Appointment_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Appointment_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Update Appointment
public function UpdateAppointment($data, $id){
	$sql = 'UPDATE tbl_appointment SET Patient_name=:Patient_name, Doctor_name=:Doctor_name, Date=:Date, Time=:Time, users_id=:users_id, Patient_id=:Patient_id  WHERE Appointment_id = :Appointment_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Patient_name' => $data['Patient_name'],
					  ':Doctor_name' => $data['Doctor_name'],
					  ':Date' => $data['Date'],
					  ':Time' => $data['Time'],
					  ':users_id' => $data['users_id'],
					  ':Patient_id' => $data['Patient_id'],
					  ':Appointment_id' => $id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Delete Appointment
public function DeleteAppointment($_id){
	$sql = 'DELETE FROM tbl_appointment WHERE Appointment_id=:Appointment_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Appointment_id' => $_id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Create Medical
public function AddMedical($data) {
    
	$sql = "INSERT INTO tbl_medical_records (First_name, Middle_name, Last_name, Diagnosis, Date,Patient_id) 
			VALUES (:First_name, :Middle_name, :Last_name, :Diagnosis, :Date,   :Patient_id)";
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([
		':First_name' => $data['First_name'],
		':Middle_name' => $data['Middle_name'],
		':Last_name' => $data['Last_name'],
		':Diagnosis' => $data['Diagnosis'],
		':Date' => $data['Date'],
		':Patient_id' => $data['Patient_id']]);
		

	if ($r) {
		// Success!!!
		return 1;
	} else {
		// Something wrong with the query
		return 0;
	
}
}

//Read All Medical
public function GetAllRecord(){
	$sql = 'SELECT * FROM tbl_medical_records ORDER BY Record_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read Only Medical
		public function GetMedicalInfo ($id){
		$sql = 'SELECT * FROM tbl_medical_records WHERE Record_id=:Record_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Record_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Update Medical
public function UpdateMedical($data, $id){
	$sql = 'UPDATE tbl_medical_records SET First_name=:First_name, Middle_name=:Middle_name, Last_name=:Last_name, Diagnosis=:Diagnosis, Date=:Date,   Patient_id=:Patient_id  WHERE Record_id = :Record_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':First_name' => $data['First_name'],
					  ':Middle_name' => $data['Middle_name'],
					  ':Last_name' => $data['Last_name'],
					  ':Diagnosis' => $data['Diagnosis'],
					  ':Date' => $data['Date'],
					  ':Patient_id' => $data['Patient_id'],
					  ':Record_id' => $id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Delete Medical
public function DeleteMedical($_id){
	$sql = 'DELETE FROM tbl_medical_records WHERE Record_id=:Record_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Record_id' => $_id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Create Medicine
public function AddMedicine($data) {
    
	$sql = "INSERT INTO tbl_medicine (Medicine_name,  Supply_id) 
			VALUES (:Medicine_name,  :Supply_id)";
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([
		':Medicine_name' => $data['Medicine_name'],
		':Supply_id' => $data['Supply_id']]);
		

	if ($r) {
		// Success!!!
		return 1;
	} else {
		// Something wrong with the query
		return 0;
	
}
}

	//Read All Medicine
	public function GetAllMedicine(){
	$sql = 'SELECT * FROM tbl_medicine ORDER BY Medicine_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}
	

	//Read Only Medicine
		public function GetMedicineInfo ($id){
		$sql = 'SELECT * FROM tbl_medicine WHERE Medicine_id=:Medicine_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Medicine_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	
	//Update Medicine
public function UpdateMedicine($data, $id){
	$sql = 'UPDATE tbl_medicine SET Medicine_name=:Medicine_name,  Supply_id=:Supply_id  WHERE Medicine_id = :Medicine_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Medicine_name' => $data['Medicine_name'],
					  ':Supply_id' => $data['Supply_id'],
					  ':Medicine_id' => $id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Delete Medicine
public function DeleteMedicine($_id){
	$sql = 'DELETE FROM tbl_medicine WHERE Medicine_id=:Medicine_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Medicine_id' => $_id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Create Supply
public function AddSupply($data) {
    
	$sql = "INSERT INTO tbl_supply (Supply_name, Quantity, Supply_type, Date_received, Expiration_date) 
			VALUES (:Supply_name, :Quantity, :Supply_type, :Date_received, :Expiration_date)";
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([
		':Supply_name' => $data['Supply_name'],
		':Quantity' => $data['Quantity'],
		':Supply_type' => $data['Supply_type'],
		':Date_received' => $data['Date_received'],
		':Expiration_date' => $data['Expiration_date']]);
		

	if ($r) {
		// Success!!!
		return 1;
	} else {
		// Something wrong with the query
		return 0;
	
}
}

//Read All Supply
public function GetAllSupply(){
	$sql = 'SELECT * FROM tbl_supply ORDER BY Supply_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read All Supply
public function GetAllSupplyId(){
	$sql = 'SELECT * FROM tbl_supply ORDER BY Supply_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read Only Supply
		public function GetSupplyInfo ($id){
		$sql = 'SELECT * FROM tbl_supply WHERE Supply_id=:Supply_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Supply_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	
	//Update Supply
public function UpdateSupply($data, $id){
	$sql = 'UPDATE tbl_supply SET Supply_name=:Supply_name, Quantity=:Quantity, Supply_type=:Supply_type, Date_received=:Date_received, Expiration_date=:Expiration_date   WHERE Supply_id = :Supply_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Supply_name' => $data['Supply_name'],
					  ':Quantity' => $data['Quantity'],
					  ':Supply_type' => $data['Supply_type'],
					  ':Date_received' => $data['Date_received'],
					  ':Expiration_date' => $data['Expiration_date'],
					  ':Supply_id' => $id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Delete Supply
public function DeleteSupply($_id){
	$sql = 'DELETE FROM tbl_supply WHERE Supply_id=:Supply_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Supply_id' => $_id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Create Billing
public function AddBilling($data) {
    
	$sql = "INSERT INTO tbl_billing (First_name, Middle_name, Last_name, Date, Payment_option, Total_amount, Patient_id) 
			VALUES (:First_name, :Middle_name, :Last_name, :Date, :Payment_option, :Total_amount, :Patient_id)";
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([
		':First_name' => $data['First_name'],
		':Middle_name' => $data['Middle_name'],
		':Last_name' => $data['Last_name'],
		':Date' => $data['Date'],
		':Payment_option' => $data['Payment_option'],
		':Total_amount' => $data['Total_amount'],
		':Patient_id' => $data['Patient_id']]);
		

	if ($r) {
		// Success!!!
		return 1;
	} else {
		// Something wrong with the query
		return 0;
	
}
}

//Read All Supply
public function GetAllBilling(){
	$sql = 'SELECT * FROM tbl_billing ORDER BY Billing_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read Only billing
		public function GetBillingInfo ($id){
		$sql = 'SELECT * FROM tbl_billing WHERE Billing_id=:Billing_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Billing_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Update Billing
public function UpdateBilling($data, $id){
	$sql = 'UPDATE tbl_billing SET First_name=:First_name, Middle_name=:Middle_name, Last_name=:Last_name, Date=:Date, Payment_option=:Payment_option, Total_amount=:Total_amount, Patient_id=:Patient_id  WHERE Billing_id = :Billing_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':First_name' => $data['First_name'],
					  ':Middle_name' => $data['Middle_name'],
					  ':Last_name' => $data['Last_name'],
					  ':Date' => $data['Date'],
					  ':Payment_option' => $data['Payment_option'],
					  ':Total_amount' => $data['Total_amount'],
					  ':Patient_id' => $data['Patient_id'],
					  ':Billing_id' => $id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Delete Billing
public function DeleteBilling($_id){
	$sql = 'DELETE FROM tbl_billing WHERE Billing_id=:Billing_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Billing_id' => $_id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Create Category
public function AddCategory($data) {
    
	$sql = "INSERT INTO tbl_category (Category) 
			VALUES (:Category)";
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([
		':Category' => $data['Category']]);
		
	
	if ($r) {
		// Success!!!
		return 1;
	} else {
		// Something wrong with the query
		return 0;
	
}
}

//Read All Category
public function GetAllCategory(){
	$sql = 'SELECT * FROM tbl_category ORDER BY Category_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read All Categoryid
public function GetAllCategoryId(){
	$sql = 'SELECT * FROM tbl_category ORDER BY Category_id DESC';
	$stmt = $this->db->conn->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll();
	return $data;
	}

	//Read Only Category
		public function GetCategoryInfo ($id){
		$sql = 'SELECT * FROM tbl_category WHERE Category_id=:Category_id';
		$stmt = $this->db->conn->prepare($sql);
		$stmt->execute([':Category_id' => $id]);
		$data = $stmt->fetch(PDO::FETCH_OBJ);
		return $data;
	}

	//Update Category
public function UpdateCategory($data, $id){
	$sql = 'UPDATE tbl_category SET Category=:Category  WHERE Category_id = :Category_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Category' => $data['Category'],
					  ':Category_id' => $id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}

//Delete Category
public function DeleteCategory($_id){
	$sql = 'DELETE FROM tbl_category WHERE Category_id=:Category_id';
	$stmt = $this->db->conn->prepare($sql);
	$r = $stmt->execute([':Category_id' => $_id]);
	if($r){
		return 1;
	}else{
		return 0;
	}
}



}






?>
