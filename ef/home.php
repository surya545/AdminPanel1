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
<?php
include ("includes/connection.php"); 
?>
<?php require_once "texteditor/richtexteditor/include_rte.php" ?>
                    <?php   
                          if(isset($_POST["isubmit"]))
                          {
                         
   $res=mysql_query("UPDATE home set heading = '$_POST[head]' ");
   $res=mysql_query("UPDATE home set content = '$_POST[Editor1]' ");
   $res=mysql_query("UPDATE `home` SET `right`='$_POST[Editorxyz]' ");
   $res=mysql_query("UPDATE `home` SET `logo`='$_POST[$getuploadfiles]' ");
                            }
                          ?>
<html lang="en">
  
 <head>
    <meta charset="utf-8">
    <title>Manage Home</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    
    <link href="css/pages/reports.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.php">
				Bootstrap Admin Template				
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">

			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							Spark Infosystem
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
              				<li><a href="logout.php">Logout</a></li>
              				<li><a href="resetpass.php">Change Password</a></li>
						</ul>						
					</li>
				</ul>
			
				
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    



    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
			
				<li>
					<a href="index.php">
						<i class="icon-dashboard"></i>
						<span>Dashboard</span>
					</a>	    				
				</li>
				<li class="active">
					<a href="home.php">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				
				
                
                <li>					
					<a href="all_pro.php">
						<i class="icon-code"></i>
						<span>Products</span>
					</a>  									
				</li>




				<li>
					<a href="about.php">
						<i class="icon-list-alt"></i>
						<span>About</span>
					</a>    				
				</li>
				
				<li>					
					<a href="testimonial.php">
						<i class="icon-retweet"></i>
						<span>Testimonials</span>
					</a>  									
				</li>
                
                
                <li>					
					<a href="contact.php">
						<i class="icon-comments"></i>
						<span>Contact</span>
					</a>  									
				</li>
                

				
				
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    

    
<div class="main">
	
	<div class="main-inner">

	    <div class="container">
	    	
   	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-pencil"></i>
						<h3>Edit Section</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">  
	      	
	  	  <!-- /row -->
	<?php
	$quer= mysql_query("select * from home");
	$row= mysql_fetch_array($quer);
	?>
                <form id="edit-profile" class="form-horizontal"  action="home.php" method="POST" enctype="multipart/form-data">
	      <div class="row">
	      	
	      	<div class="span10">
	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-group"></i>
						<h3>Heading</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
                        <input type="text" class="span6" name="head" placeholder="Heading" value="<?php echo $row['heading']; ?>">
                     
					</div> <!-- /widget-content -->
						
				</div> 	      		
	      		<div class="widget">
						
					<div class="widget-header">
						<i class="icon-group"></i>
						<h3>Content</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
                          <?php   
                            // Create Editor instance and use Text property to load content into the RTE.  
                                $rte=new RichTextEditor();   
                                  $rte->Text= $row['content']; 
                                  // Set a unique ID to Editor   
                                $rte->ID="Editor1";    
                                 $rte->MvcInit();   
                                // Render Editor 
                              echo $rte->GetString();  
                          ?> 
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
				
	      		
	      		
	      		
		    </div> <!-- /span6 -->
	      	
	      	
	      	<div class="span5">
	      		
	      		<div class="widget">
							
					<div class="widget-header">
						<i class="icon-picture"></i>
						<h3>Change Logo</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">   
                        <?php
                                               $res = mysql_query("select * from logo;");
                                               $row= mysql_fetch_assoc($res);
                                                  echo'  <div class="alert alert-success">';
                                              echo'<button type="button" class="close" name="edit">&times;</button>';
                                                            echo $row['logo'] ;
                                                            echo '</div>';
                        ?>
					</div> <!-- /widget-content -->
						</br>
				</div>
									
		      </div>
		      	      	<div class="span5">
	      		
	      		<div class="widget">
							
					<div class="widget-header">
						<i class="icon-picture"></i>
						<h3>Change Banners</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">  
                        <?php
                                               $res = mysql_query("select * from banners;");
                                                          while ($row= mysql_fetch_assoc($res)) {

                                                  echo'  <div class="alert alert-success">';
                                              echo'<button type="button" class="close"  name="del"><a href="logodel.php?id='. $row["banner_id"] .'" style="text-decoration:none;">&times;</button>';
                                                            echo $row['banner'] ;
                                                            echo '</div>';
                                                          }
                        ?>
					</div> <!-- /widget-content -->
						</br>
				</div>
				
									
		      </div>
		      	      	<div class="span10">
	      		
	      		<div class="widget">
	      				<?php
                                               $res = mysql_query("select * from home;");
                                               $row= mysql_fetch_array($res);
							?>
					<div class="widget-header">
						<i class="icon-picture"></i>
						<h3>Right Header Content</h3>
					</div> <!-- /widget-header -->
					
										<div class="widget-content">
                          <?php   
                            // Create Editor instance and use Text property to load content into the RTE.  
                                $rtee=new RichTextEditor();   
                                  $rtee->Text= $row['right']; 
                                  // Set a unique ID to Editor   
                                $rtee->ID="Editorxyz";    
                                 $rtee->MvcInit();   
                                // Render Editor 
                              echo $rtee->GetString();  
                          ?> 
					</div> <!-- /widget-content -->
						</br>
						<input name="isubmit" value="Update" type="submit" id="submit" style="float: right;">
				</div>
				
									
		      </div> <!-- /span6 -->
	      	
	      </div> <!-- /row -->
	      
	      </form>
		      
	    </div> <!-- /container -->
	    
	</div>      
	      
			
	      
	      
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
    

    



    
    
<div class="footer">
	
	<div class="footer-inner">
		
		<div class="container">
			
			<div class="row">
				
    			<div class="span12">
    				&copy; 2013 <a href="">Spark Infosystem.</a>
    			</div> <!-- /span12 -->
    			
    		</div> <!-- /row -->
    		
		</div> <!-- /container -->
		
	</div> <!-- /footer-inner -->
	
</div> <!-- /footer -->
    

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/excanvas.min.js"></script>
<script src="js/chart.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>
<script>

    var pieData = [
				{
				    value: 30,
				    color: "#F38630"
				},
				{
				    value: 50,
				    color: "#E0E4CC"
				},
				{
				    value: 100,
				    color: "#69D2E7"
				}

			];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
	var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);
	
	</script>
<script>
$(function(){
    $('#addupload').click(function(){
        var addControl = '<label>Upload an image:</label>';
        addControl += ' <input type="file" name="file[]" class="imageupload">';
        $('#submit').before(addControl); 
    });
})
</script>

  </body>

</html>
<?php
}
?>