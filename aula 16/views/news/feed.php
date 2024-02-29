<h1>
    Noticias
</h1>

<div class="row">
    <div class="col-12">
        <ul>
            <?php foreach($news as $new):?>
                <li>
                    <p>
                        <b><?= $new['id']?></b>
                        -
                        <?= $new['titulo']?>
                        <br>
                        <small class="text-secondary"><?= $new['body']?></small>
                    </p>
                </li>
            <?php endforeach?>
        </ul>
    </div>
</div>