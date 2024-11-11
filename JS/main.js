document.addEventListener("DOMContentLoaded", function () {
    document.body.style.height = 'calc(100svh - 20px)';

    const savedHref = sessionStorage.getItem('redirectHref');
    const PopUp = document.getElementById("PopUp");
    const NPopUp = document.getElementById("NPopUp");
    const YPopUp = document.getElementById("YPopUp");
    const editPages = document.querySelectorAll(".editPage");
    const settings = document.querySelectorAll(".settings");
    const eye_edits = document.querySelectorAll(".eye_edit");
    const logouts = document.querySelectorAll(".logout");
    const medias_icons = document.querySelectorAll(".medias_icons");
    const path = window.location.pathname;
    const hash = window.location.hash;
    const patte1 = document.getElementById('patte1');
    const patte2 = document.getElementById('patte2');
    const patte3 = document.getElementById('patte3');
    const idleTimeout = null;
    const navbar_sticky = document.getElementById("navbar_sticky");
    const div_sticky_origin = document.getElementById("div_sticky_origin");
    const btnTop = document.getElementById("btnTop");
    const btnTops = document.querySelectorAll('.btnTop');
    const li_markets = document.querySelectorAll(".li_market");
    const menu_burger = document.getElementById("menu_burger");
    const MenuBurger_enable = document.getElementById("MenuBurger_enable");
    const MenuBurger_enable_sticky = document.getElementById("MenuBurger_enable_sticky")
    const wrenchs = document.querySelectorAll(".wrench");
    const close_interface = document.getElementById("close_interface");
    const store_time = document.getElementById("store_time");
    const store_time_sticky = document.getElementById("store_time_sticky");
    const storeTime_phone = document.getElementById("storeTime_phone");
    const nav_phone = document.getElementById("nav_phone");
    const closeByLinks = document.querySelectorAll(".closeByLinks");
    let fileFormCounter = 0;
    let textFormCounter = 0;
    let IsLoader = false

    const validPaths = [
        "/vin",
        "/viande",
        "/charcuterie",
        "/epicerie-fine",
        "/produits-laitiers"
    ];

    function callLoader(delay) {
        setTimeout(function () {
            Loader(IsLoader);
        }, delay);
    }

    if ((window.location.pathname === "/"))   {
        callLoader(6000);
    } else if (validPaths.includes(path) && hash) {
        document.body.style.height = 'auto';
        document.getElementById("Loader").style.display = "none";
        document.body.style.border = '10px inset var(--beige_primaire)';
        document.body.style.borderStyle = 'solid inset solid solid';
        document.body.style.overflow = 'auto';
        document.getElementById('patte0_loader').style.display = "none"
        document.getElementById('patte1_loader').style.display = "none"
        document.getElementById('patte2_loader').style.display = "none"
        document.getElementById('patte3_loader').style.display = "none"
        document.getElementById('patte4_loader').style.display = "none"
        document.getElementById('patte5_loader').style.display = "none"
        document.getElementById('patte6_loader').style.display = "none"
        document.getElementById('patte7_loader').style.display = "none"
        document.getElementById('patte8_loader').style.display = "none"
        document.getElementById('patte9_loader').style.display = "none"
    } else {
        callLoader(2000);
    }

    function addFileForm(container, imageId) {
        const formId = `file-form-${fileFormCounter++}`;
        const formHTML = `
        <div class="form-wrapper">
            <form id="${formId}" action="traitement_editPage" method="POST" enctype="multipart/form-data">
                <div class="file-upload-wrapper">
                    <input type="file" name="file" id="file-upload-${formId}" class="file-upload-input" required>
                    <label for="file-upload-${formId}" class="file-upload-label">Choisir un fichier</label>
                    <p><span id="file-upload-filename-${formId}" class="file-upload-filename">Aucun fichier sélectionné</span></p>
                </div>
                <input type="hidden" name="form_id" value="${formId}">
                <input type="hidden" name="image_id" value="${imageId}">
                <button class="btnEnregistrer" type="submit">Enregistrer</button>
            </form>
            <form action="resetElement" method="POST">
                <input type="hidden" name="image_id" value="${imageId}">
                <button class="btnReset" type="submit">Réinitialiser</button>
            </form>
        </div>
        `;
        const formContainer = document.createElement('div');
        formContainer.innerHTML = formHTML;
        container.appendChild(formContainer);
    }

    document.addEventListener('change', function (event) {
        if (event.target && event.target.classList.contains('file-upload-input')) {
            const filename = event.target.files[0].name;
            const formId = event.target.closest('form').id;
            const filenameSpan = document.getElementById(`file-upload-filename-${formId}`);
            if (filenameSpan) {
                filenameSpan.textContent = filename;
            }
        }
    });

    function addTextForm(container, textId) {
        const formId = `text-form-${textFormCounter++}`;
        const formHTML = `
        <div class="form-wrapper">
            <form id="${formId}" action="traitement_editPage" method="POST">
            <input type="text" name="text" required placeholder="Modifier le Contenu" style="height: 32px;">
                <input type="hidden" name="form_id" value="${formId}">
                <input type="hidden" name="text_id" value="${textId}">
                <button class="btnEnregistrer" type="submit">Enregistrer</button>
            </form>
            <form action="resetElement" method="POST">
                <input type="hidden" name="text_id" value="${textId}">
                <button class="btnReset" type="submit">Réinitialiser</button>
            </form>
        </div>
        `;
        const formContainer = document.createElement('div');
        formContainer.innerHTML = formHTML;
        container.appendChild(formContainer);
    }

    document.addEventListener('click', function (event) {
        if (event.target.classList.contains('add-file-form')) {
            const container = event.target.nextElementSibling;
            const imageId = event.target.closest('.image-container').dataset.imageId;
            addFileForm(container, imageId);
            event.target.style.display = "none";
        } else if (event.target.classList.contains('add-text-form')) {
            const container = event.target.nextElementSibling;
            const textId = event.target.closest('.text-container').dataset.textId;
            addTextForm(container, textId);
            event.target.style.display = "none";
        }
    });
    var tempContent_error = document.getElementById("temp-content");
    if (tempContent_error) {
        setTimeout(function () {
            tempContent_error.style.display = "none";
        }, 30000);
    }

    function getCookie(cookieName) {
        var name = cookieName + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var cookieParts = decodedCookie.split(';');

        for (var i = 0; i < cookieParts.length; i++) {
            var part = cookieParts[i].trim();
            if (part.indexOf(name) === 0) {
                var cookieValue = part.substring(name.length, part.length);
                if (!isNaN(cookieValue)) {
                    return parseInt(cookieValue);
                } else {
                    return null;
                }
            }
        }

        return null;
    }

    function checkCookieExpiration(cookieName) {
        const tokenExpires = getCookie(cookieName);
        console.log("Token expires:", tokenExpires);

        if (tokenExpires) {
            const now = Date.now();
            const expirationDate = parseInt(tokenExpires) * 1000;
            const timeLeft = expirationDate - now;
            const oneMinute = 60 * 1000;
            console.log("ok2 - Time left:", timeLeft);

            if (timeLeft <= oneMinute && timeLeft > 0) {
                document.getElementById('PopUp').classList.add("PopUp_enable");
                console.log("ok3");
            } else {
                document.getElementById('PopUp').classList.remove("PopUp_enable");
                console.log("ok4");
            }

            editPages.forEach(editPage => {
                editPage.style.display = "flex";
            });
            settings.forEach(settings_mod => {
                settings_mod.style.display = "flex"
            });
            if (window.innerWidth <= 600) {
                medias_icons.forEach(medias_icon => {
                    medias_icon.style.flexDirection = "column";
                });
            } else {
                medias_icons.forEach(medias_icon => {
                    medias_icon.style.flexDirection = "row";
                });
            }
        } else {
            document.getElementById('PopUp').classList.remove("PopUp_enable");
            document.cookie = "token" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            document.cookie = "email" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            document.cookie = "username" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            console.log("ok4 - Cookie n'existe pas");

            editPages.forEach(editPage => {
                editPage.style.display = "none";
            });
            settings.forEach(settings_mod => {
                settings_mod.style.display = "none"
            });
        }
    }

    checkCookieExpiration('token_expiration');

    const intervalid = setInterval(() => {
        checkCookieExpiration('token_expiration');
        console.log("ok1");
    }, 5000);

    eye_edits.forEach(eye_edit => {
        eye_edit.addEventListener('click', () => {
            if (eye_edit.src.endsWith('eye-off.svg')) {
                editPages.forEach(editPage => {
                    editPage.classList.add('hidden-important');
                });
                eye_edit.src = 'CSS/images/eye.svg';
            } else {
                editPages.forEach(editPage => {
                    editPage.classList.remove('hidden-important');
                });
                eye_edit.src = 'CSS/images/eye-off.svg';
            }
            close_Interface();
        });
    });

    logouts.forEach(logout => {
        logout.addEventListener('click', () => {
            PopUp.classList.remove("PopUp_enable");
            document.cookie = "token" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            document.cookie = "token_expiration" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            document.cookie = "email" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            document.cookie = "username" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            editPages.forEach(editPage => {
                editPage.style.display = "none";
            });
            settings.forEach(settings_mod => {
                settings_mod.style.display = "none"
            });
            clearInterval(intervalid);
            close_Interface();
        });
    });

    YPopUp.addEventListener("click", function () {
        addOneHourToCookies();
        PopUp.classList.remove("PopUp_enable");
        clearInterval(intervalid);

    });

    NPopUp.addEventListener("click", function () {
        PopUp.classList.remove("PopUp_enable");
        document.cookie = "token" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = "token_expiration" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = "email" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        document.cookie = "username" + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        editPages.forEach(editPage => {
            editPage.style.display = "none";
        });
        clearInterval(intervalid);
    });

    function addOneHourToCookies() {
        const oneHourInSeconds = 60 * 60;

        let tokenExpirationExpires = getCookie('token_expiration');
        if (tokenExpirationExpires) {
            tokenExpirationExpires = parseInt(tokenExpirationExpires);
            tokenExpirationExpires += oneHourInSeconds;
            document.cookie = `token_expiration=${tokenExpirationExpires}; expires=${new Date(tokenExpirationExpires * 1000).toUTCString()}; path=/;`;
        }
    }

    function Loader() {
        document.body.style.height = 'auto';
        document.getElementById("Loader").style.display = "none";
        console.log("Content is now visible");
        document.body.style.border = '10px inset var(--beige_primaire)';
        document.body.style.borderStyle = 'solid inset solid solid';
        document.body.style.overflow = 'auto';
        document.getElementById('patte0_loader').style.display = "none"
        document.getElementById('patte1_loader').style.display = "none"
        document.getElementById('patte2_loader').style.display = "none"
        document.getElementById('patte3_loader').style.display = "none"
        document.getElementById('patte4_loader').style.display = "none"
        document.getElementById('patte5_loader').style.display = "none"
        document.getElementById('patte6_loader').style.display = "none"
        document.getElementById('patte7_loader').style.display = "none"
        document.getElementById('patte8_loader').style.display = "none"
        document.getElementById('patte9_loader').style.display = "none"
        IsLoader = true
        if (savedHref) {
            sessionStorage.removeItem('redirectHref');

            setTimeout(function () {
                window.location.href = savedHref;
            }, 2000);
        }
    }

    function adjustDivHeight() {
        var myDiv = document.getElementById("Loader");
        myDiv.style.height = window.innerHeight + 'px';
        myDiv.getBoundingClientRect();
    }

    window.addEventListener('load', adjustDivHeight);
    window.addEventListener('resize', adjustDivHeight);
    setTimeout(adjustDivHeight, 100);

    document.querySelectorAll('.redirectSimpleLink').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            const fullHref = this.href;
            const baseHref = fullHref.split('#')[0];

            sessionStorage.setItem('redirectHref', fullHref);

            window.location.href = baseHref;
        });
    });

    const LinkProduits_redirect = document.querySelectorAll('.LinkProduits_redirect');

    LinkProduits_redirect.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            const fullHref = this.href;
            const baseHref = fullHref.split('#')[0];

            sessionStorage.setItem('redirectHref', fullHref);
            window.location.href = baseHref;
        });
    });

    function checkIfMouseIdle() {
        if (IsLoader != false) {
            if (idleTimeout !== null) {
                clearTimeout(idleTimeout);
            }

            if (window.innerWidth < 1200) {
                patte1.style.display = "none";
                patte2.style.display = "none";
                patte3.style.display = "none";
            } else {
                patte1.style.display = "block";
                patte2.style.display = "block";
                patte3.style.display = "block";
            }

        }
    }

    window.addEventListener('mousemove', function (event) {
        patte1.style.display = "none";
        patte2.style.display = "none";
        patte3.style.display = "none";
        patte1.style.left = (event.clientX - (patte1.offsetWidth / 2)) - 10 + 'px';
        patte1.style.top = (event.clientY - (patte1.offsetHeight / 2)) + 75 + 'px';
        patte2.style.left = (event.clientX - (patte2.offsetWidth / 2)) + 55 + 'px';
        patte2.style.top = (event.clientY - (patte2.offsetHeight / 2)) + 100 + 'px';
        patte3.style.left = (event.clientX - (patte3.offsetWidth / 2)) + 35 + 'px';
        patte3.style.top = (event.clientY - (patte3.offsetHeight / 2)) + 160 + 'px';
        checkIfMouseIdle();
    });

    window.onscroll = function () { checkNavbar(), scrollToTopBtn() };

    function checkNavbar() {
        if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
            if (document.getElementById("div_sticky")) {
                div_sticky.classList.add("sticky_div");
                div_sticky.style.display = "flex"
                navbar_sticky.style.display = "flex"
                navbar_sticky.style.position = "auto"
                navbar_sticky.style.animation = "none"
            } else {
                div_sticky_origin.classList.add("sticky_div");
                div_sticky_origin.style.display = "flex"
                navbar_sticky.style.display = "flex"
                navbar_sticky.style.position = "auto"
                navbar_sticky.style.animation = "none"
            }
        } else {
            if (document.getElementById("div_sticky")) {
                div_sticky.classList.remove("sticky_div");
                div_sticky.style.display = "none"
                navbar_sticky.style.position = "auto"
                navbar_sticky.style.animation = "none"
                navbar_sticky.style.display = "none"
            } else {
                div_sticky_origin.classList.remove("sticky_div");
                div_sticky_origin.style.display = "none"
                navbar_sticky.style.position = "auto"
                navbar_sticky.style.animation = "none"
                navbar_sticky.style.display = "none"
            }
        };
    };

    function scrollToTopBtn() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btnTop.style.display = 'block';
        } else {
            btnTop.style.display = "none";
        }
    }

    btnTops.forEach(btn => {
        btn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });

    li_markets.forEach(market => {
        market.addEventListener("mouseover", function () {
            const icon = market.querySelector(".icon_market_link .market_icon");
            if (icon) {
                icon.src = "CSS/images/market-stall_modif_beige.svg";
            }
        });

        market.addEventListener("mouseout", function () {
            const icon = market.querySelector(".icon_market_link .market_icon");
            if (icon) {
                icon.src = "CSS/images/market-stall_modif.svg";
            }
        });
    });

    closeByLinks.forEach(closeByLink => {
        closeByLink.onclick = close_Interface;
    });

    MenuBurger_enable.onclick = openNav;
    MenuBurger_enable_sticky.onclick = openNav;
    store_time.onclick = openStoreTime;
    store_time_sticky.onclick = openStoreTime;
    close_interface.onclick = close_Interface;

    wrenchs.forEach(wrench => {
        wrench.addEventListener('click', () => {
            wrench.onclick = openSettings;
        });
    });

    function openNav() {
        menu_burger.classList.add("active");
        document.body.classList.add("body_menu_burger");
        nav_phone.style.display = "block";
        storeTime_phone.style.display = "none";
        settings_phone.style.display = "none";
    }

    function openStoreTime() {
        menu_burger.classList.add("active");
        document.body.classList.add("body_menu_burger");
        nav_phone.style.display = "none";
        storeTime_phone.style.display = "flex";
        settings_phone.style.display = "none";
    }

    function openSettings() {
        menu_burger.classList.add("active");
        document.body.classList.add("body_menu_burger");
        nav_phone.style.display = "none";
        storeTime_phone.style.display = "none";
        settings_phone.style.display = "block";
    }

    function close_Interface() {
        menu_burger.classList.remove("active");
        document.body.classList.remove("body_menu_burger");
    }

    document.querySelectorAll('details').forEach(detail => {
        detail.addEventListener('toggle', function () {
            if (this.open) {
                document.querySelectorAll('details').forEach(otherDetail => {
                    if (otherDetail !== this) {
                        otherDetail.removeAttribute('open');
                        const otherSummary = otherDetail.querySelector('summary');
                        const otherPlusIcon = otherSummary.querySelector('.plus_menu_burger');
                        const otherMinusIcon = otherSummary.querySelector('.minus_menu_burger');
                        otherPlusIcon.style.display = 'block';
                        otherMinusIcon.style.display = 'none';
                    }
                });
            }

            const summary = this.querySelector('summary');
            const plusIcon = summary.querySelector('.plus_menu_burger');
            const minusIcon = summary.querySelector('.minus_menu_burger');

            if (this.open) {
                plusIcon.style.display = 'none';
                minusIcon.style.display = 'block';
            } else {
                plusIcon.style.display = 'block';
                minusIcon.style.display = 'none';
            }
        });
    });

    document.querySelectorAll('.input-container img, .span-container img').forEach(function(img) {
        img.addEventListener('click', function() {
            const container = this.closest('.input-container, .span-container');
            const input = container.querySelector('input');
            const span = container.querySelector('span.password-text');
            
            if (input) {
                if (input.type === 'password') {
                    input.type = 'text';
                    this.src = 'CSS/images/eye-off_password.svg';
                } else {
                    input.type = 'password';
                    this.src = 'CSS/images/eye_password.svg';
                }
            } else if (span) {
                const isHidden = span.textContent === '••••••••';
                const password = span.dataset.password;
    
                if (isHidden) {
                    span.textContent = password;
                    this.src = 'CSS/images/eye-off_password.svg';
                } else {
                    span.textContent = '••••••••';
                    this.src = 'CSS/images/eye_password.svg';
                }
            }
        });
    });
});