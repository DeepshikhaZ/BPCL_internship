<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>BPCL Complaint form</h1>
    <p>Please fill in this form to register your complaint.</p>
    <hr>
	<b>Choose your location of complaint <b><select name="location">
    <option value="mumbai">Mumbai Refinery</option>
    <option value="kochi">Kochi Refinery</option>
  </select><br><br>
  
  
	 <b>Choose area </b><select name="area">
    <option value="mumbai">Colony</option>
    <option value="kochi">Refinery</option>
  </select><br><br>
  
  
	<b>Select complaint category</b><select name="complaint">
    <option value="painting">painting</option>
    <option value="plumbing">plumbing</option>
    <option value="carpentry">carpentry</option>
    <option value="civil">civil</option>
  </select><br><br>

    <!--<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>-->

    <label for="psw"><b>Enter your complaint details here:</b></label><br><br>
    <!--<input type="text" placeholder="Enter your complaint here" name="psw" >-->
     <textarea name="message" rows="10" cols="50">Description of complaint.</textarea>
    <br><br>
    <hr>
   <!--<p><a href="#">go back to Home page</a>.</p>-->

    <button type="submit" class="registerbtn">Submit Complaint</button>
	<br><br>
	<p><a href="login.php">go back to Home page</a>.</p>
  </div>
  
  <div class="container signin">
  <!--<p>Already have an account? <a href="#">Sign in</a>.</p>-->
  </div>
</form>

</body>
</html>
