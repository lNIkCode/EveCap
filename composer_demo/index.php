
<table border="1">
  <tr>
    <th>DNI</th>
    <th>NOMBRE</th>
    <th>Ap Paterno</th>
    <th>Ap Materno</th>
    <th>Car. Verificacion</th>
    <th>Car. Ver Anterior</th>
  </tr>

<?php
require 'vendor/autoload.php';

$reniecDni = new Tecactus\Reniec\DNI('wKXAzfuw4oJWOmkky6c4Ga9ISFmHT9pyhfTYCH7K');

try {
  $data = $reniecDni -> get('18009714');
echo '<tr>';
 foreach ($data as $value) {
  echo  '<td>'.$value.'</td>';

  }
  echo '</tr>';
print_r($data);

} catch (Exception $e) {
  print_r($e->getMessage());
}

echo '</table>';
