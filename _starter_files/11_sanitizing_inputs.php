<?php
// =====================================
//  joonguini and joe
// =====================================
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/


// إعلان متغيرات مبدئية لتفادي الأخطاء
$name = $email = '';

// التحقق من الضغط على زر الإرسال
if (isset($_POST['submit'])) {
  // تنقية الاسم والبريد باستخدام filter_input
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  // فحص هل البريد صالح
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<p style="color:red;">❌ البريد الإلكتروني غير صالح</p>';
  } else {
    echo "<p style='color:green;'>✅ تم استلام البيانات: <strong>$name</strong> - <strong>$email</strong></p>";
  }
}
?>

<!-- ✅ نموذج تسجيل مستخدم ضريبي -->
<h2>📥 تسجيل مستخدم في نظام الضريبة</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label>الاسم:</label>
    <input type="text" name="name" required value="<?php echo $name; ?>">
  </div>
  <br>
  <div>
    <label>البريد الإلكتروني:</label>
    <input type="email" name="email" required value="<?php echo $email; ?>">
  </div>
  <br>
  <input type="submit" name="submit" value="تسجيل">
</form>
