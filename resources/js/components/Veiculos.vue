<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">

                <div class="row justify-content-start">
                    <div class="cadastrar">
                        <ul>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#criarVeiculo">
                            Cadastrar Veículo
                            </button>
                        </ul>
                    </div>
                    <div class="busca">
                        <ul>
                            <form class="form-inline">
                                <input id="search" class="form-control" type="search" placeholder="Digite informações sobre o veículo">
                                <button class="btn btn-outline-success" type="submit">Buscar veículo</button>
                            </form>
                        </ul>
                    </div>
                </div>


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
                            <!--                    Cria carro-->
                            <div class="modal-body">
                                <div class="card-body">
                                    <form enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input type="text" class="form-control" name="marca" id="marca" v-model="marca">
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
                                            <label>Câmbio</label>
                                            <select class="form-control" v-model="cambio">
                                                <option>Automático</option>
                                                <option>Manual</option>
                                            </select>
                                        </div>
                                        <label>Quilometragem</label>
                                        <div class="form-group input-group mb-3">
                                            <input type="text" class="form-control" v-model="quilometragem">
                                            <span class="input-group-text">Km</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Motor</label>
                                            <input type="text" class="form-control" v-model="motor">
                                        </div>
                                        <div class="form-group">
                                            <label>Portas</label>
                                            <select class="form-control" v-model="portas">
                                                <option>2</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Combustível</label>
                                            <select class="form-control" v-model="combustivel">
                                                <option>Gasolina</option>
                                                <option>Etanol</option>
                                                <option>Diesel</option>
                                                <option>Flex</option>
                                                <option>GNV</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cor</label>
                                            <input type="text" class="form-control" v-model="cor">
                                        </div>
                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <textarea type="text" class="form-control" v-model="descricao"></textarea>
                                        </div>
                                        <div class="form-group file">
                                            <label for="image">Imagens</label>
                                            <input class="form-control-file" type="file" name="image" id="image" multiple>
                                        </div>
                                        <div class="modal-footer">
                                            <button
                                                type="button"
                                                class="btn btn-secondary"
                                                data-dismiss="modal">Fechar</button>
