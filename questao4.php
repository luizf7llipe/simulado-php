<?php
session_start();

if(isset($_POST["Rquestao3"])){
	if ($_POST["Rquestao3"] == "B3"){
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

			<form action="questao5.php" method="post">

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
					<label for="pergunta4">Questão 4<br>
					Como declarar uma variável no PHP para receber um valor de informado no input?</label><br>
					<!--  <img src="imagens/pergunta3.png" class="img-responsive img"> -->         

				</div>
 


			<fieldset id="sexo"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao4" id="Ra4" checked="" value="A4" /> <label for="Ra4">(A)	Testar a condição se for verdadeira</label> <br>
			 <input type="radio" name="Rquestao4" id="Rb4" value="B4"/> <label for="Rb4">(B)	Testar a condição se for falsa</label><br>
             <input type="radio" name="Rquestao4" id="Rc4" value="C4"/> <label for="Rc4">(C)	Atualizar o contador</label><br>
             <input type="radio" name="Rquestao4" id="Rd4" value="D4"/> <label for="Rd4">(D)	Validar a condição antes da execução</label><br>
			 <input type="radio" name="Rquestao4" id="Re4" value="E4"/> <label for="Re4">(E)	Validar a condição após a execução</label><br>



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