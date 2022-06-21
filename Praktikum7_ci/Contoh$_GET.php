<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP Get Method</title>
</head>
<body>
    <?php
    if (isset($_Get["name"])) {
        "echo <p>Hi," . $_GET["Name"]. "</p>";
    }
    ?>
    <form  method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="input name">Name:</label>
<input type="text" name="Name" id="Input Name">
<input type="sumbit" value="Sumbit">
    </form>
</body>
</html>