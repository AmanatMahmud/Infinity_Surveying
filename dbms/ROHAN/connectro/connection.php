<?php
// Create connection
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'survey');
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
