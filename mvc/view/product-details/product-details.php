<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/product-details/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/d822126298.js" crossorigin="anonymous"></script>

  <title>Document</title>
  <style>
    a:hover {
      text-decoration: none !important;
    }

    #product-details .small-img-group {
      display: flex;
      justify-content: space-between;
    }

    #product-details .small-img-col {
      flex-basis: 24%;
    }

    #product-details .small-img {
      width: 100%;
      height: 80%;
      object-fit: cover;
      opacity: 0.3;
    }

    #product-details .img-fluid {
      width: 600px;
      height: 600px;
      object-fit: cover;
    }

    #product-details .active-img {
      opacity: 1;
    }

    #product-details .product-detail-item-info {
      display: flex;
      justify-content: space-between;
    }

    #product-details .product-detail-item-info>* {
      display: flex;
    }

    #product-details .product-detail-right .divider {
      margin: 15px 0;
      height: 2px;
      background: url("https://ananas.vn/wp-content/themes/ananas/fe-assets/images/bg_divider.png") repeat-x 7px;
    }

    #product-details .product-detail-right .divider1 {
      width: 100%;
      margin: 8px 0;
      height: 2px;
      background: url("https://ananas.vn/wp-content/themes/ananas/fe-assets/images/bg_divider.png") repeat-x 7px;
    }

    #product-details .product-detail-right .cb-color-fixed label {
      padding: 3px 0px 0px 3px;
      width: 40px;
      height: 40px;
      border: rgb(255, 255, 255) 2px solid;
      margin: 4px;
      cursor: pointer;
    }

    #product-details .product-detail-right .cb-color-fixed .bg-color {
      width: 40px;
      height: 40px;
      z-index: 99;
      display: block;
    }

    #product-details .product-detail-item-info.desc {
      font-weight: 400;
    }

    #product-details .row {
      margin-left: 3px;
      margin-right: -10px;
    }

    #product-details .row>div {
      display: block;
      width: 50%;
    }

    #product-details .my-3 {
      height: 40px;
      width: 200px;
      font-size: 20px;
      border-radius: 6px;
    }

    #product-details .btn-addcart {
      width: 70%;
      background-color: black;
      text-align: center;
      font-size: 25px;
      padding: 1em;
      height: 90px;
      font-weight: 600;
    }

    #product-details .btn-addcart {
      color: white;
    }

    #product-details .btn-addcart:hover {
      color: #f15e2c;
    }

    #product-details .btn-favorite {
      width: 27%;
      background-color: black;
      height: 90px;
      font-size: 25px;

      padding: 1em;
      color: red;
      margin-left: 15px;
    }

    #product-details .fa-heart {
      font-size: 30px;
      color: white;
    }

    #product-details .btn-favorite .fa-heart:hover {
      color: red;
    }

    #product-details .isFavorite {
      color: red;
    }

    #product-details .btn-pay {
      margin-top: 0.5em;
      height: 4em;
      width: 100%;
      font-size: 25px;
      font-weight: 600;
      background-color: #f15e2c;
      color: white;
    }

    .product-detail-right>.accordion {
      background-color: white;
      margin-left: 5px;
      width: 100%;
    }

    #product-details .accordion .content-container .question {
      font-weight: 700;
      font-size: 20px;
      padding: 15px 0;
      border-bottom: dashed #333 2x;
      margin-top: 10px;
      margin-left: -2;
      cursor: pointer;
      position: relative;
    }

    #product-details .accordion .content-container .question::after {
      content: "+";
      position: absolute;
      right: 2px;
    }

    #product-details .accordion .content-container .answer {
      padding-top: 15px;
      font-size: 22px;
      line-height: 1.5;
      width: 100%;
      height: 0px;
      overflow: hidden;
      transition: 0.5s;
    }

    /* JS Styling link */
    #product-details .accordion .content-container.active .answer {
      height: 200px;
    }

    #product-details .accordion .content-container.active .question::after {
      content: "-";
      font-size: 20px;
    }

    #product-details .accordion .content-container.active .question {
      color: orange;
    }

    #product-details .btn.btn-pay a {
      color: white;
    }

    #product-details .btn.btn-pay:hover a {
      color: black;
    }

    #product-details .item-name {
      font-weight: 700 !important;
    }

    #product-details .col-xs-12 h3 {
      font-size: 24px;
      font-weight: 600;
    }

    .product-detail-item-info {
      padding-bottom: 15px;
      padding-top: 15px;
    }
  </style>
</head>

<?php

$i = 0;
$row = [];
$row[$i] = mysqli_fetch_array($data["product"]);
$qty = mysqli_fetch_array($data['qty']);


?>

