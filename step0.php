<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['step0'] = $_POST;
    header('Location: step1.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STI COLLEGE</title>

    <!-- LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            background-color: #CFCFCF;
            font-family: "Poppins", sans-serif;
            min-width: 600px;
        }

        .heads {
            width: 100%;
            height: 50px;
            background-color: #003366;
            display: flex;
            min-width: 400px;
        }

        .heads .icon {
            width: 50%;
            height: auto;
        }

        .heads .icon-img {
            width: 50%;
            height: auto;
            padding-left: 8%;
        }

        .heads .icon-img  img{
            height: 50px;
        }

        div h2{
            font-size: 2rem;
            color: white;
        }
        
        #onlineApp {
            display: flex;
            align-items: center;
            margin-left: auto; 
            padding-right: 8%
        }

        .hidden {
            padding: 30px;
            box-sizing: border-box;
        }

        form {
            display: grid;
            width: 900px;
            max-width: 1000px;
            height: 100%;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            justify-content: center;
        }

        #btn{
            display: flex;
            flex-direction: column;
            font-style: bold;
            align-items: end;
            margin-right: 20px;
        }
        #btn1{
            display: flex;
            flex-direction: column;
            font-style: bold;
            align-items: end;
            margin-right: 20px;
        }

        .row{
            margin-bottom: 0;
        }
        
        .hidden { 
            display: none; 
            justify-content: center; 
            align-items: center; 
        }

    </style>
