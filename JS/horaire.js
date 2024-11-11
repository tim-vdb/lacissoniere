document.addEventListener("DOMContentLoaded", function () {
    let myDate = new Date();
    let daysList = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
    let monthsList = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    let date = myDate.getDate();
    let month = monthsList[myDate.getMonth()];
    let year = myDate.getFullYear();
    let day = daysList[myDate.getDay()];
    let hours = myDate.getHours();
    let seconds = myDate.getSeconds();

    let today_disponible = `${day} ${date} ${month} ${year}`;
    let year_string = `${year}`;

    setInterval(function () {
        setCurrentTime();
    }, 1000);

    function calculateEasterDate(year) {
        const a = year % 19;
        const b = Math.floor(year / 100);
        const c = year % 100;
        const d = Math.floor(b / 4);
        const e = b % 4;
        const f = Math.floor((b + 8) / 25);
        const g = Math.floor((b - f + 1) / 3);
        const h = (19 * a + b - d - g + 15) % 30;
        const i = Math.floor(c / 4);
        const k = c % 4;
        const l = (32 + 2 * e + 2 * i - h - k) % 7;
        const m = Math.floor((a + 11 * h + 22 * l) / 451);
        const month = Math.floor((h + l - 7 * m + 114) / 31);
        const day = ((h + l - 7 * m + 114) % 31) + 1;

        return { year, month, day };
    }

    function isEasterToday() {
        const today = new Date();
        const currentYear = today.getFullYear();
        const easterDate = calculateEasterDate(currentYear);
        const easterDay = new Date(currentYear, easterDate.month - 1, easterDate.day);

        return today.toDateString() === easterDay.toDateString();
    }

    function calculatePentecostDate(year) {
        const easterDate = calculateEasterDate(year);
        const easterDay = new Date(year, easterDate.month - 1, easterDate.day);
        const pentecostDay = new Date(easterDay.getTime() + 49 * 24 * 60 * 60 * 1000);

        return {
            year: pentecostDay.getFullYear(),
            month: pentecostDay.getMonth() + 1,
            day: pentecostDay.getDate()
        };
    }

    function isPentecostToday() {
        const today = new Date();
        const currentYear = today.getFullYear();
        const pentecostDate = calculatePentecostDate(currentYear);

        return today.toDateString() === new Date(pentecostDate.year, pentecostDate.month - 1, pentecostDate.day).toDateString();
    }

    function Fermeture() {
        document.querySelectorAll('.disponible').forEach(element => {
            element.innerText = 'Fermée';
        });
        document.querySelectorAll('.disponible').forEach(element => {
            element.style.color = "rgb(255, 46, 46)";
        });
        if (day == "Dimanche" || (day == "Samedi" && hours >= 19 && seconds > 0)) {
            document.querySelectorAll('.ouverture').forEach(element => {
                element.innerText = 'Ouvre';
            });
            document.querySelectorAll('.ouverture_jour').forEach(element => {
                element.innerText = 'lundi';
            });
            document.querySelectorAll('.horaire_ouverture').forEach(element => {
                element.innerText = "à 7h";
            });
        } else if (day !== "Dimanche" && hours >= 19 && seconds > 0) {
            document.querySelectorAll('.ouverture').forEach(element => {
                element.innerText = 'Ouvre';
            });
            document.querySelectorAll('.ouverture_jour').forEach(element => {
                element.innerText = 'demain';
            });
            document.querySelectorAll('.horaire_ouverture').forEach(element => {
                element.innerText = "à 7h";
            });
        } else if (day !== "Dimanche" && hours < 7) {
            document.querySelectorAll('.ouverture').forEach(element => {
                element.innerText = 'Ouvre';
            });
            document.querySelectorAll('.ouverture_jour').forEach(element => {
                element.innerText = '';
            });
            document.querySelectorAll('.horaire_ouverture').forEach(element => {
                element.innerText = "à 7h";
            });
        };
    }

    function setCurrentTime() {
        if (isEasterToday()) {
            Fermeture();
        } else if (isPentecostToday()) {
            Fermeture();
        } else if (date == 1 && month == "Janvier") {
            Fermeture();
        } else if (date == 1 && month == "Mai") {
            Fermeture();
        } else if (date == 1 && month == "Novembre") {
            Fermeture();
        } else if (date == 1 && month == "Novembre") {
            Fermeture();
        } else if (date == 11 && month == "Novembre") {
            Fermeture();
        } else if (date == 25 && month == "Décembre") {
            Fermeture();
        } else {
            if (day !== "Dimanche" && hours >= 7 && hours < 19) {
                document.querySelectorAll('.disponible').forEach(element => {
                    element.innerText = "Ouvert";
                });
                document.querySelectorAll('.disponible').forEach(element => {
                    element.style.color = "rgb(0, 195, 0)";
                });
                document.querySelectorAll('.ouverture').forEach(element => {
                    element.innerText = 'Ferme';
                });
                document.querySelectorAll('.ouverture_jour').forEach(element => {
                    element.innerText = '';
                });
                document.querySelectorAll('.horaire_ouverture').forEach(element => {
                    element.innerText = "à 19h";
                });
                document.querySelectorAll('.ouverture').forEach(element => {
                    element.style.color = "rgb(255, 46, 46)";
                });

            } else {
                Fermeture();
            }
        }
        document.querySelectorAll('.real_time').forEach(element => {
            element.innerText = today_disponible;
        });
        document.getElementById('year_footer').innerText = year_string;
    }
    setCurrentTime();
});