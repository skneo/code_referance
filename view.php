<?php
include 'header.php';
?>
<div class="container my-3">
    <a href='index.php' class='btn btn-primary btn-sm mb-2'>&larr; Back</a>
    <?php
    $refFile = $_GET['ref'];
    echo "<h3 class='text-success'><u>" . strtoupper($refFile) . " Referance</u></h3>";
    if (isset($_SESSION['ref_login'])) {
        echo "<a href='edit.php?editRef=$refFile' class='btn btn-sm btn-outline-primary'>Edit</a>";
    }
    $refData = file_get_contents('ref/' . $refFile . '.txt');
    echo "<div class='mt-2'>$refData</div>";
    ?>
</div>
<?php
include 'footer.php';
?>