<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <head>
   <title></title>
<script src="/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
location.reload();
$(document).ready(function() {
	$(".link").click(function(){
			location.reload();
					});
}
</script>
 </head>
 <body>
   
   <h2>ยินดีต้อนรับ : <?php echo $this->session->userdata('username'); ?></h2>
   <a href="<?=base_url()?>index.php/upload"> Upload </a>
   <br>
   <a href="/index.php/home/logout">Logout</a>
   <br>


<?php 

	foreach($fileupload as $file)
	{
		echo '<br>';
		 echo $file["name"].'<a class="link" href="/index.php/delete_c/index/'.$file["id"].'/fileupload">ลบ</a>';
		 echo '<br>';
	}
?>


 </body>
</html>

