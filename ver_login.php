<?php
include_once("database.php");
include_once("function.php");
?>

<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<?php
    global $link;
if (isset($_POST['login'])) {
    
	$login = $_POST['login']; 
	
    if ($login == '') {
		unset($login);
		exit ("Введите пожалуйста логин!");
	} 
}
    
if (isset($_POST['password'])) {
	
    $password=$_POST['password']; 
	
    if ($password =='') {
		unset($password);
		exit ("Введите пароль");
	}
}



 
$login = trim($login);
$password = trim($password);

$value = mysqli_query($link, "SELECT * FROM login WHERE login='$login' AND password='$password'");
    
# $id_user = mysqli_fetch_array($value);
    
if (mysqli_num_rows($value)==0){
	exit ("Извините, введённый вами логин или пароль неверный.");
}
else {
    
 session_start();
   
    $_SESSION['password']=$password; 
	$_SESSION['login']=$login; 
    $_SESSION['id']=$id_user['id'];
    
    $_GET['login'] = $login;
    $_REQUEST['login'] = $login;
    
       $author = 'bonskii'; 
  // Хранить имя посетителя в cookie в течении суток 
  setcookie("author", $author, time() + 3600*24); 
		  
}
echo "<meta http-equiv='Refresh' content='0;  URL=blog.php'>";
?>
</body>
</html>
