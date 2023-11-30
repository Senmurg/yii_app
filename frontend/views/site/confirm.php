<!DOCTYPE html>
<html>
<body>
<div class="text">
    Hello World?
</div>
</body>

<?php
use yii\helpers\Html;

echo Html::beginForm(['confirm'], 'post');
echo Html::submitButton('Да', ['name' => 'answer', 'value' => 'yes']);
echo Html::submitButton('Нет', ['name' => 'answer', 'value' => 'no']);
echo Html::endForm();
?>
</html>
