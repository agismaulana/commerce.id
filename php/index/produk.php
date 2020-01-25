<?php 

include "../logic/logicproduk2.php";

?>

    <div class="container">
        <div class="panel tab-panel my-5" style="background:#aaa;">
            <div class="text-center" style="background:#fe9612;">
                <p class="font" style="font-size:30px;color:#fff;">
                    Offer Sale
                </p>
            </div>

            <div class="container">
                <h2 class="text-light">This Week</h2>
                <p style="font-size:18px;color:#111;">We've pulled together all our advertised <br> offers into one place, so you won't miss out on a great deal</p>
                <div class="row">
                    <?php foreach($produks as $produk) : ?>
                    <div class="col-md-4 my-3">
                        <div class="card mx-2">
                            <div class="card-title">
                                <img src="../../img/produk/<?= $produk['image']; ?>" style="width:100%;height:200px;">
                            </div>
                            <div class="card-body">
                                <h4 class="text-center" style="color:#111;">
                                    <?= $produk['nama_produk'];?>
                                </h4>
                                <p class="text-center" style="font-size:20px;">
                                    Rp.<?= $produk['harga'];?>
                                </p>
                                <div class="text-center">
                                    <a class="btn btn-primary text-light" href="pesan.php?id=<?= $produk['id']?>">Add To Cart</a>
                                    <a class="btn btn-warning text-light" href="detailproduk.php?id=<?= $produk['id'];?>">Detail Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>

                <?php 

                    include "../template/templatepage.php";
                
                ?>
            </div>
        </div>
    </div>