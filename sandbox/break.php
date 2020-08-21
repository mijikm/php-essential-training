<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Break</title>
	</head>
	<body>
    <?php // for loop
        for ($count = 0; $count <= 10; $count++) {
            if ($count == 5) {
                break;
            }
            echo $count . ", ";
        }
    ?>
    <br />
    <?php // loop inside a loop with continue
    for ($i=0; $i<=5; $i++) {
        if ($i % 2 == 0) { continue; } // same as continue(1)
        for ($k = 0; $k <= 5; $k++) {
            if ($k == 3) { break(2); } // break out of TWO loops
            echo $i . "-" . $k . "<br />";
        }
    }
    ?>
	</body>
</html>