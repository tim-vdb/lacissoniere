<?php
include "session.php";
include "readImages.php";
include "readTexts.php";

$_SESSION['CurrentURL'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, interactive-widget=resizes-content">
    <meta name="description" content="La Cissonière, une Boucherie - Charcuterie - Artisanale, avec sa spécialité, le saucisson, elle effectue la fabrication, la vente sur place et ambulant de charcuterie et boucherie ainsi que tous autres objets se rattachant à ces activités. De plus elle pratique la vente sédentaire et ambulante de fromages ainsi que du vin et pour finir l'activité sédentaire et ambulante de traiteur et d'épicerie fine. ">
    <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/histoire.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="CSS/images/LOGO_CISSONIERE.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>La Cissonière et son histoire depuis 1988 à découvrir</title>
</head>

<body>

    <header>
    <?php if (isset($_SESSION['error_detected'])) {
            echo $_SESSION['error_detected'];
            unset($_SESSION['error_detected']);
        } ?>
        <?php if (isset($_SESSION['success_detected'])) {
            echo $_SESSION['success_detected'];
            unset($_SESSION['success_detected']);
        } ?>
        <div id="patte1"></div>
        <div id="patte2"></div>
        <div id="patte3"></div>
        <div id="Loader">
            <img src="CSS/images/LOGO_CISSONIERE.webp" id="Logo_loader" alt="Logo chargement La cissoniere">
            <div id="patte0_loader"></div>
            <div id="patte1_loader"></div>
            <div id="patte2_loader"></div>
            <div id="patte3_loader"></div>
            <div id="patte4_loader"></div>
            <div id="patte5_loader"></div>
            <div id="patte6_loader"></div>
            <div id="patte7_loader"></div>
            <div id="patte8_loader"></div>
            <div id="patte9_loader"></div>
        </div>
        <div id="PopUp">
        <h3>Voulez-vous rester connecté ?</h3>
        <div>
            <button id="NPopUp">Non</button>
            <button id="YPopUp">Oui</button>
        </div>
        </div>
        <ion-icon name="arrow-up" class="btnTop" id="btnTop"></ion-icon>
        <div id="Header1_div">
            <div id="Logo_div">
                <?php

                $logoHeader = array_filter($rows_images, function ($image) {
                    return $image['filename'] === 'logo_la_cissoniere_header';
                });
                $logoHeader = reset($logoHeader);

                if ($logoHeader) :
                ?>
                    <a href="/"><img src="<?php echo htmlspecialchars($logoHeader['filepath']). '?v=' . time(); ?>" id="Logo" alt="Logo La Cissoniere"></a>
                <?php else : ?>
                    <a href="/"><img id="Logo" src="CSS/images/LOGO_CISSONIERE.webp" alt="Logo La Cissoniere"></a>
                <?php endif; ?>
                <div class="image-container editPage" data-image-id="logo_la_cissoniere_header">
                    <button class="add-file-form">Modifier l'Image</button>
                    <div class="form-area"></div>
                </div>

            </div>
            <div class="centre_edit hideOnPhone">
                <?php
                $Titre_Header = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'Titre_Header';
                });
                $Titre_Header = reset($Titre_Header);

                if ($Titre_Header) :
                ?>
                    <h1 class="hideOnPhone"><?php echo htmlspecialchars($Titre_Header['content']); ?></h1>
                <?php else : ?>
                    <h1 class="hideOnPhone">La Cissonière</h1>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="Titre_Header">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div id="horaire_div">
                <div id="settings_div">
                    <img src="CSS/images/eye-off.svg" class="hideOnPhone settings eye_edit" style="cursor: pointer;" alt="Icon eye edit">
                    <a href="admins.php"><img src="CSS/images/administrator-solid_pc.svg" class="hideOnPhone settings" alt="Settings icon Administrator"></a>
                    <img src="CSS/images/logout.svg" class="hideOnPhone settings logout" style="cursor: pointer;" alt="Icon Se déconnecter">
                </div>
                <ion-icon name="menu" id="MenuBurger_enable"></ion-icon>
                <img src="CSS/images/Store_Time.svg" id="store_time" alt="Store Time">
                <img src="CSS/images/wrench.svg" style="margin-right: 10px; margin-top: 10px;" class="hideOnPC settings wrench" alt="Settings icon">
            </div>

        </div>
        <div class="centre_edit hideOnPC">
            <?php
            $Titre_Header = array_filter($rows_texts, function ($text) {
                return $text['name'] === 'Titre_Header';
            });
            $Titre_Header = reset($Titre_Header);

            if ($Titre_Header) :
            ?>
                <h1 class="hideOnPC"><?php echo htmlspecialchars($Titre_Header['content']); ?></h1>
            <?php else : ?>
                <h1 class="hideOnPC">La Cissonière</h1>
            <?php endif; ?>
            <div class="text-container editPage" data-text-id="Titre_Header">
                <button class="add-text-form">Modifier le Titre</button>
                <div class="form-area"></div>
            </div>
        </div>
        <div class="centre_edit hideOnPC">
            <?php
            $BCA1988 = array_filter($rows_texts, function ($text) {
                return $text['name'] === 'BCA1988';
            });
            $BCA1988 = reset($BCA1988);

            if ($BCA1988) :
            ?>
                <h4 class="hideOnPC"><?php echo htmlspecialchars($BCA1988['content']); ?></h4>
            <?php else : ?>
                <h4 class="hideOnPC">Boucherie - Charcuterie - Artisanale &nbsp; <span class="force-break"> depuis 1988</span>
                </h4>
            <?php endif; ?>
            <div class="text-container editPage" data-text-id="BCA1988">
                <button class="add-text-form">Modifier la phrase d'Accroche</button>
                <div class="form-area"></div>
            </div>
        </div>
        <div id="BCA1988" class="hideOnPhone">
            <div class="centreGauche_edit">
                <?php
                $BCA1988 = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'BCA1988';
                });
                $BCA1988 = reset($BCA1988);

                if ($BCA1988) :
                ?>
                    <h4><?php echo htmlspecialchars($BCA1988['content']); ?></h4>
                <?php else : ?>
                    <h4>Boucherie - Charcuterie - Artisanale depuis 1988</h4>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="BCA1988">
                    <button class="add-text-form">Modifier la phrase d'Accroche</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <h4 class="real_time"></h4>
        </div>
        <div id="Disponibilité" class="hideOnPhone">
            <div class="icon_market_dispo_marches">
                <div class="centreGauche_edit">
                    <?php
                    $icon_stand_details = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'icon_stand_details';
                    });
                    $icon_stand_details = reset($icon_stand_details);

                    if ($icon_stand_details) :
                    ?>
                        <div style="display: flex;">
                            <h4><?php echo htmlspecialchars($icon_stand_details['content']); ?></h4> &nbsp; <img src="CSS/images/market-stall_modif_beige.svg" alt="icon market beige">
                        </div>
                    <?php else : ?>
                        <div style="display: flex;">
                            <h4>Produits disponibles sur les Marchés :</h4> &nbsp; <img src="CSS/images/market-stall_modif_beige.svg" alt="icon market beige">
                        </div>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="icon_stand_details">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>
                </div>
            </div>
            <h4 class="h2_ouverture"><span class="disponible"></span> : La Cissonière <span class="ouverture"></span>
                <span class="ouverture_jour"></span>
                <span class="horaire_ouverture"></span>
            </h4>
        </div>
        <div id="Nav_div">
            <nav class="hideOnPhone">
                <ul class="first_ul_navbar">
                    <li class="container_links">
                        <a href="/" class="accueil">Accueil</a>
                    </li>
                    <li class="espacement_links">|</li>
                    <li class="container_links">
                        <a href="viande.php" class="viandes">Viande</a>
                        <ul>
                            <li>
                                <a href="viande.php#boeuf" class="link_viandes LinkProduits_redirect ">Bœuf</a>
                            </li>
                            <li class="li_market">
                                <a href="viande.php#porc" class="link_viandes LinkProduits_redirect">Porc</a>
                                <a href="viande.php#porc" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li class="li_market">
                                <a href="viande.php#volaille" class="link_viandes LinkProduits_redirect">Volaille</a>
                                <a href="viande.php#volaille" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li>
                                <a href="viande.php#veau" class="link_viandes LinkProduits_redirect">Veau</a>
                            </li>
                            <li>
                                <a href="viande.php#agneau" class="link_viandes LinkProduits_redirect">Agneau</a>
                            </li>
                        </ul>
                    </li>
                    <li class="espacement_links">|</li>
                    <li class="container_links">
                        <a href="charcuterie.php" class="charcuteries">Charcuterie</a>
                        <ul>
                            <li class="li_market">
                                <a href="charcuterie.php#charcuterie" class="link_charcuteries LinkProduits_redirect">Charcuterie</a>
                                <a href="charcuterie.php#charcuterie" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li class="li_market">
                                <a href="charcuterie.php#charcuterie_maison" class="link_charcuteries LinkProduits_redirect">Charcuterie
                                    Maison</a>
                                <a href="charcuterie.php#charcuterie_maison" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li class="li_market">
                                <a href="charcuterie.php#charcuterie_fraiche" class="link_charcuteries LinkProduits_redirect">Charcuterie
                                    Fraîche</a>
                                <a href="charcuterie.php#charcuterie_fraiche" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li class="li_market">
                                <a href="charcuterie.php#charcuterie_seche_maison" class="link_charcuteries LinkProduits_redirect">Charcuterie
                                    Sèche Maison</a>
                                <a href="charcuterie.php#charcuterie_seche_maison" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li>
                                <a href="charcuterie.php#traiteur" class="link_charcuteries redirectSimpleLink">Traiteur</a>
                            </li>
                        </ul>
                    </li>
                    <li class="espacement_links">|</li>
                    <li class="container_links">
                        <a href="produits-laitiers.php" class="laitier">Produits Laitiers</a>
                        <ul>
                            <li>
                                <a href="produits-laitiers.php#fromage_brebis" class="link_laitier LinkProduits_redirect">Fromage
                                    Brebis</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#fromage_chevre" class="link_laitier LinkProduits_redirect">Fromage
                                    Chèvre</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#fromage_vache" class="link_laitier LinkProduits_redirect">Fromage
                                    Vache</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#cremerie" class="link_laitier LinkProduits_redirect">Crèmerie</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#saison" class="link_laitier LinkProduits_redirect">Saison</a>
                            </li>
                        </ul>
                    </li>
                    <li class="espacement_links">|</li>
                    <li class="container_links">
                        <a href="epicerie-fine.php" class="epicerie">Épicerie Fine</a>
                        <ul>
                            <li>
                                <a href="epicerie-fine.php#feculents" class="link_epicerie LinkProduits_redirect">Féculents</a>
                            </li>
                            <li>
                                <a href="epicerie-fine.php#salee" class="link_epicerie LinkProduits_redirect">Salée</a>
                            </li>
                            <li>
                                <a href="epicerie-fine.php#sucree" class="link_epicerie LinkProduits_redirect">Sucrée</a>
                            </li>

                        </ul>
                    </li>
                    <li class="espacement_links">|</li>
                    <li class="container_links">
                        <a href="vin.php" class="vins">Cave à Vin</a>
                        <ul>
                            <li>
                                <a href="vin.php#vins_rouges" class="link_vins LinkProduits_redirect">Vin Rouge</a>
                            </li>
                            <li>
                                <a href="vin.php#vins_blancs" class="link_vins LinkProduits_redirect">Vin Blanc</a>
                            </li>
                            <li>
                                <a href="vin.php#vins_roses" class="link_vins LinkProduits_redirect">Vin Rosé</a>
                            </li>
                            <li>
                                <a href="vin.php#local" class="link_vins LinkProduits_redirect">Domaine Viticole Local</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="div_sticky_origin">
            <img src="CSS/images/wrench.svg" style="margin-right: 20px; margin-top: 0px;" class="hideOnPC settings wrench" alt="Settings icon">
                <img src="CSS/images/Store_Time.svg" id="store_time_sticky" class="hideOnPC" alt="Store Time">
                <ion-icon name="menu" id="MenuBurger_enable_sticky" class="hideOnPC"></ion-icon>
                <nav id="navbar_sticky" class="hideOnPhone">
                    <ul class="first_ul_navbar">
                        <li class="container_links">
                            <a href="/" class="accueil">Accueil</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="viande.php" class="viandes">Viande</a>
                            <ul>
                                <li>
                                    <a href="viande.php#boeuf" class="link_viandes LinkProduits_redirect ">Bœuf</a>
                                </li>
                                <li class="li_market">
                                    <a href="viande.php#porc" class="link_viandes LinkProduits_redirect">Porc</a>
                                    <a href="viande.php#porc" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                </li>
                                <li class="li_market">
                                    <a href="viande.php#volaille" class="link_viandes LinkProduits_redirect">Volaille</a>
                                    <a href="viande.php#volaille" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                </li>
                                <li>
                                    <a href="viande.php#veau" class="link_viandes LinkProduits_redirect">Veau</a>
                                </li>
                                <li>
                                    <a href="viande.php#agneau" class="link_viandes LinkProduits_redirect">Agneau</a>
                                </li>
                            </ul>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="charcuterie.php" class="charcuteries">Charcuterie</a>
                            <ul>
                                <li class="li_market">
                                    <a href="charcuterie.php#charcuterie" class="link_charcuteries LinkProduits_redirect">Charcuterie</a>
                                    <a href="charcuterie.php#charcuterie" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                </li>
                                <li class="li_market">
                                    <a href="charcuterie.php#charcuterie_maison" class="link_charcuteries LinkProduits_redirect">Charcuterie
                                        Maison</a>
                                    <a href="charcuterie.php#charcuterie_maison" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                </li>
                                <li class="li_market">
                                    <a href="charcuterie.php#charcuterie_fraiche" class="link_charcuteries LinkProduits_redirect">Charcuterie
                                        Fraîche</a>
                                    <a href="charcuterie.php#charcuterie_fraiche" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                </li>
                                <li class="li_market">
                                    <a href="charcuterie.php#charcuterie_seche_maison" class="link_charcuteries LinkProduits_redirect">Charcuterie
                                        Sèche Maison</a>
                                    <a href="charcuterie.php#charcuterie_seche_maison" class="icon_market_link LinkProduits_redirect"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                </li>
                                <li>
                                    <a href="charcuterie.php#traiteur" class="link_charcuteries redirectSimpleLink">Traiteur</a>
                                </li>
                            </ul>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="produits-laitiers.php" class="laitier">Produits Laitiers</a>
                            <ul>
                                <li>
                                    <a href="produits-laitiers.php#fromage_brebis" class="link_laitier LinkProduits_redirect">Fromage Brebis</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#fromage_chevre" class="link_laitier LinkProduits_redirect">Fromage Chèvre</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#fromage_vache" class="link_laitier LinkProduits_redirect">Fromage Vache</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#cremerie" class="link_laitier LinkProduits_redirect">Crèmerie</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#saison" class="link_laitier LinkProduits_redirect">Saison</a>
                                </li>
                            </ul>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="epicerie-fine.php" class="epicerie">Épicerie Fine</a>
                            <ul>
                                <li>
                                    <a href="epicerie-fine.php#feculents" class="link_epicerie LinkProduits_redirect">Féculents</a>
                                </li>
                                <li>
                                    <a href="epicerie-fine.php#salee" class="link_epicerie LinkProduits_redirect">Salée</a>
                                </li>
                                <li>
                                    <a href="epicerie-fine.php#sucree" class="link_epicerie LinkProduits_redirect">Sucrée</a>
                                </li>

                            </ul>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="vin.php" class="vins">Cave à Vin</a>
                            <ul>
                                <li>
                                    <a href="vin.php#vins_rouges" class="link_vins LinkProduits_redirect">Vin Rouge</a>
                                </li>
                                <li>
                                    <a href="vin.php#vins_blancs" class="link_vins LinkProduits_redirect">Vin Blanc</a>
                                </li>
                                <li>
                                    <a href="vin.php#vins_roses" class="link_vins LinkProduits_redirect">Vin Rosé</a>
                                </li>
                                <li>
                                    <a href="vin.php#local" class="link_vins LinkProduits_redirect">Domaine Viticole Local</a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div id="menu_burger" class="hideOnPC">
            <a id="close_interface" class="close">&times;</a>

            <div id="nav_phone">
                <div class="centreGauche_edit">

                    <?php
                    $icon_stand_details = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'icon_stand_details';
                    });
                    $icon_stand_details = reset($icon_stand_details);

                    if ($icon_stand_details) :
                    ?>
                        <div style="display: flex;">
                            <p id="marches_nav_phone"><?php echo htmlspecialchars($icon_stand_details['content']); ?> <img src="CSS/images/market-stall_modif_beige.svg" alt="icon market beige"></p>
                        </div>
                    <?php else : ?>
                        <div style="display: flex;">
                            <p id="marches_nav_phone">Produits disponibles sur les Marchés : <img src="CSS/images/market-stall_modif_beige.svg" alt="icon market beige"></p>
                        </div>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="icon_stand_details">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>
                </div>
                <ul>
                    <li id="li_accueil_menu_burger">
                        <a href="/" class="accueil">Accueil &#10153;</a>
                    </li>
                    <li>
                        <details>
                            <summary>
                                <p>Viande <svg class="plus_menu_burger" width="24" height="24">
                                        <path fill="#F1EBE1" fill-rule="evenodd" d="M13.006 10.995v-5.99a1.004 1.004 0 1 0-2.01 0v5.99h-5.99a1.004 1.004 0 1 0 0 2.01h5.99v5.99a1.004 1.004 0 1 0 2.01 0v-5.99h5.989a1.004 1.004 0 1 0 0-2.01h-5.99z"></path>
                                    </svg>
                                    <svg class="minus_menu_burger" width="24" height="24" style="display: none;">
                                        <path fill="#F1EBE1" d="M18.4 11H5.6c-.884 0-1.6.448-1.6 1s.716 1 1.6 1h12.8c.884 0 1.6-.448 1.6-1s-.716-1-1.6-1z"></path>
                                    </svg>
                                </p>
                            </summary>
                            <ul>
                                <li>
                                    <a href="viande.php">Viande &#10153;</a>
                                </li>
                                <li>
                                    <a href="viande.php#boeuf" class="LinkProduits_redirect">Section Bœuf &#10153;</a>
                                </li>
                                <li>
                                    <a href="viande.php#porc" class="LinkProduits_redirect">Section Porc &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="viande.php#volaille" class="LinkProduits_redirect">Section Volaille &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="viande.php#veau" class="LinkProduits_redirect">Section Veau &#10153;</a>
                                </li>
                                <li>
                                    <a href="viande.php#agneau" class="LinkProduits_redirect">Section Agneau &#10153;</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>
                                <p>Charcuterie <svg class="plus_menu_burger" width="24" height="24">
                                        <path fill="#F1EBE1" fill-rule="evenodd" d="M13.006 10.995v-5.99a1.004 1.004 0 1 0-2.01 0v5.99h-5.99a1.004 1.004 0 1 0 0 2.01h5.99v5.99a1.004 1.004 0 1 0 2.01 0v-5.99h5.989a1.004 1.004 0 1 0 0-2.01h-5.99z"></path>
                                    </svg>
                                    <svg class="minus_menu_burger" width="24" height="24" style="display: none;">
                                        <path fill="#F1EBE1" d="M18.4 11H5.6c-.884 0-1.6.448-1.6 1s.716 1 1.6 1h12.8c.884 0 1.6-.448 1.6-1s-.716-1-1.6-1z"></path>
                                    </svg>
                                </p>
                            </summary>
                            <ul>
                                <li>
                                    <a href="charcuterie.php">Charcuterie &#10153;</a>
                                </li>
                                <li>
                                    <a href="charcuterie.php#charcuterie" class="LinkProduits_redirect">Section Charcuterie &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="charcuterie.php#charcuterie_maison" class="LinkProduits_redirect">Section Charcuterie Maison &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="charcuterie.php#charcuterie_fraiche" class="LinkProduits_redirect">Section Charcuterie Fraîche &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="charcuterie.php#charcuterie_seche_maison" class="LinkProduits_redirect">Section Charcuterie Sèche Maison &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="charcuterie.php#traiteur" class="LinkProduits_redirect">Section Traiteur &#10153;</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>
                                <p>Produits Laitiers <svg class="plus_menu_burger" width="24" height="24">
                                        <path fill="#F1EBE1" fill-rule="evenodd" d="M13.006 10.995v-5.99a1.004 1.004 0 1 0-2.01 0v5.99h-5.99a1.004 1.004 0 1 0 0 2.01h5.99v5.99a1.004 1.004 0 1 0 2.01 0v-5.99h5.989a1.004 1.004 0 1 0 0-2.01h-5.99z"></path>
                                    </svg>
                                    <svg class="minus_menu_burger" width="24" height="24" style="display: none;">
                                        <path fill="#F1EBE1" d="M18.4 11H5.6c-.884 0-1.6.448-1.6 1s.716 1 1.6 1h12.8c.884 0 1.6-.448 1.6-1s-.716-1-1.6-1z"></path>
                                    </svg>
                                </p>
                            </summary>
                            <ul>
                                <li>
                                    <a href="produits-laitiers.php">Produits Laitiers &#10153;</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#fromage_brebis" class="LinkProduits_redirect">Section Fromage Brebis &#10153;</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#fromage_chevre" class="LinkProduits_redirect">Section Fromage Chèvre &#10153;</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#fromage_vache" class="LinkProduits_redirect">Section Fromage Vache &#10153;</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#cremerie" class="LinkProduits_redirect">Section Crèmerie &#10153;</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#saison" class="LinkProduits_redirect">Section Saison &#10153;</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>
                                <p>Épicerie Fine <svg class="plus_menu_burger" width="24" height="24">
                                        <path fill="#F1EBE1" fill-rule="evenodd" d="M13.006 10.995v-5.99a1.004 1.004 0 1 0-2.01 0v5.99h-5.99a1.004 1.004 0 1 0 0 2.01h5.99v5.99a1.004 1.004 0 1 0 2.01 0v-5.99h5.989a1.004 1.004 0 1 0 0-2.01h-5.99z"></path>
                                    </svg>
                                    <svg class="minus_menu_burger" width="24" height="24" style="display: none;">
                                        <path fill="#F1EBE1" d="M18.4 11H5.6c-.884 0-1.6.448-1.6 1s.716 1 1.6 1h12.8c.884 0 1.6-.448 1.6-1s-.716-1-1.6-1z"></path>
                                    </svg>
                                </p>
                            </summary>
                            <ul>
                                <li>
                                    <a href="epicerie-fine.php">Épicerie Fine &#10153;</a>
                                </li>
                                <li>
                                    <a href="epicerie-fine.php#feculents" class="LinkProduits_redirect">Section Féculents &#10153;</a>
                                </li>
                                <li>
                                    <a href="epicerie-fine.php#salee" class="LinkProduits_redirect">Section Salée &#10153;</a>
                                </li>
                                <li>
                                    <a href="epicerie-fine.php#sucree" class="LinkProduits_redirect">Section Sucrée &#10153;</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>
                                <p>Cave à vin <svg class="plus_menu_burger" width="24" height="24">
                                        <path fill="#F1EBE1" fill-rule="evenodd" d="M13.006 10.995v-5.99a1.004 1.004 0 1 0-2.01 0v5.99h-5.99a1.004 1.004 0 1 0 0 2.01h5.99v5.99a1.004 1.004 0 1 0 2.01 0v-5.99h5.989a1.004 1.004 0 1 0 0-2.01h-5.99z"></path>
                                    </svg>
                                    <svg class="minus_menu_burger" width="24" height="24" style="display: none;">
                                        <path fill="#F1EBE1" d="M18.4 11H5.6c-.884 0-1.6.448-1.6 1s.716 1 1.6 1h12.8c.884 0 1.6-.448 1.6-1s-.716-1-1.6-1z"></path>
                                    </svg>
                                </p>
                            </summary>
                            <ul>
                                <li>
                                    <a href="vin.php">Cave à Vin &#10153;</a>
                                </li>
                                <li>
                                    <a href="vin.php#vins_rouges" class="LinkProduits_redirect">Section Vin Rouge &#10153;</a>
                                </li>
                                <li>
                                    <a href="vin.php#vins_blancs" class="LinkProduits_redirect">Section Vin Blanc &#10153;</a>
                                </li>
                                <li>
                                    <a href="vin.php#vins_roses" class="LinkProduits_redirect">Section Vin Rosé &#10153;</a>
                                </li>
                                <li>
                                    <a href="vin.php#local" class="LinkProduits_redirect">Section Domaine Viticole Local &#10153;</a>
                                </li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
            <div id="storeTime_phone">
                <h3 class="real_time"></h3>
                <h3 class="h2_ouverture"><span class="disponible"></span> : La Cissonière <span class="ouverture"></span> <span class="ouverture_jour"></span>
                    <span class="horaire_ouverture"></span>
                </h3>
            </div>
            <div id="settings_phone">
                <div>
                    <img src="CSS/images/eye-off.svg" class="hideOnPC settings eye_edit" alt="Icon eye edit">
                    <img src="CSS/images/logout.svg" class="hideOnPC settings logout" alt="Icon Se déconnecter">
                </div>
                <a href="admins.php">Gérer les Administrateurs &#10153;</a>
            </div>
        </div>

    </header>

    <main>
        <section id="section_1">
            <div class="histoire">

                <?php
                $histoire_titre = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'histoire_titre';
                });
                $histoire_titre = reset($histoire_titre);

                if ($histoire_titre) :
                ?>
                    <h3><?php echo htmlspecialchars($histoire_titre['content']); ?></h3>
                <?php else : ?>
                    <h3>Histoire de La Cissonière</h3>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="histoire_titre">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>

                <div class="centreGauche_edit">
                    <?php
                    $histoire_para1 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'histoire_para1';
                    });
                    $histoire_para1 = reset($histoire_para1);

                    if ($histoire_para1) :
                    ?>
                        <p><?php echo htmlspecialchars($histoire_para1['content']); ?></p>
                    <?php else : ?>
                        <p>Elle a débuté en 1988 avec Colette et Christophe GUISCHET tous deux âgés de 18 et 22 ans, passionnés
                            de cuisine et de boucherie décident de reprendre la boucherie du village de Saint-Paulet-de-Caisson.
                        </p>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="histoire_para1">
                        <button class="add-text-form">Modifier le Paragraphe</button>
                        <div class="form-area"></div>
                    </div>
                </div>

                <div class="centreGauche_edit">
                    <?php
                    $histoire_para2 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'histoire_para2';
                    });
                    $histoire_para2 = reset($histoire_para2);

                    if ($histoire_para2) :
                    ?>
                        <p><?php echo htmlspecialchars($histoire_para2['content']); ?></p>
                    <?php else : ?>
                        <p>Au début des années 2000, ils décidèrent de céder leur boucherie de village afin de se consacrer
                            pleinement à la spécialité de la maison « le saucisson », spécialité qui fut plusieurs fois
                            récompensée ! Il sera ensuite vendu aux boucheries de la région ainsi que sur le marché de
                            Pont-Saint-Esprit. Et c'est par ce biais que La Cissonière fut créé.</p>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="histoire_para2">
                        <button class="add-text-form">Modifier le Paragraphe</button>
                        <div class="form-area"></div>
                    </div>
                </div>
                <div class="centreGauche_edit">
                    <?php
                    $histoire_para3 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'histoire_para3';
                    });
                    $histoire_para3 = reset($histoire_para3);

                    if ($histoire_para3) :
                    ?>
                        <p><?php echo htmlspecialchars($histoire_para3['content']); ?></p>
                    <?php else : ?>
                        <p>En 2015, leur fils Alexis, après avoir passé son diplôme de charcutier participe au projet familial.
                            Puis par la suite, ils décidèrent tous les trois d'agrandir leur atelier de fabrication afin de
                            diversifier la gamme des produits. Et de plus, vendre sur les marchés de plusieurs régions telles
                            que la Drôme, du Gard et du Vaucluse, avec une charcuterie de qualité et surtout faite maison.</p>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="histoire_para3">
                        <button class="add-text-form">Modifier le Paragraphe</button>
                        <div class="form-area"></div>
                    </div>
                </div>

                <div class="centreGauche_edit">
                    <?php
                    $histoire_para4 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'histoire_para4';
                    });
                    $histoire_para4 = reset($histoire_para4);

                    if ($histoire_para4) :
                    ?>
                        <p><?php echo htmlspecialchars($histoire_para4['content']); ?></p>
                    <?php else : ?>
                        <p>Deux ans plus tard, Florian CHEVEE, jeune Charcutier du nord de la France et véritable amoureux de
                            son métier, décide de rejoindre la maison GUISCHET où il apportera son dynamisme et son
                            savoir-faire.</p>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="histoire_para4">
                        <button class="add-text-form">Modifier le Paragraphe</button>
                        <div class="form-area"></div>
                    </div>
                </div>

                <div class="centreGauche_edit">
                    <?php
                    $histoire_para5 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'histoire_para5';
                    });
                    $histoire_para5 = reset($histoire_para5);

                    if ($histoire_para5) :
                    ?>
                        <p><?php echo htmlspecialchars($histoire_para5['content']); ?></p>
                    <?php else : ?>
                        <p>En 2022, Alexis s'associe avec Florian, le chef charcutier de la maison, afin de concrétiser un
                            projet qu'ils avaient en commun, ouvrir une Boucherie - Charcuterie - Artisanale. Une boucherie où
                            l'on travaillerait une viande de qualité dans le respect de l'animal.</p>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="histoire_para5">
                        <button class="add-text-form">Modifier le Paragraphe</button>
                        <div class="form-area"></div>
                    </div>
                </div>
            </div>
            <div class="photo">

                <div class="centre_edit">
                    <?php
                    $histoire_image = array_filter($rows_images, function ($image) {
                        return $image['filename'] === 'histoire_image';
                    });
                    $histoire_image = reset($histoire_image);

                    if ($histoire_image) :
                    ?>
                        <img src="<?php echo htmlspecialchars($histoire_image['filepath']). '?v=' . time(); ?>" alt="Devanture Boutique">
                    <?php else : ?>
                        <img src="CSS/images/devanture_opti.jpg" alt="Devanture Boutique">
                    <?php endif; ?>
                    <div class="image-container editPage" data-image-id="histoire_image">
                        <button class="add-file-form">Modifier l'Image</button>
                        <div class="form-area"></div>
                    </div>
                </div>
                <div class="centre_edit">
                    <?php
                    $histoire_DetailsImage = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'histoire_DetailsImage';
                    });
                    $histoire_DetailsImage = reset($histoire_DetailsImage);

                    if ($histoire_DetailsImage) :
                    ?>
                        <p><?php echo htmlspecialchars($histoire_DetailsImage['content']); ?></p>
                    <?php else : ?>
                        <p>De gauche à droite : Christophe GUISCHET, Colette GUISCHET, Florian CHEVEE, Alexis GUISCHET.</p>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="histoire_DetailsImage">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <div id="middle" class="hideOnPhone">
            <div id="infos_contacts">
                <?php
                $infos_contacts = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'infos_contacts';
                });
                $infos_contacts = reset($infos_contacts);

                if ($infos_contacts) :
                ?>
                    <h4><?php echo htmlspecialchars($infos_contacts['content']); ?></h4>
                <?php else : ?>
                    <h4>Infos Contacts :</h4>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="infos_contacts">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
                <?php
                $address = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'address';
                });
                $address = reset($address);

                if ($address) :
                ?>
                    <p><?php echo htmlspecialchars($address['content']); ?></p>
                <?php else : ?>
                    <p>Adresse : Quartier Les Combes 84840, Lamotte-du-Rhône</p>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="address">
                    <button class="add-text-form">Modifier l'Adresse</button>
                    <div class="form-area"></div>
                </div>
                <?php
                $number = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'number';
                });
                $number = reset($number);

                if ($number) :
                ?>
                    <p><?php echo htmlspecialchars($number['content']); ?></p>
                <?php else : ?>
                    <p>Tel : 06.18.24.71.52</p>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="number">
                    <button class="add-text-form">Modifier le Numéro</button>
                    <div class="form-area"></div>
                </div>
                <?php
                $email = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'email';
                });
                $email = reset($email);

                if ($email) :
                ?>
                    <p><?php echo htmlspecialchars($email['content']); ?></p>
                <?php else : ?>
                    <p>Mail : lacissoniere@hotmail.com</p>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="email">
                    <button class="add-text-form">Modifier l'Email</button>
                    <div class="form-area"></div>
                </div>
                <div class="medias_icons">
                    <a target="_blank" href="https://www.facebook.com/CharcuterieLaCissoniere/?locale=fr_FR"><img src="CSS/images/facebook-color.svg" alt="Icon réseau social 1"></a>
