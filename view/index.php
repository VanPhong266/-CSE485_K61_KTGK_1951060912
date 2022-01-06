<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Hệ thống quản lý đại học</title>
</head>

<body>
  <div class=" container-liquid ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Trang Chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Danh sách</a>
            <a class="nav-link active" aria-current="page" href="#">Thêm </a>
            <a class="nav-link active" aria-current="page" href="#">Sửa</a>
            <a class="nav-link active" aria-current="page" href="#">Xóa</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="col">
    <table class=" table">
      <thead>
        <tr>
          <th scope=" col ">STT</th>
          <th scope="col">Mã giảng viên</th>
          <th scope="col">Họ và Tên</th>
          <th scope="col">Ngày sinh</th>
          <th scope="col">Giới Tính</th>
          <th scope="col">Trình độ</th>
          <th scope="col">Chuyên môn</th>
          <th scope="col">Học hàm</th>
          <th scope="col">Học vị</th>
          <th scope="col">Cơ quan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', '1951060912_university');
        $sql = "SELECT * from giangvien";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $i = 1;
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><?php echo $row['magv']; ?></td>
              <td><?php echo $row['hovaten']; ?></td>
              <td><?php echo $row['ngaysinh']; ?></td>
              <td><?php echo $row['gioitinh']; ?></td>
              <td><?php echo $row['trinhdo']; ?></td>
              <td><?php echo $row['chuyenmon']; ?></td>
              <td><?php echo $row['hocham']; ?></td>
              <td><?php echo $row['hocvi']; ?></td>
              <td><?php echo $row['coquan']; ?></td>
            </tr>
        <?php
            $i++;
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>
</body>
</html>