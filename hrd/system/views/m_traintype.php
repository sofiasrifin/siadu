<?php
$t=dbSel("*","mstr_traintype","O/ urut");
$k=1;
$n=dbNRow($t);
while($r=dbFA($t)){?>
<tr><td width="380px"><?=$r['name']?></td><td align="right">
	<div class="prefopt">
	<?php if($k!=1) {?><input type="button" title="Move up" class="prefup" onclick="m_traintype('up',<?=$r['dcid']?>)"/> &nbsp;<?php } ?>
	<?php if($k!=$n) {?><input type="button" title="Move down" class="prefdn" onclick="m_traintype('dn',<?=$r['dcid']?>)"/><?php } else {?><button style="width:15px;height:15px;border:none;background:none"></button><?php } ?> &nbsp;
	<input type="button" title="Edit" class="prefedit" onclick="m_traintype('uf',<?=$r['dcid']?>)"/> &nbsp;
	<input type="button" title="Delete" class="prefdel" onclick="m_traintype('df',<?=$r['dcid']?>)"/>
	</div>
	</td>
</tr>
<?php $k++; } ?>