</head>
<body>
    <!-- Logo -->
    <div class="heads">
        <div class="icon">
            <div class="icon-img"><img src="./ASSET/sti-logo.png" alt=""></div>
        </div>
        <div id="onlineApp">
            <h2>Online Application</h2>
        </div>
    </div>
    <div class="container">
        <!-- Code from Hanz -->
        <div>
        <div class="grid-container">
        <div class="grid-wrapper">
            <div class="item9"><img src="./ASSET/BSIT.jpg" alt="" style="width: 50%;"><div class="overlay"><h1>Bachelor of Science in Information Technology</h1></div></div></div>
            <div class="grid-items">
            <label for="studentType">Select Student Type:</label>
            <button onclick="showForm('shsForm')">Senior Highschool</button>
            <button onclick="showForm('collegeForm')">College</button>
        </div>
        </div>
        </div>

        <!-- Hidden Forms -->
        <!-- SHS Form -->
        <div class="hidden" id="shsForm">
            <form id="login" method="post" action="">
                <!-- Line 01 --> 
                <div class="row" id="line01" style="margin-top: 10px;">
                    <div class="row" id="line01" style="width: 826px; margin-top: 10px; padding-left: 10px; align-item: center;">
                    <div class="input-field col s12">
                        <label class="active" for="prefCamp">Preferred STI Campus:</label>
                        <select id="prefCamp" required>
                            <option value="" disabled selected></option>
                            <option value="Batangas">Batangas</option>
                            <option value="Calamba">Calamba</option>
                            <option value="Carmona">Carmona</option>
                            <option value="Dasmariñas">Dasmariñas</option>
                            <option value="Lipa">Lipa</option>
                            <option value="Lucena">Lucena</option>
                            <option value="San Pablo">San Pablo</option>
                            <option value="Sta. Cruz">Sta. Cruz</option>
                            <option value="Sta. Rosa">Sta. Rosa</option>
                            <option value="Tagaytay">Tagaytay</option>
                            <option value="Tanauan">Tanauan</option>
                        </select>
                    </div>
                </div>  
                    <div class="input-field col s12" style="width: 826px; ">
                        <label class="active" for="strand">Track / Strand:</label>
                        <select id="strand" required>
                            <option value="" disabled selected></option>
                            <option value="Science, Technology, Engineering, and Mathematics (STEM)">Science, Technology, Engineering, and Mathematics (STEM)</option>
                            <option value="Humanities and Social Sciences (HUMSS)">Humanities and Social Sciences (HUMSS)</option>
                            <option value="General Academic">General Academic</option>
                            <option value="Accountancy, Business, and Management (ABM)">Accountancy, Business, and Management (ABM)</option>
                            <option value="Computer and Communications Technology">Computer and Communications Technology</option>
                            <option value="Digital Arts">Digital Arts</option>
                            <option value="IT in Mobile App and Web Development">IT in Mobile App and Web Development</option>
                            <option value="Tourism Operations">Tourism Operations</option>
                            <option value="Restaurant and Café Operations">Restaurant and Café Operations</option>
                            <option value="Culinary Arts">Culinary Arts</option>
                        </select>
                    </div>
                </div>
                <!-- Line 03 -->
                <div class="row" id="line03" style="width: 826px;">
                    <div class="input-field col s6">
                        <label class="active" for="adType">Admit Type:</label>
                        <select id="prefCamp" required>
                            <option value="" disabled selected></option>
                            <option value="New Student">New Student</option>
                            <option value="Transferee">Transferee</option>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <label class="active" for="schoolYear">School Year:</label>
                        <select id="schoolYear" required>
                            <option value="" disabled selected></option>
                            <option value="2025-2026">2025-2026</option>
                            <option value="2024-2025">2024-2025</option>
                        </select>
                    </div>
                </div>
                <!-- Line 04 -->
                <div class="row" id="line04" style="width: 826px;">
                    <div class="input-field col s6">
                        <label class="active" for="yearLvl">Year Level:</label>
                        <select id="yearLvl" required>
                            <option value="" disabled selected></option>
                            <option value="Grade 11">Grade 11</option>
                            <option value="Grade 12">Grade 12</option>
                        </select>
                    </div>
                    <div class="input-field col s6" >
                        <label class="active" for="term">Term:</label>
                        <select id="term" required>
                            <option value="" disabled selected></option>
                            <option value="First Term">First Term</option>
                            <option value="Second Term">Second Term</option>
                        </select>
                    </div>
                </div>
                <!-- Button Next -->
                <div class="row" id="btn">
                    <div class="input-field col s12" >
                        <button class="btn waves-effect waves-light" type="submit" style=" background-color: #fff200; color: #272626; font-family: 'Poppins', sans-serif; width: 150px;  border-radius: 15px;">Next 
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- College / Transferee Form -->
        <div class="hidden" id="collegeForm">
            <form class="col s12" id="login2" method="post" action="" >
                <div class="row" id="line05" style="width: 826px; margin-top: 10px; padding-left: 20px; align-item: center;">
                    <div class="input-field col s12">
                        <label class="active" for="prefCamp">Preferred STI Campus:</label>
                        <select id="prefCamp" required>
                            <option value="" disabled selected></option>
                            <option value="Batangas">Batangas</option>
                            <option value="Calamba">Calamba</option>
                            <option value="Carmona">Carmona</option>
                            <option value="Dasmariñas">Dasmariñas</option>
                            <option value="Lipa">Lipa</option>
                            <option value="Lucena">Lucena</option>
                            <option value="San Pablo">San Pablo</option>
                            <option value="Sta. Cruz">Sta. Cruz</option>
                            <option value="Sta. Rosa">Sta. Rosa</option>
                            <option value="Tagaytay">Tagaytay</option>
                            <option value="Tanauan">Tanauan</option>
                        </select>
                    </div>
                </div>  
                <!-- Course -->
                <div class="row" id="line06" style="width: 826px; padding-left: 20px;">
                    <div class="input-field col s12" style="margin: 0;">
                        <label class="active" for="course">Course:</label>
                        <select id="course" required>
                            <option value="" disabled selected></option>
                            <option value="Bachelor of Science in Information Technology (BSIT)">Bachelor of Science in Information Technology (BSIT)</option>
                            <option value="BS in Computer Science (BSCS)">BS in Computer Science (BSCS)</option>
                            <option value="BS in Information Systems (BSIS)">BS in Information Systems (BSIS)</option>
                            <option value="2-yr. Information Technology (IT)">2-yr. Information Technology (IT)</option>
                            <option value="2-yr. Associate in Computer Technology (ACT)">2-yr. Associate in Computer Technology (ACT)</option>
                            <option value="BS in Business Administration (BSBA)" >BS in Business Administration (BSBA)</option>
                            <option value="BS in Accountancy (BSA)" >BS in Accountancy (BSA)</option>
                            <option value="BS in Accounting Information System (BSAIS)" >BS in Accounting Information System (BSAIS)</option>
                            <option value="BS in Management Accounting (BSMA)" >BS in Management Accounting (BSMA)</option>
                            <option value="BS in Retail Technology and Consumer Science (BSRTCS)" >	BS in Retail Technology and Consumer Science (BSRTCS)</option>
                            <option value="2-yr. Associate in Retail Technology (ART)" >2-yr. Associate in Retail Technology (ART)</option>
                            <option value="BS in Tourism Management (BSTM)">BS in Tourism Management (BSTM)</option>
                            <option value="	BS in Computer Engineering (BSCpE)">BS in Computer Engineering (BSCpE)</option>
                            <option value="BA in Communication (BACOMM)">BA in Communication (BACOMM)</option>
                            <option value="Bachelor of Multimedia Arts (BMMA)">Bachelor of Multimedia Arts (BMMA)</option>
                            <option value="Bachelor of Arts in Psychology">Bachelor of Arts in Psychology</option>
                        </select>
                    </div>
                </div>  
                <div class="row" id="line07" style="width: 826px; margin: 0; padding-left: 10px; padding-right: 10px;">
                <div class="input-field col s6">
                        <label class="active" for="adType">Admit Type:</label>
                        <select id="prefCamp" required>
                            <option value="" disabled selected></option>
                            <option value="New Student">New Student</option>
                            <option value="Transferee">Transferee</option>
                        </select>
                    </div>
                    <div class="input-field col s6">
                        <label class="active" for="schoolYear">School Year:</label>
                        <select id="schoolYear" required>
                            <option value="" disabled selected></option>
                            <option value="2025-2026">2025-2026</option>
                            <option value="2024-2025">2024-2025</option>
                        </select>
                    </div>
                </div>    
                <div class="row" id="line08" style="width: 826px; margin: 0; padding-left: 10px; padding-right: 10px;">
                <div class="input-field col s6">
                        <label class="active" for="yearLvl">Year Level:</label>
                        <select id="yearLvl" required>
                            <option value="" disabled selected></option>
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
                            <option value="Third Year">Third Year</option>
                        </select>
                    </div>
                    <div class="input-field col s6" >
                        <label class="active" for="term">Term:</label>
                        <select id="term" required>
                            <option value="" disabled selected></option>
                            <option value="First Term">First Term</option>
                            <option value="Second Term">Second Term</option>
                        </select>
                    </div>
                </div>  
                <div class="row" id="line09" >
                    <div class="input-field col s12" id="btn1">
                        <button class="btn waves-effect waves-light" type="submit" style=" background-color: #fff200; color: #272626; font-family: 'Poppins', sans-serif; width: 150px;  border-radius: 15px;">Next 
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>
    <script>
    function showForm(formId) {
        document.querySelectorAll('.hidden').forEach(form => form.style.display = 'none');
        const targetForm = document.getElementById(formId);
        if (targetForm) {
            targetForm.style.display = 'flex';
        }
    }
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    M.FormSelect.init(elems);
    });

    $(document).ready(function() {
    M.updateTextFields();
    });
    </script>
</body>
</html>