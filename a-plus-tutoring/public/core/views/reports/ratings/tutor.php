    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    
    <!-- TUTOR RATINGS REPORT VIEW CONTAINER -->
    <div class="div-tutor-ratings-report-view-container">
        <header class="header-tutor-ratings-report-view-container">
            <nav class="nav-tutor-ratings-report-view-container">
                <ul class="nav-tutor-ratings-report-view-container-list">
                    <li class="nav-tutor-ratings-report-view-container-list-item">
                        <a class="link link-icon" href="/reports">
                            <ion-icon src="<?php echo ICONS_PATH . '/arrow-left.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-ratings-report-view-container-list-item">
                        <button class="btn btn-icon btn-print-report">
                            <ion-icon src="<?php echo ICONS_PATH . '/printer.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
            <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
            <?php $tutor = new Source\Handlers\Core\Models\Tutor($dbInstance); ?>
            <p>Hello, <span><?php echo $tutor->getFirstName(); ?></span>.</p>
        </header>
        <div class="div-tutor-ratings-report-container">
            <header class="header-tutor-ratings-report-container">
                <h2>Student Ratings Report</h2>
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png'; ?>" alt="Inverted Website Logo">
            </header>
            <div class="div-tutor-ratings-report-content-container">
                <header class="header-tutor-ratings-report-content-container">
                    <p>Rating</p>
                    <p>#ID</p>
                    <p>Student</p>
                    <p>Email Address</p>
                    <p>Year</p>
                    <p>Rated</p>
                </header>
                <ul class="tutor-ratings-report-content-rows-list">
                    <?php
                    $query = '
                        SELECT 
                            student.id, 
                            student.first_name, 
                            student.last_name,
                            student.email_address,
                            student.grade,
                            rating.score_name,
                            rating.score_value,
                            rating.date_rated
                        FROM
                            rating
                        JOIN
                            session ON rating.session_id = session.id
                        JOIN
                            student ON session.student_id = student.id
                        WHERE
                            session.tutor_id = :tutor_id;
                    ';

                    $students = $dbInstance->executeQuery(
                        $query, [':tutor_id' => $id]
                    )->getQueryResult(true);

                    if (!empty($students)) {
                        // A single student exists.
                        if (isset($students['id'])) {
                            $dateObj = date_create($students['date_rated']);
                            $formattedDate = date_format($dateObj, 'j F, Y');
                            $overallRating = (int) $students['score_value'];

                            echo '
                                <li class="tutor-ratings-report-content-rows-list-item">
                                    <p>' . $students['score_name'] . '</p>
                                    <p>' . $students['id'] . '</p>
                                    <p>' . $students['first_name'] . ' ' . $students['last_name'] . '</p>
                                    <p>' . $students['email_address'] . '</p>
                                    <p>' . $students['grade'] . '</p>
                                    <p>' . $formattedDate . '</p>
                                </li>
                            ';

                            $totalRecords = 1;
                        } else {
                            // Multiple students exists.
                            foreach ($students as $student) {
                                $dateObj = date_create($student['date_rated']);
                                $formattedDate = date_format($dateObj, 'j F, Y');
                                $overallRating += (int) $student['score_value'];

                                echo '
                                    <li class="tutor-ratings-report-content-rows-list-item">
                                        <p>' . $student['score_name'] . '</p>
                                        <p>' . $student['id'] . '</p>
                                        <p>' . $student['first_name'] . ' ' . $student['last_name'] . '</p>
                                        <p>' . $student['email_address'] . '</p>
                                        <p>' . $student['grade'] . '</p>
                                        <p>' . $formattedDate . '</p>
                                    </li>
                                ';
                            }

                            $totalRecords = count($students);
                        }
                    }
                    ?>
                </ul>
            </div>
            <footer class="footer-tutor-ratings-report-container">
                <p><?php echo date('j F, Y'); ?></p>
                <div class="div-footer-tutor-ratings-report-container-data">
                    <p>Total Records &mdash; <?php echo $totalRecords; ?></p>
                    <p>Overall Rating &mdash; <?php echo round($overallRating / $totalRecords, 1); ?></p>
                </div>
            </footer>
        </div>
    </div>
