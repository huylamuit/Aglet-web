<?php
class productModel extends db{
  public function getProduct(){

  }

  public function product(){
    $qr = "SELECT * FROM products";
    return mysqli_query($this->con, $qr);
  }

  public function findProductWithId($id){
    $qr = "SELECT * FROM PRODUCTS WHERE ID = $id";
    return mysqli_query($this->con, $qr);
  }

  public function paginationQuer($page){
    $total_records_per_page = 10;
    $page--;
    $offset = (   ((int)$page) * (int)$total_records_per_page);


    $qr = "SELECT * FROM PRODUCTS LIMIT " .$total_records_per_page. " offset ".$offset;
    echo $qr;
    return mysqli_query($this->con, $qr);
  }

  public function numOfProducts(){
    $qr = "SELECT COUNT(*) FROM PRODUCTS";
    return mysqli_query($this->con, $qr);
  }

  public function update($name, $description, $menu_id, $price, $price_sale, $active, $thumb, $color, $size){
    $qr = "UPDATE PRODUCTS SET name = $name, description = $description, menu_id = $menu_id, price = $price, price_sale = $price_sale, active = $active, thumb = $thumb, color = $color, size = $size ";
    return mysqli_query($this->con, $qr);
  }
}
