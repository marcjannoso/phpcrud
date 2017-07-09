<h2>Add New Student</h2>
<form action="<?php echo "http://localhost/assignmarch/index.php?action=create" ?>" method="POST">
<table cellpadding="5px">
	<tr>
  <td>Student Name</td>
  <td><input type="text" name="txt_student_name"></td>
	</tr>
	<tr>
		<td>Age</td>
		<td><input type="number" name="txt_age"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="txt_email"></td>
	</tr>
	<tr>
		<td>
			
		</td>
		<td>
		<input type='hidden' name='isPostflag' value=1 />
		<input type="submit" name="btn_submit">
		</td>
	</tr>


	</table>
</form>