<body id="cases">

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!--Cases cover-->

<section>
    <div class="cases cover" style="background-image: url('<?php the_field('cover_img'); ?>');">
        <div class="col-12 col-lg-10" style="padding: 12px;"></div>
    </div>
</section>

<!--Cases-->

<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">HISTORIE FRA MEDLEMMER</h2>
            <p>Se vores medlemmers inspirerende fortællinger om deres forhold til Crossfit og CrossFit Onshore.</p>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 d-flex flex-wrap justify-content-start" style="padding: 12px 6px;">
            <?php
                $case = new WP_Query(
                    array(
                        'post_type'      => 'case',
                        'posts_per_page' => -1,
                    )
                );
            ?>

            <?php while($case->have_posts()): $case->the_post() ?>
                <a class="split" style="padding: 6px;" href="<?php the_field('case_link'); ?>">
                    <img src="<?php the_field('case_thumbnail'); ?>" alt="Case thumbnail" style="width: 100%; height: auto;">
                </a>
            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    
    <div class="container_bottom center" style="padding-top: 0;"></div>
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