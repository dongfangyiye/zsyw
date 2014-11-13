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
    <h1>��ӭʹ��������ά</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="get" data-icon="home">��ҳ</a></li>
        <li><a href="#" data-icon="arrow-r" data-transition="slide" >����</a></li>
        <li><a href="admin_login/logout" data-icon="back">�˳�</a></li>
      </ul>
    </div>
  </div>

  <div data-role="content">
    <form method="post" action="vm_group" >
      <fieldset data-role="fieldcontain">
        <label for="gg_now">��ѡ����</label>
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
      <legend>��ѡ���������</legend>
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
        <input type="submit" data-inline="true" value="�ύ">
    </form>
  </div>

  <div data-role="footer" data-position="fixed">
    <h1>copy by ����</h1>
  </div>
</div> 

</body>
</html>
