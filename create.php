<?php
require_once ("db.php");


if (!empty($_POST['isPostflag'])) {
	$name=$_POST['txt_student_name'];
 	$age = $_POST['txt_age'];
 	$email = $_POST['txt_email'];
 	
 	if(!empty($name)){
 	   try{
        $stmt= $con->prepare("INSERT INTO tb_students(student_name, age, email) VALUES(:name,:age,:email)");
        $stmt->execute(array(':name'=>$name,':age'=>$age,'email'=>$email));
          header('Location:index.php');
 	   }catch(PDOEXception $ex){
 	   	    echo $ex->getMessage();
 	   }	
 	} else{
 		header('Location: http://localhost/assignmarch/index.php?action=list');
 	}

    header('Location: http://localhost/assignmarch/index.php?action=list&mgs=You have successfully inserted');
} else {
    header('Location: http://localhost/assignmarch/index.php?action=list');
}
