<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Save the current step's data into the session
    $_SESSION['step1'] = $_POST;
    header('Location: step2.php');
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
      <link rel="stylesheet" href="CSS\enroll.css">

</head>
<body>
    <div class="container">
        <h1>Systems Technology Institute <br>
            ONLINE REGISTRATION
        </h1>
        <div class="row">
            <form class="col s12" id="login" method="post" action="">
                <h2>Personal Information</h2>
                <!-- Line 1 -->
                <div class="row" id="line1">
                    <div class="input-field col s4">
                        <input id="first_name" type="text" required>
                        <label class="active" for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="middle_name" type="text">
                        <label class="active" for="middle_name">Middle Name</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="last_name" type="text" required>
                        <label class="active" for="last_name">Last Name</label>
                      </div>
                    <div class="input-field col s2">
                        <input id="suffix" type="text">
                        <label class="active" for="suffix">Suffix</label>
                    </div>
                </div>
                <!-- Line 2 -->
                <div class="row" id="line2">
                    <!-- Gender -->
                    <div class="input-field col s3" id="gender">
                        <label for="gender">Gender:</label><br>
                        <div>
                            <label><br>
                                <input name="gender" type="radio" id="male" value="male">
                                <span>Male</span>
                            </label>
                            <label>
                                <input name="gender" type="radio" id="female" value="female">
                                <span>Female</span>
                          </label>
                        </div>
                    </div>
                    <!-- Birthday -->
                    <div class="input-field col s3">
                        <label for="birthday">Date of Birth:</label><br>
                        <input type="date" name="birthday" required>
                    </div>
                    <div class="input-field col s3" id="civilStat">
                        <label for="civilStat">Civil Status</label><br>
                        <select id="civilStat" required>
                            <option value="" disabled selected></option>
                            <option value="1">Single</option>
                            <option value="2">Married</option>
                        </select>
                    </div>
                    <div class="input-field col s3" id="citizenship">
                        <label class="active" for="citizenship">Citizenship</label><br>
                        <input id="citizenship" type="text" required>
                    </div>
                </div>
                <!-- Line 3 -->
                <div class="row" id="line3">
                    <div class="input-field col s6" id="birth_place"><br>
                        <label class="active" for="birth_place">Birth Place</label>
                        <input id="birth_place" type="text" required>
                    </div>
                    <div class="input-field col s6" id="religion"><br>
                        <label for="religion">Religion:</label>
                        <select name="religion">
                        <option value="" disabled selected> </option>
                        <option value="Roman Catholic">Roman Catholic</option>
                        <option value="Christian">Christian</option>
                        <option value="Islam">Islam</option>
                        <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                        <option value="Buddhist">Buddhist</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <h2>Present Address</h2>
                <!-- Line 4 -->
                <div class="row" id="line4">
                    <div class="input-field col s2">
                        <input id="unitNum" type="text">
                        <label class="active" for="unitNum">Unit # / Floor #</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="street" type="text" required>
                        <label class="active" for="street">Street</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="subd" type="text">
                        <label class="active" for="subd">Subdivision / Village / Bldg.</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="brgy" type="text">
                        <label class="active" for="brgy">Barangay</label>
                    </div>
                </div>
                <div class="row" id="line5">
                    <div class="input-field col s5">
                        <input id="city" type="text" required>
                        <label class="active" for="city">City / Municipality</label>
                    </div>
                    <div class="input-field col s5">
                        <input id="prov" type="text" required>
                        <label class="active" for="prov">Province</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="zip" type="text">
                        <label class="active" for="zip">Zip Code</label>
                    </div>
                </div>
                <h2>Contact Details</h2>
                <!-- Line 5 -->
                <div class="row" id="line5">
                    <div class="input-field col s3">
                        <input id="telNo" type="text">
                        <label class="active" for="telNo">Telephone Number</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="mobNo" type="text" required>
                        <label class="active" for="mobNo">Mobile Number</label>
                    </div>
                    <div class="input-field col s5">
                        <input id="email" type="email" required>
                        <label class="active" for="telNoemail">Email Address</label>
                    </div>
                </div>
                <div class="input-field col s12" id="btn">
                        <button class="btn waves-effect waves-light" type="submit" style=" background-color: #fff200; color: #272626; font-family: 'Poppins', sans-serif; width: 150px;  border-radius: 15px;">Next 
                        </button>
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
