<?php

foreach($posts as $Post) {
	echo '<div class="bl-list">';
	echo '<div class="container">';
	echo '<div class="row">';
	echo '<div class="col-md-12 text-center">';

	echo '<h1><a href="'.$Post->permalink().'">'.$Post->title().'</a></h1>';
	echo '<h4>Posted on '.$Post->date().'</h4>';

	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
}

?>