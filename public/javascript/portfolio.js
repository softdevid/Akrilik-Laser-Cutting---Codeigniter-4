const tl = new TimelineMax();

$(".nav-pills li").on("click", function () {
  const $label = $(".label");
  const $this = $(this);
  const el_width = $this.width();
  const offset_left = $this.offset();
  const initTabNum = $this.data("menu");
  const $article = $(".article");
  const $show = $(".show");
  function step_1() {
    $article.removeClass("show");
  }
  function step_2() {
    $(".num_" + initTabNum).addClass("show");
  }

  if (!tl.isActive()) {
    tl.to($article, 0.05, {
      y: 100,
      ease: Back.easeOut,
      onComplete: step_1,
    }).fromTo(
      $(".num_" + initTabNum),
      0.75,
      {
        onStart: step_2,
        y: -100,
      },
      { y: 0, ease: Power4.easeOut, immediateRender: false }
    );

    $label.offset({ left: offset_left.left }).css("width", el_width);

    $(".tabs-block li").removeClass("active");

    $this.addClass("active");
  }
});

const initSize = function () {
  const start_element = $(".tabs-block li:first-of-type");
  const $label = $(".label");
  const initWidth = start_element.css("width");
  $label.css("width", initWidth);
};
initSize();

// gsap.from(".card-hover1", {
//   duration: 1,
//   opacity: 0,
//   y: -100,
// });

// gsap.from(".card-hover2", {
//   duration: 1,
//   opacity: 0,
//   delay: 0.5,
//   y: -100,
// });

// gsap.from(".card-hover3", {
//   duration: 1,
//   opacity: 0,
//   delay: 1,
//   y: -100,
// });
