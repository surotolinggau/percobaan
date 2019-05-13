<form name="formalbum" action="simpan-album.php" method="post">
Judul Album: <input type="text" name="judul"/> Nama Artis: <input type="text" name="artis"/>
<table id="tabel-lagu" cellspacing="0" border="1" cellpadding="3">
	<tr>
		<td>NO. Track</td>
		<td>Judul</td>
		<td>Durasi</td>
		<td>Delete</td>
	</tr>
	<tr>
		<td><input type="text" name="no_track[0]"/></td>
		<td><input type="text" name="judul_lagu[0]"/></td>
		<td><input type="text" name="durasi[0]"/></td>
		<td><button type="button" class="del">Del</button></td>
	</tr>
	<tr id="last">
		<td colspan="4" align="right"><button type="button" id="addRow">Add</button></td>
	</tr>
</table>
<input type="submit" value="Simpan"/>
</form>
<script type="text/javascript" src="jquery2.1.3.js"></script>
<script type="text/javascript">
var i = 1;
$(function(){
	$("#addRow").click(function(){
		row = '<tr>'+
		'<td><input type="text" name="no_track['+i+']"/></td>'+
		'<td><input type="text" name="judul_lagu['+i+']"/></td>'+
		'<td><input type="text" name="durasi['+i+']"/></td>'+
		'<td><button type="button" class="del">Del</button></td>'+
		'</tr>';
		$(row).insertBefore("#last");
		i++;
		});
	});
	$(".del").live('click', function(){
		$(this).parent().parent().remove();
		});
</script>
