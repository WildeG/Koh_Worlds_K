<div class="nw_block">
	<div class="nw_title">
		<h2>
		<?php echo $recipes[0]['title'];?>
		</h2>
	</div>
	<div class="nw_mtitle">
		<div class="nw_autor">
			Добавил: <a href="<?php echo URL::base().'user?id='.$recipes[0]['id']?>"><?php echo $recipes[0]['family']."&nbsp".$recipes[0]['name']; ?></a>
		</div>	
		<div class="nw_date">
			<?php echo $date[0];?>
		</div>
	</div>
	<div class="rc_content">
		<div class="nw_button">
			<?php if ($recipes[0]['image']!="default_image"){
				echo "<img class='nw_image' src='".URL::base()."public/image/uploads/recipe/".$recipes[0]['image']."'>";
			} ?>
		</div>
		<div class="rc_component">
			<h3>Ингридиенты</h3>
			<?php
			$i=0; 
			while (isset($comps[$i])) { ?>
			<div class="rc_component_list">
				<div class="rc_comp" align="right">
					<?php echo $comps[$i]['component'] ?>
				</div>
				<div class="rc_comp" align="left">
					<?php echo $comps[$i]['quantity'] ?>
				</div>
			</div><br>
			<?php $i++; } ?>
		</div>
		<div class="nw_content">
			<h3>Рецепт</h3>
			<?php echo $recipes[0]['recipe'];?>
		</div>
	</div>
	<div class="rc_iconlist">
		<div class="rc_icon">
			<img class="mini_icon" title="Количество порций" src=<?php echo '"'.URL::base().'public/image/system/servings_icon.png"' ?>>&nbsp<?php echo $recipes[0]['portions'];?> <!-- Колличество порций -->
		</div>
		<div class="rc_icon">
			<img class="mini_icon" title="Время приготовления" src=<?php echo '"'.URL::base().'public/image/system/time_icon.png"' ?>>&nbsp<?php echo $recipes[0]['time'];?> <!-- Время приготовления -->
		</div>
	</div>
</div>
<form action='<?php echo URL::base(); ?>admin/checkrecipe?id=<?php echo $recipes[0]['id_recipe'];?>' method='post'>
<button value='1' class='button' name='check'>Проверено</button>
</form>
<form action='<?php echo URL::base(); ?>admin/checkrecipe?id=<?php echo $recipes[0]['id_recipe'];?>' method='post'>
<button value='0' class='button' name='check'>Не нужно</button>
</form>