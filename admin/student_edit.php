<?php
    include 'includes/session.php';

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $adm = $_POST['adm'];
        $model = $_POST['model'];
        $barcode = $_POST['barcode'];
        $course = $_POST['course'];

        $sql = "UPDATE students SET name = '$name', adm = '$adm', model = '$model', barcode = '$barcode', course_id = '$course' WHERE id = '$id'";
        if($conn->query($sql)){
            $_SESSION['success'] = 'Student updated successfully';
        }
        else{
            $_SESSION['error'] = $conn->error;
        }
    }
    else{
        $_SESSION['error'] = 'Fill up edit form first';
    }

    header('location:student.php');
?>
