
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWITCH</title>
</head>
<body>
    
<h1>SWITCH structure</h1>

<!-- 9. The "Switch" structure.
Un Switch

If/elseif/elseif/else statements are hard to read. 
Fortunately, you can use another conditional structure: 
the switch. -->

<?php

$weather = 'storm';

switch ($weather) {
	case 'rain':
		echo "Take an umbrella";
		break;
	case 'storm':
		echo "Don't get out today!";
		break;
	default:
		echo "Weather will be ok to day";
}

?>




</body>
</html>