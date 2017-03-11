//Xác thực xóa dữ liệu

	$(document).ready(function(){

		// xác nhận xóa dữ liệu
		$('p.verify_action').click(function(){
			if(!confirm('Bạn chắc chắn muốn xóa ?'))
			{
				return false;
			}
		});


		$('#checkAll').change(function(){
			$('.checkitem').prop("checked",$(this).prop("checked"));
		});


		var $list_action 	= $('.list_action');//tim toi the co class = list_action
		$list_action.find('#submit').click(function(){ //tim toi the co id = submit,su kien click
			if(!confirm('Bạn chắc chắn muốn xóa tất cả dữ liệu ?'))
			{
				return false;
			}
			
			var ids = new Array();
			$('[name="id[]"]:checked').each(function()
			{
				ids.push($(this).val());
			});
			if (!ids.length) return false;
			
			//link xoa du lieu
		    var url  = $(this).attr('url');
			//ajax để xóa
			$.ajax({
				url:'http://localhost/www/doan_MVC/admin/controller/CateController.php?action=deleteall',
				type: 'POST',
				data : {'ids': ids},
				success: function()
				{
					$(ids).each(function(id, val)
					{
						//xoa cac the <tr> chua danh muc tung ung
						$('tr.row_'+val).fadeOut();			
					});
				}
				
			})
			return false;
		});


	});
	