<?php

session_start();
if(isset($_SESSION['User']))
{
	if((time() - $_SESSION['last_login_timestamp']) > 3600)
	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Timeout');
    window.location.href='admin.php';
    </SCRIPT>");}
		
}
else 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Not Logged in')
    window.location.href='admin.php';
    </SCRIPT>");
}

?>