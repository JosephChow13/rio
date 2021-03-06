var Twig = require("twig");
    require("jquery.marquee");
    require("jquery");
    require('./vendor/jquery.inview');
    require("slick");

global.app = {
    initQtReady: require("./qt_ready"),
    startHomePreview: require("./home_preview"),
    startStoryPreview: require("./story_preview"),
    loadMoreStories: require("./load_more"),
    subSectionStories: require("./sub_section_stories"),
    analytics: require("./analytics.js"),
    videos: require("./videos.js"),
    infiniteScroll: require("./infinite-scroll"),
    slickSlider: require("./photo-story-slider"),
    getTableElement: require("./table-element")
};


require("./responsiveslides.min");

$(document).ready(function(){
  global.app.slickSlider.photoStory();
  global.app.slickSlider.imageGallery();

  $(".js-menu").click(function(event){
   event.stopPropagation();
    $(".menuitems").slideToggle("slow");
    if($(window).width()>800){
      $(".web-menu-items").offset({left:$(".desktop-menu__all-text.js-menu").position().left});
    }
  });

  $(".js-sub-menu-toggle").click(function() {
    $(this).toggleClass( 'menu__item__dropdown-toggle--open');
    $(this).next('.sub-menu').toggleClass('sub-menu--open');
  });

  $('#search_init,#search_init1').click(function (event) {
    event.stopPropagation();
    $(".nav-search").toggle();
  });

  $('.snapshot-header').click( function(event){
    var target;
    target = $(event.target).closest(".snapshot-header");
    $(target).siblings( ".snapshot-text" ).toggleClass("hide");
    $(event.target).siblings( ".snapshot-icon" ).toggleClass("hide");
  });

  $('.js-breakingnews-marquee').marquee({
      duration: 19000,
      startVisible: true,
      duplicated: true,
      pauseOnHover: true
  });

  $( '.story-element-text a[href^="http://"] ' ).attr( 'target','_blank' );
  $( '.story-element-text a[href^="https://"] ' ).attr( 'target','_blank' );

  $('.js-table-element').each(function() {
    var $element = $(this);
    global.app.getTableElement($element);
  })

});
