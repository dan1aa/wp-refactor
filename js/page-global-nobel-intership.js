let splide = new Splide('.splide', {
    type: 'loop',
    perMove: 1,
    perPage: 2,
    pagination: false,
    breakpoints: {
        1024: {
            perPage: 1
        }
    }
});

splide.mount();


const faqItems = document.querySelectorAll('.faq__item')
const readMoreElements = document.querySelectorAll('.read__more')
const showLessElements = document.querySelectorAll('.show__less')

faqItems.forEach(faqItem => {
    faqItem.onclick = () => {
        faqItem.classList.toggle('active')
    }
})

readMoreElements.forEach(readMoreElement => {
    readMoreElement.onclick = function () {
        const parent = this.parentElement;
        parent.classList.toggle('active')
    }
})

showLessElements.forEach(showLessElement => {
    showLessElement.onclick = function () {
        const parent = this.parentElement;
        parent.classList.remove('active')
    }
})