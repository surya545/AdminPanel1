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
if(isset($_POST['psubmit'])) {
  $query1 = mysql_query("update products set proname='$_POST[pname]' ,prodesc='$_POST[Editor2]'  where proid='$_POST[pid]' ");


  extract($_POST);
 $file_name_all="";
              for($i=0; $i<count($_FILES['support_images']['name']); $i++) 
              {
                     $tmpFilePath = $_FILES['support_images']['tmp_name'][$i];    
                     if ($tmpFilePath != "")
                     {    
                         $path = "uploads/";
                         $name = $_FILES['support_images']['name'][$i];
                        $size = $_FILES['support_images']['size'][$i];
         
                         list($txt, $ext) = explode(".", $name);
                         $file= time().substr(str_replace(" ", "_", $txt), 0);
                         $info = pathinfo($file);
                         $filename = $file.".".$ext;
                         if(move_uploaded_file($_FILES['support_images']['tmp_name'][$i], $path.$filename)) 
                         { 
                            date_default_timezone_set ("Asia/Calcutta");
                            $currentdate=date("d M Y");
                            $file_name_all.=$filename.",";
                         }
                   }
              }
              $filepath = rtrim($file_name_all, '*'); //imagepath if it is present  
 $query=mysql_query("update products set img = case when img is null then '".addslashes($filepath)."' else concat(img, ' ".addslashes($filepath)."') end where proid='$_POST[pid]'");  
 header("Location: all_pro.php");
}

?>






<!--==================================================           H T M L        T A G S                ===================================================-->





<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit Product</title>
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
              <li ><a href="#editproducts" data-toggle="tab">Edit Products</a></li>
              </li>
            </ul>
            <br>
            
              



              <div class="tab-content">
                




                <div class="tab-pane" id="formcontrols">
                <form id="edit-profile" class="form-horizontal"  action="edit_pro.php" method="POST">
                  <fieldset>                    
                    <div class="control-group">                     
                      <label class="control-label">Category Name</label>
                      <div class="controls">
                        <input type="text" class="span6" name="mcat" value="Main-Category">
                        <input name="submit" value="&#10004;" type="submit"/>
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
                                                          <form action="edit_pro.php" method="post">
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








               













                <div class="tab-pane active" id="editproducts">
                <form id="edit-profile" class="form-horizontal"  action="edit_pro.php" method="POST" enctype="multipart/form-data">
                  <fieldset>     
                  <div class="left">  

                        <?php
                        $sql="SELECT * FROM products where proid = '".$_GET['id']."'";
                        echo' <input type="text" class="hidden" name="pid" value="'.$_GET['id'].'" >';
$result = mysql_query($sql);
 while ($row= mysql_fetch_assoc($result)) {
                      echo' </br> <label class="control-label">Product Name</label>';
                       echo' <div class="controls">';
                       echo' <input type="text" class="span6" name="pname" value="'.$row["proname"].'" >';
                     echo' </div></br>';

                      echo'  <label class="control-label">Description</label>';
                       echo' <div class="controls">';
                    $rte=new RichTextEditor();   
                                  $rte->Text= $row["prodesc"]; 
                                  // Set a unique ID to Editor   
                                $rte->ID="Editor2";    
                                 $rte->MvcInit();   
                                // Render Editor 
                              echo $rte->GetString();  
                            echo' </div></br>';  

                      echo'  <label class="control-label">Product Images</label>';
                       echo' <div class="controls">';
            $images = explode(",",$row['img'],-1);

            if(sizeof($images) > 0 ){
             foreach($images as $image){
               echo $image.'  '.'<img src="uploads/'.$image.'" height="50" width="50">' ;
              echo "<br /></br>"; 
                }
            }
                            echo' </div></br>'; 

}
          echo' <label class="control-label">Upload Images</label></br>';
                    echo' <div class="controls">';
    echo'<input type="file" id="file" name="support_images[]" multiple="multiple" accept="image/*" />';
  echo'<input type="submit" name="psubmit" value="Update" style="color:blue;"/></div></br>';
                   

                        ?>

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


</body>
</html>
<?php
}
?>