<?php

if (isset($productdata)) {
?>

    <h1><?php echo $productdata->product_name; ?></h1>
    
    <div class="content_half float_l">
        <a  rel="lightbox[portfolio]" href="<?php echo base_url() ?>assets/images/product/<?php echo $productdata->gambar; ?>">
        <img src="<?php echo base_url() ?>assets/images/product/<?php echo $productdata->gambar; ?>" alt="Image 01" /></a>
    </div>

    <div class="content_half float_r">

        <table>
        <tr>
            <td height="30" width="160">Price: <?php echo $productdata->price; ?></td>
            <td><?php echo $productdata->price; ?></td>
        </tr>
        <tr>
            <td height="30">Availability:</td>
            <td>
                <?php 
                if ($productdata->stock > 0) {
                    echo 'In Stock';
                } else {
                    echo 'Out Stock';
                } ?>
            </td>
        </tr>
        <tr>
            <td height="30">Brand</td>
            <td>Nike</td>
        </tr>
        <tr><td height="30">Stock</td><td><?php echo $productdata->stock ?></td></tr>
        </table>

        <div class="cleaner h20"></div>

    </div>

    <div class="cleaner h30"></div>

    <h5>Product Description</h5>
    <p>
    <?php 

    echo $productdata->product_description;

    ?>
    </p>

    <div class="cleaner h50"></div>

<?php 
}
?>