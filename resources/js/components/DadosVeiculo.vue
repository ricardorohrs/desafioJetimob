<template>
    <div class="container">
        <div class="descricoes">
            <div class="row">

                <div class="col-8 col-sm-10">
                    <h1 title="marca" class="text-capitalize"><strong>{{ marca }}</strong></h1>
                    <br>
                    <h2 title="modelo" class="text-capitalize">{{ modelo }}</h2>
                    <br>
                </div>

            </div>

            <br>

            <div class="row principais justify-content-between">
                <div class="col-lg-2 grow">
                    <span>Ano</span>
                    <br>
                    <strong>{{ ano }}</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Placa</span>
                    <br>
                    <strong v-if="placa != ''">{{ placa }}</strong>
                    <strong v-else>Não informado</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Categoria</span>
                    <br>
                    <strong>{{ categoria }}</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Preço</span>
                    <br>
                    <strong>R$ {{ preco }},00</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Combustível</span>
                    <br>
                    <strong>{{ combustivel }}</strong>
                </div>
            </div>

            <br>
            <br>
            <br>

            <div class="row principais justify-content-between">
                <div class="col-lg-2 grow">
                    <span>Quilometragem</span>
                    <br>
                    <strong v-if="quilometragem != ''">{{ quilometragem }} Km</strong>
                    <strong v-else>Não informado</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Portas</span>
                    <br>
                    <strong>{{ portas }}</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Motor</span>
                    <br>
                    <strong v-if="motor != ''">{{ motor }}</strong>
                    <strong v-else>Não informado</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Câmbio</span>
                    <br>
                    <strong>{{ cambio }}</strong>
                </div>

                <div class="col-lg-2 grow">
                    <span>Cor</span>
                    <br>
                    <strong v-if="cor != ''" class="text-capitalize">{{ cor }}</strong>
                    <strong v-else class="text-capitalize">Não informado</strong>
                </div>
            </div>

            <br>
            <hr>
            <br>

            <div class="row">
                <div class="col-md-10 col-sm-3">
                    <span>Descrição</span>
                    <br>
                    <strong v-if="descricao != ''">{{ descricao }}</strong>
                    <strong v-else>Não informado</strong>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'marca',
        'modelo',
        'ano',
        'placa',
        'categoria',
        'preco',
        'cambio',
        'quilometragem',
        'motor',
        'portas',
        'combustivel',
        'cor',
        'descricao'
    ],
}
</script>
