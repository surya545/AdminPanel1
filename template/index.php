<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Tarika Beauty & Wellness</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<link rel="stylesheet" href="../style/css/bootstrap.css">
<link rel="stylesheet" href="../style/css/style.css">
<script src="../style/js/jquery.js"></script>
<script type="text/javascript">
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
function getBranch(id) {		
		//alert(id);
		var strURL="../findbranch.php?role="+id;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {	
						document.getElementById('branch').innerHTML=req.responseText;	
								
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
					
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
	
</script>
<script type="text/javascript">
function validate(customForm){
	//var reg=new RegExp("^[A-Za-z0-9_]{1,}[.]?[A-Za-z0-9_]{1,}@{1}([A-Za-z0-9_]+[.]{1})+[A-Za-z0-9_]{1,}$");
	var error=''
		
    if(customForm.role.value==""){
		error +="\n Please Select Role";
	}
	
	if(customForm.branch.value==""){
	error +="\n Please Select Branch ";
	}else if(customForm.fincyear.value=="")
	{
		error +="\n Please Select Finance Year";
	}
	 if(customForm.user.value==""){
		error +="\n Please Select User Name";
	  }
		
	    if(customForm.password.value=="")
		{
		error +="\n Please Select Password";
		}

		
	if(error !=''){
			alert ('Following Fields are Required \n' + error)
			return false
		}else{
			return true
		}

}
</script>
</head>
<body class='login_body'>
	<div class="wrap">
		<h2>Tarika Beauty & Wellness Login</h2><br/>
		
		<form action="../template/validate_admin.php"  autocomplete="on" method="post" name="customForm" id="customForm"; enctype="multipart/form-data" onSubmit="return validate(this)">
        
        	<div class="login">
  			<div class="email" style="margin:0 0 10px;">
				<label for="role">Role</label><div class="email-input"><div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span>
                <select name="role" id="role" onChange="getBranch(this.value)" class='textfield' style="width:196px;">
                            <option value="">--Select Role--</option>
                            <option value="1">Company Admin</option>
                            <option value="2">Branch Admin</option>
                            <option value="3">User</option>
                           </select></div><span id="roleInfo"></span></div>
			</div>
            
            <!--<div class="email">
				<span id="branch"></span>
			</div>-->
            
            
        <div class="email">
				<label for="user">Username</label><div class="email-input"><div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="user" name="user"></div><span id="userInfo"></span></div>
			</div>
			<div class="pw">
				<label for="pw">Password</label><div class="pw-input"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="password"></div><span id="passInfo"></span></div>
			</div>
		</div>
		<div class="submit">
		
			<button class="btn btn-red5" type="submit" name="submit" id="submit">Login</button>
		</div>
		</form>
	</div>

<!--<script type="text/javascript" src="style/js/custom_validation.js"></script>-->
</body>
</html>