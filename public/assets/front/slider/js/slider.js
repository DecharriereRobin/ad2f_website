$(function () // Open DOM
    {
 
//-------------------------- SLIDER ------------------------------------------/
        $("#slider").responsiveSlides(
          {
            auto: true,             // Boolean: Animate automatically, true or false
            speed: 3000,            // Integer: Speed of the transition, in milliseconds
            timeout: 5000,          // Integer: Time between slide transitions, in milliseconds
            random: true,          // Boolean: Randomize the order of the slides, true or false
            pause: true,            // Boolean: Pause on hover, true or false
            maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
            namespace: "rslides",   // String: Change the default namespace used
          }
        );



    }); // Close DOM