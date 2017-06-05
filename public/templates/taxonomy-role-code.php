<?php
/**
 *
 * @link http://justintadlock.com/archives/2011/10/20/custom-user-taxonomies-in-wordpress/
 */
$term_id = get_queried_object_id();
$term = get_queried_object();

$users = get_objects_in_term( $term_id, $term->taxonomy );

if ( !empty( $users ) ) {
?>
	<?php foreach ( $users as $user_id ) { ?>

		<div class="user-entry">
			<?php echo get_avatar( get_the_author_meta( 'email', $user_id ), '96' ); ?>
			<h2 class="user-title"><a href="<?php echo esc_url( get_author_posts_url( $user_id ) ); ?>"><?php the_author_meta( 'display_name', $user_id ); ?></a></h2>

			<div class="description">
				<?php echo wpautop( get_the_author_meta( 'description', $user_id ) ); ?>
			</div>
		</div>

	<?php } ?>
<?php }
