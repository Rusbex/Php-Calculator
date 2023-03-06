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
<title>Калькулятор</title>

<body class="text-center">
<section class="container" style="max-width: 700px; min-width: 50%">
    <main class="row gy-3">

        <form action="/result.php">
            <div class="row g-3" style="margin-top: 100px; margin-bottom: 100px">
                <h1 class="h3 mb-3 fw-normal">Калькулятор на php</h1>
                <div class="col-sm-4">
                    <input type="number" name="first" class="form-control" placeholder="Первое значение">
                </div>

                <select class="form-select" name="operation" style="max-width: 275px;">

                    <option value="-">-</option>
                    <option value="+">+</option>
                    <option value="/">/</option>
                    <option value="*">*</option>

                </select>

                <div class="col-sm-4">
                    <input  type="number" name="second" class="form-control" placeholder="Второе значение">
                </div>
                <button class="w-100 btn btn-primary btn-lg" type="submit" value="Посчитать">Посчитать</button>
            </div>
            </div>



        </form>
    </main>
</section>

</body>
</html>
