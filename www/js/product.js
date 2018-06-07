/**
 * Functia este chemata de fiecare data cand ultizatorul da click pe un buton
 * @returns evenimentul activ
 */
function openevent(evt, name_evt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(name_evt).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

var acc = document.getElementsByClassName("accordion1");
var bcc = document.getElementsByClassName("accordion2");
var ccc = document.getElementsByClassName("accordion3");
var dcc = document.getElementsByClassName("accordion4");
var i;
/**
 * Functia comuta intre clasa activa si cea inactiva pentru a evidentia butonul care controleaza panoul
 * Functie implementata pentru meniul Burse pentru a comuta intre intrebarile acesteia
 * Variabila acc este folosita pentru a prelua elementele din clasa accordion1
 */
for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
/**
 * Functia comuta intre clasa activa si cea inactiva pentru a evidentia butonul care controleaza panoul
 * Functie implementata pentru meniul Examene pentru a comuta intre intrebarile acesteia
 * Variabila bcc este folosita pentru a prelua elementele din clasa accordion2
 */
for (i = 0; i < bcc.length; i++) {
    bcc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
/**
 * Functia comuta intre clasa activa si cea inactiva pentru a evidentia butonul care controleaza panoul
 * Functie implementata pentru meniul Documente pentru a comuta intre intrebarile acesteia
 * Variabila bcc este folosita pentru a prelua elementele din clasa accordion3
 */
for (i = 0; i < ccc.length; i++) {
    ccc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
/**
 * Functia comuta intre clasa activa si cea inactiva pentru a evidentia butonul care controleaza panoul
 * Functie implementata pentru meniul Diverse pentru a comuta intre intrebarile acesteia
 * Variabila bcc este folosita pentru a prelua elementele din clasa accordion4
 */
for (i = 0; i < dcc.length; i++) {
    dcc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}