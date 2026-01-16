<?php get_header(); ?>
<main class="main-wrapper">
<section class="section-banner">
    <div class="container-small">
        <div class="banner_component">
            <h1 class="heading-style-h1">
                Humaneo<br>
                <span class="sub-heading">Une boussole pour grandir</span>
            </h1>
            <p class="text-size-medium">
                <span class="text-highlight">Humaneo</span> est une association suisse qui agit auprès de populations en situation de grande vulnérabilité.
            </p>
            <div class="banner_button-wrapper">
                <a href="#" class="button is-primary">Découvrez Humaneo</a>
                <a href="#" class="button is-secondary">Soutenez-nous</a>
            </div>
        </div>
    </div>
</section>

    <section class="section-about">
    <div class="container-small">
        <div class="about_component">
            <div class="about_header">
                <h2 class="heading-style-h2">Nos engagements ici et ailleurs</h2>
                <p class="about_intro-text">
                    <strong>Humaneo</strong> agit en Suisse et à l'étranger pour offrir à chacun un accompagnement vers l'autonomie et la dignité, à travers des séjours éducatifs, des programmes d'insertion et des actions humanitaires.
                </p>
            </div>

            <div class="about_list-wrapper">
                
                <div class="about_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/content3.png" alt="En Suisse" class="about_image">
                    <div class="about_card-content">
                        <h3 class="about_card-title">En Suisse</h3>
                        <p class="about_card-text">Nous organisons des séjours de rupture pour des jeunes en difficulté et développons des programmes d’insertion sociale et professionnelle, favorisant la reconstruction personnelle au sein d'une ferme éducative dans les Préalpes fribourgeoises.</p>
                        <a href="#" class="button is-about">Découvrir nos programmes en Suisse</a>
                    </div>
                </div>

                <div class="about_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/IMG.png" alt="À l'étranger" class="about_image">
                    <div class="about_card-content">
                        <h3 class="about_card-title">À l'étranger</h3>
                        <p class="about_card-text">Nous soutenons des projets éducatifs, communautaires et humanitaires dans les zones touchées par l'extrême pauvreté. Notre objectif: redonner un toit, des repères et un avenir à ceux qui en sont privés.</p>
                        <a href="#" class="button is-about">Découvrir nos activités à l'étranger</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

    <section class="section-business">
            <div class="container-small">
                <div class="business_component">
                    
                    <div class="business_item">
                        <div class="business_image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/Frame.png" loading="lazy" alt="Vision" class="business_image_1">
                        </div>
                        <div class="business_content">
                            <h3 class="heading-style-h3-1">Notre vision</h3>
                            <p class="text-size-regular">“Une société où chaque jeune peut grandir libre, digne et autonome, grâce à des dispositifs sobres, concrets et ancrés dans le réel, la nature, le travail, la relation.”</p>
                        </div>
                    </div>

                    <div class="business_item is-reversed is-secondary">
                        <div class="business_image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/Isolation_Mode.png" loading="lazy" alt="Promesse" class="business_image_2">
                        </div>
                        <div class="business_content">
                            <h3 class="heading-style-h3-2">Notre promesse</h3>
                            <p class="text-size-regular">“Nous ne traçons pas la route à la place des jeunes. Nous les aidons à lire la carte, à trouver leur voie, et à avancer avec confiance.”</p>
                        </div>
                    </div>

                    <div class="business_item is-third">
                        <div class="business_image-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/Group.png" loading="lazy" alt="Mission" class="business_image_3">
                        </div>
                        <div class="business_content">
                            <h3 class="heading-style-h3-3">Notre mission</h3>
                            <p class="text-size-regular">“Offrir des repères fiables et un accompagnement exigeant et bienveillant pour que des jeunes en rupture (délinquance, addictions, santé mentale fragilisée) retrouvent leur cap, choisissent leurs propres voies et s’insèrent durablement dans la société.”</p>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <section class="section-action">
    <div class="action_component">
        <h2 class="action_heading">Agir avec nous</h2>
        <p class="action_description">
           <span class="action-text-highlight">Humaneo</span> vit de la confiance de ses partenaires et du soutien de ses membres et donateurs.<br>
            Chacun, à sa manière, peut contribuer à offrir des repères, des liens et des horizons à ceux qui en ont besoin.
        </p>
        <a href="#" class="action_button">Soutenir notre action</a>
    </div>
</section>
</main>

<?php get_footer(); ?>