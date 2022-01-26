<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="../css/conteudo.css"/>
    <link rel="stylesheet" type="text/css" href="../css/questionario.css"/>
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
				    <h2 class="titulo">Questionário</h2>
                    <form action="recebeQuestionario.php" method="post">
					<fieldset>
							<fieldset class="bloco">
								<div class="dados">
								<label>Nome:</label>
								<input type="text" name="nome" required />
								</div>
							</fieldset>
							<fieldset class="bloco">
								<div class="dados">
								<label>Sobrenome:</label>
								<input type="text" name="sobrenome" required />
								</div>
							</fieldset>
							<fieldset class="bloco">
								<div class="dados">
								<label>Idade:</label>
								<input type="number" name="idade" required />
								</div>
							</fieldset>
							
							<fieldset class="bloco">
								<div class="dados">
								<label>O que é Covid 19?:</label>
								<textarea name="inicio" rows="6" cols="100" required></textarea>
								</div>
							</fieldset>

                            <fieldset class="bloco">
								<div class="dados">
								<label>Quais os sintomas?:</label>
								<textarea name="sintomas" rows="6" cols="100" required></textarea>
								</div>
							</fieldset>
							
                            <fieldset class="bloco">
								<div class="dados">
								<label>Quais as maneiras de transmissão?:</label>
								<textarea name="transmissao" rows="6" cols="100" required></textarea>
								</div>
							</fieldset>

                            <fieldset class="bloco">
								<div class="dados">
								<label>Como é feito o diagnóstico:</label>
								<textarea name="diagnostico" rows="6" cols="100" required></textarea>
								</div>
							</fieldset>

                            <fieldset class="bloco">
								<div class="dados">
								<label>Como se previnir?:</label>
								<textarea name="previnir" rows="6" cols="100" required></textarea>
								</div>
							</fieldset>

                            <fieldset class="bloco">
								<div class="dados">
								<label>Cite 3 grupos de risco:</label>
								<textarea name="grupo_risco" rows="6" cols="100" required></textarea>
								</div>
							</fieldset>

                            <fieldset class="bloco">
								<div class="dados">
								<label>Quais os tipos de teste?:</label>
								<textarea name="tipos_teste" rows="6" cols="100" required></textarea>
								</div>
							</fieldset>
							<button type="submit" class="botao">
							Enviar
							</button>
							<button type="reset" class="botao">
							Limpar
							</button>
					</fieldset>
				</form>
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

