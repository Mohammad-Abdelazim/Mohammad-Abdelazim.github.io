<?php

if (isset($_GET['status']))
{
	if($_GET['status'] == 'on')
	{
		echo ("LED On"); 
	}
	elseif($_GET['status'] == 'off')
	{
		echo ("LED Off");
	}
}











?>