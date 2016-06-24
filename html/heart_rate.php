  <?php require 'health_header.php';?>
                  <div >
                      <div class="row">
                          <div class="col-md-8">
                              <div id="lineheartrate" class="diagram"></div>
           <script>
    
    var options = {
      chart: {
        renderTo:'lineheartrate',
        type:'spline',
      },
      title: {
          text: '实时心率曲线',
          x: -20 
      },
      
      xAxis:{
      },
      yAxis: {
          title: {
              text: 'Temperature (°C)'
          },
          plotLines: [{
              value: 0,
              width: 1,
              color: '#808080'
          }]
      },
      series: [{
          name:'心率',
      }],
      tooltip: {
          valueSuffix: '次/分'
      },
      
      plotOptions: {
          spline:{
            dataLabels: {
               enabled: true
            },
            animation:false,
          },
      },
   };
   
    $(function () {
      queryData(0);
     
      var i=0;
      var timer = setInterval(function(){
        i++;
        if(i>=3) {i=0;}
        queryData(i);
      },1000);

      $("button").click(function(){
        clearInterval(timer);
      });
    });
    
    var categories = [];
    var datas = [];
    
    function queryData(index) {
      $.ajax({
        url:'getDatas.php?index='+index,
        type:'get',
        dataType:"json",
        success:function(data) {
            
            $.each(data,function(i,n){
              categories[i] = n[1];
              datas[i] = n[2]*1;
            });
            
            options.xAxis.categories = categories;
            options.series[0].data = datas;
            
            chart = new Highcharts.Chart(options);
        }
      });
    }
    
  
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
                                  <h>心率指标</h>
                                  <table class="table table-bordered table-striped">
                                      <tbody>
                                          <tr>
                                              <td>60+岁</td>
                                              <td>53--120次/分.平均70次/分</td>
                                          </tr>
                                          <tr>
                                              <td>70+岁</td>
                                              <td>53--108次/分.平均80次/分</td>
                                          </tr>
                                          <tr>
                                              <td>80+岁</td>
                                              <td>50--112次/分.平均66次/分</td>
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