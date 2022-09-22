<?php
session_start();

if(isset($_POST["Rquestao12"])){
	if ($_POST["Rquestao12"] == "C12"){
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			
			 <h3>LISTA DE REVISÃO – DESENVOLVIMENTO WEB – PHP</h3><br><br>

			<form action="questao14.php" method="post">

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
					<label for="pergunta13">Questão 13<br>
									
          	Quando queremos recuperar valores de formulário HTML no PHP, 
           qual comando correto para recuperar um valor de input com name txtvalor enviados de acordo com a imagem abaixo.
             <br>
						</label><br>
					 <img src="imagens/pergunta13.png" class="img-responsive img">      

				</div>
 


			<fieldset id="Questao"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao13" id="Ra13" checked="" value="A13" /> <label for="Ra13">A)	$preco = $GET[“txtvalor”];</label> <br>
			 <input type="radio" name="Rquestao13" id="Rb13" value="B13"/> <label for="Rb13">B)	$preco = $_GET[“txtvalor”];</label><br>
             <input type="radio" name="Rquestao13" id="Rc13" value="C13"/> <label for="Rc13">C)	$preco = $POST[“txtvalor”];</label><br>
             <input type="radio" name="Rquestao13" id="Rd13" value="D13"/> <label for="Rd13">D)	$preco = $_POST[“txtvalor”];</label><br>
			 <input type="radio" name="Rquestao13" id="Re13" value="E13"/> <label for="Re13">E)	$preco = [“txtvalor”];</label><br>



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