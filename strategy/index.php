<?php

use SimUDuck\Entity\MallardDuck;
use SimUDuck\Entity\ModelDuck;
use SimUDuck\Entity\RedheadDuck;
use SimUDuck\Entity\RubberDuck;

include "autoloader.php";

$mallard = new MallardDuck();
$redhead = new RedheadDuck();
$rubber = new RubberDuck();
$model = new ModelDuck();
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
    <?php echo $mallard->display(); ?>, You can hear me say "<?php echo $mallard->performQuack(); ?>" but also, <?php echo $mallard->performFly(); ?>. <?php echo $mallard->swim(); ?>
</p>
<h2>Redhead Duck</h2>
<p>
    <?php echo $redhead->display(); ?>, You can hear me say "<?php echo $redhead->performQuack(); ?>" but also, <?php echo $redhead->performFly(); ?>. <?php echo $redhead->swim(); ?>
</p>
<h2>Rubber Duck</h2>
<p>
    <?php echo $rubber->display(); ?>, You can hear me say "<?php echo $rubber->performQuack(); ?>" but also, <?php echo $rubber->performFly(); ?>. <?php echo $rubber->swim(); ?>
</p>
<h2>Model Duck</h2>
<p>
    <?php echo $model->display(); ?>, You can hear me say "<?php echo $model->performQuack(); ?>" but also, <?php echo $model->performFly(); ?>. <?php echo $model->swim(); ?>
</p>
</body>
</html>
