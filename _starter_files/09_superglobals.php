<?php
// =====================================
//  joonguini and joe
// =====================================
/* ---------- Superglobals ---------- */
/*
  Built in variables that are always available in all scopes
*/

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

// var_dump($GLOBALS);   // طباعة جميع المتغيرات العامة
// var_dump($_GET);      // طباعة بيانات URL المرسلة عبر GET
// var_dump($_REQUEST);  // طباعة كل البيانات (GET + POST + COOKIE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tax System Info</title>
</head>
<body>
  <h2>📊 نظام ضريبة الدخل - بيانات الخادم</h2>
  <ul>
    <li><strong>اسم المضيف (Host):</strong> <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li><strong>جذر المستندات (Document Root):</strong> <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li><strong>جذر النظام (System Root):</strong> <?php echo $_SERVER['SystemRoot']; ?></li>
    <li><strong>اسم الخادم (Server Name):</strong> <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li><strong>منفذ الخادم (Server Port):</strong> <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li><strong>المسار الحالي للملف:</strong> <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li><strong>رابط الطلب الحالي (Request URI):</strong> <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li><strong>برمجية الخادم:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li><strong>بيانات المتصفح (Client Info):</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li><strong>عنوان المستخدم (IP):</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li><strong>منفذ المستخدم:</strong> <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>
