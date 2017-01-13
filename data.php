<?php

if($connect=mysql_connect('localhost','root','123'))
{if($database=mysql_select_db('data',$connect))
	{
		if($query=mysql_query('select name from  where words LIKE "'.$_GET['value'].'%"'))
		{
			while($row=mysql_fetch_array($query))
				echo '<a target="_blank" href="https://www.google.co.in/?gfe_rd=cr&ei=r6J3WLuvFoPI8AfXjK6wAw#q='.$row[0].' meaning">'.$row[0].'</a><br />';
		}
		else
			echo "no query";
	}
	else
		echo "no select db";
	
	
}
	else
		echo "no connection";



?>