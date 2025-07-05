<?php
// =====================================
//  joonguini and joe
// =====================================
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// معالجة البيانات عند الضغط على زر الإرسال
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];

  echo "<h3>🧾 مرحبًا، $name. تم استلام بياناتك الضريبية.</h3>";
}
?>

<!--  تمرير اسم المكلف عبر الرابط (GET) -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?taxpayer=Ahmed">عرض بيانات المكلف Ahmed</a>

<br><br>

<!-- نموذج تسجيل مكلف ضريبي -->
<h2>📥 نموذج تسجيل مكلف ضريبي</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label>اسم المكلف:</label>
    <input type="text" name="name" required>
  </div>
  <br>
  <div>
    <label>كلمة المرور:</label>
    <input type="password" name="password" required>
  </div>
  <br>
  <input type="submit" name="submit" value="تسجيل">
</form>