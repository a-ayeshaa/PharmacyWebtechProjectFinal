<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1.0>, initial-scale=1.0">
    <script src="JS/JSValid.js"></script>
    <link rel="stylesheet" href="CSS/Registration.css">
    <title>Customer Registration Form</title>

</head>

<body class="a">

    <form name="Registration" action="../controller/FormSubmission.php" method="POST" onsubmit="return isValidRegistration(this);">

    <h3><div class="t">Customer Registration Form</div></h3>
    <div class="reg">
     <fieldset class="field">
         <legend id="head"><b>Basic Information:</b></legend>
         <h5>
        <label for="firstName" id="lab">First Name:</label>
        <input type="text" name="firstName" class="in">
        <br><br>
        <label for="lastName"id="lab">Last Name:</label>
        <input type="text" name="lastName"  class="in">
        <br><br>
        <label for="gender"id="lab">Gender:</label>
        <input type="radio" name="gender" class="rb" value="Male"><label id="head">Male</label>
            <input type="radio" name="gender" class="rb" value="Female"><label id="head">Female</label>
            <input type="radio" name="gender" class="rb" value="Others"><label id="head">Others</label>
        <br><br>
         <label for="dateOfBirth"id="lab">Date of Birth:</label>
         <input type="date" name="dateOfBirth" Placeholder=""  class="in">
         <br><br>
         <label for="religion"id="lab">Religion:</label>
         <select name="religion" class="in">
             <option>Islam</option>
             <option>Hindu</option>
             <option>Buddhism</option>
             <option>Others</option>
         </select> 
         </h5>

         </fieldset>
         <br>
         <fieldset class="field">
             <legend id="head"><b>Contact Information : </b></legend>
             <h5>
             <br>
             <label for="presentAddress" id="lab"id="lab"><b>Present Address:</b><br></label>
             <textarea name="presentAddress"  class="in"></textarea>
             <br><br>
             <label for="permanentAddress" id="lab"id="lab"><b>Permanent Address:</b></label>
             <br>
             <textarea name= "permanentAddress"  class="in"></textarea>
             <br><br>
             <label for="Phone"id="lab"id="lab">Phone:</label>
             <input type="tel" name="Phone"  Placeholder="" class="in">
             <br><br>
             <label for="email"id="lab"id="lab">Email: </label>
             <input type="email" name="email"  Placeholder="" class="in">
             </h5>
         
        </fieldset>  

         <br>
         <fieldset class="field">
            <legend id="head"><b>Account Information:<b></legend>
            <h5> 
            </textarea>
            <label for="username" id="lab"> Username : </label>
            <input type="text" name="username"  Placeholder="" class="in">
             <br><br>
             <label for="password" id="lab">Password : </label>
            <input type="password" name="password"  Placeholder="" class="in">
             </h5>
        </fieldset>

         <br>
         <fieldset class="field">
            <legend id="head"><b>Recovery Information:<b></legend>
            <h5> 
            </textarea>
            <label for="recoveryEmail"id="lab">Recovery Email: </label>
            <input type="email" name="recoveryEmail"  Placeholder="" class="in">
             <br><br>
             <label for="color"id="lab"><b>Favorite Color : </b></label>
             <input type="text" name="color"  Placeholder="" class="in">
             </h5>
        </fieldset>

        <br>
        <input type="submit" value="Register" class="submit">
        <br>     
    </form> 
    <div class="footer">  
    <p id="message"></p>
    <br>
    Already registered? <a href="LoginForm.php" class="link"> Click here </a> for login.
    </div>
</div>
</body>
</html>