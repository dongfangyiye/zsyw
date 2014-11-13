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
    <form method="post" action="vm_group" >
      <fieldset data-role="fieldcontain">
        <label for="gg_now">请选择组</label>
        <select name="gg_now" id="gg_now" onchange="javascript: submit();">
		<?php foreach($ggroupid->result() as $row)
		{
   		$name = $row->name;
   		$groupid =  $row->groupid;
   		$name=mb_convert_encoding($name, "GB2312", "UTF-8");
   		echo "<option "." value=".$groupid.">".$name."</option>" ;
		}
		?>
        </select>
      </fieldset>
    </form>
  </div>

  <div data-role="content">
    <form method="post" action="vm_run" >
      <fieldset data-role="controlgroup">
      <legend>请选择服务器：</legend>
   <?php
   foreach($query->result() as $row) : ?>
   <?php $name =  $row->name; ?>
   <?php $ip =  $row->ip; ?>
   <?php $available = $row->available; ?>
   <?php $group = $row->groupid; ?>
   <?php $hostid= $row->hostid; ?>
    <label for=<?php echo $ip; ?>><?php echo $name." ".$ip; ?></label>
    <input type="radio" name="ip" id=<?php echo $ip ;?> value=<?php echo $ip."::".$name."::".$hostid ;?> >	
	<?php endforeach;?>
      </fieldset>
        <input type="submit" data-inline="true" value="提交">
    </form>
  </div>

  <div data-role="footer" data-position="fixed">
    <h1>copy by 东方</h1>
  </div>
</div> 

</body>
</html>
