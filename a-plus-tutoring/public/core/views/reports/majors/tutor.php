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
            <?php $dbInstance = Source\Handlers\Helpers\Classes\Session::getDb(); ?>
            <?php $tutor = new Source\Handlers\Core\Models\Tutor($dbInstance); ?>
            <p>Hello, <span><?php echo $tutor->getFirstName(); ?></span>.</p>
        </header>
        <div class="div-tutor-majors-report-container">
            <header class="header-tutor-majors-report-container">
                <h2>Student Majors Report</h2>
                <img src="<?php echo IMAGES_PATH . '/site-logo-inverted.png'; ?>" alt="Inverted Website Logo">
            </header>
            <div class="div-tutor-majors-report-content-container">
                <header class="header-tutor-majors-report-content-container">
                    <p>Major</p>
                    <p>#ID</p>
                    <p>Full Name</p>
                    <p>Email Address</p>
                    <p>Year</p>
                    <p>Enrollment</p>
                </header>
                <ul class="tutor-majors-report-content-rows-list">
                    <?php
                    $query = 'SELECT DISTINCT major FROM student ORDER BY major ASC;';
                    $majors = $dbInstance->executeQuery($query)->getQueryResult(true);

                    $totalRecords = 0;
                    if (!empty($majors)) {
                        foreach ($majors as $data) {
                            $query = '
                                SELECT 
                                    student.id, 
                                    student.first_name, 
                                    student.last_name,
                                    student.email_address,
                                    student.grade, 
                                    student.major, 
                                    student.date_enrolled 
                                FROM
                                    session
                                JOIN
                                    student ON session.student_id = student.id
                                WHERE
                                    session.tutor_id = :tutor_id
                                AND
                                    student.major = :major;
                            ';

                            $students = $dbInstance->executeQuery(
                                $query, [':tutor_id' => $id, ':major' => $data['major']]
                            )->getQueryResult(true);

                            if (!empty($students)) {
                                // A single student exists.
                                if (isset($students['id'])) {
                                    $dateObj = date_create($students['date_enrolled']);
                                    $formattedDate = date_format($dateObj, 'j F, Y');
                                    $totalRecords = 1;

                                    echo '
                                        <li class="tutor-majors-report-content-rows-list-item">
                                            <p>' . $students['major'] . '</p>
                                            <p>' . $students['id'] . '</p>
                                            <p>' . $students['first_name'] . ' ' . $students['last_name'] . '</p>
                                            <p>' . $students['email_address'] . '</p>
                                            <p>' . $students['grade'] . '</p>
                                            <p>' . $formattedDate . '</p>
                                        </li>
                                    ';

                                    break;
                                }

                                // Multiple students exists.
                                foreach ($students as $student) {
                                    $dateObj = date_create($student['date_enrolled']);
                                    $formattedDate = date_format($dateObj, 'j F, Y');

                                    echo '
                                        <li class="tutor-majors-report-content-rows-list-item">
                                            <p>' . $student['major'] . '</p>
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
                    }
                    ?>
                </ul>
            </div>
            <footer class="footer-tutor-majors-report-container">
                <p><?php echo date('j F, Y'); ?></p>
                <p>Total Records - <?php echo $totalRecords; ?></p>
            </footer>
        </div>
    </div>
