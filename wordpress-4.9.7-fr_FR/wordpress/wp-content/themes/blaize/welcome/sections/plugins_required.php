<?php
	$plugins = array();
	$plugins = $this->plugins;
	
	foreach($plugins as $plugin) {

		$info = $this->call_plugin_api($plugin['slug']);
		$icon_url = $this->check_for_icon($info->icons);
		$status = $this->get_plugin_status($plugin);
		$btn_url = $this->generate_plugin_install_btn($status, $plugin);

		
		?>
		<div class="plugin-wrap">
			<figure class="plugin-image">
				<img src="<?php echo esc_url($icon_url); ?>" />
			</figure>
			
			<div class="plugin-meta">
				<span class="name"><?php echo esc_html($info->name); ?></span>	
				<span class="author"><?php echo wp_kses_post($info->author); ?></span>
			</div>

			<div class="btn-wrapper">
				<?php echo $btn_url; ?>
			</div>

		</div>
		<?php
		
	}