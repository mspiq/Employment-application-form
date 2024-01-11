<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // اتصل بقاعدة البيانات
  $conn = new mysqli("localhost", "root", "password", "dbs");
  if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
  }


    // تعيين ترميز الاتصال إلى اللغة العربية
  if (!$conn->set_charset("utf8mb4")) {
    die("خطأ في تعيين ترميز الاتصال: " . $conn->error);
  }

  // تحقق من وجود البيانات وتحقق من أن الحقول مملوءة بشكل صحيح
  if (
    isset($_POST["full_name"]) &&
    isset($_POST["title"]) &&
    isset($_POST["date_of_birth"]) &&
    isset($_POST["place_of_birth"]) &&
    isset($_POST["nationality"]) &&
    isset($_POST["current_address"]) &&
    isset($_POST["marital_status"]) &&
    isset($_POST["number_of_children"]) &&
    isset($_POST["gender"]) &&
    isset($_POST["educational_background"]) &&
    isset($_POST["graduation_year"]) &&
    isset($_POST["educational_certificates"]) &&
    isset($_POST["experience_certificates"]) &&
    isset($_POST["previous_job"]) &&
    isset($_POST["job_type"]) &&
    isset($_POST["national_id"]) &&
    isset($_POST["work_skills"]) &&
    isset($_POST["applying_for_job"]) &&
    isset($_POST["phone_number"]) &&
    isset($_POST["agreement"]) &&
    isset($_POST["college"]) && // اضف حقل الكلية
    isset($_POST["university"]) && // اضف حقل الجامعة
    isset($_POST["section"]) && // اضف حقل القسم
	isset($_POST["department"]) && // اضف حقل القسم
    isset($_POST["institute"]) // اضف حقل المعهد
  ) {
    // معالجة بيانات الإرسال
    $full_name = $_POST["full_name"];
    $title = $_POST["title"];
    $date_of_birth = $_POST["date_of_birth"];
    $place_of_birth = $_POST["place_of_birth"];
    $nationality = $_POST["nationality"];
    $current_address = $_POST["current_address"];
    $marital_status = $_POST["marital_status"];
    $number_of_children = $_POST["number_of_children"];
    $gender = $_POST["gender"];
    $educational_background = $_POST["educational_background"];
    $graduation_year = $_POST["graduation_year"];
    $educational_certificates = $_POST["educational_certificates"];
    $experience_certificates = $_POST["experience_certificates"];
    $previous_job = $_POST["previous_job"];
    $job_type = $_POST["job_type"];
    $national_id = $_POST["national_id"];
    $work_skills = $_POST["work_skills"];
    $applying_for_job = $_POST["applying_for_job"];
    $phone_number = $_POST["phone_number"];
    $college = $_POST["college"]; // قم بالتقاط القيمة المرسلة لحقل الكلية
    $university = $_POST["university"]; // قم بالتقاط القيمة المرسلة لحقل الجامعة
    $section = $_POST["section"]; // قم بالتقاط القيمة المرسلة لحقل القسم
	$department = $_POST["department"]; // قم بالتقاط القيمة المرسلة لحقل القسم
	$institute = $_POST["institute"]; // قم بالتقاط القيمة المرسلة لحقل المعهد

    // تنظيف البيانات
    $full_name = mysqli_real_escape_string($conn, $full_name);
    $title = mysqli_real_escape_string($conn, $title);
    $date_of_birth = mysqli_real_escape_string($conn, $date_of_birth);
    $place_of_birth = mysqli_real_escape_string($conn, $place_of_birth);
    $nationality = mysqli_real_escape_string($conn, $nationality);
    $current_address = mysqli_real_escape_string($conn, $current_address);
    $marital_status = mysqli_real_escape_string($conn, $marital_status);
    $number_of_children = mysqli_real_escape_string($conn, $number_of_children);
    $gender = mysqli_real_escape_string($conn, $gender);
    $educational_background = mysqli_real_escape_string($conn, $educational_background);
    $graduation_year = mysqli_real_escape_string($conn, $graduation_year);
    $educational_certificates = mysqli_real_escape_string($conn, $educational_certificates);
    $experience_certificates = mysqli_real_escape_string($conn, $experience_certificates);
    $previous_job = mysqli_real_escape_string($conn, $previous_job);
    $job_type = mysqli_real_escape_string($conn, $job_type);
    $national_id = mysqli_real_escape_string($conn, $national_id);
    $work_skills = mysqli_real_escape_string($conn, $work_skills);
    $applying_for_job = mysqli_real_escape_string($conn, $applying_for_job);
    $phone_number = mysqli_real_escape_string($conn, $phone_number);
    $college = mysqli_real_escape_string($conn, $college); // تنظيف القيمة المرسلة لحقل الكلية
    $university = mysqli_real_escape_string($conn, $university); // تنظيف القيمة المرسلة لحقل الجامعة
    $section = mysqli_real_escape_string($conn, $section); // تنظيف القيمة المرسلة لحقل القسم
	$department = mysqli_real_escape_string($conn, $department); // تنظيف القيمة المرسلة لحقل القسم
	$institute = mysqli_real_escape_string($conn, $institute); // تنظيف القيمة المرسلة لحقل المعهد

    // أضف البيانات إلى قاعدة البيانات
    $sql = "INSERT INTO applicants (full_name, title, date_of_birth, place_of_birth, nationality, current_address, marital_status, number_of_children, gender, educational_background, graduation_year, educational_certificates, experience_certificates, previous_job, job_type, national_id, work_skills, applying_for_job, phone_number, college, university, section, department, institute)
    VALUES ('$full_name', '$title', '$date_of_birth', '$place_of_birth', '$nationality', '$current_address', '$marital_status', '$number_of_children', '$gender', '$educational_background', '$graduation_year', '$educational_certificates', '$experience_certificates', '$previous_job', '$job_type', '$national_id', '$work_skills', '$applying_for_job', '$phone_number', '$college', '$university', '$section', '$department', '$institute')";


  if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;

            // التصميم بوساطة محمد صلاح 
            // https://github.com/mspiq
            header("Location: confirmation.php?id=$last_id");
            exit();
        } else {
            echo "حدث خطأ أثناء إضافة البيانات: " . $conn->error;
        }

        $conn->close();
    }
}
?>
