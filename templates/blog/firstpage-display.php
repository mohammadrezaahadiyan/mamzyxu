<!--demo start-->
<section  id="demo" class="section-gap bg-extra">
    <div class="container">
        <div class="row justify-content-center text-center mb-lg-5 mb-4 pb-lg-5">
            <div class="col-md-8">
                <h2>ساخت وب سایت خیره کننده خود را</h2>
                <p class="lead">با بهترین قالب چند منظوره شرکتی و آژانسی و نمونه کار و فروشگاهی و مسافرتی و رزومه و شخصی و ده ها قالب دیگر فقط و فقط  در کلاب به قیمت باورنکردنی 54 هزار تومان</p>
            </div>
        </div>
        <div class="row">
            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <div class="col-md-4">
                        <div class="card border-0 mb-4 box-hover">
                            <a href="<?php the_permalink(); ?>>"><img class="card-img-top" src="<?php the_post_thumbnail(); ?>>" alt="" /></a>
                            <div class="card-footer">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="<?php the_permalink(); ?>>"><?php the_title(); ?></a>
                                    <span class="card-arrow-icon"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<!--demo end-->