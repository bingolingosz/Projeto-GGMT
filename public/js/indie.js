document.querySelector(".clear-btn").addEventListener("click",function() {
    alert("Filtros limpos!");
});

// Exemplo de carregamento dinâmico de jogos (futuramente pode puxar de um banco de dados)
const games = [
    {title: "a short hike", genre:"aventura",downloads:98495,rating:4.1,image:"a_short_hike.jpg" },
    { title: "eastshadee", genre: "Ação", downloads: 70141, rating: 4.1, image: "Eastshade.png" }
];

function loadGames(){
    const container = document.querySelector("games-container");
    container.innerHTML = "";
};

