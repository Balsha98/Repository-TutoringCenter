    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    
    <!-- TUTOR YEARS REPORT VIEW CONTAINER -->
    <div class="div-tutor-years-report-view-container">
        <header class="header-tutor-years-report-view-container">
            <nav class="nav-tutor-years-report-view-container">
                <ul class="nav-tutor-years-report-view-container-list">
                    <li class="nav-tutor-years-report-view-container-list-item">
                        <button class="btn btn-icon btn-print-report">
                            <ion-icon src="<?php echo ICONS_PATH . '/printer.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
            <p><span>A<sup>+</sup></span> Tutoring Center</p>
        </header>
        <div class="div-tutor-years-report-container">
            <header class="header-tutor-years-report-container">
                <h2>Tutor Years Report</h2>
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png'; ?>" alt="Inverted Website Logo">
            </header>
            <div class="div-tutor-years-report-content-container">
                <header class="header-tutor-years-report-content-container">
                    <p>Year</p>
                    <p>#ID</p>
                    <p>Student</p>
                    <p>Email Address</p>
                    <p>Enrollment</p>
                </header>
                <ul class="tutor-years-report-content-rows-list">
                    <?php
                    $query = '
                        SELECT 
                            student.id, 
                            student.first_name, 
                            student.last_name,
                            student.email_address,
                            student.grade_name,
                            student.grade_value,
                            student.date_enrolled
                        FROM
                            session
                        JOIN
                            student ON session.student_id = student.id
                        WHERE
                            session.tutor_id = :tutor_id
                        ORDER BY
                            student.grade_value ASC;
                    ';

                    $dbInstance = Source\Handlers\Core\Database\Database::getInstance();
                    $students = $dbInstance->executeQuery($query, ['tutor_id' => $id])->getQueryResult(true);
                    $columnNameCache = [];

                    $totalRecords = 0;

                    if (!empty($students)) {
                        if (isset($students['id'])) {  // A single student exists.
                            $totalRecords = 1;

                            $dateObj = date_create($students['date_enrolled']);
                            $formattedDate = date_format($dateObj, 'j F, Y');

                            echo '
                                <li class="tutor-years-report-content-rows-list-item ">
                                    <p>' . $students['grade_name'] . '</p>
                                    <p>' . $students['id'] . '</p>
                                    <p>' . $students['first_name'] . ' ' . $students['last_name'] . '</p>
                                    <p>' . $students['email_address'] . '</p>
                                    <p>' . $formattedDate . '</p>
                                </li>
                            ';
                        } else {  // Multiple students exists.
                            $totalRecords = count($students);

                            foreach ($students as $student) {
                                $dateObj = date_create($student['date_enrolled']);
                                $formattedDate = date_format($dateObj, 'j F, Y');
                                $studentYear = $student['grade_name'];

                                $listItemStyle = '';
                                if (array_key_exists($studentYear, $columnNameCache)) {
                                    $listItemStyle = 'hide-year-sorting-key-label';
                                } else {
                                    $columnNameCache[$studentYear] = 1;
                                }

                                echo '
                                    <li class="tutor-years-report-content-rows-list-item ' . $listItemStyle . '">
                                        <p>' . $studentYear . '</p>
                                        <p>' . $student['id'] . '</p>
                                        <p>' . $student['first_name'] . ' ' . $student['last_name'] . '</p>
                                        <p>' . $student['email_address'] . '</p>
                                        <p>' . $formattedDate . '</p>
                                    </li>
                                ';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <footer class="footer-tutor-years-report-container">
                <p><?php echo date('j F, Y'); ?></p>
                <p>Total Records &mdash; <?php echo $totalRecords; ?></p>
            </footer>
        </div>
    </div>

    <!-- FOOTER TUTOR YEARS REPORT VIEW -->
    <footer class="footer-tutor-years-report-view">
        <p>&copy; <?php echo date('Y'); ?> <span>A<sup>+</sup></span> Tutoring Center</p>
        <p>All rights reserved.</p>
    </footer>
