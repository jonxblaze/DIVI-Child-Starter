jQuery(function ($) {
  
  // Collapsed mobile menu 
  function ds_setup_collapsible_submenus() {
    var mainMenu = $('#mobile_menu1'),
        top_level_link = '#mobile_menu1 .menu-item-has-children > a';

    mainMenu.find('a').each(function() {
        $(this).off('click');

        if ($(this).is(top_level_link)) {
            $(this).attr('href', '#');
        }

        if (!$(this).siblings('.sub-menu').length) {
            $(this).on('click', function(event) {
                $(this).parents('.mobile_nav').trigger('click');
            });
        } else {
            $(this).on('click', function(event) {
                event.preventDefault();
                $(this).parent().toggleClass('visible').siblings('li').removeClass('visible');
            });
        }
    });
}

$(window).load(function() {
    setTimeout(function() {
        ds_setup_collapsible_submenus();
    }, 700);
});

  

  

}); 

// Partners modal popup
function showModal(param){
  const link = document.getElementById(param);

  // Trigger a click on the anchor element
  link.click();
}
