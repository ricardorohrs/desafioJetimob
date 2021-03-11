<!-- Modal de criação -->
<div class="modal fade" id="criarVeiculo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel2">Cadastrar Veículo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="card-body">
                <form enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Marca</label>
                        <input type="text" class="form-control" v-model="marca">
                    </div>
                    <div class="form-group">
                        <label>Modelo</label>
                        <input type="text" class="form-control" v-model="modelo">
                    </div>
                    <div class="form-group">
                        <label>Ano</label>
                        <input type="number" class="form-control" v-model="ano">
                    </div>
                    <div class="form-group">
                        <label>Placa</label>
                        <input type="text" placeholder="XXX-0000" class="form-control" v-model="placa">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control" v-model="categoria">
                            <option>Novo</option>
                            <option>Seminovo</option>
                            <option>Usado</option>
                        </select>
                    </div>
                    <label>Preço</label>
                    <div class="form-group input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="text" class="form-control" v-model="preco">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea type="text" class="form-control" v-model="descricao"></textarea>
                    </div>
                    <div class="form-group file">
                        <label for="image" name="image">Imagens</label>
                        <input class="form-control-file" type="file" name="image" id="image" multiple>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">Fechar</button>
<!--                         data-dismiss="modal"
                             onclick="alert('Veículo cadastrado!')"-->
                        <button
                            type="submit"
                            @click.prevent="salvaCarro"
                            class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
