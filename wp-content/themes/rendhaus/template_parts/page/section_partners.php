<section class="section-partners">
    <?php if (get_sub_field('partners')): ?>

        <ul class="isotope-filter">
            <li class="filter-item"><a href="#all" class="active">ВСЕ</a></li>
            <?php $filterCat = [];
            while (has_sub_field('partners')):
                $category = get_sub_field_object('category');
                foreach ($category["value"] as $cat) {
                    if (!in_array($cat, $filterCat, true)) {
                        array_push($filterCat, $cat);
                        echo '<li class="filter-item"><a href="#' . $cat["value"] . '">' . $cat["label"] . '</a></li>';
                    }
                }
            endwhile; ?>
        </ul>


        <div class="partners-list isotope-list">
            <?php while (has_sub_field('partners')):
                //vars
                $logo = get_sub_field('logo');
                $name = get_sub_field('name');
                $category = get_sub_field_object('category');
                $address = get_sub_field('address');
                $phone = get_sub_field('phone');
                $website = get_sub_field('website');
                ?>
                <div class="list-item<?php foreach ($category["value"] as $cat) {
                    echo ' ' . $cat['value'];
                }; ?>">
                    <div class="list-item-wrapper">
                        <div class="partner-details-wrapper">
                            <div class="partner-details partner-title"><i
                                    class="icon-building"></i> <?php echo $name; ?></div>
                            <div class="partner-details partner-category"><i class="icon-tags"></i>
                                <?php
                                $catValues = $category['value'];
                                for ($i = 0; $i < count($catValues); $i++) {
                                    $label = $catValues[$i]['label'];
                                    echo "$label";
                                    if ($i < (count($catValues) - 1)) {
                                        echo ", ";
                                    }
                                }; ?>
                            </div>
                            <?php if ($address): ?>
                                <div class="partner-details partner-address"><i
                                    class="icon-location"></i> <?php echo $address; ?>
                                </div><?php endif; ?>
                            <?php if ($phone): ?>
                                <div class="partner-details partner-phone"><i
                                    class="icon-phone"></i> <?php echo $phone; ?></div><?php endif; ?>
                            <?php if ($website): ?>
                                <div class="partner-details partner-website"><i class="icon-globe"></i> <a
                                    href="<?php echo $website['url']; ?>"
                                    target="<?php echo $website['target']; ?>"><?php echo $website['title']; ?></a>
                                </div><?php endif; ?>
                        </div>
                        <?php if ($logo): ?>
                            <div
                                class="partner-logo-wrapper"><?php echo wp_get_attachment_image($logo, 'medium'); ?> </div><?php endif; ?>
                    </div>

                </div>
            <?php endwhile; ?>
        </div>

    <?php endif; ?>

</section>