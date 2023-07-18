const sr = ScrollReveal({
    distance: "35px",
    duration:2400,
    reset:true
});

sr.reveal('header nav div h3',{ delay:210, origin:'left'});
sr.reveal('header nav ul ,#btn-header',{delay:310, origin:'right'})
sr.reveal('.main_title h1',{delay:410, origin:'left'})
sr.reveal('.main_title .content h2',{delay:410, origin:'right'})
sr.reveal('.Frontend h2,',{delay:510, origin:'top'})