


<html>
<head>

</head>

<body>


<div class="col-lg-6">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dc";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sqldenuncia = "SELECT * FROM denuncia";
    $sqlreclamacao = "SELECT * FROM reclamacao";
    $sqlsugestao = "SELECT * FROM sugestao";
    $resultdenuncia = mysqli_query($conn, $sqldenuncia);
    $resultreclamacao= mysqli_query($conn, $sqlreclamacao);
    $resultsugestao = mysqli_query($conn, $sqlsugestao);

    $ndenuncia=mysqli_num_rows($resultdenuncia);
    $nreclamacao=mysqli_num_rows($resultreclamacao);
    $nsugestao=mysqli_num_rows($resultsugestao);



    //    Grafico de Linha
    echo "
                        <canvas id=\"myChart\" ></canvas>
<script>
    var tipo=\"line\"
    var ctx = document.getElementById(\"myChart\").getContext('2d');
    var myChart = new Chart(ctx, {
        type: tipo,
        data: {
            labels: [\"Denúncias\", \"Reclamações\", \"Sugestões\"],
            datasets: [{
                label: '# of Votes',
                data: [".$ndenuncia.", ".$nreclamacao.", ".$nsugestao."],
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



    mysqli_close($conn);
    ?>
</div>
</body>
</html>