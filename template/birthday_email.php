<?php session_start();
	define('JS_DIR', '../style/js/');
	
require "../includes/application_top.php";
$user_name=$_SESSION['user_name'];
if ($user_name=="")
{
	$msg="Session Expired. Please Login Again to Proceed.";
	$_SESSION['msg']=$msg;
	header("Location: ../index.php");
	exit();
}

$email_id=$_REQUEST['email_id'];

if($_REQUEST['submit'] && $_REQUEST['submit']=='Send')
{	
error_reporting(0);

$qur1= mysql_query("SELECT cust_email from customer_table where id ='". $email_id."'");


while($line=mysql_fetch_array($qur1))
{
 $email1=$line['cust_email'];

ini_set('sendmail_from',$rootemail);

$subject =$sub;
$from = $rootemail;
$email = $email1;
$body = $remark;

if (!mail($email, $subject, $body, $from))

{
$_SESSION['sess_msg'] = "Error Sending Email !";
}

else
{
$_SESSION['sess_msg'] = "Mail sent !";
}
}
header("Location: dobViewAll.php");
//exit;
}
//====================End ===============//
?> 
<script src="<?php echo JS_DIR ?>jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_DIR ?>custom_validation.js"></script>
<!-----------------------------------------main content starts here---------------------------------->
<div class="main">
	<div class="container-fluid">
    <!-----------------------------------------sidebar_left starts here---------------------------------->
    	<div class="content">
              <div class="row-fluid">
               <div class="span12">
                 <div class="box">
                   <div class="box-head"><h3>Compose Mail</h3></div>
                      <div class="wrap">
           	<form name="csv_form" id="csv_form" action="birthday_email.php" method="post" enctype="multipart/form-data">
            <table class="form-table">
            <tbody>
     
                <tr valign="top">
                <th scope="row"><label for="blogname"><span class="red" style="color:#ff0000;">&nbsp;</span>Subject</label></th>
                <td><input name="file" type="text"  class="textfield" /></td>
                </tr>
                <tr valign="top">
                <th scope="row"><label for="blogname"><span class="red" style="color:#ff0000;">&nbsp;</span>Message</label></th>
                <td><textarea name="cate_disc" type="text" class="textfield" id="cate_disc" rows="5" cols="17"></textarea></span></td>
                </tr>
                </tbody>
            </table>

<p class="submit"><input type="submit" value="Send" class="button-primary" id="submit" name="submit">
<input type="hidden" name="email_id" value="<? echo $email_id ?>"/></p></form>
</div></div></div></div>



		  </div><!---content ends here------>
	</div><!---container-fluid ends here------>
</div><!---main ends here------>

<!-----------------------------------------footer starts here---------------------------------->		
