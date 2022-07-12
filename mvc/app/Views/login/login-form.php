<?= $login ?? '' ?>
<?= form_open('home/login-validation') ?>
<?= form_input('username', '', 'placeholder="Enter your username"'); ?>
<?= form_input('password', '', 'placeholder="Enter your password"'); ?>
<?= form_submit('login', 'Login button'); ?>
<?= form_close() ?>