<style>
    <?php
    include_once("css/mb_styles_set_1.css");
    include_once("css/browse_kitchen_filter_popup_styles.css");
    ?>
</style>

<script src="js/destination_filter_popup.js"></script>

<div data-role="popup" data-position-to="window" id="popup_destination_filter" class="popup-dimensions">
    <div class="close-image">
        <a data-rel="back">
            <img src="images/icons/filterIcon.png" alt="Close icon" id="browse-kitchen-filter-popup-close-icon" />
        </a>
    </div>
    <h2 class="center-text" id="filter-heading-style-h1">Filter</h2>

    <div class="ui-grid-a">
        <div class="ui-block-a custom-responsive-grid-style">
            <form>
                <fieldset data-role="controlgroup" data-type="horizontal" id="browse_kitchen_filter_popup_checkbox_group-1">
                    <legend class="custom-heading-style">Ratings</legend>

                    <!-- Star 1 -->
                    <input type="checkbox" name="browse-kitchen-filter-popup-checkbox-star-1" id="browse-kitchen-filter-popup-checkbox-star-1" onclick="browseKitchenFilterPopupLabelStarFunction1()" checked="true">
                    <label for="browse-kitchen-filter-popup-checkbox-star-1" id="browse-kitchen-filter-popup-label-star-1">
                        <img src="images/icons/filterIcon.png" alt="Star icon" class="star-icon-size" id="browse-kitchen-filter-popup-img-star-1" />
                    </label>

                    <!-- Star 2 -->
                    <input type="checkbox" name="browse-kitchen-filter-popup-checkbox-star-2" id="browse-kitchen-filter-popup-checkbox-star-2" onclick="browseKitchenFilterPopupLabelStarFunction2()">
                    <label for="browse-kitchen-filter-popup-checkbox-star-2" id="browse-kitchen-filter-popup-label-star-2">
                        <img src="images/icons/filterIcon.png" alt="Star icon" class="star-icon-size" id="browse-kitchen-filter-popup-img-star-1" />
                    </label>

                    <!-- Star 3 -->
                    <input type="checkbox" name="browse-kitchen-filter-popup-checkbox-star-3" id="browse-kitchen-filter-popup-checkbox-star-3" onclick="browseKitchenFilterPopupLabelStarFunction3()">
                    <label for="browse-kitchen-filter-popup-checkbox-star-3" id="browse-kitchen-filter-popup-label-star-3">
                        <img src="images/icons/filterIcon.png" alt="Star icon" class="star-icon-size" id="browse-kitchen-filter-popup-img-star-1" />
                    </label>

                    <!-- Star 4 -->
                    <input type="checkbox" name="browse-kitchen-filter-popup-checkbox-star-4" id="browse-kitchen-filter-popup-checkbox-star-4" onclick="browseKitchenFilterPopupLabelStarFunction4()">
                    <label for="browse-kitchen-filter-popup-checkbox-star-4" id="browse-kitchen-filter-popup-label-star-4">
                        <img src="images/icons/filterIcon.png" alt="Star icon" class="star-icon-size" id="browse-kitchen-filter-popup-img-star-1" />
                    </label>

                    <!-- Star 5 -->
                    <input type="checkbox" name="browse-kitchen-filter-popup-checkbox-star-5" id="browse-kitchen-filter-popup-checkbox-star-5" onclick="browseKitchenFilterPopupLabelStarFunction5()">
                    <label for="browse-kitchen-filter-popup-checkbox-star-5" id="browse-kitchen-filter-popup-label-star-5">
                        <img src="images/icons/filterIcon.png" alt="Star icon" class="star-icon-size" id="browse-kitchen-filter-popup-img-star-1" />
                    </label>
                </fieldset>
            </form>
        </div>

        <div class="ui-block-b custom-responsive-grid-style">
            <form>
                <fieldset data-role="controlgroup" data-type="horizontal" id="browse-kitchen-filter-popup-label-dollar-all">
                    <legend class="custom-heading-style">Price Range</legend>

                    <input type="radio" name="radio-dollar" id="radio-dollar-1" onclick="browseKitchenFilterPopupLabelDollarFunction1()">
                    <label for="radio-dollar-1">
                        <img src="images/icons/filterIcon.png" alt="1 dollar sign" class="dollar-icon-size" />
                    </label>

                    <input type="radio" name="radio-dollar" id="radio-dollar-2" onclick="browseKitchenFilterPopupLabelDollarFunction2()">
                    <label for="radio-dollar-2">
                        <img src="images/icons/filterIcon.png" alt="2 dollar signs" class="dollar-icon-size" />
                    </label>

                    <input type="radio" name="radio-dollar" id="radio-dollar-3" onclick="browseKitchenFilterPopupLabelDollarFunction3()" checked="checked">
                    <label for="radio-dollar-3">
                        <img src="images/icons/filterIcon.png" alt="3 dollar signs" class="dollar-icon-size" />
                    </label>
                </fieldset>
            </form>
        </div>
    </div>

    <form>
        <fieldset data-role="controlgroup" id="browse_kitchen_filter_popup_checkbox_group-2">
            <legend class="custom-heading-style">Dietary Restriction</legend>

            <input type="checkbox" name="browse-kitchen-filter-popup-vegetarian" id="browse-kitchen-filter-popup-vegetarian">
            <label for="browse-kitchen-filter-popup-vegetarian" class="checkbox-style">Vegetarian</label>

            <input type="checkbox" name="browse-kitchen-filter-popup-gluten-free" id="browse-kitchen-filter-popup-gluten-free">
            <label for="browse-kitchen-filter-popup-gluten-free" class="checkbox-style">Gluten-Free</label>

            <input type="checkbox" name="browse-kitchen-filter-popup-vegan" id="browse-kitchen-filter-popup-vegan">
            <label for="browse-kitchen-filter-popup-vegan" class="checkbox-style">Vegan</label>
        </fieldset>
    </form>

    <div class="center-item">
        <button class="ui-btn custom-update-btn mb-style-set-1-button" id="browse_kitchen_filter_popup-update-button" onclick="browseKitchenFilterPopupUpdateButtonFunction()">
            Update
        </button>
    </div>
</div>
