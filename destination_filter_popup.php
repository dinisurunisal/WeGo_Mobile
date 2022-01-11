
<link rel="stylesheet" href="css/destination_filter_popup.css">

<script src="js/destination_filter_popup.js"></script>

<div data-role="popup" data-position-to="window" id="popup_destination_filter" class="popup-dimensions">

<h2 class="center-text" id="filter-heading-style-h1">Filter</h2>

    <div data-role="navbar" class="toggle">
                    <ul>
                        <li><a id="past-hunts-btn" href="#" class="toggle-buttons ui-btn-active" onclick="selectPastHunts()">Assending</a></li>
                        <li><a id="upcoming-hunts-btn" class="toggle-buttons" href="#" onclick="selectUpcomingHunts()">Desending</a></li>
                    </ul>
    </div><!-- /navbar -->

    <form>
        <fieldset data-role="controlgroup" id="browse_kitchen_filter_popup_checkbox_group-2">
            
            <input type="checkbox" name="browse-kitchen-filter-popup-vegetarian" id="browse-kitchen-filter-popup-vegetarian">
            <label for="browse-kitchen-filter-popup-vegetarian" class="checkbox-style">Name</label>

            <input type="checkbox" name="browse-kitchen-filter-popup-gluten-free" id="browse-kitchen-filter-popup-gluten-free">
            <label for="browse-kitchen-filter-popup-gluten-free" class="checkbox-style">Rating</label>

            <input type="checkbox" name="browse-kitchen-filter-popup-vegan" id="browse-kitchen-filter-popup-vegan">
            <label for="browse-kitchen-filter-popup-vegan" class="checkbox-style">Price Range</label>
        </fieldset>
    </form>

    <div class="popup_btn_container" style="display:flex; justify-content:space-evenly;">
						<button id="cancelBtn" onclick="closeFeedbackPopup();"  class="button_popup" data-role="none">Cancel</button>
						<button id="sendBtn" type="submit" class="button_popup" data-role="none">Send</button>
	</div>
</div>
