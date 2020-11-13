<?php
class Security{
    public function loginCheck($pdo,$uname,$password){
        if (isset($_SESSION['username'])){
            header('location:../view/index.php');
        }
        else{
            if (empty($uname) || empty($password)) {
                header('location:../view/login.php?mesg=Empty credentials');
            }
            else{
                $query = "SELECT * FROM users where username = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute(array($uname));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $stored_hashed_password = $row['password'];
                if(password_verify($password, $stored_hashed_password)) {
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['role'] = $row['role'];
                    header('Location:../view/collection.php');
                }
                else{
                
                    header('Location:../view/login.php?mesg=Credentials do not match');
                    exit();
                }
            }
        }
    }
}
?>