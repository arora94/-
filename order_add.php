<!DOCTYPE html>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/xadmin.css">
        <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="./js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]--></head>
    
    <body>
    <?PHP
    include('connect.php');//链接数据库
    $year=$_POST['year'];
    $id=$_POST['id'];
    $time=$_POST['time'];
    $type=$_POST['type'];
    $color=$_POST['color'];
    $sn=$_POST['sn'];
    $quantity=$_POST['quantity'];
    $specie=$_POST['specie'];
    $gear=$_POST['gear'];
    $motor=$_POST['motor'];
    $company=$_POST['company'];
    $batch=$_POST['batch'];
    $especial=$_POST['especial'];
    $remark=$_POST['remark'];
    $check_sql="select * from order_vehicle where id='$id'";
    $result = mysql_query($check_sql);//执行sql
    $rows=mysql_num_rows($result);//返回一个数值
    if($rows){//0 false 1 true
        echo" <script>layui.use(['form', 'layer','jquery'],
            function() {
                $ = layui.jquery;
                var form = layui.form,
                layer = layui.layer;
                    layer.alert('编号重复', {
                        icon: 6
                    },
                    function() {
                        window.history.go(-1)

                    });
                    return false;

            });</script>";
      }else{
               $sql = "INSERT INTO order_vehicle VALUES ('$year','$id', '$time', '$type','$color', '$sn', '$quantity','$specie','$gear','$motor','$company','$batch','$especial','$remark')";
               $result = mysql_query($sql);//执行sql
               session_start();
          $user=$_SESSION['username'];
           date_default_timezone_set('PRC');
          $now_time= time();
      $time= date('Y-m-d H:i:s',$now_time);
      $action="手工录入了一条订单车信息";
      $sql = "INSERT INTO czjl('1','3','6') VALUES ('$user',  '$time',  '$action')";
      $result = mysql_query($sql);//执行sql
     echo" <script>layui.use(['form', 'layer','jquery'],
              function() {
                  $ = layui.jquery;
                  var form = layui.form,
                  layer = layui.layer;
                      layer.alert('提交成功',
                      function() {
                          //关闭当前frame
                          xadmin.close();
  
                          // 可以对父窗口进行刷新 
                          xadmin.father_reload();
                      });
                      return false;
  
              });</script>";
      }
           mysql_close();//关闭数据库
  ?>
  
  </body>
  
</html>