
<?php require_once('welcome.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Form</title>
</head>
<body>
    <div class="form-area">
        <div class="form-title">
            <h1>Sign Up Form</h1>
        </div>
        <div class="form-section">
            <form action=" " method="POST" id="survey-form" enctype="multipart/form-data">
                    <div>
                        <p>First Name:</p>
                        <input type="text" name="first_name" class="form-input" >
                    </div>

                    <div>
                        <p>Last Name:</p>
                        <input type="text" name="last_name" class="form-input" >
                    </div>

                    <div>
                        <p>Email:</p>
                        <input type="text" name="email" class="form-input" >
                    </div>

                    <div>
                        <p>Date Of Birth:</p>
                        <input type="date" name="date_of_birth" class="form-input" >
                    </div>

                    <div>
                         <p>Favourite Color:</p>
                         <input type="color"  name="fav_color" class="form-input" >
                    </div>                     
                    <div>
                        <p>Gender:<p>
                        <input type="checkbox" name="gender" value="Male">Male            
                        <input type="checkbox" name="gender" value="Female">Female
                    </div>
                     
                    <div>
                     <p>Department:</p>
                     <select name="department" class="form-input">
                         <option value=""></option>
                         <option value="Human Resources">Human Resources</option>
                         <option value="Information Technology">Information Technology</option>
                         <option value="Auditing">Auditing</option>
                     </select>
                    </div>
                     
                    <div>
                        <p>Password:</p>
                        <input type="text" name="password" class="form-input">
                    </div>
                    <div class="btn">
                        <button id="submit" type="submit" name="submit" class="form-btn">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>