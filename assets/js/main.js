/**
 * Revy Riders JS
 */

jQuery(document).ready(function($) {
	// inject some style into the contact form submit button
	$('.wpcf7-submit').addClass('btn');
	$('.wpcf7-submit').addClass('btn-success');

	// inject button style for delete in BuddyPress Post
	$('.delete-activity').removeClass('button');
	$('.delete-activity').addClass('btn');
	$('.delete-activity').addClass('btn-danger');

});
