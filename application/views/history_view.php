<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../jqm-min/jquery.mobile-1.4.2.min.css">
<script src="../jqm-min/jquery-1.11.0.min.js"></script>
<script src="../jqm-min/jquery.mobile-1.4.2.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="gbk"/>
</head>
<body>

<div data-role="page" id="pagetwo" data-theme="b">
  <div data-role="header" data-position="fixed">
    <h1>欢迎使用掌上运维</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="get" data-icon="home">首页</a></li>
        <li><a href="#" data-icon="arrow-r" data-transition="slide" >帮助</a></li>
        <li><a href="admin_login/logout" data-icon="back">退出</a></li>
      </ul>
    </div>
  </div>


<div data-role="content">
<?php $now = date("Y-m-d H:i:s"); ?>
<?php foreach($history as $key=> $value) : ?>
<?php 
     $iq = explode("::",$value);
     $name = $iq[0];
     $sipp = $iq[1];
     $output =$iq[2];
     $status =$iq[3];
     $runcommand =$iq[4];
/*     $name = $iqq["name"] ;
     $sipp = $iqq["sipp"]; 
     $output =$iqq["output"];
     $status =$iqq["status"] ;
     $runcommand =$iqq["runcommand"]; 
*/
?>


    <ul data-role="listview" data-inset="true">
      <li>
        <a href="#">
        <img src="../i/info.png">

        <h2>服务器信息</h2>
        <p><?php echo "服务器名称 ".$name; ?></p>
        <p><?php echo "服务器IP ".$sipp; ?></p>
        </a>
        <a href="#">Some Text</a>
      </li>
      <li>
        <a href="#">
        <img src="../i/status.png">
        <h2>命令返回值</h2>
        <p><?php echo "返回值 ".$output; ?></p>
        <p><?php echo "命令运行状态 ".$status; ?></p>
        </a>
        <a href="#">Some Text</a>
      </li>
    </ul>
<?php endforeach;?>
  </div>
  

  <div data-role="footer" data-position="fixed">
    <h1>copy by 东方</h1>
  </div>
</div> 

</body>
</html>