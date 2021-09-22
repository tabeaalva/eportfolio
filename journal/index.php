<?php require "../lib/Parsedown.php";?>
<?php 
$Parsedown = new Parsedown();
$contents = file_get_contents("../text.txt");
?>
<?php $title = "Die Lerndokumentation"; ?>
<?php include "../header.php"?>
<body class="mainpage">
    <main class="container">
   <?= $Parsedown->text($contents);?>
   
    </main>
    <?php include "../footer.php";?>

</body>
</html>