$(document).ready(function(){
    $('.lead-page').click(function( event ) {
      localStorage.setItem("lead_back_url",$(this).attr('href'));
    });
});

/* Dore Theme Select & Initializer Script 

Table of Contents

01. Css Loading Util
02. Theme Selector And Initializer
*/

/* 01. Css Loading Util */

var orignal_url;

function loadStyle(href, callback) {
  for (var i = 0; i < document.styleSheets.length; i++) {
    if (document.styleSheets[i].href == href) {
      return;
    }
  }
  var head = document.getElementsByTagName("head")[0];
  var link = document.createElement("link");
  link.rel = "stylesheet";
  link.type = "text/css";
  link.href = href;
  if (callback) {
    link.onload = function() {
      // callback();
    };
  }
  
  //head.appendChild(link);
}

/* 02. Theme Selector And Initializer */
(function($) {
  if ($().dropzone) {
    Dropzone.autoDiscover = false;
  }
  var themeColorsDom =
    '<div class="theme-colors"> <div class="p-4"> <p class="text-muted mb-2">Light Theme</p> <div class="d-flex flex-row justify-content-between mb-4"> <a href="#" data-theme="dore.light.blue.min.css" class="theme-color theme-color-blue"></a> <a href="#" data-theme="dore.light.purple.min.css" class="theme-color theme-color-purple"></a> <a href="#" data-theme="dore.light.green.min.css" class="theme-color theme-color-green"></a> <a href="#" data-theme="dore.light.orange.min.css" class="theme-color theme-color-orange"></a> <a href="#" data-theme="dore.light.red.min.css" class="theme-color theme-color-red"></a> </div> <p class="text-muted mb-2">Dark Theme</p> <div class="d-flex flex-row justify-content-between"> <a href="#" data-theme="dore.dark.blue.min.css" class="theme-color theme-color-blue"></a> <a href="#" data-theme="dore.dark.purple.min.css" class="theme-color theme-color-purple"></a> <a href="#" data-theme="dore.dark.green.min.css" class="theme-color theme-color-green"></a> <a href="#" data-theme="dore.dark.orange.min.css" class="theme-color theme-color-orange"></a> <a href="#" data-theme="dore.dark.red.min.css" class="theme-color theme-color-red"></a> </div> </div> <a href="#" class="theme-button"> <i class="simple-icon-magic-wand"></i> </a> </div>';
  // Hide theme selection fly-out button
  //$("body").append(themeColorsDom);
  var theme = "dore.light.blue.min.css";

  $(".theme-color[data-theme='" + theme + "']").addClass("active");

  loadStyle("assets/css/" + theme, $("body").dore());

  $("body").on("click", ".theme-color", function(event) {
    event.preventDefault();
    var dataTheme = $(this).data("theme");
    if (typeof Storage !== "undefined") {
      localStorage.setItem("theme", dataTheme);
      window.location.reload();
    }
  });

  $(".theme-button").on("click", function(event) {
    event.preventDefault();
    $(this)
      .parents(".theme-colors")
      .toggleClass("shown");
  });

  $(document).on("click", function(event) {
    if (
      !(
        $(event.target)
          .parents()
          .hasClass("theme-colors") ||
        $(event.target)
          .parents()
          .hasClass("theme-button") ||
        $(event.target).hasClass("theme-button") ||
        $(event.target).hasClass("theme-colors")
      )
    ) {
      if ($(".theme-colors").hasClass("shown")) {
        $(".theme-colors").removeClass("shown");
      }
    }
  });
})(jQuery);

/* 03. Pop-up Notifcation */
function imperialNotify(title, message, placementFrom, placementAlign, type) {
  $.notify(
    {
      title: "<b>"+title+"</b>",
      message: message,
      target: "_blank"
    },
    {
      element: "body",
      position: null,
      type: type,
      allow_dismiss: true,
      newest_on_top: false,
      showProgressbar: false,
      placement: {
        from: placementFrom,
        align: placementAlign
      },
      offset: 20,
      spacing: 10,
      z_index: 1031,
      delay: 1500,
      timer: 2000,
      url_target: "_blank",
      mouse_over: null,
      animate: {
        enter: "animated fadeInDown",
        exit: "animated fadeOutUp"
      },
      onShow: null,
      onShown: null,
      onClose: null,
      onClosed: null,
      icon_type: "class",
      template:
        '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
        '<span data-notify="icon"></span> ' +
        '<span data-notify="title">{1}</span> ' +
        '<span data-notify="message">{2}</span>' +
        '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
        "</div>" +
        '<a href="{3}" target="{4}" data-notify="url"></a>' +
        "</div>"
    }
  );
}