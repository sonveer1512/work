<h3>Shopping Cart</h3>
<ul>

    <?php
    if (!empty($this->cart->contents())) {
        foreach ($this->cart->contents() as $items) { ?>

            <li class="single-product-cart">
                <div class="cart-img">
                    <a href="<?=base_url().'products/'.$items['options']['slug']?>">
                        <img src="<?=base_url().$items['options']['image']?>" alt="">
                    </a>
                </div>
                <div class="cart-title">
                    <h4><a href="#"> <?=$items['name']?> (<?=$items['options']['varient_name']?>) </a></h4>
                    <span><?=$items['qty']?> × ₹<?=$items['price']?></span>
                </div>
                <div class="cart-delete">
                    <a href="#">×</a>
                </div>
            </li>

    <?php }
    }else{
        echo '<h3>No Data in Cart</h3>';
    } ?>

</ul>
<div class="cart-total">
    <h4>Subtotal: <span>₹ <?=$this->cart->total()?></span></h4>
</div>
<div class="cart-checkout-btn btn-hover default-btn">
    <a class="btn-size-md btn-bg-black btn-color" href="<?=base_url()?>cart">view cart</a>
    <a class="no-mrg btn-size-md btn-bg-black btn-color" href="<?=base_url()?>checkout">checkout</a>
</div>