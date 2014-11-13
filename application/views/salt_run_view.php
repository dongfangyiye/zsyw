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
      

      <form method="post" action="salt_show" data-ajax="false">
      <fieldset data-role="controlgroup">
      <legend>请选择项目</legend>
        <label for="reboot">reboot</label>
        <input type="radio" name="item" id="reboot" value=<?php echo $ip."::".$name."::".$hostid."::"."reboot" ;?>>
        <label for="date">date</label>
        <input type="radio" name="item" id="date" value=<?php echo $ip."::".$name."::".$hostid."::"."date" ;?>>
        <label for="hostname">hostname</label>
        <input type="radio" name="item" id="hostname" value=<?php echo $ip."::".$name."::".$hostid."::"."hostname" ;?>>
        <label for="restart_ssh">restart_ssh</label>
        <input type="radio" name="item" id="restart_ssh" value=<?php echo $ip."::".$name."::".$hostid."::"."restart_ssh" ;?>>
        <label for="restart_salt_master">restart_salt_master</label>
        <input type="radio" name="item" id="restart_salt_master" value=<?php echo $ip."::".$name."::".$hostid."::"."restart_salt_master" ;?>>
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
