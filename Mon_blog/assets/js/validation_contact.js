//declaration des variables
var erreur, email, objet, message, inputs;

document.getElementById('erreur_input').style.visibility = "hidden"; // cache le bloc de message

document.forms['form_contact'].addEventListener('submit', function (event) {
    event.preventDefault();
    inputs = this; // recupere tous les champs du formulaire contact

    // verifie les champs de formulaire
    for (var i = 0; i < inputs.length; i++){
        // verifie si le tableau est vide
        if (!inputs[i].value){
            erreur = "Veuillez renseigner tous les champs!" ;
        }
    }

    if (erreur){
        document.getElementById('erreur_input').innerHTML = erreur ;
        document.getElementById('erreur_input').style.visibility = "visible"; // affiche le bloc de message
    }else {
        alert('formulaire valide!')
    }
});
