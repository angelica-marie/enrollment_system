<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "webprogtp";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $birthday = $_POST['birthday'];
        $gender = $_POST['gender'];
        $religion = $_POST['religion'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $student_type = $_POST['student-type'];
        $course = $_POST['course'];
        $previousSchool = $_POST['previousSchool'];
    
        echo "Last Name: $lname<br>";
        echo "First Name: $fname<br>";
        echo "Middle Name: $mname<br>";
        echo "Birthday: $birthday<br>";
        echo "Address: $address<br>";
        echo "Phone Number: $pnumber<br>";
        echo "Student Type: $student_type<br>";
        echo "Previous School: $previousSchool<br>";


    
        $sql = "INSERT INTO datatable (lname, fname, mname, birthday, gender, religion, address, email, phone, student_type, course, previousSchool)
                VALUES ('$lname', '$fname', '$mname', '$birthday', '$gender', '$religion', '$address', '$email', '$pnumber', '$student_type', '$course', '$previousSchool')";

        $conn->close();
    }
    
?>