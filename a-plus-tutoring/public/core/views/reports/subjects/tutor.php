    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    
    <!-- TUTOR SUBJECTS REPORT VIEW CONTAINER -->
    <div class="div-tutor-subjects-report-view-container">
        <header class="header-tutor-subjects-report-view-container">
            <nav class="nav-tutor-subjects-report-view-container">
                <ul class="nav-tutor-subjects-report-view-container-list">
                    <li class="nav-tutor-subjects-report-view-container-list-item">
                        <a class="link link-icon" href="/reports">
                            <ion-icon src="<?php echo ICONS_PATH . '/arrow-left.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-subjects-report-view-container-list-item">
                        <button class="btn btn-icon btn-print-report">
                            <ion-icon src="<?php echo ICONS_PATH . '/printer.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
            <p><span>A<sup>+</sup></span> Tutoring Center</p>
        </header>
        <div class="div-tutor-subjects-report-container">
            <header class="header-tutor-subjects-report-container">
                <h2>Tutor Subjects Report</h2>
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png'; ?>" alt="Inverted Website Logo">
            </header>
            <div class="div-tutor-subjects-report-content-container">
                <header class="header-tutor-subjects-report-content-container">
                    <p>Subject</p>
                    <p>#ID</p>
                    <p>Department</p>
                    <p>Professor</p>
                    <p>Credits</p>
                    <p>Term</p>
                </header>
                <ul class="tutor-subjects-report-content-rows-list">
                    <?php
                    $query = '
                        SELECT
                            subject.id,
                            subject.name,
                            subject.department,
                            subject.professor,
                            subject.credits,
                            subject.term
                        FROM
                            subject
                        JOIN
                            assigned ON subject.id = assigned.subject_id
                        JOIN
                            tutor ON assigned.tutor_id = tutor.id
                        WHERE
                            tutor.id = :tutor_id;
                    ';

                    $dbInstance = Source\Handlers\Core\Database\Database::getInstance();
                    $subjects = $dbInstance->executeQuery($query, [':tutor_id' => $id])->getQueryResult(true);

                    $totalRecords = 0;

                    if (!empty($subjects)) {
                        if (isset($subjects['id'])) {  // A single student exists.
                            $totalRecords = 1;

                            echo '
                                <li class="tutor-subjects-report-content-rows-list-item">
                                    <p>' . $subjects['name'] . '</p>
                                    <p>' . $subjects['id'] . '</p>
                                    <p>' . $subjects['department'] . '</p>
                                    <p>' . $subjects['professor'] . '</p>
                                    <p>' . $subjects['credits'] . '</p>
                                    <p>' . $subjects['term'] . '</p>
                                </li>
                            ';
                        } else {  // Multiple subjects exists.
                            $totalRecords = count($subjects);

                            foreach ($subjects as $subject) {
                                echo '
                                    <li class="tutor-subjects-report-content-rows-list-item">
                                        <p>' . $subjects['name'] . '</p>
                                        <p>' . $subjects['id'] . '</p>
                                        <p>' . $subjects['department'] . '</p>
                                        <p>' . $subjects['professor'] . '</p>
                                        <p>' . $subjects['credits'] . '</p>
                                        <p>' . $subjects['term'] . '</p>
                                    </li>
                                ';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <footer class="footer-tutor-subjects-report-container">
                <p><?php echo date('j F, Y'); ?></p>
                <p>Total Records &mdash; <?php echo $totalRecords; ?></p>
            </footer>
        </div>
    </div>
