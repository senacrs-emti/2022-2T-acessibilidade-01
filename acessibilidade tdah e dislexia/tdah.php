<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="left"></div>
<div class="right"></div>
    <div class="todo">
    <header>        
        <img src="imagens/logotdah.png" alt="">
        <nav>
     <!--<ul>
        <?php
        //  $menu=array('pokemon',"digimon","fabio","lucas","nicolas");
        //for($meno=0;$meno<=4;$meno++){$ponteiro=$menu[$meno];
        //echo "<li>".$ponteiro."</li>";}
        ?>
    </ul>-->
</nav>
    </header>
    <main>
        <!--<hr class="hr1">
        <p class="meio-hr">Trabalho feito por: Nicolas, Lucas e Fabio</p>
        <hr>-->
        <article>
            <h1>Tudo sobre TDAH</h1>
            <h2>Sintomas, afetados e tratamentos </h2>
            <img src="imagens/tdah.jpg"class="tdah-img">
            <section class="margin">
                <p>Transtorno de déficit de atenção e hiperatividade é um transtorno neurobiológico de origem genética e acompanha a pessoa por toda vida. Os sintomas mais característicos do TDAH são a desatenção, inquietude e impulsividade. </p>
            </section>
            <section>
                <p>O TDAH é considerado na categoria de “Transtornos Hipercinéticos” pelo CID (Classificação Internacional de Doenças). </p>
            </section>
            <section>
                <p>No Brasil o TDAH afeta de 3 a 5% das crianças, sendo mais forte nelas e 4% da população adulta. </p>
            </section>
            <section>
                <p>Segundo o Manual de Diagnóstico e Estatístico de Doenças Mentais existem três tipos de TDAH:</p>
            </section>
            <ul class="lista-array">
                <?php
                $lista=array("TDAH com predomínio de sintomas de desatenção, ","TDAH com predomínio de sintomas de hiperatividade ou impulsividade","TDAH combinado.");
                for($valor=0;$valor<=2;$valor++){echo "<li>".$lista[$valor]."</li>"."<br>";}
                ?>
                </ul>
            <section>
                <p class="subtitulo"><strong>Tratamento para o TDAH:</strong></p><br><p>O tratamento normalmente mais indicado para o TDAH é a psicoterapia, mas dependendo do nível do grau e se o paciente possui ou não mais doenças mentais, podendo avançar para tratamento com diversos remédios. </p>
            </section>
            <section>
            
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="subtitulo"><strong>Referências:</strong></p>
                    <p>
                SONSIN, Juliana. Dislexia e TDAH: descubra as diferenças entre eles e suas características. Disponível em:https://www.telavita.com.br/blog/dislexia-e-tdah/ Acesso em: 12 abr 2022 </p>
            </section>
        </article>d
        <aside>
            <img src="" alt="">
        </aside>
    </main>
    <footer>
        <img src="imagens/logotdah.png" class="logofooter">
        <div class="logos">
            <img src="imagens/zap.png">
            <img src="imagens/insta.png">
            <img src="imagens/tele.png">
        </div>
    </footer>
        </div>
</body>
</html>