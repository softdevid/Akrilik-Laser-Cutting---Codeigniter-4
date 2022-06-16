if ((".button" = ".active")) {
  gsap.from(".card-hover1", {
    duration: 1,
    opacity: 0,
    y: -100,
  });

  gsap.from(".card-hover2", {
    duration: 1,
    opacity: 0,
    delay: 0.5,
    y: -100,
  });

  gsap.from(".card-hover3", {
    duration: 1,
    opacity: 0,
    delay: 1,
    y: -100,
  });
}
