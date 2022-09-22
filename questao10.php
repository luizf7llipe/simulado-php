<?php
session_start();

if(isset($_POST["Rquestao9"])){
	if ($_POST["Rquestao9"] == "A9"){
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

			<form action="questao11.php" method="post">

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
					<label for="pergunta10">Questão 10<br>
							Determine o último valor assumido de $cont:<br>
						<br>Analise a figura  e responda as 4 próximas questões:</label><br>
					 <img src="imagens/pergunta9.png" class="img-responsive img">      

				</div>
 


			<fieldset id="Questao"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao10" id="Ra10" checked="" value="A10" /> <label for="Ra10">(A)	1</label> <br>
			 <input type="radio" name="Rquestao10" id="Rb10" value="B10"/> <label for="Rb10">(B)	2</label><br>
             <input type="radio" name="Rquestao10" id="Rc10" value="C10"/> <label for="Rc10">(C)	7</label><br>
             <input type="radio" name="Rquestao10" id="Rd10" value="D10"/> <label for="Rd10">(D)	8</label><br>
			 <input type="radio" name="Rquestao10" id="Re10" value="E10"/> <label for="Re10">(E)	9</label><br>



			</fieldset> 


				


		

				
					<div class="col-md-6 col-xs-6">
						<button type="submit" class="btn btn-success btn-block">Escolher e Avançar</button>
					</div>
					<div class="col-md-6 col-xs-6">
						<button type="reset" class="btn btn-danger" name="Limpar" value="Limpar">LImpar</button>
					</div>
				</div>

			</form>
		</div>
		</div>
		<div class="col-md-4"></div>

	</div>	


	

</body>

</html>