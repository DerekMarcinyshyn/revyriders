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

	// inject button class in bbPress
	$('#bbp_search_submit').removeClass('button');
	$('#bbp_search_submit').addClass('btn');
	$('#bbp_search_submit').addClass('btn-success');

	$('#bbp_topic_submit').removeClass('button');
	$('#bbp_topic_submit').addClass('btn');
	$('#bbp_topic_submit').addClass('btn-success');

	$('#bbp_reply_submit').removeClass('button');
	$('#bbp_reply_submit').addClass('btn');
	$('#bbp_reply_submit').addClass('btn-success');

});
