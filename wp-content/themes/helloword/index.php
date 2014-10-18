<?php 
global $wpdb;
get_header(); ?> 
<div class="container"> 
    Xin chào thế giới. Hello world 
    <div id="list-product">
    	<ul>
    	 <?php
    	// $wpdb = new wpdb(DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
    	$retrieve_data = $wpdb->get_results("SELECT * FROM wp_product");
    	foreach ($retrieve_data as $row) {
    		# code...
    		?><li> <div class="product-item">
	    				<img src="<?php echo $row->product_image; ?>"> 
	    				<p><?php echo $row->product_title;?> <br/><span style="color: red;"><?php echo $row->product_price;  ?></span> </p>
    				</div>
    			</li>
    		<?php
    	} ?>

  	  </ul>


    </div>
   

</div> 
<?php get_footer(); ?>