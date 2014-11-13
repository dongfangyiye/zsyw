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

<div data-role="page" id="pagetwo" data-theme="b" >
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
      <ul data-role="listview">
      <li data-role="list-divider" >服务器 <?php echo $name ; ?></li>
      <li><a href="#" data-inline="true">IP <?php echo $ip ; ?></a></li>
      

      <form method="post" action="item_show" data-ajax="false">
      <fieldset data-role="controlgroup">
      <legend>请选择项目</legend>
        <label for="cpu_idle">cpu_idle</label>
        <input type="radio" name="item" id="cpu_idle" value=<?php echo $ip."::".$name."::".$hostid."::"."cpu_idle"."::"."history" ;?>>
        <label for="net_eth0_in">net_eth0_in</label>
        <input type="radio" name="item" id="net_eth0_in" value=<?php echo $ip."::".$name."::".$hostid."::"."net_eth0_in"."::"."history_uint" ;?>>
        <label for="net_eth0_out">net_eth0_out</label>
        <input type="radio" name="item" id="net_eth0_out" value=<?php echo $ip."::".$name."::".$hostid."::"."net_eth0_out"."::"."history_uint" ;?>>
        <label for="cpu_load_avg1">cpu_load_avg1</label>
        <input type="radio" name="item" id="cpu_load_avg1" value=<?php echo $ip."::".$name."::".$hostid."::"."cpu_load_avg1"."::"."history" ;?>>
         
        <label for="free_inode_root">free_inode_root</label>
        <input type="radio" name="item" id="free_inode_root" value=<?php echo $ip."::".$name."::".$hostid."::"."free_inode_root"."::"."history" ;?>>
        <label for="free_size_root">free_size_root</label>
        <input type="radio" name="item" id="free_size_root" value=<?php echo $ip."::".$name."::".$hostid."::"."free_size_root"."::"."history" ;?>>
      </fieldset>
        <input type="submit" data-inline="true" value="提交">
    </form>
        </ul>
   	  
  </div>



  <div data-role="footer" data-position="fixed">
    <h1>copy by 东方</h1>
  </div>
</div> 

</body>
</html>
