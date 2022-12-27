<?php



/* @var $this \yii\web\View */
/* @var $team \backend\models\Hodim|null */
?>
<?php foreach ($team->getAttributes()  as $attribute):?>

<?= $attribute?>

<?php endforeach; ?>