<!DOCTYPE html>
<html>
    <head>
        <title>FISHDAY Production</title>
        <meta charset="utf-8">
        <link href = "http://localhost/mvc.xx/css/style.css" type = "text/css" rel = "stylesheet"/>
        <link href = "/css/style.css" type = "text/css" rel = "stylesheet"/>
    </head>
    <body>
        <header class = "head_bcg">
            <h1>MUHA</h1>
            <nav class = "head_nav">
                <ul>
                    <li>Главная</li>
                    <li><a href = css/>Опция 1</a></li>
                    <li><a href = dadwdadwa>В конец</a></li>
                </ul>
            </nav>
        </header>

        <section id = "section_1">
            <div class = "promo">
                <div class = "regsection">
                    <?php 
                        include $dataView['login'];
                    ?>
                </div>
            </div>
        </section>

        <section id = "section_2">
            <div id="newsheader" align="center">ГОРЯЧИЕ НОВОСТИ</div>
            <?php 
                $i=0;
                if (count($data)>0)
                    $still = true;
                else
                    $still = false;
                while (($i<5) && ($still))
                {
            ?>
            <table id="currentnews" width="80%" border="1" cellpadding="5" cellspacing="0" align="center">       
                <tr>
                    <td>
                        <table width="25%" align="left" border="0">
                            <tr><td align="center"><image src="<?php echo $data[$i]['img'] ?>" width=80% alt="черный квадрат"></td></tr>
                        </table>
                        <div id="eachnewsheader">
                            <p><a href="<?php echo '/mvc.xx/news/show/'.$data[$i]['id'] ?>"> <?php echo $data[$i]['newsheader']; ?> </a></p>
                        </div>
                        <div id="ntext">
                            <p><?php 
                                    echo mb_substr($data[$i]['ntext'], 0, 30, 'UTF-8');
                                ?>
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td> дата: <?php echo $data[$i]['ndate']; ?> </td>
                                <td> автор: <?php echo $data[$i]['author']; ?> </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <?php
                    $i++;
                    if (count($data)<=$i)
                        $still=false;
                }
            ?>
            <div class="news">
                <a href="/mvc.xx/index/Page/2">2</a>
<!--                <form action="" method="GET">
                    <input name="nstart" maxlength="6" size="6" value="1">
                    <input name="nstart" maxlength="6" size="6" value="1">
                </form> -->
                      
            </div>

                <div class="news">
                        <p>
                            <a href="Button_X">САЙТ ОТКРЫЛСЯ </a>
                        </p>
                </div>
        </section>

        <footer id="mainfooter"><br>
            Fishday Production (ex-DT) 2016 &trade;
        </footer>

    </body>
</html>