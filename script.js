$(document).ready(function () {
    //Image slideshow for header
    $('#slideShow>li:gt(0)').hide(); //gt or slice?
    setInterval(function () {
        $('#slideShow > li:first')
            .fadeOut(2000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideShow');
    }, 6000);

    //burguer menu
    $(document).ready(function () {
        if ($(window).width() > 768) {
            $("nav").show();
        }

        if ($(window).width() < 768) {
            $(".close").hide();
            $("nav").hide();
            
            $(".hamburger").click(function () {
                $("nav").slideToggle("slow", function () {
                    $(".hamburger").hide();
                    $("nav ul, li").show()
                    $(".close").show();
                });
            });

            $(".close").click(function () {
                $("nav").slideToggle("slow", function () {
                    $(".close").hide();
                    $(".hamburger").show();
                });
            });
        }

    });

    // Nav animation
    $('a').hover(function () {
        $(this).animate({
            borderWidth: "2px",
            borderBottomColor: "white",
            fontSize: "10pt",
        })
    },
        function () {
            $(this).animate({
                fontSize: "14.5pt"
            })
        });


    //Coffee Food Menu
    $('button').click(function () {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        $($(this).data('target')).removeClass('hide').addClass('fade-up');
        $($(this).data('target')).siblings().addClass('hide');
    })

    //Form Validation
    $('#submit').on('click', function () {
        if ($('form')[0].checkValidity()) {
            alert('Thank for contacting us. We will get back to you as soon as possible!');
        } else {
            $('form')[0].reportValidity();
        }
    })
});