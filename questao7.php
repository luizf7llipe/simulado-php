<?php
session_start();

if(isset($_POST["Rquestao6"])){
	if ($_POST["Rquestao6"] == "C6"){
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

			<form action="questao8.php" method="post">

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
					<label for="pergunta7">Questão 7<br>
							Qual será o valor da variável $total ao final da execução do código abaixo.</label>
					 <img src="imagens/pergunta7.png" class="img-responsive img">         

				</div>
 


			<fieldset id="sexo"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao7" id="Ra7" checked="" value="A7" /> <label for="Ra7">(A)	6</label> <br>
			 <input type="radio" name="Rquestao" id="Rb7" value="B7"/> <label for="Rb7">(B)	9</label><br>
             <input type="radio" name="requestao7" id="Rc7" value="C7"/> <label for="Rc7">(C)	10 </label><br>
             <input type="radio" name="requestao7" id="Rd7" value="D7"/> <label for="Rd7">(D)	15</label><br>
			 <input type="radio" name="requestao7" id="Re7" value="E7"/> <label for="Re7">(E)	21</label><br>



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