<body id="about">

<?php get_header(); ?>

<!-- Display posts on page -->
<?php while (have_posts()) : the_post(); ?>

<!--About cover-->

<section>
    <div class="about cover" style="background-image: url('<?php the_field('cover_img'); ?>');">
        <div class="col-12 col-lg-10" style="padding: 12px;"></div>
    </div>
</section>

<!--Information-->
<section>
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">INFORMATIONER</h2>
            <p>Herunder kan du lære mere om os og finde svar på ofte stillede spørgsmål.</p>
        </div>
    </div>

    <div style="background-color: var(--quaternary-color);" d-flex justify-content-center align-items-center">
        <div class="col-12 flex"> 
            <div  class="info-container split d-flex flex-column justify-content-center align-items-center">
                <div class="card-img" style="background-image: url('<?php the_field('about_img'); ?>');"></div>
            </div>
            <div class="info-text-container d-flex flex-column justify-content-center align-items-center"> 
                <div>
                    <h3 class="text_navy">CrossFit Onshore</h3>
                    <p>Crossfit Onshore er et certificeret Crossfit center, der fokuserer på inklusion og deres medlemmers personlige mål. Alle trænere er certificerede Crossfit-trænere, du ved derfor at du får den bedste oplevelse og det meste ud af dine træninger. </p>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: var(--quaternary-color);" d-flex justify-content-center align-items-center">
        <div class="col-12 flex-reverse"> 
            <div  class="info-container split d-flex flex-column justify-content-center align-items-center">
                <div class="card-img" style="background-image: url('<?php the_field('community_img'); ?>');"></div>
            </div>
            <div class="info-text-container-2 d-flex flex-column justify-content-center align-items-center"> 
                <div>
                    <h3 class="text_navy">Fællesskab</h3>
                    <p>Hos Crossfit Onshore handler det om at fejre hinandens sejre og skabe et positivt træningsmiljø. I løbet af året afholder vi sociale samt træningsrelaterede begivenheder for vores medlemmer, for at styrke fællesskabet.</p>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: var(--quaternary-color);" d-flex justify-content-center align-items-center">
        <div class="col-12 flex">
            <div  class="info-container split d-flex flex-column justify-content-center align-items-center">
                <div class="card-img" style="background-image: url('<?php the_field('environment_img'); ?>');"></div>
            </div>
            <div class="info-text-container d-flex flex-column justify-content-center align-items-center">
                <div>
                    <h3 class="text_navy">Miljø</h3>
                    <p>Vores Crossfit center er lokaliseret på Helgolandsgade 17, i Esbjerg. Her finder du vores faciliteter med vores 3 haller, som bliver brugt til vores holdtræning, samt individuel træning. Hallerne er udstyret med alt hvad du har brug for, for at dyrke Crossfit.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!--FAQ-->

<section id="faq">
    <div class="container_top center">
        <div class="col-12 col-lg-10" style="padding: 12px;">
            <h2 class="text_navy">OFTE STILLEDE SPØRGSMÅL</h2>
            <p>Herunder kan du lære mere om os og finde svar på ofte stillede spørgsmål.</p>
        </div>
    </div>

    <div id="accordion">
        <div class="d-flex justify-content-center">
            <div class="col-12 col-lg-10" style="padding: 12px;">
                <div class="card" style="border-top: 2px solid #D6DAD9!important;">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" style="text-decoration: none;" disabled>
                                Hvem kan dyrke Crossfit?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>Crossfit er for alle. Hos Crossfit Onshore vægter vi diversitet, og at have hold der passer alle. Vi har derfor hold der passer alle fra 6-99 år. Dette gør at vi har timer der specifikt er modificerede til børn og seniorer. Vi har også hold til forskellige trænings niveau, så Crossfit Onshore har hold for nybegyndere såvel som øvede. </p>
                            <p>Du kan læse mere om dette under vores ”Hold” side, eller ved at booke en konsultation.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link" style="text-decoration: none;" disabled>
                                Hvor ligger CrossFit Onshore?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Crossfit Onshore ligger på Helgolandsgade 17 6700 Esbjerg, ved havnen. Den bedste måde at finde hen til Crossfit Onshores indgang er at gå rundt om EmCare bygningen ad Vesterhavsgade.  
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link" style="text-decoration: none;" disabled>
                                Hvad er dresscode?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Hos Crossfit Onshore er der ingen dresscode, så længe du klæder dig passende. Tag noget tøj på hvor du føler dig behagelig i og hvor du kan bevæge dig frit. Udstyr der senere kan være til fordel, er træningshandsker.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="container_bottom" style="padding-top: 0;"></div>    
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