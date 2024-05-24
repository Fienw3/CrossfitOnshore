<body id="consult">

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!--Consultation cover-->

<section>
    <div class="consultation cover" style="background-image: url('<?php the_field('cover_img'); ?>');">
        <div class="col-12 col-lg-10" style="padding: 12px;"></div>

    </div>
</section>

<!--CF7 -->

<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">BOOK KONSULTATION</h2>
            <p>Udfyld formularen og vores box-manager, Brandon, vil kontakte dig for et tidspunkt.</p>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 d-flex flex-wrap justify-content-start" style="height: fit-content;">
            <div style="width: 100%; padding: 12px;">
                <?php echo do_shortcode('[contact-form-7 id="8736d41" title="Book Consultation"]'); ?>
            </div>
        </div>
    </div>

    <div class="container_bottom center" style="padding-top: 0;"></div>
</section>

<!-- Sneakpeaks -->
<section>
    <div class="container_sneakpeak d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 flex" style="padding: 12px; gap: 4rem;">
            <div class="sneakpeak-img-container d-flex justify-content-center align-items-center">
                <img class="sneakpeak-img shadow" src="<?php the_field('teams_sneakpeak'); ?>">
            </div>
            <div class="sneakpeak-text-container d-flex flex-column justify-content-center">
                <h3 class="text_navy">HOLDOVERSIGT</h3>
                <p>Vi har hold til alle aldre og erfaring for at sikre, at der er et hold, der passer perfekt til dig. Vores holdtræning er både effektiv og motiverende, og vores erfarne trænere er dedikerede til at hjælpe dig med at nå dine mål.</p>
                <a href="<?php echo 'teams'; ?>"><button class="btn_2">SE MERE</button></a>
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