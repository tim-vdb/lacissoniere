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
    <link rel="stylesheet" href="CSS/marches.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="CSS/images/LOGO_CISSONIERE.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>La Cissonière et ses emplacements dans les marchés</title>
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

    <main>

        <section id="section_1">
            <div>
                <div class="centreGauche_edit">
                    <?php
                    $placeMarket_titre = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'placeMarket_titre';
                    });
                    $placeMarket_titre = reset($placeMarket_titre);

                    if ($placeMarket_titre) :
                    ?>
                        <h2><?php echo htmlspecialchars($placeMarket_titre['content']); ?></h2>
                    <?php else : ?>
                        <h2>Nos Emplacements sur les Marchés :</h2>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="placeMarket_titre">
                        <button class="add-text-form">Modifier le Titre</button>
                        <div class="form-area"></div>
                    </div>
                </div>
                <ol>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $dayMarket1 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'dayMarket1';
                            });
                            $dayMarket1 = reset($dayMarket1);

                            if ($dayMarket1) :
                            ?>
                                <p><?php echo htmlspecialchars($dayMarket1['content']); ?></p>
                            <?php else : ?>
                                <p>Lundi :</p>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="dayMarket1">
                                <button class="add-text-form">Modifier le Texte</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $place1 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'place1';
                            });
                            $place1 = reset($place1);

                            if ($place1) :
                            ?>
                                <a href="#here" id="marches_du_lundi_button"><?php echo htmlspecialchars($place1['content']); ?> &#10153;</a>
                            <?php else : ?>
                                <a href="#here" id="marches_du_lundi_button">Piolenc (84) &#10153;</a>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="place1">
                                <button class="add-text-form">Modifier l'Emplacement'</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $dayMarket2 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'dayMarket2';
                            });
                            $dayMarket2 = reset($dayMarket2);

                            if ($dayMarket2) :
                            ?>
                                <p><?php echo htmlspecialchars($dayMarket2['content']); ?></p>
                            <?php else : ?>
                                <p>Mardi :</p>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="dayMarket2">
                                <button class="add-text-form">Modifier le Texte</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $place2 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'place2';
                            });
                            $place2 = reset($place2);

                            if ($place2) :
                            ?>
                                <a href="#here" id="marches_du_mardi_button"><?php echo htmlspecialchars($place2['content']); ?> &#10153;</a>
                            <?php else : ?>
                                <a href="#here" id="marches_du_mardi_button">Saint-Paul-Trois-Châteaux (26) - Caderousse (84) &#10153;</a>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="place2">
                                <button class="add-text-form">Modifier l'Emplacement'</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $dayMarket3 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'dayMarket3';
                            });
                            $dayMarket3 = reset($dayMarket3);

                            if ($dayMarket3) :
                            ?>
                                <p><?php echo htmlspecialchars($dayMarket3['content']); ?></p>
                            <?php else : ?>
                                <p>Mercredi :</p>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="dayMarket3">
                                <button class="add-text-form">Modifier le Texte</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $place3 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'place3';
                            });
                            $place3 = reset($place3);

                            if ($place3) :
                            ?>
                                <a href="#here" id="marches_du_mercredi_button"><?php echo htmlspecialchars($place3['content']); ?> &#10153;</a>
                            <?php else : ?>
                                <a href="#here" id="marches_du_mercredi_button">Bourg-Saint-Andéol (07) &#10153;</a>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="place3">
                                <button class="add-text-form">Modifier l'Emplacement'</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $dayMarket4 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'dayMarket4';
                            });
                            $dayMarket4 = reset($dayMarket4);

                            if ($dayMarket4) :
                            ?>
                                <p><?php echo htmlspecialchars($dayMarket4['content']); ?></p>
                            <?php else : ?>
                                <p>Jeudi :</p>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="dayMarket4">
                                <button class="add-text-form">Modifier le Texte</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $place4 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'place4';
                            });
                            $place4 = reset($place4);

                            if ($place4) :
                            ?>
                                <a href="#here" id="marches_du_jeudi_button"><?php echo htmlspecialchars($place4['content']); ?> &#10153;</a>
                            <?php else : ?>
                                <a href="#here" id="marches_du_jeudi_button">Nyons (26) - Orange (84) &#10153;</a>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="place4">
                                <button class="add-text-form">Modifier l'Emplacement'</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $dayMarket5 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'dayMarket5';
                            });
                            $dayMarket5 = reset($dayMarket5);

                            if ($dayMarket5) :
                            ?>
                                <p><?php echo htmlspecialchars($dayMarket5['content']); ?></p>
                            <?php else : ?>
                                <p>Vendredi :</p>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="dayMarket5">
                                <button class="add-text-form">Modifier le Texte</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">
                            <?php
                            $place5 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'place5';
                            });
                            $place5 = reset($place5);

                            if ($place5) :
                            ?>
                                <a href="#here" id="marches_du_vendredi_button"><?php echo htmlspecialchars($place5['content']); ?> &#10153;</a>
                            <?php else : ?>
                                <a href="#here" id="marches_du_vendredi_button">Bollène (84) - Pierrelatte (26) &#10153;</a>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="place5">
                                <button class="add-text-form">Modifier l'Emplacement'</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">

                            <?php
                            $dayMarket6 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'dayMarket6';
                            });
                            $dayMarket6 = reset($dayMarket6);

                            if ($dayMarket6) :
                            ?>
                                <p><?php echo htmlspecialchars($dayMarket6['content']); ?></p>
                            <?php else : ?>
                                <p>Samedi :</p>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="dayMarket6">
                                <button class="add-text-form">Modifier le Texte</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="centreGauche_edit">

                            <?php
                            $place6 = array_filter($rows_texts, function ($text) {
                                return $text['name'] === 'place6';
                            });
                            $place6 = reset($place6);

                            if ($place6) :
                            ?>
                                <a href="#here" id="marches_du_lundi_button"><?php echo htmlspecialchars($place6['content']); ?> &#10153;</a>
                            <?php else : ?>
                                <a href="#here" id="marches_du_samedi_button">Sainte-Cécile-les-Vignes (84) - Pont-Saint-Esprit (30) &#10153;</a>
                            <?php endif; ?>
                            <div class="text-container editPage" data-text-id="place6">
                                <button class="add-text-form">Modifier l'Emplacement'</button>
                                <div class="form-area"></div>
                            </div>
                        </div>
                    </li>
                </ol>
                <div class="centre_edit" id="display_les_marches">
                    <?php
                    $displayMarkets = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'displayMarkets';
                    });
                    $displayMarkets = reset($displayMarkets);

                    if ($displayMarkets) :
                    ?>
                        <a href="#here" id="les_marches"><?php echo htmlspecialchars($displayMarkets['content']); ?></a>
                    <?php else : ?>
                        <a href="#here" id="les_marches">Afficher tous les marchés</a>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="displayMarkets">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>
                </div>
            </div>

            <div class="centre_edit">

                <?php
                $standMarché = array_filter($rows_images, function ($image) {
                    return $image['filename'] === 'standMarché';
                });
                $standMarché = reset($standMarché);

                if ($standMarché) :
                ?>
                    <img src="<?php echo htmlspecialchars($standMarché['filepath']). '?v=' . time(); ?>" alt="Stand de marché">
                <?php else : ?>
                    <img src="CSS/images/marches_opti.jpg" alt="Stand de marché">
                <?php endif; ?>
                <div class="image-container editPage" data-image-id="standMarché">
                    <button class="add-file-form">Modifier l'Image</button>
                    <div class="form-area"></div>
                </div>
            </div>
        </section>

        <section id="section_2">
            <?php
            $meetUS = array_filter($rows_texts, function ($text) {
                return $text['name'] === 'meetUS';
            });
            $meetUS = reset($meetUS);

            if ($meetUS) :
            ?>
                <h2 id="here"><?php echo htmlspecialchars($meetUS['content']); ?></h2>
            <?php else : ?>
                <h2 id="here">Retrouvez-nous sur :</h2>
            <?php endif; ?>
            <div class="text-container editPage" data-text-id="meetUS">
                <button class="add-text-form">Modifier le Titre</button>
                <div class="form-area"></div>
            </div>
            <div id="marches_du_lundi" class="groupe_de_marchés">
                <div class="infos_marchés">

                    <?php
                    $detailsDay1 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay1';
                    });
                    $detailsDay1 = reset($detailsDay1);

                    if ($detailsDay1) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay1['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Piolenc tous les lundis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay1">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay1 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay1';
                    });
                    $mapsDay1 = reset($mapsDay1);

                    if ($mapsDay1) :
                    ?>
                        <iframe title="Emplacement stand Piolenc" id="Piolenc" src="<?php echo htmlspecialchars($mapsDay1['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Piolenc" id="Piolenc" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1430.72981549514!2d4.759911470320949!3d44.17699599321202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDEwJzM3LjIiTiA0wrA0NSc0MC4yIkU!5e0!3m2!1sfr!2sfr!4v1716378305878!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay1">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
            </div>

            <div id="marches_du_mardi" class="groupe_de_marchés">
                <div class="infos_marchés">

                    <?php
                    $detailsDay2 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay2';
                    });
                    $detailsDay2 = reset($detailsDay2);

                    if ($detailsDay2) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay2['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Saint-Paul-Trois-Chateaux tous les mardis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay2">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay2 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay2';
                    });
                    $mapsDay2 = reset($mapsDay2);

                    if ($mapsDay2) :
                    ?>
                        <iframe title="Emplacement stand Saint Paul Trois Chateaux" id="Saint_Paul_Trois_Chateaux" src="<?php echo htmlspecialchars($mapsDay2['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Saint Paul Trois Chateaux" id="Saint_Paul_Trois_Chateaux" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d10061.21199783986!2d4.76724871750692!3d44.34817885806779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIwJzUzLjMiTiA0wrA0NicxMi4xIkU!5e0!3m2!1sfr!2sfr!4v1716377928292!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay2">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
                <div class="infos_marchés">

                    <?php
                    $detailsDay3 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay3';
                    });
                    $detailsDay3 = reset($detailsDay3);

                    if ($detailsDay3) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay3['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Caderousse tous les mardis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay3">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay3 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay3';
                    });
                    $mapsDay3 = reset($mapsDay3);

                    if ($mapsDay3) :
                    ?>
                        <iframe title="Emplacement stand Caderousse" id="Caderousse" src="<?php echo htmlspecialchars($mapsDay3['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Caderousse" id="Caderousse" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2865.0636228045155!2d4.755407376505038!3d44.10267917108433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDA2JzA5LjciTiA0wrA0NScyOC43IkU!5e0!3m2!1sfr!2sfr!4v1716390333798!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay3">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
            </div>
            <div id="marches_du_mercredi" class="groupe_de_marchés">
                <div class="infos_marchés">

                    <?php
                    $detailsDay4 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay4';
                    });
                    $detailsDay4 = reset($detailsDay4);

                    if ($detailsDay4) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay4['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Bourg-Saint-Andéol tous les mercredis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay4">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay4 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay4';
                    });
                    $mapsDay4 = reset($mapsDay4);

                    if ($mapsDay4) :
                    ?>
                        <iframe title="Emplacement stand Bourg Saint Andeol" id="bourg_saint_andeol" src="<?php echo htmlspecialchars($mapsDay4['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Bourg Saint Andeol" id="bourg_saint_andeol" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5887.394726998215!2d4.643651204514054!3d44.370912440300984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b509579bd5c6e3%3A0xe2cf2cd68204eb5c!2sPl.%20du%20Champ%20de%20Mars%2C%2007700%20Bourg-Saint-And%C3%A9ol!5e0!3m2!1sfr!2sfr!4v1715605057713!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay4">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
            </div>

            <div id="marches_du_jeudi" class="groupe_de_marchés">
                <div class="infos_marchés">

                    <?php
                    $detailsDay5 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay5';
                    });
                    $detailsDay5 = reset($detailsDay5);

                    if ($detailsDay5) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay5['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Nyons tous les jeudis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay5">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay5 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay5';
                    });
                    $mapsDay5 = reset($mapsDay5);

                    if ($mapsDay5) :
                    ?>
                        <iframe title="Emplacement stand Nyons" id="Nyons" src="<?php echo htmlspecialchars($mapsDay5['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Nyons" id="Nyons" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1297.646726146485!2d5.138772012468986!3d44.35992528336282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIxJzM1LjgiTiA1wrAwOCcyMy40IkU!5e0!3m2!1sfr!2sfr!4v1716378518580!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay5">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
                <div class="infos_marchés">

                    <?php
                    $detailsDay6 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay6';
                    });
                    $detailsDay6 = reset($detailsDay6);

                    if ($detailsDay6) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay6['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Orange tous les jeudis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay6">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay6 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay6';
                    });
                    $mapsDay6 = reset($mapsDay6);

                    if ($mapsDay6) :
                    ?>
                        <iframe title="Emplacement stand Orange" id="Orange" src="<?php echo htmlspecialchars($mapsDay6['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Orange" id="Orange" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2863.397425315172!2d4.802534776506655!3d44.13704967108324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDA4JzEzLjQiTiA0wrA0OCcxOC40IkU!5e0!3m2!1sfr!2sfr!4v1716378584756!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay6">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
            </div>

            <div id="marches_du_vendredi" class="groupe_de_marchés">
                <div class="infos_marchés">
                    <?php
                    $detailsDay7 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay7';
                    });
                    $detailsDay7 = reset($detailsDay7);

                    if ($detailsDay7) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay7['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Bollène tous les vendredis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay7">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay7 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay7';
                    });
                    $mapsDay7 = reset($mapsDay7);

                    if ($mapsDay7) :
                    ?>
                        <iframe title="Emplacement stand Bollene" id="Bollene" src="<?php echo htmlspecialchars($mapsDay7['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Bollene" id="Bollene" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1780.5857559937033!2d4.750372118578079!3d44.28230008955104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDE2JzU2LjMiTiA0wrA0NScwNi45IkU!5e0!3m2!1sfr!2sfr!4v1716378640302!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay7">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
                <div class="infos_marchés">
                    <?php
                    $detailsDay8 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay8';
                    });
                    $detailsDay8 = reset($detailsDay8);

                    if ($detailsDay8) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay8['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Pierrelatte tous les vendredis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay8">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay8 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay8';
                    });
                    $mapsDay8 = reset($mapsDay8);

                    if ($mapsDay8) :
                    ?>
                        <iframe title="Emplacement stand Pierrelatte" id="Pierrelatte" src="<?php echo htmlspecialchars($mapsDay8['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Pierrelatte" id="Pierrelatte" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2851.7312708540608!2d4.694463876518286!3d44.377108371077036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDIyJzM3LjYiTiA0wrA0MSc0OS4zIkU!5e0!3m2!1sfr!2sfr!4v1716378737362!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay8">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
            </div>

            <div id="marches_du_samedi" class="groupe_de_marchés">
                <div class="infos_marchés">
                    <?php
                    $detailsDay9 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay9';
                    });
                    $detailsDay9 = reset($detailsDay9);

                    if ($detailsDay9) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay9['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Sainte-Cécile-les-Vignes tous les samedis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay9">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay9 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay9';
                    });
                    $mapsDay9 = reset($mapsDay9);

                    if ($mapsDay9) :
                    ?>
                        <iframe title="Emplacement stand Sainte Cécile les Vignes" id="Sainte_Cécile_les_Vignes" src="<?php echo htmlspecialchars($mapsDay9['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Sainte Cécile les Vignes" id="Sainte_Cécile_les_Vignes" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d810.5170392765182!2d4.8858942060630035!3d44.2445627198973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDE0JzQwLjgiTiA0wrA1MycxMC4zIkU!5e0!3m2!1sfr!2sfr!4v1716378889025!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay9">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
                <div class="infos_marchés">

                    <?php
                    $detailsDay10 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'detailsDay10';
                    });
                    $detailsDay10 = reset($detailsDay10);

                    if ($detailsDay10) :
                    ?>
                        <h3><?php echo htmlspecialchars($detailsDay10['content']); ?></h3>
                    <?php else : ?>
                        <h3>Le marché de Pont-Saint-Esprit tous les samedis de 7h30 à 12h30 !</h3>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="detailsDay10">
                        <button class="add-text-form">Modifier le Texte</button>
                        <div class="form-area"></div>
                    </div>

                    <?php
                    $mapsDay10 = array_filter($rows_texts, function ($text) {
                        return $text['name'] === 'mapsDay10';
                    });
                    $mapsDay10 = reset($mapsDay10);

                    if ($mapsDay10) :
                    ?>
                        <iframe title="Emplacement stand Pont Saint Esprit"  id="Pont_Saint_Esprit" src="<?php echo htmlspecialchars($mapsDay10['content']); ?>" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php else : ?>
                        <iframe title="Emplacement stand Pont Saint Esprit" id="Pont_Saint_Esprit" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1521.737489562332!2d4.646612575220769!3d44.25621371987457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDTCsDE1JzIzLjIiTiA0wrAzOCc1Mi4zIkU!5e0!3m2!1sfr!2sfr!4v1716378809706!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="mapsDay10">
                        <button class="add-text-form">Modifier l'Emplacement</button>
                        <div class="form-area"></div>
                        <p>Prendre la source de l'emplacement sur Google Maps : Partager -> Intégrer une carte -> Prendre seulement la "src" du contenu HTML puis coller cette source dans le champ.</p>
                        <p>Exemple (ne pas laisser d'espace comme dans l'exemple): https://www.google.com/maps/ embed?pb=!1m18!1m12!1m3!1d6689. 276919977695!2d4. 679...</p>
                        <p>Exemple avec latitude et longitude dans maps : "Format correct : 41.40338, 2.17403", "Format incorrect : 41,40338, 2,17403".</p>
                        <p>Ensuite répétez le processus pour récupérer la source du contenu HTML puis coller la source dans le champ.</p>
                    </div>
                </div>
            </div>
            <div id="marches_du_dimanches" style='width: 75%;'>
                <div class="infos_marchés" width="100%">
                    <h3>Le marché de Piolenc ce lundi de 7h30 à 12h30 !</h3>
                    <iframe id="Piolenc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6603.791054862914!2d4.760787455870413!3d44.17838769748211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5984e32637f11%3A0xd024840aa4a7d41f!2sCr%20G%C3%A9n%C3%A9ral%20Corsin%2C%2084420%20Piolenc!5e0!3m2!1sfr!2sfr!4v1715602906419!5m2!1sfr!2sfr" width="100%" height="450" style="border:5px dashed var(--beige_primaire);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    <a class="btnTop"><?php echo htmlspecialchars($link_marchés_footer['content']); ?></a>
                <?php else : ?>
                    <a class="btnTop">Voir Les Marchés</a>
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
                        <a class="btnTop"><?php echo htmlspecialchars($link_marchés_footer['content']); ?></a>
                    <?php else : ?>
                        <a class="btnTop">Voir Les Marchés</a>
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
    <script src="JS/marches.js"></script>
</body>

</html>