<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$name = $_POST['name'];
		$adm = $_POST['adm'];
		$filename = $_FILES['photo']['name'];
		$model = $_POST['model'];
		$barcode = $_POST['barcode'];
		$course = $_POST['course'];
		
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$sql = "INSERT INTO students (name, adm, photo, course_id, model, barcode, created_on) VALUES ('$name', '$adm' , '$filename', '$course', '$model', '$barcode', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Student added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: student.php');
?>