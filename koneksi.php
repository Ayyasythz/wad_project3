<?php

$conn = mysqli_connect("localhost", 'root', '1235813', 'wad_project3');

$result = mysqli_query($conn, "SELECT * FROM students");

var_dump($result);

$obj = mysqli_fetch_object($result);

var_dump($obj);

