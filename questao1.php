<?php 
session_start();// obrigatorio para iniciar uma sessao
header("content-type:text/html; charset=utf-8");
$_SESSION["pontos"]=0; // criando uma variavel de sessao e colocando valor 
// nas demais pagina podemos imprimir passar valores a uma variavel de sessao


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

			<form action="questao2.php" method="post">

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
					<label for="pergunta1">Questão 1<br>	Na programação quando precisamos que um trecho de código repita utilizamos estruturas de repetição, quais dentre os comandos abaixo são estrutura de repetição:</label>
				</div>
 


			<fieldset id="sexo"><legend>Respostas:</legend>


			  <input type="radio" name="Rquestao1" id="Ra1" checked="" value="A1" /> <label for="Ra1">(A)	For, IF, Case</label> <br>
			 <input type="radio" name="Rquestao1" id="Rb1" value="B1"/> <label for="Rb1">(B)  IF, Case, Do While</label><br>
             <input type="radio" name="Rquestao1" id="Rc1" value="C1"/> <label for="Rc1">(C)  Do While, While, For</label><br>
             <input type="radio" name="Rquestao1" id="Rd1" value="D1"/> <label for="Rd1">(D)	Do While, IF, Else</label><br>
			 <input type="radio" name="Rquestao1" id="Re1" value="E1"/> <label for="Re1">(E)	While, Case, IF</label><br>



			</fieldset> 


				


		

				
					<div class="col-md-6 col-xs-6">
						<button type="submit" class="btn btn-success btn-block">Escolher e Avançar</button>
					</div>
					<div class="col-md-6 col-xs-6">
						<button type="reset" class="btn btn-danger btn-block">Limpar</button>
					</div>
				</div>

			</form>
		</div>
		</div>
		<div class="col-md-4"></div>

	</div>	


	

</body>

</html>