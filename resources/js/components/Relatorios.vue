<template>
    <div class="row">
        <div class="pie graph col-md-4">
            <PieChart/>
        </div>

        <div class="bar graph col-md-4">
            <BarChart/>
        </div>

        <div class="line graph col-md-4">
            <LineChart/>
        </div>
    </div>
</template>

<script>
import PieChart from "./graficos/GraficoCategoria.vue";
import BarChart from "./graficos/GraficoPreco.vue";
import LineChart from "./graficos/GraficoAnos.vue";

export default {
    components: {
        PieChart,
        BarChart,
        LineChart
    },
};
</script>

<style>
.graph {
    margin-top: 60px;
}
</style>

