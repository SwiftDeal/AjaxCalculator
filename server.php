<?php
	if (isset($_POST['action'])) {
		if (!empty($_POST['num1'])&&!empty($_POST['num2'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			switch ($_POST['action']) {
				case 'add':
					echo $num1+$num2;
					break;

				case 'sub':
					echo $num1-$num2;
					break;

				case 'mul':
					echo $num1*$num2;
					break;

				case 'mod':
					echo $num1/$num2;
					break;

				default:
					echo "No Action Selected";
					break;
			}
		} else {
			echo "Please Enter Number";
		}
	}
	
?>
