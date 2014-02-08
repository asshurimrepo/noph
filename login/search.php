<?php
include('includes/top_head.php');
?>


<?php

// Inialize session
//session_start();
 include 'includes/config.php'; 

// Check, if username session is NOT set then this page will jump to login page
 if (!isset($_SESSION['username'])) {
 //header('Location: login page/admin.php');
 }

?>



<script type="text/javascript" src="customer/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
        $(".cancel_delete").click(function(e) {
            $(".err").fadeOut(500);
        });
		$(".success_delete").delay(1000).fadeOut(1000);
    });
</script>


<style type="text/css">

.se{margin-left:20px;}
input[type=button], input.button { width:200px; background:gray;  #999; color:#CCC; font-weight:bold; margin-top:15px; cursor:pointer; width:200px; -moz-border-radius:5px; -webkit-border-radius:5px; padding:4px;
 }input[type=button]:hover, input[type=button]:focus, input.submit:hover, input.submit:focus { background:#CCC; color:#000;}
</style>


<form method="post" action="search.php">
<table cellpadding=""  border="0" class="se">
    <tr>
        <td>
            <input type="text" name="key" placeholder="Search customer" id="key" tabindex="1">
            <input type="submit" name="save" id="save" value="Search" tabindex=""/>	 
            <?php 
			if(isset($_GET['delete'])):?>
                <div class="err">Are you Sure? <a href="?cust_id=<?php echo $_GET['cust_id']; ?>&confirm_delete=<?=$_GET['delete']?>">Yes</a> <a href="#cancel" class="cancel_delete">Cancel</a></div>
            <?php endif;
			
			if(isset($_GET['confirm_delete'])):
				$sql = "DELETE FROM `waterdistrict`.`customer` WHERE id = $_GET[confirm_delete]";
				$qry = mysql_query($sql);
				if($qry): ?>
					<div class="err success_delete">Record Deleted!</div>
				<?php endif;
			endif;
		?>
        </td>		
    </tr>
</table>

		<?php if(isset($_POST['save'])):
			customer_list();
		 elseif(isset($_GET['cust_id'])):
		 	cust_info();
		 	records(); 
		 endif; ?>
	

<?php function customer_list(){
			$ref = $_POST['key']; 
			$sql = "SELECT * FROM  `cust_info` WHERE  `lname` LIKE  '%$ref%' OR `fname` LIKE '%$ref%'  OR `address` LIKE '%$ref%' OR `custno` LIKE  '%$ref%' ORDER BY lname ASC";
			$qry = mysql_query($sql);
			
		?>
  <table width="93%" border="0" align="center" class="results">
  <tr>
    <th width="15%" scope="col">Id No.</th>
    <th width="27%" scope="col">Customer Name</th>
    <th width="23%" scope="col">Gender</th>
    <th width="23%" scope="col">Address</th>
    <th width="18%" scope="col">B-date</th>
    <th width="17%" scope="col">Action</th>
  </tr>
  <?php $color = array('#f0f0f0','#fbfbfb'); ?>
  <?php $i = 0; while($row = mysql_fetch_array($qry)): ?>
  <tr style="background:<?=$color[$i%2]?>;">
  	<td><?=$row['custno']?></td>
    <td><?=$row['lname']?>, <?=$row['fname']?> <?=$row['init']?></td>
    <td><?=$row['gender']?></td>
    <td><?=$row['address']?></td>
    <td><?=$row['bdate']?></td>
    <td><a href="?cust_id=<?=$row['custno']?>"><img src='images/edit.png' height='20'width='25' border='0' title='View Records'></a></td>
  </tr>
  <?php $i++; endwhile; ?>
</table>
    <?php	
}

function records(){
				
		$ref = $_GET['cust_id']; 
		$sql = "SELECT * FROM  `customer` WHERE  `custno` = $ref ORDER BY time DESC";
		$qry = mysql_query($sql);
	?>
  <table width="95%" border="0" align="center" class="results" style="background:#FFF; margin-top:10px;">
  <tr>
    <th scope="col">Date Period</th>
    <th scope="col">Usage</th>
    <th scope="col">Bill</th>
    <th scope="col" style="width:60px;">Action</th>
  </tr>
  <?php $color = array('#f0f0f0','#fbfbfb'); ?>
  <?php $i = 0; while($row = mysql_fetch_array($qry)): ?>
  <?php
  		
  ?>
  <tr style="background:<?=$color[$i%2]?>;">
  	<td style="font-size:11px;"><?=date("y M d",strtotime($row['time']))?></td>
    <td><?=$row['usage']?></td>
    <td><?=$row['charge']?></td>

    <td>
    	<a href="edit.php?id=<?=$row['id']?>&custno=<?=$row['custno']?>"><img src='images/edit.png' height='10'width='15' border='0' title='View Records'></a>
        <a target="_blank" href="billing.php?id=<?=$row['id']?>&custno=<?=$row['custno']?>"><img src='images/print.png' height='10'width='15' border='0' title='Print Records'></a>
        <a href="?cust_id=<?=$_GET['cust_id']?>&delete=<?=$row['id']?>"><img src='images/delete.png' height='10'width='15' border='0' title='Delete This Record'></a>
    </td>
  </tr>
   <?php $i++; endwhile; ?>
</table>
    <?php	
}

function cust_info(){
  global $classification, $pipes;
	$color = array('#f0f0f0','#fbfbfb');
	$ref = $_GET['cust_id']; 
	$sql = "SELECT * FROM `cust_info` WHERE custno = $ref";
	$qry = mysql_query($sql);
	$row = mysql_fetch_array($qry);
	?>
    <fieldset class="cust_info" style="width:94%; margin:0 auto; border:1px solid #CCC;"><legend><strong>Customer Info</strong></legend>
    	<div style="background:#FFF; padding:10px;">
        	<table width="100%" border="0">
   
   <tr style="background:<?=$color[0]?>;">
    <th width="15%" style="" scope="row">Customer ID:</th>
    <td width="36%"><?=$row['custno']?></td>
    <th width="15%" scope="row">Gender:</th>
    <td width="34%"><?=$row['gender']?></td>
  </tr>
  <tr style="background:<?=$color[1]?>;">
    <th scope="row">First Name: </th>
    <td><?=$row['fname']?></td>
    <th scope="row">Birth Date:</th>
    <td><?=$row['bdate']?></td>

  </tr>
  
  <tr style="background:<?=$color[0]?>;">
    <th scope="row">Initial: </th>
    <td><?=$row['init']?></td>
     <th scope="row">Classification:</th>
    <td><?=$classification[$row['classification']]?></td>
  </tr>
  
  <tr style="background:<?=$color[1]?>;">
    <th scope="row">Last Name:</th>
    <td><?=$row['lname']?></td>
     <th scope="row">Pipe Type:</th>
    <td><?=$row['pipe']?> mm</td>
  </tr>
  
   <tr style="background:<?=$color[1]?>;">
    <th scope="row">Address:</th>
    <td colspan="3"><?=$row['address']?></td>
  </tr>

</table>

  </fieldset>
    <?php
	}
	?>
    
</div>

<?php
include('includes/footer.php');
?>









