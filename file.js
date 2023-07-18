const sr = ScrollReveal({
    distance: "35px",
    duration:1000,
    reset:true
});

sr.reveal('header nav div h3',{ delay:210, origin:'left'});
sr.reveal('.main_title h1',{delay:410, origin:'left'})
sr.reveal('.main_title .content h2',{delay:410, origin:'right'})

sr.reveal('.Frontend h2',{delay:510, origin:'top'})
sr.reveal('.r1',{delay:610, origin:'bottom'})
sr.reveal('.r2',{delay:710, origin:'bottom'})
sr.reveal('.r3',{delay:810, origin:'bottom'})
sr.reveal('.r4',{delay:910, origin:'bottom'})

//----------- A propos --------------
sr.reveal('.about',{delay:110, origin:'bottom'})
sr.reveal('.apropos header p',{delay:110, origin:'left'})
sr.reveal('.apropos .container p',{delay:110, origin:'right'})

//------------ contact ---------------
sr.reveal('.votreprojet',{delay:110, origin:'bottom'})
