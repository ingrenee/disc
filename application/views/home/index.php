<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script type="text/javascript" src="<?PHP echo base_url();?>/html/js/jquery-1.10.2.min.js"></script>
<script>
$(document).ready(function(e) {
	$('input').click(function(e) {
		var id=$(this).attr('data-c');
		
		//$('.')
		
	});
});
</script>
</head>

<body>
<pre>
<?PHP foreach($t as $k => $v):
?>
<table>
<?PHP foreach($v as $kk => $vv):
?>
<tr>
<td>
<?PHP echo $kk;?>
</td>
<td>
<input type="radio" class="<?PHP echo $vv.'1';?>  class-<?PHP echo $k.$vv?>" data-c="<?PHP echo $k.$vv?>" name="kmas[<?PHP echo $k?>]" value="1">
</td>
<td>
<input type="radio"  class="<?PHP echo $vv.'2';?> class-<?PHP echo $k.$vv?>" data-c="<?PHP echo $k.$vv?>" name="kmenos[<?PHP echo $k?>]" value="2">
</td>
</tr>
<?PHP endforeach;?>
</table>
<?PHP endforeach;?>
</body>
</html>