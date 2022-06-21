<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP POST Method</title>
</head>
<body>
    <?php
    if (isset($_POST["name"])) {
        echo "<p>Hi, ". $_POST["name"]. "</p>";
        }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label for="InputNmaee">Name:</label>
        <input type="text" name="name" id="InputName">
        <input type="Sumbit" value="sumbit">
    </form>
   
</body>
</html>