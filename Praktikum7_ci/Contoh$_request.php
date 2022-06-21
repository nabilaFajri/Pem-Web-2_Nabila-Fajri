<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Exple of PHP $_REQUEST variable</title>
</head>
<body>
    <?php
    if () {
        echo "<p>Hi, " . $_REQUEST["name"]. "</p>";
    }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
    <label for="InputName">Name;</label>
    <input type="text" name="name" id="inputname">
    <input type="sumbit" value="sumbit">
</form>
</body>
</html>