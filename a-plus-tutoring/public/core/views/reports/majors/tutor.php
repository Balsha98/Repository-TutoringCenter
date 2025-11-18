    <?php require_once LOCAL_PATH . '/core/partials/loaders/page-loader.php'; ?>
    
    <!-- TUTOR MAJORS REPORT VIEW CONTAINER -->
    <div class="div-tutor-majors-report-view-container">
        <header class="header-tutor-majors-report-view-container">
            <nav class="nav-tutor-majors-report-view-container">
                <ul class="nav-tutor-majors-report-view-container-list">
                    <li class="nav-tutor-majors-report-view-container-list-item">
                        <a class="link link-icon" href="/reports">
                            <ion-icon src="<?php echo ICONS_PATH . '/arrow-left.svg'; ?>"></ion-icon>
                        </a>
                    </li>
                    <li class="nav-tutor-majors-report-view-container-list-item">
                        <button class="btn btn-icon btn-print-report">
                            <ion-icon src="<?php echo ICONS_PATH . '/printer.svg'; ?>"></ion-icon>
                        </button>
                    </li>
                </ul>
            </nav>
            <p><span>A<sup>+</sup></span> Tutoring Center</p>
        </header>
        <div class="div-tutor-majors-report-container">
            <header class="header-tutor-majors-report-container">
                <h2>Tutor Majors Report</h2>
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png'; ?>" alt="Inverted Website Logo">
            </header>
            <div class="div-tutor-majors-report-content-container">
                <header class="header-tutor-majors-report-content-container">
                    <p>Major</p>
                    <p>#ID</p>
                    <p>Student</p>
                    <p>Email Address</p>
                    <p>Year</p>
                </header>
                <ul class="tutor-majors-report-content-rows-list">
                    <?php
                    $query = '
                        SELECT 
                            student.id, 
                            student.first_name, 
                            student.last_name,
                            student.email_address,
                            student.grade_label,
                            student.major
                        FROM
                            session
                        JOIN
                            student ON session.student_id = student.id
                        WHERE
                            session.tutor_id = :tutor_id
                        ORDER BY
                            student.major ASC,
                            student.grade_value ASC;
                    ';

                    $dbInstance = Source\Handlers\Core\Database\Database::getInstance();
                    $students = $dbInstance->executeQuery($query, [':tutor_id' => $id])->getQueryResult(true);
                    $columnNameCache = [];

                    $totalRecords = 0;

                    if (!empty($students)) {
                        if (isset($students['id'])) {  // A single student exists.
                            $totalRecords = 1;

                            echo '
                                <li class="tutor-majors-report-content-rows-list-item ">
                                    <p>' . $students['major'] . '</p>
                                    <p>' . $students['id'] . '</p>
                                    <p>' . $students['first_name'] . ' ' . $students['last_name'] . '</p>
                                    <p>' . $students['email_address'] . '</p>
                                    <p>' . ucfirst($students['grade_label']) . '</p>
                                </li>
                            ';
                        } else {  // Multiple students exists.
                            $totalRecords = count($students);

                            foreach ($students as $student) {
                                $studentMajor = $student['major'];

                                $listItemStyle = '';
                                if (array_key_exists($studentMajor, $columnNameCache)) {
                                    $listItemStyle = 'hide-major-sorting-key-label';
                                } else {
                                    $columnNameCache[$studentMajor] = 1;
                                }

                                echo '
                                    <li class="tutor-majors-report-content-rows-list-item ' . $listItemStyle . '">
                                        <p>' . $studentMajor . '</p>
                                        <p>' . $student['id'] . '</p>
                                        <p>' . $student['first_name'] . ' ' . $student['last_name'] . '</p>
                                        <p>' . $student['email_address'] . '</p>
                                        <p>' . ucfirst($student['grade_label']) . '</p>
                                    </li>
                                ';
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
            <footer class="footer-tutor-majors-report-container">
                <p><?php echo date('j F, Y'); ?></p>
                <p>Total Records &mdash; <?php echo $totalRecords; ?></p>
            </footer>
        </div>
    </div>

    <!-- FOOTER TUTOR MAJORS REPORT VIEW -->
    <footer class="footer-tutor-majors-report-view">
        <p>&copy; <?php echo date('Y'); ?> <span>A<sup>+</sup></span> Tutoring Center</p>
        <p>All rights reserved.</p>
    </footer>
