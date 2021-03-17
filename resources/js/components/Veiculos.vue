<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">

                <div class="row justify-content-start">
                    <div class="cadastrar">
                        <ul>
                            <button type="button" class="botao btn btn-success" data-toggle="modal" data-target="#criarVeiculo">
                                Cadastrar Veículo
                            </button>
                        </ul>
                    </div>
                    <div class="buscar">
                        <ul>
                            <button type="button" class="botao btn btn-success" data-toggle="modal" data-target="#busca">
                                Buscar Veículo
                            </button>
                        </ul>
                    </div>
                    <div class="historico">
                        <ul>
                            <button type="button" class="botao btn btn-success" data-toggle="modal" data-target="#historico">
                                Histórico
                            </button>
                        </ul>
                    </div>

                </div>
            </div>

        <!-- Modal de criação -->
            <div class="modal fade" id="criarVeiculo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h5 class="modal-title" >Cadastrar Veículo</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        </div>
                        <!--  Cria carro-->
                        <div class="modal-body">
                            <div class="card-body">
                                <form enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="marca">Marca</label>
                                        <input type="text" class="form-control" name="marca" id="marca" v-model="marca">
                                    </div>

                                    <div class="form-group">
                                        <label for="modelo">Modelo</label>
                                        <input id="modelo" type="text" class="form-control" v-model="modelo">
                                    </div>

                                    <div class="form-group">
                                        <label for="ano">Ano</label>
                                        <input id="ano" type="number" class="form-control" v-model="ano">
                                    </div>

                                    <div class="form-group">
                                        <label for="placa">Placa</label>
                                        <input id="placa" type="text" placeholder="XXX-0000" class="form-control" v-model="placa">
                                    </div>

                                    <div class="form-group">
                                        <label for="categoria">Categoria</label>
                                        <select id="categoria" class="form-control" v-model="categoria">
                                            <option>Novo</option>
                                            <option>Seminovo</option>
                                            <option>Usado</option>
                                        </select>
                                    </div>

                                    <label for="preco">Preço</label>
                                    <div class="form-group input-group mb-3">
                                        <span class="input-group-text">R$</span>
                                        <input id="preco" type="text" class="form-control" v-model="preco">
                                        <span class="input-group-text">,00</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="cambio">Câmbio</label>
                                        <select id="cambio" class="form-control" v-model="cambio">
                                            <option>Automático</option>
                                            <option>Manual</option>
                                        </select>
                                    </div>

                                    <label for="quilometragem">Quilometragem</label>
                                    <div class="form-group input-group mb-3">
                                        <input id="quilometragem" type="text" class="form-control" v-model="quilometragem">
                                        <span class="input-group-text">Km</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="motor">Motor</label>
                                        <input id="motor" type="text" class="form-control" v-model="motor">
                                    </div>

                                    <div class="form-group">
                                        <label for="portas">Portas</label>
                                        <select id="portas" class="form-control" v-model="portas">
                                            <option>2</option>
                                            <option>4</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="combustivel">Combustível</label>
                                        <select id="combustivel" class="form-control" v-model="combustivel">
                                            <option>Gasolina</option>
                                            <option>Etanol</option>
                                            <option>Diesel</option>
                                            <option>Flex</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="cor">Cor</label>
                                        <input id="cor" type="text" class="form-control" v-model="cor">
                                    </div>

                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <textarea id="descricao" type="text" class="form-control" v-model="descricao"></textarea>
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
                                        <button
                                            type="submit"
                                            @click.prevent="store"
                                            data-toggle="modal"
                                            data-target="#criacao"
                                            class="btn btn-success">Cadastrar</button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim do modal de criação -->

            <!-- Lista veículos cadastrados -->
            <div class="col-md-12">
                <div class="card d-block">
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
                                    <th scope="col">Vendido?</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="carro in carros.data" :key="carro.id">
                                    <td class="text-capitalize">{{ carro.marca }}</td>
                                    <td class="text-capitalize">{{ carro.modelo }}</td>
                                    <td>{{ carro.ano }}</td>
                                    <td>{{ carro.placa }}</td>
                                    <td>{{ carro.categoria }}</td>
                                    <td>R$ {{ carro.preco }},00</td>
                                    <td>
                                        <a :href="'/veiculos/' + carro.id"
                                            class="btn btn-outline-success bi bi-eye-fill"
                                            title="Ver mais">
                                        </a>
                                        <button type="button"
                                                @click="edit(carro.id)"
                                                data-toggle="modal"
                                                data-target="#editaVeiculo"
                                                class="btn btn-outline-dark bi bi-pencil-fill"
                                                title="Editar">
                                        </button>
                                        <button type="button"
                                           @click="destroy(carro.id)"
                                           class="btn btn-outline-danger bi bi-trash-fill"
                                           data-toggle="modal"
                                           data-target="#modalExclusao"
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
                                    <td v-if="carro.venda != null" title="Data e hora da venda">Sim</td>
                                    <td v-else title="Data e hora da venda">Não</td>

                                </tr>
                            </tbody>
                        </table>

                        <pagination :data="carros" @pagination-change-page="getResults"></pagination>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal de edição -->
        <div class="modal fade" id="editaVeiculo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h5 class="modal-title">Editar veículo  #{{ this.id }}</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="editMarca">Marca</label>
                                <input id="editMarca" type="text" class="form-control" name="marca" v-model="editMarca">
                            </div>

                            <div class="form-group">
                                <label for="editModelo">Modelo</label>
                                <input id="editModelo" type="text" class="form-control" v-model="editModelo">
                            </div>

                            <div class="form-group">
                                <label for="editAno">Ano</label>
                                <input id="editAno" type="number" class="form-control" v-model="editAno">
                            </div>

                            <div class="form-group">
                                <label for="editPlaca">Placa</label>
                                <input id="editPlaca" type="text" placeholder="XXX-0000" class="form-control" v-model="editPlaca">
                            </div>

                            <div class="form-group">
                                <label for="editCategoria">Categoria</label>
                                <select id="editCategoria" class="form-control" v-model="editCategoria">
                                    <option>Novo</option>
                                    <option>Seminovo</option>
                                    <option>Usado</option>
                                </select>
                            </div>

                            <label for="editPreco">Preço</label>
                            <div class="form-group input-group mb-3">
                                <span class="input-group-text">R$</span>
                                <input id="editPreco" type="text" class="form-control" v-model="editPreco">
                            </div>

                            <div class="form-group">
                                <label for="editCambio">Câmbio</label>
                                <select id="editCambio" class="form-control" v-model="editCambio">
                                    <option>Automático</option>
                                    <option>Manual</option>
                                </select>
                            </div>

                            <label for="editQuilometragem">Quilometragem</label>
                            <div class="form-group input-group mb-3">
                                <input id="editQuilometragem" type="text" class="form-control" v-model="editQuilometragem">
                                <span class="input-group-text">Km</span>
                            </div>

                            <div class="form-group">
                                <label for="editMotor">Motor</label>
                                <input id="editMotor" type="text" class="form-control" v-model="editMotor">
                            </div>

                            <div class="form-group">
                                <label for="editPortas">Portas</label>
                                <select id="editPortas" class="form-control" v-model="editPortas">
                                    <option>2</option>
                                    <option>4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="editCombustivel">Combustível</label>
                                <select id="editCombustivel" class="form-control" v-model="editCombustivel">
                                    <option>Gasolina</option>
                                    <option>Etanol</option>
                                    <option>Diesel</option>
                                    <option>Flex</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="editCor">Cor</label>
                                <input id="editCor" type="text" class="form-control" v-model="editCor">
                            </div>

                            <div class="form-group">
                                <label for="editDescricao">Descrição</label>
                                <textarea id="editDescricao" type="text" class="form-control" v-model="editDescricao"></textarea>
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
        <!-- Fim do modal de edição -->

        <!-- Modal de confirmação de edição concluída -->
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
        <!-- Fim do modal de confirmação de edição concluída -->

        <!-- Modal de confirmação de exclusão com sucesso -->
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
        <!-- Fim do modal de confirmação de exclusão com sucesso -->

        <!-- Modal de confirmação de marcação de venda -->
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
        <!-- Fim do modal de confirmação de marcação de venda -->

        <!-- Modal de busca de veículos -->
        <div class="modal fade modBusca" id="busca" tabindex="-1">
            <div class="modal-dialog buscarModal">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Buscar veículo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <input autocomplete="off" type="text" id="search" class="" placeholder="Buscar por marca" v-model="keywords">
                        <span><i class="bi bi-search"></i></span>
                        <ul v-if="results.length > 0 && keywords != ''">
                            <a :href="'/veiculos/' + result.id" class="text-capitalize busca form-control" v-for="result in results" :key="result.id">
                                &ensp;#{{ result.id }} - {{ result.marca }} - {{ result.modelo }} - {{ result.ano }}
                            </a>
                        </ul>
                        <ul v-else>
                            <p class="d-flex mt-4">Sua busca não retornou nenhum veículo!</p>
                        </ul>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim do modal de busca por veículos -->

        <!-- Modal de criação com sucesso -->
        <div class="modal fade" id="criacao" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Novo cadastro de veículo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <p>Veículo cadastrado com sucesso!</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim do modal de criação com sucesso -->

        <!-- Modal de histórico -->
        <div class="modal fade" id="historico" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Histórico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body ml-4">
                        <tbody>
                            <tr v-for="carro in carros.data" :key="carro.id">
                                <li class="card px-4 mt-2 py-2">O veículo #{{carro.id}} foi cadastrado em {{carro.created_at}}</li>
                                <li class="card px-4 mt-2 py-2">O veículo #{{carro.id}} foi atualizado em {{carro.updated_at}}</li>
                                <li v-if="carro.venda != null" class="card px-4 mt-2 py-2">O veículo #{{carro.id}} foi vendido em {{carro.venda}}</li>
                            </tr>
                        </tbody>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim do modal de histórico -->

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
            created_at: '',
            updated_at: '',
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
            editVenda: '',
            keywords: null,
            results: []
        }
    },
    watch: {
        keywords() {
            this.fetch();
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
               motor: this.editMotor,
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
        fetch() {
            axios.get('/search', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data);
        },
        relatorios() {
            axios.get('/relatorios');
        }
    }
}
</script>
