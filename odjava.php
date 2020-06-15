<?php

require_once 'db.php';

$conn->close();

session_start();
session_destroy();
header('Location: prijava.html');