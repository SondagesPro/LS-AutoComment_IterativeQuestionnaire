<!-- RESULT LIST -->
<?php if(count($aResult['success'])){ ?>
    <div class=''><strong class="label label-success">Success</strong><ul class="">
    <?php foreach($aResult['success'] as $string) { ?>
        <li><?php echo $string ?></li>
    <?php } ?>
    </ul></div>
<?php } ?>
<?php if(count($aResult['warning'])){ ?>
    <div class=''><strong class="label label-warning">Warning</strong><ul>
    <?php foreach($aResult['warning'] as $string) { ?>
        <li><?php echo $string ?></li>
    <?php } ?>
    </ul></div>
<?php } ?>
<?php if(count($aResult['error'])){ ?>
    <div class=''><strong class="label label-important">Error</strong><ul>
    <?php foreach($aResult['error'] as $string) { ?>
        <li><?php echo $string ?></li>
    <?php } ?>
    </ul></div>
<?php } ?>
