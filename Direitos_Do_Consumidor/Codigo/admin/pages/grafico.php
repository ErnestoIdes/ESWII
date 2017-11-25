<?php
/**
 * Created by PhpStorm.
 * User: bocam
 * Date: 11/23/2017
 * Time: 1:41 PM
 */



function grafico($tipo,$denuncia,$questoes,$reclamacoes,$users){
    echo "
    <script src=\"../Chart.js/Chart.min.js\"></script>

    <canvas id=\"$tipo\" width=\"400\" height=\"400\"></canvas>
<script>
var ctx = document.getElementById(\"$tipo\").getContext('2d');
var myChart = new Chart(ctx, {
    type: '$tipo',
    data: {
        labels: [\"Denúncias\", \"Reclamações\", \"Sugestões\", \"Usuários\"],
        datasets: [{
            label: '# of Votes',
            data: [".$denuncia.", ".$questoes.", ".$reclamacoes.", ".$users."],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>

    ";
}

?>

<html>
<head>

</head>
<body>



</body>

</html>

