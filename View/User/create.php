<html>
<form name="user" method="POST" action="http://localhost/selfstudy/self-task/index.php?c=User&m=createuser">
<label for="firstname">FirstName: </label> 
<input type="text" name="firstname" id="firstname">
<label for="lastname">FirstName: </label> 
<input type="text" name="lastname" id="lastname">
<input type="submit" value="Create user">
</html>
<?php
print_r($test);
?>