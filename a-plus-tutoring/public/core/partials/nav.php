        <!-- USER DASHBOARD VIEW CONTAINER HEADER -->
        <header class="header-user-dashboard-view-container">
            <p>Welcome, <span><?php echo $user->getFirstName(); ?></span>!</p>
            <nav class="nav-user-dashboard-view-container">
                <ul class="nav-user-dashboard-view-container-list">
                    <li class="nav-user-dashboard-view-container-list-item <?php echo $base === 'dashboard' ? 'active' : ''; ?>">
                        <a class="link link-icon" href="/dashboard">
                            <ion-icon src="<?php echo ICONS_PATH . '/grid.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <?php if ($user->getRole() === 'tutor') { ?>
                    <li class="nav-user-dashboard-view-container-list-item <?php echo $base === 'reports' ? 'active' : ''; ?>">
                        <a class="link link-icon" href="/reports">
                            <ion-icon src="<?php echo ICONS_PATH . '/book.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <?php } ?>
                    <li class="nav-user-dashboard-view-container-list-item <?php echo $base === 'sessions' ? 'active' : ''; ?>">
                        <a class="link link-icon" href="/sessions">
                            <ion-icon src="<?php echo ICONS_PATH . '/calendar.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-user-dashboard-view-container-list-item <?php echo $base === 'profile' ? 'active' : ''; ?>">
                        <a class="link link-icon" href="/profile/<?php echo $user->getID(); ?>">
                            <ion-icon src="<?php echo ICONS_PATH . '/user.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-user-dashboard-view-container-list-item">
                        <button class="btn btn-icon btn-logout-modal-toggle">
                            <ion-icon src="<?php echo ICONS_PATH . '/log-out.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
        </header>
