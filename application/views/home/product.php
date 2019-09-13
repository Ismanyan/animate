<!-- =====  PRODUCT TAB  ===== -->
<div class="container">
    <div id="product-tab" class="mt_50">
        <div class="heading-part mb_10 ">
            <h2 class="main_title">Anime Tv</h2>
        </div>
        <!-- display not found  -->
        <?php if ($anime->num_rows() == 0) : ?>
            <div class="alert alert-warning">
                <strong>Anime</strong> category isn't available yet.
            </div>class="product_image"
        <?php endif; ?>
        <div class="tab-content clearfix box">
            <div class="tab-pane active" id="nArrivals">
                <div class="tab-pane" id="Featured">
                    <div class="Featured owl-carousel">
                        <?php foreach ($anime->result_array() as $key) : ?>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="view/product/<?= $key['id'] ?>"> <img class="product_image" data-name="<?= $key['product_name'] ?>" src="<?= asset_url() ?>images/produk/<?= $key['product_img'] ?>" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> <img src="<?= asset_url() ?>images/product/product2-1.jpg" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href=""><span>wishlist</span></a></div>
                                                <div class="quickview"><a href=""><span>Quick View</span></a></div>
                                                <div class="compare"><a href=""><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href=""><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating">
                                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                                    <?php if ($i < $key['product_star']) : ?>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                                    <?php else : ?>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                            <h6 data-name="product_name" class="product_names"><a href="view/product/<?= $key['id'] ?>" title="<?= $key['product_name'] ?>"><?= $key['product_name'] ?></a></h6>
                                            <br>
                                            <span class="price"><span class="amount"><span class="currencySymbol">Rp.</span><?= number_format($key['product_price'], 0) ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  PRODUCT TAB  END ===== -->

<!-- =====  PRODUCT TAB  ===== -->
<div class="container">
    <div id="product-tab" class="mt_50">
        <div class="heading-part mb_10 ">
            <h2 class="main_title">Manga</h2>
        </div>
        <!-- display not found  -->
        <?php if ($manga->num_rows() == 0) : ?>
            <div class="alert alert-warning">
                <strong>Manga</strong> category isn't available yet.
            </div>
        <?php endif; ?>
        <div class="tab-content clearfix box">
            <div class="tab-pane active" id="nArrivals">
                <div class="tab-pane" id="Featured">
                    <div class="Featured owl-carousel">
                        <?php foreach ($manga->result_array() as $key) : ?>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="view/product/<?= $key['id'] ?>"> <img class="product_image" data-name="product_image" src="<?= asset_url() ?>images/produk/<?= $key['product_img'] ?>" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> <img src="<?= asset_url() ?>images/product/product2-1.jpg" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href=""><span>wishlist</span></a></div>
                                                <div class="quickview"><a href=""><span>Quick View</span></a></div>
                                                <div class="compare"><a href=""><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href=""><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating">
                                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                                    <?php if ($i < $key['product_star']) : ?>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                                    <?php else : ?>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                            <h6 data-name="product_name" class="product_names"><a href="view/product/<?= $key['id'] ?>" title="<?= $key['product_name'] ?>"><?= $key['product_name'] ?></a></h6>
                                            <br>
                                            <span class="price"><span class="amount"><span class="currencySymbol">Rp.</span><?= number_format($key['product_price'], 0) ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  PRODUCT TAB  END ===== -->

<!-- =====  PRODUCT TAB  ===== -->
<div class="container">
    <div id="product-tab" class="mt_50 mb_100">
        <div class="heading-part mb_10 ">
            <h2 class="main_title">Light Novel</h2>
        </div>
        <!-- display not found  -->
        <?php if ($novel->num_rows() == 0) : ?>
            <div class="alert alert-warning">
                <strong>Light Novel</strong> category isn't available yet.
            </div>
        <?php endif; ?>
        <div class="tab-content clearfix box">
            <div class="tab-pane active" id="nArrivals">
                <div class="tab-pane" id="Featured">
                    <div class="Featured owl-carousel">
                        <?php foreach ($novel->result_array() as $key) : ?>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="view/product/<?= $key['id'] ?>"> <img class="product_image" data-name="product_image" src="<?= asset_url() ?>images/produk/<?= $key['product_img'] ?>" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> <img src="<?= asset_url() ?>images/product/product2-1.jpg" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href=""><span>wishlist</span></a></div>
                                                <div class="quickview"><a href=""><span>Quick View</span></a></div>
                                                <div class="compare"><a href=""><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href=""><span>Add to cart</span></a></div>
                                            </div>
                                        </div>
                                        <div class="caption product-detail text-center">
                                            <div class="rating">
                                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                                    <?php if ($i < $key['product_star']) : ?>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                                    <?php else : ?>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </div>
                                            <h6 data-name="product_name" class="product_names"><a href="view/product/<?= $key['id'] ?>" title="<?= $key['product_name'] ?>"><?= $key['product_name'] ?></a></h6>
                                            <br>
                                            <span class="price"><span class="amount"><span class="currencySymbol">Rp.</span><?= number_format($key['product_price'], 0) ?></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  PRODUCT TAB  END ===== -->