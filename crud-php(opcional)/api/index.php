<?php
include("db.php");

$query = "select COUNT(*) as total from usuarios;";
$total = mysqli_query($conn, $query);

$cant_tot = mysqli_fetch_array($total);
$total = $cant_tot['total'];

$queryCu = "select COUNT(*) as cantidad from usuarios GROUP BY usuarios.SEXO;";
$cant_cu = mysqli_query($conn, $queryCu);

$cant_por_sexo = mysqli_fetch_array($cant_cu);
$cant_cu = $cant_por_sexo['cantidad'];

?>

<script type="text/javascript">
    const porcentajeH = <?php echo $cant_cu; ?> * 100 / <?php echo $total; ?>;

    let options = {
        series: [porcentajeH, 100 - porcentajeH],
        chart: {
            width: '100%',
            type: 'pie',
        },
        labels: ['Hombres', 'Mujeres'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    let chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>