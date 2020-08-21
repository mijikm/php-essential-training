<!DOCTYPE html PUBLIC>

<html lang="en">
    <head>
        <title>Array Functions</title>
    </head>
    <body>
        <?php $numbers = array(8,23,15,42,16,4) ?>
        Count: <?php echo count($numbers); ?><br />
        Max value: <?php echo max($numbers); ?><br />
        Min value: <?php echo min($numbers); ?><br />
        <br />
        <pre>
        Sort: <?php sort($numbers); print_r($numbers); ?><br />
        Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
        </pre>
        <br />
        <?php // implode turns array into the string, 1st arg is separator?>
        Implode: <?php echo $num_string = implode(" * ", $numbers); ?><br />
        <?php // explode turns string into the array, 1st arg is delimiter?>
        Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
        <br />

        15 in array?: <?php echo in_array(15, $numbers); // returns T(1)/F ?><br />
        19 in array?: <?php echo in_array(19, $numbers); ?><br />
    </body>
</html>
