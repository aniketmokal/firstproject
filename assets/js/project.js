$(document).ready(function(){
	
	
	$('.btn_register').click(function(){
		// alert(1);
		rec = $('#register_form').serialize();
		// console.log(rec);

		$.post("../controllers/register_action.php", rec, function(response){
			// console.log(response);
			// if(response == "ok"){
			// 	$("#register_form").[0].reset();
			// }

			$(".errordiv").html(response);
		})
	})

	// $("#login_form")[0].reset();
	$(".btn_login").click(function(){
		// alert(1);


		rec=$("#login_form").serialize();
		
		// console.log(rec);
		$.post("../controllers/login_action.php",rec,function(res){
			// console.log(res);
			if(res == "success"){
				window.location.href="index.php";
			}
			else{
				$(".errordiv").html(res);
			}
			
		})
	})
	//////////////////////

	$(".btn_password").click(function(){
		// alert(1);


		rec=$("#password_form").serialize();
		
		// console.log(rec);
		$.post("../controllers/password_action.php",rec,function(res){
			// console.log(res);
			
			
			if(res == "success"){
				$("#password_form")[0].reset();
			}
			else{
				$(".errordiv").html(res);
			}
			
			
		})
	})


	$(".btn_hotel").click(function(){
		// alert(1);


		//rec=$("#hotel_form").serialize();

		var form_obj = document.getElementById('hotel_form');
		// alert(form_obj);
		var form_data_obj = new FormData(form_obj)
		// alert(form_data_obj);
		// console.log(rec);
		$.ajax({
			type:"post",
			data:form_data_obj,
			contentType:false,
			processData:false,
			url:"../controllers/hotel-action.php",
			success:function(results){
				$(".errordiv").html(results);

			},
			error:function(eerr){
				console.log(eerr)
			}

		})
	})

	$(".btn_branch").click(function(){
		// alert(1);


		rec=$("#hotel_branch").serialize();
		
		// console.log(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/branch-action.php",
			success:function(results){
				$(".errordiv").html(results);

			},
			error:function(eerr){
				console.log(eerr)
			}

		})
	});

	// alert(1)
	$(".select_hotel").change(function(){
		// alert(1)
		hoid= $(this).val();
		// alert(hoid)
		if(hoid==""){
			alert("Please select Hotel");
		}
		else{
			$.ajax({
				type:"post",
				data:"xyz="+hoid,
				url:"../controllers/getbranch-hotel-wise.php",
				success:function(results){
					// console.log(results)
					$(".branch_select").html(results);
				},
				error:function(eerr){
					console.log(eerr)
				}
			})
		}
	});

	$(".btn_room").click(function(){
		// alert(1);


		rec=$("#hotel_room").serialize();
		
		// console.log(rec);
		$.ajax({
			type:"post",
			data:rec,
			url:"../controllers/room-action.php",
			success:function(results){
				$(".errordiv").html(results);

			},
			error:function(eerr){
				console.log(eerr)
			}

		})
	});

})