<?php
/**
 * Template Name: Add Teachers
 */

$errors = array();

if (isset($_POST['add_teachers'])) {
    // Get teacher details from the form
    $teacher_details = isset($_POST['teachers']) ? $_POST['teachers'] : array();

    // Validate and process teacher details
    foreach ($teacher_details as $teacher) {
        $tac_number = isset($teacher['tac_number']) ? trim($teacher['tac_number']) : '';
        $password = isset($teacher['password']) ? trim($teacher['password']) : '';

        if (empty($tac_number) || strlen($tac_number) !== 6) {
            $errors[] = 'TAC number must be exactly 6 digits.';
            continue; // Skip this teacher and proceed to the next one
        }

        // Generate username based on TAC number
        $username = 'teacher_' . $tac_number;

        // Create WordPress user account for the teacher
        $user_id = username_exists($username);
        if (!$user_id) {
            $user_id = wp_create_user($username, $password);
        } else {
            // Username already exists, create a unique one
            $username = $username . '_' . wp_generate_password(4, false);
            $user_id = wp_create_user($username, $password);
        }

        if (is_wp_error($user_id)) {
            $errors[] = 'Error creating user account for TAC number ' . $tac_number;
        } else {
            // Set TAC number as user meta
            update_user_meta($user_id, 'tac_number', $tac_number);
        }
    }

    if (empty($errors)) {
        // Notify teachers about their account credentials
        // This part can be implemented using WordPress email functions or a third-party service
    }
}

get_header(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Add Teachers</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                        <div id="teachers-container">
                            <div class="form-group teacher">
                                <label for="tac_number">TAC Number:</label>
                                <input type="text" class="form-control" name="teachers[0][tac_number]" maxlength="6" required>
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="teachers[0][password]" required>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" id="add-teacher">Add Teacher</button>
                        <button type="submit" class="btn btn-success btn-block" name="add_teachers">Save</button>
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
        var teacherIndex = 1;
        var teachersContainer = document.getElementById('teachers-container');
        var addTeacherButton = document.getElementById('add-teacher');

        addTeacherButton.addEventListener('click', function() {
            var teacherDiv = document.createElement('div');
            teacherDiv.classList.add('form-group', 'teacher');

            var tacNumberLabel = document.createElement('label');
            tacNumberLabel.textContent = 'TAC Number:';
            teacherDiv.appendChild(tacNumberLabel);

            var tacNumberInput = document.createElement('input');
            tacNumberInput.type = 'text';
            tacNumberInput.classList.add('form-control');
            tacNumberInput.name = 'teachers[' + teacherIndex + '][tac_number]';
            tacNumberInput.maxLength = 6;
            tacNumberInput.required = true;
            teacherDiv.appendChild(tacNumberInput);

            var passwordLabel = document.createElement('label');
            passwordLabel.textContent = 'Password:';
            teacherDiv.appendChild(passwordLabel);

            var passwordInput = document.createElement('input');
            passwordInput.type = 'password';
            passwordInput.classList.add('form-control');
            passwordInput.name = 'teachers[' + teacherIndex + '][password]';
            passwordInput.required = true;
            teacherDiv.appendChild(passwordInput);

            teachersContainer.appendChild(teacherDiv);

            teacherIndex++;
        });
    });
</script>

<?php get_footer(); ?>