<a target="_blank" href="https://www.instagram.com/explore/locations/751219421565439/boucherie-la-cissoniere/"><img src="CSS/images/instagram.svg" alt="Icon réseau social 2"></a>
                    <div class="centre_edit">
                        <?php
                        $email_icon = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'email_icon';
                        });
                        $email_icon = reset($email_icon);

                        if ($email_icon) :
                        ?>
                            <a href="mailto:<?php echo htmlspecialchars($email_icon['content']); ?>"><ion-icon name="mail-outline"></ion-icon></a>
                        <?php else : ?>
                            <a href="mailto:lacissoniere@hotmail.com"><ion-icon name="mail-outline"></ion-icon></a>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="email_icon">
                            <button class="add-text-form">Modifier l'Email</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="links">
                <?php
                $infos_contacts = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'infos_contacts';
                });
                $infos_contacts = reset($infos_contacts);

                if ($infos_contacts) :
                ?>
                    <h4><?php echo htmlspecialchars($infos_contacts['content']); ?></h4>
                <?php else : ?>
                    <h4>Liens Utiles :</h4>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="infos_contacts">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
                <?php
                $qui_sommes_nous_link_footer = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'qui_sommes_nous_link_footer';
                });
                $qui_sommes_nous_link_footer = reset($qui_sommes_nous_link_footer);

                if ($qui_sommes_nous_link_footer) :
                ?>
                    <a class="btnTop"><?php echo htmlspecialchars($qui_sommes_nous_link_footer['content']); ?></a>
                <?php else : ?>
                    <a class="btnTop">Qui Sommes Nous ?</a>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="qui_sommes_nous_link_footer">
                    <button class="add-text-form">Modifier le Texte</button>
                    <div class="form-area"></div>
                </div>
                <?php
                $link_marchés_footer = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'link_marchés_footer';
                });
                $link_marchés_footer = reset($link_marchés_footer);

                if ($link_marchés_footer) :
                ?>
                    <a href="marches.php"><?php echo htmlspecialchars($link_marchés_footer['content']); ?></a>
                <?php else : ?>
                    <a href="marches.php">Voir Les Marchés</a>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="link_marchés_footer">
                    <button class="add-text-form">Modifier le Texte</button>
                    <div class="form-area"></div>
                </div>

                <?php
                $partenaire_link = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'partenaire_link';
                });
                $partenaire_link = reset($partenaire_link);

                $partenaire_text = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'partenaire_text';
                });
                $partenaire_text = reset($partenaire_text);
                ?>

                <a href="<?php echo htmlspecialchars($partenaire_link ? $partenaire_link['content'] : 'https://www.lavieadugoutenhauteloire.fr/fiche.php?id_fichedetail=2937'); ?>">
                    <?php echo htmlspecialchars($partenaire_text ? $partenaire_text['content'] : 'EARL Le Porc De Stevenson'); ?>
                </a>

                <div class="text-container editPage" data-text-id="partenaire_text">
                    <button class="add-text-form">Modifier le Texte</button>
                    <div class="form-area"></div>
                </div>

                <div class="text-container editPage" data-text-id="partenaire_link">
                    <button class="add-text-form">Modifier le Lien</button>
                    <div class="form-area"></div>
                </div>

                <?php
                $terms_of_use_link = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'terms_of_use_link';
                });
                $terms_of_use_link = reset($terms_of_use_link);

                if ($terms_of_use_link) :
                ?>
                    <a href="mentions-legales.php"><?php echo htmlspecialchars($terms_of_use_link['content']); ?></a>
                <?php else : ?>
                    <a href="mentions-legales.php">Mentions Légales</a>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="terms_of_use_link">
                    <button class="add-text-form">Modifier le Texte</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div id="logo_proprio">
                <?php

                $logoFooter = array_filter($rows_images, function ($image) {
                    return $image['filename'] === 'logo_la_cissoniere_footer';
                });
                $logoFooter = reset($logoFooter);

                if ($logoFooter) :
                ?>
                    <a href="/"><img id="logo_footer" src="<?php echo htmlspecialchars($logoFooter['filepath']). '?v=' . time(); ?>" alt="Logo La Cissoniere"></a>
                <?php else : ?>
                    <a href="/"><img id="logo_footer" src="CSS/images/LOGO_CISSONIERE.webp" alt="Logo La Cissonière"></a>
                <?php endif; ?>
                <div class="image-container editPage" data-image-id="logo_la_cissoniere_footer">
                    <button class="add-file-form">Modifier l'Image</button>
                    <div class="form-area"></div>
                </div>
                <div class="centre_edit">
                    <?php
                    $login = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'login';
                    });
                    $login = reset($login);

                    if ($login) :
                    ?>
                        <a id="proprio" href="connexion.php"><?php echo htmlspecialchars($login['content']); ?></a>
                    <?php else : ?>
                        <a id="proprio" href="connexion.php">Je suis le Propriétaire</a>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="login">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="middle_phone" class="hideOnPC">
            <div id="infos_contacts">

                <?php
                $infos_contacts = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'infos_contacts';
                });
                $infos_contacts = reset($infos_contacts);

                if ($infos_contacts) :
                ?>
                    <h4><?php echo htmlspecialchars($infos_contacts['content']); ?></h4>
                <?php else : ?>
                    <h4>Infos Contacts :</h4>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="infos_contacts">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>

                <?php
                $address = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'address';
                });
                $address = reset($address);

                if ($address) :
                ?>
                    <p><?php echo htmlspecialchars($address['content']); ?></p>
                <?php else : ?>
                    <p>Adresse : Quartier Les Combes 84840, Lamotte-du-Rhône</p>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="address">
                    <button class="add-text-form">Modifier l'Adresse</button>
                    <div class="form-area"></div>
                </div>

                <?php
                $number = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'number';
                });
                $number = reset($number);

                if ($number) :
                ?>
                    <p><span class="force-break"><?php echo htmlspecialchars($number['content']); ?></span></p>
                <?php else : ?>
                    <p><span class="force-break">Tel : 06.18.24.71.52</span></p>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="number">
                    <button class="add-text-form">Modifier le Numéro</button>
                    <div class="form-area"></div>
                </div>

                <?php
                $email = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'email';
                });
                $email = reset($email);

                if ($email) :
                ?>
                    <p><span class="force-break"><?php echo htmlspecialchars($email['content']); ?></span></p>
                <?php else : ?>
                    <p><span class="force-break">Mail : lacissoniere@hotmail.com</span></p>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="email">
                    <button class="add-text-form">Modifier l'Email</button>
                    <div class="form-area"></div>
                </div>
                <div class="medias_icons">
                    <a target="_blank" href="https://www.facebook.com/CharcuterieLaCissoniere/?locale=fr_FR"><img src="CSS/images/facebook-color.svg" alt="Icon réseau social 1"></a>
