<?php foreach ($allusers as $alluser) : ?>
        <div >
            <div>
                <h3><a href="conversation?UserID=<?= $alluser->userId ?>" class="link colorWhite"><?= $alluser->userPseudo ?></a></h3>
            </div>
    <?php endforeach ?>