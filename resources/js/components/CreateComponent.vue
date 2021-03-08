<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                    <!--        Modal de criação-->
                    <!-- Button trigger modal -->
                    <div class="row justify-content-between">
                        <ul>
                            <div class="cadastrar" style="margin-left: -25px">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#criarVeiculo">
                                    Cadastrar Veículo
                                </button>
                            </div>
                        </ul>
                        <ul>
                            <div class="busca">
                                <form class="form-inline">
                                    <input id="search" class="form-control" type="search" placeholder="Digite informações sobre o veículo">
                                    <button class="btn btn-outline-success" type="submit">Buscar veículo</button>
                                </form>
                            </div>
                        </ul>
                    </div>


                <!-- Modal -->
                    <div class="modal fade" id="criarVeiculo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Cadastrar Veículo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--                    Cria carro-->
                                    <div class="card-body">
                                        <form>
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
                                                <input type="text" class="form-control" v-model="placa">
                                            </div>
                                            <div class="form-group">
                                                <label>Categoria</label>
                                                <select class="form-control" v-model="categoria">
                                                    <option>Novo</option>
                                                    <option>Seminovo</option>
                                                    <option>Usado</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Preço</label>
                                                <input type="text" class="form-control" v-model="preco">
                                            </div>
                                            <div class="form-group file">
                                                <label for="formFileMultiple">Imagens</label>
                                                <input class="form-control-file" type="file" id="formFileMultiple" multiple>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                <button data-dismiss="modal" type="submit" @click.prevent="salvaCarro" class="btn btn-primary">Cadastrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                    </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Veículos cadastrados</div>

                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col">Placa</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="carro in carros.data" :key="carro.id">
                                    <td>{{ carro.marca }}</td>
                                    <td>{{ carro.modelo }}</td>
                                    <td>{{ carro.ano }}</td>
                                    <td>{{ carro.placa }}</td>
                                    <td>{{ carro.categoria }}</td>
                                    <td>{{ carro.preco }}</td>
                                    <td>
                                        <button class="btn btn-outline-secondary bi bi-eye-fill"></button>
                                        <button type="button"
                                           @click="deleteCarro(carro.id)"
                                           class="btn btn-outline-danger bi bi-trash-fill"></button>
                                        <button type="button"
                                           @click="editCarro(carro.id)"
                                           data-toggle="modal"
                                           data-target="#staticBackdrop"
                                           class="btn btn-outline-dark bi bi-pencil-fill"></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <pagination :data="carros" @pagination-change-page="getResults"></pagination>

                    </div>
                </div>
            </div>
        </div>

<!--        Modal de edição-->
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
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" @click.prevent="updateCarro" data-dismiss="modal" class="btn btn-primary">Atualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            carros: {},
            id: '',
            marca: '',
            modelo: '',
            ano: '',
            placa: '',
            categoria: '',
            preco: '',
            editMarca: '',
            editModelo: '',
            editAno: '',
            editPlaca: '',
            editCategoria: '',
            editPreco: ''
        }
    },
    mounted() {
        this.getResults();
    },
    methods: {
        salvaCarro() {
            axios.post('salva_carro', {
                marca: this.marca,
                modelo: this.modelo,
                ano: this.ano,
                placa: this.placa,
                categoria: this.categoria,
                preco: this.preco
            }).then(response => {
                this.marca = '';
                this.modelo = '';
                this.ano = '';
                this.placa = '';
                this.categoria = '';
                this.preco = '';
                this.getResults();
            });
        },
        getResults(page = 1) {
            axios.get('all_cars?page=' + page)
                .then(response => {
                    this.carros = response.data;
                });
        },
        editCarro(id) {
            axios.get('edit_carro/' + id)
                .then(response => {
                    this.id = response.data.id;
                    this.editMarca = response.data.marca;
                    this.editModelo = response.data.modelo;
                    this.editAno = response.data.ano;
                    this.editPlaca = response.data.placa;
                    this.editCategoria = response.data.categoria;
                    this.editPreco = response.data.preco;
                });
        },
        updateCarro() {
            axios.put('update_carro', {
               id: this.id,
               marca: this.editMarca,
               modelo: this.editModelo,
               ano: this.editAno,
               placa: this.editPlaca,
               categoria: this.editCategoria,
               preco: this.editPreco
            })
            .then(response => {
                this.getResults();
            });
        },
        deleteCarro(id) {
            axios.delete('delete_carro/' + id)
                .then(response => {
                    this.getResults();
                });
        }
    }
}
</script>
