<?php

function jc_block_patterns() {

	register_block_pattern(
		'jc-block-patterns/jc-content-upgrade',
		array(
			'title'       => __( 'Content Upgrade', 'jc-block-patterns' ),
			
			'description' => _x( 'A simple set of blocks to encourage people to join the membership', 'jc-block-patterns' ),
			
			'content'     => "<!-- wp:heading {\"textAlign\":\"center\"} -->\n<h2 class=\"has-text-align-center\">TEASER HEADING</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\"} -->\n<p class=\"has-text-align-center\">TEASER TEXT. Join the <a href=\"https://buildsomething.club\">Build Something Club</a>.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"contentJustification\":\"center\",\"align\":\"wide\"} -->\n<div class=\"wp-block-buttons alignwide is-content-justification-center\"><!-- wp:button -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link\" href=\"https://buildsomething.club\">Join for just $5/mo</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
			
			'categories'  => array( 'buttons' ),
		)
	);

}    

add_action( 'init', 'jc_block_patterns' );