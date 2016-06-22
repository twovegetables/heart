<?php require '../php/isLogin.php' ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>健康档案</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" href="../css/style.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/highcharts.js"></script>
<script src="../js/highcharts-more.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php require 'header.php' ?>
        <div class="row">
            <div class="col-md-2 left-navbar">
                <ul>
                    <a href="personal.html"><li>个人信息</li></a>
                    <li id="item2">健康档案</li>
                    <a href="schedule.html"><li>活动信息</li></a>
                    <a href="food.html"><li>饮食信息</li></a>
                    <a href="alert.html"><li>警报记录</li></a>
                </ul>
            </div>
            <div class="col-md-10 main-content">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active">
                        <a href="#entire" data-toggle="tab">总概况</a>
                    </li>
                    <li>
                        <a href="#heart-rate" data-toggle="tab">心率</a>
                    </li>
                    <li>
                        <a href="#temperature" data-toggle="tab">体温</a>
                    </li>
                    <li>
                        <a href="#weight" data-toggle="tab">体重</a>
                    </li>
                    <li>
                        <a href="#blood-pressure" data-toggle="tab">血压</a>
                    </li>
                    <li>
                        <a href="#blood-glucose" data-toggle="tab">血糖</a>
                    </li>
                    <li>
                        <a href="#blood-oxygen" data-toggle="tab">血氧</a>
                    </li>
                    <li>
                        <a href="#sleep" data-toggle="tab">睡眠</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="entire">
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
                    <div class="tab-pane fade" id="heart-rate">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="lineheartrate" class="diagram"></div>
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
                                    $('#lineheartrate').highcharts(json);
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
                    <div class="tab-pane fade" id="temperature">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="linetemperature" class="diagram"></div>
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
                                    $('#linetemperature').highcharts(json);
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
                    <div class="tab-pane fade" id="weight">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="lineweight" class="diagram"></div>
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
                                    $('#lineweight').highcharts(json);
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
                    <div class="tab-pane fade" id="blood-pressure">
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
                                    <label>起始时间:</label>
                                    <input type="date" name="start-time" class="form-control">
                                    <label>结束时间:</label>
                                    <input type="date" name="end-time" class="form-control">
                                    <button type="button" class="btn btn-default">查询</button>
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
                    <div class="tab-pane fade" id="blood-glucose">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="linebloodglucose" class="diagram"></div>
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
                                    $('#linebloodglucose').highcharts(json);
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
                    <div class="tab-pane fade" id="blood-oxygen">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="linebloodoxygen" class="diagram"></div>
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
                                    $('#linebloodoxygen').highcharts(json);
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
                    <div class="tab-pane fade" id="sleep">
                        <div class="row">
                            <div class="col-md-8">
                                <div id="barsleep" class="diagram"></div>
                                <script language="JavaScript">
                                $(document).ready(function() {  
                                    var chart = {
                                        type: 'column',
                                        margin: [50,50,100,80]
                                    };

                                    var title = {
                                        text: '睡眠时间记录表'   
                                    };

                                    var xAxis = {
                                        categories: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
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
                                        name: '李奶奶',      
                                        data: [10, 12, 11, 10, 13, 10, 12]
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
                                    <label>起始时间:</label>
                                    <input type="date" name="start-time" class="form-control">
                                    <label>结束时间:</label>
                                    <input type="date" name="end-time" class="form-control">
                                    <button type="button" class="btn btn-default">查询</button>
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>