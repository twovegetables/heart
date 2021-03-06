<?php require 'health_header.php';?>
<div>
    <div class="row">
        <div class="col-md-8">
            <div id="barsleep" class="diagram"></div>
            <script language="JavaScript">
                <?php 
                if(isset($_GET['end-time'])){
                    $end_time=$_GET['end-time'];
                }else
                    $end_time=date('Y-m-d');
                if(isset($_GET['start-time']))
                {
                    $start_time=$_GET['start-time'];
                    $result=mysqli_query($con,"select * from sleeptime where older_id=$older_id and date>='$start_time' and date<='$end_time' order by date");
                }else{
                    $result=mysqli_query($con,"select * from sleeptime where older_id=$older_id order by date desc limit 7");
                }
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
<div class="col-md-4">
    <div class="row search">
        <form action="sleep.php" method="get">
            <label>起始时间:</label>
            <input type="date" name="start-time" class="form-control" value="$start_time">
            <label>结束时间:</label>
            <input type="date" name="end-time" class="form-control" value="$end_time">
            <button type="submit" class="btn btn-default">查询</button>
        </form>
    </div>
    <div class="row standard">
        <h>诊断意见</h>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td>心率</td>
                    <td>收缩压131--139mmHg，舒张压81--89mmHg</td>
                </tr>
                <tr>
                    <td>体温</td>
                    <td>收缩压130--90mmHg，舒张压60--80mmHg</td>
                </tr>
                <tr>
                    <td>体重</td>
                    <td>收缩压≥140mmHg 或舒张压≥90mmHg</td>
                </tr>
                <tr>
                    <td>血压</td>
                    <td>收缩压≤90mmHg 或舒张压≤60 mmHg</td>
                </tr>
                <tr>
                    <td>血糖</td>
                    <td>收缩压≤90mmHg 或舒张压≤60 mmHg</td>
                </tr>
                <tr>
                    <td>血氧</td>
                    <td>收缩压≤90mmHg 或舒张压≤60 mmHg</td>
                </tr>
                <tr>
                    <td>睡眠时间</td>
                    <td>收缩压≤90mmHg 或舒张压≤60 mmHg</td>
                </tr>
            </tbody>
        </table>
        <h>综合意见</h>
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <td>收缩压131--139mmHg，舒张压81--89mmHg</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>                      
<?php require 'health_footer.php';?>