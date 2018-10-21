<?php get_header(); ?>

<?php if( have_rows( 'home' ) ): while( have_rows( 'home' ) ): the_row(); ?>

<p class="slogan"><?php if( get_sub_field( 'slogan' ) ): the_sub_field( 'slogan' ); endif; ?></p>

<section id="about" style="width:90%;margin:auto;" uk-scrollspy="cls: uk-animation-fade; delay: 1000">
  <div class="uk-container">
    <div class="" uk-grid>
      <div class="uk-width-1-6@s">

      </div>
      <div class="uk-width-expand@s">
        <div class="uk-child-width-1-2@s uk-grid-collapse uk-text-center bs-panel" uk-grid uk-height-match="target: > div > .uk-tile">
            <div>
                <div class="uk-tile bs-tile-white">
                  <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div>
                <div class="uk-tile bs-tile-red">
                  <p>Websites maak ik voor eenieder die van een afwisselende invalshoek houdt en dat onder de vlag van mijn eigen huismerk Bad Schtroumpfies.
                  </p>
                  <p>
                    Veel is mogelijk… in alle vreugden en noden van de moderne tijd wordt voorzien.
                  </p>
                  <p>
                    Technisch in orde, up-to-date en met zorg gemaakt. Neem vooral contact op!
                    <hr class="uk-article-divider" />
                  </p>
                  <p class="uk-text-center">
                     <a href="<?php echo antispambot(get_the_author_meta('user_email')); ?>" uk-icon="icon:mail; ratio:1.5"></a>
                     <a href="https://www.linkedin.com/in/rutger-kroon-8024a015/" target="_blank" uk-icon="icon:linkedin; ratio:1.5"></a>
                     <a href="https://github.com/oglikap" target="_blank" uk-icon="icon:github; ratio:1.5"></a>
                     <a href="https://www.facebook.com/rutger.kroon.9" target="_blank" uk-icon="icon:facebook; ratio:1.5"></a>
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-tile bs-tile-red">
                  <p class="uk-text-center" style="line-height:1;">
                  Etymology<br />
                  by Wikipedia:<br />
                  "Borrowed from Dutch<br />  <span class="font-24px">smurf (“smurf”)</span>, <span class="font-16px">(via <br /> the Belgian comic</span> <span class="font-22px">De Smurfen<br />  (“The Smurfs”),</span><span class="font-16px">a translation of<br /> </span> French <span class="font-22px">Les Schtroumpfs),</span> <span class="font-16px">from<br /> </span> French
                  <span class="font-22px"> Schtroumpf</span> <span class="font-16px"> (“smurf”),<br />  probably from the</span> military slang <span class="font-24px">stroumpf</span> (“idiot”), <span class="font-16px">from German</span> <span class="font-22px">Strumpf</span> <span class="font-19px">(“one<br />  who is overweight <br /> and lazy”).</span>"
                  </p>
                </div>
            </div>
            <div>
                <div class="uk-tile bs-tile-white">
                  <?php $ligsmurf = get_sub_field( 'image_2' );
                  if( !empty($ligsmurf) ): ?>
                    <img src="<?php echo $ligsmurf['url']; ?>" alt="<?php echo $ligsmurf['alt']; ?>">
                  <?php endif; ?>
                </div>
            </div>
        </div>
      </div>
      <div class="uk-width-1-6@s">

      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
