<!-- Post title and description
-->
<div class="bl-container-title text-center">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
	<h1 class="title"><?php echo $Post->title() ?></h1>
	<p class="description"><?php echo $Post->description() ?></p>
</div>
</div>
</div>
</div>

<!-- Post content and author
-->
<div class="bl-container-main">
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-push-2">

		<!-- Load plugins
		- Hook: Post Begin
		-->
		<?php Theme::plugins('pageBegin') ?>

		<!-- Cover Image
		-->
		<?php
			if( $Post->coverImage() ) {
				echo '<div class="bl-cover-image">';
				echo '<img src="'.$Post->coverImage().'" alt="Cover Image">';
				echo '</div>';
			}
		?>

		<!-- Post content
		- The flag TRUE is to get the full content.
		- This content is Markdown parsed.
		-->
		<div class="bl-page-post-content">
			<?php echo $Post->content(true) ?>
		</div>

		<!-- Load plugins
		- Hook: Post End
		-->
		<?php Theme::plugins('pageEnd') ?>

	</div>
</div>
</div>
</div>