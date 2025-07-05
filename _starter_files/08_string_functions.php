<?php
// =====================================
//  joonguini and joe
// =====================================
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/
$string = "Income Tax Report";

// Get the length of a string
echo strlen($string);
echo '<br>';

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'T'); // أول ظهور لـ T
echo '<br>';

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');
echo '<br>';

// Reverse a string
echo strrev($string);
echo '<br>';

// Convert all characters to lowercase
echo strtolower($string);
echo '<br>';

// Convert all characters to uppercase
echo strtoupper($string);
echo '<br>';

// Uppercase the first character of each word
echo ucwords($string);
echo '<br>';

// String replace
echo str_replace('Tax', 'VAT', $string); // تغيير كلمة Tax إلى VAT
echo '<br>';

// Return portion of a string specified by the offset and length
echo substr($string, 0, 6); // "Income"
echo '<br>';
echo substr($string, 7);    // "Tax Report"
echo '<br>';

// Starts with
if (str_starts_with($string, 'Income')) {
  echo 'YES - Starts with Income';
}
echo '<br>';

// Ends with
if (str_ends_with($string, 'Report')) {
  echo 'YES - Ends with Report';
}
echo '<br>';

// HTML Entities - لحماية نص HTML مدخل من المستخدم
$string2 = '<p>Income Tax Summary</p>';
echo htmlentities($string2);
echo '<br>';

// Formatted strings - مفيدة عند طباعة تقارير
$taxpayer = 'Ahmed';
$type = 'Self-employed';

printf('%s is a %s taxpayer', $taxpayer, $type);
echo '<br>';

$amount = 1500;
printf('Total tax paid: $%d', $amount);
echo '<br>';

$rate = 0.075;
printf('Applied rate: %.2f%%', $rate * 100); // 7.50%
echo '<br>';
?>