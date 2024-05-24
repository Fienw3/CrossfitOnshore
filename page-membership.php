<body id="membership">

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!--Membership cover-->

<section>
    <div class="membership cover" style="background-image: url('<?php the_field('cover_img'); ?>');">
        <div class="col-12 col-lg-10" style="padding: 12px;"></div>

    </div>
</section>

<!--Team Overview-->

<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">FIND DEN RIGTIGE PLAN</h2>
            <p>Opnå holdtræning og fællesskab, ved at tilmelde dig som medlem hos CrossFit Onshore i Esbjerg.<br>Udforsk vores forskellige medlemskabs muligheder for at komme i gang.</p>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 d-flex flex-wrap justify-content-start" style="height: fit-content;">
            <?php
                $plan = new WP_Query(
                    array(
                        'post_type'      => 'plan',
                        'posts_per_page' => -1,
                        'orderby'        => 'title', // Order by title alphabetically
                        'order'          => 'ASC', // Ascending order
                    )
                );
            ?>

            <?php while($plan->have_posts()): $plan->the_post() ?>
                <div class="split" style="padding: 12px;">
                    <div class="shadow d-flex flex-column justify-content-between" style="border-radius: 3px; border: 1px solid #D6DAD9; height: 100%; background-color: white;">
                        <div>
                            <img src="<?php the_field('plan_image'); ?>" alt="team image" style="width: 100%; height: auto; border-radius: 3px 3px 0 0;">
                            <div class="card-content center" style="padding: 2rem 2rem 0 2rem;">
                                <h3 style="margin-bottom: 2rem;"><?php the_field('plan_title'); ?></h3>
                                <h3 style="margin-bottom: 2rem;"><?php the_field('plan_price'); ?>,-<br><?php the_field('plan_valutainterval'); ?></h3>
                                <p class="text-start" style="width: 100%;"><?php the_field('plan_benefits'); ?></p>
                            </div>
                        </div>
                        <div class="center" style="padding: 0 2rem 3rem 2rem"><button class="btn_2" style="margin-top: auto;">VÆLG</button></div>
                    </div>
                </div>
            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="container_bottom center" style="padding-top: 0;"></div>
</section>

<!-- Sneakpeaks -->
<section>
    <div class="container_sneakpeak d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 flex" style="padding: 12px; gap: 4rem">
            <div class="sneakpeak-img-container d-flex justify-content-center align-items-center">
                <img class="sneakpeak-img shadow" src="<?php the_field('consultation_sneakpeak'); ?>">
            </div>
            <div class="sneakpeak-text-container d-flex flex-column justify-content-center">
                <h3 class="text_navy">KONSULTATION</h3>
                <p>Vi tilbyder forskellige former for uforpligtende konsultation, så du kan få den mest passende vejledning og svar på alle dine spørgsmål. Tryk på knappen nedenfor for at arrangere en samtale og rundvisning hos Crossfit Onshore, hvor vi glæder os til at møde dig personligt.</p>
                <a href="<?php echo 'consult'; ?>"><button class="btn_2">BOOK NU</button></a>
            </div>
        </div>
    </div>
    <div class="container_sneakpeak d-flex justify-content-center align-items-center" style="border-top: 2px solid #D6DAD9">
        <div class="col-12 col-lg-10 flex" style="padding: 12px; gap: 4rem">
            <div class="sneakpeak-img-container d-flex justify-content-center align-items-center">
                <img class="sneakpeak-img shadow" src="<?php the_field('cases_sneakpeak'); ?>">
            </div>
            <div class="sneakpeak-text-container d-flex flex-column justify-content-center">
                <h3 class="text_navy">HISTORIE FRA MEDLEMMER</h3>
                <p>Se vores medlemmers personlige fortællinger om deres rejse med CrossFit Onshore.</p>
                <a href="<?php echo 'cases'; ?>"><button class="btn_2">SE MERE</button></a>
            </div>
        </div>
    </div>
</section>
    
</body>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>