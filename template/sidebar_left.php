<?php 
session_start();
	define('JS_DIR', '../style/js/');
	//print_r($_SESSION);
require "../includes/application_top.php";
$admin_id=$_SESSION['admin'];
if ($admin_id=="")
{
	$msg="Session Expired. Please Login Again to Proceed.";
	$_SESSION['msg']=$msg;
	header("Location: ../index.php");
	exit();
}
$master= $_SESSION['authorisation'][0];
$Category= $_SESSION['authorisation'][1];
$Brands= $_SESSION['authorisation'][2];
$Color= $_SESSION['authorisation'][3];
$Size= $_SESSION['authorisation'][4];
$Product= $_SESSION['authorisation'][5];
$Customerlist= $_SESSION['authorisation'][6];
$Supplierlist= $_SESSION['authorisation'][7];
$Tax= $_SESSION['authorisation'][8];
$State= $_SESSION['authorisation'][9];
$Purchaseinvoice= $_SESSION['authorisation'][10];
$Purchase= $_SESSION['authorisation'][11];
$Stockin= $_SESSION['authorisation'][12];
$Barcode= $_SESSION['authorisation'][13];
$Saleinvoice= $_SESSION['authorisation'][14];
$taxSalelist= $_SESSION['authorisation'][15];
$retailSalelist= $_SESSION['authorisation'][16];
$Stockout= $_SESSION['authorisation'][17];
$Reports= $_SESSION['authorisation'][18];
$StockReports= $_SESSION['authorisation'][19];
$PurchaseReports= $_SESSION['authorisation'][20];
$SaleReports= $_SESSION['authorisation'][21];
$PartyReports= $_SESSION['authorisation'][22];
$OutstandingReports= $_SESSION['authorisation'][23];
$Rolemenege= $_SESSION['authorisation'][24];
$role= $_SESSION['authorisation'][25];
$adminsetting= $_SESSION['authorisation'][26];
$gernalsetting= $_SESSION['authorisation'][27];
$Changepassword= $_SESSION['authorisation'][28];
$Reading= $_SESSION['authorisation'][29];


?>
<div class="navi">
		<ul class='main-nav'>
			<li class='active'>
				<a href="../template/dashboard.php" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					Dashboard
					<span class="label label-warning">6</span>
				</a>
			</li>
            <?php if($master!=''){ ?>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					Master Pages
					<!--<span class="label label-info">1</span>-->
                    <img src="../style/img/toggle-subnav-down.png" alt="">
				</a>
                <ul class='collapsed-nav closed'>
					
					<?php if($Category!=''){ ?><li><a href="../category/category_list.php?">Category Master</a></li> <?php }?>
                    <?php if($Brands!=''){ ?><li><a href="../brand/brand_list.php">Brands Master</a></li> <?php }?>
                    <?php if($Color!=''){ ?> <li><a href="../color/color_list.php?">Color Master</a></li> <?php }?>
                    <?php if($Size!=''){ ?><li><a href="../size/size_list.php?">Size Master</a></li> <?php }?>
                    <?php if($Product!=''){ ?><li><a href="../product/product_list.php?">Product Master</a></li> <?php }?>
                    <?php if($Customerlist!=''){ ?> <li><a href="../customer/customer_list.php?">Customer Master</a></li> <?php }?>
                    <?php if($Supplierlist!=''){ ?><li><a href="../supplier/supplier_list.php">Supplier Master</a></li><?php } ?>                   
                    <?php if($Tax!=''){ ?> <li><a href="../tax/tax_list.php">Tax Master</a></li> <?php }?>
                    <?php if($State!=''){ ?> <li><a href="../config/state_list.php">State Master</a></li> <?php }?>
				</ul>
			</li>
            <?php }?>
          
          
			 <?php if($Purchaseinvoice!=''){ ?><li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-tasks icon-white"></i></div>
					Purchase 
					<img src="../style/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<?php if($Purchase!=''){ ?><li><a href="../purchase_invoice/purchase_list.php">Purchase List</a></li><?php }?>
					<?php if($Stockin!=''){ ?><li><a href="../stock/stock_in_list.php">Stock In</a></li><?php }?>
                    <?php if($Barcode!=''){ ?><li><a href="../sale_invoice/sale_invoice_list.php">Barcode Generation/Mapping</a></li><?php }?>
					
				</ul>
			</li><?php }?>

			<?php if($Saleinvoice!=''){ ?><li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-exclamation-sign icon-white"></i></div>
					Sale
						<img src="../style/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<?php if($taxSalelist!=''){ ?><li><a href="../sale_invoice/sale_list.php">Tax Sale List</a></li><?php } ?>
                    <?php if($retailSalelist!=''){ ?><li><a href="../sale_invoice/sale_retail_list.php">Retail Sale List</a></li><?php } ?>
                    <?php if($Stockout!=''){ ?><li><a href="../stock/stock_out_list.php">Stock Out</a></li><?php }?>
				</ul>
			</li><?php } ?>
			<?php if($Reports!=''){ ?><li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Reports
					<img src="../style/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
			      <?php if($StockReports!=''){ ?><li><a href="../stock/stock_ledger_list.php">Stock Reports </a></li><?php } ?>
					<?php if($PurchaseReports!=''){ ?><li><a href="#">Purchase register</a></li><?php } ?>
					<?php if($SaleReports!=''){ ?><li><a href="#">Sale Register</a></li><?php } ?>
                    <?php if($PartyReports!=''){ ?><li><a href="#">Party Ledger</a></li><?php } ?>
                    <?php if($OutstandingReports!=''){ ?><li><a href="#">Outstanding Payments</a></li><?php } ?>
					
				</ul>
			</li><?php }?>
			<?php if($Rolemenege!=''){ ?><li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					Role Management
					<img src="../style/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
				  <?php if($role!=''){ ?><li><a href="../role/role_list.php">Manage Role</a></li><? }?>
					
				</ul>
			</li><? }?>
            <?php if($adminsetting!=''){ ?><li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-resize-full icon-white"></i></div>
					Admin Setting
					<img src="../style/img/toggle-subnav-down.png" alt="">
				</a>
				<ul class='collapsed-nav closed'>
					<?php if($gernalsetting!=''){ ?><li><a href="../admin/general_setting.php?">General Setting</a></li><?php } ?>
					<?php if($Changepassword!=''){ ?><li><a href="../admin/change_password.php?">Change Password</a></li><?php } ?>
                    <?php if($Reading!=''){ ?><li><a href="#">Reading</a></li><?php } ?>
				</ul>
			</li><? }?>
		</ul>
	</div>