<?php
$course=$_GET["q"];


$c1=array('CSE','MECHANICAL','ELECTRONICS','ELECTRICAL','CIVIL');
$c2=array('IT');
$c3=array('PHARMA');
$c4=array('CSE','MECHANICAL','ELECTRICAL');
if($course=="B.tech")
{
	foreach($c1 as $c)
	echo "<option>$c
	</option>";
}
if($course=="BCA")
{
	foreach($c2 as $c)
	echo "<option>$c
	</option>";
}
if($course=="Pharmacy")
{
	foreach($c3 as $c)
	echo "<option>$c
	</option>";
}
if($course=="Diploma")
{
	foreach($c4 as $c)
	echo "<option>$c
	</option>";
}
?>