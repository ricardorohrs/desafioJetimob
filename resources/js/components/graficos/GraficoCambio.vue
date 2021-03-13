<script>
import { Doughnut } from "vue-chartjs";

export default {
    props: ['automatico', 'manual'],
    extends: Doughnut,
    mounted() {
        this.renderChart(
            {
                labels: ["Automático", "Manual"],
                datasets: [
                    {
                        backgroundColor: ['#657F53', '#CAFFA7'],
                        data: [this.automatico, this.manual]
                    }
                ]
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "CÂMBIO"
                }
            }
        );
    }
};
</script>
