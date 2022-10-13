var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  fixedHeader();
};
function fixedHeader() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    $("#fixheader").addClass("main-header-fixed");
  } else {
    $("#fixheader").removeClass("main-header-fixed");
  }
}

function fixedHeader() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    $("#fixheader").addClass("main-header-fixed");
  } else {
    $("#fixheader").removeClass("main-header-fixed");
  }
}
