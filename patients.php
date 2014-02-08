<?php
session_start();
	if(!isset($_SESSION['username']) || !isset($_SESSION['level']))
	{
		header("Location:index.php?error=3");
	}
?>
<?php
include('includes/header.php');
?>	
<div class="alert alert-info" style="text-align:center;padding:5px;">
 					<form action="patient_search.php" method="post">
					<table width="100%">
						<td width="400px"></td>
						<td  style=" text-align:center;background-color:lightgrey;color:red;font-size:20px;font-weight:bold" align="right">MANAGE PATIENTS' INFORMATION</td>
						<td align="right">
						<input type="text" style="width:250px;text-align:center;font-family:century;font-weight:bold" class="form-control" placeholder="Enter Search Item" id="search"name="search"></td>
						
					</table>
					</form>
  </div>
			<div id="search">
				<?php
				include("includes/config.php");

						   
						   $query=mysql_query("select * from patients_info");
						 
						   if($query)
						   {
						   
						   	echo "<table id='table' class='table table-hover' width='100%'><th>Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Doctor ID</th><th>Address</th><th>email</th><th>Department | Ward</th><th width='10%'>Charging Preference</th><th>Action</th><tr/><tbody>";
						   	while ($row = mysql_fetch_assoc($query))
						   	{
						   		$id=$row['patient_id'];
								echo "<td>".$row['fname']."&nbsp;".$row['mname']."&nbsp;".$row['lname']."</td><td >".$row['bdate']."</td><td >".$row['gender']."</td>
								<td >".$row['contact']."</td><td >".$row['doctor_id']."</td><td >".$row['address']."</td><td >".$row['email']."</td>
								<td >".$row['dep_ward']."</td><td >".$row['c_preference']."</td><td><a href='edit.php?id=$id'><span class='glyphicon glyphicon-edit'></span></a></td><tr/>";
								
				
							   
							   
							}
							echo "</tbody></table>";
						}
								else echo "Can't query the table";
						
	
				?>  
<script type="text/javascript">
	
		var $rows = $('#table tbody tr');
		$('#search').keyup(function () {
		    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

		    $rows.show().filter(function () {
		        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
		        return !~text.indexOf(val);
		    }).hide();
		});

</script>				
			</div>
<?php include('includes/footer.php');?>			