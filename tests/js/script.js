function getCookie(name) {
	  let matches = document.cookie.match(new RegExp(
	    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	  ));
	  return matches ? decodeURIComponent(matches[1]) : undefined;
	}

$('#step_1').on('change', (event)=>{
	var step_1 =$('#step_1').val();	
	var number = getCookie('number');	
	$.ajax({
		type:"POST",
		url:"check_step_1.php",
		data: ({step_1:step_1, number:number}),
		success:function(html){
			$('#check_step_1').html(html);
		}
	});		
})

$('#step_2').on('change', (event)=>{
	var step_2 =$('#step_2').val();	
	var number = getCookie('number');	
	
	$.ajax({
		type:"POST",
		url:"check_step_2.php",
		data: ({step_2:step_2, number:number}),
		success:function(html){
			$('#check_step_2').html(html);
		}
	});		
})

$('#step_3').on('change', (event)=>{
	var step_3 =$('#step_3').val();	
	var number = getCookie('number');	
	
	$.ajax({
		type:"POST",
		url:"check_step_3.php",
		data: ({step_3:step_3, number:number}),
		success:function(html){
			$('#check_step_3').html(html);
		}
	});		
})

$('#check_all').on('click', (event)=>{
	var answer =$('#answer').val();	
	var number = getCookie('number');	
	var subject = getCookie('subject');
	var page = getCookie('page');
	var user_id= getCookie('user');
	var count_check= getCookie('count_check');
	
	$.ajax({
		type:"POST",
		url:"check_all.php",
		data: ({answer:answer, number:number, subject:subject, page:page, user_id:user_id, count_check:count_check}),
		success:function(html){
			$('#check_all_span').html(html);
		}
	});		
})

$('#step_inequality_1').on('change', (event)=>{
	var step_1 =$('#step_inequality_1').val();	
	var number = getCookie('number');	
	$.ajax({
		type:"POST",
		url:"check_inequality_step_1.php",
		data: ({step_1:step_1, number:number}),
		success:function(html){
			$('#check_step_1').html(html);
		}
	});		
})

$('#step_inequality_2').on('change', (event)=>{
	var step_2 =$('#step_inequality_2').val();	
	var number = getCookie('number');	
	
	$.ajax({
		type:"POST",
		url:"check_inequality_step_2.php",
		data: ({step_2:step_2, number:number}),
		success:function(html){
			$('#check_step_2').html(html);
		}
	});		
})

$('#step_inequality_3').on('change', (event)=>{
	var step_3 =$('#step_inequality_3').val();	
	var number = getCookie('number');	
	
	$.ajax({
		type:"POST",
		url:"check_inequality_step_3.php",
		data: ({step_3:step_3, number:number}),
		success:function(html){
			$('#check_step_3').html(html);
		}
	});		
})


$('#check_inequality_all').on('click', (event)=>{
	var answer =$('#answer_inequality').val();	
	var number = getCookie('number');	
	var subject = getCookie('subject');
	var page = getCookie('page');
	var user_id= getCookie('user');
	var count_check= getCookie('count_check');
	
	$.ajax({
		type:"POST",
		url:"check_inequality_all.php",
		data: ({answer:answer, number:number, subject:subject, page:page, user_id:user_id, count_check:count_check}),
		success:function(html){
			$('#check_all_span').html(html);
		}
	});		
})