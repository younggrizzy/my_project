<link rel="stylesheet" href="style.css" type="text/css">

<h3>Ответ:</h3>
<?php
include './functions.php';
?>
<p>
    <?php
    if ($_POST['numberOfFunction'] == 1) {
        echo firstTask($_POST['randomText']);
    } elseif ($_POST['numberOfFunction'] == 2) {
        print_r(secondTask($_POST['randomText']));
    } elseif ($_POST['numberOfFunction'] == 3) {
        echo thirdTask($_POST['randomText']);
    } elseif ($_POST['numberOfFunction'] == 4) {
        echo fourTask($_POST['randomText']);
    } elseif ($_POST['numberOfFunction'] == 5) {
        print_r(fiveTask($_POST['randomText']));
    }
    ?>
</p>