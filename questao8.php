<?php
session_start();

if(isset($_POST["Rquestao7"])){
	if ($_POST["Rquestao7"] == "C7"){
	$_SESSION["pontos"]+= 1;
}
}

?>	





<!DOCTYPE html>
<html>
<head>
    
    <title>Lançamento de Notas</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
			 <h3>LISTA DE REVISÃO – DESENVOLVIMENTO WEB – PHP</h3><br><br>

			<form action="questao9.php" method="post">

				<!-- <div class="form-group">
					<label for="pergunta1">Questão 1<br>	Na programação quando precisamos que um trecho de código repita utilizamos estruturas de repetição, quais dentre os comandos abaixo são estrutura de repetição:</label>
				</div>

                    
             <div class="form-group">
				<label for="questao1">Escolha a resposta Correta</label>
				<select name="questao1" class="form-control">
				 <option value="A1">(A)	For, IF, Case</option>
                 <option value="B1">(B)	IF, Case, Do While</option>
                 <option value="C1">(C)	Do While, While, For</option>
                 <option value="D1">(D)	Do While, IF, Else</option>
                 <option value="E1">(E)	While, Case, IF</option>

               </select>
             </div> -->

                  <br>

                  <div class="form-group">
					<label for="pergunta8">Questão 8<br>
						Quando se trabalha com estrutura de repetição e executamos o programa e o mesmo fica em execução por tempo indeterminado não retornando uma resposta, geralmente temos um erro de?</label>

				</div>
 


			<fieldset id="Questao"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao8" id="Ra8" checked="" value="A8" /> <label for="Ra8">(A)	Loop de contador</label> <br>
			 <input type="radio" name="Rquestao8" id="Rb8" value="B8"/> <label for="Rb8">(B)	Loop de variável</label><br>
             <input type="radio" name="Rquestao8" id="Rc8" value="C8"/> <label for="Rc8">(C)	Contador sem incremento ou decremento </label><br>
             <input type="radio" name="Rquestao8" id="Rd8" value="D8"/> <label for="Rd8">(D)	Roda sem fim</label><br>
			 <input type="radio" name="Rquestao8" id="Re8" value="E8"/> <label for="Re">(E)	Loop infinito ou eterno</label><br>



			</fieldset> 


				


		

				
					<div class="col-md-6 col-xs-6">
						<button type="submit" class="btn btn-success btn-block">Escolher e Avançar</button>
					</div>
					<div class="col-md-6 col-xs-6">
						<button type="reset" class="btn btn-danger" name="Limpar" value="Limpar">Limpar</button>
					</div>
				</div>

			</form>
		</div>
		</div>
		<div class="col-md-4"></div>

	</div>	


	

</body>

</html>