<?php
/*Template name: Contact
*/
?>
<?php get_header(); ?>
	<section class="breadcrumbs" data-type="background"  style="background-image: url(img/jeans-2406521_1920.jpg);">	
    <h3>Contact Us</h3>
  <h6><i class="fas fa-home"></i>Home<i class="fas fa-angle-right"></i>Contacts</h6>
	<!-- /.breacrumbs -->
	</section>

	

<!--Contact Form Section-->

  <section class="contacts">
    <div class="contacts_wrapper">
      <div class="form">

      	<?php if(get_post_meta($post->ID, 'ale_contact_title', true)){ ?>
          <h5><?php echo esc_attr(get_post_meta($post->ID, 'ale_contact_title', true)); ?></h5>
        <?php } ?>

        <?php if(get_post_meta($post->ID, 'ale_contact_description', true)){ ?>
          <p><?php echo esc_attr(get_post_meta($post->ID, 'ale_contact_description', true)); ?></p>
        <?php } ?>

      <!--  <form action="#">
          
             <div class="input_styles">
              <input type="text" class="mat_input" id="name" placeholder="Name" >
              <span class="backgrounds"></span>
             </div>
              
            <div class="input_styles">
              <input type="email" class="mat_input" id="email" placeholder="Email" >
              <span class="backgrounds"></span>
            </div>
      
            <div class="input_styles">
              <input type="text" class="mat_input" id="message" placeholder="Message" >
              <span class="backgrounds"></span>
            </div>

        </form>
        <a href="#" class="button">Send</a> -->

        <?php if(do_shortcode('[contact-form-7 id="13" title="Contact page form"]')){ ?>
			<?php echo do_shortcode('[contact-form-7 id="13" title="Contact page form"]'); ?>
			<?php } ?>

      </div>

      <div class="store_address">
        <?php if(get_post_meta($post->ID, 'ale_address_section_title', true)){ ?>
          <h5><?php echo esc_attr(get_post_meta($post->ID, 'ale_address_section_title', true)); ?></h5>
        <?php } ?>

        <?php if(get_post_meta($post->ID, 'ale_address_section_description', true)){ ?>
          <p><?php echo esc_attr(get_post_meta($post->ID, 'ale_address_section_description', true)); ?></p>
        <?php } ?>
        
        <?php if(get_post_meta($post->ID, 'ale_store_phone', true)){ ?>
          <p>Phone: <span class="address_details"><?php echo esc_attr(get_post_meta($post->ID, 'ale_store_phone', true)); ?></span></p>
        <?php } ?>
        
        <?php if(get_post_meta($post->ID, 'ale_store_email', true)){ ?>
          <p>Email: <span class="address_details"><?php echo esc_attr(get_post_meta($post->ID, 'ale_store_email', true)); ?></span></p>
        <?php } ?>

        <?php if(get_post_meta($post->ID, 'ale_store_address', true)){ ?>
          <p>Address: <span class="address_details"><?php echo esc_attr(get_post_meta($post->ID, 'ale_store_address', true)); ?></span></p>
        <?php } ?>
      </div>
    </div>
  </section>

  <section id="googleMap">
  	<?php if(get_post_meta($post->ID, 'ale_store_map', true)){ ?>
  	  <iframe src="<?php echo esc_attr(get_post_meta($post->ID, 'ale_store_map', true)); ?>" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen>
  	</iframe>
  	<?php } ?>
  </section>

  <?php get_footer(); ?>