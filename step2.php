<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Save step 2 data into session
    $_SESSION['step2'] = $_POST;
    header('Location: review.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    
    <!-- <link rel="stylesheet" href="login.css"> [Google Font] -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rouge+Script&family=Varela+Round&display=swap" rel="stylesheet">

     <!-- Compiled and minified CSS [Materialize] -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- CSS -->
    <style>
        html, body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #003366;
            background-image: url('asset/sti-logo\ 4\ \(3\).png');
            background-size: 1200px;
            background-position: center;
            background-repeat: no-repeat; 
            background-position-y: top;
            
        }

        .container{
            display: grid;
            width: 100%;
            height: 100%;
            
        }

        h1{
            color: white;
            text-align:  center;
            font-size: 45px;
        }

        #login{
            background-color: white;
            opacity: 75%;
            border-radius: 35px;
            width: 950px;
            padding: 30px;  
            height: 1200px; 
        }

        form{
            justify-self: center;
            margin-bottom: 30px;
        }

        p{
            margin: 0;
        }

        .row{
            margin-bottom: 0;
        }

        #btn{
            display: flex;
            flex-direction: column;
            font-style: bold;
            align-items: end;
        }
        #backBtn{
            display: flex;
            flex-direction: column;
            font-style: bold;
            align-items: start;
        }

        .row .col.s6{
            width: 100%;
            margin: 0;
            margin-top: 10px;
        }

        .row{
            display: flex;
        }

        h2{
            font-size: 2.5rem;
        }

        h3{
            font-size: 1.5rem;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Systems Technology Institute <br>
            ONLINE REGISTRATION
        </h1>
        <div class="row">
            <form class="col s12" id="login" method="post" action="">
                <h2>Current or Last School Attended</h2>
                <!-- Line 6 -->
                <div class="row" id="line6">
                    <div class="input-field col s4" id="schoolType"><br>
                        <label for="schoolType">School Type</label>
                        <select name="schoolType">
                        <option value=" " disabled selected></option>
                        <option value="Primary">Primary</option>
                        <option value="Elementary">Elementary</option>
                        <option value="Highschool">Highschool</option>
                        <option value="Senior Highschool">Senior Highschool</option>
                        <option value="College">College</option>
                        <option value="Masteral">Masteral</option>
                        <option value="Doctoral">Doctoral</option>
                        </select>
                    </div>
                    <div class="input-field col s4"><br>
                        <input id="nameOfSchool" type="text">
                        <label class="active" for="nameOfSchool">Name Of School</label>
                    </div>
                    <div class="input-field col s4"><br>
                        <input id="prog_track" type="text" required>
                        <label class="active" for="prog_track">Program / Track & Strand / Specialization</label>
                    </div>
                </div>
                <!-- Line 7 -->
                <div class="row" id="line7">
                    <div class="input-field col s3" id="date">
                        <label for="grad">Date of Graduation</label><br>
                        <input type="date" name="grad" required>
                    </div>
                    <div class="input-field col s3" id="schoolYear"><br>
                        <label for="schoolYear">School Year</label>
                        <select name="schoolYear" required>
                            <option value="" disabled selected> </option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2022-2023">2022-2023</option>
                            <option value="2021-2022">2021-2022</option>
                            <option value="2020-2021">2020-2021</option>
                            <option value="2019-2020">2019-2020</option>
                            <option value="2018-2019">2018-2019</option>
                            <option value="2017-2018">2017-2018</option>
                            <option value="2016-2017">2016-2017</option>
                            <option value="2015-2016">2015-2016</option>
                            <option value="2014-2015">2014-2015</option>
                        </select>
                    </div>
                    <div class="input-field col s3" id="yearLevel"><br>
                        <label for="yearLevel">Year Level / Grade:</label>
                        <select name="yearLevel" required>
                            <option value="" disabled selected> </option>
                            <option value="Grade 1">Grade 1</option>
                            <option value="Grade 2">Grade 2</option>
                            <option value="Grade 3">Grade 3</option>
                            <option value="Grade 4">Grade 4</option>
                            <option value="Grade 5">Grade 5</option>
                            <option value="Grade 6">Grade 6</option>
                            <option value="Grade 7">Grade 7</option>
                            <option value="Grade 8">Grade 8</option>
                            <option value="Grade 9">Grade 9</option>
                            <option value="Grade 10">Grade 10</option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                            <option value="Fourth Year Highschool">Fourth Year Highschool</option>
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
                            <option value="Third Year">Third Year</option>
                        </select>
                    </div>
                    <div class="input-field col s3" id="term"><br>
                        <label for="term">Term</label>
                        <select name="term" required>
                            <option value="" disabled selected> </option>
                            <option value="First Term">First Term</option>
                            <option value="Second Term">Second Term</option>
                        </select>    
                    </div>
                </div>
                <!-- Line 8 -->
                <h2>Parents / Guardian's Information</h2>
                <h3>Father's Information</h3>
                    <div class="row" id="line8">
                        <div class="input-field col s4">
                            <input id="fathers_first_name" type="text" required>
                            <label class="active" for="fathers_first_name">First Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="fathers_last_name" type="text" required>
                            <label class="active" for="fathers_last_name">Last Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="fathers_middle_initial" type="text">
                            <label class="active" for="fathers_middle_initial">Middle Initial</label>
                        </div>
                        <div class="input-field col s2">
                            <input id="fathers_suffix" type="text">
                            <label class="active" for="fathers_suffix">Suffix</label>
                        </div>
                    </div>
                    <!-- Line 9 -->
                    <div class="row" id="line9">
                        <div class="input-field col s4">
                            <input id="f_mobNo" type="text" required>
                            <label class="active" for="f_mobNo">Mobile Number</label>
                        </div>
                        <div class="input-field col s5">
                            <input id="fEmail" type="email" required>
                            <label class="active" for="fEmail">Email</label>
                        </div>
                        <div class="input-field col s5">
                            <input id="f_Occupation" type="text">
                            <label class="active" for="f_Occupation">Occupation</label>
                        </div>
                    </div>
                    <!-- Line 10 -->
                     <h3>Mother's Information</h3>
                     <div class="row" id="line10">
                        <div class="input-field col s4">
                            <input id="mothers_first_name" type="text" required>
                            <label class="active" for="mothers_first_name">First Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="mothers_last_name" type="text" required>
                            <label class="active" for="mothers_last_name">Last Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="mothers_middle_initial" type="text">
                            <label class="active" for="mothers_middle_initial">Middle Initial</label>
                        </div>
                        <div class="input-field col s2">
                            <input id="mothers_suffix" type="text">
                            <label class="active" for="mothers_suffix">Suffix</label>
                        </div>
                    </div>
                    <!-- Line 11 -->
                    <div class="row" id="line11">
                        <div class="input-field col s4">
                            <input id="m_mobNo" type="text" required>
                            <label class="active" for="m_mobNo">Mobile Number</label>
                        </div>
                        <div class="input-field col s5">
                            <input id="mEmail" type="email" required>
                            <label class="active" for="mEmail">Email</label>
                        </div>
                        <div class="input-field col s5">
                            <input id="m_Occupation" type="text">
                            <label class="active" for="m_Occupation">Occupation</label>
                        </div>
                    </div>
                    <!-- Line 12 -->
                    <h3>Guardian's Information</h3>
                     <div class="row" id="line12">
                        <div class="input-field col s4">
                            <input id="guardian_first_name" type="text" required>
                            <label class="active" for="guardian_first_name">First Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="guardian_last_name" type="text" required>
                            <label class="active" for="guardian_last_name">Last Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="guardian_middle_initial" type="text">
                            <label class="active" for="guardian_middle_initial">Middle Initial</label>
                        </div>
                        <div class="input-field col s2">
                            <input id="guardian_suffix" type="text">
                            <label class="active" for="guardian_suffix">Suffix</label>
                        </div>
                    </div>
                    <!-- Line 11 -->
                    <div class="row" id="line11">
                        <div class="input-field col s4">
                            <input id="g_mobNo" type="text" required>
                            <label class="active" for="g_mobNo">Mobile Number</label>
                        </div>
                        <div class="input-field col s5">
                            <input id="gEmail" type="email" required>
                            <label class="active" for="gEmail">Email</label>
                        </div>
                        <div class="input-field col s5">
                            <input id="g_Occupation" type="text">
                            <label class="active" for="g_Occupation">Occupation</label>
                        </div>
                    </div>
                    <!-- Line 12 -->
                    <div class="row" id="line11">
                        <div class="input-field col s12" id="backBtn">
                            <button class="btn waves-effect waves-light" onclick="history.back()" style=" background-color: #fff200; color: #272626; font-family: 'Poppins', sans-serif; width: 150px;  border-radius: 15px;">Back 
                            </button>
                        </div>
                        <div class="input-field col s12" id="btn">
                            <button class="btn waves-effect waves-light" type="submit" style=" background-color: #fff200; color: #272626; font-family: 'Poppins', sans-serif; width: 150px;  border-radius: 15px;" >Review 
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
        });
    
        $(document).ready(function() {
        M.updateTextFields();
        });
    </script>
    
</html>

