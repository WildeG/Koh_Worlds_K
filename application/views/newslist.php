
<center><h2><b>Новости</h2>
<?php $i=0 ?>
<?php for($u=0; ;$u++){ if (isset($newss[$u])){ ?>
	<div id='news'>
	<img align='left' class='image_news' src= <?php echo '"'.URL::base().'public/image/uploads/news/'.$newss[$u]['image'].'"' ?> />
	<h4><?php echo $newss[$u]['title']; ?></h4>
		<table id='table_news'>
			<tr>
				<td align='left'><a class='subtitle'><?php echo $newss[$u]['family'],' '; echo $newss[$u]['name'];  ?></a></td>
				<td align='right'><?php echo $newss[$u]['date_added']; ?><a class='subtitle'></a></td>
			</tr>
			<tr>
				<td colspan='2'><a id='contents'><?php echo join(' ', array_slice(explode( ' ', $newss[$u]['texts'] ), 0, 15)); echo '..'; ?></br><a href=<?php  echo "'/shownews?id=".$newss[$u]['id_news']."'";?>>Читать далее </a></td>
			</tr>
		</table>
	</div>	
<?php } if($u>=5){break;}
   }?>

<?php while ($i<$count/5){
	echo '<a href="newslist?page='.$i.'">'.($i+1).'</a>';
	$i++;
}?>
</center>