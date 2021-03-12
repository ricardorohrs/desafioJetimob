<script>
import { Pie } from "vue-chartjs";

export default {
    extends: Pie,
    mounted() {
        this.renderChart(
            {
                labels: ["Novo", "Seminovo", "Usado"],
                datasets: [
                    {
                        backgroundColor: ['#7DCC48', '#657F53', '#CAFFA7'],
                        data: [40, 30, 30]
                    }
                ]
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "CATEGORIA"
                }
            }
        );
    },
    created() {
        axios.get('relatorios').then((res) => console.log(res.data));
    }
};
</script>
