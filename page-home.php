<body id="home">

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!-- Hero Section -->
<section>
    <div class="hero_main d-flex justify-content-center align-items-center">
        <video src="<?php echo get_template_directory_uri(); ?>/assets/video/hero_video.mp4" class="hero-video" autoplay loop muted playsinline controls></video>
        <div class="center col-12 col-lg-10" style="padding: 12px;">
            <div class="hero-container" style="color: var(--primary-color);">
                <h1 style="text-shadow: 0 0 6px #0000003e;">CROSSFIT ONSHORE</h1>
                <p style="margin-bottom: 2rem; text-shadow: 0 0 6px #0000003e;">I CrossFit Onshore kan du forvente at møde Esbjergs bedste instruktør-team, sammensat for at give vores medlemmer den bedste træningsoplevelse.</p>
                <div class="flex-gap" style="margin-bottom: 2rem; gap: 6px;">
                    <a href="<?php echo 'about'; ?>"><button class="btn_1">OM OS</button></a>
                    <a href="<?php echo 'membership'; ?>"><button class="btn_1">BLIV MEDLEM</button></a>
                </div>
            </div>
            <img style="height: 125px; width: auto;" src="<?php the_field('hero_awards'); ?>" alt="awards">
        </div>
    </div>
</section>

<!-- Consultation Section -->

<section>
    <div class="card-container d-flex justify-content-center align-items-center">
        <div class="flex-reverse justify-content-between col-12 col-lg-10" style="padding: 12px;">
            <div class="split-brandon-img d-flex flex-column justify-content-center"><img src="<?php the_field('brandon_img'); ?>" alt="brandon" style="height: auto; width: 100%;"></div>
            <div class="split-brandon-text d-flex flex-column justify-content-center" style="padding-top: 1rem;">
                <h2 class="text_navy">I TVIVL OM CROSSFIT ER NOGET FOR DIG?</h2>
                <p style="margin-bottom: 2rem;">Brandon står parat til en uforpligtende samtale, hvor du kan få skræddersyet vejledning til hvordan du opnår dine personlige mål, med fokus på dig og din livsstil.</p>
                <div class="d-flex" style="margin-bottom: 2rem;">
                  <!--   <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/graphics/cfo_steps.svg" alt="booking steps" style="height: auto; width: 100%; max-width: 11px; object-fit: contain; margin-right: 2rem;">
                    </div> -->
                    <div>
                        <ul>
                        <li class="kon-list">Skriv dig op til en samtale med Brandon</li>
                        <li class="kon-list">Få en run=dvisning og intro der er skræddersyet til dit niveau og behov</li>
                        <li class="kon-list" style="margin-bottom: 0;">Få en GRATIS prøvetime på ét hold</li>
                        </ul>
                    </div>
                </div>
                <div style="width: fit-content;">
                     <a href="<?php echo 'consult'; ?>" style="margin-top: 2rem;"><button class="btn_2">BOOK KONSULTATION</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Overview Section -->

<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">VORES MEST POPULÆRE HOLD</h2>
            <p>Vi har hold hvor alle kan være med, uanset køn, alder og træningserfaring.</p>
            <div class="flex-gap d-flex justify-content-center" style="gap: 6px;">
                <a href="<?php echo 'teams#calendar'; ?>"><button class="btn_2">KALENDER</button></a>
                <a href="<?php echo 'coaches'; ?>"><button class="btn_2">TRÆNERE</button></a>
            </div>
        </div>
    </div>

    <div>
        <div class="text_white flex_2">
            <div class="team-preview-container center split_2 d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php the_field('team_wod'); ?>');">
                <h2>WOD</h2>
                <a href="<?php echo 'teams'; ?>"><button class="btn_3">HOLD OVERSIGT</button></a>
            </div>
            <div class="team-preview-container center split_2 d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php the_field('team_kids'); ?>');">
                <h2>BØRN OG UNGE</h2>
                <a href="<?php echo 'teams'; ?>"><button class="btn_3">HOLD OVERSIGT</button></a>
            </div>
        </div>
        <div class="text_white flex_2">
            <div class="team-preview-container center split_2 d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php the_field('team_master'); ?>');">
                <h2>MASTER CLASS</h2>
                <a href="<?php echo 'teams'; ?>"><button class="btn_3">HOLD OVERSIGT</button></a>
            </div>
            <div class="team-preview-container center split_2 d-flex flex-column justify-content-center align-items-center" style="background-image: url('<?php the_field('team_intro'); ?>');">
                <h2>GRATIS INTRO</h2>
                <a href="<?php echo 'teams'; ?>"><button class="btn_3">HOLD OVERSIGT</button></a>
            </div>
        </div>
    </div>

    <div class="container_bottom center" style="padding-bottom: 0;">
        <div class="col-12 col-lg-10" style="padding: 12px;">
        <a href="<?php echo 'teams'; ?>"><button class="btn_2">SE ALLE HOLD</button></a>
        </div>
    </div>
</section>

<!-- Member Cases Section -->
<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">HISTORIER FRA MEDLEMMER</h2>
            <p>Se hvordan nogle af vores medlemmer startede deres rejse med Crossfit.</p>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 d-flex flex-wrap justify-content-start" style="padding: 12px 6px;">
            <?php
                $case = new WP_Query(
                    array(
                        'post_type'      => 'case',
                        'posts_per_page' => 2,  // Limit to 2 posts
                        'orderby'        => 'date', // Order by date
                        'order'          => 'DESC', // Descending order
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
    
    <div class="container_bottom center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
        <a href="<?php echo 'cases'; ?>"><button class="btn_2">SE MERE</button></a>
        </div>
    </div>
</section>

<!-- Start Journey Section -->
<section>
    <div class="container_end d-flex justify-content-center align-items-center" style="background-image: url('<?php the_field('journey_preview'); ?>');">
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