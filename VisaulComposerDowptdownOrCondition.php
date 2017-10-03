<?php
// shortcode
    extract( shortcode_atts(array(
        'social_media_3'  => '',
        'social_media_4'  => '',
        'floating'  => 'Show',//floating parameer Require
        'social_media_5'  => '',
        'floating'  => 'Yes'
    ), $atts) );

    // condition
    if():
    	// yes
    else:
    	// another yes
    endif;

    if():
    	// yes otherwise blank show
    endif;

// Visual Composer
	array(
				'type'			=> 'dropdown',
				'holder'		=> 'div',
				'class'			=> '',
				'heading'		=> esc_html__( 'main Social', 'eWord' ),
				'param_name'	=> 'floating',//floating require
				'value'			=> array(
					'1'			=> 'Show',
					'2'			=> 'Hidden'
				),	
				//value = 1 require but Show or Hidden optional
				'group'			=> esc_html__( 'Social Option', 'eword' )	

			),


// vc example
	vc_map(array(


		'name'		=> esc_html__( 'Footer Option', 'eword' ),
		'base'		=> 'footershortcode',
		'class'		=> '',
		'category' 	=> esc_html__( 'eWord', 'eword' ),
		'group'		=> esc_html__( 'eWord', 'eword' ),
		'icon'		=> get_template_directory_uri() . '/images/vc_Icon/footer.png',
		'params'	=> array(
			
			array(
				'type'			=> 'textarea',
				'holder'		=> 'div',
				'class'			=> '',
				'heading'		=> esc_html__( 'Social Media 4', 'eWord' ),
				'param_name'	=> 'social_media_4',
				'value'			=> esc_html__( 'Social Media 4', 'eWord' ),	
				'description'	=> esc_html__( 'You may give your Footer Scoial media nor blank', 'eWord' ),
				'group'			=> esc_html__( 'Social Option', 'eword' )	

			),
			array(
				'type'			=> 'dropdown',
				'holder'		=> 'div',
				'class'			=> '',
				'heading'		=> esc_html__( 'main Social', 'eWord' ),
				'param_name'	=> 'floating',//floating require
				'value'			=> array(
					'1'			=> 'Show',
					'2'			=> 'Hidden'
				),	
				//value = 1 require but Show or Hidden optional
				'group'			=> esc_html__( 'Social Option', 'eword' )	

			),
			array(
				'type'			=> 'textarea',
				'holder'		=> 'div',
				'class'			=> '',
				'heading'		=> esc_html__( 'Social Media 4', 'eWord' ),
				'param_name'	=> 'social_media_5',
				'value'			=> esc_html__( 'Social Media 4', 'eWord' ),	
				'description'	=> esc_html__( 'You may give your Footer Scoial media nor blank', 'eWord' ),
				'group'			=> esc_html__( 'Social Option', 'eword' )	

			),
			array(
				'type'			=> 'dropdown',
				'holder'		=> 'div',
				'class'			=> '',
				'heading'		=> esc_html__( 'main Social', 'eWord' ),
				'param_name'	=> 'floating',//floating require
				'value'			=> array(
					'1'			=> 'Yes',
					'2'			=> 'No'
				),	//value = 1 require but yes or no optional
				
				'group'			=> esc_html__( 'Social Option', 'eword' )	

			)

		)



	));



//shortcode Example
function eword_footer( $atts, $content = null ){
    extract( shortcode_atts(array(
        'social_media_3'  => '',
        'social_media_4'  => '',
        'floating'  => 'Show',//floating parameer Require
        'social_media_5'  => '',
        'floating'  => 'Yes'
    ), $atts) );

    ob_start();
?>


<div id="section6" style="background: <?php esc_html_e( $footer_background ); ?>">
   
                <ul>
                 
                    <li class="wow fadeInLeft" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInLeft;"><a href="http://www.youtube.com/channel/UCoUQ0u-G8wdOXGmbhNTrrOg"><i class="fa <?php esc_html_e( $social_media_3 ); ?>" aria-hidden="true"></i></a></li>
                     
                    <?php if( $floating  == 'Show' ) : //$floating requiare  ?>
                     <li class="wow fadeInLeft" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInLeft;"><a href="http://www.youtube.com/channel/UCoUQ0u-G8wdOXGmbhNTrrOg"><i class="fa <?php esc_html_e( $social_media_4 ); ?>" aria-hidden="true"></i></a></li>
                 
                    <?php endif; ?>  
                    <?php if( $floating  == 'Yes' ) : //$floating requiare ?>
                     <li class="wow fadeInLeft" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInLeft;"><a href="http://www.youtube.com/channel/UCoUQ0u-G8wdOXGmbhNTrrOg"><i class="fa <?php esc_html_e( $social_media_5 ); ?>" aria-hidden="true"></i></a></li>
                 
                    <?php endif; ?>
                </ul>

</div>


<?php

$footer_c = ob_get_clean();
return $footer_c;
}

add_shortcode( 'footershortcode', 'eword_footer' );





//Shortcode