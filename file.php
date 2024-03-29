<!-- 1 đọc nội dung của 1 tập tin: file_get_contents('link file) -->
<?php 
$content_1 = file_get_contents('include.txt');
echo "<pre>".$content_1."</pre>";

?>
<hr>
<!--2. Ghi nội dung vào file:file_put_contents() -->
<?php
$content_2 = "đây là nội dung của file";
file_put_contents('text.txt',$content_2);

?>
<hr>
<!-- 3. xoá 1 file:unlink("link file) -->
<?php
 unlink('text.txt');
?> 
<!-- 4.Đọc danh sách tất cả các file trong 1 thư  mục
    scandir('link folder) -->
    <?php
    $list_file = scandir('../b11');
    print_r($list_file);
    echo "<br>";
    foreach($list_file as $file){
        echo $file."<br>";
    }
    
    ?>
    <hr>
    <!-- Kiểm tra sự tồn tại của file: file_exists('link file') -->
    <?php
        if(file_exists('include.txt')){
            echo "file include.txt có tồn tại<br>";
        }else{
            echo "file include.txt không tồn tại<br>";
        }
    ?>
<!-- 6.di chuyển và đổi tên file: rename("link file cũ", "link file mới"); -->
<?php 
    rename('section2.php','layout/section.php');
 ?>

