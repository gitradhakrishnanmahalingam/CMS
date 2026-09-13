(function () {
  var oldNavigation = document.querySelector('.top-nav');
  if (!oldNavigation) return;

  /* The old template places this full-page overlay above the navigation. */
  var legacyOverlay = document.querySelector('.tempOlverlay');
  if (legacyOverlay) legacyOverlay.parentNode.removeChild(legacyOverlay);

  oldNavigation.outerHTML =
    '<div class="notice"><a href="admission.html">Admissions open for 2026–2027 — arrange a school visit</a></div>' +
    '<header class="site-header"><div class="shell header-inner">' +
      '<a class="brand" href="index.html" aria-label="Castle Montessori School home"><img src="images/logo.png" alt="Castle Montessori School"></a>' +
      '<button class="nav-toggle" aria-expanded="false" aria-controls="site-navigation">Menu</button>' +
      '<nav class="site-nav" id="site-navigation">' +
        '<a href="about.html">Our approach</a><a href="programs.html">Programs</a><a href="benefits.html">Why Montessori</a><a href="faqs.html">FAQs</a><a href="contact.html">Contact</a><a class="nav-cta" href="admission.html">Admissions</a>' +
      '</nav>' +
    '</div></header>';

  var button = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.site-nav');
  button.addEventListener('click', function () {
    var open = nav.classList.toggle('open');
    button.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
}());
