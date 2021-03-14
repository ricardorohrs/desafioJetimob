<script>
import { Bar } from "vue-chartjs";

export default {
    props: ['gasolina', 'etanol', 'diesel', 'flex'],
    extends: Bar,
    mounted() {
        this.renderChart(
            {
                labels: ["Gasolina", "Etanol", "Diesel", "Flex"],
                datasets: [
                    {
                        label: "Quantidade por tipo",
                        backgroundColor: ['#7DCC48', '#657F53', '#75BF43', '#9CFF5A'],
                        data: [this.gasolina, this.etanol, this.diesel, this.flex]
                    }
                ]
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                title: {
                    display: true,
                    text: "COMBUSTÍVEL"
                }
            }
        );
    }
};
</script>
