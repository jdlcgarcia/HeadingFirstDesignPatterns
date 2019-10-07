<?php

use SimUDuck\Entity\MallardDuck;
use SimUDuck\Entity\RedheadDuck;

include "entity/Duck.php";
include "entity/MallardDuck.php";
include "entity/RedheadDuck.php";

$mallard = new MallardDuck();
$redhead = new RedheadDuck();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Strategy Pattern</title>
    <meta name="description" content="Strategy Pattern">
    <link rel="stylesheet" href="../css/styles.css?v=1.0">

</head>
<body>
<h1>SimUDuck</h1>
<h2>Mallard Duck</h2>
<p>
    It <?php echo $mallard->display(); ?>, it <?php echo $mallard->quack(); ?>s but also, it <?php echo $mallard->swim(); ?>s and maybe it would <?php echo $mallard->fly(); ?>
</p>
<h2>Redhead Duck</h2>
<p>
    It <?php echo $redhead->display(); ?>, it <?php echo $redhead->quack(); ?>s but also, it <?php echo $redhead->swim(); ?>s and maybe it would <?php echo $redhead->fly(); ?>
</p>

</body>
</html>
