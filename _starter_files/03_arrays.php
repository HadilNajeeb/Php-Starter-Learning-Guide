<?php
// =====================================
//  joonguini and joe
// =====================================
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
// Indexed Array (قائمة بدخل الأشهر)
$monthlyIncome = array(1200, 1300, 1100, 1250);
$taxRates = [0.05, 0.10, 0.15];
$departments = ['Finance', 'HR', 'IT'];
$departments[3] = 'Legal';
$departments[] = 'Marketing';

// Associative Array (اسم الشخص => دخله)
$employees = array('Ahmed' => 3200, 'Layla' => 2700, 'Salim' => 3000);
$employeeIds = [1001 => 'Ahmed', 1002 => 'Layla', 1003 => 'Salim'];

// Multi-dimensional Array (الدخل والمصاريف والضريبة)
$records = array(
  array('Ahmed', 3200, 300),
  array('Layla', 2700, 250),
  array('Salim', 3000, 280),
);

echo $records[1][2]; // Tax paid by Layla
echo '<br>';

// Associative Array with taxpayer data
$taxpayer = array(
  'first_name' => 'Ahmed',
  'last_name' => 'Al-Khalili',
  'email' => 'ahmed@example.com',
);

echo $taxpayer['first_name'];
echo '<br>';

// Short array syntax
$taxpayer2 = [
  'first_name' => 'Layla',
  'last_name' => 'Said',
  'email' => 'layla@example.com',
];

echo $taxpayer2['first_name'];
echo '<br>';

// Multi-dimensional Associative Array (مجموعة دافعي الضرائب)
$taxpayers = array(
  array(
    'first_name' => 'Ahmed',
    'last_name' => 'Al-Khalili',
    'email' => 'ahmed@example.com',
  ),
  array(
    'first_name' => 'Layla',
    'last_name' => 'Said',
    'email' => 'layla@example.com',
  ),
  array(
    'first_name' => 'Salim',
    'last_name' => 'Yousuf',
    'email' => 'salim@example.com',
  ),
);

echo $taxpayers[2]['email']; // Email of Salim
echo '<br>';

// Convert JSON string to object
$jsonTax = '{"first_name":"Ahmed","last_name": "Al-Khalili","email":"ahmed@example.com"}';
$obj = json_decode($jsonTax);
echo $obj->first_name;
echo '<br>';

// Convert array to JSON
$arr = array('first_name' => 'Layla', 'last_name' => 'Said', 'email' => 'layla@example.com');
$json = json_encode($arr);
echo $json;
echo '<br>';

// Array functions
$taxTypes = array('Income Tax', 'Corporate Tax', 'VAT');

// Get length
echo count($taxTypes);
echo '<br>';

// Search array
var_dump(in_array('VAT', $taxTypes));
echo '<br>';

// Add to array
$taxTypes[] = 'Property Tax';
array_push($taxTypes, 'Import Tax', 'Export Tax');
array_unshift($taxTypes, 'Environmental Tax');

// Remove from array
array_pop($taxTypes);
array_shift($taxTypes);
unset($taxTypes[2]);

// Split into chunks
$groupedTaxes = array_chunk($taxTypes, 2);
print_r($groupedTaxes);
echo '<br>';

// Merge arrays
$a1 = [500, 1000];
$a2 = [1500, 2000];
$a3 = array_merge($a1, $a2);
print_r($a3);
echo '<br>';

// Spread operator (PHP 7.4+)
$a4 = [...$a1, ...$a2];
print_r($a4);
echo '<br>';

// Combine arrays
$codes = ['T1', 'T2', 'T3'];
$names = ['Income Tax', 'VAT', 'Property Tax'];
$combined = array_combine($codes, $names);
print_r($combined);
echo '<br>';

// Array keys
$keys = array_keys($combined);
print_r($keys);
echo '<br>';

// Array values
$values = array_values($combined);
print_r($values);
echo '<br>';

// Flip array
$flipped = array_flip($combined);
print_r($flipped);
echo '<br>';

// Range
$years = range(2015, 2025);
print_r($years);
echo '<br>';

// Map
$formattedYears = array_map(function($y) {
  return "Tax Year: $y";
}, $years);
print_r($formattedYears);
echo '<br>';

// Filter
$recentYears = array_filter($years, fn($y) => $y >= 2020);
print_r($recentYears);
echo '<br>';

// Reduce
$totalIncome = array_reduce($a3, fn($carry, $item) => $carry + $item);
echo $totalIncome;
echo '<br>';
?>