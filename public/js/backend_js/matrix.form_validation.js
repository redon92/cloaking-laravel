
$(document).ready(function(){


	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		$.ajax({
			type: 'get',
			url: '/admin/check-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				// alert(resp);
				if(resp=="false"){
					$("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>");
				}else if(resp=="true"){
                    $("#chkPwd").html("<font color='green'>Current Password is Correct</font>");
				}
			},
			error:function(){
				alert("error");
			}
		});
	});
	
	$('input[type=checkbox],input[type=file]').uniform();

	$('select').select2();
	
	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
	
	$("#password_validate").validate({
		rules:{
			current_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
			new_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});
});
