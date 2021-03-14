<script>
import { Pie } from "vue-chartjs";

export default {
    props: ['novo', 'seminovo', 'usado'],
    extends: Pie,
    mounted() {
        this.renderChart(
            {
                labels: ["Novo", "Seminovo", "Usado"],
                datasets: [
                    {
                        backgroundColor: ['#7DCC48', '#657F53', '#CAFFA7'],
                        data: [this.novo, this.seminovo, this.usado]
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
    }
};
</script>
