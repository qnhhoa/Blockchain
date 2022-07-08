<nav class="navbar navbar-light white" style="position: fixed; width: auto; height: 100%; z-index: 20;align-content: flex-start;">
<a class="navbar-brand" href="checkproduct.php">
</a>

  <div class="navbar-collapse collapse show" id="basicExampleNav">
    <ul class="navbar-nav mr-auto">

    <?php
    if ( isset( $_SESSION['role'] ) ){
    ?>
      <li class="nav-item">
        <a class="nav-link" href="checkproduct.php">Xem sản phẩm</a>
      </li>
    <?php
    if ( $_SESSION['role']==3 ){
    ?>
      <li class="nav-item">
        <a class="nav-link" href="addproduct.php">Thêm sản phẩm</a>
      </li>
    <?php
        }if ($_SESSION['role']==0 ){
    ?>
      <li class="nav-item">
        <a class="nav-link" href="scanshipment.php">Cập nhật vận chuyển</a>
      </li>
    <?php
    }
    if ($_SESSION['role']==1 ){
      ?>
        <li class="nav-item">
          <a class="nav-link" href="updatetrangtrai.php">Cập nhật trang trại</a>
        </li>
      <?php
      }
      if ($_SESSION['role']==2 ){
        ?>
          <li class="nav-item">
            <a class="nav-link" href="updatebaoquan.php">Cập nhật bán lẻ</a>
          </li>
        <?php
        }
    }
    ?>
    </ul>

    <form class="form-inline">
      <div class="md-form my-0">
        <a class="nav-link" href="logout.php" style="padding-left:5px;padding-right:5px;margin-left:0px; width: auto;"> Đăng xuất </a>
      </div>
    </form>

  </div>
</nav>