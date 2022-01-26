<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="./css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="./css/conteudo.css"/>
    
    <title>InfoCovid</title>
</head>
<body>
    <main>
        <header>
        <a href="./index.php">
	    <img id="logo" src="./img/logo.jpg" alt="logo" title="infocovid"/></a>
	    <hr class="hrCima"/>
        </header>

        <section>
            <nav>
            <div class="topnav" id="myTopnav">
			    
			    <a href="index.php">Ínicio</a>
			    <a href="./paginas/sintomas.php">Sintomas</a>
			    <a href="./paginas/transmissao.php">Transmissão</a>
                <a href="./paginas/prevencao.php">Prevenção</a>

                <div class="dropdown">
				    <button class="dropbtn">Mais</button>
				        <div class="dropdownsub">
                            <a href="./paginas/diagnostico.php">Diagnóstico</a>
				            <a href="./paginas/fake_news.php">Fake News</a>
				            <a href="./paginas/grupo_de_risco.php">Grupo de Risco</a>
				            <a href="./paginas/tipos_de_teste.php">Tipos de testes</a>
				            <a href="./paginas/formulario.php">Formulário</a>
				        </div>			
			    </div>
			</div>
            </nav>
        </section>
        <section>	
			<article id="conteudo">
                <div class="principal">
				    <h2 class="titulo">O que é COVID19?</h2>
                    <a class="texto">A Covid-19 é uma infecção respiratória aguda causada pelo coronavírus SARS-CoV-2, potencialmente 
                    grave, de elevada transmissibilidade e de distribuição global.
                    O SARS-CoV-2 é um betacoronavírus descoberto em amostras de lavado broncoalveolar obtidas
                    de pacientes com pneumonia de causa desconhecida na cidade de Wuhan, província de Hubei, China, 
                    em dezembro de 2019. Pertence ao subgênero Sarbecovírus da família</a>
                    <a class="texto">Coronaviridae e é o sétimo coronavírus conhecido a infectar seres humanos
                    Os coronavírus são uma grande família de vírus comuns em muitas espécies diferentes de animais, incluindo 
                    o homem, camelos, gado, gatos e morcegos. Raramente os coronavírus de animais podem infectar pessoas
                    e depois se espalhar entre seres humanos como já ocorreu com o MERS-CoV e o SARS-CoV-2. Até o momento,
                    não foi definido o reservatório silvestre do SARS-CoV-2.</a>
                    <img class="imgCentro" src="./img/virus.jpeg" alt="virus" title="sintoma"/>
                </div>

			</article>
		</section>
        <hr class="hrBaixo"/>
        <footer>
        <div>
		<h5 id="desenvolvedor">Desenvolvido por Emerson Luís Teixeira da Silva</h5>
		</div>
        </footer>
    </main>
</body>
</html>