<body>
  <!--Content start-->
  <div id="product-details" class="container product-detail-container-fluid my-5 pt-5">
    <div class="row mt-5">
      <div class="col-lg-5 col-md-12 col-12">
        <img class="img-fluid w-100 pb-1" src="<?php echo $row[$i]['thumb'] ?>" alt="" id="featured-img" />
      </div>

      <div class="col-lg-6 col-md-12 col-12 product-detail-right">
        <h3> <span class="item-name"><?php echo $row[$i]['name'] ?> </span></h3>
        <div class="product-detail-item-info">
          <h6>
            Mã sản phẩm: <span>&nbsp; <strong id="pd_id"><?php echo $row[$i]['id'] ?></strong> </span>
          </h6>
          <h6>
            Tình trạng: <span>&nbsp; <strong><?php if ($qty[0] > 0) echo 'Còn hàng';
                                              else echo 'Hết hàng';  ?></strong> </span>
          </h6>
        </div>
        <h3 style="justify-content: flex-start;" class="product-detail-item-info orange"><?php echo number_format($row[$i]['price'], 0, ",", ".") ?> VNĐ
          <span style="padding-top: 10px" class="sale-off"> <?php echo number_format($row[$i]['price_sale'], 0, ",", ".") ?> VNĐ
        </h3>
        <div class="divider"></div>
        <?php if ($row[$i]['description'] !== "") echo '
        <h6 class="product-detail-item-info desc">
         ' . $row[$i]['description'] . '
        </h6>
        <div class="divider"></div>
        '
        ?>
        <div class="color-picker">
          <ul class="nav tree">

            <?php

            $i = 0;
            $row = [];
            while ($row[$i] = mysqli_fetch_array($data["color"])) {
              echo '
              <li class="cb-color-fixed">
                <label data-link="">
                  <a href="http://localhost/Aglet/product_details?id=' . $row[$i]['parent_id'] . '" class="bg-color" style="background-color: ' . $row[$i]['color'] . '"></a>
                  <input name="cbColor" type="checkbox" value="0" hidden="" />
                </label>
              </li> ';
              $i++;
            }
            ?>
          </ul>
        </div>

        <div class="divider"></div>

        <div class="row">
          <div class="col-xs-12">
            <h3>SIZE</h3>
            <select class="my-3" name="" id="size">
              <option value="" disabled selected>Chọn size giày</option>
              <?php
              $i = 0;
              $row = [];
              while ($row[$i] = mysqli_fetch_array($data["size"])) {
                echo '
                  <option value="' . $row[$i]['size'] . '">' . $row[$i]['size'] . '</option>';
                $i++;
              }
              ?>
            </select>
          </div>
          <div class="col-xs-12">
            <h3>SỐ LƯỢNG</h3>
            <?php
            if ($qty[0] > 0)
              echo '
              <select class="my-3" name="" id="soluong">
                <option value="">Chọn số lượng</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
              </select>';
            else {
              echo '
                <select class="my-3" name="" id="soluong" disabled = "disabled">
                  <option value="">Chọn số lượng</option>
                </select>';
            }
            ?>

          </div>
        </div>
        <div class="row group-btn-1">
          <?php
          if ($qty[0] > 0) {
            echo '
              <button href="javascript:void(0)" class="btn btn-addcart" onclick="addCart(' . $row[0]['parent_id'] . ' )">
                THÊM VÀO GIỎ HÀNG
              </button>
              ';
          } else {
            echo '
                 <button  class="btn btn-addcart" disabled>
                   THÊM VÀO GIỎ HÀNG
                  </button>';
          }

          ?>

          <a href="javascript:void(0)" class="btn btn-favorite"><i class="fa-solid fa-heart" id="favorite-item"></i></a>
        </div>
        <div class="row group-btn-1">
          <?php
          if ($qty[0] > 0) {
            echo '
                <button class="btn btn-pay"><a href="cart">THANH TOÁN </a></button>
              ';
          } else {
            echo '
              <button class="btn btn-pay" disabled>THANH TOÁN</button>
            ';
          }
          ?>

        </div>
        <div class="accordion">
          <div class="content-container">
            <div class="question">THÔNG TIN SẢN PHẨM</div>

          </div>
          <div class="divider1"></div>

          <div class="content-container">
            <div class="question">QUY ĐỊNH ĐỔI SẢN PHẨM</div>

          </div>
          <div class="divider1"></div>

          <div class="content-container">
            <div class="question">BẢO HÀNH THẾ NÀO ?</div>

          </div>
          <div class="divider1"></div>
        </div>
      </div>
    </div>
  </div>

  <!--Scripts-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="./product-details/app.js"></script>
  <script>
    function addCart(id) {
      var sl = $('#soluong').val();
      var size = $('#size').val();
      $.post("http://localhost/aglet/cart/process?id=" + id + "&sl=" + sl + "&size=" + size, function(data, status) {
        alert(data);
      })
    }
  </script>
</body>

</html>