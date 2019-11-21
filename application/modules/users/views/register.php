<div class="col-8 center-block m-top-50  register-page grey-bg">
    <h2>Register here..!</h2>

    <?php
    $firstname = array(
        'name' => 'firstname',
        'class' => 'form-control m-top-10',
        'type' => 'text',
        'id' => 'firstname',
        'placeholder' => 'Enter Your First name',
        'value' => set_value('firstname')
    );

    $lastname = array(
        'name' => 'lastname',
        'class' => 'form-control m-top-10',
        'type' => 'text',
        'id' => 'lastname',
        'placeholder' => 'Enter Your Last name',
        'value' => set_value('lastname')
    );

    $email = array(
        'name' => 'email',
        'class' => 'form-control m-top-10',
        'type' => 'email',
        'id' => 'email',
        'placeholder' => 'Enter Your Email',
        'value' => set_value('email')
    );

    $password = array(
        'name' => 'password',
        'class' => 'form-control m-top-10',
        'type' => 'password',
        'id' => 'password',
        'placeholder' => 'Enter Your password',
    );


    $confirm_password = array(
        'name' => 'confirm_password',
        'class' => 'form-control m-top-10',
        'type' => 'password',
        'id' => 'confirm_password',
        'placeholder' => 'Re-Enter Your password',
    );

    $register_submit = array(
        'name' => 'register_submit',
        'class' => 'btn btn-primary m-top-10',
        'value' => 'Register'
    );

    echo form_open('register', array('class' => 'form-horizontal m-top-20'));

    echo form_input($firstname);
    echo '<div class="error">' . form_error('firstname') . '</div>';

    echo form_input($lastname);
    echo '<div class="error">' . form_error('lastname') . '</div>';

    echo form_input($email);
    echo '<div class="error">' . form_error('email') . '</div>';

    echo form_input($password);
    echo '<div class="error">' . form_error('password') . '</div>';

    echo form_input($confirm_password);
    echo '<div class="error">' . form_error('confirm_password') . '</div>';

    echo form_submit($register_submit);

    echo form_close();
    ?>
</div>
