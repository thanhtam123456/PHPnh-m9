<!DOCTYPE html>
<html>
<head>
    <title>Danh sach san pham</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- DataTables -->
  <link rel="stylesheet" 
    type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> 
  <script type="text/javascript" 
    charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">    
  </script>
<script type="text/javascript" src="user_guide/js/script.js"></script>
	<style type="text/css">
    #list-book:hover{
      background-color: #343a40;
    }
		img{

			width: 80px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
  <h1 class="display-4 my-4 text-info bg-light ">Danh Sách Admin</h1>
  <table class="table table-striped table-dark" id="user" style="width: 100%;">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Tên</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
    </thead>

  <tbody>
    <?php 
      foreach ($admin as $key => $value) {
        
     ?>
      <tr id="list-book">
            <td><?php echo $value->book_id; ?></td> 
            <td><?php echo $value->book_name; ?></td>
            <!-- <td><?php echo $value->description; ?></td> -->
            <td><img src="<?php echo base_url(); ?>img/book/<?php echo $value->img; ?>"></td>
            <td><?php echo number_format($value->price); ?> VND</td>
            <td><?php echo $value->pub_id;?></td>
            <td><?php echo $value->cat_id; ?></td>
            <td><a onclick="return confirm('bạn có muốn sửa dòng này');" href="#">Edit</a></td>
            <td><a onclick="return confirm('bạn có muốn xóa dòng này');" href="#">Delete</a></td>
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>