const faqItems = document.querySelectorAll('.faq-item')

faqItems.forEach(faqItem => {
    faqItem.onclick = () => {
        faqItem.classList.toggle('active')
    }
})