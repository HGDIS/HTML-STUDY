<?php
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$major = $_POST['major'];
$textarea = $_POST['textarea'];

function showName() {
	global $name;
	echo 'Name : ' . $name . "<br />";
}

function showAge() {
	global $age;
	echo 'Age  : ' . $age . "<br />";
}

function showSex() {
	global $sex;
	echo 'Sex  : ' . $sex . "<br />";
}

function showMajor() {
	global $major;
	echo 'Major: ' . $major . "<br />";
}

function showTextarea() {
	global $textarea;
	echo 'Text : ' . $textarea . "<br />";
}

function showAll() {
	global $name, $age, $sex, $major, $textarea;
	echo 'Name : ' . $name . "<br />";
	echo 'Age  : ' . $age . "<br />";
	echo 'Sex  : ' . $sex . "<br />";
	echo 'Major: ' . $major . "<br />";
	echo 'Text : ' . $textarea . "<br />";
}

function modifyName( $na ) {
	global $name;
	$name = $na;
}

function modifyAge( $ag ) {
	global $age;
	$age = $ag;
}

function modifySex( $sx ) {
	global $sex;
	$sex = $sx;
}

function modifyMajor( $maj ) {
	global $major;
	$major = $maj;
}

showAll();

?>
