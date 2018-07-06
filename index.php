<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <h1 class="h1"> CALCULADORA IP </h1>


    <h3 class="h3">Digite o IP e a Máscara</h3>

    <form class="ui form" method="get" action="continhas.php">
        <div class="inline fields">
            <div class="one wide field">
                <input type="number" id="ip1"> <p>.</p>
            </div>
            <div class="one wide field">
                <input type="number" id="ip2"> <p>.</p>
            </div>
            <div class="one wide field">
                <input type="number" id="ip3"> <p>.</p>
            </div>
            <div class="one wide field">
                <input type="number" id="ip4"> <p>/</p>
            </div>
            <div class="one wide field">
                <input type="number" id="masc" min="24" max="32">
            </div>

            <button class="ui olive button" type="submit">Enviar</button>

        </div>

    </form>

</body>
</html>


