<?php
	session_start();
	if(!(isset($_SESSION['username'])) && !(isset($_SESSION['status'])) && !(isset($_SESSION['level'])=='100'))
	{
		header('Location:../index.php');
	}
?>
<?php include('includes/header.php'); ?>
<!-- ajax-->

<!--end ajax-->
<div style="text-align:center;color:green;margin:5px;padding:5px;background-color:#CCCCFF;border-radius:5px">
WELCOME TO CURRICULUM-BASED ENROLMENT SYSTEM.You are login as<font color="red"> 
<?php echo $_SESSION['username'];?>|<a href="../home.php">
<span class="glyphicon glyphicon-home">Home</span></a>|<a href="instructors.php">
<span class="glyphicon glyphicon-user">Instructor</span></a>|<a href="../logout.php">
<span class="glyphicon glyphicon-remove">Logout</span></a> </font>
</div>

<div id="manage">
			 MANAGE SUBJECTS |
			<a href="Add_subject.php" data-toggle='modal' data-target='#myModal' id="add-subject">
			<span class="glyphicon glyphicon-plus"><font color="darkblue">ADD_SUBJECT</font></span>
			</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input style="text-align:center;color:grey" type="text" placeholder="Type to Search" id="search" name="search" />
			<span class="glyphicon glyphicon-search " ></span>
</div>

<?=alert_messages()?>


<div id="offered">

		<?php
			$query=mysql_query("select * from subject_offered order by subject_code");
			$i=1;
			if($query)
			{
			echo '<table id="table" class="table table-hover">
					<thead>
					<tr>
					<th></th>
					<th>Sub_ID</th>
					<th>Subject</th>
					<th>Section</th>
					<th>Description</th>
					<th>Units</th>
					<th>Schedule</th>
					<th>Days</th>
					<th>Rooms</th>
					<th>Limit</th>
					<th>Semester</th>
					<th>Instructor</th>
					<th style="font-weight:bold;text-align:center">Action</th>
					</tr></thead><tbody>';

				while($num=mysql_fetch_assoc($query))
				{
					$id=$num['id'];
					
//on the schedule..want to display the standard time without specifying am or pm in input
					echo "
						<tr class='". ($num['block'] ? 'danger' : '') ."'>
						<td style='background-color:lightgrey'>".$i."</td>
						<td>".$num['sub_id']."</td>
						<td>".$num['subject_code']."</td>
						<td>".$num['sections']."</td>
						<td>".$num['sub_description']."</td>
						<td>".$num['sub_units']."</td>
						<td>".$num['schedule']."</td>
						<td>".$num['days']."</td>
						<td>".$num['room']."</td>
						<td>".$num['limit']."</td>
						<td>".$num['semester']."</td>
						<td>".$num['instructor']."</td>
						<td >
							<span class='json-data hide'>".json_encode($num)."</span>
							<a href='#editModal' data-toggle='modal' data-target='#myModal' class='do-edit'><span class='glyphicon glyphicon-edit' title='edit'>Edit</span></a>
							|
							<a href='actions.php?r=blockSubject&id=$id'><span style='color:grey'  class='glyphicon glyphicon-minus-sign' title='block'></span></a>|&nbsp;<a href='actions.php?r=unblockSubject&id=$id'>
							<span title='Open' style='color:green' class='glyphicon glyphicon-ok'></span></a>&nbsp;|&nbsp;<a href='actions.php?r=deletesubject&id=$id'><span class='glyphicon glyphicon-trash' title='Delete'></span></a>
							</a>
						</td>
					</tr>";
					$i++;
				}

				echo '</tbody></table';				
			}
			
		?>

