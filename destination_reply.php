<style>
    <?php include_once("css/style.css"); include_once("jquery-theme/themes/theme.css");?>
</style>

<!-- <script src="js/footer_script.js"></script> -->

<div data-role="popup" data-transition="pop" style="padding: 20px;" id="destination_reply" class="ui-content">
    <form id="form" onsubmit="event.preventDefault(); submitReply()">
        <h2>How was your experience?</h2>
        <p2>Let us know what you think</p2>
<!--                    <label class="labelform grey heading-five" for="password"> Rating </label>-->

		<!-- <img src="images/fourStars.png" style="width: 70%; padding: 8px 0 8px 0;"> -->
		<textarea type="text" required name="comment" id="form_comment" class="formField" placeholder="Enter your comment here"></textarea>
		<div class="form_button_container">
			<a data-rel="back"><button class="cancel_btn">Cancel</button></a>
			<button type="submit" class="submit_btn" data-role="button">Submit</button>
		</div>
	</form>
</div> 