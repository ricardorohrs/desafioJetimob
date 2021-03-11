<!-- Modal de edição -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label>Marca</label>
                    <input type="text" class="form-control" v-model="editMarca">
                </div>
                <div class="form-group">
                    <label>Modelo</label>
                    <input type="text" class="form-control" v-model="editModelo">
                </div>
                <div class="form-group">
                    <label>Ano</label>
                    <input type="number" class="form-control" v-model="editAno">
                </div>
                <div class="form-group">
                    <label>Placa</label>
                    <input type="text" class="form-control" v-model="editPlaca">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" v-model="editCategoria">
                        <option>Novo</option>
                        <option>Seminovo</option>
                        <option>Usado</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Preço</label>
                    <input type="text" class="form-control" v-model="editPreco">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <textarea type="text" class="form-control" v-model="editDescricao"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal">Fechar</button>
            <button
                type="submit"
                data-dismiss="modal"
                @click.prevent="updateCarro"
                class="btn btn-primary"
                onclick="alert('Veículo atualizado!')">Atualizar</button>
        </div>
    </div>
</div>
</div>
