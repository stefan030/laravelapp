<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Home</h1>
    <h2>List of tasks:</h2>

    <ul>
        <?php foreach($tasks as $task) : ?>
            <li><?= $task; ?></li>
        <?php endforeach; ?>

            <br>
        <!-- Using blade ('.blade.php') we can use other syntax which will be compiled to vanilla php -->
        <!-- Below we will use shorthand syntax for foreach -->

        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach

    </ul>

</body>
</html>