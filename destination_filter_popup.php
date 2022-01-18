

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <link rel="stylesheet" href="css/style.css"> -->

<script src="js/destination_filter_popup.js"></script>

<style>
    ::placeholder {
        color: #a7a7a7;
    }

    #destination_filter_popup_checkbox_group-2 .ui-checkbox-on:after {
        background-color: #0174cf !important;
    }

    #filter-heading-style-h1 {
        font-size: 1.3em;
    }

    .ui-page-theme-a .ui-checkbox-on:after {
        background-color: #0174cf;
    }

    .ui-popup-screen {
        background-color: #000000 !important;
        opacity: 0.75 !important;
    }

    .ui-controlgroup-controls .ui-btn-corner-all, .ui-controlgroup-controls .ui-btn.ui-corner-all {
        background-color: #ffffff;
    }

    .custom-heading-style {
        color: #757575;
        padding-top: 7px;
    }

    .custom-ui-block-small {
        min-width: 46%;
        max-width: 46%;
    }

    .custom-ui-block-large {
        min-width: 54%;
        max-width: 54%;
    }

    .text-input-padding-a {
        padding-right: 10px;
    }

    .text-input-padding-b {
        padding-left: 10px;
    }

    .text-input-style {
        background-color: #eeeeee !important;
    }

    .center-text {
        text-align: center;
        margin-top: 14px !important;
        padding-left: 17px;
    }

    .checkbox-style {
        color: #757575 !important;
        font-weight: normal !important;
    }

    .popup-dimensions {
        margin-top: 20px;
        border-radius: 15px;
        padding-top: 5px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
        overflow: hidden;
    }

    .center-item-custom {
        text-align: center;
    }

    .custom-responsive-grid-style {
        min-width: 210px;
    }

    .filter_button_popup{
        height:30px;
        width:100px;
        border: none;
        border-radius:12px;
    }

    #filtersendBtn{
        color:white;
        background-color: #0174cf;
    }

    #cancelBtn{
        color:#0174cf;
        background-color: white;
    }
</style>

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
