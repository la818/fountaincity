<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage OneSocial Theme
 * @since OneSocial Theme 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- Search, Blog index, archives, Profile -->
	<?php if ( is_search() || is_archive() || is_home() ) : ?>

		<div class="posts-stream">
			<div class="loader"><?php _e( 'Loading...', 'onesocial' ); ?></div>
		</div>

	<?php endif; ?>

	<?php
	if ( !is_single() ) {
		?>
  

		<div class="header-area">
			<?php
			$header_class = '';

			if ( has_post_thumbnail() ) {
				$header_class = ' category-thumb';
				?>

				<a class="entry-post-thumbnail" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'post-thumb' ); ?>
				</a>

			<?php } ?>

			<div class="profile-visible"><?php echo get_the_date( 'M j' ); ?></div>

			<!-- Title -->
			<header class="entry-header<?php echo $header_class; ?>">

				<!-- Search, Blog index, archives -->
				<?php if ( is_search() || is_archive() || is_home() || ( buddyboss_is_bp_active() && bp_is_user() ) ) : ?>

					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'onesocial' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
					<!-- Single blog post -->
				<?php else : ?>

					<div class="table">
						<div class="table-cell">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</div>
					</div>

				<?php endif; // is_single()    ?>

			</header><!-- .entry-header -->

		</div><!-- /.header-area -->

	<?php } ?>

	<!-- Single Message -->
	<?php if (get_post_type() === 'message' ){ ?>
   <?php if( $post_author === $current_user) { ?>
		<h3><?php the_title()?>
</h3> 

            
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'onesocial' ) ); ?>
                
                <p><strong>
				
<?php

$post_author = get_the_author_meta('ID');
$current_user = get_current_user_id();
$href = "/edit" .'?pid='.  get_the_ID() ;
$hrefblog = "/edit" .'?pid='.  get_the_ID() ;
$hrefdelete = get_delete_post_link();
$post_type = get_post_type();
$rss = get_post_meta(get_the_ID(), 'rss', true);

if( $post_author === $current_user) {
	
	
	global $current_user; get_currentuserinfo(); $user_id = get_current_user_id();
if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] ==
"del" ) {
delete_gallery_image();
}	
$del_url = add_query_arg( array('action' => 'del', 'pid' => $post->ID) );?>
<a href="<?php echo wp_nonce_url($del_url,wpuf_del) ?>" class="post-edit-link" onclick="return confirm('Are you sure you want to delete? This action cannot be undone.');"><?php _e( 'DELETE THIS MESSAGE >', 'wpuf' ); ?></a>

	<?php
	 
} 




$author_username = get_the_author_meta('user_nicename');
$hrefprofile = 'https://whatsnewlocal.com/my-messages';
echo '<br>';
echo '<br>';
echo '<a href="'. $hrefprofile . '">RETURN TO MY MESSAGES > </a>';
	?>
</strong></p>

	<?php } 
   }
   elseif ( $post_author != $current_user) {
	   
   }
	
	?>

	<!-- Search, Blog index, archives, Profile -->
	<?php if ( is_search() || is_archive() || is_home() || ( buddyboss_is_bp_active() && bp_is_user() ) ) : // Only display Excerpts for Search, Blog index, Profile and archives    ?>

		<div class="entry-content entry-summary">

			<?php
			global $post;
			$post_content = $post->post_content;

			//entry-content
			if ( 'excerpt' === onesocial_get_option( 'onesocial_entry_content' ) ):
				the_excerpt();
			else:
				the_content();
			endif;
			?>


        </div>

			<footer class="entry-meta">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'onesocial' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="read-more"><?php _e( 'Continue reading', 'onesocial' ); ?></a>
				<span class="sep"><?php _e( '.', 'onesocial' ) ?></span>
				<span><?php echo boss_estimated_reading_time( $post_content ); ?></span>
				<a href="#" class="to-top bb-icon-arrow-top-f"></a>
			</footer><!-- .entry-meta -->

		</div><!-- .entry-content -->

		<!-- all other templates -->
	<?php elseif (get_post_type() != 'message') : ?>
		<div class="entry-main">
			<div class="entry-content">
            
            
            <?php 

