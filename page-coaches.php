<body id="coaches">

<?php get_header(); ?>
    
<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!--Team cover-->

<section>
    <div class="coaches cover" style="background-image: url('<?php the_field('cover_img'); ?>">
        <div class="col-12 col-lg-10" style="padding: 12px;"></div>
    </div>
</section>

<!--Coaches-->

<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">PERSONALE HOS CROSSFIT ONSHORE</h2>
            <p>Herunder kan du se trænerne hos CrossFit Onshore. </p>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 d-flex flex-wrap justify-content-start">
            <?php
                $coach = new WP_Query(
                    array(
                        'post_type'      => 'coach',
                        'posts_per_page' => -1,
                        'orderby'        => 'title', // Order by title alphabetically
                        'order'          => 'ASC', // Ascending order
                    )
                );
            ?>

            <?php while($coach->have_posts()): $coach->the_post() ?>
                <div class="split_3" style="padding: 12px; ">
                    <div class="shadow" style="height: 100%; border-radius: 3px; border: 1px solid #D6DAD9;">
                        <div style="border-radius: 0 0 3px 3px;">
                            <img src="<?php the_field('coach_image'); ?>" alt="coach image" style="width: 100%; height: auto; border-radius: 3px 3px 0 0;">
                            <div style="padding: 1rem 1rem; background-color: white;">
                                <h4 class="text_navy"><?php the_field('coach_name'); ?></h4>
                                <p><?php the_field('coach_position'); ?></p>
                                <p><?php the_field('coach_experience'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

    <div class="container_bottom" style="padding-top: 0;"></div>
</section>

<!--Sneak peak-->
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
</section>

<!-- Start Journey Section -->
<section>
    <div class="container_end d-flex justify-content-center align-items-center" style="background-image: url('<?php the_field('journey_preview'); ?>">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <div class="center text_white">
                <h2 class="banner-text">DIN REJSE STARTER HER</h2>
                <p>Er du klar til at starte din Crossfit rejse? Du vil som medlem i CrossFit Onshore blive mødt af trænere som alle har det fælles mål, at gøre din træning så effektiv og målrettet som overhovedet muligt. Derfor tilbyder vi holdtræning på forskellige niveauer og for alle aldre.</p>
                <a href="<?php echo 'membership'; ?>"><button class="btn_1">BLIV MEDLEM</button></a>
            </div>
    
        </div>
    </div>
</section>



</body>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>