<body id="teams">

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!--Team cover-->

<section>
    <div class="teams cover" style="background-image: url('<?php the_field('cover_img'); ?>');">
        <div class="col-12 col-lg-10" style="padding: 12px;"></div>

    </div>
</section>

<!-- Member Sneakpeak -->
<section>
    <div class="container_sneakpeak d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 flex" style="padding: 12px; gap: 4rem">
            <div class="sneakpeak-img-container d-flex justify-content-center align-items-center">
                <img class="sneakpeak-img shadow" src="<?php the_field('membership_sneakpeak'); ?>">
            </div>
            <div class="sneakpeak-text-container d-flex flex-column justify-content-center">
                <h3 class="text_navy">ALLEREDE MEDLEM?</h3>
                <p>Hvis du allerede er medlem, men ønsker at tilmelde dig et nyt hold, kan du nemt gøre det ved at trykke på knappen nedenfor.</p>
                <a href="<?php echo 'membership'; ?>"><button class="btn_2">SE MERE</button></a>
            </div>
        </div>
    </div>
</section>

<!--Team Overview-->

<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">FIND DIT PERFEKTE HOLD</h2>
            <p>Vi har hold hvor alle kan være med, uanset køn, alder og træningserfaring. </p>
            <div class="flex-gap d-flex justify-content-center" style="gap: 6px;">
                <a href="#calendar"><button class="btn_2">KALENDER</button></a>
                <a href="<?php echo 'coaches'; ?>"><button class="btn_2">TRÆNERE</button></a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="col-12 col-lg-10 d-flex flex-wrap justify-content-start" style="height: fit-content;">
            <?php
                $team = new WP_Query(
                    array(
                        'post_type'      => 'team',
                        'posts_per_page' => -1,
                        'orderby'        => 'title', // Order by title alphabetically
                        'order'          => 'ASC', // Ascending order
                    )
                );
            ?>

            <?php while($team->have_posts()): $team->the_post() ?>
                <div class="split" style="padding: 12px;">
                    <div class="shadow d-flex flex-column justify-content-between" style="border-radius: 3px; border: 1px solid #D6DAD9; height: 100%; background-color: white;">
                        <div>
                            <img src="<?php the_field('team_image'); ?>" alt="team image" style="width: 100%; height: auto; border-radius: 3px 3px 0 0;">
                            <div class="card-content">
                                <h3><?php the_field('team_title'); ?></h3>
                                <p style="margin-bottom: 2rem;"><?php the_field('team_description'); ?></p>
                            </div>
                        </div>
                        <div style="padding: 0 1rem 2rem 1rem"><button class="btn_2" style="margin-top: auto;">BOOK HOLD</button></div>
                    </div>
                </div>
            <?php endwhile ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!--Calendar-->

<section id="calendar">
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">KALENDER</h2>
            <p>Hos CrossFit Onshore er træningen hård, men alle kan være med.</p>
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