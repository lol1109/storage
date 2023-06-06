 <script src="<?= base_url('/dist/package/Chart.js') ?>"></script>
 <script type="text/javascript">
     var ctx = document.getElementById('chinfor');
     var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php  
                foreach ($tamu as $dt) {
                    echo "'".$dt->Informasi."', ";
                    }
                 ?>],
            datasets: [{
                label:'data terbesar',
                backgroundColor: [
                    'rgb(255, 99, 132)',  //postingan instagram
                    'rgba(55, 119, 255)',  //Iklan facebook
                    'rgb(60, 179, 113)',  //Iklan instagram
                    'rgb(175, 238, 239)',  //Iklan google
                    'rgb(255, 225, 86)', //pencarian google
                    'rgb(255, 223, 206)', //website
                    'rgb(255, 181, 194)', //brosur
                    'rgb(50, 2, 31)', //marketing freelance
                    'rgb(75, 46, 57)', //youtube
                    'rgb(108, 89, 110)', //teman kantor
                    'rgb(111, 125, 140)', //teman kajian
                    'rgb(119, 160, 169)', //teman suami
                    'rgb(171, 23, 83)', //teman istri 
                    'rgb(83, 89, 154)', //Keluagra/saudara
                    'rgb(6, 141, 157)', //grup wa
                    'rgb(16, 150, 72)', //wa
                    'rgb(73, 67, 72)', //teman konsumen elang
                    ],
                borderColor: [
                    'rgb(44, 51, 51)'
                    ],
                data: [<?php  
                    foreach ($tamu as $dt) {
                    echo $dt->total.", ";
                    }
                    ?>]
            }]
        },
        // Configuration options go here
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
 <h2>Sumber Informasi</h2>
                    <hr>
                    <canvas id="chinfor"></canvas>
                    <p>ini paragraph</p>