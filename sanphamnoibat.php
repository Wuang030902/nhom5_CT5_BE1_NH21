<?php
$order = new Order ;
$product = new Product;
$get3Product = $order->get3Product();
$getAllProductNew = array();
foreach($get3Product as $value){
    $get3ProductNew = $product->getProductByID($value['id']);
    $getAllProductNew = array_merge($getAllProductNew,$get3ProductNew);
}
foreach ($getAllProductNew as $value) :
?>
    <div class="thumbnail">
        <img src="themes/images/products/<?php echo $value['image'] ?>" alt="Bootshop panasonoc New camera" />
        <div class="caption">
            <h5><?php echo catChuoi($value['name']);?></h5>
            <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo str_replace(",",".",number_format($value['price']))  ?>đ</a></h4>
        </div>
    </div><br />
<?php endforeach; ?>
<div class="thumbnail">
    <img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
    <div class="caption">
        <h5>Payment Methods</h5>
    </div>
</div>
