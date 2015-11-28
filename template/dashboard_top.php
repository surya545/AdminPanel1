<script src="<?php echo JS_DIR ?>highcharts.js"></script>
<div class="row-fluid">
 <?php if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){ if($line['token_id']==1){?>
    <div class="span6">
   <div class="box">
		<div class="box-head">
			<h3>Masters</h3>
				</div>
 <ul class="quicktasks">
     
       <?php if($_SESSION['role']>0){
		$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
		while($line=mysql_fetch_array($sql)){if($line['token_id']==2){?>
                <li> <a href="../company/cmp_add.php"><img src="../style/img/icons/essen/32/administrative-docs.png" border="0" alt="Company Master" title="Company Master" /><span>Company Master</span> </a></li><? }?>
        <? if($line['token_id']==3){?><li> <a href="../branch/branch_add.php"><img src="../style/img/icons/essen/32/upcoming-work.png" border="0" alt="Branch Master" title="Branch Master"/><span>Branch Master</span> </a></li><? }?>
        <? if($line['token_id']==4){?><li><a href="../brand/brand_add.php"><img src="../style/img/icons/essen/32/check.png" alt="Brand Master" title="Brand Master"><span>Brand Master</span></a></li><? }?>
         <? if($line['token_id']==5){?><li><a href="../category/category_add.php"><img src="../style/img/icons/essen/32/category.png" alt="Category Master" title="Category Master"><span>Category Master</span></a></li><? }?>
         <? if($line['token_id']==6){?><li><a href="../customer/customer_add.php"><img src="../style/img/icons/essen/32/hire-me.png" alt="Customer Master" title="Customer Master"><span>Customer Master</span></a></li><? }?>
       <? if($line['token_id']==7){?><li><a href="../employee/emp_add.php"><img src="../style/img/icons/essen/32/customers.png" alt="Emplooye Master" title="Emplooye Master"><span>Employee Master</span></a></li><? }?>
       <? if($line['token_id']==8){?><li><a href="../product/product_add.php"><img src="../style/img/icons/essen/32/product.png" alt="Product Master" title="Product Master"><span>Product Master</span></a></li><? }?>
       <? if($line['token_id']==9){?><li><a href="../service/service_add.php"><img src="../style/img/icons/essen/32/refresh.png" alt="Services Master" title="Services Master"><span>Services Master</span></a></li><? }?>
       <? if($line['token_id']==10){?><li><a href="../supplier/sup_add.php"><img src="../style/img/icons/essen/32/suppliers.png" alt="Supplier Master" title="Supplier Master"><span>Supplier Master</span></a></li><? }?>
        <? if($line['token_id']==11){?><li><a href="../user/user_add.php"><img src="../style/img/icons/essen/32/user.png" alt="User Master" title="User Master"><span>User Master</span></a></li><? }?>
       <? if($line['token_id']==12){?><li><a href="../tax/tax_add.php"><img src="../style/img/icons/essen/32/plus.png" alt="Tax Master" title="Tax Master"><span>Tax Master</span></a></li><? }?>
        <? if($line['token_id']==13){?> <li><a href="../finaceyear/finance_add.php"><img src="../style/img/icons/essen/32/date.png" alt="Finace Year" title="Finace Year"><span>Finace Year</span></a></li><? }?>
         <? if($line['token_id']==14){?> <li><a href="../admin/dob_rminder.php"><img src="../style/img/icons/essen/32/full-time.png" alt="DOB Reminder" title="DOB Reminder"><span>DOB Reminder</a></span></li><? }?>
          <? if($line['token_id']==15){?> <li><a href="../role/role_list.php"><img src="../style/img/icons/essen/32/lock.png" alt="Role Master" title="Role Master"><span>Role Master</span></a></li><? }?>       
              <? }}?>
    		</ul>
      
     </div><!---box ends here------>
      
 <? }}} ?>      
 
 <?php if($_SESSION['role']>0){
		$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
		while($line=mysql_fetch_array($sql)){ if($line['token_id']==16){?> 
   <div class="box">
	  <div class="box-head">
		<h3>Manage Stock</h3>
			</div>
		<ul class="quicktasks">
          <? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){if($line['token_id']==17){?><li> <a href="../stock/stock_update.php"><img src="../style/img/icons/essen/32/sign-in.png" border="0" alt="Menubar Image" /><span>Add Stock</span> </a></li><? }?>
          <? if($line['token_id']==18){?><li><a href="../stock/pr_transfer.php"><img src="../style/img/icons/essen/32/sign-out.png" alt=""><span>Transfer Stock</span></a></li>
         <? $sql_stock=mysql_query("SELECT * FROM stock_transfer_rec where branch_id  ='".$_SESSION['branch_name']."' and status='Active'");
		   if(mysql_num_rows($sql_stock)>0){
		 ?>
		  <li><a href="../stock/pr_transfer_rec.php"><img src="../style/img/icons/essen/32/sign-up.png" alt=""><span>Receive Stock</span></a></li>
<? }}}}?>
		</ul>
     </div><!---box ends here------>
     <? }}}?>
 <?php if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){ if($line['token_id']==19){?>     
      <div class="box">
	  <div class="box-head">
		<h3>Transactions</h3>
			</div>
			<ul class="quicktasks">
          	<? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){ if($line['token_id']==20){?><li> <a href="../transction/invoice_entry.php"><img src="../style/img/icons/essen/32/invoice.png" border="0" alt="Menubar Image" /><span>Invoice Entry</span> </a></li><? }?>
          	<? if($line['token_id']==21){?><li><a href="../transction/purchase_order.php"><img src="../style/img/icons/essen/32/order.png" alt=""><span>Purchase Order</span></a></li><? }?>
            <? if($line['token_id']==22){?><li><a href="../transction/payment_entry.php"><img src="../style/img/icons/essen/32/payment-card.png" alt=""><span>Payment Entry</span></a></li><? }?>
            <? if($line['token_id']==23){?><li><a href="../transction/expens_entry.php"><img src="../style/img/icons/essen/32/order-149.png" alt=""><span>Expenses Entry</span></a></li><? }}}?>
           
		</ul>
     </div><!---box ends here------>
