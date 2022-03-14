/*
CODE BELOW
*/


function verification() {

    // Cleanin'
    (document.querySelectorAll("input")).forEach((el) => el.classList.remove("errorInput"));
    (document.querySelectorAll("select")).forEach((el) => el.classList.remove("errorInput"));
    (document.querySelectorAll("textarea")).forEach((el) => el.classList.remove("errorInput"));

    // Vérification des emails
    email = document.getElementById("email");
    emailBackup = document.getElementById("emailBackup");

    if (!email.value.includes("@")) {
        alert("Le champ email doit comporter un arrobase (@)");
        $('#'+email.id).addClass("errorInput");
        return false
    } else if (!emailBackup.value.includes("@")) {
        alert("Le champ email backup doit comporter un arrobase (@)");
        $('#'+emailBackup.id).addClass("errorInput");
        return false
    }

    // Vérification des champs vides
    formControl = document.getElementsByClassName("form-control");
    formSelect = document.getElementsByClassName("form-select");

    // Vérification que les champs class=form-control sont remplis
    for (let i = 0; i < formControl.length; i++) {
        if (!formControl[i].value) {
            alert("Le formulaire n'est pas correctement complété (" + formControl[i].id + ")")
            $('#'+formControl[i].id).addClass("errorInput");
            return false
            }
        }

    // Vérification que les champs class=form-select sont remplis
    for (let i = 0; i < formSelect.length; i++) {
        if (!formSelect[i].value) {
            alert("Le formulaire n'est pas correctement complété (" + formSelect[i].id + ")")
            $('#'+formSelect[i].id).addClass("errorInput");
            return false
            }
        }

}