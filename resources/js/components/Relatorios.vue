<template>
    <div class="container">
        <div class="row">

            <div class="pie graph col-md-4">
                <PieChart :novo="novo" :seminovo="seminovo" :usado="usado"></PieChart>
            </div>

            <div class="bar graph col-md-4">
                <BarChart :gasolina="gasolina" :etanol="etanol" :diesel="diesel" :flex="flex"></BarChart>
            </div>

            <div class="graph col-md-4">
                <PieVendaChart :vendido="vendido" :disponivel="disponivel"></PieVendaChart>
            </div>

        </div>

        <br>

        <div class="row">

            <div class="doughnut graph col-md-6">
                <DoughnutChart :automatico="automatico" :manual="manual"></DoughnutChart>
            </div>

            <div class="graph col-md-6">
                <DoughnutPortaChart :dois="dois" :quatro="quatro"></DoughnutPortaChart>
            </div>

        </div>
    </div>
</template>

<script>
import PieChart from "./graficos/RelatorioCategoria.vue";
import BarChart from "./graficos/RelatorioCombustivel.vue";
import DoughnutChart from "./graficos/RelatorioCambio.vue";
import PieVendaChart from "./graficos/RelatorioVendas.vue";
import DoughnutPortaChart from "./graficos/RelatorioPortas";

export default {
    props: [
        'novo', 'seminovo', 'usado',
        'gasolina', 'etanol', 'diesel', 'flex',
        'automatico', 'manual',
        'vendido', 'disponivel',
        'dois', 'quatro',
    ],
    components: {
        PieChart,
        BarChart,
        DoughnutChart,
        PieVendaChart,
        DoughnutPortaChart,
    },
};
</script>

<style>
.graph {
    margin-top: 50px;
}
</style>

