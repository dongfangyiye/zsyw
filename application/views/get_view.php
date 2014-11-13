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

<div data-role="page" id="pageget" data-theme="b">
  <div data-role="header" data-position="fixed">
    <h1>欢迎使用掌上运维</h1>
    <div data-role="navbar">
      <ul>
        <li><a href="#" data-icon="home">首页</a></li>
        <li><a href="#" data-icon="arrow-r" data-transition="slide" >帮助</a></li>
        <li><a href="admin_login/logout" data-icon="back">退出</a></li>
      </ul>
    </div>
  </div>

<div data-role="content">
    <ul data-role="listview" data-inset="true">
<li>
        <a href="ping">
        <img src="../i/qs.png">
        <h2>PING</h2>
        <p>网络监测工具</p>
        </a>
      </li>
       <li>
        <a href="item">
        <img src="../i/ck.png">
        <h2>状态监控</h2>
        <p>服务器基本状态监控</p>
        </a>
      </li>
      </li>
       <li>
        <a href="salt">
        <img src="../i/ms.png">
        <h2>运维工具</h2>
        <p>服务器运维</p>
        </a>
      </li>  
       <li>
        <a href="ipmi_tools">
        <img src="../i/lr.png">
        <h2>IPMI工具</h2>
        <p>通过IPMI工具维护服务器</p>
        </a>
      </li>
       <li>
        <a href="vm">
        <img src="../i/ws.png">
        <h2>VM工具</h2>
        <p>ESXI虚拟机维护工具</p>
        </a>
      </li> 
      </ul>
  </div>
  

  <div data-role="footer" data-position="fixed">
    <h1>copy by 东方</h1>
  </div>
</div> 

	  
</body>
</html>
