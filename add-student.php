<?php
/**
 * Template Name: Add Students
 */

$errors = array();

if (isset($_POST['add_students'])) {
    // Get student details from the form
    $student_details = isset($_POST['students']) ? $_POST['students'] : array();

    // Validate and process student details
    foreach ($student_details as $student) {
        $admission_number = isset($student['admission_number']) ? trim($student['admission_number']) : '';
        $password = isset($student['password']) ? trim($student['password']) : '';

        if (empty($admission_number) || !is_numeric($admission_number) || strlen($admission_number) > 4) {
            $errors[] = 'Admission number must be numeric and not exceed 4 digits.';
            continue; // Skip this student and proceed to the next one
        }

        // Generate username based on admission number
        $username = 'student_' . $admission_number;

        // Create WordPress user account for the student
        $user_id = username_exists($username);
        if (!$user_id) {
            $user_id = wp_create_user($username, $password);
        } else {
            // Username already exists, create a unique one
            $username = $username . '_' . wp_generate_password(4, false);
            $user_id = wp_create_user($username, $password);
        }

        if (is_wp_error($user_id)) {
            $errors[] = 'Error creating user account for admission number ' . $admission_number;
        } else {
            // Set admission number as user meta
            update_user_meta($user_id, 'admission_number', $admission_number);
        }
    }

    if (empty($errors)) {
        // Notify students about their account credentials
        // This part can be implemented using WordPress email functions or a third-party service
    }
}

get_header(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Add Students</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                        <div id="students-container">
                            <div class="form-group student">
                                <label for="admission_number">Admission Number:</label>
                                <input type="number" class="form-control" name="students[0][admission_number]" maxlength="4" required>
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="students[0][password]" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" id="add-student">Add Student</button>
                        <button type="submit" class="btn btn-success btn-block" name="add_students">Save</button>
                    </form>
                    <?php if (!empty($errors)) : ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var studentIndex = 1;
        var studentsContainer = document.getElementById('students-container');
        var addStudentButton = document.getElementById('add-student');

        addStudentButton.addEventListener('click', function() {
            var studentDiv = document.createElement('div');
            studentDiv.classList.add('form-group', 'student');

            var admissionNumberLabel = document.createElement('label');
            admissionNumberLabel.textContent = 'Admission Number:';
            studentDiv.appendChild(admissionNumberLabel);

            var admissionNumberInput = document.createElement('input');
            admissionNumberInput.type = 'number';
            admissionNumberInput.classList.add('form-control');
            admissionNumberInput.name = 'students[' + studentIndex + '][admission_number]';
            admissionNumberInput.maxLength = 4;
            admissionNumberInput.required = true;
            studentDiv.appendChild(admissionNumberInput);

            var passwordLabel = document.createElement('label');
            passwordLabel.textContent = 'Password:';
            studentDiv.appendChild(passwordLabel);

            var passwordInput = document.createElement('input');
            passwordInput.type = 'password';
            passwordInput.classList.add('form-control');
            passwordInput.name = 'students[' + studentIndex + '][password]';
            passwordInput.required = true;
            studentDiv.appendChild(passwordInput);

            studentsContainer.appendChild(studentDiv);

            studentIndex++;
        });
    });
</script>

<?php get_footer(); ?>
