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
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" id="cpf">
                </div>
                <div class="form-group col-md-5">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome">
                </div>
                <div class="form-group col-md-2">
                  <label for="rg">RG</label>
                  <input type="text" class="form-control" id="rg">
                </div>
                <div class="form-group col-md-3">
                  <label for="cartao_sus">Cartão do SUS</label>
                  <input type="text" class="form-control" id="cartao_sus">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="sexo">Sexo</label>
                  <select id="inputState" class="form-control">
                    <option selected>Masculino</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="nascimento">Nascimento</label>
                  <input type="date" class="form-control" id="nascimento">
                </div>
                <div class="form-group col-md-5">
                  <label for="nome_mae">Nome da Mãe</label>
                  <input type="text" class="form-control" id="nome_mae">
                </div>
                <div class="form-group col-md-2">
                  <label for="telefone">Telefone</label>
                  <input type="text" class="form-control" id="telefone">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" id="cep">
                </div>
                <div class="form-group col-md-4">
                  <label for="rua">Avenida/Rua</label>
                  <input type="text" class="form-control" id="rua">
                </div>
                <div class="form-group col-md-2">
                  <label for="numero">Número</label>
                  <input type="text" class="form-control" id="numero">
                </div>
                <div class="form-group col-md-2">
                  <label for="quadra">Quadra</label>
                  <input type="text" class="form-control" id="quadra">
                </div>
                <div class="form-group col-md-2">
                  <label for="lote">Lote</label>
                  <input type="text" class="form-control" id="lote">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="complemento">Complemento</label>
                  <input type="text" class="form-control" id="complemento">
                </div>
                <div class="form-group col-md-4">
                  <label for="bairoo">Bairro</label>
                  <input type="text" class="form-control" id="bairro">
                </div>
                <div class="form-group col-md-2">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" id="cidade">
                </div>
                <div class="form-group col-md-1">
                  <label for="uf">UF</label>
                  <input type="text" class="form-control" id="uf">
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
    
  <button type="button" class="btn" data-toggle="modal" data-target="#modalExcluir">Excluir paciente</button>

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
    
  <button type="button" class="btn" data-toggle="modal" data-target="#modalAtualizar">Atualizar paciente</button>

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
    
  <button type="button" class="btn" data-toggle="modal" data-target="#modalSucesso">Sucesso</button>

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
        axios.post('./api/pacientes', {
          cpf : this.cpf,
          nome : this.nome,
          rg : this.rg,
          cartao_sus : this.cartao_sus,
          sexo : this.sexo,
          nascimento : this.nascimento,
          nome_mae : this.nome_mae,
          telefone : this.telefone,
          cep : this.cep,
          rua : this.rua,
          numero : this.numero,
          quadra : this.quadra,
          lote : this.lote,
          complemento : this.complemento,
          bairro : this.bairro,
          cidade : this.cidade,
          uf : this.uf,
        });
      }
    }
  }


</script>


<style>
  body {
      margin-top: 10px;
  }
</style>