<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Page</title>
</head>

<body>
    <!-- Object Class -->
    <h2>My name is <?= $valuetwo['name'] ?? 'unset' ?></h2>
    <h3>My age is <?= $valuetwo['age'] ?? 'undefined age' ?> years old</h3>
    <h3>First page</h3>
</body>

</html>