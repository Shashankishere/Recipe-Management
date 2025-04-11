<?php
    session_start();
    if (!isset($_SESSION['userid']))
        {
            header("Location: http://localhost/Recipe/UserLoginPage.php");
            die();
        }
    if(isset($_SESSION['userid'])){
    }
            
?>

<?php
  require_once "../config/config.php"
?>

<?php 

$Permalink = $_GET['Permalink'];
$query = "DELETE from recipe WHERE Permalink='$Permalink'";
$data = mysqli_query($conn, $query);
    if ($data)  {
        echo "<script> alert('Deleted successfully!!!')";
        header("location:http://localhost/Recipe/recipe/recipes.php");
        header("location:");
        
    }

    else {
        echo "<script> alert('Error!!!')";

    }
?>