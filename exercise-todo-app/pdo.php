<?php

require_once("config.php");

try {
    // สร้าง connection จากคลาส PDO
    $connection = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
    // ตั้งให้ PDO error ตอนมีข้อผิดพลาด
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    die("เกิดข้อผิดพลาดขึ้น กรุณาลองใหม่อีกครั้ง");
}
