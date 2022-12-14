<?php $flats = get_field( 'flats' ); ?>

<?php if ( ! empty( $flats ) ): ?>
    <div class="section section-flats">
        <div class="section-flats__panel">
            <div class="section-flats__finder">
				<?php if (  ! empty( $flats['image'] ) ) : ?> 
                <div class="section-heading has-line">
                    <i class="line"
                       data-aos="fade-down"
                       data-aos-delay="400"
                       data-aos-duration="1000"
                       data-aos-easing="ease-in-sine"
                    ></i>
					    <?php if(! empty( $flats['title'] )) : ?>
                        <p class="title"><?php echo $flats['title']; ?></p>
						<?php endif; ?>
						<?php if ( ! is_page_template( 'archive-investment.php' ) ): ?>
							<?php if($flats['link_buttona']) { ?>
							    <a href="<?php echo $flats['link_buttona']; ?>" title="kliknij, aby przejść do tabeli" class="btn">
							<?php } else { ?>
								<a href="#flats-table" title="kliknij, aby przejść do tabeli" class="btn">
							<?php } ?>
								<?php if($flats['tresc_buttona']) { ?>
								<?php echo $flats['tresc_buttona'];?>
								<?php } else { ?>
								kliknij, aby przejść do tabeli
								<?php } ?>
							</a>
						<?php endif; ?>
					
                </div>
				<?php endif; ?>
            </div>
            <?php if($flats['image']) { ?>
            <img id="InvestmentMap" src="<?php echo wp_get_attachment_image_url( $flats['image'], 'full' ); ?>"  usemap="#image-map">
			<?php } ?>
               
            <?php if($flats['coordinates']) { ?>
            <map name="image-map">
				<?php
				foreach ( $flats['coordinates'] as $c ):

					$stroke_color = "";
					$fill_color = "";
					$fill_opacity = "";
					$status = "";
                if ( is_page_template( 'investment.php' ) ) {
					switch ( $c['status'] ) {
						case 0;
							$stroke_color = "005607";
							$fill_color   = "009b0c";
							$fill_opacity = "0.6";

							break;
						case 1;
							$stroke_color = "ff0000";
							$fill_color   = "ff0000";
							$fill_opacity = "0.4";
							break;
						case 2;
							$stroke_color = "d5d5d5";
							$fill_color   = "9a9a9a";
							$fill_opacity = "0.6";
							break;
					}
				} else {
						switch ( $c['status'] ) {
							case 0;
								$stroke_color = "ddbd7c";
								$fill_color   = "000000";
								$fill_opacity = "0.6";

								break;
							case 1;
								$stroke_color = "ff0000";
								$fill_color   = "ff0000";
								$fill_opacity = "0.4";
								break;
							case 2;
								$stroke_color = "d5d5d5";
								$fill_color   = "9a9a9a";
								$fill_opacity = "0.6";
								break;
						}

				}

					switch ( $c['status'] ) {
						case 0;
							$status = "W sprzedaży";
							break;
						case 1;
							$status = "Sprzedany";
							break;
						case 2;
							$status = "W przygotowaniu";
							break;
					}
					?>
                    <area
                            data-maphilight='{"strokeColor":"<?php echo $stroke_color; ?>","strokeWidth":1,"fillColor":"<?php echo $fill_color; ?>","fillOpacity":<?php echo $fill_opacity; ?>}'
						<?php if ( $c['status'] == '0' && $flats['type'] == "flats" ): ?>
                            href="<?php echo isset( $c['url'] ) ? $c['url'] : '#flats-table'; ?>"
						<?php endif; ?>
						<?php if ( $c['status'] == "0" && $flats['type'] == "home" ): ?>
                            href="#home-detail" data-fancybox
						<?php endif; ?>
                            coords="<?php echo $c['point']; ?>"
                            shape="poly"
                            data-floor="<?php echo $c['floor'] == "0" ? 'Parter' : $c['floor'] ?>"
                            data-status="<?php echo $status; ?>"
                    >
				<?php endforeach; ?>
            </map>
			<?php } ?>
            <div class="tooltip-content"></div>
        </div>
    </div>
<?php endif; ?>

<?php if ( $flats['type'] == "home" ): ?>
    <div id="home-detail" style="display:none;max-width:500px;">
xyz
    </div>
<?php endif; ?>
