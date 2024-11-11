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
    <link rel="shortcut icon" href="CSS/images/LOGO_CISSONIERE.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>Découvrir les mentions légales de La Cissonière</title>
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
    <main style="padding: 25px;">

            <h2 style="text-align: center;">Voici les mentions légales de La Cissonière</h2>

            <h3>Définitions</h3>
            <p><b>Client :</b> tout professionnel ou personne physique capable au sens des articles 1123 et suivants
                du
                Code
                civil, ou personne morale, qui visite le Site objet des présentes conditions générales.<br>
                <b>Prestations et Services :</b> <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>
                met à
                disposition des Clients :
            </p>

            <p><b>Contenu :</b> Ensemble des éléments constituants l'information présente sur le Site, notamment
                textes
                -
                images
                - vidéos.</p>

            <p><b>Informations clients :</b> Ci après dénommé « Information (s) » qui correspondent à l'ensemble des
                données
                personnelles susceptibles d'être détenues par <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> pour la gestion de votre
                compte,
                de
                la
                gestion de la relation client et à des fins d'analyses et de statistiques.</p>


            <p><b>Utilisateur :</b> Internaute se connectant, utilisant le site susnommé.</p>
            <p><b>Informations personnelles :</b> « Les informations qui permettent, sous quelque forme que ce soit,
                directement
                ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la
                loi n°
                78-17
                du 6 janvier 1978).</p>
            <p>Les termes « données à caractère personnel », « personne concernée », « sous traitant » et « données
                sensibles »
                ont le sens défini par le Règlement Général sur la Protection des Données (RGPD : n° 2016-679)</p>

            <h2 style="text-align: center;">1. Présentation du site internet.</h2>
            <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie
                numérique, il
                est
                précisé aux utilisateurs du site internet <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>
                l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
            </p>
            
                <div class="centreGauche_edit">
                        <?php
                        $details_propriétaire = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'details_propriétaire';
                        });
                        $details_propriétaire = reset($details_propriétaire);

                        if ($details_propriétaire) :
                        ?>
                            <p><?php echo htmlspecialchars($details_propriétaire['content']); ?></p> 
                        <?php else : ?>
                            <p><strong>Propriétaire</strong> : La Cissonière Capital social de 50480€ ,Immatriculation SIRET: 822 363 883 R.C.S. Nimes - 975A Rte de Barjac, 30130 Saint-Paulet-de-Caisson</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="details_propriétaire">
                            <button class="add-text-form">Modifier le Texte</button>
                            <div class="form-area"></div>
                        </div>
                    </div>

                
                <div class="centreGauche_edit">
                        <?php
                        $details_resp_publi = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'details_resp_publi';
                        });
                        $details_resp_publi = reset($details_resp_publi);

                        if ($details_resp_publi) :
                        ?>
                            <p><?php echo htmlspecialchars($details_resp_publi['content']); ?></p> 
                        <?php else : ?>
                            <p><strong>Responsable publication</strong> : Alexis Guischet - lacissoniere@hotmail;com</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="details_resp_publi">
                            <button class="add-text-form">Modifier le Texte</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                <p>Le responsable publication est une personne physique ou une personne morale.</p>
                <p><strong>Webmaster</strong> : Timothée Van Den Bosch - <a href="https://www.linkedin.com/in/timothee-van-den-bosch/" target="_blank">Le Linkedin de Timothée VDB</a></p>
                <div class="centreGauche_edit">
                        <?php
                        $details_hébergeur = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'details_hébergeur';
                        });
                        $details_hébergeur = reset($details_hébergeur);

                        if ($details_hébergeur) :
                        ?>
                            <p><?php echo htmlspecialchars($details_hébergeur['content']); ?></p> 
                        <?php else : ?>
                            <p><strong>Hébergeur</strong> : ovh - 2 rue Kellermann 59100 Roubaix 1007</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="details_hébergeur">
                            <button class="add-text-form">Modifier le Texte</button>
                            <div class="form-area"></div>
                        </div>
                    </div>

            <div ng-bind-html="linkHTML">
                <p>Ce modèle de mentions légales est proposé par le <a href="https://fr.orson.io/1371/generateur-mentions-legales" title="générateur de mentions légales RGPD d">générateur de mentions légales RGPD
                        d'Orson.io</a>
                </p>
            </div>



            <h3>2. Conditions générales d'utilisation du site et des services proposés.</h3>

            <p>Le Site constitue une œuvre de l'esprit protégée par les dispositions du Code de la Propriété
                Intellectuelle
                et
                des Réglementations Internationales applicables.
                Le Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre compte tout ou
                partie
                des
                éléments ou travaux du Site.</p>

            <p>L'utilisation du site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> implique
                l'acceptation pleine et entière des conditions générales d'utilisation ci-après décrites. Ces
                conditions
                d'utilisation sont susceptibles d'être modifiées ou complétées à tout moment, les utilisateurs du
                site
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> sont donc invités à les
                consulter
                de
                manière régulière.
            </p>

            <p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une interruption pour
                raison
                de
                maintenance technique peut être toutefois décidée par <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>, qui s'efforcera alors de
                communiquer
                préalablement aux utilisateurs les dates et heures de l'intervention.
                Le site web <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> est mis à jour
                régulièrement
                par <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> responsable. De la même
                façon,
                les
                mentions légales peuvent être modifiées à tout moment : elles s'imposent néanmoins à l'utilisateur
                qui
                est
                invité à s'y référer le plus souvent possible afin d'en prendre connaissance.</p>

            <h3>3. Description des services fournis.</h3>

            <p>Le site internet <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> a pour objet
                de
                fournir
                une information concernant l'ensemble des activités de la société.
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> s'efforce de fournir sur le
                site
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> des informations aussi
                précises
                que
                possible. Toutefois, il ne pourra être tenu responsable des oublis, des inexactitudes et des
                carences
                dans
                la
                mise à jour, qu'elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces
                informations.
            </p>

            <p>Toutes les informations indiquées sur le site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> sont données à titre
                indicatif,
                et
                sont
                susceptibles d'évoluer. Par ailleurs, les renseignements figurant sur le site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> ne sont pas exhaustifs. Ils
                sont
                donnés
                sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>

            <h3>4. Limitations contractuelles sur les données techniques.</h3>

            <p>Le site utilise la technologie JavaScript.

                Le site Internet ne pourra être tenu responsable de dommages matériels liés à l'utilisation du site.
                De
                plus,
                l'utilisateur du site s'engage à accéder au site en utilisant un matériel récent, ne contenant pas
                de
                virus
                et
                avec un navigateur de dernière génération mis-à-jour
                Le site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> est hébergé chez un
                prestataire
                sur le territoire de l'Union Européenne conformément aux dispositions du Règlement Général sur la
                Protection
                des
                Données (RGPD : n° 2016-679)</p>

            <p>L'objectif est d'apporter une prestation qui assure le meilleur taux d'accessibilité. L'hébergeur
                assure
                la
                continuité de son service 24 Heures sur 24, tous les jours de l'année. Il se réserve néanmoins la
                possibilité
                d'interrompre le service d'hébergement pour les durées les plus courtes possibles notamment à des
                fins
                de
                maintenance, d'amélioration de ses infrastructures, de défaillance de ses infrastructures ou si les
                Prestations
                et Services génèrent un trafic réputé anormal.</p>

            <p><a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> et l'hébergeur ne pourront être
                tenus
                responsables en cas de dysfonctionnement du réseau Internet, des lignes téléphoniques ou du matériel
                informatique et de téléphonie lié notamment à l'encombrement du réseau empêchant l'accès au serveur.
            </p>

            <h3>5. Propriété intellectuelle et contrefaçons.</h3>

            <p><a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> est propriétaire des droits de
                propriété
                intellectuelle et détient les droits d'usage sur tous les éléments accessibles sur le site internet,
                notamment
                les textes, images, graphismes, logos, vidéos, icônes et sons.
                Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des
                éléments
                du
                site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite
                préalable de
                :
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>.
            </p>

            <p>Toute exploitation non autorisée du site ou de l'un quelconque des éléments qu'il contient sera
                considérée
                comme
                constitutive d'une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et
                suivants
                du
                Code de Propriété Intellectuelle.</p>

            <h3>6. Limitations de responsabilité.</h3>

            <p><a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> agit en tant qu'éditeur du
                site. <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> est responsable de la
                qualité et
                de
                la
                véracité du Contenu qu'il publie. </p>

            <p><a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> ne pourra être tenu responsable
                des
                dommages directs et indirects causés au matériel de l'utilisateur, lors de l'accès au site internet
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>, et résultant soit de
                l'utilisation
                d'un
                matériel ne répondant pas aux spécifications indiquées au point 4, soit de l'apparition d'un bug ou
                d'une
                incompatibilité.
            </p>

            <p><a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> ne pourra également être tenu
                responsable
                des dommages indirects (tels par exemple qu'une perte de marché ou perte d'une chance) consécutifs à
                l'utilisation du site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>.
                Des espaces interactifs (possibilité de poser des questions dans l'espace contact) sont à la
                disposition
                des
                utilisateurs. <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> se réserve le
                droit
                de
                supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à
                la
                législation applicable en France, en particulier aux dispositions relatives à la protection des
                données.
                Le
                cas
                échéant, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> se réserve également
                la
                possibilité de mettre en cause la responsabilité civile et/ou pénale de l'utilisateur, notamment en
                cas
                de
                message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support
                utilisé
                (texte,
                photographie …).</p>

            <h3>7. Gestion des données personnelles.</h3>

            <p>Le Client est informé des réglementations concernant la communication marketing, la loi du 21 Juin
                2014
                pour
                la
                confiance dans l'Economie Numérique, la Loi Informatique et Liberté du 06 Août 2004 ainsi que du
                Règlement
                Général sur la Protection des Données (RGPD : n° 2016-679). </p>

            <h4>7.1 Responsables de la collecte des données personnelles</h4>

            <p>Pour les Données Personnelles collectées dans le cadre de la création du compte personnel de
                l'Utilisateur et
                de
                sa navigation sur le Site, le responsable du traitement des Données Personnelles est : La
                Cissonière. <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>est représenté par
                Alexis
                Guischet,
                son
                représentant légal</p>

            <p>En tant que responsable du traitement des données qu'il collecte, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> s'engage à respecter le cadre
                des
                dispositions légales en vigueur. Il lui appartient notamment au Client d'établir les finalités de
                ses
                traitements de données, de fournir à ses prospects et clients, à partir de la collecte de leurs
                consentements,
                une information complète sur le traitement de leurs données personnelles et de maintenir un registre
                des
                traitements conforme à la réalité.
                Chaque fois que <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> traite des
                Données
                Personnelles, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> prend toutes les
                mesures
                raisonnables pour s'assurer de l'exactitude et de la pertinence des Données Personnelles au regard
                des
                finalités
                pour lesquelles <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> les traite.
            </p>

            <h4>7.2 Finalité des données collectées</h4>

            <p><a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> est susceptible de traiter tout
                ou
                partie
                des données : </p>

            <ul>

                <li>pour permettre la navigation sur le Site et la gestion et la traçabilité des prestations et
                    services
                    commandés par l'utilisateur : données de connexion et d'utilisation du Site, facturation,
                    historique
                    des
                    commandes, etc. </li>

                <li>pour prévenir et lutter contre la fraude informatique (spamming, hacking…) : matériel
                    informatique
                    utilisé
                    pour la navigation, l'adresse IP, le mot de passe (hashé) </li>

                <li>pour améliorer la navigation sur le Site : données de connexion et d'utilisation </li>

                <li>pour mener des enquêtes de satisfaction facultatives sur <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> : adresse email </li>
                <li>pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse email</li>


            </ul>

            <p><a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> ne commercialise pas vos
                données
                personnelles qui sont donc uniquement utilisées par nécessité ou à des fins statistiques et
                d'analyses.
            </p>

            <h4>7.3 Droit d'accès, de rectification et d'opposition</h4>

            <p>
                Conformément à la réglementation européenne en vigueur, les Utilisateurs de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> disposent des droits suivants
                :
            </p>
            <ul>

                <li>droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à jour, de
                    complétude
                    des
                    données des Utilisateurs droit de verrouillage ou d'effacement des données des Utilisateurs à
                    caractère
                    personnel (article 17 du RGPD), lorsqu'elles sont inexactes, incomplètes, équivoques, périmées,
                    ou
                    dont
                    la
                    collecte, l'utilisation, la communication ou la conservation est interdite </li>

                <li>droit de retirer à tout moment un consentement (article 13-2c RGPD) </li>

                <li>droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD) </li>

                <li>droit d'opposition au traitement des données des Utilisateurs (article 21 RGPD) </li>

                <li>droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces données
                    font
                    l'objet de
                    traitements automatisés fondés sur leur consentement ou sur un contrat (article 20 RGPD) </li>

                <li>droit de définir le sort des données des Utilisateurs après leur mort et de choisir à qui <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> devra communiquer (ou
                    non)
                    ses
                    données à un tiers qu'ils aura préalablement désigné</li>
            </ul>

            <p>Dès que <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> a connaissance du décès
                d'un
                Utilisateur et à défaut d'instructions de sa part, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> s'engage à détruire ses
                données,
                sauf
                si
                leur conservation s'avère nécessaire à des fins probatoires ou pour répondre à une obligation
                légale.
            </p>

            <p>Si l'Utilisateur souhaite savoir comment <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>
                utilise ses Données Personnelles, demander à les rectifier ou s'oppose à leur traitement,
                l'Utilisateur
                peut
                contacter <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> par écrit à
                l'adresse
                suivante :
            </p>

            <p>La Cissonière - DPO, # <br>
                975A Rte de Barjac, 30130 Saint-Paulet-de-Caisson 30130 Saint-Paulet-de-Caisson.
            </p>

            <p>Dans ce cas, l'Utilisateur doit indiquer les Données Personnelles qu'il souhaiterait que <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> corrige, mette à jour ou
                supprime, en
                s'identifiant précisément avec une copie d'une pièce d'identité (carte d'identité ou passeport).
            </p>

            <p>
                Les demandes de suppression de Données Personnelles seront soumises aux obligations qui sont
                imposées à
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> par la loi, notamment en
                matière
                de
                conservation ou d'archivage des documents. Enfin, les Utilisateurs de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> peuvent déposer une
                réclamation
                auprès
                des autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).
            </p>

            <h4>7.4 Non-communication des données personnelles</h4>

            <p>
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> s'interdit de traiter,
                héberger ou
                transférer les Informations collectées sur ses Clients vers un pays situé en dehors de l'Union
                européenne ou
                reconnu comme « non adéquat » par la Commission européenne sans en informer préalablement le client.
                Pour
                autant, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> reste libre du choix
                de
                ses
                sous-traitants techniques et commerciaux à la condition qu'il présentent les garanties suffisantes
                au
                regard
                des
                exigences du Règlement Général sur la Protection des Données (RGPD : n° 2016-679).
            </p>

            <p>
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> s'engage à prendre toutes les
                précautions
                nécessaires afin de préserver la sécurité des Informations et notamment qu'elles ne soient pas
                communiquées
                à
                des personnes non autorisées. Cependant, si un incident impactant l'intégrité ou la confidentialité
                des
                Informations du Client est portée à la connaissance de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>, celle-ci devra dans les
                meilleurs
                délais
                informer le Client et lui communiquer les mesures de corrections prises. Par ailleurs <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> ne collecte aucune « données
                sensibles ».
            </p>

            <p>
                Les Données Personnelles de l'Utilisateur peuvent être traitées par des filiales de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> et des sous-traitants
                (prestataires
                de
                services), exclusivement afin de réaliser les finalités de la présente politique.</p>
            <p>
                Dans la limite de leurs attributions respectives et pour les finalités rappelées ci-dessus, les
                principales
                personnes susceptibles d'avoir accès aux données des Utilisateurs de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> sont principalement les
                agents de
                notre
                service client.</p>

            <div ng-bind-html="rgpdHTML"></div>


            <h3>8. Notification d'incident</h3>
            <p>
                Quels que soient les efforts fournis, aucune méthode de transmission sur Internet et aucune méthode
                de
                stockage
                électronique n'est complètement sûre. Nous ne pouvons en conséquence pas garantir une sécurité
                absolue.
                Si nous prenions connaissance d'une brèche de la sécurité, nous avertirions les utilisateurs
                concernés
                afin
                qu'ils puissent prendre les mesures appropriées. Nos procédures de notification d'incident tiennent
                compte
                de
                nos obligations légales, qu'elles se situent au niveau national ou européen. Nous nous engageons à
                informer
                pleinement nos clients de toutes les questions relevant de la sécurité de leur compte et à leur
                fournir
                toutes
                les informations nécessaires pour les aider à respecter leurs propres obligations réglementaires en
                matière
                de
                reporting.</p>
            <p>
                Aucune information personnelle de l'utilisateur du site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> n'est publiée à l'insu de
                l'utilisateur,
                échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du
                rachat
                de
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> et de ses droits permettrait
                la
                transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même
                obligation
                de
                conservation et de modification des données vis à vis de l'utilisateur du site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>.
            </p>

            <h4>Sécurité</h4>

            <p>
                Pour assurer la sécurité et la confidentialité des Données Personnelles et des Données Personnelles
                de
                Santé, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> utilise des réseaux
                protégés
                par des
                dispositifs standards tels que par pare-feu, la pseudonymisation, l'encryption et mot de passe. </p>

            <p>
                Lors du traitement des Données Personnelles, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>prend toutes les mesures
                raisonnables
                visant à les protéger contre toute perte, utilisation détournée, accès non autorisé, divulgation,
                altération
                ou
                destruction.</p>

            <h3>9. Liens hypertextes « cookies » et balises ("tags") internet</h3>
            <p>
                Le site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> contient un certain
                nombre
                de
                liens hypertextes vers d'autres sites, mis en place avec l'autorisation de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>. Cependant, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> n'a pas la possibilité de
                vérifier le
                contenu des sites ainsi visités, et n'assumera en conséquence aucune responsabilité de ce fait.</p>
            <p>Sauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les utiliser. Vous
                pouvez à
                tout
                moment désactiver ces cookies et ce gratuitement à partir des possibilités de désactivation qui vous
                sont
                offertes
                et rappelées ci-après, sachant que cela peut réduire ou empêcher l'accessibilité à tout ou partie
                des
                Services
                proposés par le site.</p>

            <h4>9.1. « COOKIES »</h4>
            <p>
                Un « cookie » est un petit fichier d'information envoyé sur le navigateur de l'Utilisateur et
                enregistré
                au
                sein
                du terminal de l'Utilisateur (ex : ordinateur, smartphone), (ci-après « Cookies »). Ce fichier
                comprend
                des
                informations telles que le nom de domaine de l'Utilisateur, le fournisseur d'accès Internet de
                l'Utilisateur, le
                système d'exploitation de l'Utilisateur, ainsi que la date et l'heure d'accès. Les Cookies ne
                risquent
                en
                aucun
                cas d'endommager le terminal de l'Utilisateur.</p>
            <p>
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> est susceptible de traiter les
                informations de l'Utilisateur concernant sa visite du Site, telles que les pages consultées, les
                recherches
                effectuées. Ces informations permettent à <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>
                d'améliorer le contenu du Site, de la navigation de l'Utilisateur.
            </p>
            <p>
                Les Cookies facilitant la navigation et/ou la fourniture des services proposés par le Site,
                l'Utilisateur
                peut
                configurer son navigateur pour qu'il lui permette de décider s'il souhaite ou non les accepter de
                manière à
                ce
                que des Cookies soient enregistrés dans le terminal ou, au contraire, qu'ils soient rejetés, soit
                systématiquement, soit selon leur émetteur. L'Utilisateur peut également configurer son logiciel de
                navigation
                de manière à ce que l'acceptation ou le refus des Cookies lui soient proposés ponctuellement, avant
                qu'un
                Cookie
                soit susceptible d'être enregistré dans son terminal. <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> informe l'Utilisateur que,
                dans
                ce
                cas,
                il se peut que les fonctionnalités de son logiciel de navigation ne soient pas toutes disponibles.
            </p>
            <p>
                Si l'Utilisateur refuse l'enregistrement de Cookies dans son terminal ou son navigateur, ou si
                l'Utilisateur
                supprime ceux qui y sont enregistrés, l'Utilisateur est informé que sa navigation et son expérience
                sur
                le
                Site
                peuvent être limitées. Cela pourrait également être le cas lorsque <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> ou l'un de ses prestataires
                ne
                peut
                pas
                reconnaître, à des fins de compatibilité technique, le type de navigateur utilisé par le terminal,
                les
                paramètres de langue et d'affichage ou le pays depuis lequel le terminal semble connecté à Internet.
            </p>
            <p>
                Le cas échéant, <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> décline toute
                responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des services
                éventuellement
                proposés par <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>, résultant (i) du
                refus
                de
                Cookies par l'Utilisateur (ii) de l'impossibilité pour <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> d'enregistrer ou de consulter
                les
                Cookies
                nécessaires à leur fonctionnement du fait du choix de l'Utilisateur. Pour la gestion des Cookies et
                des
                choix de
                l'Utilisateur, la configuration de chaque navigateur est différente. Elle est décrite dans le menu
                d'aide du
                navigateur, qui permettra de savoir de quelle manière l'Utilisateur peut modifier ses souhaits en
                matière de
                Cookies.</p>
            <p>
                À tout moment, l'Utilisateur peut faire le choix d'exprimer et de modifier ses souhaits en matière
                de
                Cookies.
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> pourra en outre faire appel
                aux
                services
                de prestataires externes pour l'aider à recueillir et traiter les informations décrites dans cette
                section.
            </p>
            <p>
                Enfin, en cliquant sur les icônes dédiées aux réseaux sociaux Twitter, Facebook, Linkedin et Google
                Plus
                figurant sur le Site de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> ou
                dans
                son
                application mobile et si l'Utilisateur a accepté le dépôt de cookies en poursuivant sa navigation
                sur le
                Site
                Internet ou l'application mobile de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>,
                Twitter, Facebook, Linkedin et Google Plus peuvent également déposer des cookies sur vos terminaux
                (ordinateur,
                tablette, téléphone portable).</p>
            <p>
                Ces types de cookies ne sont déposés sur vos terminaux qu'à condition que vous y consentiez, en
                continuant
                votre
                navigation sur le Site Internet ou l'application mobile de <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>. À tout moment, l'Utilisateur
                peut
                néanmoins revenir sur son consentement à ce que <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> dépose ce type de cookies.
            </p>

            <h4>Article 9.2. BALISES ("TAGS") INTERNET</h4>


            <p>

                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> peut employer
                occasionnellement
                des
                balises Internet (également appelées « tags », ou balises d'action, GIF à un pixel, GIF
                transparents,
                GIF
                invisibles et GIF un à un) et les déployer par l'intermédiaire d'un partenaire spécialiste
                d'analyses
                Web
                susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l'adresse
                IP
                de
                l'Utilisateur) dans un pays étranger.
            </p>

            <p>
                Ces balises sont placées à la fois dans les publicités en ligne permettant aux internautes d'accéder
                au
                Site, et
                sur les différentes pages de celui-ci.
            </p>
            <p>
                Cette technologie permet à <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>
                d'évaluer
                les
                réponses des visiteurs face au Site et l'efficacité de ses actions (par exemple, le nombre de fois
                où
                une
                page
                est ouverte et les informations consultées), ainsi que l'utilisation de ce Site par l'Utilisateur.
            </p>
            <p>
                Le prestataire externe pourra éventuellement recueillir des informations sur les visiteurs du Site
                et
                d'autres
                sites Internet grâce à ces balises, constituer des rapports sur l'activité du Site à l'attention de
                <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a>, et fournir d'autres services
                relatifs à
                l'utilisation de celui-ci et d'Internet.
            </p>
            <p>
            </p>
            <h3>10. Droit applicable et attribution de juridiction.</h3>
            <p>
                Tout litige en relation avec l'utilisation du site <a href="https://www.lacissoniere.fr">https://www.lacissoniere.fr</a> est soumis au droit français.
                En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux
                tribunaux
                compétents de </p>

        </div>
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
                    <a href="histoire.php"><?php echo htmlspecialchars($qui_sommes_nous_link_footer['content']); ?></a>
                <?php else : ?>
                    <a href="histoire.php">Qui Sommes Nous ?</a>
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
                    <a class="btnTop"><?php echo htmlspecialchars($terms_of_use_link['content']); ?></a>
                <?php else : ?>
                    <a class="btnTop">Mentions Légales</a>
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
                        <a href="histoire.php"><?php echo htmlspecialchars($qui_sommes_nous_link_footer['content']); ?></a>
                    <?php else : ?>
                        <a href="histoire.php">Qui Sommes Nous ?</a>
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
                        <a class="btnTop"><?php echo htmlspecialchars($terms_of_use_link['content']); ?></a>
                    <?php else : ?>
                        <a class="btnTop">Mentions Légales</a>
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