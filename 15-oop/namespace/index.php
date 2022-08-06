<?php

/**
 * Namespace
 * https://www.php.net/manual/en/language.namespaces.php
 * เป็นการจัดกลุ่มของโค๊ดเพื่อป้องกัน conflict จากชื่อที่เหมือนกัน
 * การตั้ง namespace ต้องใส่ที่บรรทัดแรกเสมอก่อนโค๊ดอื่นๆ
 */

require_once("company-a.php");
require_once("company-b.php");

$company_a = new CompanyA\Company();
$company_a->hello();

$company_b = new CompanyB\Company();
$company_b->hello();



// Namespace Alias
use CompanyA\Company as CompanyA;
use CompanyB\Company as B;

$company_a = new CompanyA();
$company_a->hello();

$company_b = new B();
$company_b->hello();