<a target="_blank" href="https://www.instagram.com/explore/locations/751219421565439/boucherie-la-cissoniere/"><img src="CSS/images/instagram.svg" alt="Icon réseau social 2"></a>
                    <div class="centre_edit">
                        <?php
                        $email_icon = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'email_icon';
                        });
                        $email_icon = reset($email_icon);

                        if ($email_icon) :
                        ?>
                            <a href="mailto:<?php echo htmlspecialchars($email_icon['content']); ?>"><ion-icon name="mail-outline"></ion-icon></a>
                        <?php else : ?>
                            <a href="mailto:lacissoniere@hotmail.com"><ion-icon name="mail-outline"></ion-icon></a>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="email_icon">
                            <button class="add-text-form">Modifier l'Email</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="links_logo_phone">
                <div id="links">

                    <?php
                    $infos_contacts = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'infos_contacts';
                    });
                    $infos_contacts = reset($infos_contacts);

                    if ($infos_contacts) :
                    ?>
                        <h4><?php echo htmlspecialchars($infos_contacts['content']); ?></h4>
                    <?php else : ?>
                        <h4>Liens Utiles :</h4>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="infos_contacts">
                        <button class="add-text-form">Modifier le Titre</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $qui_sommes_nous_link_footer = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'qui_sommes_nous_link_footer';
                    });
                    $qui_sommes_nous_link_footer = reset($qui_sommes_nous_link_footer);

                    if ($qui_sommes_nous_link_footer) :
                    ?>
                        <a class="btnTop"><?php echo htmlspecialchars($qui_sommes_nous_link_footer['content']); ?></a>
                    <?php else : ?>
                        <a class="btnTop">Qui Sommes Nous ?</a>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="qui_sommes_nous_link_footer">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $link_marchés_footer = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'link_marchés_footer';
                    });
                    $link_marchés_footer = reset($link_marchés_footer);

                    if ($link_marchés_footer) :
                    ?>
                        <a href="marches.php"><?php echo htmlspecialchars($link_marchés_footer['content']); ?></a>
                    <?php else : ?>
                        <a href="marches.php">Voir Les Marchés</a>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="link_marchés_footer">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $partenaire_link = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'partenaire_link';
                    });
                    $partenaire_link = reset($partenaire_link);

                    $partenaire_text = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'partenaire_text';
                    });
                    $partenaire_text = reset($partenaire_text);
                    ?>

                    <a href="<?php echo htmlspecialchars($partenaire_link ? $partenaire_link['content'] : 'https://www.lavieadugoutenhauteloire.fr/fiche.php?id_fichedetail=2937'); ?>">
                        <?php echo htmlspecialchars($partenaire_text ? $partenaire_text['content'] : 'EARL Le Porc De Stevenson'); ?>
                    </a>

                    <div class="text-container editPage" data-text-id="partenaire_text">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <div class="text-container editPage" data-text-id="partenaire_link">
                        <button class="add-text-form">Modifier le Lien</button>
                        <div class="form-area"></div>
                    </div>


                    <?php
                    $terms_of_use_link = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'terms_of_use_link';
                    });
                    $terms_of_use_link = reset($terms_of_use_link);

                    if ($terms_of_use_link) :
                    ?>
                        <a href="mentions-legales.php"><?php echo htmlspecialchars($terms_of_use_link['content']); ?></a>
                    <?php else : ?>
                        <a href="mentions-legales.php">Mentions Légales</a>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="terms_of_use_link">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>
                </div>

                <div id="logo_proprio">
                    <?php
                    $logoFooter = array_filter($rows_images, function ($image) {
                        return $image['filename'] === 'logo_la_cissoniere_footer';
                    });
                    $logoFooter = reset($logoFooter);

                    if ($logoFooter) :
                    ?>
                        <a href="/"><img id="logo_footer" src="<?php echo htmlspecialchars($logoFooter['filepath']). '?v=' . time(); ?>" alt="Logo La Cissoniere"></a>
                    <?php else : ?>
                        <a href="/"><img id="logo_footer" src="CSS/images/LOGO_CISSONIERE.webp" alt="Logo La Cissonière"></a>
                    <?php endif; ?>
                    <div class="image-container editPage" data-image-id="logo_la_cissoniere_footer">
                        <button class="add-file-form">Modifier l'Image</button>
                        <div class="form-area"></div>
                    </div>

                    <div class="centre_edit">
                        <?php
                        $login = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'login';
                        });
                        $login = reset($login);

                        if ($login) :
                        ?>
                            <a id="proprio" href="connexion.php"><?php echo htmlspecialchars($login['content']); ?></a>
                        <?php else : ?>
                            <a id="proprio" href="connexion.php">Je suis le Propriétaire</a>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="login">
                            <button class="add-text-form">Modifier le Texte</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php
        $noCommercial = array_filter($rows_texts, function ($text) {
            return $text['name'] === 'noCommercial';
        });
        $noCommercial = reset($noCommercial);

        if ($noCommercial) :
        ?>
            <p><?php echo htmlspecialchars($noCommercial['content']); ?></p>
        <?php else : ?>
            <p>Ce site n'est pas un site marchand. Il a pour but d'informer et de faire découvrir la Cissonière via ses
                produits proposés en magasin et sur les marchés.</p>
        <?php endif; ?>
        <div class="text-container editPage" data-text-id="noCommercial">
            <button class="add-text-form">Modifier le Paragraphe</button>
            <div class="form-area"></div>
        </div>
        <p>© Copyright <span id="year_footer"></span> La Cissonière Tous droits réservés</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="JS/main.js"></script>
    <script src="JS/horaire.js"></script>
</body>

</html>