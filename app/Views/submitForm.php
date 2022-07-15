<?php
// we can also use codeigniter form element or normal HTML

echo form_open('submit-form/validation');
echo '<br/><b>First value</b><br/>';
echo form_input('first');
// first parameter is input name, second is value, third is attribute
echo '<br/><b>Second value</b><br/>';
echo form_input('second');

echo '<br/><b>Third value</b><br/>';
echo form_input('third');

echo form_submit('submit','Submit button');
echo form_close();
