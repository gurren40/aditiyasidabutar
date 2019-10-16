<div class="background">
	<div class="moon"></div>
	<?php
		$n = 50;
		for($i=0;$i<$n;$i++){
			echo '<div class="littlestar" style="top:'.rand(5,60).'%;left:'.rand(5,95).'%;"></div>';
		}
		$m = 5;
		for($i=0;$i<$m;$i++){
			echo '<div class="littlestar" style="top:'.rand(60,95).'%;left:'.rand(5,95).'%;"></div>';
		}
	?>
</div>
