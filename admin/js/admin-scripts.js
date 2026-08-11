(($) => {
  "use strict";

  const { ajaxURL, welcomeNonce, redirectURL } = ajaxObj;

  /* Welcome notice script */
  $("#saaslauncher-welcome-notice").on("click", ".notice-dismiss", function () {
    $.ajax({
      url: ajaxURL,
      method: "POST",
      data: {
        action: "saaslauncher_dismissble_notice",
        nonce: welcomeNonce,
      },
      success: function (response) {
        if (response.success) {
          console.log("Notice dismissed successfully.");
          $("#saaslauncher-welcome-notice").fadeOut(); // Hide the notice
        } else {
          console.log("Failed to dismiss notice!");
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.log("Error:", textStatus, errorThrown);
      },
    });
  });

  /* Plugin Installation */
  // Cozy Blocks installation
  $("#cozy-addons-install").click(function () {
    const $this = $(this);
    const $spinner = $this.find("#saaslauncher-admin-spinner");

    $spinner.removeClass("saaslauncher-display-none");
    $this.addClass("saaslauncher-disabled");

    $.post(
      ajaxURL,
      {
        action: "saaslauncher_install_and_activate_plugins",
        plugins: JSON.stringify(["cozy-addons"]),
        nonce: welcomeNonce,
      },
      function (response) {
        // alert(response);
        var checkJSON = /{.*}/; // Regular expression to match the JSON portion
        var match = checkJSON.exec(response);
        console.log(response);

        if (match) {
          var jsonResponse = match[0]; // Extracted JSON portion
          try {
            var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

            if (responseObj.success === true) {
              // window.location.href = response.data.redirect_url;
              console.log("Plugin installed");
            } else {
              console.log("Error!");
            }
          } catch (error) {
            console.log("Error parsing JSON!");
          }
        }
        console.log(window.location.href);

        window.location.href = redirectURL;

        $spinner.addClass("saaslauncher-display-none");
        $this.removeClass("saaslauncher-disabled");
      },
    );
  });
})(jQuery);
