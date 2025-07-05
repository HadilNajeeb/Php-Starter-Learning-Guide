<?php
// =====================================
//  joonguini and joe
// =====================================
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
function registerTaxpayer()
{
  echo 'Taxpayer registered';
}

// تشغيل الدالة
registerTaxpayer();

// دالة مع وسيط (اسم دافع الضريبة)
function registerTaxpayerByName($name)
{
  echo "Taxpayer {$name} has been registered!";
}

// تمرير القيمة
registerTaxpayerByName('Ahmed');

// دالة تُعيد ناتج: حساب ضريبة الدخل
function calculateTax($income, $rate)
{
  return $income * $rate;
}

$tax = calculateTax(20000, 0.1); // 10%
echo $tax;

// دالة مع قيمة افتراضية لنسبة الضريبة
function calculateStandardTax($income, $rate = 0.15)
{
  return $income * $rate;
}

echo calculateStandardTax(15000);         // Uses default 15%
echo calculateStandardTax(15000, 0.1);    // Uses custom rate

// دالة مجهولة (anonymous function) لحساب خصم
$applyDiscount = function ($amount, $discount) {
  return $amount - $discount;
};

echo $applyDiscount(5000, 500); // 4500

// دالة سهمية (Arrow function) لحساب صافي الدخل بعد الضريبة
$netIncome = fn($income, $tax) => $income - $tax;

echo $netIncome(20000, 3000); // 17000
?>