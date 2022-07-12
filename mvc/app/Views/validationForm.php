<?php
if (isset($error) && $error && !is_array($error)) {
    echo ($error);
    // let's see the return in page
}
echo form_open('home/submit-validation');

echo form_label('Name');
echo form_input('name', '', 'class="name" placeholder="enter your name"');
echo $error['name'] ?? '';
echo '<br/>';

echo form_label('phone');
echo form_input('phone', '', 'class="phone" placeholder="enter your phone"');
echo $error['phone'] ?? '';
echo '<br/>';


echo form_label('email');
echo form_input('email', '', 'class="email" placeholder="enter your email"');
echo $error['email'] ?? '';
echo '<br/>';


echo form_label('bio');
echo form_input('bio', '', 'class="bio" placeholder="enter your bio"');
echo $error['bio'] ?? '';
echo '<br/>';


echo form_submit('submit', 'Submit button text');
echo form_close();
