const Shuffle = window.Shuffle;
const element = document.getElementById("img-grid");

const shuffleInstance = new Shuffle(element, {
    itemSelector: ".gallery-img",
    initialSort: {
        randomize: true
    },
    gutterWidth: 10
});

function shuffle(filter) {
    filter.classList.toggle('active');
    const filters = document.querySelectorAll(".filter.active");
    let selected = [];
    for (let i = 0; i < filters.length; i++) {
        selected.push(filters[i].getAttribute('id'));
    }
    shuffleInstance.filter(selected);
}