<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Continue</title>
	</head>
	<body>
        <?php // for loop
            for ($count = 0; $count <= 10; $count++) {
                if ($count % 2 == 0) { continue; }
                echo $count . ", ";
            }
        ?>
    <br />
        <?php
            $count = 0;
            while ($count <= 10) {
                if ($count == 5) {
                    $count++; // if not, infinite loop
                    continue;
                }
                echo $count . ", ";
                $count++; // increment by 1
            }
        ?>
    <br />
        <?php // loop inside a loop with continue
        for ($i=0; $i<=5; $i++) {
            if ($i % 2 == 0) { continue; } // same as continue(1)
            for ($k = 0; $k <= 5; $k++) {
                if ($k == 3) { continue(2); } // continue TWO loops back!
                echo $i . "-" . $k . "<br />";
            }
        }
        ?>
	</body>
</html>