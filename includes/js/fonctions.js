function estValideMarque() {
    marque = document.forms[0].mq_libelle.value ;
    if (marque=='') {
        alert ("Le libelle de la marque est obligatoire") ;
        return false ;
    }
    else {
        return true ;
    }
}

function refreshPageLot(idMedoc) {
    document.location="index.php?uc=prdConsMed&action=affichMed&id=" + idMedoc ;
}

function refreshPageDate(date) {
    document.location="index.php?uc=prdConsDate&action=affichDate&date=" + date ;
}

function refreshPageMedVisit(numUt) {
    document.location="index.php?uc=dir_affiMedVisit&action=affichMedecinVisit&id=" + numUt ;
}