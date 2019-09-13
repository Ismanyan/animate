<div class="col-sm-8 col-lg-9 mtb_20">
    <div class="category-page-wrapper mb_30">
        <div class="list-grid-wrapper pull-left">
            <div class="btn-group btn-list-grid">
                <button type="button" id="grid-view" class="btn btn-default grid-view active"></button>
                <button type="button" id="list-view" class="btn btn-default list-view"></button>
            </div>
        </div>
        <div class="page-wrapper pull-right">
            <label class="control-label" for="input-limit">Show :</label>
            <div class="limit">
                <select id="input-limit" class="form-control">
                    <option value="8" selected="selected">08</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
            </div>
            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </div>
        <div class="sort-wrapper pull-right">
            <label class="control-label" for="input-sort">Sort By :</label>
            <div class="sort-inner">
                <select id="input-sort" class="form-control">
                    <option value="ASC" selected="selected">Default</option>
                    <option value="ASC">Name (A - Z)</option>
                    <option value="DESC">Name (Z - A)</option>
                    <option value="ASC">Price (Low &gt; High)</option>
                    <option value="DESC">Price (High &gt; Low)</option>
                    <option value="DESC">Rating (Highest)</option>
                    <option value="ASC">Rating (Lowest)</option>
                    <option value="ASC">Model (A - Z)</option>
                    <option value="DESC">Model (Z - A)</option>
                </select>
            </div>
            <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
        </div>
    </div>
    <div class="row">
        <?php foreach ($product as $key) : ?>
            <div class="product-layout  product-grid  col-md-4">
                <div class="item">
                    <div class="product-thumb clearfix mb_30">
                        <div class="image product-imageblock"> <a href="<?= base_url('view/product/') . $key['id'] ?>"> <img class="product_image" data-name="<?= $key['product_name'] ?>" src="<?= asset_url() ?>images/produk/<?= $key['product_img'] ?>" class="img-responsive" /> <img src="images/product/product3-1.jpg" alt="<?= $key['product_name'] ?>" title="<?= $key['product_name'] ?>" class="img-responsive" /> </a>
                            <div class="button-group text-center">
                                <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                                <div class="quickview"><a href="#"><span>Quick View</span></a></div>
                                <div class="compare"><a href="#"><span>Compare</span></a></div>
                                <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                            </div>
                        </div>
                        <div class="caption product-detail text-center">
                            <h6 data-name="product_name" class="product-names mt_20"><a href="<?= base_url('view/product/') . $key['id'] ?>" title="<?= $key['product_name'] ?>"><?= $key['product_name'] ?></a></h6>
                            <div class="rating">
                                <?php for ($i = 0; $i < 5; $i++) : ?>
                                    <?php if ($i < $key['product_star']) : ?>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                                    <?php else : ?>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </div>
                            <span class="price"><span class="amount">
                                    Rp.</span><?= number_format($key['product_price'], 0) ?></span>
                            </span>
                            <p class="product-desc mt_20 mb_60" style="tex"><?= $key['product_desc'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination-nav text-center mt_50">
        <ul>
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>
</div>