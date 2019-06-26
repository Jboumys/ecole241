/********************************************************
 * programme: récupérer les éléments d'une page web
 * by Jean-Wilson
 *******************************************************/

let dateMaj = document.lastModified; // récupère la date de modification de la page
console.log('Date de modification: '+dateMaj); // affiche la date récupérée

let url = document.location; // récupère l'url de la page web
console.log('URL: '+url); // affiche l'url récupérée

let bloc = document.querySelector('#bloc'); // récupère l'élément d'un sélecteur
console.log('élément du sélecteur: '+bloc); // affiche les éléments récupérés
let para = bloc.getElementsByTagName('p'); // récupère les éléments de l'attribut class
console.log("les éléments de l'attribut class: "+para);

let  titre = document.title; // récupère le titre de la page web
console.log(titre); // affiche le résultat

console.log("*******************Début Récupérer le formulaire et ses champs**********************\n")
let form = document.forms.form; // récupère le formulaire à l'aide de son nom
console.log(form); // affich le formulaire

let form2 = document.forms.formCennect; // récupère le formulaire à l'aide son id
console.log(form2); // affich le formulaire

let champNom = document.forms.form.username; // récupère un champs du formulaire form à l'aide son nom
console.log(champNom); // affiche un champs du formulaire

let champNom2 = document.forms.formCennect.password_id; // récupère le password à l'aide de l'id
console.log(champNom2);

let forms = document.forms[1]; // récupère le formulaire à l'aide de l'indice
console.log(forms); // affich le formulaire
console.log("*******************Fin Récupérer le formulaire et ses champs**********************\n")

let images = document.images[1];
console.log(images);

let images2 = document.images;
for (let i; i < document.images2.length; i++){
    console.log(images2);
}



