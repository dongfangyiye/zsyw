<!DOCTYPE html>
<html>
<head>
<script src="../../jqm-min/lazyload.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="gbk"/>
</head>
<body>
<body>


<div data-role="page" id="pageone" data-theme="b">
    <div data-role="header" data-position="fixed">
            <h1>��ӭʹ��������ά</h1>
        </div>
<form method="post" action="check_login" data-ajax="false">
<div align="center">
<img src="../../i/header.png" />
</div>
<ul data-role="listview" data-inset="true">
 <li>
      <img src="../../i/user.png">
      <input type="text" name="username" id="username"  placeholder="�������û���">
</li></ul>
<ul data-role="listview" data-inset="true">
<li>
      <img src="../../i/pass.png">
      <input type="password" name="password" id="password"  placeholder="����������">
</li></ul>
<ul data-role="listview" data-inset="true">
<li>
      <input type="submit" data-inline="true" value="��½">
      </li>
</ul>
</form>

<script type="text/javascript" charset="utf-8"> 
function loadComplete(){
          
$(document).ready(function () {

});
       }
function loadscript()
        {
LazyLoad.js([
 '../../jqm-min/jquery-1.11.0.min.js',
 '../../jqm-min/jquery.mobile-1.4.2.min.js'
], loadComplete);
LazyLoad.css([
 '../../jqm-min/jquery.mobile-1.4.2.min.css'
], loadComplete);
        }
        setTimeout(loadscript,10);

</script>        


<div data-role="footer" data-position="fixed">
    <h1>copy by ���� </h1>
 </div>
</div>




</body>
</html>
