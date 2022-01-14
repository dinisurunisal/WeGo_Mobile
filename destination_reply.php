<style>
    <?php include_once("css/style.css"); include_once("jquery-theme/themes/theme.css");?>
	.form_button_container {
		display: grid;
    	grid-template-columns: auto auto;
		justify-content: space-between;
	}

	.cancel_btn {
		color: #0174cf !important;
	}

	.submit_btn {
		background-color: #0174cf !important;
		color: white !important;
	}

	#form_reply {
		height: 95px !important;
		background-color: #c4c4c4;
	}

	#form {
		width: 62vw;
	}
</style>

<!-- <script src="js/footer_script.js"></script> -->

<div data-role="popup" data-transition="pop" style="padding: 20px;" id="destination_reply" class="ui-content">
    <form id="form" onsubmit="event.preventDefault(); submitReply()">
<!--                    <label class="labelform grey heading-five" for="password"> Rating </label>-->

		<!-- <img src="images/fourStars.png" style="width: 70%; padding: 8px 0 8px 0;"> -->
		<textarea type="text" required name="reply" id="form_reply" class="formField" placeholder="Enter your reply here"></textarea>
		<div class="form_button_container">
			<a data-rel="back"><button class="cancel_btn">Cancel</button></a>
			<button type="submit" class="submit_btn" data-role="button">Submit</button>
		</div>
	</form>
</div> 