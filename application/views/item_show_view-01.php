<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../jqm-min/jquery.mobile-1.4.2.min.css">
<script src="../jqm-min/flotr2.min.js"></script>	
<script src="../jqm-min/jquery-1.11.0.min.js"></script>
<script src="../jqm-min/jquery.mobile-1.4.2.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="gbk"/>
    <style type="text/css">
      body {
        margin: 0px;
        padding: 0px;
      }
      #container {
        width : 300px;
        height: 170px;
        margin: 200px auto;
      }
    </style>
</head>
		

<body>
<div data-role="page" id="pagetwo" data-theme="b">
  <div data-role="header" data-position="fixed">
    <h1>欢迎使用掌上运维</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="get" data-icon="home" data-ajax="false">首页</a></li>
        <li><a href="#" data-icon="arrow-r" data-transition="slide" >帮助</a></li>
        <li><a href="admin_login/logout" data-icon="back">退出</a></li>
      </ul>
    </div>
  </div>

<div  data-role="content">
	  <ul data-role="listview">
      <li data-role="list-divider" >服务器<?php echo " ".$name." ".$sip ;?></li>
      <li><a href="#" data-inline="true">项目<?php echo " ".$key_item ;?></a></li>
      
    </ul>
   <?php
   foreach($query->result() as $row) : ?>
   <?php $clock =  $row->clock; ?>
   <?php $value= $row->value; ?>
	<?php $clock=date("i",$clock); ?>
   <?php $clock_[]=$clock ; ?>
	<?php $value_[]=$value ; ?>
	<?php endforeach;?>
</div>
      <?php $dl_val="[[1,$value_[0]]," ; ?>
  	  <?php $dl_len=count($value_); ?>
      <?php echo $dl_len ;?>
  	  <?php
      for ($i=2; $i<=$dl_len; $i++)
      {
      $k=$i-1 ;
      $dl_val=$dl_val."[".$i.",".$value_[$k]."]"."," ;
      }
      $dl_val=$dl_val."]";
      ?>      
      <?php $dl_clo="[[1,$clock_[0]]," ; ?>
  	  <?php
      for ($i=2; $i<=$dl_len; $i++)
      {
      $k=$i-1 ;
      $dl_clo=$dl_clo."[".$i.",".$clock_[$k]."]"."," ;
      }
      $dl_clo=$dl_clo."]";
      ?>
      
<?php echo $dl_val ;?>
	<?php echo $dl_clo ;?>


    
    
  <div data-role="footer" data-position="fixed">
    <h1>copy by 东方</h1>
  </div>
</div>
	 	  
<div id="container" ></div>
<script type="text/javascript">

(function basic(container) {

  var
  	  

 	  
       //d1 = [[1, <?php echo $value_[0] ;?>], [2, <?php echo $value_[1] ;?>],[3, <?php echo $value_[2]; ?>],[4, <?php echo $value_[3]; ?>],
       //[5, <?php echo $value_[4] ;?>], [6, <?php echo $value_[5] ;?>],[7, <?php echo $value_[6]; ?>],[8, <?php echo $value_[7]; ?>],
       //[9, <?php echo $value_[8] ;?>], [10, <?php echo $value_[9] ;?>],
    	
       //], // First data series
       d1=<?php echo $dl_val ; ?>,
       	   

    //i, graph;
    

  // Draw Graph
  graph = Flotr.draw(container, [ d1,], {
  	  lines: {
        show: true,
        fillColor: ['#00A8F0', '#fff'],
        fill: true,
        fillOpacity: 1
      },
    xaxis: {
    //ticks:[[1,"<?php echo $clock_[0] ;?>"],[2,"<?php echo $clock_[1] ;?>"],[3,"<?php echo $clock_[2] ;?>"],[4,"<?php echo $clock_[3] ;?>"],
    //	[5,"<?php echo $clock_[4] ;?>"],[6,"<?php echo $clock_[5] ;?>"],[7,"<?php echo $clock_[6] ;?>"],[8,"<?php echo $clock_[7] ;?>"],
    //	[9,"<?php echo $clock_[8] ;?>"],[10,"<?php echo $clock_[9] ;?>"]]
    ticks:<?php echo $dl_clo ;?>
    },
    grid: {
      minorVerticalLines: 4,
      	  // backgroundColor : {
          // colors : [[0,'#ccc'], [1,'#000']],
          // start : 'top',
          //end : 'bottom'
        // }
    }
  });
})(document.getElementById("container"));
 </script>

</body>
</html>
