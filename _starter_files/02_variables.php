<?php
// =====================================
//  joonguini and joe
// =====================================

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

// String - Can be single or double quotes
$taxPayer = 'hadeel';
$taxPayer2 = "najeeb";

// Integer - Whole numbers
$year = 2024;
$basicSalary = 12000;

// Float - Decimal numbers
$deductions = 1200.50;
$taxRate = 0.12;

// Boolean - true or false
$isResident = true;
$hasFiled = false;

// Null - Empty variable
$taxPenalty = null;

// Array - Multiple values
$taxYears = array(2020, 2021, 2022, 2023, 2024);
$incomes = [10000, 15000, 18000];

// Object - Instance of a class
$declaration = new stdClass();
$declaration->name = 'hadeel';
$declaration->year = 2024;
$declaration->income = 18000;

// Resource - Special variable that holds a reference to an external resource
$logFile = fopen('tax_log.txt', 'a');

/* ---- Variable Naming ---- */

// Long variable names use camelCase
$annualIncome = 18000;
$taxableAmount = 15000;
$isSubmitted = true;

// Constant - Uppercase with underscore
define('TAX_SYSTEM_NAME', 'Oman Tax Authority');
define('MAX_TAX_RATE', 0.15);

const COUNTRY_CODE = 'OM';

echo TAX_SYSTEM_NAME;
echo '<br>';
echo MAX_TAX_RATE;
echo '<br>';
echo COUNTRY_CODE;
echo '<br>';

/* ---- String Concatenation ---- */

$firstName = 'hadeel';
$lastName = 'AlBalushi';
$fullName = $firstName . ' ' . $lastName;
echo $fullName;
echo '<br>';

// You can also use double quotes to interpolate
$taxMessage = "$fullName has an income of $annualIncome OMR";
echo $taxMessage;
echo '<br>';

// You can also use curly braces
$taxNotice = "{$fullName} must file tax for year {$year}";
echo $taxNotice;
echo '<br>';

// You can also use the .= operator to append
$status = "Tax Status: ";
$status .= $isSubmitted ? "Submitted" : "Not Submitted";
echo $status;
echo '<br>';

/* ---- Escaping Characters ---- */

$warning = "The system said: \"Tax filing is overdue.\"";
echo $warning;
echo '<br>';

$info1 = 'hadeel\'s declaration was accepted.';
echo $info1;
echo '<br>';

$info2 = "najeeb's income was 'under review'.";
echo $info2;
echo '<br>';

/* ---- Variable Functions ---- */

// Check if variable is set
var_dump(isset($taxRate));
echo '<br>';

// Check if variable is empty
var_dump(empty($taxPenalty));
echo '<br>';

// Get variable type
echo gettype($taxableAmount);
echo '<br>';

// Check if variable is of specific type
var_dump(is_string($fullName));
echo '<br>';

var_dump(is_int($year));
echo '<br>';

var_dump(is_bool($isSubmitted));
echo '<br>';

var_dump(is_array($taxYears));
echo '<br>';

var_dump(is_object($declaration));
echo '<br>';

var_dump(is_null($taxPenalty));
echo '<br>';

/* ---- Variable Scope ---- */

// Global scope
$globalIncome = 20000;

function showIncome() {
  // Local scope
  $localTax = 2400;
  echo "Local tax: $localTax<br>";
  
  // Access global variable
  global $globalIncome;
  echo "Global income: $globalIncome<br>";
}

showIncome();

// You can also use $GLOBALS array
function showGlobalIncome() {
  echo "Accessing via GLOBALS: " . $GLOBALS['globalIncome'] . '<br>';
}

showGlobalIncome();
?>