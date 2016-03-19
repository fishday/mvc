<!DOCTYPE HTML>
<html>
    <head>
        <title>BUTTON X</title>
        <meta charset="utf-8">
        <script src="/mvc.xx/js/ajaxrequest.js"></script>
        <script src="/mvc.xx/jquery/jquery-2.2.2.js"></script>
    </head>
    <body style='text-align:center'>
        <h1>Загрузка веб-страницы в контейнер DIV</h1>
        <div id='info'>Это предложение будет заменено</div>
        <div id = 'result'><image src = "/mvc.xx/images/FO.png"></div>
        <!--<script>createrequest();</script>-->
        <script>
/*            var id=$(this).attr('info');
            $.ajax({
                type: "POST",
                //data: $('#info').serialize(),
                url: "/mvc.xx/js/ajaxtest.js",
                success: ziga()
                //url: "/mvc.xx/images/mckaras.jpg",
                //dataType: "script"
            });*/
    
            $.post("/mvc.xx/js/ajaxtest.php",
                {
                   param1: "param1",
                   param2: 2
                },
                onAjaxSuccess
            );

            function onAjaxSuccess(data)
            {
                // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
                $('#info').text(data);
 
            }
            
        </script>
    </body>
</html>