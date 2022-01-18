

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="css/style.css">

<script src="js/destination_filter_popup.js"></script>

<div data-role="popup" data-position-to="window" id="popup_destination_filter" class="popup-dimensions" >

    <h2 class="center-text" id="filter-heading-style-h1" style="padding-left: 200px; padding-right: 200px;">Filter</h2>

    <div data-role="navbar" class="toggle" >
                    <ul>
                        <li><a id="past-hunts-btn" href="#" class="toggle-buttons ui-btn-active"  onclick="sortToggle('ascending')">
                        Ascending
                        </a>
                         </li>
                        <li><a id="upcoming-hunts-btn" class="toggle-buttons" href="#"  onclick="sortToggle('descending')">
                        Descending
                         </a>
                        </li>
                    </ul>
    </div><!-- /navbar -->

    <form >
        <fieldset data-role="controlgroup" id="destination_filter_popup_checkbox_group-2" >
            
            <input type="radio" name="radio" id="radio-button-name">
            <label for="radio-button-name" class="checkbox-style">Name</label>

            <input type="radio" name="radio" id="radio-button-rating">
            <label for="radio-button-rating" class="checkbox-style">Rating</label>

            <input type="radio" name="radio" id="radio-button-priceRange">
            <label for="radio-button-priceRange" class="checkbox-style">Price Range</label>
        </fieldset>
    </form>

    <div class="popup_btn_container" style="display:flex; justify-content:space-evenly;">
			<button id="cancelBtn" onclick="closeFilterPopup();"  class="filter_button_popup" data-role="none">Cancel</button>
			<button id="filtersendBtn" type="submit" class="filter_button_popup" data-role="none" onclick="destinationFilterButton()">Update</button>
	</div>
</div>
