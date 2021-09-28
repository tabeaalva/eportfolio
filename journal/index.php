<?php require "../lib/Parsedown.php";?>
<?php 
var_dump($_SERVER["REQUEST_URI"]); 
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