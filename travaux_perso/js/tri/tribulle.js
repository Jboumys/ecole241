/******* programme: tribulle
 * by Jean-Wilson
 **************/

// déclaration des variables
let taille, compteur, nombre;
let tabint = [];

// donner une taille au tableau
nombre = prompt("Veuillez saisir la taille du taleau: ");
// vérifier que le nombre est un entier qu'il existe
if (nombre === parseInt(nombre) ){
    console.log("La variable existe et est définie en tant que nombre!\n nombre = "+nombre);
}else if (nombre === parseFloat(nombre)  ){
    console.log("La variable existe et est définie en tant que chaîne de float!\n float = "+nombre);
} else {
    console.log("La variable existe mais est indéfinie! "+nombre);
}

