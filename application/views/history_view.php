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

        <h2>��������Ϣ</h2>
        <p><?php echo "���������� ".$name; ?></p>
        <p><?php echo "������IP ".$sipp; ?></p>
        </a>
        <a href="#">Some Text</a>
      </li>
      <li>
        <a href="#">
        <img src="../i/status.png">
        <h2>�����ֵ</h2>
        <p><?php echo "����ֵ ".$output; ?></p>
        <p><?php echo "��������״̬ ".$status; ?></p>
        </a>
        <a href="#">Some Text</a>
      </li>
    </ul>
<?php endforeach;?>
  </div>
  

  <div data-role="footer" data-position="fixed">
    <h1>copy by ����</h1>
  </div>
</div> 

</body>
</html>