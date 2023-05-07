
$(function() {
    $(".draggable").draggable({
        axis: "x",
      revert: "invalid",
      stop: function(event, ui) {
        // Find the current active carousel item
        var current = $(this).hasClass("active") ? $(this) : $(this).closest(".carousel-item.active");

        // Get the position of the mouse cursor and the position of the current item
        var cursorX = event.pageX;
        var itemX = current.offset().left;

        // Determine whether to slide to the next or previous item
        if (cursorX < itemX) {
          $(current).removeClass("active");
          $(current).next().addClass("active");
          if ($(current).next().length == 0) {
            $(".carousel-item").first().addClass("active");
          }
        } else {
          $(current).removeClass("active");
          $(current).prev().addClass("active");
          if ($(current).prev().length == 0) {
            $(".carousel-item").last().addClass("active");
          }
        }
        if (cursorX < itemX) {
            $(current).carousel("next");
          } else {
            $(current).carousel("prev");
          }
  
          // Update the active indicator
          var activeIndex = $(this).index();
          $(".carousel-indicators li").removeClass("active");
          $(".carousel-indicators li[data-bs-slide-to='" + activeIndex + "']").addClass("active");
      }
    });
  });