$thumbnail_url = get_the_post_thumbnail_url();
$img_id_one = get_post_meta(get_the_ID(), 'additional_image_1', true);
$img_atts = wp_get_attachment_image_src($img_id_one, $size='full');
$img_src = $img_atts[0];
$img_id_two = get_post_meta(get_the_ID(), 'additional_image_2', true);
$img_attstwo = wp_get_attachment_image_src($img_id_two, $size='full');
$img_srctwo = $img_attstwo[0];
$img_id_three = get_post_meta(get_the_ID(), 'additional_image_3', true);
$img_attsthree = wp_get_attachment_image_src($img_id_three, $size='full');
$img_srcthree = $img_attsthree[0];
$img_id_four = get_post_meta(get_the_ID(), 'additional_image_4', true);
$img_attsfour = wp_get_attachment_image_src($img_id_four, $size='full');
$img_srcfour = $img_attsfour[0];
$img_id_five = get_post_meta(get_the_ID(), 'additional_image_5', true);
$img_attsfive = wp_get_attachment_image_src($img_id_five, $size='full');
$img_srcfive = $img_attsfive[0];
$img_id_six = get_post_meta(get_the_ID(), 'additional_image_6', true);
$img_attssix = wp_get_attachment_image_src($img_id_six, $size='full');
$img_srcsix = $img_attssix[0];
$img_id_seven = get_post_meta(get_the_ID(), 'additional_image_7', true);
$img_attsseven = wp_get_attachment_image_src($img_id_seven, $size='full');
$img_srcseven = $img_attsseven[0];
$img_id_eight = get_post_meta(get_the_ID(), 'additional_image_8', true);
$img_attseight = wp_get_attachment_image_src($img_id_eight, $size='full');
$img_srceight = $img_attseight[0];
$img_id_nine = get_post_meta(get_the_ID(), 'additional_image_9', true);
$img_attsnine = wp_get_attachment_image_src($img_id_nine, $size='full');
$img_srcnine = $img_attsnine[0];
$img_id_ten = get_post_meta(get_the_ID(), 'additional_image_10', true);
$img_attsten = wp_get_attachment_image_src($img_id_ten, $size='full');
$img_srcten = $img_attsten[0];
$rss = get_post_meta(get_the_ID(), 'rss', true);
$youtube = get_post_meta(get_the_ID(), 'youtube', true);

if(is_singular( array('post'))){ 
if($youtube != 'yes'){

if (!has_post_thumbnail()){?>
<div class="no_thumb">
</div>
<?php
}

if (empty($img_id_one) || $img_id_one != ''){ ?>
  
  <?php 
  if (!has_post_thumbnail(get_the_ID())){ ?>
  <div class="image-only" style="float:left; margin-right: 15px; margin-bottom: 15px;" >
  <a href="<?php the_permalink();?>"><img src="https://whatsnewlocal.com/wp-content/uploads/2018/10/WhatsNewLocal-Gravatar.jpg" style="max-width:300px"></a>
  </div>
  <?php }
  else{ ?>
  <div class="image-only" style="float:left; margin-right: 15px; margin-bottom: 15px;" >
  <a href="<?php echo $thumbnail_url;?>"><img src= "<?php echo $thumbnail_url;?>" style="max-width:300px"></a>
  
  </div>
<?php } }
else{
?>

<!-- Slideshow container -->
<div class="slideshow-container" style="float:left; margin-right: 15px; margin-bottom: 15px;" >

  <!-- Full-width images with number and caption text -->
   
   <?php if ($thumbnail_url != ''){ ?>
   
   <div class="mySlides fade">
    <a href="<?php echo $thumbnail_url;?>"><img src= "<?php echo $thumbnail_url;?>"></a>
  
  </div>
  
  <?php } ?>
  
  <?php if (isset($img_id_one) && $img_id_one != ''){ ?>
  
  <div class="mySlides fade">
    <a href="<?php echo $img_src;?>"><img src= "<?php echo $img_src;?>"></a>
  
  </div>
  <?php } ?>
  
  <?php if (isset($img_id_two) && $img_id_two != ''){ ?>
  
  <div class="mySlides fade">
    <a href="<?php echo $img_srctwo;?>"><img src= "<?php echo $img_srctwo;?>"></a>
  
  </div>
  
  <?php } ?>
  
  <?php if (isset($img_id_three)&& $img_id_three != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srcthree;?>"><img src= "<?php echo $img_srcthree;?>"></a>
   
  </div>
	<?php } ?>
   
   <?php if (isset($img_id_four)&& $img_id_four != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srcfour;?>"><img src= "<?php echo $img_srcfour;?>"></a>
   
  </div>
	<?php } ?>
    
    <?php if (isset($img_id_five)&& $img_id_five != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srcfive;?>"><img src= "<?php echo $img_srcfive;?>"></a>
   
  </div>
	<?php } ?>
    
    <?php if (isset($img_id_six)&& $img_id_six != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srcsix;?>"><img src= "<?php echo $img_srcsix;?>"></a>
   
  </div>
	<?php } ?>
    
    <?php if (isset($img_id_seven)&& $img_id_seven != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srcseven;?>"><img src= "<?php echo $img_srcseven;?>"></a>
   
  </div>
	<?php } ?>
    
        <?php if (isset($img_id_eight)&& $img_id_eight != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srceight;?>"><img src= "<?php echo $img_srceight;?>"></a>
   
  </div>
	<?php } ?>
    
         <?php if (isset($img_id_nine)&& $img_id_nine != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srcnine;?>"><img src= "<?php echo $img_srcnine;?>"></a>
   
  </div>
	<?php } ?>
    
         <?php if (isset($img_id_ten)&& $img_id_ten != ''){ ?>

  <div class="mySlides fade">
    <a href="<?php echo $img_srcten;?>"><img src= "<?php echo $img_srcten;?>"></a>
   
  </div>
	<?php } ?>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

        <?php }} }?>
        