<? }}}?>
 <? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){if($line['token_id']==24){?>    
        <div class="box">
	  <div class="box-head">
		<h3>Reports</h3>
			</div>
			<ul class="quicktasks">
            	<? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){ if($line['token_id']==25){?><li><a href="../reports/daily_sale_report.php"><img src="../style/img/icons/essen/32/attibutes.png" alt=""><span>Daily Sale Report</span></a></li><? }?>
            <? if($line['token_id']==26){?><li><a href="../reports/stock_report.php"><img src="../style/img/icons/essen/32/archives.png" alt=""><span>Stock Report</span></a></li><? }?>
            <? if($line['token_id']==27){?><li><a href="../reports/sale_report.php"><img src="../style/img/icons/essen/32/invoice.png" border="0" alt="Menubar Image"/><span>Sale Register</span></a></li><? }?>
           <? if($line['token_id']==28){?> <li><a href="../reports/purchase_report.php"><img src="../style/img/icons/essen/32/future-projects.png" alt=""><span>Purchase Register</span></a></li><? }?> 
            
            <? if($line['token_id']==29){?><li><a href="../reports/payment_report.php"><img src="../style/img/icons/essen/32/billing.png" alt=""><span>Party Ledger</span></a></li><? }?>
           <? if($line['token_id']==30){?> <li><a href="../reports/emp_insentive_report.php"><img src="../style/img/icons/essen/32/attibutes.png" alt=""><span>Employee Incentive<br />Report</span></a></li><? }?>
            <? if($line['token_id']==31){?><li><a href="../reports/items_report.php"><img src="../style/img/icons/essen/32/publish.png" alt=""><span>Stock Location Wise<br />Report</span></a></li><? }?>
            <? if($line['token_id']==32){?><li><a href="../reports/expens_report.php"><img src="../style/img/icons/essen/32/cv.png" alt=""><span>Expenses  <br />Report</span></a></li><? }?>
			<? if($line['token_id']==33){?><li><a href="../reports/service_report.php"><img src="../style/img/icons/essen/32/old-versions.png" alt=""><span>Service<br/> Report</span></a></li><? }?> 
            <? if($line['token_id']==34){?>  <li><a href="../reports/customer_activity_report.php"><img src="../style/img/icons/essen/32/archives.png" alt=""><span>Customer Activity <br/>Report</span></a></li><? }?>  
           <? if($line['token_id']==35){?> <li><a href="../reports/transfer_report.php"><img src="../style/img/icons/essen/32/issue.png" alt=""><span>Issue & Receive <br/> Report</span></a></li><? }?> 
            <? if($line['token_id']==36){?> <li><a href="../reports/age_group_report.php"><img src="../style/img/icons/essen/32/sitemap.png" alt=""><span>Age Group<br/> Report</span></a></li><? }?> 
			<? }}?>
          
			</ul>
     </div><!---box ends here------>
     
 <? }}}?>    
 
 
  <? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){if($line['token_id']==37){?>    
        <div class="box">
	  <div class="box-head">
		<h3>Attendance</h3>
			</div>
			<ul class="quicktasks">
            	<? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){ if($line['token_id']==38){?>
    <li><a href="../attendance/attendance_list.php"><img src="../style/img/icons/essen/32/order-149.png" alt=""><span>Attendance Entry</span></a></li><? }?>
            <? if($line['token_id']==39){?><li><a href="../attendance/emp_payment_entry.php"><img src="../style/img/icons/essen/32/credit.png" alt=""><span>Advance Payment Entry</span></a></li><? }?>
            <? if($line['token_id']==40){?><li><a href="../attendance/pay_salary.php"><img src="../style/img/icons/essen/32/ticket.png" border="0" alt=""/><span>Pay Salary</span></a></li><? }?>           
			<? }}?>
          
			</ul>
     </div><!---box ends here------>
     
 <? }}}?>   
 
  <? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){if($line['token_id']==41){?>    
        <div class="box">
	  <div class="box-head">
		<h3>Booking</h3>
			</div>
			<ul class="quicktasks">
            	<? if($_SESSION['role']>0){
	$sql=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line=mysql_fetch_array($sql)){ if($line['token_id']==42){?>
    <li><a href="../booking/booking_add.php"><img src="../style/img/icons/essen/32/cost.png" alt=""><span>Booking Entry</span></a></li><? }?>
                      
			<? }}?>
          
			</ul>
     </div><!---box ends here------>
     
 <? }}}?> 
 
 <div class="box">
	  <div class="box-head">
		<h3>Expens Graph</h3>
			</div>
	 <?php 
	  $StartDate=date('Y-04-01');
	  $EndDate = date('Y-03-31', strtotime('+1 year'));
	  	  
	$sql=mysql_query("SELECT month(`expens_date`) As month ,SUM(`expens_amount`) As amount FROM `expens_table` WHERE  `expens_date` >= '$StartDate' AND `expens_date` <= '$EndDate' AND cmp_id = '".$_SESSION['cmp_id']."' AND branch_id = '".$_SESSION['branch_name']."' group by month(`expens_date`)");
