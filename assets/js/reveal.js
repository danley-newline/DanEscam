const sr = ScrollReveal({
    reset: true,
});

sr.reveal('.header-home',{
    duration: 2000,
    scale: 0.8,
    reset: false
});

sr.reveal('.carousel',{
    duration: 2000,
    scale: 0.8
});

sr.reveal('.head h1',{
    duration: 4000,
    scale: 0.5
});
sr.reveal('.head .first h2',{
    duration: 5000,
    scale: 0.4,
    delay: 500
});

sr.reveal('.cursurs-home h1',{
    origin : 'left',
    delay  : 200,
  distance : '120px',
  easing   : 'ease-in-out',
});

sr.reveal('.diplome.one',{
    duration: 2000,
    scale: 0.4,
    delay: 500,
    easing: 'ease-in-out',
    reset: false
});
sr.reveal('.diplome.two',{
    duration: 2000,
    scale: 0.4,
    delay: 1000,
    easing: 'ease-in-out',
    reset: false
});
sr.reveal('.diplome.three',{
    duration: 2000,
    scale: 0.4,
    delay: 2000,
    easing: 'ease-in-out',
    reset: false
});
sr.reveal('.diplome.four',{
    duration: 2000,
    scale: 0.4,
    delay: 3000,
    easing: 'ease-in-out',
    reset: false
});
sr.reveal('.diplome.five',{
    duration: 2000,
    scale: 0.4,
    delay: 4000,
    easing: 'ease-in-out',
    reset: false
});
sr.reveal('.diplome.six',{
    duration: 2000,
    scale: 0.4,
    delay: 5000,
    easing: 'ease-in-out',
    reset: false
});

sr.reveal('.accueil .info',{
    duration: 2000,
    scale: 0.8,
    delay: 1000,
    origin: 'right',
    distance: '10%',
    easing: 'ease-in-out',

});


/**ECOLE Apropos */
sr.reveal('.header-home h2',{
    delay: 1000,
    duration: 2000,
    scale: 0.4,
    origin: 'top',
    distance: '100px',
    reset: false
});

sr.reveal('.fondateur h1, .fondateur h2, .fondateur img',{
  distance : '120px',
  easing   : 'ease-in-out',
});

sr.reveal('.fondateur h1',{
    origin : 'bottom',
    delay  : 1500,
});
sr.reveal('.fondateur img',{
    origin : 'bottom',
    delay  : 1000,
});

sr.reveal('.text-fondateur, .present-escam',{
    duration: 3000,
    delay  : 1000,
    distance: '10%',
    reset:false,
    origin : 'bottom',
});


sr.reveal('.certif h1',{
    duration: 1000,
    delay  : 3000,
    distance: '20%',
    origin : 'right',
    reset:false
});


sr.reveal('.homologue',{
    duration: 3000,
    scale: 0.5,
    delay  : 2000,
    origin: 'top',
    distance:'50px',
    reset:false
    
});

(function blink() {
    $('.blink_me').fadeOut(700).fadeIn(700, blink);
  })();