window.onload = ()=>{

// Burger menu
(function () {
    function toggleNav() {
      // Define targets
      var target = document.querySelector(".main");
      var button = document.querySelector(".burger-button");
      var navigation = document.querySelector(".navigation");
  
      // click-touch event
      if (button) {
        button.addEventListener(
          "click",
          function (e) {
            navigation.classList.toggle("is-opened");
            navigation.focus();
            e.preventDefault();
          },
          false
        );
      }
    } // end toggleNav()
  
    toggleNav();
  })();

var scrollToTopBtn = document.querySelector(".scrollToTopBtn")
var rootElement = document.documentElement

function handleScroll() {
  // Do something on scroll - 0.15 is the percentage the page has to scroll before the button appears
  // This can be changed - experiment
  var scrollTotal = rootElement.scrollHeight - rootElement.clientHeight
  if ((rootElement.scrollTop / scrollTotal ) > 0.15) {
    // Show button
    scrollToTopBtn.classList.add("showBtn")
  } else {
    // Hide button
    scrollToTopBtn.classList.remove("showBtn")
  }
}

function scrollToTop() {
  // Scroll to top logic
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth"
  })
}
scrollToTopBtn.addEventListener("click", scrollToTop)
document.addEventListener("scroll", handleScroll)

}




