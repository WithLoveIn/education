<div>
	<h4>Решить линейное уравнение: <b>№<?php echo $categories[$number]['id'];?></b></h4>
	
	<h4><b><?php echo $categories[$number]['task'];?></b></h4>
</div>
<div>
	<?php if ($categories[$number]['task_step_1']!=""):?>
		<h4><?php echo $categories[$number]['task_step_1'];?></h4>
		<input type="text" id="step_1" placeholder="<?php echo $categories[$number]['help_step_1'];?>" title="<?php echo $categories[$number]['help_step_1'];?>">
		<span id="check_step_1" class="ms-2"></span>
	<?php endif;?>
	
	<?php if ($categories[$number]['task_step_2']!=""):?>
		<h4><?php echo $categories[$number]['task_step_2'];?></h4>
		<input type="text" id="step_2" placeholder="<?php echo $categories[$number]['help_step_2'];?>" title="<?php echo $categories[$number]['help_step_2'];?>">
		<span id="check_step_2" class="ms-2"></span>
	<?php endif;?>

	<?php if ($categories[$number]['task_step_3']!=""):?>
		<h4><?php echo $categories[$number]['task_step_3'];?></h4>
		<input type="text" id="step_3" placeholder="<?php echo $categories[$number]['help_step_3'];?>" title="<?php echo $categories[$number]['help_step_3'];?>">
		<span id="check_step_3" class="ms-2"></span>
	<?php endif;?>
	
	<h4>Получим</h4>
	<input type="text" id="answer" placeholder="<?php echo $categories[$number]['help_answer'];?>" title="<?php echo $categories[$number]['help_answer'];?>">
	<span id="check_answer" class="ms-2"></span>			
</div>

<button class="btn btn-success my-3" id="check_all">ПРОВЕРИТЬ</button>
<span id="check_all_span" class="ms-2"></span>	
<div>
	<span id='help'>*для подсказки наведите курсор на поле</span>
</div>