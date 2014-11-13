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
      <li><a href="#" data-inline="true">IP <?php echo $sipp ; ?></a></li>
      

      <form method="post" action="vm_run_com" data-ajax="false">
      <fieldset data-role="controlgroup">
      <legend>请选择项目</legend>
      <?php    
      foreach($output as $value) : ?>
      <?php  $iq = explode(" ",$value); ?>
      <?php  $vmid = $iq[0]; ?>
      <?php  $name_vm = $iq[1]; ?>
      <?php  
             if($vmid=='Vmid'){
                                continue;
                                }; ?>

      <?php  $encode = mb_detect_encoding($name_vm, array("ASCII","UTF-8","GB2312","GBK","BIG5")); ?>
      <?php  if ($encode == "UTF-8"){
                                     $name_vm = mb_convert_encoding($name_vm, "GB2312", "UTF-8");
                                     }; ?>
      <label for=<?php echo $value; ?>><?php echo $name_vm; ?></label>
      <input type="radio" name="item" id=<?php echo $value ;?> value=<?php echo $sipp."::".$name_vm."::".$vmid ;?> >	
      <?php endforeach;?>    
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
