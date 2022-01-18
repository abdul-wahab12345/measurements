
<?php

$profile = get_option('aw_profile_page');
$profile_url = get_permalink($profile);

$my_account_page = get_permalink( get_option('woocommerce_myaccount_page_id') ) . "men";
$redirect = $my_account_page;

?>

<h3>My Measurements</h3>

<div class="pr-mm-product-types-tabs">
	<button class="pr-mm-product-types-tab shirts" onclick='openCity("shirts")'>Shirts</button>
	<button class="pr-mm-product-types-tab jackets" onclick='openCity("jackets")'>Jackets</button>
	<button class="pr-mm-product-types-tab pants" onclick='openCity("pants")'>Pants</button>
	<button class="pr-mm-product-types-tab overshirts" onclick='openCity("overshirts")'>Overshirts</button>
</div>

<div id="shirts" class="pr-mm-product-types-tab-content">
	<h6>Saved shirt profiles</h5>

		<?php

		$men_shirts_profiles = get_posts(array('numberposts' => -1,'post_type'  => 'profiles', 'meta_key'   => 'type',
			'meta_value' => 'men_shirts',"author" => get_current_user_id()));
		foreach( $men_shirts_profiles as $msp_k => $msp_i )
		{
			?>
			<div class="my-account-single-profile-container">
				<div class="profile-link">
					<?php echo $msp_i->post_title; ?>
				</div>
				<div class="delete-profile-link-container">
					<a href="<?php echo get_delete_post_link( $msp_i->ID ); ?>" class="my-account-delete-profile-link">Delete</a>
					<a href="<?= $profile_url;?>?type=shirts&cat=men&redirect=<?= $redirect;?>&old_id=<?= $msp_i->ID;?>" class="my-account-delete-profile-link">Edit</a>
				</div>
			</div>
			<?php
		} ?>

		<div class="create-new-profile-link-container"><a href="<?= $profile_url;?>?type=shirts&cat=men&redirect=<?= $redirect;?>" class="create-new-profile-btn">+ CREATE A NEW PROFILE</a>
		</div>
	</div>

	<div id="jackets" class="pr-mm-product-types-tab-content" style="display:none">
		<h6>Saved jackets profiles</h5>

			<?php

			$men_shirts_profiles = get_posts(array('numberposts' => -1,'post_type'  => 'profiles', 'meta_key'   => 'type',
				'meta_value' => 'men_jackets',"author" => get_current_user_id()));
			foreach( $men_shirts_profiles as $msp_k => $msp_i )
			{
				?>
				<div class="my-account-single-profile-container">
					<div class="profile-link">
						<?php echo $msp_i->post_title; ?>
					</div>
					<div class="delete-profile-link-container">
						<a href="<?php echo get_delete_post_link( $msp_i->ID ); ?>" class="my-account-delete-profile-link">Delete</a>
						<a href="<?= $profile_url;?>?type=jackets&cat=men&redirect=<?= $redirect;?>&old_id=<?= $msp_i->ID;?>" class="my-account-delete-profile-link">Edit</a>
					</div>
				</div>
				<?php
			} ?>

			<div class="create-new-profile-link-container"><a href="<?= $profile_url;?>?type=jackets&cat=men&redirect=<?= $redirect;?>" class="create-new-profile-btn">+ CREATE A NEW PROFILE</a>

			</div>

		</div>

		<div id="pants" class="pr-mm-product-types-tab-content" style="display:none">
			<h6>Saved pants profiles</h5>

				<?php

				$men_shirts_profiles = get_posts(array('numberposts' => -1,'post_type'  => 'profiles', 'meta_key'   => 'type',
					'meta_value' => 'men_pants',"author" => get_current_user_id()));
				foreach( $men_shirts_profiles as $msp_k => $msp_i )
				{
					?>
					<div class="my-account-single-profile-container">
						<div class="profile-link">
							<?php echo $msp_i->post_title; ?>
						</div>
						<div class="delete-profile-link-container">
							<a href="<?php echo get_delete_post_link( $msp_i->ID ); ?>" class="my-account-delete-profile-link">Delete</a>
							<a href="<?= $profile_url;?>?type=pants&cat=men&redirect=<?= $redirect;?>&old_id=<?= $msp_i->ID;?>" class="my-account-delete-profile-link">Edit</a>
						</div>
					</div>
					<?php
				} ?>

				<div class="create-new-profile-link-container"><a href="<?= $profile_url;?>?type=pants&cat=men&redirect=<?= $redirect;?>" class="create-new-profile-btn">+ CREATE A NEW PROFILE</a>
				</div>

			</div>

			<div id="overshirts" class="pr-mm-product-types-tab-content" style="display:none">
				<h6>Saved overshirts profiles</h5>

					<?php

					$men_shirts_profiles = get_posts(array('numberposts' => -1,'post_type'  => 'profiles', 'meta_key'   => 'type',
						'meta_value' => 'men_overshirts',"author" => get_current_user_id()));
					foreach( $men_shirts_profiles as $msp_k => $msp_i )
					{
						?>
						<div class="my-account-single-profile-container">
							<div class="profile-link">
								<?php echo $msp_i->post_title; ?>
							</div>
							<div class="delete-profile-link-container">
								<a href="<?php echo get_delete_post_link( $msp_i->ID ); ?>" class="my-account-delete-profile-link">Delete</a>
								<a href="<?= $profile_url;?>?type=overshirts&cat=men&redirect=<?= $redirect;?>&old_id=<?= $msp_i->ID;?>" class="my-account-delete-profile-link">Edit</a>
							</div>
						</div>
						<?php
					} ?>

					<div class="create-new-profile-link-container"><a href="<?= $profile_url;?>?type=overshirts&cat=men&redirect=<?= $redirect;?>" class="create-new-profile-btn">+ CREATE A NEW PROFILE</a>
					</div>

				</div>

				<script>
					function openCity(productType) {
						var i;
						var x = document.getElementsByClassName("pr-mm-product-types-tab-content");
						for (i = 0; i < x.length; i++) {
							x[i].style.display = "none";
						}
						document.getElementById(productType).style.display = "block";
  // document.getElementsByClassName("pr-mm-product-types-tab").classList.remove("active-product-type-tab");
  document.getElementsByClassName(productType)[0].classList.add("active-product-type-tab");
}
</script>




<style>

ul.aw_measurements{

	display: block!important;

}

</style>