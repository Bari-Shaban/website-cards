
document.querySelector("#filter-marketing").addEventListener("click", filterMarketing);
document.querySelector("#filter-programiranje").addEventListener("click", filterProgramiranje);
document.querySelector("#filter-dizajn").addEventListener("click", filterDizajn);


function filterMarketing() {
    hideAllCards();

    var marketingCards = document.querySelectorAll(".marketing");

    marketingCards.forEach(marketingCard => {
        marketingCard.style.display = "inline";
    });

}

function filterProgramiranje() {
    hideAllCards();

    var programiranjeCards = document.querySelectorAll(".programiranje");

    programiranjeCards.forEach(programiranjeCard => {
        programiranjeCard.style.display = "inline-block";
    });
}

function filterDizajn() {
    hideAllCards();

    var dizajnCards = document.querySelectorAll(".dizajn");

    dizajnCards.forEach(dizajnCard => {
        dizajnCard.style.display = "inline-block";
    });
}

function hideAllCards() {
    var allCards = document.querySelectorAll("#karti");

    allCards.forEach(card => {
        card.style.display = "none";
    });
}

// function showAllCards() {
//     var allCards = document.querySelectorAll("#karti");

//     allCards.forEach(card => {
//         card.style.display = "inline-block";
//     });
// }

