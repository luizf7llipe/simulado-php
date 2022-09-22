<?php
session_start();

if(isset($_POST["Rquestao4"])){
	if ($_POST["Rquestao4"] == "C4"){
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

			<form action="questao6.php" method="post">

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
					<label for="pergunta4">Questão 5<br>
						Qual será o valor da variável $cont ao final da execução do código abaixo.</label><br>
					 <img src="imagens/pergunta5.png" class="img-responsive img">      

				</div>
 


			<fieldset id="sexo"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao5" id="Ra5" checked="" value="A5" /> <label for="Ra5">(A)	1</label> <br>
			 <input type="radio" name="Rquestao5" id="Rb5" value="B5"/> <label for="Rb5">(B)	11</label><br>
             <input type="radio" name="Rquestao5" id="Rc5" value="C5"/> <label for="Rc5">(C)	10</label><br>
             <input type="radio" name="Rquestao5" id="Rd5" value="D5"/> <label for="Rd5">(D)	12</label><br>
			 <input type="radio" name="Rquestao5" id="Re5" value="E5"/> <label for="Re5">(E)	13</label><br>



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