<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $role = $_POST['role'];

}
class User {
    protected $name = '';
    protected $email = '';
    protected $role = '';

    public function __construct($name, $email, $role){
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    public function getInfo(){
        return $this->name;
    }
    public function isAdmin(){
        if($this->role == 1 ){
            echo "admin";
        }elseif($this->role == 2){
            echo "nguoi dung binh thuong";
        }else{
            echo"loi";
        }
    }
    public function setName($ts_name){
        $this->name = $ts_name;
    }
    public function setEmail($ts_email){
        $this->email = $ts_email;
    }
    public function setRole($ts_role){
        $this->role = $ts_role;
    }
}
$user = new User($ten,$email,$role);
echo '<pre>';
print_r($user->isAdmin()); 
echo '</pre>'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="">Nhập tên của người dùng</label> <br>
        <input type="text" id="" name="ten"><br><br>
        <label for="">Nhập email của người dùng</label><br>
        <input type="text" id="" name="email"><br><br>
        <label for="">Nhập giá trị role của người dùng</label><br>
        <input type="text" id="" name="role"><br><br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>
