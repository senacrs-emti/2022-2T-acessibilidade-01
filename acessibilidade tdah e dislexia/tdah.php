<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class='normal'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="left"></div>
<div class="right"></div>
    <div class="todo">
    <header>        
        <img src="imagens/logotdah.png" alt="">
        <nav>
     <div class="right">
         <ul class="lado">
         <div class='ace'>
                <img src="imagens/logoace.png" alt="">
            </div>
            <div class="some">
        <?php
        $menu=array('<button type="button" id="btnAumentar">A+</button>','<button type="button" id="btnDiminuir">A- </button>','<button type="button"id="dislexia"> D </button>','<button type="button"id="normal"> A </button>');
        for($meno=0;$meno<=3;$meno++){$ponteiro=$menu[$meno];
        echo "<li>".$ponteiro."</li>";}
        ?>
        </div>
    </ul>
</div>
</nav>
    </header>
    <div class="contem">
    <main>
        <!--<hr class="hr1">
        <p class="meio-hr">Trabalho feito por: Nicolas, Lucas e Fabio</p>
        <hr>-->
        <article>
            <h1>Tudo sobre TDAH</h1>
            <h2>Sintomas, pacientes e tratamentos </h2>
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
                $lista=array("TDAH com predomínio de sintomas de desatenção, ",
                "TDAH com sintomas de hiperatividade ou impulsividade",
                "TDAH combinado.");
                for($valor=0;$valor<=2;$valor++){echo "<li>".$lista[$valor]."</li>"."<br>";}
                ?>
                </ul>
            <section>
                <p class="subtitulo"><strong>Tratamento para o TDAH:</strong></p><br><p>O tratamento normalmente mais indicado para o TDAH é a psicoterapia, mas dependendo do nível do grau e se o paciente possui ou não mais doenças mentais, podendo avançar para tratamento com diversos remédios. </p>
            </section>
            
            <section>
                <p>TDAH com predomínio de sintomas de desatenção:  </p>
            </section>
            <section>
                <ul class="lista-array">
                    <?php
                        $lista=array('Dificuldade de concentração',
                        'Dificuldade em organizar atividades', 
                        'Dificuldade em seguir instruções', 
                        'Deixar tarefas inacabadas', 
                        'Distração exacerbada',
                        'Esquecimento de tarefas',
                        'Dificuldade em absorver detalhes' );
                        for($valor=0;$valor<=6;$valor++){
                            echo"<li>".$lista[$valor]."</li>"."<br>";}
                    ?>
                </ul>
            </section>
            <section>
                <p>TDAH com predomínio de sintomas de Hiperatividade: </p>
            </section>
            <section>
                <ul class="lista-array">
                    <?php
                        $lista=array('Inquietação',
                        'Agitação',
                        'Impaciência',
                        'Impulsividade', 
                        'Dificuldade para ouvir até o fim', 
                        'Dificuldade com silêncio.' );
                        for($valor=0;$valor<=5;$valor++){
                            echo"<li>".$lista[$valor]."</li>"."<br>";}
                    ?>
                </ul>
            </section>
            <br><br>
            <h1>Tudo sobre Dislexia</h1>
            <h2>Sintomas, pacientes e tratamentos </h2>
            <img src="https://www12.senado.leg.br/radio/1/noticia/2020/01/06/cas-analisa-projeto-que-determina-acompanhamento-especial-a-aluno-com-dislexia/dislexia.jpg/@@images/0d2b50bd-fcd6-4bf8-ac93-c0b170a835de.jpeg"class="tdah-img">
            <section class="margin">
                <p>A dislexia é um distúrbio genético que causa problemas com o aprendizado e a leitura. </p>
                <p>A dislexia não tem ligação e não influencia na inteligência ou no QI da pessoa afetada, o disléxico normalmente tem problemas com leitura e escrita, trocando a ordem de letras e lendo errado as palavras, mas ainda assim grande parte dos disléxicos vão muito bem com cálculos. </p>
                <p>Os maiores casos da dislexia acontecem com homens, sendo 1 caso feminino pra 3 masculinos. </p>
                <p>O diagnóstico cedo da doença pode ser importante para o desenvolvimento da criança nos estudos e na carreira não seja afetado, o diagnóstico é feito por um neurologista que faz testes de audição, visão e provas de fluência verbal. Não existe um tratamento definitivo para dislexia ou uma cura, o que o paciente deve fazer é um acompanhamento fonoaudiológico e psicológico e assim conseguindo viver uma vida normal (GORETI; PINHEIRO, 2018)  </p>
            </section>
            <section>
            
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="subtitulo"><strong>Referências:</strong></p>
                    <p>
                SONSIN, Juliana. Dislexia e TDAH: descubra as diferenças entre eles e suas características. Disponível em:https://www.telavita.com.br Acesso em: 12 abr 2022 </p>
            </section>
        </article>
    </main>
    </div>
    <footer>
        <img src="imagens/logotdah.png" class="logofooter">
        <div class="logos">
            <img src="imagens/zap.png">
            <img src="imagens/insta.png">
            <img src="imagens/tele.png">
        </div>
        <style>
        h3{
  font-size: 24pt;
}
p{
  font-size: 14pt;
}
a{
  font-size: 10pt;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src=""></script>
    </footer>
        </div>
        <script>
            var $btnAumentar = $("#btnAumentar");
            var $btnDiminuir = $("#btnDiminuir");
            var $elemento = $("body p, li");

            function obterTamnhoFonte() {
            return parseFloat($elemento.css('font-size'));
            }

            $btnAumentar.on('click', function() {
            $elemento.css('font-size', obterTamnhoFonte() + 1);
            });

            $btnDiminuir.on('click', function() {
                $elemento.css('font-size', obterTamnhoFonte() - 1);
            });
            $(function(){
            $('#dislexia').click(function(event) {
            event.preventDefault();
            $('body').removeClass('normal');
            $('body').addClass('tdis');
            });
            });
            $(function(){
            $('#normal').click(function(event) {
            event.preventDefault();
            $('body').removeClass('tdis');
            $('body').addClass('normal');
            });
            });
        </script>
</body>
</html>