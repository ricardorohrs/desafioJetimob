<script>
import { Bar } from "vue-chartjs";

export default {
    extends: Bar,
    mounted() {
        this.renderChart(
            {
                labels: [
                    '20k',
                    '30k',
                    '40k',
                    '50k',
                    '60k',
                    '70k',
                    '80k',
                    '90k',
                    '100k'
                ],
                datasets: [
                    {
                        label: "Quantidade por preço",
                        backgroundColor: "#f87979",
                        data: [40, 20, 12, 39, 10, 40, 39, 40, 20, 12, 11]
                    }
                ]
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "Preço"
                }
            }
        );
    }
};
</script>
