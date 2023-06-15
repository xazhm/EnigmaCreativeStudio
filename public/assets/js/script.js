window.addEventListener("load", function () {
  var preLoaderLi = $(".preload li");
  var pageDiv = $(".page-transition .div");
  var loading = new TimelineMax({ paused: true });
  var slideUp = new TimelineMax({ paused: true });
  var loadAnimation = new TimelineMax();

  TweenMax.set(pageDiv, { bottom: "0%" });

  loading
    .staggerFrom(
      preLoaderLi,
      0.5,
      {
        y: -15,
        autoAlpha: 0,
        ease: Power1.easeIn,
      },
      0.2
    )
    .staggerTo(
      preLoaderLi,
      0.5,
      {
        y: 35,
        autoAlpha: 0,
        ease: Power1.easeIn,
      },
      0.1
    );

  slideUp.staggerTo(
    pageDiv,
    0.3,
    {
      bottom: "100%",
      ease: Power2.easeOut,
    },
    0.2
  );

  loadAnimation.add(loading.play()).add(slideUp.play());

  setTimeout(function () {
    $(".loading").fadeOut(500, function () {
      $(".main")
        .css({ display: "flex", opacity: 0 })
        .animate({ opacity: 1 }, 500)
        .slideDown(500);
    });
  }, 3000);
});
