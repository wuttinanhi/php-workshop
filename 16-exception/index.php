<?php

/**
 * Exception
 * https://www.php.net/manual/en/language.exceptions.php
 * 
 * Exception เป็น object ที่อธิบายข้อผิดพลาดการทำงานของโปรแกรม
 * สามารถสร้าง Exception ได้จากคำสั่ง throw new Exception($message)
 * สามารถดัก Exception ด้วย try...catch
 * สามารถสร้าง custom exception ได้จากการ extending Exception class
 * 
 */


// throwing exception example
try {
    throw new Exception('Something went wrong');
} catch (Exception $e) {
    echo "error! " . $e->getMessage() . "\n";
}



echo "<br>";


// custom exception example
class CustomException extends Exception
{
    public function __construct($message)
    {
        parent::__construct("Custom Exception: " . $message);
    }
}

try {
    throw new CustomException('Something went wrong');
} catch (CustomException $e) {
    echo "error! " . $e->getMessage() . "\n";
}
