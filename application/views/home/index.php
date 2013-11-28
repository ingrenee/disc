<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<pre>
<?PHP foreach($t as $k => $v):
?>
<ul>
<?PHP foreach($v as $kk => $vv):
?>
<li><?PHP echo $kk;?>

<input type="radio" name="k[<?PHP echo $k?>][<?PHP echo $vv?>]" value="1">
<input type="radio" name="k[<?PHP echo $k?>][<?PHP echo $vv?>]" value="2">
</li>
<?PHP endforeach;?>
</ul>
<?PHP endforeach;?>
</body>
</html>