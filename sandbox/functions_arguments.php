<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
    <?php
    function say_hello_to($word){
        echo "Hello {$word}!<br />";
    }

    $name = "John Doe";
    say_hello_to($name);
    ?>

    <?php
        function better_hello($greeting, $target, $punct){
            echo $greeting . " " . $target . $punct . "<br />";
        }

        better_hello("Hello",$name,"!");
        better_hello("Greetings",$name,null);
    ?>
	</body>
</html>