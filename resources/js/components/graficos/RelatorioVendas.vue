<script>
import { Pie } from "vue-chartjs";

export default {
    props: ['vendido', 'disponivel'],
    extends: Pie,
    mounted() {
        this.renderChart(
            {
                labels: ["Vendido", "Disponível"],
                datasets: [
                    {
                        backgroundColor: ['#657F53', '#7DCC48'],
                        data: [this.vendido, this.disponivel]
                    }
                ]
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "VENDAS"
                }
            }
        );
    }
};
</script>
