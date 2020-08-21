<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Pointers</title>
	</head>
	<body>
        <?php
            $ages = array(4,8,15,16,23,42);
            //current: current pointer value
            echo "1: " . current($ages) . "<br />";
            echo "<br />";
            //next: move the pointer forward
            //similar to using 'continue' inside a loop
            next($ages);
            echo "2: " . current($ages) . "<br />";
            echo "<br />";
            next($ages); // 15
            next($ages); // 16
            echo "3: " . current($ages) . "<br />"; // 16
            echo "<br />";
            //prev: move the pointer backward
            prev($ages);
            echo "4: " . current($ages) . "<br />";
            echo "<br />";
            //reset: move the pointer to the first element
            reset($ages);
            echo "5: " . current($ages) . "<br />";
            echo "<br />";
            //end: move the pointer to the last element
            end($ages);
            echo "6: " . current($ages) . "<br />";
            echo "<br />";
            // move the pointer past the last element
            next($ages);
            echo "7: " . current($ages) . "<br />"; // nothing/null
        ?>
        <?php
            reset($ages);
            // while loop that moves the array pointer
            // similar to foreach
            // useful for database
            while($age = current($ages)) { // assign current to $age
                echo $age . ", ";
                next($ages); // if null, it is considered as false, exit
            }
        ?>
	</body>
</html>