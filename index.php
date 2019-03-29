<html>
	<head>
	</head>
	<body>
		<h1>Implementation of dkmarc</h1>
		<?php

		error_reporting(E_ALL);
		ini_set('display_errors', TRUE);
		ini_set('display_startup_errors', TRUE);

		include('class.dkMARC.php');
		$dkmarc = new dkMARC(file_get_contents('sampleMARCrecords.mrc'));
		$recordlines = $dkmarc->breakMARCRecords();
		print("<hr/><pre>");
		for($i=0; $i<count($recordlines); $i++){
			print_r($dkmarc->breakMARCRecord($recordlines[$i]));
		}
		print("</pre>");

		?>
	</body>
</html>