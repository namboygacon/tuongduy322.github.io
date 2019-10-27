<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <?= $this->Html->css('bootstrap.min.css')?>
    <link href="<?= $this->Url->css('cake.css')?>" rel="stylesheet">
    <script src="<?= $this->Url->script('plugins.js')?>"></script>
</head>
<body>
    <?= $this->element("header") ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->element("footer") ?>
</body>
</html>
