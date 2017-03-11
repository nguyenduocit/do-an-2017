// https://thienanblog.com/javascript/jquery/huong-dan-su-dung-jquery-validation/
$.validator.setDefaults({
	submitHandler: function() { 
		frm_contact.submit();
	}
});
$().ready(function(){
	alert("vao day chua");
		$("#category").validate({

			rules :{
				name:"required",
				title:"required",
				sort_order:"required",
			},
			messages:{
				name:"Nhập vào tên danh mục !",
				title:"Nhập vào title !",
				sort_order:"Nhập vào thứ tự hiển thị !",

			}

		});

});
