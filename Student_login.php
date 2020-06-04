<html>
<head>
    Student Log In Page
</head>
<body>
    <h1> Student Sign in </h1>
<form action = "POST.php" method="post">        <!-- It similiar like get method only difference is it will not show the input in URL  so POST is use to hide password or to hide input-->
<b> Name: </b>  <input type = "text" name = "name"> <!-- It will pass the typed text to name variable of POST.php -->
<b> Password: </b> <input type = "password" name = "password">  <!-- It will mask the password and submit it to password variable of POST.php -->
<br>
<input type="submit">

</form>

</html>