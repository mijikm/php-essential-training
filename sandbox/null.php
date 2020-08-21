<!DOCTYPE html PUBLIC>

<html lang="en">
    <head>
        <title>NULL</title>
    </head>
    <body>
        <?php
            $var1 = null; //not set; lack of having a value
            $var2 = "";
        ?>
        var1 null? <?php echo is_null($var1); ?><br />
        var2 null? <?php echo is_null($var2); ?><br />
        var3 null? <?php echo is_null($var3); ?><br />
        <br />
        var1 is set? <?php echo isset($var1); ?><br />
        var2 is set? <?php echo isset($var2); ?><br />
        var2 is set? <?php echo isset($var3); ?><br />
        <br />

        <?php // empty: "", null, 0, 0.0, "0", false, array() ; empty is the leading cause of bug?>
        <?php $var3 = "0"; ?>
        var1 is empty? <?php echo empty($var1); ?><br />
        var2 is empty? <?php echo empty($var2); ?><br />
        var2 is empty? <?php echo empty($var3); ?><br />
    </body>
</html>
