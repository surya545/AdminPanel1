<?php
session_start();
$user=$_SESSION['usr'];
if ($user=='')
{
  header("Location: logout.php");
}
else {
  ?>

<!DOCTYPE html>



<!--==================================================           P H P        T A G S                ===================================================-->

<?php include("includes/connection.php") ?>


<?php require_once "texteditor/richtexteditor/include_rte.php" ?> 

<?php 
if(isset($_POST['submit'])) {
  $query = mysql_query("insert into maincategory(mcatname) values ('$_POST[mcat]');");
}
?>


<?php 
if(isset($_POST['ssubmit'])) {
  $query1 = mysql_query("insert into subcategory(mcatid,scatname) values ('$_POST[mcid]','$_POST[scat]');");
}
?>


<?php   
$dat=date("Y-m-d");
$tym=date("h:i:sa");
if(isset($_POST["isubmit"]))
{
  $getuploadfiles="";
  $validExtensions = array(".gif", ".jpeg", ".jpg", ".png",".GIF",".JPEG",".JPG",".PNG", ".SWF", ".swf");
  for($i=0;$i<=count($_FILES["file"]["name"])-1;$i++)
  {
    $filename=$_FILES["file"]["tmp_name"][$i];
    $fileExtension = strrchr($_FILES['file']['name'][$i], ".");
    if (in_array($fileExtension, $validExtensions)) 
    {
      $newName = time() . '_' . $_FILES['file']['name'][$i];
      $destination = 'uploads/' . $newName;
      if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)) 
      {
        $getuploadfiles=$getuploadfiles.$newName.',';
      }
    } 
  }
  $query2 = mysql_query("insert into products(mcatid,scatid,proname,prodesc,img,dat,tym) values ('$_POST[mid]','$_POST[sid]','$_POST[proname]','$_POST[Editor1]','$getuploadfiles','$dat','$tym')");
}
?> 


<?php 
if(isset($_POST['psubmit'])) {
  $query1 = mysql_query("update products set proname='$_POST[pname]' ,prodesc='$_POST[Editor2]'  where proid='$_POST[pid]' ");
  $cheks = implode("','", $_POST['checkbox']);
  $sql = "delete from products where img in ('$cheks')";


  $getuploadfiles="";
  $validExtensions = array(".gif", ".jpeg", ".jpg", ".png",".GIF",".JPEG",".JPG",".PNG", ".SWF", ".swf");
  for($i=0;$i<=count($_FILES["file"]["name"])-1;$i++)
  {
    $filename=$_FILES["file"]["tmp_name"][$i];
    $fileExtension = strrchr($_FILES['file']['name'][$i], ".");
    if (in_array($fileExtension, $validExtensions)) 
    {
      $newName = time() . '_' . $_FILES['file']['name'][$i];
      $destination = 'uploads/' . $newName;
      if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $destination)) 
      {
        $getuploadfiles=$getuploadfiles.$newName.',';
      }
    } 
  }
}

?>






<!--==================================================           H T M L        T A G S                ===================================================-->





<html lang="en">
<head>
<meta charset="utf-8">
<title>Add Sub-Categories</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.php">Bootstrap Admin Template </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Spark Infosystem <b class="caret"></b></a>
            <ul class="dropdown-menu">
                      <li><a href="logout.php">Logout</a></li>
                      <li><a href="resetpass.php">Change Password</a></li>
            </ul>
          </li>
        </ul>

      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="index.php"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="all_pro.php"><i class="icon-code"></i><span>Products</span> </a> </li>
        <li><a href="about.php"><i class="icon-list-alt"></i><span>About</span> </a> </li>
        <li><a href="testimonial.php"><i class="icon-retweet"></i><span>Testimonials</span></a></li>
        <li><a href="contact.php"><i class="icon-comments"></i><span>Contact</span> </a> </li>

      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->























