document.addEventListener('DOMContentLoaded', function () {
    const newsItems = [
        {
            title: "Nieuwe Locaties Toegevoegd",
            content: "We hebben nieuwe festival locaties toegevoegd voor dit jaar. Bekijk onze lijst voor de meest recente updates en ontdek waar je de komende festivals kunt bijwonen!"
        },
        {
            title: "Festival Data Aangekondigd",
            content: "De data voor de aankomende festivals zijn nu bekend! Zorg ervoor dat je je tickets op tijd boekt."
        },
        {
            title: "Speciale Aanbiedingen",
            content: "Mis onze speciale aanbiedingen niet! Boek nu en ontvang korting op je festivaltrip."
        },
        {
            title: "Nieuwe Festivals in de Regio",
            content: "We hebben een aantal nieuwe festivals in de regio toegevoegd. Bekijk ze snel!"
        }
    ];

    let currentIndex = 0;

    function updateNews() {
        const newsItem = newsItems[currentIndex];
        document.getElementById('news-item').innerHTML = `
            <h4>${newsItem.title}</h4>
            <p>${newsItem.content}</p>
        `;
        currentIndex = (currentIndex + 1) % newsItems.length; // Volgende index, terug naar 0 als we het einde bereiken
    }

    updateNews(); // Initialiseer met het eerste nieuwsitem
    setInterval(updateNews, 5000); // Wissel elke 5 seconden
});

const newsSlider = new Swiper('.news-slider', {
    loop: true,
    autoplay: {delay: 5000, disableOnInteraction: false},
    pagination: {el: '.swiper-pagination', clickable: true},
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

    const swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
},
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
    autoplay: {
    delay: 60000, // Wissel elke minuut (60000 ms)
    disableOnInteraction: false,
},
});


