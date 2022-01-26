<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="../css/conteudo.css"/>
    
    <title>InfoCovid</title>
</head>
<body>
    <main>
        <header>
        <a href="../index.php">
	    <img id="logo" src="../img/logo.jpg" alt="logo" title="infocovid"/></a>
	    <hr class="hrCima"/>
        </header>

        <section>
            <nav>
            <div class="topnav" id="myTopnav">
			    
			    <a href="../index.php">Ínicio</a>
			    <a href="../paginas/sintomas.php">Sintomas</a>
			    <a href="../paginas/transmissao.php">Transmissão</a>
                <a href="../paginas/prevencao.php">Prevenção</a>

                <div class="dropdown">
				    <button class="dropbtn">Mais</button>
				        <div class="dropdownsub">
                            <a href="../paginas/diagnostico.php">Diagnóstico</a>
				            <a href="../paginas/fake_news.php">Fake News</a>
				            <a href="../paginas/grupo_de_risco.php">Grupo de Risco</a>
				            <a href="../paginas/tipos_de_teste.php">Tipos de testes</a>
				            <a href="../paginas/formulario.php">Formulário</a>
				        </div>			
			    </div>
			</div>
            </nav>
        </section>
        <section>	
			<article id="conteudo">
                <div class="principal">
				    <h2 class="titulo">Tipos de teste</h2>
                    <a class="texto">
                    Atualmente existem alguns tipos de testes capazes de diagnosticar a COVID-19 ou analisar se o paciente foi infectado anteriormente. Conheça:<br/>
                    <ul  class="texto"><br/>
                        <li> RT-PCR: capaz de detectar a presença do vírus nos pacientes. O RT-PCR exame é recomendado para o diagnóstico de COVID-19 para pessoas com sintomas e pode detectar a presença do vírus em média até o 12º dia de sintomas.</li><br/>
                        <li>Sorologia:  O teste detecta anticorpos IgM e IGg reagente ou não-reagente, produzidos na reação imunológica do organismo à infecção. A sorologia mostra se o paciênte já teve a doença  </li><br/>
                        <li>Teste de antígeno:  tem como objetivo identificar a infecção atual de COVID-19 em indivíduos e é realizado quando uma pessoa apresenta sinais ou sintomas.  Pode ser utilizado em pacientes assintomáticos que tiveram contato com caso positivo – nesse caso, recomendamos a repetição do teste em 72 horas, caso o resultado seja negativo. É um exame mais rápido na divulgação dos resultados, de 2 a 3 horas após a aplicação do teste.</li><br/>
                    </ul>
                    </a>
                    <img class="imgCentro" src="../img/teste.jpg" alt="teste_covid" title="sintoma"/>
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