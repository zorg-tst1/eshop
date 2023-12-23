<section class="mt-3">
    <div class="container pb-md-1 pt-md-14 py-lg-1 overflow-hidden">
        <div class="row align-items-center">

            <!-- Swiper -->
            <div class="swiper-container category-swiper " data-dots="true">
                <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-category">
                        <a href="<?= base_url('home/categories/') ?>" class="text-decoration-none">
                            <img src="<?= base_url('assets/front_end/modern/img/new/dashboard.png') ?>" class="" alt="Explore all" />
                            <h6 class="fs-14 mb-0">See All</h6>
                        </a>
                    </div>

                    <?php foreach ($categories as $key => $row) { ?>
                        <div class="swiper-slide swiper-slide-category">
                            <a href="<?= base_url('products/category/' . html_escape($row['slug'])) ?>" class="text-decoration-none">
                                <img class="lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $row['image'] ?>" alt="<?= html_escape($row['name']) ?>" />
                                <h6 class="fs-14 mb-0"><?= html_escape($row['name']) ?></h6>
                            </a>
                        </div>
                    <?php } ?>

                </div>
                <div class="swiper-controls">
                    <div class="swiper-pagination category-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="slider container">
    <div class="pb-md-1">
        <!--/.row -->
        <!-- <div class="row align-items-center"> -->
        <div class="swiper-container swiper-slide-container overflow-hidden" data-margin="30" data-nav="true" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper-wrapper">
                <?php if (isset($sliders) && !empty($sliders)) { ?>
                    <?php foreach ($sliders as $row) { ?>
                        <div class="swiper-slide">
                            <div class="slide-img">
                                <a href="<?= $row['link'] ?>">
                                    <img src="<?= base_url($row['image']) ?>" alt="Offer Slider" style="object-fit: cover;">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-controls">
            <div class="swiper-pagination slide-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
            </div>
        </div>
    </div>
</section>
<!-- sections -->

<?php if (isset($brands) && !empty($brands) && $brands != []) { ?>
    <section class="mt-3">
        <div class="container pb-md-1 pt-md-14 py-lg-1 overflow-hidden">
            <div class="row align-items-center">
                <div class="my-4 featured-section-title">
                    <div class="d-md-flex justify-content-md-between">
                        <div>
                            <h3 class="text-dark mb-0">Brands</h3>
                        </div>
                        <div>
                            <a href="<?= base_url('home/brands/') ?>" class="hover text-decoration-none">
                                <span> <?= !empty($this->lang->line('see_all')) ? $this->lang->line('see_all') : 'See All' ?></span>
                                <i class="uil uil-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Swiper -->
                <div class="swiper-container category-swiper " data-dots="true">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($brands as $key => $row) { ?>
                            <div class="swiper-slide swiper-slide-category">
                                <a href="<?= base_url('products?brand=' . html_escape($row['brand_slug'])) ?>" class="text-decoration-none">
                                    <img class="lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $row['brand_img'] ?>" alt="<?= html_escape($row['brand_name']) ?>" />
                                    <h6 class="fs-14 mb-0"><?= html_escape($row['brand_name']) ?></h6>
                                </a>
                            </div>
                        <?php }
                        ?>

                    </div>
                    <div class="swiper-controls">
                        <div class="swiper-pagination category-swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php } ?>


<!-- sections -->
<section class="container main-content">

    <?php $offer_counter = 0;
    $offers =  get_offers();

    foreach ($sections as $count_key => $row) {
        if (!empty($row['product_details'])) {
            if ($row['style'] == 'default') {
                if ($count_key != 0) {
                    $offer_counter++;
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <div class="offer-img">
                            <a href="<?= $offers[$count_key - 1]['link'] ?>">
                                <img class="img-fluid  my-4 rounded offer-image lazy" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>" alt="Offer image" src="https://placehold.co/1290x268?text=Loading%20Offers..%20.&font=Montserrat" style="object-fit: cover;">
                            </a>
                        </div>
                <?php }
                } ?>

                <!-- Default style -->
                <section class="wrapper mt-4">
                    <div class="my-4 featured-section-title">
                        <div class="d-md-flex justify-content-md-between">
                            <div>
                                <h3 class="mb-0 section-title"><?= ucfirst($row['title']) ?></h3>
                                <h6 class="title-sm text-muted"><?= $row['short_description']; ?></h6>
                            </div>
                            <div>
                                <a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="btn btn-expand btn-soft-primary rounded-pill">
                                    <i class="uil uil-arrow-right"></i>
                                    <span> <?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-view shop mb-13">
                        <div class="row isotope">
                            <?php if (isset($row['product_details']) && !empty($row['product_details'])) { ?>
                                <?php
                                $i = 0;
                                if (count($row['product_details']) > 0) {
                                    foreach ($row['product_details'] as $product_row) {
                                        if ($i == 4) {
                                            break;
                                        }
                                ?>
                                        <div class="project item col-md-6 col-xl-3">
                                            <figure class="rounded d-flex justify-content-center">
                                                <div>
                                                    <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                        <img class="lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $product_row['image_sm'] ?>" alt="<?= $product_row['name'] ?>" style="object-fit: cover;" />
                                                    </a>
                                                </div>

                                                <a class="item-like text-decoration-none add-to-fav-btn 
                                            <?= ($product_row['is_favorite'] == 1) ? 'fa fa-heart' : 'fa fa-heart-o' ?>  
                                            " href="#" data-bs-toggle="white-tooltip" title="Add to wishlist" data-product-id="<?= $product_row['id'] ?>" style="color: <?= ($product_row['is_favorite'] == 1) ? 'red' : '' ?>">
                                                    <i class=""></i>
                                                </a>

                                                <a href="#" class="quick-view-btn item-view text-decoration-none" data-bs-toggle="white-tooltip" title="Quick View" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                    <i class="uil uil-eye"></i>
                                                </a>
                                                <?php
                                                if (count($product_row['variants']) <= 1) {
                                                    $variant_id = $product_row['variants'][0]['id'];
                                                    $modal = "";
                                                } else {
                                                    $variant_id = "";
                                                    $modal = "#quick-view";
                                                }
                                                ?>

                                                <?php
                                                if (count($product_row['variants']) <= 1) {
                                                    $variant_id = $product_row['variants'][0]['id'];
                                                } else {
                                                    $variant_id = "";
                                                }
                                                ?>
                                                <a href="#" class="compare item-compare text-decoration-none" data-tip="Compare" data-bs-toggle="white-tooltip" title="compare" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>">
                                                    <i class="uil uil-exchange-alt"></i>
                                                </a>

                                                <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                    <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
                                                        <span class="d-flex mt-3 ms-2"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                    </span>
                                                <?php } ?>

                                                <?php $variant_price = ($product_row['variants'][0]['special_price'] > 0 && $product_row['variants'][0]['special_price'] != '') ? $product_row['variants'][0]['special_price'] : $product_row['variants'][0]['price'];
                                                $data_min = (isset($product_row['minimum_order_quantity']) && !empty($product_row['minimum_order_quantity'])) ? $product_row['minimum_order_quantity'] : 1;
                                                $data_step = (isset($product_row['minimum_order_quantity']) && !empty($product_row['quantity_step_size'])) ? $product_row['quantity_step_size'] : 1;
                                                $data_max = (isset($product_row['total_allowed_quantity']) && !empty($product_row['total_allowed_quantity'])) ? $product_row['total_allowed_quantity'] : 0;
                                                ?>
                                                <a href="#" class="add_to_cart item-cart text-decoration-none" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-product-slug="<?= $product_row['slug'] ?>" data-product-title="<?= $product_row['name'] ?>" data-product-image="<?= $product_row['image']; ?>" data-product-price="<?= $variant_price; ?>" data-min="<?= $data_min; ?>" data-step="<?= $data_step; ?>" data-product-description="<?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['short_description'])))); ?>" data-izimodal-open="<?= $modal ?>">
                                                    <i class="uil uil-shopping-bag"></i>&nbsp;<?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>

                                            </figure>
                                            <div class="post-header text-center mt-4">
                                                <input id="input" name="rating" class="rating rating-loading d-none" data-size="xs" value="<?= $product_row['rating'] ?>" data-show-clear="false" data-show-caption="false" readonly>
                                                <!-- </div> -->
                                                <h4 class="title post-title m-0 mt-2" title="<?= output_escaping(str_replace('\r\n', '&#13;&#10;', $product_row['name'])) ?>" style="font-size: 16px;">
                                                    <a class="link-dark text-decoration-none" href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['name']))), 35) ?></a>
                                                </h4>
                                                <?php 
                                                if (($product_row['variants'][0]['special_price'] < $product_row['variants'][0]['price']) && ($product_row['variants'][0]['special_price'] != 0)) { ?>
                                                    <p class="mb-0 mt-2 price text-muted">
                                                        <span id="price" style='font-size: 20px;'>
                                                            <?php echo $settings['currency'] ?>
                                                            <?php
                                                            $price = $product_row['variants'][0]['special_price'];
                                                            echo number_format($price, 2);
                                                            ?>
                                                        </span>
                                                        <sup>
                                                            <span class="special-price striped-price text-danger" id="product-striped-price-div">
                                                                <s id="striped-price">
                                                                    <?php echo $settings['currency'] ?>
                                                                    <?php $price = $product_row['variants'][0]['price'];
                                                                    echo number_format($price, 2);
                                                                    // echo $price;
                                                                    ?>
                                                                </s>
                                                            </span>
                                                        </sup>
                                                    </p>
                                                <?php } else { ?>
                                                    <p class="mb-0 mt-2 price text-muted">
                                                        <span id="price" style='font-size: 20px;'>
                                                            <?php echo $settings['currency'] ?>
                                                            <?php
                                                            $price = $product_row['variants'][0]['price'];
                                                            echo number_format($price, 2);
                                                            ?>
                                                        </span>
                                                    </p>
                                                <?php } ?>
                                            </div>
                                            <!-- /.post-header -->
                                        </div>

                                <?php $i++;
                                    }
                                } ?>
                            <?php } ?>
                            <!-- /.item -->

                            <!-- /.item -->
                        </div>
                        <!-- /.row -->
                    </div>
                </section>


                <!-- style 1  -->
                <?php } else if ($row['style'] == 'style_1') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <div class="offer-img">
                            <a href="<?= $offers[$count_key - 1]['link'] ?>">
                                <img class="img-fluid lazy my-4 rounded offer-image" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>" alt="Offer image" src="https://placehold.co/1290x268?text=Loading%20Offers..%20.&font=Montserrat" style="object-fit: cover;">
                            </a>
                        </div>
                <?php }
                }
                ?>

                <section class="mt-md-5 wrapper">
                    <div>
                        <div class="align-items-center gx-xl-12 row">
                            <div class="col-lg-9">
                                <div class="swiper-container text-center" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                                    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events mb-4">
                                        <div class="swiper-wrapper">
                                            <?php $product_count = count($row['product_details']) - 1; ?>
                                            <?php
                                            $i = 0;
                                            if (count($row['product_details']) > 0) {
                                                foreach ($row['product_details'] as $key => $product_row) {
                                                    if ($i == 8) {
                                                        break;
                                                    }
                                            ?>
                                                    <?php if ($key != 0) { ?>
                                                        <div class="swiper-slide shadow-xl product-bg" style="width: 280px; margin-right: 30px;">
                                                            <figure class="rounded ">
                                                                <div>
                                                                    <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                                        <img class="lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $product_row['image_sm'] ?>" alt="<?= $product_row['name'] ?>" style="object-fit: cover;">
                                                                    </a>
                                                                </div>

                                                                <a class="item-like text-decoration-none add-to-fav-btn 
                                                            <?= ($product_row['is_favorite'] == 1) ? 'fa fa-heart' : 'fa fa-heart-o' ?>  
                                                            " href="#" data-bs-toggle="white-tooltip" title="Add to wishlist" data-product-id="<?= $product_row['id'] ?>" style="color: <?= ($product_row['is_favorite'] == 1) ? 'red' : '' ?>">
                                                                    <i class=""></i>
                                                                </a>

                                                                <a href="#" class="quick-view-btn item-view text-decoration-none" data-bs-toggle="white-tooltip" title="Quick View" data-tip="Quick View" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                                    <i class="uil uil-eye"></i>
                                                                </a>
                                                                <?php
                                                                if (count($product_row['variants']) <= 1) {
                                                                    $variant_id = $product_row['variants'][0]['id'];
                                                                    $modal = "";
                                                                } else {
                                                                    $variant_id = "";
                                                                    $modal = "#quick-view";
                                                                }
                                                                ?>

                                                                <?php
                                                                if (count($product_row['variants']) <= 1) {
                                                                    $variant_id = $product_row['variants'][0]['id'];
                                                                } else {
                                                                    $variant_id = "";
                                                                }
                                                                ?>
                                                                <a href="#" class="compare item-compare text-decoration-none" data-bs-toggle="white-tooltip" title="Compare" data-tip="Quick View" data-tip="Compare" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>">
                                                                    <i class="uil uil-exchange-alt"></i>
                                                                </a>

                                                                <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                                    <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
                                                                        <span class="d-flex mt-3 ms-2"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                                    </span>
                                                                <?php } ?>

                                                                <div class="card-body mb-7 mt-4">
                                                                    <input id="input" name="rating" class="rating rating-loading d-none" data-size="xs" value="<?= $product_row['rating'] ?>" data-show-clear="false" data-show-caption="false" readonly>
                                                                    <div class="product-content  mt-2">
                                                                        <h4 class="title post-title m-0" title="<?= output_escaping(str_replace('\r\n', '&#13;&#10;', $product_row['name'])) ?>" style="font-size: 16px;">
                                                                            <a class="link-dark text-decoration-none" href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['name'])))) ?></a>
                                                                        </h4>
                                                                        <p class="mb-0 mt-2 price text-muted">
                                                                            <span id="price" style='font-size: 20px;'>
                                                                                <?php echo $settings['currency'] ?>
                                                                                <?php
                                                                                $price = $product_row['variants'][0]['special_price'];
                                                                                echo number_format($price, 2);
                                                                                ?>
                                                                            </span>
                                                                            <sup>
                                                                                <span class="special-price striped-price text-danger" id="product-striped-price-div">
                                                                                    <s id="striped-price">
                                                                                        <?php echo $settings['currency'] ?>
                                                                                        <?php $price = $product_row['variants'][0]['price'];
                                                                                        echo number_format($price, 2);
                                                                                        // echo $price;
                                                                                        ?>
                                                                                    </s>
                                                                                </span></sup>
                                                                        </p>
                                                                        <!-- <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2"><i class="uil uil-shopping-bag"></i>&nbsp; Add to Cart</a> -->

                                                                        <?php $variant_price = ($product_row['variants'][0]['special_price'] > 0 && $product_row['variants'][0]['special_price'] != '') ? $product_row['variants'][0]['special_price'] : $product_row['variants'][0]['price'];
                                                                        $data_min = (isset($product_row['minimum_order_quantity']) && !empty($product_row['minimum_order_quantity'])) ? $product_row['minimum_order_quantity'] : 1;
                                                                        $data_step = (isset($product_row['minimum_order_quantity']) && !empty($product_row['quantity_step_size'])) ? $product_row['quantity_step_size'] : 1;
                                                                        $data_max = (isset($product_row['total_allowed_quantity']) && !empty($product_row['total_allowed_quantity'])) ? $product_row['total_allowed_quantity'] : 0;
                                                                        ?>
                                                                        <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-product-title="<?= $product_row['name'] ?>" data-product-slug="<?= $product_row['slug'] ?>" data-product-image="<?= $product_row['image']; ?>" data-product-price="<?= $variant_price; ?>" data-min="<?= $data_min; ?>" data-step="<?= $data_step; ?>" data-product-description="<?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['short_description'])))); ?>" data-izimodal-open="<?= $modal ?>">
                                                                            <i class="uil uil-shopping-bag"></i>&nbsp;<?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>

                                                                    </div>
                                                            </figure>
                                                            <!-- /.social -->
                                                        </div>
                                                        <!--/.swiper-slide -->

                                                <?php }
                                                    $i++;
                                                } ?>
                                            <?php } ?>
                                        </div>
                                        <!--/.swiper-wrapper -->
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                    <!-- /.swiper -->
                                    <div class="swiper-controls">
                                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                                            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- /.swiper-container -->
                            </div>
                            <!--/column -->
                            <div class="col-lg-3">
                                <h3 class="mb-0 text-dark"><?= ucfirst($row['title']) ?></h3>
                                <h6 class="title-sm text-muted"><?= $row['short_description']; ?></h6>
                                <a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="btn btn-expand btn-soft-primary rounded-pill">
                                    <i class="uil uil-arrow-right"></i>
                                    <span> <?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></span>
                                </a>
                            </div>
                            <!--/column -->
                        </div>
                    </div>
                </section>


                <!-- style 2  -->
                <?php } else if ($row['style'] == 'style_2') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <div class="offer-img">
                            <a href="<?= $offers[$count_key - 1]['link'] ?>">
                                <img class="img-fluid lazy my-4 rounded offer-image" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>" alt="Offer image" src="https://placehold.co/1290x268?text=Loading%20Offers..%20.&font=Montserrat" style="object-fit: cover;">
                            </a>
                        </div>
                <?php }
                }
                ?>

                <section class="mt-md-8 wrapper">
                    <div>
                        <div class="align-items-center gx-lg-8 gx-xl-12 row">
                            <div class="col-lg-3 mb-2">
                                <h3 class="mb-0 section-title"><?= ucfirst($row['title']) ?></h3>
                                <h6 class="title-sm text-muted"><?= $row['short_description']; ?></h6>
                                <a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="btn btn-expand btn-soft-primary rounded-pill">
                                    <i class="uil uil-arrow-right"></i>
                                    <span><?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></span>
                                </a>
                            </div>
                            <!--/column -->
                            <div class="col-lg-9">
                                <div class="swiper-container text-center swiper-container-1" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                                    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events mb-4">
                                        <div class="swiper-wrapper">
                                            <?php $product_count = count($row['product_details']) - 1; ?>
                                            <?php
                                            $i = 0;
                                            if (count($row['product_details']) > 0) {
                                                foreach ($row['product_details'] as $key => $product_row) {
                                                    if ($i == 8) {
                                                        break;
                                                    }
                                            ?>
                                                    <?php if ($key != 0) { ?>
                                                        <div class="swiper-slide shadow-xl product-bg" style="width: 280px; margin-right: 30px;">
                                                            <figure class="rounded ">
                                                                <div>
                                                                    <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                                        <img class="lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $product_row['image_sm'] ?>" alt="<?= $product_row['name'] ?>" style="object-fit: cover;">
                                                                    </a>
                                                                </div>

                                                                <a class="item-like text-decoration-none add-to-fav-btn 
                                                            <?= ($product_row['is_favorite'] == 1) ? 'fa fa-heart' : 'fa fa-heart-o' ?>  
                                                            " href="#" data-bs-toggle="white-tooltip" title="Add to wishlist" data-product-id="<?= $product_row['id'] ?>" style="color: <?= ($product_row['is_favorite'] == 1) ? 'red' : '' ?>">
                                                                    <i class=""></i>
                                                                </a>

                                                                <a href="#" class="quick-view-btn item-view text-decoration-none" data-bs-toggle="white-tooltip" title="Quick View" data-tip="Quick View" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                                    <i class="uil uil-eye"></i>
                                                                </a>
                                                                <?php
                                                                if (count($product_row['variants']) <= 1) {
                                                                    $variant_id = $product_row['variants'][0]['id'];
                                                                    $modal = "";
                                                                } else {
                                                                    $variant_id = "";
                                                                    $modal = "#quick-view";
                                                                }
                                                                ?>

                                                                <?php
                                                                if (count($product_row['variants']) <= 1) {
                                                                    $variant_id = $product_row['variants'][0]['id'];
                                                                } else {
                                                                    $variant_id = "";
                                                                }
                                                                ?>
                                                                <a href="#" class="compare item-compare text-decoration-none" data-bs-toggle="white-tooltip" title="Compare" data-tip="Quick View" data-tip="Compare" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>">
                                                                    <i class="uil uil-exchange-alt"></i>
                                                                </a>

                                                                <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                                    <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
                                                                        <span class="d-flex mt-3 ms-2"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                                    </span>
                                                                <?php } ?>

                                                                <div class="card-body mb-7 mt-4">
                                                                    <input id="input" name="rating" class="rating rating-loading d-none" data-size="xs" value="<?= $product_row['rating'] ?>" data-show-clear="false" data-show-caption="false" readonly>
                                                                    <div class="product-content  mt-2">
                                                                        <h4 class="title post-title m-0" title="<?= output_escaping(str_replace('\r\n', '&#13;&#10;', $product_row['name'])) ?>" style="font-size: 16px;">
                                                                            <a class="link-dark text-decoration-none" href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['name'])))) ?></a>
                                                                        </h4>
                                                                        <?php if (($product_row['variants'][0]['special_price'] < $product_row['variants'][0]['price']) && ($product_row['variants'][0]['special_price'] != 0)) { ?>
                                                                            <p class="mb-0 mt-2 price text-muted">
                                                                                <span id="price" style='font-size: 20px;'>
                                                                                    <?php echo $settings['currency'] ?>
                                                                                    <?php
                                                                                    $price = $product_row['variants'][0]['special_price'];
                                                                                    echo number_format($price, 2);
                                                                                    ?>
                                                                                </span>
                                                                                <sup>
                                                                                    <span class="special-price striped-price text-danger" id="product-striped-price-div">
                                                                                        <s id="striped-price">
                                                                                            <?php echo $settings['currency'] ?>
                                                                                            <?php $price = $product_row['variants'][0]['price'];
                                                                                            echo number_format($price, 2);
                                                                                            // echo $price;
                                                                                            ?>
                                                                                        </s>
                                                                                    </span>
                                                                                </sup>
                                                                            </p>
                                                                        <?php } else { ?>
                                                                            <p class="mb-0 mt-2 price text-muted">
                                                                                <span id="price" style='font-size: 20px;'>
                                                                                    <?php echo $settings['currency'] ?>
                                                                                    <?php
                                                                                    $price = $product_row['variants'][0]['price'];
                                                                                    echo number_format($price, 2);
                                                                                    ?>
                                                                                </span>
                                                                            </p>
                                                                        <?php } ?>
                                                                        <!-- <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2"><i class="uil uil-shopping-bag"></i>&nbsp; Add to Cart</a> -->

                                                                        <?php $variant_price = ($product_row['variants'][0]['special_price'] > 0 && $product_row['variants'][0]['special_price'] != '') ? $product_row['variants'][0]['special_price'] : $product_row['variants'][0]['price'];
                                                                        $data_min = (isset($product_row['minimum_order_quantity']) && !empty($product_row['minimum_order_quantity'])) ? $product_row['minimum_order_quantity'] : 1;
                                                                        $data_step = (isset($product_row['minimum_order_quantity']) && !empty($product_row['quantity_step_size'])) ? $product_row['quantity_step_size'] : 1;
                                                                        $data_max = (isset($product_row['total_allowed_quantity']) && !empty($product_row['total_allowed_quantity'])) ? $product_row['total_allowed_quantity'] : 0;
                                                                        ?>
                                                                        <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-product-title="<?= $product_row['name'] ?>" data-product-slug="<?= $product_row['slug'] ?>" data-product-image="<?= $product_row['image']; ?>" data-product-price="<?= $variant_price; ?>" data-min="<?= $data_min; ?>" data-step="<?= $data_step; ?>" data-product-description="<?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['short_description'])))); ?>" data-izimodal-open="<?= $modal ?>">
                                                                            <i class="uil uil-shopping-bag"></i>&nbsp;<?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>

                                                                    </div>
                                                            </figure>
                                                            <!-- /.social -->
                                                        </div>
                                                        <!--/.swiper-slide -->

                                                <?php }
                                                    $i++;
                                                } ?>
                                            <?php } ?>
                                        </div>
                                        <!--/.swiper-wrapper -->
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                    <!-- /.swiper -->
                                    <div class="swiper-controls">
                                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal product-swiper-pagination">
                                            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                                            <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.swiper-container -->
                            </div>
                            <!--/column -->
                        </div>
                    </div>
                </section>

                <!-- Style 3 Design -->
                <!-- First Product -->
                <?php } else if ($row['style'] == 'style_3') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <div class="offer-img">
                            <a href="<?= $offers[$count_key - 1]['link'] ?>">
                                <img class="img-fluid lazy my-4 rounded offer-image" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>" alt="Offer image" src="https://placehold.co/1290x268?text=Loading%20Offers..%20.&font=Montserrat" style="object-fit: cover;">
                            </a>
                        </div>
                <?php }
                }
                ?>
                <?php $first_product = $row['product_details'][0]; ?>
                <div class="bg-white d-flex align-items-center flex-wrap">
                    <div class="col-md-4 col-12 style-3-product-right-lg">
                        <div class="card project item">
                            <figure class="">
                                <div class="product-image-container d-flex align-items-center justify-content-center">
                                    <div>
                                        <a href="<?= base_url('products/details/' . $first_product['slug']) ?>">
                                            <img class="pic-1 lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $first_product['image_sm'] ?>" alt="<?= $first_product['name'] ?>" style="object-fit: cover; height:100% !important;">
                                        </a>
                                    </div>
                                </div>

                                <a class="item-like text-decoration-none add-to-fav-btn 
                                            <?= ($first_product['is_favorite'] == 1) ? 'fa fa-heart' : 'fa fa-heart-o' ?>  
                                            " href="#" data-bs-toggle="white-tooltip" title="Add to wishlist" data-product-id="<?= $first_product['id'] ?>" style="color: <?= ($first_product['is_favorite'] == 1) ? 'red' : '' ?>">
                                    <i class=""></i>
                                </a>

                                <a href="#" class="quick-view-btn item-view text-decoration-none" data-bs-toggle="white-tooltip" title="Quick View" data-tip="Quick View" data-tip="Quick View" data-product-id="<?= $first_product['id'] ?>" data-product-variant-id="<?= $first_product['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                    <i class="uil uil-eye"></i>
                                </a>
                                <?php
                                if (count($first_product['variants']) <= 1) {
                                    $variant_id = $first_product['variants'][0]['id'];
                                    $modal = "";
                                } else {
                                    $variant_id = "";
                                    $modal = "#quick-view";
                                }
                                ?>

                                <?php
                                if (count($first_product['variants']) <= 1) {
                                    $variant_id = $first_product['variants'][0]['id'];
                                } else {
                                    $variant_id = "";
                                }
                                ?>
                                <a href="#" class="compare item-compare text-decoration-none" data-bs-toggle="white-tooltip" title="Compare" data-tip="Quick View" data-tip="Compare" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>">
                                    <i class="uil uil-exchange-alt"></i>
                                </a>

                                <?php if (isset($first_product['min_max_price']['special_price']) && $first_product['min_max_price']['special_price'] != '' && $first_product['min_max_price']['special_price'] != 0 && $first_product['min_max_price']['special_price'] < $first_product['min_max_price']['min_price']) { ?>
                                    <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
                                        <span class="d-flex mt-3 ms-2"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                    </span>
                                <?php } ?>

                                <div class="mb-7 mt-4 text-center">
                                    <input id="input" name="rating" class="rating rating-loading d-none" data-size="xs" value="<?= $first_product['rating'] ?>" data-show-clear="false" data-show-caption="false" readonly>
                                    <div class="product-content mt-2">
                                        <h4 class="title post-title m-0" title="<?= output_escaping(str_replace('\r\n', '&#13;&#10;', $first_product['name'])) ?>" style="font-size: 16px;">
                                            <a class="link-dark text-decoration-none" href="<?= base_url('products/details/' . $first_product['slug']) ?>"><?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($first_product['name'])))) ?></a>
                                        </h4>
                                        <?php if (($first_product['variants'][0]['special_price'] < $first_product['variants'][0]['price']) && ($first_product['variants'][0]['special_price'] != 0))  { ?>
                                            <p class="mb-0 mt-2 price text-muted">
                                                <span id="price" style='font-size: 20px;'>
                                                    <?php echo $settings['currency'] ?>
                                                    <?php
                                                    $price = $first_product['variants'][0]['special_price'];
                                                    echo number_format($price, 2);
                                                    ?>
                                                </span>
                                                <sup>
                                                    <span class="special-price striped-price text-danger" id="product-striped-price-div">
                                                        <s id="striped-price">
                                                            <?php echo $settings['currency'] ?>
                                                            <?php $price = $first_product['variants'][0]['price'];
                                                            echo number_format($price, 2);
                                                            // echo $price;
                                                            ?>
                                                        </s>
                                                    </span>
                                                </sup>
                                            </p>
                                        <?php } else { ?>
                                            <p class="mb-0 mt-2 price text-muted">
                                                <span id="price" style='font-size: 20px;'>
                                                    <?php echo $settings['currency'] ?>
                                                    <?php
                                                    $price = $first_product['variants'][0]['price'];
                                                    echo number_format($price, 2);
                                                    ?>
                                                </span>
                                            </p>
                                        <?php } ?>
                                        <!-- <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2"><i class="uil uil-shopping-bag"></i>&nbsp; Add to Cart</a> -->

                                        <?php $variant_price = ($first_product['variants'][0]['special_price'] > 0 && $first_product['variants'][0]['special_price'] != '') ? $first_product['variants'][0]['special_price'] : $first_product['variants'][0]['price'];
                                        $data_min = (isset($first_product['minimum_order_quantity']) && !empty($first_product['minimum_order_quantity'])) ? $first_product['minimum_order_quantity'] : 1;
                                        $data_step = (isset($first_product['minimum_order_quantity']) && !empty($first_product['quantity_step_size'])) ? $first_product['quantity_step_size'] : 1;
                                        $data_max = (isset($first_product['total_allowed_quantity']) && !empty($first_product['total_allowed_quantity'])) ? $first_product['total_allowed_quantity'] : 0;
                                        ?>
                                        <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2" data-product-id="<?= $first_product['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-product-title="<?= $first_product['name'] ?>" data-product-slug="<?= $first_product['slug'] ?>" data-product-image="<?= $first_product['image']; ?>" data-product-price="<?= $variant_price; ?>" data-min="<?= $data_min; ?>" data-step="<?= $data_step; ?>" data-product-description="<?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($first_product['short_description'])))); ?>" data-izimodal-open="<?= $modal ?>">
                                            <i class="uil uil-shopping-bag"></i>&nbsp;<?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>


                                    </div>
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 products-list">
                        <div class="row">
                            <div class="my-4">

                                <div class="d-md-flex align-items-md-center justify-content-md-between">
                                    <div class="">
                                        <h3 class="mb-0 section-title"><?= ucfirst($row['title']) ?></h3>
                                        <h6 class="title-sm text-muted"><?= $row['short_description']; ?></h6>
                                    </div>

                                    <div class="">
                                        <a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="btn btn-expand btn-soft-primary rounded-pill">
                                            <i class="uil uil-arrow-right"></i>
                                            <span><?= !empty($this->lang->line('view_more')) ? $this->lang->line('view_more') : 'View More' ?></span>
                                        </a>
                                    </div>
                                </div>
                                <hr class="mb-0 mt-4">
                            </div>
                            <?php $product_count = count($row['product_details']) - 1; ?>

                            <?php
                            $i = 0;
                            if (count($row['product_details']) > 0) {
                                foreach ($row['product_details'] as $key => $product_row) {
                                    if ($i == 4) {
                                        break;
                                    }
                            ?>
                                    <?php if ($key != 0) { ?>
                                        <div class="col-md-4 mt-5">
                                            <div class="card item project">
                                                <figure class="">
                                                    <div>
                                                        <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                            <img class="lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $product_row['image_sm'] ?>" alt="<?= $product_row['name'] ?>" style="object-fit: cover;">
                                                        </a>
                                                    </div>

                                                    <a class="item-like text-decoration-none add-to-fav-btn 
                                            <?= ($product_row['is_favorite'] == 1) ? 'fa fa-heart' : 'fa fa-heart-o' ?>  
                                            " href="#" data-bs-toggle="white-tooltip" title="Add to wishlist" data-product-id="<?= $product_row['id'] ?>" style="color: <?= ($product_row['is_favorite'] == 1) ? 'red' : '' ?>">
                                                        <i class=""></i>
                                                    </a>

                                                    <a href="#" class="quick-view-btn item-view text-decoration-none" data-bs-toggle="white-tooltip" title="Quick View" data-tip="Quick View" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                        <i class="uil uil-eye"></i>
                                                    </a>
                                                    <?php
                                                    if (count($product_row['variants']) <= 1) {
                                                        $variant_id = $product_row['variants'][0]['id'];
                                                        $modal = "";
                                                    } else {
                                                        $variant_id = "";
                                                        $modal = "#quick-view";
                                                    }
                                                    ?>

                                                    <?php
                                                    if (count($product_row['variants']) <= 1) {
                                                        $variant_id = $product_row['variants'][0]['id'];
                                                    } else {
                                                        $variant_id = "";
                                                    }
                                                    ?>
                                                    <a href="#" class="compare item-compare text-decoration-none" data-bs-toggle="white-tooltip" title="Compare" data-tip="Quick View" data-tip="Compare" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>">
                                                        <i class="uil uil-exchange-alt"></i>
                                                    </a>

                                                    <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                        <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
                                                            <span class="d-flex mt-3 ms-2"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                        </span>
                                                    <?php } ?>


                                                    <div class="mb-7 mt-4 text-center">
                                                        <input id="input" name="rating" class="rating rating-loading d-none" data-size="xs" value="<?= $product_row['rating'] ?>" data-show-clear="false" data-show-caption="false" readonly>
                                                        <div class="product-content mt-2">
                                                            <h4 class="title post-title m-0" title="<?= output_escaping(str_replace('\r\n', '&#13;&#10;', $product_row['name'])) ?>" style="font-size: 16px;">
                                                                <a class="link-dark text-decoration-none" href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['name'])))) ?></a>
                                                            </h4>
                                                            <?php if (($product_row['variants'][0]['special_price'] < $product_row['variants'][0]['price']) && ($product_row['variants'][0]['special_price'] != 0)) { ?>
                                                                <p class="mb-0 mt-2 price text-muted">
                                                                    <span id="price" style='font-size: 20px;'>
                                                                        <?php echo $settings['currency'] ?>
                                                                        <?php
                                                                        $price = $product_row['variants'][0]['special_price'];
                                                                        echo number_format($price, 2);
                                                                        ?>
                                                                    </span>
                                                                    <sup>
                                                                        <span class="special-price striped-price text-danger" id="product-striped-price-div">
                                                                            <s id="striped-price">
                                                                                <?php echo $settings['currency'] ?>
                                                                                <?php $price = $product_row['variants'][0]['price'];
                                                                                echo number_format($price, 2);
                                                                                // echo $price;
                                                                                ?>
                                                                            </s>
                                                                        </span>
                                                                    </sup>
                                                                </p>
                                                            <?php } else { ?>
                                                                <p class="mb-0 mt-2 price text-muted">
                                                                    <span id="price" style='font-size: 20px;'>
                                                                        <?php echo $settings['currency'] ?>
                                                                        <?php
                                                                        $price = $product_row['variants'][0]['price'];
                                                                        echo number_format($price, 2);
                                                                        ?>
                                                                    </span>
                                                                </p>
                                                            <?php } ?>
                                                            <!-- <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2"><i class="uil uil-shopping-bag"></i>&nbsp; Add to Cart</a> -->

                                                            <?php $variant_price = ($product_row['variants'][0]['special_price'] > 0 && $product_row['variants'][0]['special_price'] != '') ? $product_row['variants'][0]['special_price'] : $product_row['variants'][0]['price'];
                                                            $data_min = (isset($product_row['minimum_order_quantity']) && !empty($product_row['minimum_order_quantity'])) ? $product_row['minimum_order_quantity'] : 1;
                                                            $data_step = (isset($product_row['minimum_order_quantity']) && !empty($product_row['quantity_step_size'])) ? $product_row['quantity_step_size'] : 1;
                                                            $data_max = (isset($product_row['total_allowed_quantity']) && !empty($product_row['total_allowed_quantity'])) ? $product_row['total_allowed_quantity'] : 0;
                                                            ?>
                                                            <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-product-title="<?= $product_row['name'] ?>" data-product-image="<?= $product_row['image']; ?>" data-product-price="<?= $variant_price; ?>" data-min="<?= $data_min; ?>" data-step="<?= $data_step; ?>" data-product-description="<?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['short_description'])))); ?>" data-izimodal-open="<?= $modal ?>">
                                                                <i class="uil uil-shopping-bag"></i>&nbsp;<?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>

                                                        </div>
                                                </figure>
                                            </div>
                                        </div>

                            <?php }
                                    $i++;
                                }
                            } ?>
                            <?php  ?>
                        </div>
                    </div>
                </div>


                <!-- Style 4 Design -->
                <?php } else if ($row['style'] == 'style_4') {
                if ($count_key != 0) {
                    if (!empty($offers) && !empty($offers[$count_key - 1])) { ?>
                        <div class="offer-img">
                            <a href="<?= $offers[$count_key - 1]['link'] ?>">
                                <img class="img-fluid lazy my-4 rounded offer-image" data-src="<?= base_url($offers[$count_key - 1]['image']) ?>" alt="Offer image" src="https://placehold.co/1290x268?text=Loading%20Offers..%20.&font=Montserrat" style="object-fit: cover;">
                            </a>
                        </div>
                <?php }
                }
                ?>
                <section class="wrapper">
                    <!-- <div class="container"> -->
                    <div class="row">
                        <div class="text-center mb-4">
                            <h3 class="mb-0 section-title"><?= ucfirst($row['title']) ?></h3>
                            <h6 class="title-sm text-muted"><?= $row['short_description']; ?></h6>
                            <a href="<?= base_url('products/section/' . $row['id'] . '/' . $row['slug']) ?>" class="hover text-decoration-none">Explore All</a>
                        </div>
                        <div class="col-lg-12 p-0">
                            <div class="swiper-container overflow-hidden grid-view text-center" data-margin="30" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events mb-4">
                                    <div class="swiper-wrapper">
                                        <?php if (isset($row['product_details']) && !empty($row['product_details'])) { ?>
                                            <?php
                                            $i = 0;
                                            if (count($row['product_details']) > 0) {
                                                foreach ($row['product_details'] as $product_row) {
                                                    if ($i == 7) {
                                                        break;
                                                    }
                                            ?>
                                                    <div class="swiper-slide shadow-xl product-bg swiper-slide-style4">
                                                        <figure class="rounded ">
                                                            <div>
                                                                <a href="<?= base_url('products/details/' . $product_row['slug']) ?>">
                                                                    <img class="lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $product_row['image_sm'] ?>" alt="<?= $product_row['name'] ?>" style="object-fit: cover;">
                                                                </a>
                                                            </div>

                                                            <a class="item-like text-decoration-none add-to-fav-btn 
                                                            <?= ($product_row['is_favorite'] == 1) ? 'fa fa-heart' : 'fa fa-heart-o' ?>  
                                                            " href="#" data-bs-toggle="white-tooltip" title="Add to wishlist" data-product-id="<?= $product_row['id'] ?>" style="color: <?= ($product_row['is_favorite'] == 1) ? 'red' : '' ?>">
                                                                <i class=""></i>
                                                            </a>

                                                            <a href="#" class="quick-view-btn item-view text-decoration-none" data-bs-toggle="white-tooltip" title="Quick View" data-tip="Quick View" data-tip="Quick View" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $product_row['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                                                <i class="uil uil-eye"></i>
                                                            </a>
                                                            <?php
                                                            if (count($product_row['variants']) <= 1) {
                                                                $variant_id = $product_row['variants'][0]['id'];
                                                                $modal = "";
                                                            } else {
                                                                $variant_id = "";
                                                                $modal = "#quick-view";
                                                            }
                                                            ?>

                                                            <?php
                                                            if (count($product_row['variants']) <= 1) {
                                                                $variant_id = $product_row['variants'][0]['id'];
                                                            } else {
                                                                $variant_id = "";
                                                            }
                                                            ?>
                                                            <a href="#" class="compare item-compare text-decoration-none" data-bs-toggle="white-tooltip" title="Compare" data-tip="Quick View" data-tip="Compare" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>">
                                                                <i class="uil uil-exchange-alt"></i>
                                                            </a>

                                                            <?php if (isset($product_row['min_max_price']['special_price']) && $product_row['min_max_price']['special_price'] != '' && $product_row['min_max_price']['special_price'] != 0 && $product_row['min_max_price']['special_price'] < $product_row['min_max_price']['min_price']) { ?>
                                                                <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
                                                                    <span class="d-flex mt-3 ms-2"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                                                </span>
                                                            <?php } ?>

                                                            <div class="card-body mb-7 mt-4">
                                                                <input id="input" name="rating" class="rating rating-loading d-none" data-size="xs" value="<?= $product_row['rating'] ?>" data-show-clear="false" data-show-caption="false" readonly>
                                                                <div class="product-content mt-2">
                                                                    <h4 class="title post-title m-0" title="<?= output_escaping(str_replace('\r\n', '&#13;&#10;', $product_row['name'])) ?>" style="font-size: 16px;">
                                                                        <a class="link-dark text-decoration-none" href="<?= base_url('products/details/' . $product_row['slug']) ?>"><?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['name'])))) ?></a>
                                                                    </h4>
                                                                    <?php if (($product_row['variants'][0]['special_price'] < $product_row['variants'][0]['price']) && ($product_row['variants'][0]['special_price'] != 0)) { ?>
                                                                        <p class="mb-0 mt-2 price text-muted">
                                                                            <span id="price" style='font-size: 20px;'>
                                                                                <?php echo $settings['currency'] ?>
                                                                                <?php
                                                                                $price = $product_row['variants'][0]['special_price'];
                                                                                echo number_format($price, 2);
                                                                                ?>
                                                                            </span>
                                                                            <sup>
                                                                                <span class="special-price striped-price text-danger" id="product-striped-price-div">
                                                                                    <s id="striped-price">
                                                                                        <?php echo $settings['currency'] ?>
                                                                                        <?php $price = $product_row['variants'][0]['price'];
                                                                                        echo number_format($price, 2);
                                                                                        // echo $price;
                                                                                        ?>
                                                                                    </s>
                                                                                </span>
                                                                            </sup>
                                                                        </p>
                                                                    <?php } else { ?>
                                                                        <p class="mb-0 mt-2 price text-muted">
                                                                            <span id="price" style='font-size: 20px;'>
                                                                                <?php echo $settings['currency'] ?>
                                                                                <?php
                                                                                $price = $product_row['variants'][0]['price'];
                                                                                echo number_format($price, 2);
                                                                                ?>
                                                                            </span>
                                                                        </p>
                                                                    <?php } ?>

                                                                    <?php $variant_price = ($product_row['variants'][0]['special_price'] > 0 && $product_row['variants'][0]['special_price'] != '') ? $product_row['variants'][0]['special_price'] : $product_row['variants'][0]['price'];
                                                                    $data_min = (isset($product_row['minimum_order_quantity']) && !empty($product_row['minimum_order_quantity'])) ? $product_row['minimum_order_quantity'] : 1;
                                                                    $data_step = (isset($product_row['minimum_order_quantity']) && !empty($product_row['quantity_step_size'])) ? $product_row['quantity_step_size'] : 1;
                                                                    $data_max = (isset($product_row['total_allowed_quantity']) && !empty($product_row['total_allowed_quantity'])) ? $product_row['total_allowed_quantity'] : 0;
                                                                    ?>
                                                                    <a href="#" class="add_to_cart  btn btn-sm btn-outline-primary rounded-pill mt-2" data-product-id="<?= $product_row['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-product-title="<?= $product_row['name'] ?>" data-product-slug="<?= $product_row['slug'] ?>" data-product-image="<?= $product_row['image']; ?>" data-product-price="<?= $variant_price; ?>" data-min="<?= $data_min; ?>" data-step="<?= $data_step; ?>" data-product-description="<?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($product_row['short_description'])))); ?>" data-izimodal-open="<?= $modal ?>">
                                                                        <i class="uil uil-shopping-bag"></i>&nbsp;<?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                        <!-- /.social -->
                                                    </div>
                                                    <!--/.swiper-slide -->
                                            <?php $i++;
                                                }
                                            } ?>
                                        <?php } ?>
                                    </div>
                                    <!--/.swiper-wrapper -->
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                                <!-- /.swiper -->
                                <div class="swiper-controls mt-n4">
                                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.swiper-container -->
                        </div>
                        <!--/column -->
                    </div>
                    <!-- </div> -->
                </section>
            <?php } ?>
    <?php }
        $offer_counter++;
    } ?>

