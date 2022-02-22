<?php include("security.php"); ?>
<?php include("config/dbcon.php"); ?>

<?php
if (isset($_POST['faculty_save'])) {
    $name = $_POST['faculty_name'];
    $design = $_POST['faculty_designation'];
    $descrip = $_POST['faculty_description'];
    $link = $_POST['faculty_link'];
    $images = $_FILES["faculty_image"]['name'];

    if (file_exists("upload/faculty/" . $_FILES["faculty_image"]["name"])) {
        $store = $_FILES["faculty_image"]["name"];
        $_SESSION['status'] = "Image already exists'.$store.' ";
        header('Location: faculty.php');
    } else {
        $query = "INSERT INTO faculty (name,design,descrip,link,images) VALUES('$name','$design','$descrip','$link','$images')";
        $result = mysqli_query($con, $query);
        if ($result) {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/faculty/" . $_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "Faculty Added";
            header('Location: faculty.php');
        } else {
            $_SESSION['success'] = "Faculty Not Added";
            header('Location: faculty.php');
        }
    }
}
?>

<?php

if (isset($_POST['update_btn'])) {
    $id = $_POST['edit_id'];
    $name = $_POST['faculty_name'];
    $design = $_POST['faculty_designation'];
    $descrip = $_POST['faculty_description'];
    $link = $_POST['faculty_link'];
    $faculty_image = $_FILES["faculty_image"]['name'];

    if ($faculty_image <> "") {
        if ($faculty_image != "") {
            $query = "UPDATE faculty SET name='$name',design='$design',descrip='$descrip',link='$link',images='$faculty_image' WHERE id='$id' ";
            $result = mysqli_query($con, $query);
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/faculty/" . $_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "Faculty Updated";
            header('Location: faculty.php');
        }
    } elseif ($faculty_image == "") {
        $query = "UPDATE faculty SET name='$name',design='$design',descrip='$descrip',link='$link' WHERE id='$id' ";
        $_SESSION['success'] = "Faculty Updated";
        $result = mysqli_query($con, $query);
        header('Location: faculty.php');
    } else {
        $_SESSION['status'] = "Faculty is Not Updated";
        header('refresh:0; url=faculty.php');
    }
}
?>

<?php
if (isset($_POST['delete_btn'])) {
    $id = $_POST['delete_id'];
    $query = "DELETE FROM faculty WHERE id='$id' ";
    $result = mysqli_query($con, $query);

    if ($result) {
        $_SESSION['success'] = "Faculty is Deleted";
        header('Location: faculty.php');
    } else {
        $_SESSION['status'] = "faculty is Not Deleted";
        header('Location: Faculty.php');
    }

    $delete_image = $_POST['delete_image'];
    $query = "DELETE FROM faculty WHERE images='$delete_image' ";
    $result = mysqli_query($con, $query);

    if (file_exists("upload/faculty/$delete_image")) {
        unlink("upload/faculty/$delete_image");
        header('Location: faculty.php');
    }
}
?>
