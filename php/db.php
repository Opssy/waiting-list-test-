<?php

$conn = mysqli_connect("localhost", "root", "", "iexchange");

if (!$conn) {
	die("connection failed: ".mysqli_connect_error());
}
