<?php require 'health_header.php';?>
<div>
                    <div class="row">
                        <div class="col-md-8">
                            <div id="linebloodoxygen" class="diagram"></div>
                            <script language="JavaScript">
                                $(document).ready(function() {  
                                    var chart = {
                                        type: 'spline'      
                                    };

                                    var title = {
                                        text: '血氧变化图'   
                                    };

                                    var xAxis = {
                                        type: 'datetime',
                                        labels: {
                                            overflow: 'justify'
                                        }
                                    };

                                    var yAxis = {
                                        title: {
                                            text: '比例(%)'
                                        },
                                        min: 0,
                                        minorGridLineWidth: 0,
                                        gridLineWidth: 0,
                                        alternateGridColor: null,
                                        plotBands: [{
                                            from: 0,
                                            to: 90,
                                            color: 'rgba(68, 170, 213, 0.1)',
                                            label: {
                                                text: '低血氧',
                                                style: {
                                                    color: '#606060'
                                                }
                                            }
                                            }, { 
                                                from: 95,
                                                to:98,
                                                color: 'rgba(0, 0, 0, 0)',
                                                label: {
                                                    text: '正常范围',
                                                    style: {
                                                        color: '#606060'
                                                    }
                                                }
                                            }]
                                        };

                                        var tooltip = {
                                            valueSuffix: ' %'
                                        };

                                        var plotOptions = {
                                            spline: {
                                                lineWidth: 4,
                                                states: {
                                                    hover: {
                                                        lineWidth: 5
                                                    }
                                                },
                                                marker: {
                                                    enabled: false
                                                },
                                            pointInterval: 3600000,
                                            pointStart: Date.UTC(2009, 9, 6, 0, 0, 0)
                                        }
                                    };

                                    var series= [{
                                        name: '该血氧值',      
                                        data: [4.3, 5.1, 4.3, 5.2, 5.4, 4.7, 3.5, 4.1, 5.6, 7.4, 6.9, 7.1,7.9, 7.9, 7.5, 6.7, 7.7, 7.7, 7.4, 7.0, 7.1, 5.8, 5.9, 7.4,8.2, 8.5, 9.4, 8.1, 10.9, 7.1, 7.5, 8.1, 6.8, 3.4, 2.1, 1.9, 2.8, 2.9, 1.3, 4.4, 4.2,3.0, 3.0]
                                    }];  

                                    var navigation = {
                                        menuItemStyle: {
                                            fontSize: '10px'
                                        }
                                    }  

                                    var json = {};
                                    json.chart = chart;
                                    json.title = title;
                                    json.tooltip = tooltip;
                                    json.xAxis = xAxis;
                                    json.yAxis = yAxis;  
                                    json.series = series;
                                    json.plotOptions = plotOptions;
                                    json.navigation = navigation;
                                    $('#linebloodoxygen').highcharts(json);
                                });
                            </script>
                        </div> 
                        <div class="col-md-4">
                            <div class="row search">
                            <form action="heart_rate.php" method="get">
                                <label>起始时间:</label>
                                <input type="date" name="start-time" class="form-control">
                                <button type="submit" class="btn btn-default">查询</button>
                            </form>
                            </div>
                            <div class="row standard">
                                <h>血氧指标</h>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>正常范围</td>
                                            <td>95%--98%</td>
                                        </tr>
                                        <tr>
                                            <td>低血氧</td>
                                            <td><90%</td>
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