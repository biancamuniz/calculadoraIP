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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        
        $(document).ready(function () {
            $("#bt").click(function () {
               var vip1  = $("#ip1").val();
               var vip2  = $("#ip2").val();
               var vip3  = $("#ip3").val();
               var vip4  = $("#ip4").val();
               var vmasc = $("#masc").val();

               $.get("continhas.php",
                   {
                       ip1 : vip1, ip2 : vip2, ip3 : vip3, ip4 : vip4, masc : vmasc
                   },function (resultado) {
                      $(".resposta").html(resultado);
                   } );
                   
            });

        });


    </script>




</head>
<body>

    <h1 class="h1" align="center"> CALCULADORA IP </h1>


    <h3 class="h3" align="center">Digite o IP e a Máscara</h3>

    <div class="ui form">
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

            <button class="ui olive button" id="bt" >Enviar</button>

        </div>

    </div>

    <div class="resposta">

    </div>


</body>
</html>


