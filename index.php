<?php include 'template/header.php'; ?>

<?php
if (!isset($_GET['page'])) {
    include 'template/beranda.php';
} else {
    $page = $_GET['page'];
    include $page . '.php';
}
?>

<?php include 'template/footer.php'; ?>