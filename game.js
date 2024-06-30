const storyElement = document.getElementById('story');
const choicesElement = document.getElementById('choices');

const gameData = {
    start: {
        text: "QUEST FOR PP00 AESTHETIC CLEANSING",
        choices: [
            { text: "Sentiero a sinistra", next: "culo" }
        ]
    },
    culo: {
        text: "Ti trovi in una foresta oscura. Davanti a te ci sono due sentieri. Quale scegli?",
        choices: [
            { text: "Sentiero a sinistra", next: "leftPath" },
            { text: "Sentiero a destra", next: "rightPath" }
        ]
    },
    leftPath: {
        text: "Segui il sentiero a sinistra e incontri un lupo. Cosa fai?",
        choices: [
            { text: "Scappi", next: "runAway" },
            { text: "Affronti il lupo", next: "fightWolf" }
        ]
    },
    rightPath: {
        text: "Segui il sentiero a destra e trovi una capanna abbandonata. Vuoi entrare?",
        choices: [
            { text: "Entra nella capanna", next: "enterCabin" },
            { text: "Continua per il sentiero", next: "continuePath" }
        ]
    },
    runAway: {
        text: "Scappi velocemente e ti perdi nella foresta. Fine del gioco.",
        choices: []
    },
    fightWolf: {
        text: "Affronti il lupo coraggiosamente e lo sconfiggi. Hai vinto!",
        choices: []
    },
    enterCabin: {
        text: "Entri nella capanna e trovi un tesoro nascosto. Hai vinto!",
        choices: []
    },
    continuePath: {
        text: "Continui per il sentiero e ti perdi nella foresta. Fine del gioco.",
        choices: []
    }
};

function startGame() {
    showStory("start");
}

function showStory(storyNode) {
    const node = gameData[storyNode];
    storyElement.textContent = node.text;
    while (choicesElement.firstChild) {
        choicesElement.removeChild(choicesElement.firstChild);
    }
    node.choices.forEach(choice => {
        const button = document.createElement('button');
        button.textContent = choice.text;
        button.classList.add('choice');
        button.onclick = () => showStory(choice.next);
        choicesElement.appendChild(button);
    });
}

startGame();
