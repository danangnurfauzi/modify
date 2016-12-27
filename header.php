<?php global $woocommerce, $yith_wcwl; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php if (is_page('build-your-own-2')) { ?>
	<meta name="viewport" content="width=1190" />
	<?php } else {?>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<?php } ?>
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<meta http-equiv="cleartype" content="on">
	<meta name="HandheldFriendly" content="True">
	<?php if( $favicon = ot_get_option('favicon')){ ?>
	<link rel="shortcut icon" href="<?php echo $favicon; ?>">
	<?php } else {?>
	<link rel="shortcut icon" href="<?php echo THB_THEME_ROOT; ?>/assets/img/favicon.ico">
	<?php } ?>
	<?php $blank = is_page_template('template-blank.php'); ?>
	<?php if (isset($_GET['boxed'])) { $boxed = htmlspecialchars($_GET['boxed']); } else { $boxed = ot_get_option('boxed'); }  ?>
	<?php
		$class = array();
		if($boxed == 'yes') { 
			array_push($class, 'boxed');
	 	}
	 	if ($blank) {
	 		array_push($class, 'thb-blank');
	 	}
	?>
	<?php 
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head(); 
	?>
	
	<link rel=stylesheet href="<?php bloginfo('template_directory');?>/assets/js/owl/normalize.css">
	<link rel=stylesheet href="<?php bloginfo('template_directory');?>/assets/js/owl/owl.carousel.css">
	<link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	
</head>
<body <?php body_class($class); ?> data-url="<?php echo home_url(); ?>" data-cart-count="<?php echo $woocommerce->cart->cart_contents_count; ?>" data-sharrreurl="<?php echo THB_THEME_ROOT; ?>/inc/sharrre.php">
<?php include_once("analyticstracking.php") ?>
<?php if (!$blank) { ?>
<!-- Start Mobile Menu -->
<section id="sidr-main">
	<a href="#" id="sidr-close"></a>
	<?php get_search_form(); ?>
	<?php if(has_nav_menu('nav-menu')) { ?>
	  <?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'depth' => 3, 'container' => false, 'menu_class' => 'mobile-menu' ) ); ?>
	<?php } else { ?>
		<ul class="sf-menu">
					<li><a href="<?php echo get_admin_url().'nav-menus.php'; ?>">Please assign a menu from Appearance -> Menus</a></li>
				</ul>
	<?php } ?>
</section>
<!-- End Mobile Menu -->

<?php } // Blank page check ?>


<?php
if (is_page('builder')) { ?>

<div id="newbuilder">

<?php } ?>

<?php
if (is_page('new-builder-2')) { ?>

<div id="newbuildervv">

<?php } ?>

<?php
if (is_page('new-builder-4')) { ?>

<div id="newbuildervv">

<?php } ?>


