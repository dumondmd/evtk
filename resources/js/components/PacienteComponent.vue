<template>
<div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">                           
                <img src="https://images.opencollective.com/vuejs/25a8146/logo/256.png" class="img-thumbnail" alt="Logo" width="200" height="200" style="height: 200px;">                
            </div>
        </div>
        <div class="col-md-10">
            <form action="./api/paciente" method="POST" @submit.prevent="addPaciente()">           
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
              <div class="container-fluid">
              <div class="row">
                <div class="col-sm-4">
                  <button type="button" class="btn btn-primary">Atualizar</button>
                    <button type="button" class="btn btn-default">Salvar</button> 
                </div>
                <div class="col-sm-8">
                  <label for="inputPes"></label>
                <input type="text" class="form-control" id="inputPes" placeholder="Buscar...">
                </div>
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
      <tbody v-for="paciente in pacientes">
        <tr>
          <td>{{paciente.nome}}</td>      
          <td>{{paciente.nascimento}}</td>
          <td>{{paciente.cpf}}</td>
          <td><button type="button" class="btn btn-primary btn-sm">Editar</button><button type="button" class="btn btn-sm">Excluir</button> </td>
        </tr>        
      </tbody>
    </table>

</div>

<!--Area de Modal-->

<div class="container">
    
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalExcluir">Excluir paciente</button>

  <!-- Modal -->
  <div class="modal fade" id="modalExcluir" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="text-center">Alerta</h4>
        </div>
        <div class="modal-body">
          <p>Deseja realmente excluir o cadastro do paciente?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
        </div>
      </div>      
    </div>
  </div>  
</div>

<div class="container">
    
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalAtualizar">Atualizar paciente</button>

  <!-- Modal -->
  <div class="modal fade" id="modalAtualizar" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Alerta</h4>
        </div>
        <div class="modal-body">
          <p>Deseja realmente atualizar o cadastro do paciente?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
        </div>
      </div>      
    </div>
  </div>  
</div>

<div class="container">
    
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalSucesso">Sucesso</button>

  <!-- Modal -->
  <div class="modal fade" id="modalSucesso" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">          
          <h4 class="modal-title">Alerta de sucesso</h4>
        </div>
        <div class="modal-body">
          <p>Paciente cadastrado com sucesso!</p>
        </div>
        <div class="modal-footer">          
          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>      
    </div>
  </div>  
</div>


<h1>Testes</h1>





</div>
</template>

<script>
    
  export default {
    data(){
      return {
        pacientes :[]
      }
    },
    created() {
      axios.get('./api/paciente')
      .then(response => this.pacientes = response.data);
    },
    methods:{
      addPaciente(){
        alert('adicionando...');
      }
    }
  }


</script>


<style>
  body {
      margin-top: 10px;
  }
</style>