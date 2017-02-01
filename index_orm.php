<?php 
require_once 'vendor/j4mie/idiorm/idiorm.php';
ORM::configure('mysql:host=localhost;dbname=mon_armoire');
ORM::configure('username','root');
ORM::configure('password','root');
?>

<!-- afficher id des chaussette -->
<?php 
$tab = ORM::for_table('mes_chaussettes')->find_many(); 
foreach ($tab as $value) {
	echo $value['id']."</br>";
}
?>

<!-- afficher id des chaussette rouge -->
<?php 

$rouge = ORM::for_table('mes_chaussettes')->where('couleur','rouge')->find_many();
foreach ($rouge as $value) {
	echo $value['id']."</br>";
}

 ?>
