document.addEventListener('DOMContentLoaded', function () {
    var splide = new Splide('.splide', {
        height: '27rem',
        focus: 0,
        trimSpace: false,
        autoWidth: true,
        pagination: false
    })

    splide.mount()
})
