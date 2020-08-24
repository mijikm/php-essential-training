<!DOCTYPE html PUBLIC>

<html lang="en">
	<head>
		<title>String Functions</title>
	</head>
	<body>
    <?php
    $first = "The quick brown fox";
    $second = " jumped over the lazy dog.";
    $third = $first;
    // concatenate strings
    $third .= $second;
    echo $third;
    ?>
    <br />
    Lowercase: <?php echo strtolower($third); ?><br />
    Uppercase: <?php echo strtoupper($third); ?><br />
    Uppercase only first: <?php echo ucfirst($third); ?><br />
    Uppercase camel words: <?php echo ucwords($third); ?><br />
    <br />
    Length: <?php echo strlen($third); ?><br />
    Trim: <?php echo "A" . trim(" B C D ") . "E"; //remove leading/trailing white spaces?><br />
    Find: <?php echo strstr($third,"brown"); ?><br />
    Replace by strings: <?php echo str_replace("quick","super-fast",$third); ?><br />
    <br />
    Repeat: <?php echo str_repeat($third,2); ?><br />
    Make substring: <?php echo substr($third,5, 10); ?><br />
    Find position: <?php echo strpos($third,"brown"); ?><br />
    Find character: <?php echo strchr($third,"z"); // find it and make it substring ?><br />
	</body>
</html>