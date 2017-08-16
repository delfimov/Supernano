<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body>

<div class="container">

    <div class="jumbotron">
        <h1><a href="/">Supernano framework</a></h1>
        <p class="lead">Ultralightweight lightspeed fast supersmallsize
            unbelievable easy to use best in class PHP framework.</p>
        <p><a class="btn btn-lg btn-success" href="https://github.com/delfimov/Supernano" role="button">Get it now!</a></p>
    </div>

    <div class="content">
        <?php include $this->templateFile ?>
    </div>

    <hr>

    <footer class="container">
        <p>&copy; <a href="mailto:dmitry@elfimov.ru">Dmitry Elfimov</a> 2011&mdash;<?=date('Y')?></p>
    </footer>

</div>

</body>

</html>
