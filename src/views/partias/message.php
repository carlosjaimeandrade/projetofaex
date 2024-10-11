<?php if ($_messages){ ?>
        <div class="container-message">  
            <?php foreach ($_messages as $message ){ ?>
                <div class=" type-<?= $message['type']?>">
                    <span><?= $message['message']?></span>
                </div>
            <?php } ?>
        </div>
<?php } ?>

<script src="/public/js/message.js"></script>