<div class="main">
  <div class="main-inner">
    <div class="container">
        

        <div class="row">
        <div class="span12">          
        <div class="widget ">
            


            <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Manage Categories</h3>
            </div> <!-- /widget-header -->
            <div class="widget-content">
           <div class="tabbable">
            

            <ul class="nav nav-tabs">
              <li  class="active">
                <a href="#formcontrols" data-toggle="tab">Add Category</a>
              </li>
            </ul>
            <br>
            
              



              <div class="tab-content">
                




                <div class="tab-pane active" id="formcontrols">
                <form id="edit-profile" class="form-horizontal"  action="add_category.php" method="POST">
                  <fieldset>                    
                    <div class="control-group">                     
                      <label class="control-label">Category Name</label>
                      <div class="controls">
                        <input type="text" class="span6" name="mcat" placeholder="Main-Category">
                        <input name="submit" value="&#10004;" type="submit" style="color:blue;"/>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    </fieldset>
                  </form>
                </div>
                


                  <style>
                  .left{
                    padding-left: 50px;
                  }
                  </style>

                <div class="tab-pane" id="jscontrols">
                    <fieldset>
                      
                            <div class="left">                            
                      <label class="control-label">Choose Main Category </label>
                                                          <form action="add_category.php" method="post">
                                                          <select name ="mcid">
                                                          <?php  
                                                          $res = mysql_query("select * from maincategory;");
                                                          while ($row= mysql_fetch_assoc($res)) {
                                                            echo '<option value="'.$row["mcatid"] .'">'.$row["mcatname"] .'</option>';
                                                          }

                                                          ?>
                                                          </select>
                                                        <div class="control-group">                     
                                                        <label class="control-label">Sub-Category Name</br></label>
                                                          <div class="controls">
                                                           <input type="text" class="span6" name="scat" value="Sub-Category">
                                                              <input name="ssubmit" value="&#10004;" type="submit"/>
                                                                 </div> <!-- /controls -->       
                                                                  </div> <!-- /control-group -->
                                                                </form>
                                                                     </div>


                    </fieldset>
                </div>








                <div class="tab-pane" id="products">
                <form id="edit-profile" class="form-horizontal"  action="add_category.php" method="POST" enctype="multipart/form-data">
                  <fieldset>     
                  <div class="left">               
                    <div class="control-group">                     
                      <label class="control-label">Choose Main-Category</label></br>
                      <div class="controls">
                        <select name ="mid" name="users" onchange="showUser(this.value)" ><option value="">Select Main-Category</option>
                        <?php  
                        $res = mysql_query("select * from maincategory;");
                        while ($row= mysql_fetch_assoc($res)) {
                         echo '<option value="'.$row["mcatid"] .' ">'.$row["mcatname"] .'</option>';
                         }

                         ?>
                         </select></div>
                      <label class="control-label">Select Sub-Category</label></br>
                      <div class="controls"><div id="txtHint">
                        <select name ="sid">
                          <option value="">Select Main-Category First</option></div>
                         </select></div></div>
                        <label class="control-label">Product Name</label></br>
                        <div class="controls">
                        <input type="text" class="span6" name="proname" value="Product Name">
                      </div>
                         <label class="control-label">Product Description</label></br>
                         <div class="controls">
                          <?php   
                            // Create Editor instance and use Text property to load content into the RTE.  
                                $rte=new RichTextEditor();   
                                  $rte->Text="Type here"; 
                                  // Set a unique ID to Editor   
                                $rte->ID="Editor1";    
                                 $rte->MvcInit();   
                                // Render Editor 
                              echo $rte->GetString();  
                          ?> 
                          </div>
                          <label class="control-label">Upload Images</label></br>
                         <div class="controls">
                          <p><a href="#" id="addupload">Add More Images</a></p>
                          <label></label> <input type="file" name="file[]" class="imageupload">
                        </div>
                          <div class="controls">
                        <input name="isubmit" value="&#10004;" type="submit" id="submit"/>
                      </div> <!-- /controls -->       
                    </div> 
                </div><!-- /control-group -->
                    </fieldset>
                  </form>
                </div>
              














                <div class="tab-pane" id="editproducts">
                <form id="edit-profile" class="form-horizontal"  action="add_category.php" method="POST" enctype="multipart/form-data">
                  <fieldset>     
                  <div class="left">               
                    <div class="control-group">                     
                      <label class="control-label">Main-Category</label>
                      <div class="controls">
                        <select name ="mpid" name="users" onchange="showUser1(this.value)"><option value="">Select Main-Category</option>
                        <?php  
                        $resp = mysql_query("select * from maincategory;");
                        while ($rowp= mysql_fetch_assoc($resp)) {
                         echo '<option value="'.$rowp["mcatid"] .' ">'.$rowp["mcatname"] .'</option>';
                         }

                         ?></select></div></br>
                          <!-- /controls -->  
                      <label class="control-label">Sub-Category</label>
                      <div class="controls"><div id="txtHint1">
                        <select name ="spid">
                          <option value="">Select Main-Category First</option>
                         </select></div></div></div></br>

                          <!-- /controls --> 

                      <label class="control-label">Product</label>
                      <div class="controls"><div id="txtHint2">
                        <select name ="pid">
                          <option value="">Select Sub-Category First</option></div>
                         </select></div></div></br>

                          <!-- /controls --> 

                            <div id="txtHint3"></div>


                    </div> 
                </div><!-- /control-group -->
                    </fieldset>
                  </form>
                </div>


















                </div>
              
              
            </div>
            
  
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
        </div>
        </div>
        </div>

































<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2013 <a href="#">Spark Infosystem</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 


<script>
$(function(){
    $('#addupload').click(function(){
        var addControl = '<label>Upload an image:</label>';
        addControl += ' <input type="file" name="file[]" class="imageupload">';
        $('#submit').before(addControl); 
    });
})
</script>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethnt.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
function showUser1(str) {
  if (str=="") {
    document.getElementById("txtHint1").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
function showUser2(str) {
  if (str=="") {
    document.getElementById("txtHint2").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint1.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
function showUser3(str) {
  if (str=="") {
    document.getElementById("txtHint3").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint3").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint3.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
$(function(){
    $('#adduploadpro').click(function(){
        var addControl = '<label>Upload an image:</label>';
        addControl += ' <input type="file" name="file[]" class="imageupload">';
        $('#submitpro').before(addControl); 
    });
})
</script>

</body>
</html>
<?php
}
?>