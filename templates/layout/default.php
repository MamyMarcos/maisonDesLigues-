<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('favicon.ico', '/img/mdlLogo.png', ['type' => 'icon']); ?>

        <?= $this->Html->css('fontawesome-all.min.css') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('adminlte.min.css') ?>
        <?= $this->Html->css('custom.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <?= $this->element('navbar') ?>
            <?= $this->element('sidebar') ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div>
                </section>
            </div>


            <footer class="main-footer">
                <strong>Copyright &copy; 2021</strong>
                Toutes licenses réservées.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0
                </div>
            </footer>
            <?= $this->Html->script('jquery.min.js') ?>
            <?= $this->Html->script('bootstrap.bundle.js') ?>
            <?= $this->Html->script('adminlte.min.js') ?>
        </div>
    </body>
</html>
