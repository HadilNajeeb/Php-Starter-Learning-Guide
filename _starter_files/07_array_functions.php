<?php
// =====================================
//  joonguini and joe
// =====================================
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$salaries = [1200, 1500, 1800, 2200];

// Get array length
echo count($salaries); // عدد الرواتب

// Search array
var_dump(in_array(1500, $salaries)); // هل توجد راتب 1500؟

// Add to array
$salaries[] = 2500;
array_push($salaries, 2700, 3000);
array_unshift($salaries, 1000); // إدخال راتب صغير في البداية

// Remove from array
array_pop($salaries);     // إزالة آخر عنصر
array_shift($salaries);   // إزالة أول عنصر
unset($salaries[2]);      // إزالة عنصر بموقع معيّن

// Split into chunks (مثلاً مجموعات من موظفين)
$chunked = array_chunk($salaries, 2);
print_r($chunked);

// Merge arrays
$tax2023 = [5, 10, 15];
$tax2024 = [20, 25, 30];
$merged = array_merge($tax2023, $tax2024);
print_r($merged);

// Spread operator (PHP 7.4+)
$spread = [...$tax2023, ...$tax2024];
print_r($spread);

// Combine arrays (ربط الشرائح بالنسب)
$brackets = ['Low', 'Medium', 'High'];
$rates = [5, 10, 15];
$combined = array_combine($brackets, $rates);
print_r($combined);

// Array keys (الشرائح)
$keys = array_keys($combined);
print_r($keys);

// Array values (النسب)
$values = array_values($combined);
print_r($values);

// Flip array (النسب تصبح مفاتيح)
$flipped = array_flip($combined);
print_r($flipped);

// Range - لإنشاء أرقام هويات من 1000 إلى 1010
$ids = range(1000, 1010);
print_r($ids);

// Map - صياغة عبارات على شكل تقارير
$reports = array_map(function($id) {
  return "Taxpayer ID: ${id}";
}, $ids);
print_r($reports);

// Filter - اختيار رواتب أقل من أو تساوي 2000
$lowSalaries = array_filter($salaries, fn($salary) => $salary <= 2000);
print_r($lowSalaries);

// Reduce - مجموع كل الرواتب
$totalSalaries = array_reduce($salaries, fn($carry, $salary) => $carry + $salary);
echo $totalSalaries;
?>