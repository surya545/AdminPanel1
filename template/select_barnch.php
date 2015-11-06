<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tarika Beauty & Wellness</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<style type="text/css" title="currentStyle">
			@import "../style/css/bootstrap.css"; 
			@import "../style/css/style.css";

</style>
</head>
<body class='login_body'>
	<div class="wrap">
		<h2>Select Branch</h2><br/>
		
		<form action="template/validate_admin.php"  autocomplete="on" method="post" name="customForm" id="customForm";>
        
        	<div class="login">
  			<div class="email" style="margin:0 0 14px;">
				<label for="role">Branch Name</label><div class="email-input"><div class="input-prepend"><span class="add-on"><i class="icon-thumbs-up"></i></span><select name='state' class='textfield' style="width:200px;">
                            <option value="" >--Select Branch--</option>
                            </select></div><span id="userInfo"></span></div>
			</div>
       </div>
		<div class="submit">
			<button class="btn btn-red5" type="submit" name="submit" id="submit">Continue &rarr;</button>
		</div>
		</form>
	</div>
<script src="style/js/jquery.js"></script>
<!--<script src="js/error.js"></script>-->
<script type="text/javascript" src="style/js/custom_validation.js"></script>
</body>
</html>