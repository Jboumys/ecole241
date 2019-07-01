/**
 * Created by Wil19 on 28/06/2019.
 */

//declaration des variables
var email, erreur ;
//recupere le formulaire
document.getElementById('newsletter').addEventListener('submit', function (event) {
    event.preventDefault(); // supprime les evenements par defaut du formulaire
    email = document.getElementById('email'); // recupere les donnees du champ du formulaire
    if (!email.value){
        erreur = 'veuillez saisir correctement l\'adresse e-mil!' ; // recupere l'erreur
    }if (erreur){
        document.getElementById('erreur').innerHTML = erreur ; //affiche l'erreur dans le content id="erreur" de la page html
    } else {
        alert('merci d\'avoir souscrit à notre ewsletter!');
    }

    showContent();
    setTimeout(showContent, 3000);
});

function showContent() {
    document.querySelector('.loader-container').add('hidden');
}



