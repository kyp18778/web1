<?
$_zb_url="http://ypkim.cafe24.com/bbs/";
$_zb_path= "/home/hosting_users/ypkim/www/bbs/";
include $_zb_path."outlogin.php";
?>


<html>
<head>
<title>index</title>
<style type="text/css">
<!--

a:link{
text-decoration:none;
font-family:"Arial", "Helvetica", "sans Serif";
font-size:9pt;
color:#444444;
font-weight:bold;
}

a:visited{
font-family:"Arial", "Helvetica", "sans Serif";
font-size:9pt;
color:#444444;
text-decoration:none;
}

a:hover{
font-family:"Arial", "Helvetica", "sans Serif";
font-size:12pt;
color:#3300cc;
text-decoration:none;
font-weight:bold;
}


//-->
</style>

<script Language="JavaScript">
<!--
function fun_open(){
window.open("new_win2.html", "win_op", width=650, height=550)
}
//-->
</script>

<style>
body{filter='progid:DXImageTransform.Microsoft.Gradient(gradientType=0,
  StartColorStr=yellowgreen,  EndColorStr=#FFFFFF)'}    
</style>

<! 설명 "body 바로 위에 style 태그를 넣어 화면을 그라데이션으로 장식" 밑의 bg color는 위의 style 이 없을 때 반영됨
//-->

</head>
<body bgcolor=>

<table align=center width=650 height=150 border=1 cellspasing=0 cellpadding=0>
  <tr align=center>
      <td width=650 >&nbsp;</td>
  </tr>
</table>
<table align=center width=650 height=25 border=0 cellspasing=0 cellpadding=0>
  <tr align=center valign=bottom> 
     
      <td width=90 bgcolor=><a href=#><img src=images/menu-02_01.gif border=0></a></td>
      <td width=90 bgcolor=#af3f43><a href=#><img src=images/menu-02_02.gif border=0></a></td>
      <td width=90 bgcolor=yellow><a href=#><img src=images/menu-02_03.gif border=0></a></td>
      <td width=90 bgcolor=green><a href=#><img src=images/menu-02_04.gif border=0></a></td>
      <td width=90 bgcolor=yellow ><a href=http://ypkim.cafe24.com/bbs/zboard.php?id=music><img src=images/menu-02_05.gif border=0></a></td>
      <td width=90 bgcolor=>
<a href=http://ypkim.cafe24.com/bbs/zboard.php?id=bbs_01><img src=images/menu-02_06.gif border=0></a></td>
      <td width=90 bgcolor=violet>
<a href=http://ypkim.cafe24.com/bbs/zboard.php?id=guest_01><img src=images/menu-02_07.gif border=0></a></td>
  </tr>
</table>



<table align=center width=650 height=350 border=1 cellspasing=0 cellpadding=0>
  <tr align=center>
     <td width=300 height=>
<?
print_outlogin("mywork",1,10)
?>

</td>
     <td width=300 >
<?print_bbs("nzeo/black_bbs","게시판","bbs_01",5,20)?>
<?print_bbs("nzeo/crimson_bbs","자유게시판1234","bbs_01",3,5)?>

  </td>
     <td width=200 >
<img src=images/tree.jpg width=100 height=100></td>
 </tr>    
<tr align=center>
     <td width=300>
<?print_bbs("nzeo/crimson_bbs","음악게시판","music",5,20)?>



</td>
     <td width=300 >
<?print_bbs("nzeo/crimson_bbs","방명록","guest_01",5,20)?>
</td>
     <td width=200 bgcolor=>
<img src=images/tree.jpg width=100 height=100></td>
 </tr>    
</table>
<table align=center width=650 height=25 border=0 cellspasing=0 cellpadding=0>
  <tr align=center valign=bottom> 
     
      <td width=650 bgcolor=#ccccff><font size=2>Copyright &copy; 2004.01.  y.p.kim  All Rights Reserved    </font></td>
     
  </tr>
</table>
</body>

</html>

