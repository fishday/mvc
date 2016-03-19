<!DOCTYPE html>
<html>
    <head>
        <title>Заголовок новости</title>
        <meta charset="utf-8">
        <link href = "http://localhost/mvc.xx/css/style.css" type = "text/css" rel = "stylesheet"/> 
<!--        <link href = "css/newsstyle.css" type = "text/css" rel = "stylesheet"/>-->
    </head>
    <body>
        <div id = "header">
            <h1>MUHA</h1>
            <nav class = "head_nav">
                <ul>
                    <li>Главная</li>
                    <li><a href = css/>Опция 1</a></li>
                    <li><a href = dadwdadwa>В конец</a></li>
                </ul>
            </nav>
        </div>

        <div id = "section_1">
            <div class = "promo">
                <div class = "regsection">
                    <?php 
                        include $dataView['login'];
                    ?>
                </div>
            </div>
        </div>

        <div id = "section_2">
            <table id="currentnews" width="80%" border="1" cellpadding="5" cellspacing="0" align="center">
                <tr>
                    <td>
                        <table width="25%" align="left" border="0">
                            <tr><td align="center"><image src="<?php echo $data['IMG'] ?>" width=80% alt="черный квадрат"></td></tr>
                        </table>
                        <div id="eachnewsheader">
                            <p><?php echo $data['newsheader']; ?></p>
                        </div>
                        <div id="ntext">
                            <p><?php echo $data['ntext']; ?></p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td> дата: <?php echo $data['ndate']; ?> </td>
                                <td> автор: <?php echo $data['author']; ?> </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
                <div class="news">
                        <p>
                            <a href="Button_X">САЙТ ОТКРЫЛСЯ </a>
                        </p>
                </div>
        </div>
        
        <section id ="comments">
            <?php echo $dataView['comments'][0]['textcomment']; ?>
        </section>

        <footer id="mainfooter"><br>
            Fishday Production (ex-DT) 2016 &trade;
        </footer>

    </body>
</html>
