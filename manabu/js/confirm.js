/**
 * Created by Wilson on 09/03/2019.
 */
function confirm() {
    Swal.fire({
        position: 'top-end',
        type: 'success',
        title: 'Commande a été effectuée avec succès!',
        html:
            'Veuillez consulter votre boîte électronique ',
        showConfirmButton: false,
        timer: 5500
    })
}
