<?php
session_start();

if(isset($_POST["Rquestao2"])){
	if ($_POST["Rquestao2"] == "A2"){
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

			<form action="questao4.php" method="post">

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
					<label for="pergunta3">Questão 3<br>
					Como declarar uma variável no PHP para receber um valor de informado no input?</label><br>
					 <img src="imagens/pergunta3.png" class="img-responsive img">         

				</div>
 


			<fieldset id="sexo"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao3" id="Ra3" checked="" value="A3" /> <label for="Ra3">(A)	$num = $_POST[“text”];</label> <br>
			 <input type="radio" name="Rquestao3" id="Rb3" value="B3"/> <label for="Rb3">(B)	$num = $_POST[“txtnum2”];</label><br>
             <input type="radio" name="Rquestao3" id="Rc3" value="C3"/> <label for="Rc3">(C)	$num = $_POST[“input”]; </label><br>
             <input type="radio" name="Rquestao3" id="Rd3" value="D3"/> <label for="Rd3">(D)	$num = $_POST[“label”];</label><br>
			 <input type="radio" name="Rquestao3" id="Re3" value="E3"/> <label for="Re3">(E)	$num = $POST[“txtnum2”];</label><br>



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