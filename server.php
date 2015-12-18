<?php
	if (isset($_POST['action'])) {
		echo $_POST['num1'].'<br/>';
		echo $_POST['num2'].'<br/>';
		if (ctype_digit($_POST['num1'])&&ctype_digit($_POST['num2'])) {
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
					echo $num1%$num2;
					break;

				case 'div':
					if($num2==0) {
						echo "Divide by 0 not possible";
						break;
					}
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
