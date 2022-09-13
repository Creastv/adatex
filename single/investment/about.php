<?php $investment = get_field( 'investments' ); ?>

<?php if ( ! empty( $investment ) ): ?>
    <div class="section section-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="section-about__finder">
                        <div class="section-heading">
                            <p class="title"><?php echo $investment['panelTitle']; ?></p>
                        </div>
						<?php if ( ! empty( $investment['panelAttributes'] ) ): ?>
                            <div class="section-about__attributes">
								<?php foreach ( $investment['panelAttributes'] as $attribute ): ?>
                                    <div>
                                        <div class="icon">
											<?php echo wp_get_attachment_image( $attribute['icon'], 'full' ); ?>
                                        </div>
                                        <div class="values">
                                            <p class="value"><?php echo $attribute['value']; ?></p>
                                            <p class="name"><?php echo $attribute['name']; ?></p>
                                        </div>
                                    </div>
								<?php endforeach; ?>
                            </div>
						<?php endif; ?>
                        <div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="section-about__content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="section-about__description">
                                    <p class="title"><?php echo $investment['contentTitle']; ?></p>
									<?php echo $investment['contentDescription']; ?>
                                    <div class="section-about__description-benefits">
										<?php foreach ( $investment['contentAttributes'] as $attribute ): ?>
                                            <div>
												<?php echo wp_get_attachment_image( $attribute['icon'], 'full' ); ?>
                                                <span><?php echo $attribute['name']; ?></span>
                                            </div>
										<?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="section-about__extended">
									<?php echo $investment['contentExtended']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>