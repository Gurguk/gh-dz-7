<?php

use yii\helpers\Url;
?>
<div class="site-index">
    <h2>Universities</h2>
    <ul>
        <li><a href="<?php echo Url::to(['universities/university']);?>">Університети</li>
        <li><a href="<?php echo Url::to(['universities/department']);?>">Факультети</li>
        <li><a href="<?php echo Url::to(['universities/discipline']);?>">Дисципліни</li>
        <li><a href="<?php echo Url::to(['universities/students']);?>">Студенти</li>
    </ul>
</div>