<div id="wrapper">
<?php if (!$blank) { ?>

<!-- Start Header -->
<div class="tbigheader1">
	<div class="row">
			<div class="small-12 medium-7 columns tbigheader1box1">
				<ul>
							<li>
					<a class=first" href="https://www.teezeewatches.com/"><img src="https://www.teezeewatches.com/wp-content/uploads/2014/03/fixlogo.png" width="150" height="120"></a>
							</li>
					<!-- <li>Free Shipping Over $50</li> -->
					<li>Free US shipping over $100</li>
					<li>
						<?php
							if ( is_user_logged_in() ) { ?> 
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
								<?php _e('My Account', THB_THEME_NAME); ?>
							</a>
							<?php } else { ?>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('Login', THB_THEME_NAME); ?></a>
						<?php } ?>
					</li>
					<?php if ( ! is_user_logged_in() ) { ?>
					<li>
						
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('Register', THB_THEME_NAME); ?></a>
						
					</li>
					<?php } ?>
					<li>
						<a href="<?php if($woocommerce) { echo $woocommerce->cart->get_checkout_url(); }?>">
							<?php _e('Checkout', THB_THEME_NAME); ?>
						</a>
					</li>
				</ul>
			</div>

			<div class="small-12 medium-5 columns tbigheader1box2">
				<ul>
					<li><?php the_field('search','option'); ?></li>
					<li class="last"> 			
							<aside class="mainbox">
								<?php if(in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )  &&  (ot_get_option('header_cart') != 'off') ) { ?>
									<div id="quick_cart">
										<a id="mycartbtn" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart',THB_THEME_NAME); ?>"> <span class="float_count"><?php echo $woocommerce->cart->cart_contents_count; ?></span></a>
											<div class="cart_holder">
											<ul class="cart_details">
					<!---------- Start   -------------->
<?php if (sizeof($woocommerce->cart->cart_contents)>0) : 

$allcart = $woocommerce->cart->get_cart();
foreach( $allcart as $cart_item_key => $cart_item ) {
	if($cart_item['watch_id'] <> '')
	{
		$allcart[$cart_item_key]['watch_founds'] = substr_count($cart_item['watch_id'], '_');
	}
}

$i=1;
$pg = 0;
$pgwatch = array();

foreach ($allcart  as $cart_item_key => $cart_item) :
	$_product = $cart_item['data'];                                            
	if ($_product->exists() && $cart_item['quantity']>0) :?>
	
	<?php


	if($cart_item['watch_id'] <> '')
	{
	  if($pg == $cart_item['watch_founds'])
	  { ?>
		<li>
			<figure>
				<a class="cart_list_product_img" href="<?php echo get_permalink($cart_item['product_id']);?>">
					<div class="bandDiv11">
						<?php  echo $_product->get_image();?>
					</div>
					<?php
				   if($cart_item['watch_founds'] == 3)
				   { ?>
						<div class="bandDiv22">
							<?php  echo $pgwatch[1]['product_data']->get_image();?>
						</div>
						<div class="bandDiv33">
							<?php  echo $pgwatch[2]['product_data']->get_image();?>
						</div>
					 <?php }

					 if($cart_item['watch_founds'] == 5)
				   { ?>
						<div class="bandDiv22">
							<?php  echo $pgwatch[1]['product_data']->get_image();?>
						</div>
						<div class="bandDiv33">
							<?php  echo $pgwatch[2]['product_data']->get_image();?>
						</div>
						<div class="faceDiv22">
							<?php  echo $pgwatch[3]['product_data']->get_image();?>
						</div>
						<div class="faceDiv33">
							<?php  echo $pgwatch[4]['product_data']->get_image();?>
						</div>
					 <?php }
					?>
					<div class="faceDiv11" >
						<?php echo $pgwatch[0]['product_data']->get_image();?>
					</div>
				</a>

				
			</figure>
			
			<?php
			  if($cart_item['watch_founds'] == 1)
			  {
				echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">×</a>', esc_url( $woocommerce->cart->get_remove_url1( $cart_item_key,$pgwatch[0]['key'] ) ), __( 'Remove this item', THB_THEME_NAME ) ), $cart_item_key );
			  }
			  else if($cart_item['watch_founds'] == 3)
			  {
				echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">×</a>', esc_url( $woocommerce->cart->get_remove_url2( $cart_item_key,$pgwatch[0]['key'],$pgwatch[1]['key'],$pgwatch[2]['key'] ) ), __( 'Remove this item', THB_THEME_NAME ) ), $cart_item_key );
			  }
			  else if($cart_item['watch_founds'] == 5)
			  {
				echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">×</a>', esc_url( $woocommerce->cart->get_remove_url3( $cart_item_key,$pgwatch[0]['key'],$pgwatch[1]['key'],$pgwatch[2]['key'],$pgwatch[3]['key'],$pgwatch[4]['key'] ) ), __( 'Remove this item', THB_THEME_NAME ) ), $cart_item_key );
			  }
			  else
			  {
				echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="remove" title="%s">×</a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', THB_THEME_NAME ) ), $cart_item_key );
			  } ?>
			
			<div class="list_content">
				<?php 
				   
				   echo '<h5>';

				   echo '<a href="'.$pgwatch[0]['product_data']->get_permalink( $pgwatch[0]['data'] ).'">' . apply_filters('woocommerce_cart_widget_product_title', $pgwatch[0]['product_data']->get_title(), $pgwatch[0]['product_data']) . '</a> + ';
				   
				   

				   if($cart_item['watch_founds'] == 3)
					{
					    
						
						echo '<a href="'.$pgwatch[1]['product_data']->get_permalink( $pgwatch[1]['data'] ).'">' . apply_filters('woocommerce_cart_widget_product_title', $pgwatch[1]['product_data']->get_title(), $pgwatch[1]['product_data']) . '</a> + ';
						echo '<a href="'.$pgwatch[2]['product_data']->get_permalink( $pgwatch[2]['data'] ).'">' . apply_filters('woocommerce_cart_widget_product_title', $pgwatch[2]['product_data']->get_title(), $pgwatch[2]['product_data']) . '</a> + ';

					}


					if($cart_item['watch_founds'] == 5)
					{
					    
						
						echo '<a href="'.$pgwatch[1]['product_data']->get_permalink( $pgwatch[1]['data'] ).'">' . apply_filters('woocommerce_cart_widget_product_title', $pgwatch[1]['product_data']->get_title(), $pgwatch[1]['product_data']) . '</a> + ';
						echo '<a href="'.$pgwatch[2]['product_data']->get_permalink( $pgwatch[2]['data'] ).'">' . apply_filters('woocommerce_cart_widget_product_title', $pgwatch[2]['product_data']->get_title(), $pgwatch[2]['product_data']) . '</a> + ';
						echo '<a href="'.$pgwatch[3]['product_data']->get_permalink( $pgwatch[3]['data'] ).'">' . apply_filters('woocommerce_cart_widget_product_title', $pgwatch[3]['product_data']->get_title(), $pgwatch[3]['product_data']) . '</a> + ';
						echo '<a href="'.$pgwatch[4]['product_data']->get_permalink( $pgwatch[4]['data'] ).'">' . apply_filters('woocommerce_cart_widget_product_title', $pgwatch[4]['product_data']->get_title(), $pgwatch[4]['product_data']) . '</a> + ';

					}

					echo '<a href="'.get_permalink($cart_item['product_id']).'">' . apply_filters('woocommerce_cart_widget_product_title', $_product->get_title(), $_product) . '</a>';

				   echo '</h5>';

				   echo '<div class="quantity">'.$cart_item['quantity'].'</div>';
				   
					$price1 = 0;
					$price2 = 0;
					$price3 = 0;
					$price4 = 0;
					$price5 = 0;
					$price6 = 0;
				   $price1 = $pgwatch[0]['product_data']->get_price();
				    if($cart_item['watch_founds'] == 3)
					{
					   $price2 = $pgwatch[1]['product_data']->get_price();
					   $price3 = $pgwatch[2]['product_data']->get_price();
					}
					if($cart_item['watch_founds'] == 5)
					{
					   $price2 = $pgwatch[1]['product_data']->get_price();
					   $price3 = $pgwatch[2]['product_data']->get_price();
					   $price5 = $pgwatch[3]['product_data']->get_price();
					   $price6 = $pgwatch[4]['product_data']->get_price();
					}
				   $price4 = $_product->get_price();

				   
				   echo '<div class="price">'.woocommerce_price($price1 + $price2 + $price3 + $price4+ $price5+ $price6).'</div>';
				?>
			</div>
		</li>
	<?php
			$pg = 0;
			$pgwatch = array();
		}
		else
		{
			$pgwatch[$pg]['key'] = $cart_item_key;
			$pgwatch[$pg]['data'] = $cart_item;
			$pgwatch[$pg]['product_data'] = $_product;

			$key = $cart_item_key;
			$data = $cart_item;
			$product_data = $_product;
			$pg = $pg + 1;
		}
	} else { ?>

		<li>
			<figure>
				<?php   echo '<a class="cart_list_product_img" href="'.get_permalink($cart_item['product_id']).'">' . $_product->get_image().'</a>'; ?>
			</figure>
			
			<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">×</a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), __('Remove this item', THB_THEME_NAME) ), $cart_item_key ); ?>
			
			<div class="list_content">
				<?php 
				 $product_title = $_product->get_title();
				   echo '<h5><a href="'.get_permalink($cart_item['product_id']).'">' . apply_filters('woocommerce_cart_widget_product_title', $product_title, $_product) . '</a></h5>';
				   echo '<div class="quantity">'.$cart_item['quantity'].'</div>';
				   echo '<div class="price">'.woocommerce_price($_product->get_price()).'</div>';
				?>
			</div>
		</li>

	<?php
	}
endif; endforeach; ?>
	<div class="subtotal">                                        
		<?php _e('subtotal', THB_THEME_NAME); ?><span><?php echo $woocommerce->cart->get_cart_total(); ?></span>                                   
	</div>
	
	<!--a href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" class="btn large grey"><?php _e('View Shopping Bag', THB_THEME_NAME); ?></a-->   
	<a href="https://www.teezeewatches.com/cart-2/?clear-cart=Empty Cart" class="btn large grey"><?php _e('Empty Cart', THB_THEME_NAME); ?></a>
	
	<a href="<?php echo esc_url( $woocommerce->cart->get_checkout_url() ); ?>" class="btn large"><?php _e('Checkout', THB_THEME_NAME); ?></a>
	
<?php else: echo '<p class="empty">'.__('You have no products in your shopping bag.','woocommerce').'</p>'; endif; ?>
<!--- ENNNNNNNNNDDDDDDDDDDD ------->
											</ul>
											</div>
									</div>
								<?php } ?>
								
							</aside>
					
					</li>
				</ul>
			</div>
	</div>
