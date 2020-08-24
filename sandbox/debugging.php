<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>Debugging</title>
	</head>
	<body>
    <?php
        $number = 99;
        $string = "Bug?";
        $array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

        var_dump($number);
        var_dump($string);
        var_dump($array);
    ?>
    <br />
    <?php
        //print_r(get_defined_vars());
    ?>
    <pre>
    <?php
        function say_hello_to($word) {
            echo "Hello {$word}!<br />";
            var_dump(debug_backtrace());
        }
        say_hello_to('Everyone');
    ?>
    </pre>
	</body>
</html>