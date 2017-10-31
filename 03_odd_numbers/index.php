<?php 

for($i = 0; $i < 1000; $i++)
{
	echo 'The Current Number is - ' . $i . '<br>';
}

for($i = 1; $i < 1000; $i++)
{
	if($i % 2 == 1)
	{
		echo $i . '<br>';
	}
}

?>