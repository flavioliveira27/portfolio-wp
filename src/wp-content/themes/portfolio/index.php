<?php
$args = [
    'post_type' => 'informacao',
    'posts_per_page' => 1,
];

$loop = new WP_Query($args);

if ( $loop->have_posts() ):
    while ( $loop->have_posts() ):
        $loop->the_post();

        $empnome      = get_field('nome');
        $empcargo  = get_field('cargo');
        $empskils  = get_field('skills');
        $empcurriculum = get_field('curriculum');
        $empgithub  = get_field('github');
        $empinstagram     = get_field('instagram');
        $emplinkedin      = get_field('linkedin');
        $empresumo      = get_field('resumo');
    

    endwhile;
endif;

wp_reset_query();
wp_reset_postdata(); 
?>

<?php
get_header();
?> 
<!--Main-->
<main class="main">

<!-- Section Home-->
<section class="home section" id="home">
   <div class="home__container container grid">
      <div class="home__content">
         <div class="home__data">
            <h3 class="home__subtitle">
               <span>Olá!</span> me chamo
            </h3>

            <h1 class="home__title"><?php echo $empnome;?></h1>

            <h3 class="home__education"><?php echo $empcargo;?></h3>

            <p class="home__description">
                Javascript | PHP | React | Wordpress
            </p>

            <a href="https://drive.usercontent.google.com/u/0/uc?id=1ZF9vtOX-Hrd_cGpuGNedbycvhrvm1xIB&export=download" class="button">Download CV</a>
         </div>

         <div class="home__social">
            <a href="https://github.com/flavioliveira27" target="_blank" class="home__social-link">
                <i class="fa-brands fa-github"></i>
            </a>

            <a href="https://www.instagram.com/oflaviocastro" target="_blank" class="home__social-link">
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="https://www.linkedin.com/in/fcsoliveira/" target="_blank" class="home__social-link">
                <i class="fa-brands fa-linkedin"></i>
            </a>

         </div>
      </div>

      <div class="home__image">
         <svg class="home__blob" viewBox="0 0 550 591" xmlns="http://www.w3.org/2000/svg">
            <mask id="maskBlob" mask-type="alpha">
               <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
               170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
               447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
               587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
               438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
            </mask>
            <g mask="url(#maskBlob)">
               <path d="M263 47.1782C270.426 42.891 279.574 42.891 287 47.1782L501.157 
               170.822C508.583 175.109 513.157 183.032 513.157 191.606V438.894C513.157 
               447.468 508.583 455.391 501.157 459.678L287 583.322C279.574 587.609 270.426 
               587.609 263 583.322L48.843 459.678C41.4174 455.391 36.843 447.468 36.843 
               438.894V191.606C36.843 183.032 41.4174 175.109 48.843 170.822L263 47.1782Z"/>
         
               <rect x="37" width="476" height="630" fill="url(#pattern0)"/>
            </g>
         
            <rect x="37" width="476" height="300" fill="url(#pattern1)"/>
         
            <defs>
               <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)"/>
               </pattern>
         
               <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use href="#imageBlob" transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)"/>
               </pattern>
         
               <image class="home__img" id="imageBlob" width="640" height="925" href=" <?php echo get_template_directory_uri();?>/assets/img/perfil.png"/>
            </defs>
         </svg>
      </div>
   </div>
</section>

