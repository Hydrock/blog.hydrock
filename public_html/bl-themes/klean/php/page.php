<!-- Page title and description
-->
<div class="bl-container-title text-center">
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
	<h1 class="title"><?php echo $Page->title() ?></h1>
	<p class="description"><?php echo $Page->description() ?></p>
</div>
</div>
</div>
</div>

<!-- Page content and author
-->
<div class="bl-container-main">
<div class="container">
<div class="row">
	<!-- Page content
	-->
	<div class="col-md-8 col-md-push-2">

		<!-- Load plugins
		- Hook: Page Begin
		-->
		<?php Theme::plugins('pageBegin') ?>

		<!-- Cover Image
		-->
		<?php
			if( $Page->coverImage() ) {
				echo '<div class="bl-cover-image">';
				echo '<img src="'.$Page->coverImage().'" alt="Cover Image">';
				echo '</div>';
			}
		?>

		<!-- Page content
		- The flag TRUE is to get the full content.
		- This content is Markdown parsed.
		-->
		<div class="bl-page-post-content">
			<?php echo $Page->content(true) ?>
		</div>

		<!-- Load plugins
		- Hook: Page End
		-->
		<?php Theme::plugins('pageEnd') ?>

	</div>
</div>
</div>
</div>