<?php
// =====================================
//  joonguini and joe
// =====================================

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/



// For Loop
for ($i = 1; $i <= 5; $i++) {
  echo 'Taxpayer ID: ' . $i . '<br>';
}

// While Loop
$i = 1;
while ($i <= 5) {
  echo 'Filing attempt ' . $i . '<br>';
  $i++;
}

// Do...While Loop
$i = 1;
do {
  echo 'Monthly income check ' . $i . '<br>';
  $i++;
} while ($i <= 5);

// Foreach Loop - Indexed array
$taxpayers = array('Ahmed', 'Layla', 'Salim');

foreach ($taxpayers as $name) {
  echo $name . ' submitted their return<br>';
}

// Foreach Loop - Associative array
$emails = array('Ahmed' => 'ahmed@mail.com', 'Layla' => 'layla@mail.com');

foreach ($emails as $name => $email) {
  echo $name . ' : ' . $email . '<br>';
}

// Foreach Loop - With index
$incomes = array(15000, 18000, 22000);

foreach ($incomes as $index => $income) {
  echo 'Taxpayer #' . ($index + 1) . ' has income: ' . $income . '<br>';
}

// Foreach Loop - Multidimensional
$records = array(
  array('name' => 'Ahmed', 'income' => 18000, 'tax' => 2160),
  array('name' => 'Layla', 'income' => 22000, 'tax' => 2640)
);

foreach ($records as $record) {
  echo $record['name'] . ' paid tax: ' . $record['tax'] . '<br>';
}

// Foreach - Object
$declaration = new stdClass();
$declaration->name = 'Salim';
$declaration->year = 2024;
$declaration->status = 'Filed';

foreach ($declaration as $key => $value) {
  echo $key . ': ' . $value . '<br>';
}

// Loop Control: Break
for ($i = 1; $i <= 10; $i++) {
  if ($i === 4) break;
  echo 'Record ' . $i . '<br>';
}

// Loop Control: Continue
for ($i = 1; $i <= 5; $i++) {
  if ($i === 3) continue;
  echo 'Tax Check ' . $i . '<br>';
}

// Nested Loops
for ($y = 2021; $y <= 2023; $y++) {
  for ($m = 1; $m <= 3; $m++) {
    echo "Tax Year $y - Quarter $m<br>";
  }
}

// While loop with array
$rates = array(0.05, 0.1, 0.15);
$i = 0;

while ($i < count($rates)) {
  echo 'Rate: ' . ($rates[$i] * 100) . '%<br>';
  $i++;
}

// Do-While with array
$i = 0;
do {
  echo 'Tax Rate: ' . ($rates[$i] * 100) . '%<br>';
  $i++;
} while ($i < count($rates));

// For loop with array
for ($i = 0; $i < count($rates); $i++) {
  echo 'Bracket ' . ($i + 1) . ': ' . $rates[$i] . '<br>';
}

// Foreach with index
foreach ($rates as $index => $rate) {
  echo 'Index ' . $index . ': ' . ($rate * 100) . '%<br>';
}

// Loop with range
$years = range(2015, 2020);

foreach ($years as $year) {
  echo 'Tax year: ' . $year . '<br>';
}

// Loop with step
for ($i = 10000; $i <= 20000; $i += 5000) {
  echo 'Income: ' . $i . '<br>';
}

// Loop with condition (even/odd income)
$incomes = array(12000, 15000, 16000, 17500);

foreach ($incomes as $income) {
  echo $income . ' is ' . ($income % 2 == 0 ? 'even' : 'odd') . ' income<br>';
}

// Loop with multiple conditions
$taxpayers = array(
  array('name' => 'Ahmed', 'income' => 25000),
  array('name' => 'Fatima', 'income' => 8000),
  array('name' => 'Omar', 'income' => 12000)
);

foreach ($taxpayers as $p) {
  if ($p['income'] >= 15000) {
    echo $p['name'] . ' is a high-income taxpayer<br>';
  } else {
    echo $p['name'] . ' has low income<br>';
  }
}

// Break & Continue together
$incomes = array(5000, 10000, 15000, 20000, 25000);

foreach ($incomes as $income) {
  if ($income === 15000) continue;
  if ($income === 25000) break;
  echo 'Processing: ' . $income . '<br>';
}

// Loop with array functions
$regions = array('Muscat', 'Salalah', 'Sohar');

// array_walk
array_walk($regions, function($r) {
  echo 'Auditing tax office in ' . $r . '<br>';
});

// array_map
$upperRegions = array_map('strtoupper', $regions);
foreach ($upperRegions as $r) {
  echo $r . '<br>';
}

// array_filter
$longNames = array_filter($regions, function($r) {
  return strlen($r) > 5;
});
foreach ($longNames as $r) {
  echo $r . ' has long name<br>';
}
?>
