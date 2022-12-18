<!-- shopping cart section starts  -->

<section class="shopping-cart">

    <h1 class="heading">your <span>products</span></h1>

    <div class="box-container">

        <?php foreach ($this->cart->contents() as $items) : ?>
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="" alt="">
                <div class="content">
                    <h3><?= $items['name'] ?></h3>
                    <form action="">
                        <span>quantity : </span>
                        <input type="number" name="" value="<?= $items['qty'] ?>" id="">
                    </form>
                    <div class="price">Rp <?= number_format($items['price'], 0, ',', '.') . ',00' ?></div>
                    <div>Sub Total : Rp <?= number_format($items['subtotal'], 0, ',', '.') . ',00' ?></div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="cart-total">
        <h3> subtotal : <span>Rp <?= number_format($this->cart->total(), 0, ',', '.') . ',00' ?></span> </h3>
        <h3> discount : <span>Rp - </span> </h3>
        <h3> subtotal : <span>Rp <?= number_format($this->cart->total(), 0, ',', '.') . ',00' ?></span> </h3>
        <a href="#" class="btn">proceed to checkout</a>
    </div>

</section>

<!-- shopping cart section ends -->