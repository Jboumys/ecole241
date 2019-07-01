/**
 * Created by Wil19 on 29/06/2019.
 */
/**
 * Created by Wil19 on 29/06/2019.
 */

//declaration des variables
var erreur, email, objet, message, inputs;

document.getElementById('form_contact').addEventListener('submit', function (event) {
    event.preventDefault();
    inputs = document.getElementsByTagName('input'); // recupere tous les champs du formulaire contact

    // verifie les champs de formulaire
    for (var i = 0; i < inputs.length; i++){
        // verifie si le tableau est vide
        if (!inputs[i].value){
            erreur = "Veuillez renseigner tous les champs!" ;
        }
    }

    if (erreur){
        document.getElementById('erreur_input').innerHTML = erreur ;
    }
});


/**
 * Created by Wil19 on 29/06/2019.
 */

//declaration des variables
var email, objet, message, inputs;

form = document.getElementById('form_contact').addEventListener('submit', function (event) {
    event.preventDefault();
    email = document.getElementById('form_contact').getElementsByTagName('input'); // recupere le champ email du formulaire contact
    objet = document.getElementById('objet'); // recupere le champ objet du formulaire contact
    message = document.getElementById('message'); // recupere le champ message du formulaire contact

    if (!email.value){
        var errorEmail = "Veuillez remplir correctement ce champ!" ;
    }if (!objet.value){
        var errorObjet = "Veuillez remplir correctement ce champ!" ;
    }
    if (!message.value){
        var errorMsg = "Veuillez remplir correctement ce champ!" ;
    }
    // recupere les erreurs
    if (errorEmail){
        document.getElementById('errorEmail').innerHTML = errorEmail ;
    }if (errorMsg){
        document.getElementById('errorMsg').innerHTML = errorMsg ;
    }if (errorObjet){
        document.getElementById('errorObjet').innerHTML = errorObjet ;
    }
});