<h3><?php the_title()?>
</h3> 


<p><strong>
				
<?php

$post_author = get_the_author_meta('ID');
$current_user = get_current_user_id();
$href = "/edit" .'?pid='.  get_the_ID() ;
$hrefblog = "/edit" .'?pid='.  get_the_ID() ;
$hrefdelete = get_delete_post_link();
$post_type = get_post_type();
$rss = get_post_meta(get_the_ID(), 'rss', true);

                                                  

if( $post_author === $current_user && $rss != 'yes') {



   
	echo '<a href="'. $href .'" title="Edit" class="post-edit-link">Edit | </a>';
	
}

if( $post_author === $current_user) {
	
	
	global $current_user; get_currentuserinfo(); $user_id = get_current_user_id();
if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] ==
"del" ) {
delete_gallery_image();
}	
$del_url = add_query_arg( array('action' => 'del', 'pid' => $post->ID) );?>
<a href="<?php echo wp_nonce_url($del_url,wpuf_del) ?>" class="post-edit-link" onclick="return confirm('Are you sure you want to delete? This action cannot be undone.');"><?php _e( 'Delete', 'wpuf' ); ?></a>

	<?php
	 
} 
	?>
</strong></p>
            <div class="entry-meta">
            
            <?php
			
			$country = get_post_meta(get_the_ID(), 'wcv_custom_product_country', true);
			$state = get_post_meta(get_the_ID(), 'wcv_custom_product_state', true);
			$city = get_post_meta(get_the_ID(), 'wcv_custom_product_city', true);
			$address = get_post_meta(get_the_ID(), 'wcv_custom_product_address', true);
			$price = get_post_meta(get_the_ID(), '_price', true);
            $category = get_the_category(get_the_ID());
			
			if ($category == 'Events'){
				$start_date = get_post_meta(get_the_ID(), 'start_date', true);
				$start_date_data = date_create($start_date);
				$start_date_format = date_format($start_date_data, "m/d/y");
				$end_date = get_post_meta(get_the_ID(), 'end_date', true);
				$end_date_data = date_create($end_date);
				$end_date_format = date_format($end_date_data, "m/d/y");
				if ($start_date_format != $end_date_format){
				echo 'Event Dates: ' . $start_date_format . ' - ' . $end_date_format;
				
		}
		
		if ($start_date_format == $end_date_format){
		echo 'Event Date: ' . $start_date_format;
		
		}
				
			   
			  }else {
			   
			    echo get_the_date(); }
				echo "<br>";
			
            if (!empty($price)){
			echo 'Price: ' . $price;
			echo "<br>";
			}
		   
		    if (!empty (get_post_meta(get_the_ID(), 'wcv_custom_product_address', true)) && (get_post_meta(get_the_ID(), 'wcv_custom_product_address', true) != '-')){
				
				echo get_post_meta(get_the_ID(), 'wcv_custom_product_address', true); 
				echo "<br>";
				}
					
					$city = get_post_meta(get_the_ID(), 'wcv_custom_product_city', true);
	  				 $state =  get_post_meta(get_the_ID(), 'wcv_custom_product_state', true);
	   				$country = get_post_meta(get_the_ID(), 'wcv_custom_product_country', true);
	   
	   
	    echo get_post_meta(get_the_ID(), 'wcv_custom_product_city', true) . ", " . get_post_meta(get_the_ID(), 'wcv_custom_product_state', true) . ", " . $country;
		
        
		
		echo "<br>";
		
		$latitude = get_post_meta(get_the_ID(), 'geo_latitude', true);
		$longitude = get_post_meta(get_the_ID(), 'geo_longitude', true);
		
		$html = "https://www.google.com/maps/dir/Current+Location/" . $latitude . "," . $longitude;
		
		if (!empty (get_post_meta(get_the_ID(), 'wcv_custom_product_address', true)) && (get_post_meta(get_the_ID(), 'wcv_custom_product_address', true) != '-')){
		echo '<a href="'.$html.'">Get Directions ></a>';
		echo "<br>";
		}
			
			echo "Posted By:"; 
			$author_username = get_the_author_meta('user_nicename');
			$author_nicename = get_the_author_meta('display_name');
