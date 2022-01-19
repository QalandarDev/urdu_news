<h1>Table begin</h1>
<table class="table table-bordered table-responsive">
    <tr>
        <td>#</td>
        <td>Kafedra nomi **</td>
        <td>Muallif (lar) F.I.SH. (alfavit tartibida to'liq yoziladi)*</td>
		<td>Muallif</td>
        <td>Jurnalning nomi</td>
        <td>Jurnalning nashr etilgan yili va oyi</td>
        <td>Maqolaning nomi </td>
        <td>Maqolaning qaysi tilda chop etilganligi</td>
        <td>Chop etilgan materiallarning «Google Scholar» va boshqa xalqaro e'tirof etilgan qidiruv tizimlardagi internet manzili (giper xavolasi) </td>
        <td>«Web of Science», «Scopus», «Google Scholar» yoki boshqa xalqaro e'tirof etilgan bazalarda mavjud bo'lgan ushbu materiallarga iqtiboslar soni*</td>
    </tr>
<tbody>
<?php

	
$i=0;
foreach ($hodim as $items){
				$mypubls=json_decode($items['publ'], true);		
						   	$mypubls=$mypubls['publications_per_citation'];
//print_r($mypubls);	exit();
					  if (!empty($mypubls)) {
						  foreach ($mypubls as $publs){ if ($publs['citations']>0){
							  $i++;
    printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td></td><td>https://scholar.google.com%s</td><td>%s</td></tr>",
        $i, $items['centername'], $publs['authors'], $items['fio'],$publs['venue'],$publs['year'],$publs['title'],$publs['url'],$publs['citations']);};
					   };};

};

?>
</tbody>
</table>
<h1>Table end</h1>