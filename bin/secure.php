<?php // 1 > Param�tres de s�curit� Adeli ;
echo"<table cellspacing='0' cellpadding='3' border='0' width='600'>
	<tr>
		<td valign='top' class='menuselected' width='150'><span class='gras'>Param�tres de s�curit�</span></td>
		<td class='buttontd' style='text-align:left'>&nbsp;<td>
	</tr>
	<tr><td valign='top' class='cadrebas' colspan='2' align='center'><br><br>
	<form action='./?secure' method='post'>
	<input type='checkbox' name='active'> Activer le filtrage IP<br>
	Seuls les postes correspondant aux adresses IP ci dessous seront autoris�s �se connecter � Adeli. Attention ! si vous ne disposez pas une adresse IP fixe, vous risquez de ne plus pouvoir acc�der � Adeli.
	<br><br>
	Pour information, votre adresse IP est  : <b>$ip</b>
	<br><br>
	Adresses autoris�es : <br>
	Entre ici une liste d'adresse IP s�par�e par une virgule,<br>
	par exemple : <i>84.101.91.151,11.122.65.10</i><br>
	Pour entrer un place d'adresses, indiquez la premi�re et la derni�re adresse s�par�e par un tiret,<br>
	par exemple : <i>84.101.91.1-84.101.91.100</i><br>
	Vous pouvez combinez ces op�ration pour indiquez plusieurs plages et/ou adresses IP uniques,<br>
	par exemple : <i>11.122.65.10,84.101.91.1-84.101.91.100</i><br>
	<br>
	<textarea type='text' size='2' name='soloip'>$soloip</textarea><br>
	<input type='submit'class='buttontd' value='ok'>
	<br><br>
</form>
</td></tr></table>";
?>