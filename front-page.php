<?php get_header(); ?>

<!--<//?php
  $num_posts = -1;
  if( is_front_page() ) $num_posts = 4;

  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'websites',
    'posts_per_page' => $num_posts;
  );
 ?>-->


<p class="slogan" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:300, repeat:true}">Holy Smokes: "<em><span class="font-red">Behave</span></em> like an adult is something different than <em><span class="font-red">being</span></em> an adult."</p>

<section id="about">
  <div class="uk-container uk-container-center">
    <div class="uk-grid tm-grid-colors-yellow" data-uk-grid="{gutter: 8}">
      <div class="uk-width-medium-1-2 uk-width-large-3-10">
        <div style="padding:1em;">
          <div>
            <?php the_post_thumbnail(); ?>
          </div>
        </div>
      </div>
      <div class="uk-width-medium-1-2 uk-width-large-4-10">
        <div style="padding:1em;">
          <p class="uk-article-lead">Websites maak ik voor eenieder die van een afwisselende invalshoek houdt en dat onder de vlag van mijn eigen huismerk Bad Schtroumpfies.
          </p>
          <p>
            Veel is mogelijk… Lichtgewicht, clean code, responsive, zelf-aanpasbaar…
            in alle vreugden en noden van de moderne tijd wordt voorzien.
          </p>
          <p>
            Technisch in orde, up-to-date en met zorg gemaakt. Neem vooral contact op!
            <hr class="uk-article-divider" />
          </p>
          <p class="uk-text-center">
             <a href="<?php echo antispambot(get_the_author_meta('user_email')); ?>" class="font-red uk-icon uk-icon-medium uk-icon-envelope"></a>
             <a href="https://www.linkedin.com/in/rutger-kroon-8024a015/" target="_blank" class="font-red uk-icon uk-icon-medium uk-icon-linkedin"></a>
             <a href="https://github.com/oglikap" target="_blank" class="uk-icon uk-icon-medium uk-icon-github font-red"></a>
             <a href="https://www.facebook.com/rutger.kroon.9" target="_blank" class="uk-icon uk-icon-medium uk-icon-facebook font-red"></a>
          </p>
        </div>
      </div>
      <div class="uk-width-medium-6-10 uk-width-large-3-10">
        <div style="padding:1em;">
          <p class="font-red uk-text-center">
          Etymology<br />
          by Wikipedia:<br />
          "Borrowed from Dutch<br />  <span class="font-24px">smurf (“smurf”)</span>, <span class="font-16px">(via <br /> the Belgian comic</span> <span class="font-22px">De Smurfen<br />  (“The Smurfs”),</span><span class="font-16px">a translation of<br /> </span> French <span class="font-22px">Les Schtroumpfs),</span> <span class="font-16px">from<br /> </span> French
          <span class="font-22px"> Schtroumpf</span> <span class="font-16px"> (“smurf”),<br />  probably from the</span> military slang <span class="font-24px">stroumpf</span> (“idiot”), <span class="font-16px">from German</span> <span class="font-22px">Strumpf</span> <span class="font-19px">(“one<br />  who is overweight <br /> and lazy”).</span>"
          </p>
          <div class="uk-text-center">
            <?php $ligsmurf = get_sub_field('image_2');
            if( !empty($ligsmurf) ): ?>
              <img style="width: 70%;" src="<?php echo $ligsmurf['url']; ?>" alt="<?php echo $ligsmurf['alt']; ?>">
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_template_part( 'template-parts/content', 'webpage' ); ?>
</div>

<section id="artscom">
  <?php get_template_part( 'template-parts/content', 'artscom' ); ?>
</section>

<?php get_template_part( 'content', 'blocks' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

</div>
