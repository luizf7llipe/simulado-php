<?php
session_start();

if(isset($_POST["Rquestao1"])){
	if ($_POST["Rquestao1"] == "C1"){
	$_SESSION["pontos"] += 1;
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

			<form action="questao3.php" method="post">

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
					<label for="pergunta2">Questão 2<br>
					Quando queremos recuperar o valor de um objeto HTML no PHP, qual atributo guarda esse nome</label>
					 <img src="imagens/pergunta2.png" class="img-responsive img">         

				</div>
 


			<fieldset id="sexo"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao2" id="Ra2" checked="" value="A2" /> <label for="Ra2">(A) name</label> <br>
			 <input type="radio" name="Rquestao2" id="Rb2" value="B2"/> <label for="Rb2">(B)  class</label><br>
             <input type="radio" name="Rquestao2" id="Rc2" value="C2"/> <label for="Rc2">(C)	Required </label><br>
             <input type="radio" name="Rquestao2" id="Rd2" value="D2"/> <label for="Rd2">(D)	value</label><br>
			 <input type="radio" name="Rquestao2" id="Re2" value="E2"/> <label for="Re2">(E)	option</label><br>



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