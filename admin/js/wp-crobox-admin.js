jQuery(document).ready(function($){
    $('.my-color-field').wpColorPicker();

    var $tabBoxes = $('.wp_cbf-metaboxes'),
		       $tabLinkActive,
		       $currentTab,
		       $currentTabLink,
		       $tabContent,
		       $hash,
               $showChild = $(".show-child-if-checked");

    $('.nav-tab-wrapper').on('click', 'a', function(e){
			e.preventDefault();
			$tabContent = $(this).attr('href');
			$('.nav-tab').removeClass('nav-tab-active');
			$tabBoxes.addClass('hidden');
			$currentTab = $($tabContent).toggleClass('hidden');
			$(this).addClass('nav-tab-active');
			 if(history.pushState) {
				history.pushState(null, null, $tabContent);
			}
			else {
				location.hash = $tabContent;
			}
		})

});
