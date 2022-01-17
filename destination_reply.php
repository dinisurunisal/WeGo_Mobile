<style>
    <?php include_once("css/style.css"); include_once("jquery-theme/themes/theme.css");?>
</style>

<div data-role="popup" data-transition="pop" style="padding: 20px;" id="destination_reply" class="ui-content">
    <form id="form" onsubmit="event.preventDefault(); submitReply()">
		<textarea type="text" required name="reply" id="form_reply" class="formField" placeholder="Enter your reply here"></textarea>
		<div class="form_button_container">
			<a data-rel="back"><button class="cancel_btn">Cancel</button></a>
			<button type="submit" class="submit_btn" data-role="button">Submit</button>
		</div>
	</form>
</div> 