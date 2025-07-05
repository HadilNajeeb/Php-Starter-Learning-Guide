<?php
// =====================================
//  joonguini and joe
// =====================================

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */



$income = 18000;
$taxRate = 0.12;

// Simple if statement
if ($income >= 15000) {
  echo '1 You are in the high tax bracket<br>';
}

// If-else statement
if ($income < 10000) {
  echo '2 You are in the low tax bracket<br>';
} else {
  echo '2 You are in the standard or high tax bracket<br>';
}

// If-elseif-else statement
if ($income >= 20000) {
  echo '3 You are in the highest tax bracket<br>';
} elseif ($income >= 10000) {
  echo '3 You are in the standard tax bracket<br>';
} else {
  echo '3 You are in the low tax bracket<br>';
}

// If without braces (not recommended)
if ($income >= 15000) echo '4 High bracket<br>';
else echo '4 Not high<br>';

// Ternary operator
echo $income >= 15000 ? '5 High income taxpayer<br>' : '5 Standard taxpayer<br>';

// Short ternary operator
$myIncome = $income ?: 5000;
echo $myIncome;
echo '<br>';

// Null coalescing operator
$taxPayerName = isset($name) ? $name : 'Unknown';
$taxPayerName = $name ?? 'Unknown';
echo $taxPayerName;
echo '<br>';

// Switch statement
$taxStatus = 'filed'; // filed, pending, overdue

switch ($taxStatus) {
  case 'filed':
    echo 'Your taxes are submitted<br>';
    break;
  case 'pending':
    echo 'Your taxes are being processed<br>';
    break;
  case 'overdue':
    echo 'You need to pay your taxes<br>';
    break;
  default:
    echo 'No tax record found<br>';
}

/* ---------- Comparison Operators ---------- */

var_dump(18000 == 18000);
echo '<br>';

var_dump(18000 === '18000'); // false: one is string
echo '<br>';

var_dump(18000 != 15000);
echo '<br>';

var_dump(18000 !== '18000');
echo '<br>';

var_dump($income > 10000);
echo '<br>';

var_dump($income < 10000);
echo '<br>';

var_dump($income >= 18000);
echo '<br>';

var_dump($income <= 12000);
echo '<br>';

// Spaceship operator
var_dump(18000 <=> 15000); // 1
echo '<br>';
var_dump(18000 <=> 18000); // 0
echo '<br>';
var_dump(18000 <=> 20000); // -1
echo '<br>';

/* ---------- Logical Operators ---------- */

$isResident = true;
$hasFiled = true;

var_dump($income >= 15000 && $hasFiled);
echo '<br>';

var_dump($income >= 20000 || $hasFiled);
echo '<br>';

var_dump(!$isResident);
echo '<br>';

if ($income >= 15000 && $hasFiled) {
  echo 'You are compliant and in high bracket<br>';
}

if ($income >= 15000 || $hasFiled) {
  echo 'At least one of the conditions met<br>';
}

if (!($income < 10000)) {
  echo 'Income is acceptable for tax filing<br>';
}

/* ---------- Precedence ---------- */

$result1 = true && false;
$result2 = true || false;

var_dump($result1);
echo '<br>';
var_dump($result2);
echo '<br>';

$result3 = (true && false) || true;
var_dump($result3);
echo '<br>';

/* ---------- Complex Conditions ---------- */

$income = 18000;
$expenses = 3000;
$hasDependents = true;

if ($income >= 15000 && $expenses <= 5000 && $hasDependents) {
  echo 'Eligible for dependent tax relief<br>';
} elseif ($income >= 15000 && $expenses <= 5000) {
  echo 'Eligible for standard relief<br>';
} elseif ($income >= 15000) {
  echo 'No relief but taxed<br>';
} else {
  echo 'Minimal or no tax<br>';
}

/* ---------- Nested If Statements ---------- */

$hasID = true;
$isVerified = false;
$hasDigitalSignature = true;

if ($hasID) {
  if ($isVerified) {
    if ($hasDigitalSignature) {
      echo 'You can submit taxes online<br>';
    } else {
      echo 'Add digital signature to continue<br>';
    }
  } else {
    echo 'You must verify your ID<br>';
  }
} else {
  echo 'You need a valid taxpayer ID<br>';
}

/* ---------- Switch with Multiple Cases ---------- */

$submissionStatus = 'in_review';

switch ($submissionStatus) {
  case 'submitted':
  case 'received':
    echo 'Thank you for submitting<br>';
    break;
  case 'in_review':
  case 'under_review':
    echo 'We are checking your submission<br>';
    break;
  case 'rejected':
    echo 'Your submission has issues<br>';
    break;
  case 'approved':
    echo 'Tax return approved<br>';
    break;
  default:
    echo 'Unknown submission status<br>';
}

/* ---------- Match Expression (PHP 8+) ---------- */

$taxCode = 'TX02';

$category = match($taxCode) {
  'TX01' => 'Income Tax',
  'TX02' => 'Corporate Tax',
  'TX03' => 'VAT',
  default => 'Unknown tax category'
};

echo $category;
echo '<br>';
?>

