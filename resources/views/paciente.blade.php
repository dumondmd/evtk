<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pacientes - Cadastro</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Teste</div>

               
            </div>
        </div>
        <div class="col-md-9">
            <form>			 
			  <div class="form-row">
			    <div class="form-group col-md-2">
			      <label for="inputCPF">CPF</label>
			      <input type="text" class="form-control" id="inputCPF">
			    </div>
			    <div class="form-group col-md-5">
			      <label for="inputNome">Nome</label>
			      <input type="text" class="form-control" id="inputNome">
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">RG</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputZip">Cartão do SUS</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-2">
			      <label for="inputCPF">Sexo</label>
			      <select id="inputState" class="form-control">
			        <option selected>Masculino</option>
			        <option>Masculino</option>
			        <option>Feminino</option>
			      </select>
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputNome">Nascimento</label>
			      <input type="date" class="form-control" id="inputNome">
			    </div>
			    <div class="form-group col-md-5">
			      <label for="inputZip">Nome da Mãe</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">Telefone</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			  </div>

			  <div class="form-row">
			  	<div class="form-group col-md-2">
			      <label for="inputCPF">CEP</label>
			      <input type="text" class="form-control" id="inputCPF">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputCPF">Avenida/Rua</label>
			      <input type="text" class="form-control" id="inputCPF">
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputNome">Número</label>
			      <input type="text" class="form-control" id="inputNome">
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">Quadra</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">Lote</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			  </div>

			  <div class="form-row">
			    <div class="form-group col-md-5">
			      <label for="inputCPF">Complemento</label>
			      <input type="text" class="form-control" id="inputCPF">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputNome">Bairro</label>
			      <input type="text" class="form-control" id="inputNome">
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputZip">Cidade</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			    <div class="form-group col-md-1">
			      <label for="inputZip">UF</label>
			      <input type="text" class="form-control" id="inputZip">
			    </div>
			  </div>
			  
			</form>
        </div>
    </div>
</div>

<hr>


<div class="container">
	


	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Nome</th>
	      <th scope="col">Idade</th>
	      <th scope="col">CPF</th>
	      <th scope="col">Ações</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Alex</td>      
	      <td>25</td>
	      <td>34312919187</td>
	      <td>Editar|Excluir</td>
	    </tr>
	    <tr>
	      <td>Júnior</td>        
	      <td>36</td>
	      <td>34312955187</td>
	      <td>Editar|Excluir</td>
	    </tr>
	    <tr>
	      <td>Fred J</td>        
	      <td>56</td>
	      <td>03312919166</td>
	      <td>Editar|Excluir</td>
	    </tr>
	  </tbody>
	</table>

</div>










	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>