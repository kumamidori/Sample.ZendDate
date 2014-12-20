<?php

require __DIR__ . '/../vendor/autoload.php';

// 月計算で、1月31日に1ヶ月を足したら 2月28日とするオプションの設定
Zend_Date::setOptions(array('extend_month' => false));

// Calculating Monthly Dates
$day1 = new Zend_Date(array(
    'year' => 2016, 'month' => 12, 'day' => 31));
echo $day1->toString('yyyy-MM-dd') . PHP_EOL; // 2016-12-31

$day1->add(2, Zend_Date::MONTH);  // 1 month since
echo '+2 month is ' . PHP_EOL . $day1->toString('yyyy-MM-dd') . PHP_EOL;  // 2017-02-28

echo PHP_EOL;

$day2 = new Zend_Date(
    array('year' => 2016, 'month' => 2, 'day' => 28));
echo $day2->toString('yyyy-MM-dd') . PHP_EOL; // 2016-02-28
$day2->sub(2, Zend_Date::MONTH ); // 2 month ago
echo '-2 month is ' . PHP_EOL . $day2->toString('yyyy-MM-dd') . PHP_EOL;  // 2016-12-28

