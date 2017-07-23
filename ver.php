<?php
    include_once("database.php");
	
    if (isset($_POST['submit'])){
		if(empty($_POST['login']))  {
			echo '<br><font color="red"> Введите логин! </font>';
		} 
		elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
			echo '<br><font color="red"> В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
		}
		elseif(empty($_POST['password'])) {
			echo '<br><font color="red"> Введите пароль!</font>';
		}
		elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
			echo '<br><font color="red"> Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
		}
		
		
		 
		else{
			$login = $_POST['login'];
			$password = $_POST['password'];
			
			
			  
			$query = ("SELECT id FROM login WHERE login='$login'");
			$sql = mysqli_query($link,$query) or die(mysqli_error($link));
			
			if (mysqli_num_rows($sql) > 0) {
				echo '<font color="red"> Пользователь с таким логином зарегистрирован!</font>';
			                               }
			
				else{
					$query = "INSERT INTO login (login, password)
							  VALUES ('$login', '$password')";
                    
					$result = mysqli_query($link, $query) or die(mysqli_error($link));;
					echo '<font color="green"> Вы успешно зарегистрировались!</font><br><a href="login.php">Login</a>';
					
							
				}
			}
		}
    
?>