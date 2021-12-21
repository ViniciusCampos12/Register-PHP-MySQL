<?php

const user = "root";
const pasw = "";
const host = "localhost";
const datab = "db_register";

$pdo = new PDO("mysql:dbname=".datab.";host=".host,user,pasw);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
