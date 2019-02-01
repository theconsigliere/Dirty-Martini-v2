function get_spotify() {
  jQuery.ajax({
    type: "POST",
    url: "./last.FM.php",
    data: { request: "true" },
    success: function(reply) {
      jQuery(".now-playing").html("<p>" + reply + "</p>");
    }
  });
}
window.onload = get_spotify;
