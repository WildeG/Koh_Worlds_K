
<center><h2><b>Новости</h2>
<?php $i=0 ?>
<?php for($u=5*$_GET['page']; ;$u++){ if (isset($recipes[$u])){ ?>
	<div id='news'>
	<img align='left' class='image_news' src="" />
	<h4><?php echo $recipes[$u]['title']; ?></h4>
		<table id='table_news'>
			<tr>
				<td align='left'><a class='subtitle'><?php echo $recipes[$u]['family'],' '; echo $recipes[$u]['name'];  ?></a></td>
				<td align='right'><?php echo $recipes[$u]['date_added']; ?><a class='subtitle'></a></td>
			</tr>
			<tr>
				<td colspan='2'><a id='contents'><?php echo join(' ', array_slice(explode( ' ', $recipes[$u]['recipe'] ), 0, 15)); echo '..'; ?></a></td>
			</tr>
		</table>
	</div>	
<?php } if($u>=5*$_GET['page']+4){break;}
   }?>

<?php while ($i<=intval(count($recipes)/5)){
	echo '<a href="showrecipes?kitchens'.$_GET['kitchens'].'&page='.$i.'">'.$i.'</a>';
	$i++;
}?>
</center>