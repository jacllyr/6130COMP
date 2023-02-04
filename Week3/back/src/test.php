<?php
$file = fopen("data.txt","r");
while (($data = fgetcsv($file)) !== FALSE)
{
	        if($data[0] == $_GET["make"])
			        echo "Make = " . $data[0] . " Model = "  . $data[1] . " Price " . $data[2] . " Year = " . $data[3] . 
				"<br>";
}
?>
