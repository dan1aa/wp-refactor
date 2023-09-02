const faqItems = document.querySelectorAll('.faq__item')

faqItems.forEach(faqItem => {
    faqItem.onclick = () => {
        faqItem.classList.toggle('active')
    }
})