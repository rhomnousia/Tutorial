<h2>Sign up using this form</h2>

<?php echo $this->tag->form(array('signup/register', 'method' => 'post')); ?>

    <p>
        <label for="name">Name</label>
        <?php echo $this->tag->textField(array('name', 'size' => 32)); ?>
    </p>

    <p>
        <label for="email">Email</label>
        <?php echo $this->tag->textField(array('email')); ?>
    </p>

    <?php echo $this->tag->submitButton(array('Register')); ?>

</form>