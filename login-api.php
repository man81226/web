
<?php
$hostname = "127.0.0.1";
$username = "root";
$password =	"";
$connection = mysql_connect($hostname, $username, $password) or die ("Could not open connection to database");
mysql_select_db("account", $connection) or die ("Could not select database");

$method = $_SERVER['REQUEST_METHOD'];
//echo $method;
$entityBody = json_decode(file_get_contents('php://input'));
switch ($method){
case 'POST':
$username=$entityBody->username;
$password=$entityBody->password;
$checkid=mysql_query("SELECT * from personal WHERE username='$username' and password='$password'") or die 
("Could not issue MySQL query");
$records = mysql_num_rows($checkid);

if($records===1){
	echo "1";
}else{
	
	echo "0";
	return;
}


/*
     if($records>0){
			echo "_____Success";
		}else{
			throw new Exception("error");
			//echo "_____Fail";
			//return;
		}
    break;*/
	
	//create function with an exception


//trigger exception in a "try" block

  //if ($records==1){
	  //throw new Exception("Error");
	//  echo "hi";
  //}
  //If the exception is thrown, this text will not be shown
 // echo 'If you see this, error is occured';

//catch exception
//catch(Exception $e) {
  //echo 'errr';
//}
		}
		?>

