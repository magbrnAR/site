<?php
  $fieldValue = htmlentities($_POST['myfield']);
?>
<html?
 <body>
<form action="myform.php" method="post">
  <label for="myfield">Your textfield:</label>
  <input type="text" name="myfield" id="myfield" value="<?php echo $fieldValue; ?>" />
</form>
</body>
</html?
