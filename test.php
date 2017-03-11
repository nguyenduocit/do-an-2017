<?php
	if(isset($_POST['submit'])){ // Người dùng đã ấn submit
		var_dump($_FILES);
		
		
    if($_FILES['image']['name'] != NULL){ // Đã chọn file
        // Tiến hành code upload file
        if($_FILES['image']['type'] == "image/jpeg"
        || $_FILES['image']['type'] == "image/png"
        || $_FILES['image']['type'] == "image/gif"){
        // là file ảnh
        // Tiến hành code upload  
            if($_FILES['image']['size'] > 9048576){
                echo "File không được lớn hơn 1mb";
            }else{
                // file hợp lệ, tiến hành upload
                $path = 'upload/'.$_FILES['image']['name']; // Đường dẫn chưa file upload
                // Gọi hàm upload file
                $name = $_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'], $path);
                echo "Upload thành công <br />";
                echo "Tên file : ".$name."<br />";
                echo "Kiểu file : ".$_FILES['image']['type']."<br />";
                echo "File size : ".$_FILES['image']['size'];
           }
        }else{
           // không phải file ảnh
           echo "Kiểu file không hợp lệ";
        }
   }else{
        echo "Vui lòng chọn file";
   }
}

 ?>

 <html>
   <!-- the head -->
   <head>
      <meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />
   </head>
   <body>
       <h1>Upload file</h1>
       <form method="post" action="" enctype="multipart/form-data">
                <label>Ảnh minh họa:</label>
                <input type="file"  id="image" name="image">
                <br />
                <input type="submit" class="button" value="Upload" name='submit' />
        </form>
   </body>
</html>