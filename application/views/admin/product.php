<?php 
    include'templates/header.php';
 ?>

<div class="container-fluid mt-5">
<h1 class="text-center display-4 color-tim">Danh Sách Sản Phẩm</h1>
<hr class="w-50 bg-primary">
    <table class="table table-dark table-hover table-striped" id="users">
    <thead class="name">
        <th>STT</th>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sách</th>
        <th>Giá</th>
        <th>Hình Ảnh</th>
        <th>Mã NSX</th>
        <th>Mã Chuyên Mục</th>
        <th><a href="<?=base_url();?>sachController/addProduct">Them san pham</a></th>

    </thead>
    <tbody>
         <?php $stt=1; ?>
        <?php foreach ($product as $key=> $data):?>
        <tr>
            <td><?= $stt; ?></td>
            <td><?= $data['book_id'];?></td>
            <td><?= $data['book_name'];?></td>
            <td><?= number_format($data['price']);?></td>
            <td><img src="<?=base_url()?>img/book/<?=$data['img'] ?>" width="80"></td>
            <td><?= $data['pub_id'];?></td>
            <td><?= $data['cat_id'];?></td>
            <td><a href="#">update</a></td>
            <td><a href="#">delete</a></td>
        <?php $stt++; ?>
        </tr>
         
        <?php endforeach;?>
        
    </tbody>
</table>
</div>
 <?php 
    include'templates/footer.php';
 ?>