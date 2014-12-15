<canvas id="myChart" width="300" height="500"></canvas>
<script src="./Chart.js-master/Chart.js"></script>


<script>
   
  //alert(<?php echo $x?>);
  //alert(111);
       var data = {
            
                    labels : [<?php echo $x?>],
                    datasets : [
                            {
                                    fillColor : "rgba(20,20,220,0.5)",
                                    strokeColor : "rgba(20,20,220,1)",
                                    data : [<?php echo $y?>]
                            },
                    ]
            } 
var ctx = document.getElementById("myChart").getContext("2d"); 
var myNewChart = new Chart(ctx).Bar(data);//new Chart(ctx).PolarArea(data);
</script>