$hrefprofile = '/author/' . $author_username;
			
			?>
		<?php echo '<a href="'. $hrefprofile . '">'.$author_nicename.' | See All My Listings ></a>';;
		echo "<br>";
		echo "<br>";
		
		?>
			
			
            </div>
            
            <?php 
			
			$rsshub = get_post_meta(get_the_ID(), 'rsshub', true); 
					if ($rsshub == 'yes'){
            
          
	$post_content = get_post_field('post_content', $post_id);
		$content = strstr($post_content, '<img', true);

	
 echo $content;
 echo "<br>";

            
			}else{
			
	the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'onesocial' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'onesocial' ), 'after' => '</div>' ) ); } ?>
			
            <?php 
			
			$buttonurl = get_post_meta(get_the_ID(), '_button_url', true); 
			$buttontext = get_post_meta(get_the_ID(), '_button_text', true);
			$cyberseo = get_post_meta(get_the_ID(), 'cyberseo_post_link', true); 
			$moreinfo = get_post_meta(get_the_ID(), 'more_info', true); 
			?>
            
          	<?php 
			if ($moreinfo != 'No'){
			
			if($buttonurl == ''){
			echo '<button><a href="'. $cyberseo .'">'.$buttontext.'</a></button></p>' ;	
			}else{
             echo '<button><a href="'. $buttonurl .'">'.$buttontext.'</a></button></p>' ; } 
           
            }
            ?>
            </div><!-- .entry-content -->

			<footer class="entry-meta">
				<div class="row">
					<div class="entry-tags col">
						<?php
						$terms = wp_get_post_tags( get_the_ID() );
						if ( $terms ) {
							?>
							<h3><?php _e( 'Tagged in', 'onesocial' ); ?></h3><?php
							foreach ( $terms as $t ) {
								echo '<a href="' . get_tag_link( $t->term_id ) . '">' . $t->name . '<span>' . $t->count . '</span></a>';
							}
						}
						?>
					</div>

                                <?php if ( get_post_status(get_the_ID()) == 'publish' ) { ?>
					<!-- /.entry-tags -->
					
					<!-- /.entry-share -->
                    <!-- Feedback Form Ends Here -->


                                <?php } ?>
				</div>
                
                <div class="entry-share col">
						

							<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ?>
								
									<?php ADDTOANY_SHARE_SAVE_KIT( array( 'use_current_page' => true ) ); ?>
								<?php
							}
							?>
                            
                            <?php echo "<br>"; ?>
                            <?php echo "<br>"; ?>
 <a href="#" post-id="<?php echo $post->ID; ?>" class="report-post-custom-link">REPORT CONTENT</a>    
						</ul>
					</div>


