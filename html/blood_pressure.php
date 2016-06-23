<?php require 'health_header.php';?>
<div>
                    <div class="row">
                        <div class="col-md-8">
                            <div id="linebloodpressure" class="diagram"></div>
                            <script language="JavaScript">
                                $(document).ready(function() {  
                                    var chart = {
                                        type: 'spline'      
                                    };

                                    var title = {
                                        text: 'Wind speed during two days'   
                                    };

                                    var subtitle = {
                                        text: 'October 6th and 7th 2009 at two locations in Vik i Sogn, Norway'
                                    };

                                    var xAxis = {
                                        type: 'datetime',
                                        labels: {
                                            overflow: 'justify'
                                        }
                                    };

                                    var yAxis = {
                                        title: {
                                            text: 'Wind speed (m/s)'
                                        },
                                        min: 0,
                                        minorGridLineWidth: 0,
                                        gridLineWidth: 0,
                                        alternateGridColor: null,
                                        plotBands: [{ // Light air
                                            from: 0.3,
                                            to: 1.5,
                                            color: 'rgba(68, 170, 213, 0.1)',
                                            label: {
                                                text: 'Light air',
                                                style: {
                                                    color: '#606060'
                                                }
                                            }
                                            }, { // Light breeze
                                                from: 1.5,
                                                to: 3.3,
                                                color: 'rgba(0, 0, 0, 0)',
                                                label: {
                                                    text: 'Light breeze',
                                                    style: {
                                                        color: '#606060'
                                                    }
                                                }
                                            }, { // Gentle breeze
                                                from: 3.3,
                                                to: 5.5,
                                                color: 'rgba(68, 170, 213, 0.1)',
                                                label: {
                                                    text: 'Gentle breeze',
                                                    style: {
                                                        color: '#606060'
                                                    }   
                                                }
                                            }, { // Moderate breeze
                                                from: 5.5,
                                                to: 8,
                                                color: 'rgba(0, 0, 0, 0)',
                                                label: {
                                                    text: 'Moderate breeze',
                                                    style: {
                                                        color: '#606060'
                                                    }
                                                }
                                            }, { // Fresh breeze
                                                from: 8,
                                                to: 11,
                                                color: 'rgba(68, 170, 213, 0.1)',
                                                label: {
                                                    text: 'Fresh breeze',
                                                    style: {
                                                        color: '#606060'
                                                    }
                                                }
                                            }, { // Strong breeze
                                                from: 11,
                                                to: 14,
                                                color: 'rgba(0, 0, 0, 0)',
                                                label: {
                                                    text: 'Strong breeze',
                                                    style: {
                                                        color: '#606060'
                                                    }
                                                }   
                                            }, { // High wind
                                                from: 14,
                                                to: 15,
                                                color: 'rgba(68, 170, 213, 0.1)',
                                                label: {
                                                    text: 'High wind',
                                                    style: {
                                                        color: '#606060'
                                                    }
                                                }
                                            }]
                                        };

                                        var tooltip = {
                                            valueSuffix: ' m/s'
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
                                            pointInterval: 3600000, // one hour
                                            pointStart: Date.UTC(2009, 9, 6, 0, 0, 0)
                                        }
                                    };

                                    var series= [{
                                        name: 'Vik i Sogn',      
                                        data: [4.3, 5.1, 4.3, 5.2, 5.4, 4.7, 3.5, 4.1, 5.6, 7.4, 6.9, 7.1,7.9, 7.9, 7.5, 6.7, 7.7, 7.7, 7.4, 7.0, 7.1, 5.8, 5.9, 7.4,8.2, 8.5, 9.4, 8.1, 10.9, 7.1, 7.5, 8.1, 6.8, 3.4, 2.1, 1.9, 2.8, 2.9, 1.3, 4.4, 4.2,3.0, 3.0]
                                    }, {
                                        name: 'Norway',
                                        data: [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.1, 0.0, 0.3, 0.0,0.0, 0.4, 0.0, 0.1, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0,0.0, 0.6, 1.2, 1.7, 0.7, 2.9, 4.1, 2.6, 3.7, 3.9, 1.7, 2.3,3.0, 3.3, 4.8, 5.0, 4.8, 5.0, 3.2, 2.0, 0.9, 0.4, 0.3, 0.5, 0.4]
                                    }];  

                                    var navigation = {
                                        menuItemStyle: {
                                            fontSize: '10px'
                                        }
                                    }  

                                    var json = {};
                                    json.chart = chart;
                                    json.title = title;
                                    json.subtitle = subtitle;
                                    json.tooltip = tooltip;
                                    json.xAxis = xAxis;
                                    json.yAxis = yAxis;  
                                    json.series = series;
                                    json.plotOptions = plotOptions;
                                    json.navigation = navigation;
                                    $('#linebloodpressure').highcharts(json);
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
                                <h>血压指标</h>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>正常高值</td>
                                            <td>收缩压131--139mmHg，舒张压81--89mmHg</td>
                                        </tr>
                                        <tr>
                                            <td>正常血压</td>
                                            <td>收缩压130--90mmHg，舒张压60--80mmHg</td>
                                        </tr>
                                        <tr>
                                            <td>高血压</td>
                                            <td>收缩压≥140mmHg 或舒张压≥90mmHg</td>
                                        </tr>
                                        <tr>
                                            <td>低血压</td>
                                            <td>收缩压≤90mmHg 或舒张压≤60 mmHg</td>
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