    <?php
		function hello() {
		$name = "danna";
	if ($name == "danna") {
    echo "finally said hello $name!";
    }
	}
	hello();
    ?>

	/* this is a looping associative array */
	
	<?php
	$income = array("Mike"=>"$35,000", "Danna"=>"$0", "Sam"=>"$91,000");

	foreach($income as $x => $x_value) {
		echo "<br>";
		echo $x . " makes " . $x_value . " per year.";
	}
	?>