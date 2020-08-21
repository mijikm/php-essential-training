<!DOCTYPE html PUBLIC>

<html lang="en">
    <head>
        <title>Associative Arrays</title>
    </head>
    <body>
    <?php $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?>
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "Larry"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
    <?php //echo $assoc[0]; ?><br />

    <?php $numbers = array(4,8,15,16,23,42); ?><br />
    <?php //assign the number according to the index. 0 => 11 means assign 11 to the index 0?>
    <?php $numbers = array(0 => 11, 1=>8, 2=>15, 3=>16, 4=>23, 5=>43); ?>
    <?php echo $numbers[0]; ?>
    </body>
</html>

