<?php
class Freevent_Elementor_Widget extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'freevent_sponsor';
	}

	public function get_title()
	{
		return esc_html__('Sponsor', 'elementor-addon');
	}

	public function get_icon()
	{
		return 'eicon-code';
	}

	public function get_categories()
	{
		return ['basic'];
	}

	public function get_keywords()
	{
		return ['sponsor', 'event sponsor'];
	}

	protected function render()
	{
		$q = new WP_Query(
			[
				'post_type' => 'sponsor',
				'posts_per_page' => -1,
			]
		);



?>
		<section class="sponsor flex mx-4 justify-center">
			<?php if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post(); ?>
					<div class="px-4 w-1/4">
						<div data-ajax-url="<?php echo admin_url('admin-ajax.php'); ?>" data-id="<?php echo get_the_ID(); ?>" class="sponsor-logo-wrapper ">
							<div class="logo">
								<?php the_post_thumbnail('large');

								?>

							</div>
						</div>

					</div>

			<?php endwhile;
			endif;
			wp_reset_postdata(); ?>

		</section>

<?php
	}
}
