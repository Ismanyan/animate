<!-- ==== ADD NEW PRODUCT ==== -->
<div class="container mt_50">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-lg" style="background-color:#325fab;" data-toggle="modal" data-target="#add">
        Add New Product
    </button>

    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="addLabel">New Product Detail</h4>
                </div>
                <form action="<?= base_url('admin/add') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" value="<?= set_value('product_name') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="product_price">Product Price</label>
                            <input type="text" class="form-control" id="product_price" name="product_price" required>
                            <small class="text-danger"><?= form_error('product_price') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="product_category">Product Category</label>
                            <select class="form-control" id="product_category" name="product_category" value="<?= set_value('product_category') ?>" required>
                                <option selected disabled>-- Select Category --</option>
                                <option value="1">Anime TV</option>
                                <option value="2">Manga</option>
                                <option value="3">Light Novel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Product Cover</label><br>
                            <input type="file" id="image" style="width:100%" name="image" value="<?= set_value('image') ?>" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#325fab;">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ==== END ADD NEW PRODUCT ==== -->
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
            </div>
        <?php endif; ?>
        <div class="tab-content clearfix box">
            <div class="tab-pane active" id="nArrivals">
                <div class="tab-pane" id="Featured">
                    <div class="Featured owl-carousel">
                        <?php foreach ($anime->result_array() as $key) : ?>
                            <div class="product-grid">
                                <div class="item">
                                    <div class="product-thumb  mb_30">
                                        <div class="image product-imageblock"> <a href="#"> <img class="product_image" data-name="product_image" src="<?= asset_url() ?>images/produk/<?= $key['product_img'] ?>" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> <img src="<?= asset_url() ?>images/product/product2-1.jpg" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
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
                                            <h6 data-name="product_name" class="product_names"><a href="#" title="<?= $key['product_name'] ?>"><?= $key['product_name'] ?></a></h6>
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
                                        <div class="image product-imageblock"> <a href="#"> <img class="product_image" data-name="product_image" src="<?= asset_url() ?>images/produk/<?= $key['product_img'] ?>" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> <img src="<?= asset_url() ?>images/product/product2-1.jpg" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
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
                                            <h6 data-name="product_name" class="product_names"><a href="#" title="<?= $key['product_name'] ?>"><?= $key['product_name'] ?></a></h6>
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
                                        <div class="image product-imageblock"> <a href="#"> <img class="product_image" data-name="product_image" src="<?= asset_url() ?>images/produk/<?= $key['product_img'] ?>" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> <img src="<?= asset_url() ?>images/product/product2-1.jpg" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive"> </a>
                                            <div class="button-group text-center">
                                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
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
                                            <h6 data-name="product_name" class="product_names"><a href="#" title="<?= $key['product_name'] ?>"><?= $key['product_name'] ?></a></h6>
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