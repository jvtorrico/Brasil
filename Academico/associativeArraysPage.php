<?php

require_once './shared/header.php';
?>
<?php

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
//ou desta fomra
$age['Maria'] ='20';

//para percorrer um array associativo

foreach($age as $key => $value)
{
    echo('<a> A  idade de '.$key. ' é : '.$value. '<p>');
    
}

$dados= array('email' => 'a@a', 'senha' => 'asasas')




?>





<?php
require_once './shared/footer.php';
?> 