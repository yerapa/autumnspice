$(document).ready(function(){
    //Image slideshow for header
    $('#slideShow>li:gt(0)').hide(); //gt or slice?
    setInterval(function() {
        $('#slideShow > li:first')
        .fadeOut(2000)
        .next()
        .fadeIn(2000)
        .end()
        .appendTo('#slideShow');
    }, 6000);

    //Coffee Food Menu
    $('button').click(function() {
        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        $( $(this).data('target') ).removeClass('hide').addClass('fade-up');
        $( $(this).data('target') ).siblings().addClass('hide');
    })

    //Form Validation
    $('#submit').on('click', function() {
        if($('form')[0].checkValidity()) {
            alert('Thank for contacting us. We will get back to you as soon as possible!');
        } else {
            $('form')[0].reportValidity();
        }
    })
});
