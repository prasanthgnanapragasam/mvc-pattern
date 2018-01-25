<html>
<head>
<script src="/selfstudy/self-task/Asserts/js/lib/jquery.min.js"></script>
<script src="/selfstudy/self-task/Asserts/js/lib/jquery.validate.min.js"></script>
<script src="/selfstudy/self-task/Asserts/js/user.js"></script>
</head>
<form name="userreg" id="userreg" method="POST" action="http://localhost/selfstudy/self-task/index.php?c=User&m=createuser">
<label for="firstname">FirstName: </label> 
<input type="text" name="firstname" id="firstname">
</br></br>
<label for="lastname">FirstName: </label> 
<input type="text" name="lastname" id="lastname">
</br></br>
<label for="email">Email: </label> 
<input type="text" name="email" id="email">
</br></br>
<label for="password">FirstName: </label> 
<input type="password" name="password" id="password">
</br></br>
<input type="submit" id="userform" value="Create user">
</html>
<?php
print_r($test);
?>