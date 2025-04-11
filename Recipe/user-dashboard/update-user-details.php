<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: http://localhost/Recipe/UserLoginPage.php");
    die();
}

require_once "../config/config.php";
$checkID = $_SESSION['userid'];
?>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
    <script>alert("Personal details updated successfully");</script>
<?php endif; ?>

<?php
if (isset($_POST['submit'])) {
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Bio = $_POST['Bio'];
    $Gender = $_POST['Gender'];
    $Location = $_POST['Location'];

    $img_dir = "../images/profile/";
    $img_name = "";
    $img_check = "";

    // Check if a file is uploaded
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $img_name = basename($_FILES["image"]["name"]);
        $image_file = $img_dir . $img_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], $image_file);
    }

    // Initialize to empty in case no DB record exists
    $dbimage = "";

    $ck_query = mysqli_query($conn, "SELECT Profile_image FROM profile_details WHERE UserID = '$checkID'");
    if (mysqli_num_rows($ck_query) > 0) {
        $row = mysqli_fetch_assoc($ck_query);
        $dbimage = $row['Profile_image'];
    }

    // Decide which image to use
    $img_check = $img_name !== "" ? $img_name : $dbimage;

    // Use prepared statement for security
    $stmt = $conn->prepare("UPDATE profile_details SET First_name = ?, Last_name = ?, Bio = ?, Gender = ?, Location = ?, Profile_image = ? WHERE UserID = ?");
    $stmt->bind_param("ssssssi", $First_name, $Last_name, $Bio, $Gender, $Location, $img_check, $checkID);

    if ($stmt->execute()) {
        // Redirect to same page with success flag
        header("Location: update-user-details.php?success=1");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>
