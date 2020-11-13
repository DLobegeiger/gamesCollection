<?php
class user{
    Private $user_name;
    Private $email;
	Private $password;
    public function get_information($inputted_user_name, $inputted_email, $inputted_password){
        $this->user_name=$inputted_user_name;
        $this->email=$inputted_email;
		$this->password=$inputted_password;
		
    }
    //Function to enter new record into the table named "users". Encrypt the password before storing in the database.
    public function create_record($pdo){
        $hashed_password=password_hash($this->password,PASSWORD_DEFAULT);
        $query="insert into users(username,email,password) values(:username,:email,:password)";
		
		//in the statement below we are calling a method named prepare using object $pdo.
		//This method has one parameter and it is returning a value
        $stmt=$pdo->prepare($query);
		
		//in the statement below we are calling a method named bindParam using an object $stmt.
		//This method accepts two parameters - the first one is the string that corresponds to variable in the query
		//and the second parameter represents the value that we want to assign to variable.
        $stmt->bindParam(":username", $this->user_name);
		
        $stmt->bindParam(":email", $this->email);
		
        $stmt->bindParam(":password", $hashed_password);
        
        $stmt->execute();
    }
}
?>