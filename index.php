<?php
include 'header.php';
if (isset($_POST['newRef']) and isset($_SESSION['ref_login'])) {
    $newRef = $_POST['newRef'];
    $refData = $_POST['refData'];
    file_put_contents('ref/' . $newRef . '.txt', $refData);
    echo "<div class='alert alert-success' role='alert'>
                Referance file created of $newRef
                </div>";
} else if (isset($_POST['editRef']) and isset($_SESSION['ref_login'])) {
    $editRef = $_POST['editRef'];
    $refData = $_POST['refData'];
    file_put_contents('ref/' . $editRef . '.txt', $refData);
    echo "<div class='alert alert-success' role='alert'>
                Referance file edited of $editRef
                </div>";
}
?>
<div class="container my-3">
    <script>document.title='Code Referance'</script>
    <h3>All Referances</h3>
    <center>
        <?php
        if ($handle = opendir('ref/')) {
            while (($file = readdir($handle)) != false) {
                if ($file != "." && $file != ".." && $file != "index.php") {
                    $refName = explode('.', $file)[0];
                    echo "<a href='view.php?ref=$refName' class='w-100 btn-sm btn btn-outline-primary mb-3'>" . strtoupper($refName) . "</a> <br>";
                }
            }
        }
        ?>
    </center>
</div>
<?php
include 'footer.php';
?>
