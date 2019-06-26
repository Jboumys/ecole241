
let floor;
if (confirm('Pour accéder à ce site vous devez avoir 18 ans ou plus,cliquez sur "OK" si c\'est le cas.')) {
    alert('Vous allez être redirigé vers le site.');
}
else {
    alert("Désolé, vous n'avez pas accès à ce site.");
    floor = parseInt(prompt("Entrez l'étage où l'ascenseur doit se rendre (de -2 à 30) :"));
    if (floor === 0) {
        alert('Vous vous trouvez déjà au rez-de-chaussée.');
    }
}