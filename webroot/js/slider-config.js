

$(function(){
    var sliderId = 'slider-1';
    var sliderOptions = {
        transitionTime: 1000,
        bullets: true,
        bulletColor: 'purple',
        bulletsHide: true,
        arrows: true,
        arrowsHide: true,
        swipe: true,
        auto: true,
        autoTime: 5000,
        images: [
            {
                imageUrl: 'img/impenetrable/el-impenetrable.jpg',
                textTitle: 'Title for Slide 1',
                textBody: 'This is the body for slide 1.'
            },
            {
                imageUrl: 'img/impenetrable/img-2.jpeg',
                textTitle: 'Title for Slide 2 (no body)',
                textPosition: 'NE'
            },
            {
                imageUrl: 'img/impenetrable/img-3.jpeg',
                textBody: 'This is the body for slide 3 (no title).',
                textPosition: 'NW'
            },
        ]
    };
    slider = createSlider(sliderId, sliderOptions);

});
