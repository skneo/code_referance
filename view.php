<?php
include 'header.php';
if (isset($_POST['editRef']) and isset($_SESSION['ref_login'])) {
    $editRef = $_POST['editRef'];
    $refData=file_get_contents('ref/' . $editRef . '.txt');
    file_put_contents('ref-old/' . $editRef . '.txt', $refData);
    $refData = $_POST['refData'];
    file_put_contents('ref/' . $editRef . '.txt', $refData);
    echo "<div class='alert alert-success' role='alert'>
                Referance file edited of $editRef
                </div>";
}
?>
<div class="container my-3">
    <a href='index.php' class='btn btn-primary btn-sm mb-2'>&larr; Back</a>
    <?php
    $refFile = $_GET['ref'];
    echo "<script>document.title='". strtoupper($refFile) ." Referance'</script>";
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
