
<html>
 <body>
   <?php
  $fieldValue = htmlentities($_POST['myfield']);
?>
<form action="myform.php" method="post">
  <label for="myfield">Your textfield:</label>
  <input type="text" name="myfield" id="myfield" value="<?php echo $fieldValue; ?>" />
</form>
</body>
</html?
