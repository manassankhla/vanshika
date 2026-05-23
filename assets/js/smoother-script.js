
$(function () {

  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

  ScrollTrigger.normalizeScroll(false);

  // Create the smooth scroller FIRST
  let smoother = ScrollSmoother.create({
    smooth: 2,
    effects: false,
    ignoreMobileResize: true,
  });

  // Fix: After ScrollSmoother sets the height on #smooth-content,
  // measure the real bottom of the last actual content element (footer-bottom)
  // and clamp #smooth-content height to that value.
  function fixSmoothContentHeight() {
    var content = document.getElementById('smooth-content');
    var footerBottom = document.querySelector('.footer-bottom');
    if (!content || !footerBottom) return;

    // Get the true bottom of the footer (relative to document top)
    var rect = footerBottom.getBoundingClientRect();
    var trueHeight = rect.bottom + (window.scrollY || window.pageYOffset || document.documentElement.scrollTop);

    // Only shrink if ScrollSmoother inflated it
    var currentHeight = parseFloat(content.style.height) || content.offsetHeight;
    if (currentHeight > trueHeight + 5) {
      content.style.height = trueHeight + 'px';
    }
  }

  // Run after initial setup
  ScrollTrigger.addEventListener('refresh', function () {
    setTimeout(fixSmoothContentHeight, 50);
  });

  // Also run on window load when all images/fonts are fully loaded
  window.addEventListener('load', function () {
    setTimeout(function () {
      ScrollTrigger.refresh();
      setTimeout(fixSmoothContentHeight, 100);
    }, 300);
  });

});