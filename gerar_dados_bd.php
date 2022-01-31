<?php
$cont = 2;

while ($cont < 100) {
  echo "INSERT INTO parametros1 (temperatura, condutividade, ph) VALUES
  ('30', '8', '7'),
  ('20', '5', '6'),
  ('28', '8', '8');<br>";

  $cont = $cont + 2;
}

?>