while($row=mysql_fetch_array($sql)){
$month=$row['month'];
if($month==1){
	 $JanAmount=$row['amount'];
}
if($month==2){
	$FebAmount=$row['amount'];
}
if($month==3){
	$MarAmount=$row['amount'];
}
if($month==4){
	 $AprAmount=$row['amount'];
}
if($month==5){
	$MayAmount=$row['amount'];
}
if($month==6){
	$JunAmount=$row['amount'];
}
if($month==7){
	$JulAmount=$row['amount'];
}
if($month==8){
	$AguAmount=$row['amount'];
}
if($month==9){
	$SepAmount=$row['amount'];
}
if($month==10){
	$OctAmount=$row['amount'];
}
if($month==11){
	$NovAmount=$row['amount'];
}
if($month==12){
	$DecAmount=$row['amount'];
}

}
?>

								<div class="ActivityCount_bot fl" style="width:500px;">
								
									<script type="text/javascript">
										var chart;
										jQuery(document).ready(function() {
											chart = new Highcharts.Chart({
												chart: {
													renderTo: 'ExpensGraph',
													type: 'column'
												},
												credits: {
													enabled: false
												},
												title: {
													text: '',
													x: -20 //center
												},
												subtitle: {
													text: '',
													x: -20
												},
												xAxis: {
													categories: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec','Jan', 'Feb', 'Mar' ]
												},
												yAxis: {
													title: {
														text: ''
													},
													labels: {
														formatter: function() {
															return this.value;
														}
													}
												},
												tooltip: {
													formatter: function() {
														return ''+
															this.x +': '+ Highcharts.numberFormat(this.y, 0, ',');
													}
												},
												
												plotOptions: {
													area: {
														stacking: 'normal',
														lineColor: '#141211',
														lineWidth: 1,
														marker: {
															lineWidth: 1,
															lineColor: '#141211'
														}
													}
												},
												series: [{
													name: 'Expens For (<? echo date('Y')?> to <? echo date('Y', strtotime('+1 year'))?>)',
													data: [['Apr',<? if($AprAmount!=''){ echo $AprAmount; }else{ echo '0';} ?>],['May',<? if($MayAmount!=''){ echo $MayAmount; }else{ echo '0';} ?>],['Jun',<? if($JunAmount!=''){ echo $JunAmount; }else{ echo '0';} ?>],['Jul',<? if($JulAmount!=''){ echo $JulAmount; }else{ echo '0';} ?>],['Aug',<? if($AguAmount!=''){ echo $AguAmount; }else{ echo '0';} ?>],['Sep',<? if($SepAmount!=''){ echo $SepAmount; }else{ echo '0';} ?>],['Oct',<? if($OctAmount!=''){ echo $OctAmount; }else{ echo '0';} ?>],['Nov',<? if($NovAmount!=''){ echo $NovAmount; }else{ echo '0';} ?>],['Dec',<? if($DecAmount!=''){ echo $DecAmount; }else{ echo '0';} ?>],['Jan',<? if($JanAmount!=''){ echo $JanAmount; }else{ echo '0';} ?>],['Feb',<? if($FebAmount!=''){ echo $FebAmount; }else{ echo '0';} ?>],['Mar',<? if($MarAmount!=''){ echo $MarAmount;}else{ echo '0';} ?>],]	
												}]
											});
										});
									</script>									
									<div class="invoiceBox cl" id='ExpensGraph' style="width:486px; height:380px;"></div> 
								</div>	
								
     </div>
 
 
     
     </div><!---span6 ends here------>
      <div class="span6">
       <? if($_SESSION['role']>0){
	$sql2=mysql_query("SELECT * FROM security_group where user_type ='".$_SESSION['role']."'");
	while($line2=mysql_fetch_array($sql2)){ if($line2['token_id']==20){?>
    
      <div class="box">
	  <div class="box-head">
		<h3>Recent Invoice</h3><a href="../transction/invoice_entry.php" class="button-secondary" title="Add New Invoice" style="float:right; text-decoration:none; margin-top:1px;" >Add New Invoice</a>
        <a href="../transction/invoice_list.php" class="button-secondary" title="Add New Invoice" style="float:right; text-decoration:none; margin-top:1px; margin-right:5px;" >View All</a>
			</div>
          <? 
$columns=" select * ";
$sql= " from invoice_head_table where 1=1";
$sql.= " and cmp_id='".$_SESSION['cmp_id']."'";
$sql.= " and branch_id='".$_SESSION['branch_name']."'";

$sql.= " order by invoice_no desc ";
$sql.= " limit 6";

$sql= $columns.$sql;
$result= executeQuery($sql);
$no= mysql_num_rows($result);

$bgcolor="#e4e4e4";?>  
		<table class="table table-striped dataTable table-bordered dataTable-tools">
                         <thead>
                            <tr>
                             <td><strong>Invoice No.</strong></td>
                             <td><strong>Invoice Date</strong></td>
                             <td><strong>Customer Name</strong></td>
                             <td><strong>Total Amt</strong></td>
                             <td><strong>Action</strong></td>  
                           </tr>
						</thead>
							 <tbody>
                               <?php if($no>0){
											while($line=mysql_fetch_array($result)){
											$pagecounter+=1;
											if($bgcolor=="#e4e4e4"){ $bgcolor="#f5f5f5"; }else{ $bgcolor="#e4e4e4"; }
							  			 ?>
                                         
                                  	  <tr>
                                         <td><a href="../transction/invoice_entry_edit.php?uid=<?php echo $line['invoice_no']?>" title="Details"><?php echo $line['invoice_no']?></a></td>
                                         <td><?php echo date("d M, Y",strtotime($line['invoice_date'])); ?></td>
                                         <td><?php echo getCustName($line['customer_id'])?></td>                                         
                                          <td><?php echo $line['total_amt']?></td>                                         
                                          <td>
										  
                                              <a href="../transction/print_invoice.php?uid=<?php echo $line['invoice_no']?>"  title="Print Invoice" target="_new"><img src="../style/img/icons/fugue/printer.png" alt=""></a>
											
										</td>
                                    </tr>
                                          
									<?php } }else {?>
                                        <tr >
                                          <td colspan="5" align="center" class="red"> NO RECORD IN THE LIST.</td>
                                        </tr>
                            <?php }?>
                                    
								</tbody>
							</table>
     </div>
     <? }}}?>   
   <div class="box">
	  <div class="box-head">
		<h3>Recent Booking</h3><a href="../booking/booking_add.php" class="button-secondary" title="Add New Booking" style="float:right; text-decoration:none; margin-top:1px;" >Add New Booking</a><a href="../booking/booking_list.php" class="button-secondary" title="View All" style="float:right; text-decoration:none; margin-top:1px; margin-right:5px;" >View All</a>
			</div>
		
                      <table class="table table-striped dataTable table-bordered dataTable-tools">
                         <thead>
                            <tr>
                             <td><strong>Date</strong></td>
                             <td><strong>Time</strong></td>
                             <td><strong>Customer Name</strong></td>
                             <td><strong>Contact No.</strong></td>                             
                           </tr>
						</thead>
							 <tbody>
                            <?php
														 
							$sql=mysql_query("SELECT * FROM `booking_detail` WHERE  date >= '".date('Y-m-d')."' and cmp_id='".$_SESSION['cmp_id']."' and branch_id='".$_SESSION['branch_name']."' and status='0' ORDER BY date ASC LIMIT 10");
							 
							 $no_sql= mysql_num_rows($sql);
                            
							 if($no_sql > 0){
									while($line1=@mysql_fetch_array($sql))
									{                                   
									$pagecounter+=1;
									if($bgcolor=="#e4e4e4"){ $bgcolor="#F0F3F7"; }else{ $bgcolor="#e4e4e4"; }
									?>
                                    <tr>
									<td><?php echo date("d M, Y",strtotime($line1['date'])); ?></td>
                                    <td><?php echo $line1['from_time'].' - '.$line1['to_time'] ?></td>                                    
                                    <td><?php echo getCustName($line1['cust_id']);?></td>
                                    <td><?php echo getCustMobile($line1['cust_id']);?></td>
                                    
								</tr>
								<? }} else{?>
                                        <tr >
                                          <td colspan="5" align="center" class="red"> NO BOOKING IN THE LIST.</td>
                                        </tr>
                                        <? }?>
							</tbody>
						  </table>

		
     </div><!---box ends here------>
     
        <div class="box">
	  <div class="box-head">
		<h3>Birthday / Anniversary</h3><a href="dobViewAll.php" class="button-secondary" title="View All" style="float:right; text-decoration:none; margin-top:1px;" >View All</a>
			</div>
		
                      <table class="table table-striped dataTable table-bordered dataTable-tools">
                         <thead>
                            <tr>
                             <td><strong>Customer Name</strong></td>
                             <td><strong>Birthday / Anniversary</strong></td>
                             <td><strong>Date</strong></td> 
                             <td><strong>Send Mail</strong></td>  
                           </tr>
						</thead>
							 <tbody>
                            <?php
							$dob=mysql_query("SELECT * FROM `dob_rminder` WHERE `id` =1");
                             $result=mysql_fetch_array($dob);
							 
							$sql=mysql_query("SELECT * FROM `customer_table` WHERE  DAYOFYEAR(curdate()) <= dayofyear(`cust_dob`) AND DAYOFYEAR(curdate()) + ".$result['day']." >= dayofyear(`cust_dob`) ORDER BY cust_name ASC LIMIT 3");	
							
							  $sql_ani=mysql_query("SELECT * FROM `customer_table` WHERE  DAYOFYEAR(curdate()) <= dayofyear(`anniversary_date`) AND DAYOFYEAR(curdate()) + ".$result['day']." >= dayofyear(`anniversary_date`) ORDER BY cust_name ASC LIMIT 3");
							 $no_ani= mysql_num_rows($sql_ani);
                             $no= mysql_num_rows($sql);
							 if($no > 0 || $no_ani > 0){
									while($line=@mysql_fetch_array($sql))
									{                                   
									$pagecounter+=1;
									if($bgcolor=="#e4e4e4"){ $bgcolor="#F0F3F7"; }else{ $bgcolor="#e4e4e4"; }
									?>
                                    <tr>
									<td><?php echo $line['cust_name'] ?></td>
                                    <td><?php if($line['cust_dob'] > 0)
									{
										$var=Birthday;
										echo $var;
									}
									 ?></td>
                                    <td><?php echo date("d M, Y",strtotime($line['cust_dob']));?></td>
                                     <td> <form action="" name="email">
               <a href="birthday_email.php?email_id=<?php echo $line['id']?>"  class="thickbox none new" title="Compose Mail"><img src="../style/img/icons/essen/16/email.png"></a> </form></td>
								</tr>
								<? } 
                                
                              	

									while($row=@mysql_fetch_array($sql_ani))
									{                                   
									$pagecounter+=1;
									if($bgcolor=="#e4e4e4"){ $bgcolor="#F0F3F7"; }else{ $bgcolor="#e4e4e4"; }
									?>
                                    <tr>
									<td><?php echo $row['cust_name'] ?></td>
                                    <td><?php if($row['anniversary_date'] > 0)
									{
										$var=Anniversary;
										echo $var;
									}
									 ?></td>
                                    <td><?php echo date("d M, Y",strtotime($row['anniversary_date']));?></td>
                                    <td> <form action="" name="email">
               <a href="birthday_email.php?email_id=<?php echo $line['id']?>"  class="thickbox none new" title="Compose Mail"><img src="../style/img/icons/essen/16/email.png"></a> </form></td>
								</tr>
								<? }} else{?>
                                        <tr >
                                          <td colspan="5" align="center" class="red"> NO BIRTHDAY / ANNIVERSARY IN THE LIST.</td>
                                        </tr>
                                        <? }?>
							</tbody>
						  </table>

		
     </div><!---box ends here------>
     
     
      <div class="box">
	  <div class="box-head">
		<h3>Sale Graph</h3>
			</div>
	 <?php 
	  $StartDate=date('Y-04-01');
	  $EndDate = date('Y-03-31', strtotime('+1 year'));
	  
	 $sql=mysql_query("SELECT month( tr_date ) As month ,SUM(`credit`) As amount FROM `party_ledger` WHERE `tr_type` in ('sale','TRS') AND `tr_date` >= '$StartDate' AND `tr_date` <= '$EndDate' AND comp_id='".$_SESSION['cmp_id']."' AND branch_id='".$_SESSION['branch_name']."' group by month( tr_date )");
