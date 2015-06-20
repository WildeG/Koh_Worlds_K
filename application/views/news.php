				<center><img src="image/lenta.png"  /></center>
				<div id="carousel">
					<a href="feedback.php"><img src="image/countries/001.jpg" id="item-1" /></a>
					<a href="php/countries/kitchens.php"><img src="image/countries/002.jpg" id="item-2" /></a>
					<a href="php/countries/japanese.php"><img src="image/countries/003.jpg" id="item-3" /></a>
					<a href="#"><img src="image/countries/004.jpg" id="item-4" /></a>
				</div>
				<div>
					<?php
						$sel = "SELECT * FROM `news` LIMIT ".$start.", ".$num_elements;
						$query = mysql_query($sel);
						if(mysql_num_rows($query)>0){
								?><br><div>
								<?php
								while($res = mysql_fetch_array($query)){
								$sel2 = "SELECT * FROM users where id =".$res['id_autors']."";
									$query2 = mysql_query($sel2);
									$res2 = mysql_fetch_array($query2);                 
										echo "<center><h2><b>Новости</h2><div id='news'>
											<img align='left' class='image_news' src=".$res['image']." />
											<h4>".$res['title']."</h4>
											<table id='table_news'>
												<tr>
													<td align='left'><a class='subtitle'>Автор:&nbsp".$res2['name']."&nbsp".$res2['family']."</a></td>
													<td align='right'><a class='subtitle'>".$res['date_added']."</a></td>
												</tr>
												<tr>
													<td colspan='2'><a id='contents'>".join(' ', array_slice(explode( ' ', $res['texts'] ), 0, 15))."...</a></td>
												</tr>
											</table>
											</div></center>";
								}
								?>
								</div>
								<?php
						}
					?>
				</div> 