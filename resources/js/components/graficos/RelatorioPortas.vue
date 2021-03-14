<script>
import { Doughnut } from "vue-chartjs";

export default {
    props: ['dois', 'quatro'],
    extends: Doughnut,
    mounted() {
        this.renderChart(
            {
                labels: ["2", "4"],
                datasets: [
                    {
                        backgroundColor: ['#657F53', '#CAFFA7'],
                        data: [this.dois, this.quatro]
                    }
                ]
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "PORTAS"
                }
            }
        );
    }
};
</script>
