<style>
    <?php include_once("css/style.css"); include_once("jquery-theme/themes/theme.css");?>
</style>

<div data-role="popup" data-transition="pop" style="padding: 20px;" id="my_hunts_feedback" class="ui-content">
    <form id="form" onsubmit="event.preventDefault(); submitFeedback()">
        <h2>How was your experience?</h2>
        <p2>Let us know what you think</p2>

		<div id="star_rating_holder">
			<i id="star_rating_one" class="material-icons" style="font-size: 40px; color:red">star_border</i>
			<i id="star_rating_two" class="material-icons" style="font-size: 40px; color:red">star_border</i>
			<i id="star_rating_three" class="material-icons" style="font-size: 40px; color:red">star_border</i>
			<i id="star_rating_four" class="material-icons" style="font-size: 40px; color:red">star_border</i>
			<i id="star_rating_five" class="material-icons" style="font-size: 40px; color:red">star_border</i>
		</div>

		<textarea type="text" required name="comment" id="form_comment" class="formField" placeholder="Enter your comment here"></textarea>
		<div class="form_button_container">
			<a data-rel="back"><button class="cancel_btn">Cancel</button></a>
			<button type="submit" class="submit_btn" data-role="button">Submit</button>
		</div>
	</form>
</div> 