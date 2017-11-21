<h1>New Products</h1>
<?php
    if (isset($productdata)) {
        foreach ($productdata as $row) {       
    ?>
        <div class="product_box">
            <a href="productdetail.html"><img src="<?php echo base_url(); ?>/assets/images/product/<?php echo $row['gambar']; ?>" alt="Image 01" /></a>
            <h3><?php echo $row['product_name']; ?></h3>
            <p class="product_price"><?php echo $row['price']; ?></p>
            <a href="shoppingcart.html" class="add_to_card">Add to Cart</a>
            <a href="<?php echo base_url() ?>index.php/Product/getDetail/<?php echo $row['product_id']; ?>" class="detail">Detail</a>
        </div>  

        <?php 
        }
    }
?>