    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    
    <!-- TUTOR RATINGS REPORT VIEW CONTAINER -->
    <div class="div-tutor-ratings-report-view-container">
        <header class="header-tutor-ratings-report-view-container">
            <nav class="nav-tutor-ratings-report-view-container">
                <ul class="nav-tutor-ratings-report-view-container-list">
                    <li class="nav-tutor-ratings-report-view-container-list-item">
                        <button class="btn btn-icon btn-print-report">
                            <ion-icon src="<?php echo ICONS_PATH . '/printer.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
            <p><span>A<sup>+</sup></span> Tutoring Center</span></p>
        </header>
        <div class="div-tutor-ratings-report-container">
            <header class="header-tutor-ratings-report-container">
                <h2>Tutor Ratings Report</h2>
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
                            student.grade_label,
                            rating.score_label,
                            rating.score_value,
                            rating.date_rated
                        FROM
                            rating
                        JOIN
                            session ON rating.session_id = session.id
                        JOIN
                            student ON session.student_id = student.id
                        WHERE
                            session.tutor_id = :tutor_id
                        ORDER BY
                            rating.score_value DESC,
                            student.grade_value ASC;
                    ';

                    $dbInstance = Source\Handlers\Core\Database\Database::getInstance();
                    $students = $dbInstance->executeQuery($query, ['tutor_id' => $id])->getQueryResult(true);
                    $columnNameCache = [];

                    $overallRating = 0;
                    $totalRecords = 0;

                    if (!empty($students)) {
                        if (isset($students['id'])) {  // A single student exists.
                            $totalRecords = 1;

                            $dateObj = date_create($students['date_rated']);
                            $formattedDate = date_format($dateObj, 'j F, Y');

                            $overallRating = (int) $students['score_value'];

                            echo '
                                <li class="tutor-ratings-report-content-rows-list-item">
                                    <p>' . $students['score_label'] . '</p>
                                    <p>' . $students['id'] . '</p>
                                    <p>' . $students['first_name'] . ' ' . $students['last_name'] . '</p>
                                    <p>' . $students['email_address'] . '</p>
                                    <p>' . ucfirst($students['grade_label']) . '</p>
                                    <p>' . $formattedDate . '</p>
                                </li>
                            ';
                        } else {  // Multiple students exists.
                            $totalRecords = count($students);

                            foreach ($students as $student) {
                                $dateObj = date_create($student['date_rated']);
                                $formattedDate = date_format($dateObj, 'j F, Y');
                                $ratingScoreLabel = $student['score_label'];

                                $listItemStyle = '';
                                if (array_key_exists($ratingScoreLabel, $columnNameCache)) {
                                    $listItemStyle = 'hide-rating-sorting-key-label';
                                } else {
                                    $columnNameCache[$ratingScoreLabel] = 1;
                                }

                                $overallRating += (int) $student['score_value'];

                                echo '
                                    <li class="tutor-ratings-report-content-rows-list-item ' . $listItemStyle . '">
                                        <p>' . $ratingScoreLabel . '</p>
                                        <p>' . $student['id'] . '</p>
                                        <p>' . $student['first_name'] . ' ' . $student['last_name'] . '</p>
                                        <p>' . $student['email_address'] . '</p>
                                        <p>' . ucfirst($student['grade_label']) . '</p>
                                        <p>' . $formattedDate . '</p>
                                    </li>
                                ';
                            }

                            $overallRating = round($overallRating / $totalRecords, 1);
                        }
                    }
                    ?>
                </ul>
            </div>
            <footer class="footer-tutor-ratings-report-container">
                <p><?php echo date('j F, Y'); ?></p>
                <div class="div-footer-tutor-ratings-report-container-data">
                    <p>Total Records &mdash; <?php echo $totalRecords; ?></p>
                    <p>Overall Rating &mdash; <?php echo $overallRating; ?></p>
                </div>
            </footer>
        </div>
    </div>

    <!-- FOOTER TUTOR RATINGS REPORT VIEW -->
    <footer class="footer-tutor-ratings-report-view">
        <p>&copy; <?php echo date('Y'); ?> <span>A<sup>+</sup></span> Tutoring Center</p>
        <p>All rights reserved.</p>
    </footer>