while($row=mysql_fetch_array($sql)){
$month=$row['month'];
if($month==1){
	 $JanAmount=$row['amount'];
}
if($month==2){
	$FebAmount=$row['amount'];
}
if($month==3){
	$MarAmount=$row['amount'];
}
if($month==4){
	$AprAmount=$row['amount'];
}
if($month==5){
	$MayAmount=$row['amount'];
}
if($month==6){
	$JunAmount=$row['amount'];
}
if($month==7){
	$JulAmount=$row['amount'];
}
if($month==8){
	$AguAmount=$row['amount'];
}
if($month==9){
	$SepAmount=$row['amount'];
}
if($month==10){
	$OctAmount=$row['amount'];
}
if($month==11){
	$NovAmount=$row['amount'];
}
if($month==12){
	$DecAmount=$row['amount'];
}

}
?>

								<div class="ActivityCount_bot fl" style="width:500px;">
								
									<script type="text/javascript">
										var chart;
										jQuery(document).ready(function() {
											chart = new Highcharts.Chart({
												chart: {
													renderTo: 'saleGraph',
													type: 'column'
												},
												credits: {
													enabled: false
												},
												title: {
													text: '',
													x: -20 //center
												},
												subtitle: {
													text: '',
													x: -20
												},
												xAxis: {
													categories: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec','Jan', 'Feb', 'Mar' ]
												},
												yAxis: {
													title: {
														text: ''
													},
													labels: {
														formatter: function() {
															return this.value;
														}
													}
												},
												tooltip: {
													formatter: function() {
														return ''+
															this.x +': '+ Highcharts.numberFormat(this.y, 0, ',');
													}
												},
												
												plotOptions: {
													area: {
														stacking: 'normal',
														lineColor: '#141211',
														lineWidth: 1,
														marker: {
															lineWidth: 1,
															lineColor: '#141211'
														}
													}
												},
												series: [{
													name: 'Sale For (<? echo date('Y')?> to <? echo date('Y', strtotime('+1 year'))?>)',
													data: [['Apr',<? if($AprAmount!=''){ echo $AprAmount; }else{ echo '0';} ?>],['May',<? if($MayAmount!=''){ echo $MayAmount; }else{ echo '0';} ?>],['Jun',<? if($JunAmount!=''){ echo $JunAmount; }else{ echo '0';} ?>],['Jul',<? if($JulAmount!=''){ echo $JulAmount; }else{ echo '0';} ?>],['Aug',<? if($AguAmount!=''){ echo $AguAmount; }else{ echo '0';} ?>],['Sep',<? if($SepAmount!=''){ echo $SepAmount; }else{ echo '0';} ?>],['Oct',<? if($OctAmount!=''){ echo $OctAmount; }else{ echo '0';} ?>],['Nov',<? if($NovAmount!=''){ echo $NovAmount; }else{ echo '0';} ?>],['Dec',<? if($DecAmount!=''){ echo $DecAmount; }else{ echo '0';} ?>],['Jan',<? if($JanAmount!=''){ echo $JanAmount; }else{ echo '0';} ?>],['Feb',<? if($FebAmount!=''){ echo $FebAmount; }else{ echo '0';} ?>],['Mar',<? if($MarAmount!=''){ echo $MarAmount;}else{ echo '0';} ?>],]	
												}]
											});
										});
									</script>									
									<div class="invoiceBox cl" id='saleGraph' style="width:486px; height:380px;"></div> 
								</div>	
								
     </div><!---box ends here------>
     
     
     <div class="box">
	  <div class="box-head">
		<h3>Purchase Graph</h3>
			</div>
	 <?php 
	  $StartDate1=date('Y-04-01');
	  $EndDate1 = date('Y-03-31', strtotime('+1 year'));
	  
	 $sql_pur=mysql_query("SELECT month( tr_date ) As month ,SUM(`total_amt`) As amount FROM `stock_ledger` WHERE `tr_type` = 'Purchase' AND `tr_date` >= '$StartDate1' AND `tr_date` <= '$EndDate1' AND comp_id='".$_SESSION['cmp_id']."' AND branch_id='".$_SESSION['branch_name']."' group by month( tr_date )");
