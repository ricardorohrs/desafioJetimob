<script>
import { Line } from "vue-chartjs";

export default {
    extends: Line,
    mounted() {
        this.renderChart(
            {
                labels: [
                    "2000",
                    "2001",
                    "2002",
                    "2003",
                    "2004",
                    "2005",
                    "2006",
                    "2007",
                    "2008",
                    "2009",
                    "2010",
                ],
                datasets: [
                    {
                        label: "Quantidade por ano",
                        data: [2, 10, 5, 9, 0, 6, 12, 6, 1, 15, 7],
                        backgroundColor: "transparent",
                        borderColor: "rgba(1, 116, 188, 0.50)",
                        pointBackgroundColor: "rgba(171, 71, 188, 1)"
                    }
                ]
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "Anos"
                }
            }
        );
    }
};
</script>
