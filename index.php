<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>استمارة التقديم</title>
  <link rel="stylesheet" href="style.css">
 <style>
    body {
      text-align: center;
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      margin: 20px 0;
      width: 200px;
      height: 50px;
    }

    .header {
      margin-bottom: 20px;
    }

    h2 {
      color: #333;
    }

    h3 {
      color: #555;
      line-height: 1.6;
    }

    label,
    input,
    select,
    textarea,
    button {
      margin-bottom: 10px;
    }

    input,
    select,
    textarea {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<div class="container">
    <img src="Logo.PNG" alt="شعار الشركة" class="logo">
    <div class="header">
      <h1>اسم الشركة الطالبة للتوظيف</h1>
      <h2>استمارة التوظيف</h2>
      <h3> رسالة او عنوان للشركة الطالبة للتوظيف</h3>
      <h5></h5>
    </div>
  </div>
  <br>
  <div class="container">
  <form method="post" action="process.php">
    <label for="full_name">الاسم الكامل: </label>
      <input type="text" id="full_name" name="full_name" required>
      
      <label for="title">اللقب:</label>
      <input type="text" id="title" name="title">

      <label for="date_of_birth">تاريخ الميلاد:</label>
      <input type="date" id="date_of_birth" name="date_of_birth" required>

      <label for="place_of_birth">محل الولاده: <span class="label-description"></span></label>
      <input type="text" id="place_of_birth" name="place_of_birth" required>

      <label for="nationality">الجنسية: <span class="label-description"></span></label>
      <input type="text" id="nationality" name="nationality" required>

      <label for="current_address">العنوان الحالي: <span class="label-description">(مدينة - المنطقة - الحي)</span></label>
      <input type="text" id="current_address" name="current_address" required>

      <br>
      <div>
        <label for="marital_status">الحالة الاجتماعية: <span class="label-description"></span></label>
        <select id="marital_status" name="marital_status" required>
          <option value="" disabled selected>اختر الحالة الاجتماعية</option>
          <option value="اعزب">اعزب</option>
          <option value="متزوج">متزوج</option>
        </select>
      </div>
      <br>
      <div id="children_count" style="display: none;">
        <label for="number_of_children">عدد الأولاد: <span class="label-description"></span></label>
        <input type="number" id="number_of_children" name="number_of_children">
      </div>
      <br>
      <div>
        <br>
        <label for="gender">الجنس:</label>
        <select id="gender" name="gender" required>
          <option value="" disabled selected>اختر الجنس</option>
          <option value="ذكر">ذكر</option>
          <option value="أنثى">أنثى</option>
        </select>
      </div>
      <div>
        <br>
        <label for="educational_background">التحصيل الدراسي:</label>
        <select id="educational_background" name="educational_background" required>
          <option value="" disabled selected>اختر التحصيل الدراسي</option>
          <option value="دكتوراه">دكتوراه</option>
          <option value="ماجستير">ماجستير</option>
          <option value="بكالوريوس">بكالوريوس</option>
          <option value="دبلوم">دبلوم</option>
          <option value="اعدادية">اعدادية</option>
          <option value="متوسطة">متوسطة</option>
          <option value="ابتدائية">ابتدائية</option>
          <option value="لا يوجد">لا يوجد</option>
        </select>
      </div>
      <br>
      <div id="institute-and-department" style="display: none;">
        <label for="institute">اسم المعهد: <span class="label-description"></span></label>
        <input type="text" id="institute" name="institute">
        <label for="department">القسم: <span class="label-description"></span></label>
        <input type="text" id="department" name="department">
        <br>
      </div>
      <div id="college-university-section" style="display: none;">
        <label for="university">الجامعة: <span class="label-description"></span></label>
        <input type="text" id="university" name="university">
        <label for="college">الكلية: <span class="label-description"></span></label>
        <input type="text" id="college" name="college">
        <label for="section">القسم: <span class="label-description"></span></label>
        <input type="text" id="section" name="section">
        <br>
      </div>
      <label for="graduation_year">تاريخ التخرج (السنة): <span class="label-description"></span></label>
      <input type="text" id="graduation_year" name="graduation_year" placeholder="YYYY" pattern="\d{4}">
      <label for="educational_certificates">الشهادات الدراسية: <span class="label-description"></span></label>
      <textarea id="educational_certificates" name="educational_certificates"></textarea>
      <label for="experience_certificates">شهادات الخبرة: <span class="label-description">(دورات او مهنة)</span></label>
      <textarea id="experience_certificates" name="experience_certificates"></textarea>
      <label for="previous_job">أخر مكان عمل: <span class="label-description">(اسم الشركة او الدائرة)</span></label>
      <input type="text" id="previous_job" name="previous_job">
      <label for="job_type">أخر نوع وظيفة: <span class "label-description"></span></label>
      <input type="text" id="job_type" name="job_type">
      <label for="national_id">الهواية: <span class="label-description"></span></label>
      <input type="text" id="national_id" name="national_id">
      <label for="work_skills">مهارات العمل: <span class="label-description"></span></label>
      <textarea id="work_skills" name="work_skills" required></textarea>
      <label for="applying_for_job">أتقدم لوظيفة: <span class="label-description"></span></label>
      <input type="text" id="applying_for_job" name="applying_for_job" required>
      <label for="phone_number">رقم الهاتف: <span class="label-description"></span></label>
      <input type="tel" id="phone_number" name="phone_number" required>
      <label for="agreement"> <span class="label-description">اتعهد بأن جميع المعلومات الواردة اعلاه صحيحة </span></label>
      <input type="checkbox" id="agreement" name="agreement" required>
    <input type="submit" value="إرسال">
  </form>
  </div>
    <script>
    // التصميم بوساطة محمد صلاح 
    // https://github.com/mspiq
    const educationalBackground = document.getElementById('educational_background');
    const collegeUniversitySection = document.getElementById('college-university-section');
    const instituteAndDepartment = document.getElementById('institute-and-department');

    educationalBackground.addEventListener('change', function() {
      if (this.value === 'دكتوراه' || this.value === 'ماجستير' || this.value === 'بكالوريوس') {
        collegeUniversitySection.style.display = 'block';
        instituteAndDepartment.style.display = 'none';
      } else if (this.value === 'دبلوم') {
        collegeUniversitySection.style.display = 'none';
        instituteAndDepartment.style.display = 'block';
      } else {
        collegeUniversitySection.style.display = 'none';
        instituteAndDepartment.style.display = 'none';
      }
    });

    // 
    document.getElementById('marital_status').addEventListener('change', function() {
      const childrenCount = document.getElementById('children_count');
      if (this.value === 'متزوج') {
        childrenCount.style.display = 'block';
      } else {
        childrenCount.style.display = 'none';
      }
    });

    function validateForm() {
      const full_name = document.getElementById('full_name').value;
      const date_of_birth = document.getElementById('date_of_birth').value;
      const place_of_birth = document.getElementById('place_of_birth').value;
      const nationality = document.getElementById('nationality').value;
      const current_address = document.getElementById('current_address').value;
      const marital_status = document.getElementById('marital_status').value;
      const work_skills = document.getElementById('work_skills').value;
      const applying_for_job = document.getElementById('applying_for_job').value;
      const agreement = document.getElementById('agreement').checked;
      const phone_number = document.getElementById('phone_number').value;

      if (
        full_name.trim() === '' ||
        date_of_birth.trim() === '' ||
        place_of_birth.trim() === '' ||
        nationality.trim() === '' ||
        current_address.trim() === '' ||
        marital_status.trim() === '' ||
        (marital_status === 'متزوج' && !document.getElementById('number_of_children').value) ||
        work_skills.trim() === '' ||
        applying_for_job.trim() === '' ||
        !agreement
      ) {
        alert('الرجاء تعبئة جميع الحقول المطلوبة والموافقة على الشروط.');
        return false;
      }

      return true;
    }
  </script>
</body>
</html>