<!-- Section Sobre (about)-->
<section class="about section" id="about">
   <div class="about__container container grid">
      <div class="about__data">
         <h3 class="section__subtitle">
            Sobre <span>Mim</span>
         </h3>

         <h2 class="section__title">
            Quem sou eu
         </h2>

         <p class="about__description">
            Desenvolvedor front-end, Apaixonado por tecnologia, graduado em Análise e Desenvolvimento de Sistemas pela Universidade Estácio, tenho conhecimento criando aplicações com HTML, CSS, Javascript, React, Typscript e Tailwind e estou sempre disponível e pronto para novos desafios :)
         </p>

         <a href="#contact" class="button">Contate-Me</a>
      </div>

      <div class="about__image">
         <svg class="about__blob" viewBox="0 0 550 592" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="maskBorder" mask-type="alpha">
               <path d="M263 48.1782C270.426 43.891 279.574 43.891 287 48.1782L501.157 
               171.822C508.583 176.109 513.157 184.032 513.157 192.606V439.894C513.157 
               448.468 508.583 456.391 501.157 460.678L287 584.322C279.574 588.609 
               270.426 588.609 263 584.322L48.843 460.678C41.4174 456.391 36.843 448.468 36.843 
               439.894V192.606C36.843 184.032 41.4174 176.109 48.843 171.822L263 48.1782Z" fill="black"/>
            </mask>
            <g mask="url(#maskBorder)">
               <rect x="37" width="476" height="630" fill="url(#pattern2)"/>
               
               <path d="M285 51.6423L499.157 175.286C505.345 178.859 509.157 185.461 509.157 
               192.606V439.894C509.157 447.039 505.345 453.641 499.157 457.214L285 
               580.858C278.812 584.43 271.188 584.43 265 580.858L50.843 457.214C44.655 453.641 
               40.843 447.039 40.843 439.894V192.606C40.843 185.461 44.655 178.859 50.843 
               175.286L265 51.6423C271.188 48.0697 278.812 48.0696 285 51.6423Z" stroke="black" stroke-width="10"/>
            </g>
         
            <rect x="37" width="476" height="300" fill="url(#pattern3)"/>
         
            <defs>
               <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use href="#imageBorder" transform="matrix(0.00143057 0 0 0.00108108 0.0404062 0)"/>
               </pattern>
         
               <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use href="#imageBorder" transform="matrix(0.00143057 0 0 0.00226984 0.0404062 0)"/>
               </pattern>
         
               
               <image class="about__img" id="imageBorder" width="640" height="940" href="<?php echo get_template_directory_uri();?>/assets/img/perfil.png"/>
            </defs>
         </svg>
      </div>
   </div>
</section>

<!--Section SKILLS -->
<section class="skills section" id="skills">
   <div class="skills__container container grid">
      <div class="skills__data">
         <h3 class="section__subtitle">
            Minhas <span>Skills</span>
         </h3>

         <h2 class="section__title">
            Skills
         </h2>

         <p class="skills__description">
            Linguagens que possuo habilidade e desempenho para desenvolver projetos.
         </p>

         <a href="#projects" class="button">Meus projetos</a>
      </div>

      <div class="skills__content">
         <ol class="skills__group">
            <li class="skills__item">HTML & CSS</li>
            <li class="skills__item">JavaScript</li>
            <li class="skills__item">React</li>
            <li class="skills__item">PHP</li>
            
         </ol>

         <ol class="skills__group" start="4">
            <li class="skills__item">Typescript</li>
            <li class="skills__item">Tailwind</li>
            <li class="skills__item">Git & GitHub</li>
            <li class="skills__item">Wordpress</li>
            
         </ol>
      </div>
   </div>
</section>
<section class="projects section" id="projects">
            <h3 class="section__subtitle">
               Meus <span>Projetos</span>
            </h3>

            <h2 class="section__title">
               Projetos Recentes
            </h2>

   <div class="div projects__container container grid">
   <?php
$args = [
    'post_type' => 'projeto',
    'posts_per_page' => 0,
];

$loop = new WP_Query($args);

if ( $loop->have_posts() ):
    while ( $loop->have_posts() ):
        $loop->the_post();

        $empimagem     = get_field('imagem');
        
        $emptitulo  = get_field('titulo');
        $empsubtitulo  = get_field('subtitulo');
        $emplink = get_field('link');
        ?>
        <article class="projects__card">
         <img src="<?php echo $empimagem;?>" alt="projects image" class="projects__img">

         <div class="projects__modal">
            <span class="projects__subtitle"><?php echo $empsubtitulo; ?></span>

            <h2 class="projects__title"><?php echo $emptitulo; ?></h2>

            <a href="<?php echo $emplink; ?>" target="_blank" class="projects__button">
               Ver Demo <i class="ri-external-link-line"></i>
            </a>
         </div>
      </article>
      <?php
        
    

    endwhile;
endif; 

wp_reset_query();
wp_reset_postdata(); 
?>
      
   </div>
</section>

<!--Section Contate-me (formulário)-->
<section class="contact section" id="contact">
   <h3 class="section__subtitle">
      Entrar em <span>contato</span>
   </h3>

   <h2 class="section__title">
      Contate-me
   </h2>

   <div class="contact__container container grid">
      <form action="" class="contact__form" id="contact-form">
         <div class="contact__group">
            <input type="text" name="user_name" required placeholder="Digite seu nome" class="contact__input">
            <input type="email" name="user_email" required placeholder="Digite seu email" class="contact__input">
         </div>

         <textarea name="user_message" required placeholder="Digite sua mensagem" class="contact__input"></textarea>

         <p class="contact__message" id="contact-message"></p>

         <button class="button contact__button">
            Enviar Mensagem
         </button>
      </form>
   </div>
</section>
</main>
<?php get_footer();
?>


