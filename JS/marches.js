document.addEventListener("DOMContentLoaded", function () {
    const marches = document.querySelectorAll(".groupe_de_marchés");
    const links = document.querySelectorAll("a[id^='marches_du']");
    const resetButton = document.getElementById("display_les_marches");
    const Bourg_Saint_Andéol_iframe = document.getElementById("bourg_saint_andeol");
    const marches_du_dimanches_iframe = document.getElementById("marches_du_dimanches");

    function showMap(mapId) {
        marches.forEach(marche => {
            marche.style.display = marche.id === mapId ? "flex" : "none";
        });
    }

    links.forEach(button => {
        button.addEventListener("click", function () {
            const mapId = button.id.replace("_button", ""); 
            showMap(mapId);
            resetButton.style.display = "block";
        });
    });

    resetButton.addEventListener("click", function () {
        marches.forEach(marche => {
            marche.style.display = "flex";
        });
        resetButton.style.display = "none";
    });

    const myDate = new Date();
    const daysList = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    const monthsList = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

    const day = daysList[myDate.getDay()];
    const month = monthsList[myDate.getMonth()];
    const mapToShow = document.getElementById(`marches_du_${day.toLowerCase()}`);
    showMap(mapToShow.id);

    if (day !== 'Dimanche') {
        marches_du_dimanches_iframe.style.display = "none";
    } else {
        marches_du_dimanches_iframe.style.display = "true";
    }

    switch (month) {
        case "Janvier":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.2883168886347!2d4.642041982549294!3d44.37225543981038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzIwLjMiTiA0wrAzOCczNi4wIkU!5e0!3m2!1sfr!2sfr!4v1716379523187!5m2!1sfr!2sfr"
            break;
        case "Février":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.2883168886347!2d4.642041982549294!3d44.37225543981038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzIwLjMiTiA0wrAzOCczNi4wIkU!5e0!3m2!1sfr!2sfr!4v1716379523187!5m2!1sfr!2sfr"
            break;
        case "Mars":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.2883168886347!2d4.642041982549294!3d44.37225543981038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzIwLjMiTiA0wrAzOCczNi4wIkU!5e0!3m2!1sfr!2sfr!4v1716379523187!5m2!1sfr!2sfr"
            break;
        case "Avril":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.2883168886347!2d4.642041982549294!3d44.37225543981038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzIwLjMiTiA0wrAzOCczNi4wIkU!5e0!3m2!1sfr!2sfr!4v1716379523187!5m2!1sfr!2sfr"
            break;
        case "Mai":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2852.1239228190757!2d4.644619376517865!3d44.369045371077156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzA4LjYiTiA0wrAzOCc0OS45IkU!5e0!3m2!1sfr!2sfr!4v1716379610701!5m2!1sfr!2sfr"
            break;
        case "Juin":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2852.1239228190757!2d4.644619376517865!3d44.369045371077156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzA4LjYiTiA0wrAzOCc0OS45IkU!5e0!3m2!1sfr!2sfr!4v1716379610701!5m2!1sfr!2sfr"
            break;
        case "Juillet":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2852.1239228190757!2d4.644619376517865!3d44.369045371077156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzA4LjYiTiA0wrAzOCc0OS45IkU!5e0!3m2!1sfr!2sfr!4v1716379610701!5m2!1sfr!2sfr"
            break;
        case "Août":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2852.1239228190757!2d4.644619376517865!3d44.369045371077156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzA4LjYiTiA0wrAzOCc0OS45IkU!5e0!3m2!1sfr!2sfr!4v1716379610701!5m2!1sfr!2sfr"
            break;
        case "Septembre":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2852.1239228190757!2d4.644619376517865!3d44.369045371077156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzA4LjYiTiA0wrAzOCc0OS45IkU!5e0!3m2!1sfr!2sfr!4v1716379610701!5m2!1sfr!2sfr"
            break;
        case "Octobre":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.2883168886347!2d4.642041982549294!3d44.37225543981038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzIwLjMiTiA0wrAzOCczNi4wIkU!5e0!3m2!1sfr!2sfr!4v1716379523187!5m2!1sfr!2sfr"
            break;
        case "Novembre":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.2883168886347!2d4.642041982549294!3d44.37225543981038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzIwLjMiTiA0wrAzOCczNi4wIkU!5e0!3m2!1sfr!2sfr!4v1716379523187!5m2!1sfr!2sfr"
            break;
        case "Décembre":
            Bourg_Saint_Andéol_iframe.src = "https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.2883168886347!2d4.642041982549294!3d44.37225543981038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzIwLjMiTiA0wrAzOCczNi4wIkU!5e0!3m2!1sfr!2sfr!4v1716379523187!5m2!1sfr!2sfr"
            break;
    }


});
