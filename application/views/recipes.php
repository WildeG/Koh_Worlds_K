
<center><h2><b><?php echo $kitchen[0]['title']." кухня"; ?></h2>
<?php $i=0 ?>
<?php for($u=0; ;$u++){ if (isset($recipes[$u])){ ?>
	<div id='news'>
	<img align='left' class='image_news' src= <?php echo '"'.URL::base().'public/image/uploads/recipe/'.$recipes[0]['image'].'"' ?> />
	<a href=<?php  echo "'/showrecipe?id=".$recipes[$u]['id_recipe']."'";?>><h4><?php echo $recipes[$u]['title']; ?></h4></a>
		<table id='table_news'>
			<tr>
				<td align='left'><a class='subtitle'><?php echo $recipes[$u]['family'],' '; echo $recipes[$u]['name'];  ?></a></td>
				<td align='right'><a class='subtitle'><?php echo $recipes[$u]['date_added']; ?></a></td>
			</tr>
			<tr>
				<td colspan='2'><a id='contents'><?php echo join(' ', array_slice(explode( ' ', $recipes[$u]['recipe'] ), 0, 15)); echo '..'; ?></br><a href=<?php  echo "'/showrecipe?id=".$recipes[$u]['id_recipe']."'";?>>Читать далее </a></td>
			</tr>
		</table>
	</div>	
<?php } if($u>=5){break;}
   }?>

<?php while ($i<$count/5){
	echo '<a href="showrecipes?kitchens='.$_GET['kitchens'].'&page='.$i.'">'.($i+1).'</a>';
	$i++;
}?>
</center>