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
				    <h2 class="titulo">Grupos de Risco</h2>
                    <a class="texto">
                    Grupo de risco do Coronavírus: quais condições estão associadas a maior risco de contrair COVID-19?</a>
                    <br/>
                    <ul  class="texto"><br/>
                        <li>Idade acima de 60 anos</li>
                        <li>Câncer</li>
                        <li>Insuficiência renal crônica</li>
                        <li>Bronquite crônica e enfisema pulmonar</li>
                        <li>Cardiopatias (insuficiência cardíaca, angina, infarto, miocardiopatias)</li>
                        <li>Imunodepressão</li>
                        <li>Obesidade (IMC ≥ 30 kg/m2)</li>
                        <li>Gestação</li>
                        <li>Anemia falciforme</li>
                        <li>Tabagismo</li>
                        <li>Diabetes mellitus</li>
                    </ul>
                    <img class="imgCentro" src="../img/grupo_de_risco.jpg" alt="grupo_idosos" title="sintoma"/>
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