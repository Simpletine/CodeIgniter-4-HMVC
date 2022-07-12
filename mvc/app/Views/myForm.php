<h1>Form</h1>

<?php
echo form_open('home/submit');
echo form_input('name');
echo form_input('age');
echo form_submit('buttonName','Submit');
echo form_close();

?>


<h2>JavaScript Button</h2>
<button type="click" onclick="clickMeButton()">Click Me</button>

<script src="js/button-alert.js"></script>