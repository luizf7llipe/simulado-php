<?php
session_start();

if(isset($_POST["Rquestao10"])){
	if ($_POST["Rquestao10"] == "D10"){
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

			<form action="questao12.php" method="post">

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
					<label for="pergunta11">Questão 11<br>
								Determine o último valor assumido pela variável $total no final programa::<br>
						<br>Analise a figura  e responda as 4 próximas questões:</label><br>
					 <img src="imagens/pergunta9.png" class="img-responsive img">      

				</div>
 


			<fieldset id="Questao"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao11" id="Ra11" checked="" value="A11" /> <label for="Ra11">(A) 20</label> <br>
			 <input type="radio" name="Rquestao11" id="Rb11" value="B11"/> <label for="Rb11">(B)	22</label><br>
             <input type="radio" name="Rquestao11" id="Rc11" value="C11"/> <label for="Rc11">(C)	18</label><br>
             <input type="radio" name="Rquestao11" id="Rd11" value="D11"/> <label for="Rd11">(D)	26</label><br>
			 <input type="radio" name="Rquestao11" id="Re11" value="E11"/> <label for="Re11">(E)	33</label><br>



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