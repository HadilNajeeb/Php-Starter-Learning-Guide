<?php
// =====================================
//  joonguini and joe
// =====================================

/* -------- Output & Comments ------- */

/*
  A .php file running on a server, can output both HTML and PHP code. There are multiple functions that can be used to output data to the browser.
*/







// Variables start with a $ sign
$name = 'Hadeel';
$age = 25;
$isActive = true;

// Output variables
echo $name;
echo $age;
echo $isActive; // Outputs 1 (true)

// Concatenate strings with dot (.)
echo 'Hello, my name is ' . $name . ' and I am ' . $age . ' years old.';



$income = 12000;

if ($income <= 5000) {
  echo "No tax";
} elseif ($income <= 10000) {
  echo "Tax is 5%";
} else {
  echo "Tax is 10%";
}


// For loop
for ($i = 1; $i <= 5; $i++) {
  echo "Number: $i <br>";
}

// While loop
$j = 1;
while ($j <= 3) {
  echo "Looping: $j <br>";
  $j++;
}




// Indexed array
$incomes = [1000, 3000, 7000];

// Access an element
echo $incomes[1]; // Outputs 3000

// Loop through array
foreach ($incomes as $income) {
  echo "Income: $income <br>";
}

// Associative array
$user = [
  'name' => 'Hadeel',
  'age' => 25,
  'city' => 'Muscat'
];

echo $user['name']; // Outputs Hadeel



// Define a function
function greet($name) {
  return "Hello, $name!";
}

// Call the function
echo greet('Hadeel');



// HTML form
?>
<form method="POST">
  <input type="text" name="username" placeholder="Enter your name">
  <button type="submit">Submit</button>
</form>
<?php

// Process form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  echo "Welcome, $username!";
}







