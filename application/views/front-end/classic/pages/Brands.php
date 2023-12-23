<section class="main-content mt-md-5 mt-sm-0 mb-5">
    <div class="category-section container-fluid text-center">
        <div class='my-4 featured-section-title'>
            <div class='col-md-12'>
                <h3 class='section-title text-white'><?= !empty($this->lang->line('brands')) ? $this->lang->line('brands') : 'Brands' ?></h3>
            </div>
            <hr>
        </div>
        <div class="d-flex flex-wrap">
            <?php foreach ($brands as $key => $row) { ?>
                <div class="col-md-2 d-flex justify-content-center">
                    <div class="brand_container">
                        <a href="<?= base_url('products?brand=' . html_escape($row['brand_slug'])) ?>">
                            <div class="brand_image d-flex align-items-center">
                                <img src="<?= base_url($row['brand_img']) ?>" class="brand_img">
                            </div>
                        </a>
                        <div class="">
                            <span><?= html_escape($row['brand_name']) ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <nav class="text-center mt-14 d-flex overflow-auto" aria-label="pagination">
            <?= (isset($links)) ? $links : '' ?>
        </nav>
    </div>
</section>