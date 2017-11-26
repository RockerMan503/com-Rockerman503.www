<!DOCTYPE html>
<html>
	<head>
		<title>Example Post-form submission</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	</head>
	<style type="text/css">
		.ex-primary {
			margin-left: auto;
			margin-right: auto;
			margin-top: 10vh;
			max-width: 600px; 
		}

		.ex-text {
			text-align: center;
			font-family: 'Montserrat', sans-serif;
			border: 1px solid black;
			border-radius: 8px;
		}

		.ex-back {
			margin-left: auto;
			margin-right: auto;
			width: 200px;
			height: 50px;
			background-color: #DDDDDD;
			border: 1px solid black;
			border-radius: 8px;
			text-decoration: none;
			margin-bottom: 20px;
		}

		.ex-back:hover{
			background-color: #AAAAAA;
			border: 1px solid black;
			border-radius: 8px;
			text-decoration: none;
		}
	</style>
	<body>

		<div class="ex-primary ex-text">
			<div class="">
				<h1>Thank you!</h1>
				<h2>Your response has been recorded.</h2>
			</div>
			<div class="ex-back" onclick="javascript:history.back()"><p>Go Back</p></div>

		</div>

		<!-- Inline PHP for appending form data in a file. Formatted as JSON for parsing later. -->
		<?php 
			// Generate file if necessary, and append info.
			$file_name = "FormSubmissionData.txt";
			 $store_data = 
              "{\"Name\":\"" 
            . ($_POST["contact"]) 
            . "\",\"Notes\":\""
            . ($_POST["notes"]) 
            . "\",\"Again\":\""
            . ($_POST["again"]) 
            . "\"}";
			/*Notice that the above are linked to Page 2*/
			$my_file = file_put_contents($file_name, $store_data.PHP_EOL , FILE_APPEND | LOCK_EX);
		?>
	</body>
</html>