</div>



<header id="header" class="style1">
	<div class="row">
		<div class="small-12 medium-4 columns logo">
			<div class="row">
				
				<div class="small-6 medium-10 columns">
					<?php if (ot_get_option('logo')) { $logo = ot_get_option('logo'); } else { $logo = THB_THEME_ROOT. '/assets/img/logo-light.png'; } ?>
					
					<a href="<?php echo home_url(); ?>" class="logolink <?php if(ot_get_option('logo_mobile')) { ?>hide-logo<?php } ?>"><img src="<?php echo $logo; ?>" class="logoimg" alt="<?php bloginfo('name'); ?>"/></a>
					<?php if(ot_get_option('logo_mobile')) { ?>
						<a href="<?php echo home_url(); ?>" class="show-logo logolink"><img src="<?php echo ot_get_option('logo_mobile'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
					<?php } ?>
				</div>
				<div class="small-6 medium-2 columns show-for-small">
					<?php if (ot_get_option('header_cart') != 'off') { ?>
					<a href="<?php if($woocommerce) { echo $woocommerce->cart->get_cart_url(); }?>" title="<?php _e('View your shopping cart',THB_THEME_NAME); ?>" id="mobile-cart">
					</a>
					<?php } ?>
					<a href="#mobile-toggle" id="mobile-toggle" style="color:#fff !important">
						<i class="fa fa-bars" style="color:#fff !important"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="small-12 medium-8 columns">
			
		</div>
	</div>
