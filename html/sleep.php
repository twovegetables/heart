<?php require 'health_header.php';?>
                <div>
                    <div class="row">
                        <div class="col-md-8">
                            <div id="barsleep" class="diagram"></div>
                            <script language="JavaScript">
                                <?php $result=mysqli_query($con,"select * from sleeptime where older_id=$older_id order by date limit 7");
                                while($row=mysqli_fetch_array($result)){
                                    $datearr[]=$row['date'];
                                    $timearr[]=(int)$row['sleeptime'];
                                }
                                $datejson=json_encode($datearr);
                                $timejson=json_encode($timearr);
                                ?>
                                $(document).ready(function() {  
                                    var chart = {
                                        type: 'column',
                                        margin: [50,50,100,80]
                                    };

                                    var title = {
                                        text: '睡眠时间记录表'   
                                    };
                                    var xAxis = {
                                        categories: <?php echo $datejson;?>,
                                        labels: {
                                           rotation: -45,
                                           align: 'right',
                                           style: {
                                            fontSize: '13px',
                                            fontFamily: 'Verdana, sans-serif'
                                        }
                                    }
                                };

                                var yAxis = {
                                    min: 0,
                                    title: {
                                        text: 'Time (hours)'
                                    },
                                    legend :{
                                        enabled: false
                                    }
                                };

                                var tooltip = {
                                   pointFormat: 'Time for sleep: <b>{point.y:.1f} hours</b>',
                               };


                               var series= [{
                                name: '<?php echo $older_name;?>',      
                                data: <?php echo $timejson;?>
                            }];  

                            var json = {};
                            json.chart = chart;
                            json.title = title;                                    
                            json.tooltip = tooltip;
                            json.xAxis = xAxis;
                            json.yAxis = yAxis;  
                            json.series = series;
                            $('#barsleep').highcharts(json);
                        });
                    </script>
                </div> 
<?php require 'health_footer.php';?>