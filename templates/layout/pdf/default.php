<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->css('bootstrap.min.css', ['fullBase' => true]) ?>
        <?= $this->Html->css('custom.css') ?>
    </head>
    <body>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
    </body>
</html>
