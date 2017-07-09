<?php  
 require_once('db.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP PDO</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h2>Student List</h2>
<a href="<?php echo "http://localhost/assignmarch/index.php?action=create_form" ?>">Add New</a><br/><br/>

<div>
-   
    <?php echo (!empty($_GET['mgs']))?  $_GET['mgs']:"" ?>
 </div>
  


<table border="1px" cellpadding="5px" cellspacing="0">
<tr>
  <th>ID</th>
  <th>Student Name</th>
  <th>Age</th>
  <th>Email</th>
  <th>Action</th>
</tr>
<?php
  $stmt = $con->prepare("SELECT * FROM tb_students ORDER BY student_id ASC");
  $stmt->execute();
    $result=$stmt->fetchAll();
    foreach($result as $row){
?>
<tr>
  <td><?=$row['student_id'];?></td>
  <td><?=$row['student_name'];?></td>
  <td><?=$row['age'];?></td>
  <td><?=$row['email'];?></td>
  <td>
    <a href="<?php echo "http://localhost/assignmarch/index.php?action=update_form&id=" . $row['student_id']  ?>">Edit</a>|
   <a href="<?php echo "http://localhost/assignmarch/index.php?action=delete&id=" . $row['student_id']  ?>">Delete</a>
  </td>

</tr>
<?php
}
?>
  
</table>
</body>
</html>

