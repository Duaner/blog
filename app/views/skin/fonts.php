
<?php $skin = the_skin(); ?>

<?php if($skin && $skin->getGroup('skin.fonts')) : ?>

<?php foreach($skin->getGroup('skin.fonts')->getArray() as $item) { ?>

  <link href='<?= $item->getLink("font")->getUrl() ?>' rel='stylesheet' type='text/css'>

<?php } ?>

<?php else: ?>

<link href='//www.google.com/fonts#UsePlace:use/Collection:Open+Sans:400italic,700,300,800,400' type='text/css'>

<link href='//www.google.com/fonts#UsePlace:use/Collection:PT+Mono' type='text/css'>


<?php endif ?>
