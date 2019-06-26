//déclaration des variables
let tab = [];
let i = 0;
let nombre;

for (i=1; i<=5; i++){
    nombre = prompt("Entrez le nombre numéro "+i); // demander à l'utilisateur de entrer un nombre
    tab.push(nombre); // ajoute ce nombre dans un tableau nommé tab
}

console.log("Le plus grand de ces nombres est  : "+Math.max(...tab)); // affiche le nombre maximal contenu dans le tableau
