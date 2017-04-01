<?php
$entries = array();

function renderComments($value='')
{
	global $entries;
	echo "<table border=\"1\">";
	foreach ($entries as $name =>$comment) {
		echo "<tr>";
		echo "<td>".$name;
		echo "<tr>".$comment;
		echo "</tr>";
	}
	echo "</table>";
}

function addElement($name='', $comment ='')
{
	global $entries;
	$entries[$name] = $comment;
}
 
?>