</div>

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

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#add-subject").click(function(){
		//input here
			$("#myModalLabel").html('Create New Subject');
			$("#sub-form").attr('action', 'actions.php?r=createSubject');
			$('#sub-form input').val('');
		});


		$(".do-edit").click(function(){
			var data  = $(this).parent().find(".json-data").html();
			var data = JSON.parse(data);

			$("#myModalLabel").html('Edit Subject');
			$("#sub-form").attr('action', 'actions.php?r=updateSubject');

			$("#sub_id").val(data.sub_id);
			$("#sub_code").val(data.id);
			$("#subject_code").val(data.subject_code);
			$("#sections").val(data.sections);
			$("#sub_description").val(data.sub_description);
			$("#sub_units").val(data.sub_units);
			$("#schedule").val(data.schedule);
			$("#days").val(data.days);
			$("#limit").val(data.limit);
			$("#room").val(data.room);
			$("#semester").val(data.semester);
			$("#instructor").val(data.instructor);
			$('#schoolyear').val(data.schoolyear);
			$("#course_id").val(data.course_id);
			$("#college_id").val(data.college_id);
			$("#sub_yr").val(data.sub_yr);
		});
	});

</script>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#A0CFEC;text-align:center;padding:10px;color:white">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><b>{Modal Label}</b></h4>
      </div>

      <form  class="form" role="form" method="post" id="sub-form" action="{url_action}">
      <input type="hidden" id="sub_code" name="id" />
 		<div id="add_sub">
 			  <div class="form-group">
			  <label for="sub_id" >Sub_ID:</label>
			  <div><input type="text"  required class="form-control" id="sub_id" name="sub_id"></div>
			  </div>
			  <div class="form-group">
			  <label for="subject_code" >Subject Code:</label>
			  <div><input type="text"  required class="form-control" id="subject_code" name="subject_code"></div>
			  </div>

			  <div class="form-group" >
			  <label for="sections">Section:</label>
			  <div><input type="text" required class="form-control" id="sections" name="sections"></div>
			  </div>

			  <div class="form-group">
			  <label for="sub_description">Description:</label>
			  <div> <input type="text" required class="form-control" id="sub_description" name="sub_description"></div>
			  </div>

			   <div class="form-group">
			   <label for="sub_units">Units:</label>
			   <div> <input type="text" required class="form-control" id="sub_units" name="sub_units"></div>
			   </div>

			   <div class="form-group">
			   <label for="schedule">Schedule:</label>
			   <div><input type="text" required class="form-control" id="schedule"  name="schedule"></div>
			   </div>

			   <div class="form-group">
			   <label for="days">Days:</label>
			   <div><select required class="form-control" id="days" name="days">
			   <option value="M-W-F">M-W-F</option>
			   <option value="T-TH">T-TH</option>
			   <option value="SAT">SAT</option>
			   <option value="SUN">SUN</option>
			   <option value="M-W-F-T-TH">DAILY</option>
			   </select>
			   </div>
			   </div>
			   <div class="form-group">
			   <label for="limit">Limit:</label>
			   <div><input type="text" required class="form-control" id="limit" name="limit"></div>
			   </div>

			   <div class="form-group">
			   <label for="room">Rooms:</label>
			   <div> <input type="text" required class="form-control" id="room" name="room"></div>div
			   </div>

			   <div class="form-group">
			   <label for="sub_yr">Year Level:</label>
			   <div> <input type="text" required class="form-control" id="sub_yr" name="sub_yr"></div>			   
			   </div>

			   <div class="form-group">
			   <label for="schoolyear">School Year:</label>
			   <div> <input type="text" required class="form-control" id="schoolyear" name="schoolyear"></div>
			   </div>

			   <div class="form-group">
			   <label for="schoolyear">Semester:</label>
			   <div> <input type="text" required class="form-control" id="semester" name="semester"></div>
			   </div>

			   <div class="form-group">
			   <label for="course_id">Course ID:</label>
			   <div> <input type="text" required class="form-control" id="course_id" name="course_id"></div>		   			   
			   </div>

			   <div class="form-group">
			   <label for="college_id">College ID:</label>
			   <div> <input type="text" required class="form-control" id="college_id" name="college_id"></div>
			   </div>

			   <div class="form-group">
			   <label for="instructor">Lecture:</label>
			   <div><input type="text" required class="form-control" id="instructor" name="instructor"></div>			  			  
			   </div>
			</div>
      <div class="modal-footer" style="padding:5px">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">UpDate</button>
      </div>

		</form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<?php include('includes/footer.php');?>