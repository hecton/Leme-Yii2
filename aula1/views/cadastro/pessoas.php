<?php
use yii\bootstrap5\LinkPager;
?>
<div class="card">
    <div class="card-head">
        <h1>
            Pessoa
        </h1>
    </div>
    <div class="card-body">
        <ul>
            <?php foreach($pessoas as $pessoa): ?>
                <li>
                    <?= $pessoa->nome.' '.$pessoa->email.' '.$pessoa->idade ?><br/>
                    <small><?= $pessoa->idade ?></small>
                </li>
            <?php endforeach ?>
        </ul>

        <?= LinkPager::widget([ 'pagination' => $pagination ]); ?>
    </div>
</div>