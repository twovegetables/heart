<?php require 'health_header.php';?>
                <div>
                    <div >
                        <div class="row">
                            <div class="col-md-8">
                                <div id="entirechart" class="diagram"></div>
                                <script language="JavaScript">
                                    $(document).ready(function() {  
                                        var chart = {
                                            polar: true,
                                            type: 'line'      
                                        };

                                        var title = {
                                            text: '综合健康体征'   
                                        };

                                        var pane = {
                                            size: '100%'
                                        };

                                        var xAxis = {
                                            categories: ['心率', '体温', '体重', '血压', '血糖', '血氧'],
                                            tickmarkPlacement: 'on',
                                            lineWidth: 0
                                        };

                                        var yAxis = {
                                            gridLineInterpolation: 'polygon',
                                            lineWidth: 0,
                                            min: 0
                                        };

                                        var tooltip = {
                                            shared: true,
                                            pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
                                        };

                                        var legend = {
                                            align: 'right',
                                            verticalAlign: 'top',
                                            y: 70,
                                            layout: 'vertical'
                                        };

                                        var series= [{
                                           name: '李奶奶',
                                           data: [80, 98, 72, 84, 77, 54],
                                           pointPlacement: 'on'
                                       }]; 

                                       var json = {};
                                       json.chart = chart;
                                       json.title = title;
                                       json.tooltip = tooltip;
                                       json.pane = pane;
                                       json.xAxis = xAxis;
                                       json.yAxis = yAxis;  
                                       json.series = series;
                                       json.legend = legend;
                                       $('#entirechart').highcharts(json);
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
                    </div>
                </div>                    
<?php require 'health_footer.php';?>