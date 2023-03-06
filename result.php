<html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<title>Результат</title>

<body class="text-center">
<section class="container" style="max-width: 700px; min-width: 50%">


    <main class="row gy-3" style="margin-top: 100px; margin-bottom: 100px">
            <h1 class="h3 mb-3 fw-normal">Результат вычислений:</h1>
<div class="form-floating">
    <?php
    $result = require __DIR__ . '/calc.php'; ?>
    <div class="form-floating">
        <?= $result ?>
    </div>
</div>
    </main>


</section>
</body>
</html>