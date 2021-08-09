<?php
/**
 * @package Leverage
 */

if ( is_admin() && ! get_option( 'leverage_release_208' ) ) {
    add_option( 'leverage_release_208', true );
    wp_redirect( get_admin_url() . 'admin.php?page=leverage-release-notes' );
    exit;
}

function leverage_release_notes() {
	add_menu_page( 
		'Leverage Release Notes', 
		'Leverage Release Notes', 
		'manage_options', 
		'leverage-release-notes', 
		'leverage_release_notes_page'
	);
}
add_action( 'admin_menu', 'leverage_release_notes' );

add_action( 'admin_head', function() {
	remove_menu_page( 'leverage-release-notes', 'leverage-release-notes' );
});

function leverage_release_notes_page() { ?>

    <div id="leverage-release-notes" class="leverage-release-notes">
        <div class="wrap about__container">
            <div class="about__header">
                <div class="about__header-inner">
                    <div class="about__header-text"><?php echo __( 'Release Notes', 'leverage' ); ?></div>
                    <div class="about__header-title">
                        <p class="notranslate"> Leverage <span>2.0</span> </p>
                    </div>
                </div>
                <nav class="about__header-navigation nav-tab-wrapper wp-clearfix" aria-label="Secondary menu"> 
                    <a href="about.php" class="nav-tab nav-tab-active" aria-current="page"><?php echo __( 'What\'s New', 'leverage' ); ?></a> 
                    <a href="https://leverage.codings.dev/docs.php?v=wordpress" target="_blank" class="nav-tab"><?php echo __( 'Online Docs', 'leverage' ); ?></a> 
                    <a href="https://codings.dev" target="_blank" class="nav-tab"><?php echo __( 'Get Support', 'leverage' ); ?></a> 
                    <a href="https://leverage.codings.dev/buy-at-themeforest" target="_blank" class="nav-tab"><?php echo __( 'Buy Now', 'leverage' ); ?></a>
                </nav>
            </div>
            <div class="about__section has-subtle-background-color">
                <span class="version has-absolute-right"><?php echo __( '', 'leverage' ); ?>Version 2.0.8 / Apr 3, 2021</span>
                <div class="column">
                    <h2><?php echo __( 'Welcome to', 'leverage' ); ?> Leverage 2.0.8</h2>
                    <p><?php echo __( 'This version brings general improvements for the data import and installation of required plugins.', 'leverage' ); ?></p>
                </div>
            </div>
            <div class="about__section has-subtle-background-color has-2-columns">
                <a href="https://themeforest.net/item/leverage-agency-portfolio-creative-theme/26643749#item-description__changelog" target="_blank" class="has-absolute-right"><?php echo __( 'View full changelog', 'leverage' ); ?></a>
                <div class="column">
                    <h3><?php echo __( 'Standard improvements', 'leverage' ); ?></h3>
                    <p><?php echo __( 'Adjustment of compatibility with the one click demo import.', 'leverage' ); ?></p>
                    <p><?php echo __( 'Improvements in the availability of the required plugins.', 'leverage' ); ?></p>
                </div>
            </div>
            <hr>
            <div class="return-to-dashboard"> <a href="index.php"><?php echo __( 'Go to Dashboard → Home', 'leverage' ); ?></a> </div>
        </div>
    </div>

<?php 
}