</div>

				<?php //edit_post_link( __( 'Edit', 'onesocial' ), '<span class="edit-link">', '</span>' );    ?>

			</footer><!-- .entry-meta -->
		</div>
		<!-- /.entry-main -->

	<?php endif; ?>

</article><!-- #post -->

<?php if ( is_single() ): 
	
?>		
<?php

$args = array(
    'post_type'  => 'about',
    'author'     => get_the_author_meta('ID'),
);

$wp_posts = get_posts($args);

if (count($wp_posts)) { 

$myposts = get_posts(  array(
	'author'         => get_the_author_meta('ID'),
	'post_type'      => 'about',
	'orderby'          => 'date',
	'order'            => 'DESC',
		)
		)
		;
		foreach($myposts as $post) {
			setup_postdata( $post );
			$thumbnail_url = get_the_post_thumbnail_url();
			?>
            <div class="container-three" style="margin-left: auto; margin-right: auto;">
			 <div class="image-only" style="float:left; margin-right: 5px; margin-bottom: 5px;" >
  <a href="<?php echo $thumbnail_url;?>"><img src= "<?php echo $thumbnail_url;?>" style="max-width:150px"></a>
  </div>
  <?php	
			echo '<h3>About ' . get_the_title($post->ID) . '</h3>';
			echo get_post_meta($post->ID, 'all_about_me', true);
			echo '<br>';
		    echo '<br>';
		wp_reset_postdata();
		}



}?>
	</div>	


	

				</div><!--.details-->
			</div>
		</div>
	</div><!--.post-author-info-->
<?php if (get_post_meta(get_the_ID(), 'contact_form', true) == 'Yes'){ ?>
<html>
<head>
<title>Contact <?php echo get_the_author_meta('display_name'); ?> </title>
</head>
<!-- Body Starts Here -->
<body>
<div class="container" style="max-width:600px">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>Contact <?php echo get_the_author_meta('display_name'); ?></h3>
<p></p>
</div>
<!-- Feedback Form -->
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<br>
<input name="vemail" placeholder="Your Email" type="text" value="">
<br>
<input name="sub" placeholder="Subject" type="text" value="">
<br>
<input id="website" name="website" type="text" value="">
<label>Your Message</label>
<br>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<br>
<input id="send" name="submit" type="submit" value="Send Message">
</form>
<p><strong><?php 
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Please fill out all the fields..";
}
elseif($_POST["website"]!=""){
echo "We're sorry, your message cannot be sent.";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's E-mail";
}
else{
$smsemail = get_post_meta(get_the_ID(), 'sms_email', true);
$subject = 'WhatsNewLocal.com New Message: ' . $_POST['sub'] . "\r\n\r\n";
$subjecttwo = 'WhatsNewLocal.com';
$message = 'SENDER NAME: ' . $_POST['vname'] . "\r\n\r\n" . 'MESSAGE: ' . $_POST['msg'] . "\r\n\r\n";
$message .= 'REPLY BY EMAIL: ' . $email;
$headers = 'From:'. $email . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email . "\r\n"; // Carbon copy to Sender
$headers .= 'Bcc: whatsnewlocal@gmail.com' . "\r\n"; // Blind Carbon copy to Site
$headerstwo = 'From:'. $email . "\r\n"; // Sender's Email
$messagetwo = "You have a new message from What's New Local! Please check your email.";
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
$messagetwo = wordwrap($messagetwo, 70);
// Send Mail By PHP Mail Function
$owneremail = get_post_meta(get_the_ID(), 'contact_email', true);
mail($smsemail, $subjecttwo, $messagetwo, $headerstwo);
mail($owneremail, $subject, $message, $headers);
$date = get_the_date('F j, Y');
wp_insert_post(array(
	'post_author' => $post->post_author,
	'post_content' => $message,
	'post_title' => $date . ' | ' . $email . ' | ' . $_POST['sub'],
	'post_type' => 'message',
	'post_status' => 'publish',
	));
echo "Your message has been sent successfully! Thank you for using WhatsNewLocal.com!";
}
}
}
}
?></p></strong>
</div>


</body>
<!-- Body Ends Here -->
</html>   


   
<?php endif; ?>
