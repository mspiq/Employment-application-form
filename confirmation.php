<?php
$last_id = $_GET['id'] ?? null;

if ($last_id !== null && ctype_digit($last_id)) {
?>
      <!DOCTYPE html>
      <html lang="ar">
      <head>
        <meta charset="UTF-8">
        <title>تأكيد الإضافة</title>
        <style>
          body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
          }

          .confirmation-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }

          h1 {
            font-size: 24px;
            margin-bottom: 20px;
          }

          a.button {
            display: inline-block;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
          }

          a.telegram {
            background-color: #0088cc;
          }

          a.facebook {
            background-color: #3b5998;
          }

          a.back {
            background-color: #333;
          }
        </style>
      </head>
      <body>
        <div class="confirmation-container">
          <h1>تم إضافة البيانات بنجاح. رقم التسجيل الخاص بك هو: <?php echo $last_id; ?></h1>
          <h1>رسالة خاصة يجب تغيرها </h1>
          <h1>رسالة خاصة يجب تغيرها </h1>

          <a href="https://t.me/" class="button telegram">تيليجرام</a>
          <a href="https://www.facebook.com/" class="button facebook">Facebook</a>
          <a href="index.php" class="button back">الرجوع إلى الصفحة الرئيسية</a>
        </div>
      </body>
      </html>
<?php
} else {
  echo "<h1>خطأ حاول التسجيل من جديد</h1> ";
}
?>