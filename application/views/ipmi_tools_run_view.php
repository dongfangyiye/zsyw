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
      <ul data-role="listview">
      <li data-role="list-divider" >������ <?php echo $name ; ?></li>
      <li><a href="#" data-inline="true">IP <?php echo $ip ; ?></a></li>
      

      <form method="post" action="ipmi_tools_show" data-ajax="false">
      <fieldset data-role="controlgroup">
      <legend>��ѡ����Ŀ</legend>
        <label for="ipmi_power_reboot">ipmi_power_reboot</label>
        <input type="radio" name="item" id="ipmi_power_reboot" value=<?php echo $ip."::".$name."::".$hostid."::"."ipmi_power_reboot" ;?>>
        <label for="ipmi_cold_reset">ipmi_cold_reset</label>
        <input type="radio" name="item" id="ipmi_cold_reset" value=<?php echo $ip."::".$name."::".$hostid."::"."ipmi_cold_reset" ;?>>
        <label for="ipmi_power_status">ipmi_power_status</label>
        <input type="radio" name="item" id="ipmi_power_status" value=<?php echo $ip."::".$name."::".$hostid."::"."ipmi_power_status" ;?>>
        <label for="restart_cause">restart_cause</label>
        <input type="radio" name="item" id="restart_cause" value=<?php echo $ip."::".$name."::".$hostid."::"."restart_cause" ;?>>
      </fieldset>
        <input type="submit" data-inline="true" value="�ύ">
    </form>
        </ul>
   	  
  </div>



  <div data-role="footer" data-position="fixed">
    <h1>copy by ����</h1>
  </div>
</div> 

</body>
</html>
