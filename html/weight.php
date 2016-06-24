<?php require 'health_header.php';?>
<div>
    <div class="row">
        <div class="col-md-8">
            <div id="barweight" class="diagram"></div>
            <script language="JavaScript">
            <?php $result=mysqli_query($con,"select * from weight where older_id=$older_id order by date limit 7");
                                while($row=mysqli_fetch_array($result)){
                                    $datearr[]=$row['date'];
                                    $timearr[]=(float)$row['weight'];
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
                        text: '体重记录图'   
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
                        text: '体重 (kg)'
                    },
                    legend :{
                        enabled: false
                    }
                };

                var tooltip = {
                 pointFormat: 'Weight: <b>{point.y:.1f} kg</b>',
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
            $('#barweight).highcharts(json);
        });
                            </script>
                        </div> 
                        <div class="col-md-4">
                            <div class="row search">
                                <label>起始时间:</label>
                                <input type="date" name="start-time" class="form-control">
                                <label>结束时间:</label>
                                <input type="date" name="end-time" class="form-control">
                                <button type="button" class="btn btn-default">查询</button>
                            </div>
                            <div class="row standard">
                                <h>BMI指标</h>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>健康体重</td>
                                            <td>18.5--24.9</td>
                                        </tr>
                                        <tr>
                                            <td>偏瘦</td>
                                            <td><18.5</td>
                                        </tr>
                                        <tr>
                                            <td>偏重</td>
                                            <td>25.0--29.9</td>
                                        </tr>
                                        <tr>
                                            <td>偏胖</td>
                                            <td>30.0--34.9</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row standard">
                                <h>健康意见</h>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>我也不知道应该对你说点什么我也不知道应该对你说点什么我也不知道应该对你说点什么</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>                      
                    </div>
                </div>
                <?php require 'health_footer.php';?>