</section>

<?php $web_settings = get_settings('web_settings', true); ?>
<?php if (isset($web_settings['app_download_section']) && $web_settings['app_download_section'] == 1) { ?>
    <section class="wrapper bg-soft-grape">
        <div class="align-items-md-center d-flex flex-wrap justify-content-center gap-5 pb-15">
            <div>
                <img class="w-100" src="<?= THEME_ASSETS_URL . 'demo/avtars/4530199.png' ?>" alt="Download - <?= $web_settings['app_download_section_title'] ?>" />
            </div>
            <div class="col-md-7">
                <h1 class="display-4 mb-4 px-md-10 px-lg-0"><?= $web_settings['app_download_section_title'] ?></h1>
                <h3 class="mt-3 header-p"><?= $web_settings['app_download_section_tagline'] ?></h3>
                <p class="lead fs-lg mb-7 px-md-10 px-lg-0 pe-xxl-15"><?= $web_settings['app_download_section_short_description'] ?></p>
                <span><a href="<?= $web_settings['app_download_section_appstore_url'] ?>" target="_blank" class="btn btn-dark btn-icon btn-icon-start rounded-pill me-2"><i class="uil uil-apple"></i>
                        App Store</a></span>
                <span><a href="<?= $web_settings['app_download_section_playstore_url'] ?>" target="_blank" class="btn btn-green btn-icon btn-icon-start rounded-pill"><i class="uil uil-google-play"></i>
                        Google Play</a></span>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php } ?>