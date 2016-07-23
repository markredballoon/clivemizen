<? $thumbnail = MultiPostThumbnails::get_the_post_thumbnail(get_post_type($post->ID), 'thumbnail-image', $post->ID); ?>
						<li class="post entry box">
							<div class="the-tags postCats">
								<?php the_category(' ')?>
							</div>							
							<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?= $thumbnail ?>
								<h5><?php the_title(); ?></h5>
								<? if( $post->post_excerpt ) {?>
								<?php the_excerpt(); ?>
								<? } else { }
								?>
								
							</a>							
						</li>