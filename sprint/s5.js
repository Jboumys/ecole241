//déclaration des variables
let nombre1;
let nombre2;
//demande le nombre1 à l'utilisateur
nombre1 = prompt('Entrez le premier nombre');
//demande le nombre2 à l'utilisateur
nombre2 = prompt('Entrez le deuxième nombre');
//comparer les nombres
if(nombre1 < nombre2){
   console.log(nombre2);
}else if(nombre1 > nombre2){
   console.log(nombre1);   
}else{
    console.log("les nombres égaux");
}

