<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'dashboard']); ?>" class="brand-link">
        <?= $this->Html->image('/img/mdlLogo.png', ['alt' => 'MDL', 'class' => 'brand-image img-circle elevation-3']); ?>
        <span class="brand-text font-weight-light">Maison des Ligues</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-header">GESTION</li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Championnats', 'action' => 'index']); ?>" class="nav-link">
                        <i class="nav-icon fas fa-award"></i>
                        <p>
                            Championnats
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'index']); ?>" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Catégories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Divisions', 'action' => 'index']); ?>" class="nav-link">
                        <i class="nav-icon fab fa-buffer"></i>
                        <p>
                            Divisions
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'TypeChampionnats', 'action' => 'index']); ?>" class="nav-link">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>
                            Type de championnats
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Clubs', 'action' => 'index']); ?>" class="nav-link">
                        <i class="fab fa-cc-diners-club"></i>
                        <p>
                            Clubs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= $this->Url->build(['controller' => 'Equipes', 'action' => 'index']); ?>" class="nav-link">
                        <i class="fas fa-user-friends"></i>
                        <p>
                            Les équipes
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>