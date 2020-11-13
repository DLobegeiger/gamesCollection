<?php
/*class connection{

    private $pdo;

    //Function to establish connection with database
    public function connect_db(){
        $dsn='mysql:dbname=games_collection;host=localhost;port:3306';
        $user_name="root";
        $password="";
        $pdo=new PDO($dsn,$user_name,$password);// here object is created using class with constructor - constructor is a special function that has same name as class.
        return $pdo;
    }
}
?>



<?php
*/
class connection{
    static private $pdo;
	public static function getPdo(){
		$pdo = null;
		$user = $pass = null;
		$dsn = 'mysql:dbname=games_collection;host=localhost;port:3306';
		$username = 'root';
		$password = '';
		// Set up PDO
		$pdo = new PDO($dsn, $username, $password);
		return $pdo;
    }
}
?>