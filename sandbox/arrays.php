<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Arrays</title>
	</head>
	<body>
    <?php
        // ordered, first item's index is 0
        $numbers = array(4,8,15,16,23,42);
        echo $numbers[0];

    ?>
    <?php $mixed = array(6, "fox", "dog",array("x","y","z")); ?>
    <?php echo $mixed[2]; ?><br />
    <?php //echo $mixed[3]; ?><br />
    <?php //echo $mixed ?><br />
    <pre>
        <?php echo $mixed[3][1]; ?><br />
        <?php $mixed[2] = "cat"; ?>
        <?php $mixed[4] = "mouse"; ?>
        <?php $mixed[] = "horse"; //add to the last index ?>
        <?php echo print_r($mixed); ?>
    </pre>
    <?php
        // PHP 5.4 added the short array syntax.
        $array = [1,2,3];
        echo print_r($array);
    ?>
	</body>
</html>