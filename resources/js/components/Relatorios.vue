<template>
    <div class="row">
        <div class="pie graph col-md-4">
            <PieChart :novo="novo" :seminovo="seminovo" :usado="usado"></PieChart>
        </div>
        <div class="bar graph col-md-4">
            <BarChart :gasolina="gasolina" :etanol="etanol" :diesel="diesel" :flex="flex" :gnv="gnv"></BarChart>
        </div>
        <div class="doughnut graph col-md-4">
            <DoughnutChart :automatico="automatico" :manual="manual"></DoughnutChart>
        </div>
    </div>
</template>

<script>
import PieChart from "./graficos/GraficoCategoria.vue";
import BarChart from "./graficos/GraficoCombustivel.vue";
import DoughnutChart from "./graficos/GraficoCambio.vue";

export default {
    props: [
        'novo', 'seminovo', 'usado',
        'gasolina', 'etanol', 'diesel', 'flex', 'gnv',
        'automatico', 'manual',
    ],
    components: {
        PieChart,
        BarChart,
        DoughnutChart,
    },
};
</script>

<style>
.graph {
    margin-top: 60px;
}
</style>