</header>
<nav id="nav">
	<div class="row">
		<div class="small-12">
			<?php if(has_nav_menu('nav-menu')) { ?>
			  <?php wp_nav_menu( array( 'theme_location' => 'nav-menu', 'depth' => 3, 'container' => false, 'menu_class' => 'sf-menu', 'walker'          => new UberStoreNavDropdown  ) ); ?>
			<?php } else { ?>
				<ul class="sf-menu">
					<li><a href="<?php echo get_admin_url().'nav-menus.php'; ?>">Please assign a menu from Appearance -> Menus</a></li>
				</ul>
			<?php } ?>
		</div>
		
	</div>
</nav>
<?php if (is_front_page()) {
		?><div><?php layerslider(3) ?></div>
			
		<div class="row homesmallbangbig">
				<div class="boxxhh1">
					<!--<a href="https://www.teezeewatches.com/sneaker-inspired/"><img src="https://www.teezeewatches.com/wp-content/uploads/2014/02/banho_1.jpg"></a>-->
					<a href="<?php echo the_field('link_image_1') ?>"><img src="<?php echo the_field('image_box_1') ?>"></a>
				</div>
				<div class="boxxhh2">
					<div class="boxxhhll1">
						<a href="<?php echo the_field('link_image_2') ?>"><img  src="<?php echo the_field('image_box_2') ?>"></a>
					</div>
					<div class="boxxhhll2">
						<div class="boxxhhnnll1">
							<a href="<?php echo the_field('link_image_3') ?>"><img src="<?php echo the_field('image_box_3') ?>"></a>
						</div>
						<div class="boxxhhnnll2">
							<a href="https://www.teezeewatches.com/band-holders/"><img src="https://www.teezeewatches.com/wp-content/uploads/2016/06/home-img2.jpg"></a>
						</div>
					</div>
				</div>
		</div>
		
		<?php
	}
?>

<!-- End Header -->

<?php get_template_part('template-breadcrumbs'); ?>
<?php } // Blank page check ?>
<div role="main" id="mainWrapper">