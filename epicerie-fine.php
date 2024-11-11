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
    <link rel="stylesheet" href="CSS/epicerie-fine.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="CSS/images/LOGO_CISSONIERE.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>Venez découvrir toute l'épicerie fine de La Cissonière</title>
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
                        </ul </li>
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
                                <a href="epicerie-fine.php#feculents" class="link_epicerie">Féculents</a>
                            </li>
                            <li>
                                <a href="epicerie-fine.php#salee" class="link_epicerie">Salée</a>
                            </li>
                            <li>
                                <a href="epicerie-fine.php#sucree" class="link_epicerie">Sucrée</a>
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
            <div id="div_sticky">
                <div id="div_sticky_flex">
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
                                        <a href="epicerie-fine.php#feculents" class="link_epicerie">Féculents</a>
                                    </li>
                                    <li>
                                        <a href="epicerie-fine.php#salee" class="link_epicerie">Salée</a>
                                    </li>
                                    <li>
                                        <a href="epicerie-fine.php#sucree" class="link_epicerie">Sucrée</a>
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
                <nav id="navbar_sticky_produits" class="hideOnPhone">
                    <ul>
                        <li class="container_links">
                            <a href="#feculents" class="epicerie_produits">Féculents</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#salee" class="epicerie_produits">Salée</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#sucree" class="epicerie_produits">Sucrée</a>
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
                                    <a href="#feculents" class="closeByLinks">Section Féculents &#10153;</a>
                                </li>
                                <li>
                                    <a href="#salee" class="closeByLinks">Section Salée &#10153;</a>
                                </li>
                                <li>
                                    <a href="#sucree" class="closeByLinks">Section Sucrée &#10153;</a>
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
        <section class="section" id="feculents">
            <div class="centre_edit">
                <?php
                $titre_féculents = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_féculents';
                });
                $titre_féculents = reset($titre_féculents);

                if ($titre_féculents) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_féculents['content']); ?></h2>
                <?php else : ?>
                    <h2>Féculents</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_féculents">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_rizCamargue = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_rizCamargue';
                        });
                        $titre_rizCamargue = reset($titre_rizCamargue);

                        if ($titre_rizCamargue) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_rizCamargue['content']); ?></h3>
                        <?php else : ?>
                            <h3>Riz de Camargue</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_rizCamargue">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $rizCamargue = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'rizCamargue';
                        });
                        $rizCamargue = reset($rizCamargue);

                        if ($rizCamargue) :
                        ?>
                            <img src="<?php echo htmlspecialchars($rizCamargue['filepath']). '?v=' . time(); ?>" alt="Riz de Camargue">
                        <?php else : ?>
                            <img src="CSS/images/riz_camargue.webp" alt="Riz de Camargue">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="rizCamargue">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_rizCamargue = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_rizCamargue';
                        });
                        $para_rizCamargue = reset($para_rizCamargue);

                        if ($para_rizCamargue) :
                        ?>
                            <p><?php echo htmlspecialchars($para_rizCamargue['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_rizCamargue">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_pates_alsace = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_pates_alsace';
                        });
                        $titre_pates_alsace = reset($titre_pates_alsace);

                        if ($titre_pates_alsace) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_pates_alsace['content']); ?></h3>
                        <?php else : ?>
                            <h3>Pâtes d'Alsace</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_pates_alsace">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $pates_alsace = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'pates_alsace';
                        });
                        $pates_alsace = reset($pates_alsace);

                        if ($pates_alsace) :
                        ?>
                            <img src="<?php echo htmlspecialchars($pates_alsace['filepath']). '?v=' . time(); ?>" alt="Pâtes d'Alsace">
                        <?php else : ?>
                            <img src="CSS/images/pates_alsace.webp" alt="Pâtes d'Alsace">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="pates_alsace">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_pates_alsace = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_pates_alsace';
                        });
                        $para_pates_alsace = reset($para_pates_alsace);

                        if ($para_pates_alsace) :
                        ?>
                            <p><?php echo htmlspecialchars($para_pates_alsace['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_pates_alsace">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_pates_linguine_italie = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_pates_linguine_italie';
                        });
                        $titre_pates_linguine_italie = reset($titre_pates_linguine_italie);

                        if ($titre_pates_linguine_italie) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_pates_linguine_italie['content']); ?></h3>
                        <?php else : ?>
                            <h3>Pâtes Linguine Italie</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_pates_linguine_italie">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $pates_linguine_italie = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'pates_linguine_italie';
                        });
                        $pates_linguine_italie = reset($pates_linguine_italie);

                        if ($pates_linguine_italie) :
                        ?>
                            <img src="<?php echo htmlspecialchars($pates_linguine_italie['filepath']). '?v=' . time(); ?>" alt="Pâtes Linguine Italie">
                        <?php else : ?>
                            <img src="CSS/images/pates_linguine_italie.webp" alt="Pâtes Linguine Italie">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="pates_linguine_italie">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_pates_linguine_italie = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_pates_linguine_italie';
                        });
                        $para_pates_linguine_italie = reset($para_pates_linguine_italie);

                        if ($para_pates_linguine_italie) :
                        ?>
                            <p><?php echo htmlspecialchars($para_pates_linguine_italie['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_pates_linguine_italie">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_pates_crozet = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_pates_crozet';
                        });
                        $titre_pates_crozet = reset($titre_pates_crozet);

                        if ($titre_pates_crozet) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_pates_crozet['content']); ?></h3>
                        <?php else : ?>
                            <h3>Pâtes et Crozet</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_pates_crozet">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $pates_crozet = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'pates_crozet';
                        });
                        $pates_crozet = reset($pates_crozet);

                        if ($pates_crozet) :
                        ?>
                            <img src="<?php echo htmlspecialchars($pates_crozet['filepath']). '?v=' . time(); ?>" alt="Pâtes et Crozet">
                        <?php else : ?>
                            <img src="CSS/images/pates_crozet.webp" alt="Pâtes et Crozet">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="pates_crozet">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_pates_crozet = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_pates_crozet';
                        });
                        $para_pates_crozet = reset($para_pates_crozet);

                        if ($para_pates_crozet) :
                        ?>
                            <p><?php echo htmlspecialchars($para_pates_crozet['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_pates_crozet">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item5">
                    <div class="centre_edit">
                        <?php
                        $titre_lentillesVertes = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_lentillesVertes';
                        });
                        $titre_lentillesVertes = reset($titre_lentillesVertes);

                        if ($titre_lentillesVertes) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_lentillesVertes['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lentilles de Piolenc</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_lentillesVertes">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $lentilles = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'lentilles';
                        });
                        $lentilles = reset($lentilles);

                        if ($lentilles) :
                        ?>
                            <img src="<?php echo htmlspecialchars($lentilles['filepath']). '?v=' . time(); ?>" alt="Lentilles de Provence">
                        <?php else : ?>
                            <img src="CSS/images/lentilles.webp" alt="Lentilles de Provence">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="lentilles">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_lentilles = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_lentilles';
                        });
                        $para_lentilles = reset($para_lentilles);

                        if ($para_lentilles) :
                        ?>
                            <p><?php echo htmlspecialchars($para_lentilles['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_lentilles">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item6">
                    <div class="centre_edit">
                        <?php
                        $titre_lentillesVertes = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_lentillesVertes';
                        });
                        $titre_lentillesVertes = reset($titre_lentillesVertes);

                        if ($titre_lentillesVertes) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_lentillesVertes['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lentilles vertes Piolenc</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_lentillesVertes">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $lentillesVertes = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'lentillesVertes';
                        });
                        $lentillesVertes = reset($lentillesVertes);

                        if ($lentillesVertes) :
                        ?>
                            <img src="<?php echo htmlspecialchars($lentillesVertes['filepath']). '?v=' . time(); ?>" alt="Lentilles vertes de Provence">
                        <?php else : ?>
                            <img src="CSS/images/lentilles_vertes_provence.webp" alt="Lentilles vertes de Provence">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="lentillesVertes">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_lentillesVertes = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_lentillesVertes';
                        });
                        $para_lentillesVertes = reset($para_lentillesVertes);

                        if ($para_lentillesVertes) :
                        ?>
                            <p><?php echo htmlspecialchars($para_lentillesVertes['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_lentillesVertes">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item7">
                    <div class="centre_edit">
                        <?php
                        $titre_poisChiches = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_poisChiches';
                        });
                        $titre_poisChiches = reset($titre_poisChiches);

                        if ($titre_poisChiches) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_poisChiches['content']); ?></h3>
                        <?php else : ?>
                            <h3>Pois chiches de Bourg St Andéol</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_poisChiches">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $poisChiches = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'poisChiches';
                        });
                        $poisChiches = reset($poisChiches);

                        if ($poisChiches) :
                        ?>
                            <img src="<?php echo htmlspecialchars($poisChiches['filepath']). '?v=' . time(); ?>" alt="Pois Chiches de Bourg St Andéol">
                        <?php else : ?>
                            <img src="CSS/images/pois_chiches_provence.webp" alt="Pois Chiches de Bourg St Andéol">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="poisChiches">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_poisChiches = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_poisChiches';
                        });
                        $para_poisChiches = reset($para_poisChiches);

                        if ($para_poisChiches) :
                        ?>
                            <p><?php echo htmlspecialchars($para_poisChiches['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_poisChiches">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="salee">
            <div class="centre_edit">
                <?php
                $titre_salée = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_salée';
                });
                $titre_salée = reset($titre_salée);

                if ($titre_salée) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_salée['content']); ?></h2>
                <?php else : ?>
                    <h2>Salée</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_salée">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_flageolets = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_flageolets';
                        });
                        $titre_flageolets = reset($titre_flageolets);

                        if ($titre_flageolets) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_flageolets['content']); ?></h3>
                        <?php else : ?>
                            <h3>Flageolets</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_flageolets">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $flageolets = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'flageolets';
                        });
                        $flageolets = reset($flageolets);

                        if ($flageolets) :
                        ?>
                            <img src="<?php echo htmlspecialchars($flageolets['filepath']). '?v=' . time(); ?>" alt="Flageolets">
                        <?php else : ?>
                            <img src="CSS/images/flageolets.webp" alt="Flageolets">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="flageolets">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_flageolets = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_flageolets';
                        });
                        $para_flageolets = reset($para_flageolets);

                        if ($para_flageolets) :
                        ?>
                            <p><?php echo htmlspecialchars($para_flageolets['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_flageolets">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_poivre = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_poivre';
                        });
                        $titre_poivre = reset($titre_poivre);

                        if ($titre_poivre) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_poivre['content']); ?></h3>
                        <?php else : ?>
                            <h3>Sel de Camargue</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_poivre">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $sel = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'sel';
                        });
                        $sel = reset($sel);

                        if ($sel) :
                        ?>
                            <img src="<?php echo htmlspecialchars($sel['filepath']). '?v=' . time(); ?>" alt="Sel de Camargue">
                        <?php else : ?>
                            <img src="CSS/images/sel_camargue.webp" alt="Sel de Camargue">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="sel">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_sel = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_sel';
                        });
                        $para_sel = reset($para_sel);

                        if ($para_sel) :
                        ?>
                            <p><?php echo htmlspecialchars($para_sel['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_sel">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_poivre = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_poivre';
                        });
                        $titre_poivre = reset($titre_poivre);

                        if ($titre_poivre) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_poivre['content']); ?></h3>
                        <?php else : ?>
                            <h3>Poivre de St Julien de Peyrolas</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_poivre">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $poivre = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'poivre';
                        });
                        $poivre = reset($poivre);

                        if ($poivre) :
                        ?>
                            <img src="<?php echo htmlspecialchars($poivre['filepath']). '?v=' . time(); ?>" alt="Poivre de St Julien de Peyrolas">
                        <?php else : ?>
                            <img src="CSS/images/poivre_st_julien_peyrolas.webp" alt="Poivre de St Julien de Peyrolas">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="poivre">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_poivre = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_poivre';
                        });
                        $para_poivre = reset($para_poivre);

                        if ($para_poivre) :
                        ?>
                            <p><?php echo htmlspecialchars($para_poivre['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_poivre">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_cornichons_français = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_cornichons_français';
                        });
                        $titre_cornichons_français = reset($titre_cornichons_français);

                        if ($titre_cornichons_français) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_cornichons_français['content']); ?></h3>
                        <?php else : ?>
                            <h3>Cornichons français</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_cornichons_français">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $cornichons_français = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'cornichons_français';
                        });
                        $cornichons_français = reset($cornichons_français);

                        if ($cornichons_français) :
                        ?>
                            <img src="<?php echo htmlspecialchars($cornichons_français['filepath']). '?v=' . time(); ?>" alt="Cornichons français">
                        <?php else : ?>
                            <img src="CSS/images/cornichons_français.webp" alt="Cornichons français">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="cornichons_français">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_cornichons_français = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_cornichons_français';
                        });
                        $para_cornichons_français = reset($para_cornichons_français);

                        if ($para_cornichons_français) :
                        ?>
                            <p><?php echo htmlspecialchars($para_cornichons_français['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_cornichons_français">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item5">
                    <div class="centre_edit">
                        <?php
                        $titre_chips_artisanale = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_chips_artisanale';
                        });
                        $titre_chips_artisanale = reset($titre_chips_artisanale);

                        if ($titre_chips_artisanale) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_chips_artisanale['content']); ?></h3>
                        <?php else : ?>
                            <h3>Chips Artisanale</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_chips_artisanale">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $chips_artisanale = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'chips_artisanale';
                        });
                        $chips_artisanale = reset($chips_artisanale);

                        if ($chips_artisanale) :
                        ?>
                            <img src="<?php echo htmlspecialchars($chips_artisanale['filepath']). '?v=' . time(); ?>" alt="Chips Artisanale">
                        <?php else : ?>
                            <img src="CSS/images/chips_artisanale.webp" alt="Chips Artisanale">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="chips_artisanale">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_chips_artisanale = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_chips_artisanale';
                        });
                        $para_chips_artisanale = reset($para_chips_artisanale);

                        if ($para_chips_artisanale) :
                        ?>
                            <p><?php echo htmlspecialchars($para_chips_artisanale['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_chips_artisanale">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item6">
                    <div class="centre_edit">
                        <?php
                        $titre_sauces = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_sauces';
                        });
                        $titre_sauces = reset($titre_sauces);

                        if ($titre_sauces) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_sauces['content']); ?></h3>
                        <?php else : ?>
                            <h3>Diverses Sauces</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_sauces">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $sauces = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'sauces';
                        });
                        $sauces = reset($sauces);

                        if ($sauces) :
                        ?>
                            <img src="<?php echo htmlspecialchars($sauces['filepath']). '?v=' . time(); ?>" alt="Diverses Sauces">
                        <?php else : ?>
                            <img src="CSS/images/Sauces.webp" alt="Diverses Sauces">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="sauces">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_sauces = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_sauces';
                        });
                        $para_sauces = reset($para_sauces);

                        if ($para_sauces) :
                        ?>
                            <p><?php echo htmlspecialchars($para_sauces['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_sauces">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="sucree">
            <div class="centre_edit">
                <?php
                $titre_sucrée = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_sucrée';
                });
                $titre_sucrée = reset($titre_sucrée);

                if ($titre_sucrée) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_sucrée['content']); ?></h2>
                <?php else : ?>
                    <h2>Sucrée</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_sucrée">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_confiture = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_confiture';
                        });
                        $titre_confiture = reset($titre_confiture);

                        if ($titre_confiture) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_confiture['content']); ?></h3>
                        <?php else : ?>
                            <h3>Confiture de St Julien de Peyrolas</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_confiture">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $confiture = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'confiture';
                        });
                        $confiture = reset($confiture);

                        if ($confiture) :
                        ?>
                            <img src="<?php echo htmlspecialchars($confiture['filepath']). '?v=' . time(); ?>" alt="Confiture de St Julien de Peyrolas">
                        <?php else : ?>
                            <img src="CSS/images/confiture_st_julien_peyrolas_Dame_Tartine.webp" alt="Confiture de St Julien de PeyrolasConfiture de St Julien de Peyrolas">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="confiture">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_confiture = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_confiture';
                        });
                        $para_confiture = reset($para_confiture);

                        if ($para_confiture) :
                        ?>
                            <p><?php echo htmlspecialchars($para_confiture['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_confiture">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_miel = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_miel';
                        });
                        $titre_miel = reset($titre_miel);

                        if ($titre_miel) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_miel['content']); ?></h3>
                        <?php else : ?>
                            <h3>Miel de St Alexandre et de Pont Saint-Esprit</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_miel">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $miel = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'miel';
                        });
                        $miel = reset($miel);

                        if ($miel) :
                        ?>
                            <img src="<?php echo htmlspecialchars($miel['filepath']). '?v=' . time(); ?>" alt="Miel de St Alexandre et de Pont Saint-Esprit">
                        <?php else : ?>
                            <img src="CSS/images/sucre_saint_alexandre_pont_st_esprit.webp" alt="Miel de St Alexandre et de Pont Saint-Esprit">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="miel">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_miel = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_miel';
                        });
                        $para_miel = reset($para_miel);

                        if ($para_miel) :
                        ?>
                            <p><?php echo htmlspecialchars($para_miel['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_miel">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_pomme_bio = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_pomme_bio';
                        });
                        $titre_pomme_bio = reset($titre_pomme_bio);

                        if ($titre_pomme_bio) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_pomme_bio['content']); ?></h3>
                        <?php else : ?>
                            <h3>Jus de Pomme bio de Lamotte du Rhône</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_pomme_bio">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $pomme_bio = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'pomme_bio';
                        });
                        $pomme_bio = reset($pomme_bio);

                        if ($pomme_bio) :
                        ?>
                            <img src="<?php echo htmlspecialchars($pomme_bio['filepath']). '?v=' . time(); ?>" alt="Jus de pomme bio de Lamotte du Rhône">
                        <?php else : ?>
                            <img src="CSS/images/jus_pomme.webp" alt="Jus de pomme bio de Lamotte du Rhône">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="pomme_bio">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_pomme_bio = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_pomme_bio';
                        });
                        $para_pomme_bio = reset($para_pomme_bio);

                        if ($para_pomme_bio) :
                        ?>
                            <p><?php echo htmlspecialchars($para_pomme_bio['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_pomme_bio">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_jus_poires = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_jus_poires';
                        });
                        $titre_jus_poires = reset($titre_jus_poires);

                        if ($titre_jus_poires) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_jus_poires['content']); ?></h3>
                        <?php else : ?>
                            <h3>Jus de Poires de Lamotte du Rhône</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_jus_poires">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $jus_poires = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'jus_poires';
                        });
                        $jus_poires = reset($jus_poires);

                        if ($jus_poires) :
                        ?>
                            <img src="<?php echo htmlspecialchars($jus_poires['filepath']). '?v=' . time(); ?>" alt="Jus de poires">
                        <?php else : ?>
                            <img src="CSS/images/jus_poires.webp" alt="Jus de poires">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="jus_poires">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_jus_poires = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_jus_poires';
                        });
                        $para_jus_poires = reset($para_jus_poires);

                        if ($para_jus_poires) :
                        ?>
                            <p><?php echo htmlspecialchars($para_jus_poires['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_jus_poires">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item5">
                    <div class="centre_edit">
                        <?php
                        $titre_jus_pomme_citron = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_jus_pomme_citron';
                        });
                        $titre_jus_pomme_citron = reset($titre_jus_pomme_citron);

                        if ($titre_jus_pomme_citron) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_jus_pomme_citron['content']); ?></h3>
                        <?php else : ?>
                            <h3>Jus de Pomme et Citron de Pont Saint-Esprit</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_jus_pomme_citron">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $jus_pomme_citron = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'jus_pomme_citron';
                        });
                        $jus_pomme_citron = reset($jus_pomme_citron);

                        if ($jus_pomme_citron) :
                        ?>
                            <img src="<?php echo htmlspecialchars($jus_pomme_citron['filepath']). '?v=' . time(); ?>" alt="Jus de Pomme et Citron de Pont Saint-Esprit">
                        <?php else : ?>
                            <img src="CSS/images/jus_pomme_citron.webp" alt="Jus de Pomme et Citron de Pont Saint-Esprit">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="jus_pomme_citron">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_jus_pomme_citron = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_jus_pomme_citron';
                        });
                        $para_jus_pomme_citron = reset($para_jus_pomme_citron);

                        if ($para_jus_pomme_citron) :
                        ?>
                            <p><?php echo htmlspecialchars($para_jus_pomme_citron['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_jus_pomme_citron">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item6">
                    <div class="centre_edit">
                        <?php
                        $titre_jus_pomme_kiwi = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_jus_pomme_kiwi';
                        });
                        $titre_jus_pomme_kiwi = reset($titre_jus_pomme_kiwi);

                        if ($titre_jus_pomme_kiwi) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_jus_pomme_kiwi['content']); ?></h3>
                        <?php else : ?>
                            <h3>Jus de Pomme et Kiwi de Pont Saint-Esprit</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_jus_pomme_kiwi">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $jus_pomme_kiwi = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'jus_pomme_kiwi';
                        });
                        $jus_pomme_kiwi = reset($jus_pomme_kiwi);

                        if ($jus_pomme_kiwi) :
                        ?>
                            <img src="<?php echo htmlspecialchars($jus_pomme_kiwi['filepath']). '?v=' . time(); ?>" alt="Jus de Pomme et Kiwi de Pont Saint-Esprit">
                        <?php else : ?>
                            <img src="CSS/images/jus_pomme_kiwi.webp" alt="Jus de Pomme et Kiwi de Pont Saint-Esprit">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="jus_pomme_kiwi">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_jus_pomme_kiwi = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_jus_pomme_kiwi';
                        });
                        $para_jus_pomme_kiwi = reset($para_jus_pomme_kiwi);

                        if ($para_jus_pomme_kiwi) :
                        ?>
                            <p><?php echo htmlspecialchars($para_jus_pomme_kiwi['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_jus_pomme_kiwi">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item6">
                    <div class="centre_edit">
                        <?php
                        $titre_limonade_artisanale = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_limonade_artisanale';
                        });
                        $titre_limonade_artisanale = reset($titre_limonade_artisanale);

                        if ($titre_limonade_artisanale) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_limonade_artisanale['content']); ?></h3>
                        <?php else : ?>
                            <h3>Limonade Artisanale</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_limonade_artisanale">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $limonade_artisanale = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'limonade_artisanale';
                        });
                        $limonade_artisanale = reset($limonade_artisanale);

                        if ($limonade_artisanale) :
                        ?>
                            <img src="<?php echo htmlspecialchars($limonade_artisanale['filepath']). '?v=' . time(); ?>" alt="Limonade Artisanale">
                        <?php else : ?>
                            <img src="CSS/images/limonade_artisanale.webp" alt="Limonade Artisanale">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="limonade_artisanale">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_limonade_artisanale = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_limonade_artisanale';
                        });
                        $para_limonade_artisanale = reset($para_limonade_artisanale);

                        if ($para_limonade_artisanale) :
                        ?>
                            <p><?php echo htmlspecialchars($para_limonade_artisanale['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_limonade_artisanale">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item7">
                    <div class="centre_edit">
                        <?php
                        $titre_biere_espelette = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_biere_espelette';
                        });
                        $titre_biere_espelette = reset($titre_biere_espelette);

                        if ($titre_biere_espelette) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_biere_espelette['content']); ?></h3>
                        <?php else : ?>
                            <h3>Bière Espelette</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_biere_espelette">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $biere_espelette = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'biere_espelette';
                        });
                        $biere_espelette = reset($biere_espelette);

                        if ($biere_espelette) :
                        ?>
                            <img src="<?php echo htmlspecialchars($biere_espelette['filepath']). '?v=' . time(); ?>" alt="Bière Espelette">
                        <?php else : ?>
                            <img src="CSS/images/Bière_espelette.webp" alt="Bière Espelette">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="biere_espelette">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_biere_espelette = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_biere_espelette';
                        });
                        $para_biere_espelette = reset($para_biere_espelette);

                        if ($para_biere_espelette) :
                        ?>
                            <p><?php echo htmlspecialchars($para_biere_espelette['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_biere_espelette">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
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
    <script src="JS/main.js?v=<?php echo time(); ?>"></script>
    <script src="JS/horaire.js?v=<?php echo time(); ?>"></script>
</body>

</html>