<?php session_start();
require "../includes/application_top.php";
require "../includes/DB_Functions.php";

$role = $_POST['role'];
$user_name = $_POST['user'];
$pass = $_POST['password'];
$login_succeed="false";


 $db= new DB_Functions();


 $sql="select * from yp_user where  user_name='$user_name'";
$result=executeQuery($sql);

if($line=mysql_fetch_array($result)){

	$isvalid= $db->getUserByEmailAndPassword($user_name,$pass);


		if(isvalid)
        
        {
		
			$login_succeed="true";
			$_SESSION['role'] = $line['role'];
			//$_SESSION['branch_name']=$line['branch_id'];
			$_SESSION['user_name']=$line['user_name'];
			$_SESSION['companyid']='1';
			//$_SESSION['cmp_id']=$line['cmp_id'];
			$_SESSION['sess_userid']=$line['userid'];
                        $_SESSION['companyid']='1';
                        $_SESSION['sub_companyid']='S';
                        $_SESSION['fyear']='2014';
			header("Location: ../template/dashboard.php");
			exit;
		}
				if ($login_succeed=="true"){
					$_SESSION['role'] = $line['role'];
					//$_SESSION['branch_name']=$line['branch_id'];
					$_SESSION['user_name']=$line['user_name'];
					//$_SESSION['cmp_id']=$line['cmp_id'];
					$_SESSION['sess_userid']=$line['userid'];
                                        $_SESSION['companyid']='1';
                                        $_SESSION['sub_companyid']='S';
                                        $_SESSION['fyear']='2014';
					header("Location: ../template/dashboard.php");
					exit;
				}else{
					$_SESSION['msg']="Invalid Administrator ID or Password ";
					header("Location: ../index.php");
					exit;
				}
	}

else
{
	$_SESSION['msg'] = "Invalid Administrator ID or Password ";
	header("Location: ../index.php");
	exit;
}



 
?>
