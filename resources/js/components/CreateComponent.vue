<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

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
                            <button type="submit" @click.prevent="salvaCarro" class="btn btn-primary">Cadastrar</button>
                        </form>
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
            marca: '',
            modelo: '',
            ano: '',
            placa: '',
            categoria: '',
            preco: ''
        }
    },
    mounted() {
        console.log('Component mounted.')
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
            }).then(response => console.log(response));
        }
    }
}
</script>
