<?php
include 'header.php';
$showAlert = false;

if (isset($_SESSION['ref_login'])) {
    header('Location: index.php');
    exit;
}

// $password = '1234';
include "password.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['password'] == $password) {
        $_SESSION['ref_login'] = true;
        header('Location: index.php');
        exit;
    } else {
        $showAlert = true;
        $alertClass = "alert-danger";
        $alertMsg = "Wrong password";
    }
}
if ($showAlert) {
    echo "<div class='alert $alertClass alert-dismissible fade show py-2 mb-0' role='alert'>
                <strong >$alertMsg</strong>
                <button type='button' class='btn-close pb-2' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
}

?>
<div class="container my-3">
    <center>
        <form action="login.php" method="post">
            <input type="password" name="password" class="form-control mb-3 mt-5" style="width: 200px;" placeholder="enter password">
            <button type="submit" class="btn btn-primary " style="width: 200px;">Login </button>
        </form>
    </center>
</div>
<?php
include 'footer.php';
?>