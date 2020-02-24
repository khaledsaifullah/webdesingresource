$(document).ready(function(){
    initUI();

});

function initUI() {
    initSelectDropDown();
}

function initSelectDropDown(){
    // Custom Drop Down
    $('.custom-dropdown').chosen({
        width: 'auto',
        disable_search_threshold: 5
    });
}



