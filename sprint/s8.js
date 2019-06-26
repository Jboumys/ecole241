//déclaration des variables
let nombre;
let i=0 ;
let produit ;

nombre = prompt('Saisir un nombre'); //demande à l'utilisateur de saisir un nombre

if(Number(nombre)){
   for(i=0; i<=10; i++){
       produit = nombre * i ; //calcul du produit
     console.log(nombre+' x '+i+' = '+produit ); //affiche la  table de multiplication
   }
    
}else{
    console.log("Veuillez saisir un nombre au lieu d'une lettre!");
}