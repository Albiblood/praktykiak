// ===== BAZA WYZWAN =====
const challenges = [
    "Zrób 10 pompek",
    "Idź na 20-minutowy spacer",
    "Napisz komuś miły komentarz",
    "Wypij 2 litry wody",
    "Posprzątaj swoje biurko",
    "Przeczytaj 10 stron książki",
    "Spędź godzinę bez telefonu",
    "Zrób 15 przysiadów",
    "Uśmiechnij się do 3 osób",
    "Naucz się czegoś nowego przez 15 min",
    "Zjedz zdrowy posiłek",
    "Zrób listę celów na jutro",
    "Wyłącz social media na 2h",
    "Posłuchaj podcastu",
    "Zrób stretching przez 10 min",
    "Zadzwoń do bliskiej osoby",
    "Zrób coś kreatywnego",
    "Posprzątaj pokój",
    "Pomóż komuś",
    "Zrób 5 minut medytacji"
];

// ===== ELEMENTY DOM =====
const drawBtn = document.getElementById("drawBtn");
const challengeBox = document.getElementById("challengeBox");
const challengeText = document.getElementById("challengeText");
const completeBtn = document.getElementById("completeBtn");
const historyBtn = document.getElementById("historyBtn");
const historyBox = document.getElementById("historyBox");
const historyList = document.getElementById("historyList");

// ===== DATA =====
const today = new Date().toDateString();

// RESET O PÓŁNOCY
if (localStorage.getItem("date") !== today) {
    localStorage.clear();
    localStorage.setItem("date", today);
}

// ===== LOSOWANIE =====
drawBtn.addEventListener("click", () => {
    if (localStorage.getItem("challenge")) {
        showChallenge(localStorage.getItem("challenge"));
        return;
    }

    animateDraw();
});

// Animacja losowania
function animateDraw() {
    let i = 0;

    const interval = setInterval(() => {
        const random = challenges[Math.floor(Math.random() * challenges.length)];
        challengeText.textContent = random;
        challengeBox.classList.remove("hidden");

        i++;
        if (i > 10) {
            clearInterval(interval);
            const final = challenges[Math.floor(Math.random() * challenges.length)];
            localStorage.setItem("challenge", final);
            showChallenge(final);
        }
    }, 100);
}

// Pokazanie wyzwania
function showChallenge(text) {
    challengeText.textContent = text;
    challengeBox.classList.remove("hidden");

    if (localStorage.getItem("completed")) {
        challengeText.classList.add("completed");
    }
}

// ===== UKOŃCZENIE =====
completeBtn.addEventListener("click", () => {
    challengeText.classList.add("completed");
    localStorage.setItem("completed", "true");

    // zapis do historii
    let history = JSON.parse(localStorage.getItem("history")) || [];
    history.push(localStorage.getItem("challenge"));
    localStorage.setItem("history", JSON.stringify(history));

    alert("Gratulacje! Wyzwanie wykonane!");
});

// ===== HISTORIA =====
historyBtn.addEventListener("click", () => {
    historyBox.classList.toggle("hidden");
    showHistory();
});

function showHistory() {
    historyList.innerHTML = "";
    let history = JSON.parse(localStorage.getItem("history")) || [];

    history.forEach(item => {
        let li = document.createElement("li");
        li.textContent = item;
        historyList.appendChild(li);
    });
}

// ===== AUTO LOAD =====
window.onload = () => {
    const saved = localStorage.getItem("challenge");
    if (saved) {
        showChallenge(saved);
    }
};