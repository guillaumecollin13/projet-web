<div>
    <div class="blocjeu colorWhite">
        <h2><span>votre discussion</span></h2>
        <?php foreach ($messages as $message) : ?>
            <?= $message->mesageText ?>
            <p> <?= $message->mesageText ?></p>
            <p><?= $message->mesageText ?></p>
        <?php endforeach ?>
    </div>
    <div class="blocjeu colorWhite">
        <form method="post" action="">
            <input type="message" id="message" name="message" value="">
            <button type="submit" name="btnEnvoi" class="">envoyer</button>
    </div>
    </form>
</div>