while($row_pur=mysql_fetch_array($sql_pur)){
$month_pur=$row_pur['month'];
if($month_pur==1){
	 $JanAmount_pur=$row_pur['amount'];
}
if($month_pur==2){
	$FebAmount_pur=$row_pur['amount'];
}
if($month_pur==3){
	$MarAmount_pur=$row_pur['amount'];
}
if($month_pur==4){
	$AprAmount_pur=$row_pur['amount'];
}
if($month_pur==5){
	$MayAmount_pur=$row_pur['amount'];
}
if($month_pur==6){
	$JunAmount_pur=$row_pur['amount'];
}
if($month_pur==7){
	$JulAmount_pur=$row_pur['amount'];
}
if($month_pur==8){
	$AguAmount_pur=$row_pur['amount'];
}
if($month_pur==9){
	$SepAmount_pur=$row_pur['amount'];
}
if($month_pur==10){
	$OctAmount_pur=$row_pur['amount'];
}
if($month_pur==11){
	$NovAmount_pur=$row_pur['amount'];
}
if($month_pur==12){
	$DecAmount_pur=$row_pur['amount'];
}

}
?>

								<div class="ActivityCount_bot fl" style="width:500px;">
								
									<script type="text/javascript">
										var chart;
										jQuery(document).ready(function() {
											chart = new Highcharts.Chart({
												chart: {
													renderTo: 'purchaseGraph',
													type: 'column'
												},
												credits: {
													enabled: false
												},
												title: {
													text: '',
													x: -20 //center
												},
												subtitle: {
													text: '',
													x: -20
												},
												xAxis: {
													categories: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec','Jan', 'Feb', 'Mar' ]
												},
												yAxis: {
													title: {
														text: ''
													},
													labels: {
														formatter: function() {
															return this.value;
														}
													}
												},
												tooltip: {
													formatter: function() {
														return ''+
															this.x +': '+ Highcharts.numberFormat(this.y, 0, ',');
													}
												},
												
												plotOptions: {
													area: {
														stacking: 'normal',
														lineColor: '#141211',
														lineWidth: 1,
														marker: {
															lineWidth: 1,
															lineColor: '#141211'
														}
													}
												},
												series: [{
													name: 'Purchase For (<? echo date('Y')?> to <? echo date('Y', strtotime('+1 year'))?>)',
													data: [['Apr',<? if($AprAmount_pur!=''){ echo $AprAmount_pur; }else{ echo '0';} ?>],['May',<? if($MayAmount_pur!=''){ echo $MayAmount_pur; }else{ echo '0';} ?>],['Jun',<? if($JunAmount_pur!=''){ echo $JunAmount_pur; }else{ echo '0';} ?>],['Jul',<? if($JulAmount_pur!=''){ echo $JulAmount_pur; }else{ echo '0';} ?>],['Aug',<? if($AguAmount_pur!=''){ echo $AguAmount_pur; }else{ echo '0';} ?>],['Sep',<? if($SepAmount_pur!=''){ echo $SepAmount_pur; }else{ echo '0';} ?>],['Oct',<? if($OctAmount_pur!=''){ echo $OctAmount_pur; }else{ echo '0';} ?>],['Nov',<? if($NovAmount_pur!=''){ echo $NovAmount_pur; }else{ echo '0';} ?>],['Dec',<? if($DecAmount_pur!=''){ echo $DecAmount_pur; }else{ echo '0';} ?>],['Jan',<? if($JanAmount_pur!=''){ echo $JanAmount_pur; }else{ echo '0';} ?>],['Feb',<? if($FebAmount_pur!=''){ echo $FebAmount_pur; }else{ echo '0';} ?>],['Mar',<? if($MarAmount_pur!=''){ echo $MarAmount_pur;}else{ echo '0';} ?>],]	
												}]
											});
										});
									</script>									
									<div class="invoiceBox cl" id='purchaseGraph' style="width:486px; height:380px;"></div> 
								</div>	
								
     </div><!---box ends here------>
     
     </div><!---span6 ends here------>
     
</div><!---row-fluid ends here------>
