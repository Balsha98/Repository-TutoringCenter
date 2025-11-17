            <!-- USER DASHBOARD OVERVIEW CONTROLS -->
            <div class="div-user-dashboard-view-overview-controls">
                <p>What would you like to <span>view</span> today?</p>
                <nav class="nav-user-dashboard-view-overview-controls">
                    <ul class="nav-user-dashboard-view-overview-controls-list">
                        <li class="nav-user-dashboard-view-overview-controls-list-item">
                            <a class="link link-primary" href="/reports">
                                <span>Reports</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                        <?php if ($user->getRole() === 'tutor') { ?>
                        <li class="nav-user-dashboard-view-overview-controls-list-item">
                            <a class="link link-primary" href="/sessions">
                                <span>Sessions</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-user-dashboard-view-overview-controls-list-item">
                            <a class="link link-primary" href="/profile/<?php echo $user->getID(); ?>">
                                <span>Profile</span>
                                <ion-icon src="<?php echo ICONS_PATH . '/chevron-right.svg'; ?>"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