<!--                                            data-dismiss="modal"
                                                onclick="alert('Veículo cadastrado!')"-->
                                            <button
                                                type="submit"
                                                @click.prevent="store"
                                                class="btn btn-success">Cadastrar</button>
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

                    <div class="card-body table-responsive">
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
                                    <th scope="col">Vendido</th>
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
                                        <a :href="'/veiculos/' + carro.id"
                                            class="btn btn-outline-success bi bi-eye-fill"
                                            title="Ver mais">
                                        </a>
                                        <button type="button"
                                                @click="edit(carro.id)"
                                                data-toggle="modal"
                                                data-target="#staticBackdrop"
                                                class="btn btn-outline-dark bi bi-pencil-fill"
                                                title="Editar">
                                        </button>
                                        <button type="button"
                                           @click="destroy(carro.id)"
                                           class="btn btn-outline-danger bi bi-trash-fill"
                                           data-toggle="modal"
                                           data-target="#modalEdicao"
                                           title="Excluir">
                                        </button>
                                        <button type="button"
                                            @click="marcaVenda(carro.id)"
                                            class="btn btn-success bi bi-bag-check-fill"
                                            data-toggle="modal"
                                            data-target="#modalVenda"
                                            title="Vendido">
                                        </button>
                                    </td>
                                    <td title="Data e hora da venda">{{carro.venda}}</td>
                                </tr>
                            </tbody>
                        </table>

                        <pagination :data="carros" @pagination-change-page="getResults"></pagination>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de edição -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Editar veículo  #{{ this.id }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control" name="marca" v-model="editMarca">
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
                                <input type="text" placeholder="XXX-0000" class="form-control" v-model="editPlaca">
                            </div>
                            <div class="form-group">
                                <label>Categoria</label>
                                <select class="form-control" v-model="editCategoria">
                                    <option>Novo</option>
                                    <option>Seminovo</option>
                                    <option>Usado</option>
                                </select>
                            </div>
                            <label>Preço</label>
                            <div class="form-group input-group mb-3">
                                <span class="input-group-text">R$</span>
                                <input type="text" class="form-control" v-model="editPreco">
                            </div>
                            <div class="form-group">
                                <label>Câmbio</label>
                                <select class="form-control" v-model="editCambio">
                                    <option>Automático</option>
                                    <option>Manual</option>
                                </select>
                            </div>
                            <label>Quilometragem</label>
                            <div class="form-group input-group mb-3">
                                <input type="text" class="form-control" v-model="editQuilometragem">
                                <span class="input-group-text">Km</span>
                            </div>
                            <div class="form-group">
                                <label>Motor</label>
                                <input type="text" class="form-control" v-model="editMotor">
                            </div>
                            <div class="form-group">
                                <label>Portas</label>
                                <select class="form-control" v-model="editPortas">
                                    <option>2</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Combustível</label>
                                <select class="form-control" v-model="editCombustivel">
                                    <option>Gasolina</option>
                                    <option>Etanol</option>
                                    <option>Diesel</option>
                                    <option>Flex</option>
                                    <option>GNV</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cor</label>
                                <input type="text" class="form-control" v-model="editCor">
                            </div>
                            <div class="form-group">
                                <label>Descrição</label>
                                <textarea type="text" class="form-control" v-model="editDescricao"></textarea>
                            </div>
                            <div class="form-group file">
                                <label for="image">Imagens</label>
                                <input class="form-control-file" type="file" name="image" multiple>
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
                            @click.prevent="update"
                            class="btn btn-success"
                            data-toggle="modal"
                            data-target="#modalEdicao">Atualizar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalEdicao" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edição concluída!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Veículo atualizado com sucesso!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalExclusao" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Excluir</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Veículo excluído com sucesso!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalVenda" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Vendido!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Veículo marcado como vendido!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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
            descricao: '',
            image: '',
            quilometragem: '',
            cor: '',
            portas: '',
            cambio: '',
            combustivel: '',
            motor: '',
            venda: '',
            editMarca: '',
            editModelo: '',
            editAno: '',
            editPlaca: '',
            editCategoria: '',
            editPreco: '',
            editDescricao: '',
            editImage: '',
            editQuilometragem: '',
            editCor: '',
            editPortas: '',
            editCambio: '',
            editCombustivel: '',
            editMotor: '',
        }
    },
    mounted() {
        this.getResults();
    },
    methods: {
        store() {
            axios.post('store', {
                marca: this.marca,
                modelo: this.modelo,
                ano: this.ano,
                placa: this.placa.toUpperCase(),
                categoria: this.categoria,
                preco: this.preco,
                descricao: this.descricao,
                image: this.image,
                quilometragem: this.quilometragem,
                cor: this.cor,
                portas: this.portas,
                cambio: this.cambio,
                combustivel: this.combustivel,
                motor: this.motor,
            }).then(response => {
                this.marca = '';
                this.modelo = '';
                this.ano = '';
                this.placa = '';
                this.categoria = '';
                this.preco = '';
                this.descricao = '';
                this.image = '';
                this.quilometragem = '';
                this.cor = '';
                this.portas = '';
                this.cambio = '';
                this.combustivel = '';
                this.motor = '';
                this.getResults();
            });
        },
        getResults(page = 1) {
            axios.get('index?page=' + page)
                .then(response => {
                    this.carros = response.data;
                });
        },
        edit(id) {
            axios.get('edit/' + id)
                .then(response => {
                    this.id = response.data.id;
                    this.editMarca = response.data.marca;
                    this.editModelo = response.data.modelo;
                    this.editAno = response.data.ano;
                    this.editPlaca = response.data.placa.toUpperCase();
                    this.editCategoria = response.data.categoria;
                    this.editPreco = response.data.preco;
                    this.editDescricao = response.data.descricao;
                    this.editQuilometragem = response.data.quilometragem;
                    this.editCor = response.data.cor;
                    this.editPortas = response.data.portas;
                    this.editCambio = response.data.cambio;
                    this.editCombustivel = response.data.combustivel;
                    this.editMotor = response.data.motor;
                });
        },
        update() {
            axios.put('update', {
               id: this.id,
               marca: this.editMarca,
               modelo: this.editModelo,
               ano: this.editAno,
               placa: this.editPlaca.toUpperCase(),
               categoria: this.editCategoria,
               preco: this.editPreco,
               descricao: this.editDescricao,
               image: this.editImage,
               quilometragem: this.editQuilometragem,
               cor: this.editCor,
               portas: this.editPortas,
               cambio: this.editCambio,
               combustivel: this.editCombustivel,
               motor: this.editMotor
            })
            .then(response => {
                this.getResults();
            });
        },
        destroy(id) {
            axios.delete('destroy/' + id)
                .then(response => {
                    this.getResults();
                });
        },
        marcaVenda(id) {
            axios.get('marcaVenda/' + id)
                .then(response => {
                    this.getResults();
                });
        },
    }
}
</script>
