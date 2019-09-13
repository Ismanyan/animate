        <div class="col-sm-8 col-lg-9 mtb_20">
            <div class="row mt_10 ">
                <div class="col-md-6">
                    <div><a class="thumbnails"> <img data-name="product_image" src="<?= base_url('assets/images/produk/') . $product['product_img'] ?>" alt="<?= $product['product_name'] ?>" /></a></div>
                </div>
                <div class="col-md-6 prodetail caption product-thumb">
                    <h4 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem"><?= $product['product_name'] ?></a></h4>
                    <div class="rating">
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <?php if ($i < $product['product_star']) : ?>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span>
                            <?php else : ?>
                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span>
                            <?php endif; ?>
                        <?php endfor; ?>
                    </div>
                    <span class="price mb_20"><span class="amount"><span class="currencySymbol">Rp.</span><?= number_format($product['product_price'], 0) ?></span>
                    </span>
                    <hr>
                    <ul class="list-unstyled product_info mtb_20">
                        <li>
                            <label>Category:</label>
                            <span> <a href="#"><?= $product['product_category'] ?></a></span></li>
                        <li>
                            <label>Availability:</label>
                            <span> In Stock</span></li>
                        <li>
                            <label>Transaction :</label>
                            <span> 0</span></li>
                    </ul>
                    <hr>
                    <p class="product-desc mtb_30"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>
                    <div id="product">
                        <div class="qty mt_30 form-group2">
                            <label>Qty</label>
                            <input name="product_quantity" min="1" value="1" type="number">
                        </div>
                        <div class="button-group mt_30">
                            <div class="chat"><a href="#"><img src="<?= base_url('assets/images/chat.png') ?>"></a></div>
                            <div class="wishlist"><a href="#"><span>wishlist</span></a></div>
                            <div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="exTab5" class="mtb_30">
                        <ul class="nav nav-tabs">
                            <li class="active"> <a href="#1c" data-toggle="tab">Overview</a> </li>
                            <li><a href="#2c" data-toggle="tab">Reviews (1)</a> </li>
                            <li><a href="#3c" data-toggle="tab">Solution</a> </li>
                        </ul>
                        <div class="tab-content ">
                            <div class="tab-pane active" id="1c">
                                <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                            </div>
                            <div class="tab-pane" id="2c">
                                <form class="form-horizontal">
                                    <div id="review"></div>
                                    <h4 class="mt_20 mb_30">Write a review</h4>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label" for="input-name">Your Name</label>
                                            <input name="name" value="" id="input-name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label" for="input-review">Your Review</label>
                                            <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                            <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-md-6">
                                            <label class="control-label">Rating</label>
                                            <div class="rates"><span>Bad</span>
                                                <input name="rating" value="1" type="radio">
                                                <input name="rating" value="2" type="radio">
                                                <input name="rating" value="3" type="radio">
                                                <input name="rating" value="4" type="radio">
                                                <input name="rating" value="5" type="radio">
                                                <span>Good</span></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="buttons pull-right">
                                                <button type="submit" class="btn btn-md btn-link">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="3c">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>