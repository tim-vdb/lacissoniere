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
    <link rel="stylesheet" href="CSS/vin.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="CSS/images/LOGO_CISSONIERE.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>Venez découvrir la cave à vin de La Cissonière</title>
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
                                <a href="vin.php#vins_rouges" class="link_vins">Vin Rouge</a>
                            </li>
                            <li>
                                <a href="vin.php#vins_blancs" class="link_vins">Vin Blanc</a>
                            </li>
                            <li>
                                <a href="vin.php#vins_roses" class="link_vins">Vin Rosé</a>
                            </li>
                            <li>
                                <a href="vin.php#local" class="link_vins">Domaine Viticole Local</a>
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
                                        <a href="vin.php#vins_rouges" class="link_vins">Vin Rouge</a>
                                    </li>
                                    <li>
                                        <a href="vin.php#vins_blancs" class="link_vins">Vin Blanc</a>
                                    </li>
                                    <li>
                                        <a href="vin.php#vins_roses" class="link_vins">Vin Rosé</a>
                                    </li>
                                    <li>
                                        <a href="vin.php#local" class="link_vins">Domaine Viticole Local</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </nav>
                </div>
                <nav id="navbar_sticky_produits" class="hideOnPhone">
                    <ul>
                        <li class="container_links">
                            <a href="#vins_rouges" class="produits">Vin Rouge</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#vins_blancs" class="produits">Vin Blanc</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#vins_roses" class="produits">Vin Rosé</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#local" class="produits">Domaine Viticole Local</a>
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
                                    <a href="#vins_rouges" class="closeByLinks">Section Vin Rouge &#10153;</a>
                                </li>
                                <li>
                                    <a href="#vins_blancs" class="closeByLinks">Section Vin Blanc &#10153;</a>
                                </li>
                                <li>
                                    <a href="#vins_roses" class="closeByLinks">Section Vin Rosé &#10153;</a>
                                </li>
                                <li>
                                    <a href="#local" class="closeByLinks">Section Domaine Viticole Local &#10153;</a>
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

        <section class="section" id="vins_rouges">
            <div class="centre_edit">
                <?php
                $titre_vin_rouge = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_vin_rouge';
                });
                $titre_vin_rouge = reset($titre_vin_rouge);

                if ($titre_vin_rouge) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_vin_rouge['content']); ?></h2>
                <?php else : ?>
                    <h2>Vin Rouge</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_vin_rouge">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_chateauneuf = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_chateauneuf';
                        });
                        $titre_vin_chateauneuf = reset($titre_vin_chateauneuf);

                        if ($titre_vin_chateauneuf) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_chateauneuf['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin du Chateauneuf-du-Pape</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_chateauneuf">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_chateauneuf = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_chateauneuf';
                        });
                        $vin_chateauneuf = reset($vin_chateauneuf);

                        if ($vin_chateauneuf) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_chateauneuf['filepath']). '?v=' . time(); ?>" alt="Vin du Chateauneuf-du-Pape">
                        <?php else : ?>
                            <img src="CSS/images/rouge_chateauneuf-du-pape.webp" alt="Vin du Chateauneuf-du-Pape">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_chateauneuf">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_chateauneuf = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_chateauneuf';
                        });
                        $para_vin_chateauneuf = reset($para_vin_chateauneuf);

                        if ($para_vin_chateauneuf) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_chateauneuf['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_chateauneuf">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">

                    <div class="centre_edit">
                        <?php
                        $titre_vin_Cornas = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_Cornas';
                        });
                        $titre_vin_Cornas = reset($titre_vin_Cornas);

                        if ($titre_vin_Cornas) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_Cornas['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de Cornas</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_Cornas">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $rouge_cornas = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'rouge_cornas';
                        });
                        $rouge_cornas = reset($rouge_cornas);

                        if ($rouge_cornas) :
                        ?>
                            <img src="<?php echo htmlspecialchars($rouge_cornas['filepath']). '?v=' . time(); ?>" alt="Vin de Cornas">
                        <?php else : ?>
                            <img src="CSS/images/rouge_cornas.webp" alt="Vin de Cornas">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="rouge_cornas">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_cornas = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_cornas';
                        });
                        $para_vin_cornas = reset($para_vin_cornas);

                        if ($para_vin_cornas) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_cornas['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_cornas">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_masannay = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_masannay';
                        });
                        $titre_vin_masannay = reset($titre_vin_masannay);

                        if ($titre_vin_masannay) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_masannay['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de Masannay</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_masannay">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $rouge_masannay = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'rouge_masannay';
                        });
                        $rouge_masannay = reset($rouge_masannay);

                        if ($rouge_masannay) :
                        ?>
                            <img src="<?php echo htmlspecialchars($rouge_masannay['filepath']). '?v=' . time(); ?>" alt="Vin de Masannay">
                        <?php else : ?>
                            <img src="CSS/images/rouge_masannay.webp" alt="Vin de Masannay">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="rouge_masannay">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_masannay = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_masannay';
                        });
                        $para_vin_masannay = reset($para_vin_masannay);

                        if ($para_vin_masannay) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_masannay['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_masannay">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_cazaban = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_cazaban';
                        });
                        $titre_vin_cazaban = reset($titre_vin_cazaban);

                        if ($titre_vin_cazaban) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_cazaban['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de Cazaban de l'Aude</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_cazaban">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $rouge_cazaban = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'rouge_cazaban';
                        });
                        $rouge_cazaban = reset($rouge_cazaban);

                        if ($rouge_cazaban) :
                        ?>
                            <img src="<?php echo htmlspecialchars($rouge_cazaban['filepath']). '?v=' . time(); ?>" alt="Vin de Cazaban de l'Aude">
                        <?php else : ?>
                            <img src="CSS/images/rouge_cazaban-aude.webp" alt="Vin de Cazaban de l'Aude">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="rouge_cazaban">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_cazaban = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_cazaban';
                        });
                        $para_vin_cazaban = reset($para_vin_cazaban);

                        if ($para_vin_cazaban) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_cazaban['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_cazaban">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item5">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_cairanne = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_cairanne';
                        });
                        $titre_vin_cairanne = reset($titre_vin_cairanne);

                        if ($titre_vin_cairanne) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_cairanne['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de Cairanne</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_cairanne">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $rouge_cairanne = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'rouge_cairanne';
                        });
                        $rouge_cairanne = reset($rouge_cairanne);

                        if ($rouge_cairanne) :
                        ?>
                            <img src="<?php echo htmlspecialchars($rouge_cairanne['filepath']). '?v=' . time(); ?>" alt="Vin de Cairanne">
                        <?php else : ?>
                            <img src="CSS/images/rouge_cairanne.webp" alt="Vin de Cairanne">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="rouge_cairanne">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_cairanne = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_cairanne';
                        });
                        $para_vin_cairanne = reset($para_vin_cairanne);

                        if ($para_vin_cairanne) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_cairanne['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_cairanne">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="vins_blancs">
            <div class="centre_edit">
                <?php
                $titre_vin_blanc = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_vin_blanc';
                });
                $titre_vin_blanc = reset($titre_vin_blanc);

                if ($titre_vin_blanc) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_vin_blanc['content']); ?></h2>
                <?php else : ?>
                    <h2>Vin Blanc</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_vin_blanc">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_uchaux = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_uchaux';
                        });
                        $titre_vin_uchaux = reset($titre_vin_uchaux);

                        if ($titre_vin_uchaux) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_uchaux['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin Blanc de Uchaux</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_uchaux">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_blanc_uchaux = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_blanc_uchaux';
                        });
                        $vin_blanc_uchaux = reset($vin_blanc_uchaux);

                        if ($vin_blanc_uchaux) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_blanc_uchaux['filepath']). '?v=' . time(); ?>" alt="Vin Blanc de Uchaux">
                        <?php else : ?>
                            <img src="CSS/images/vinBlanc_uchaux.webp" alt="Vin Blanc de Uchaux">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_blanc_uchaux">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_uchaux = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_uchaux';
                        });
                        $para_vin_uchaux = reset($para_vin_uchaux);

                        if ($para_vin_uchaux) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_uchaux['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_uchaux">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_aude = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_aude';
                        });
                        $titre_vin_aude = reset($titre_vin_aude);

                        if ($titre_vin_aude) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_aude['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin Blanc du pays d'Aude</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_aude">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_blanc_aude = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_blanc_aude';
                        });
                        $vin_blanc_aude = reset($vin_blanc_aude);

                        if ($vin_blanc_aude) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_blanc_aude['filepath']). '?v=' . time(); ?>" alt="Vin Blanc du pays d'Aude">
                        <?php else : ?>
                            <img src="CSS/images/vinBlanc_pays_aude.webp" alt="Vin Blanc du pays d'Aude">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_blanc_aude">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_aude = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_aude';
                        });
                        $para_vin_aude = reset($para_vin_aude);

                        if ($para_vin_aude) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_aude['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_aude">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="vins_roses">
            <div class="centre_edit">
                <?php
                $titre_vin_rosé = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_vin_rosé';
                });
                $titre_vin_rosé = reset($titre_vin_rosé);

                if ($titre_vin_rosé) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_vin_rosé['content']); ?></h2>
                <?php else : ?>
                    <h2>Vin Rosé</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_vin_rosé">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_languedoc = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_languedoc';
                        });
                        $titre_vin_languedoc = reset($titre_vin_languedoc);

                        if ($titre_vin_languedoc) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_languedoc['content']); ?></h3>
                        <?php else : ?>
                            <h3>Rose du Languedoc</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_languedoc">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $roseLanguedoc = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'roseLanguedoc';
                        });
                        $roseLanguedoc = reset($roseLanguedoc);

                        if ($roseLanguedoc) :
                        ?>
                            <img src="<?php echo htmlspecialchars($roseLanguedoc['filepath']). '?v=' . time(); ?>" alt="Rose du Languedoc">
                        <?php else : ?>
                            <img src="CSS/images/rose_Languedoc.webp" alt="Rose du Languedoc">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="roseLanguedoc">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_languedoc = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_languedoc';
                        });
                        $para_vin_languedoc = reset($para_vin_languedoc);

                        if ($para_vin_languedoc) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_languedoc['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_languedoc">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="local">
            <div class="centre_edit">
                <?php
                $titre_vin_local = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_vin_local';
                });
                $titre_vin_local = reset($titre_vin_local);

                if ($titre_vin_local) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_vin_local['content']); ?></h2>
                <?php else : ?>
                    <h2>Domaine Viticole Local</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_vin_local">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_famille_roche = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_famille_roche';
                        });
                        $titre_vin_famille_roche = reset($titre_vin_famille_roche);

                        if ($titre_vin_famille_roche) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_famille_roche['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de la famille Roche de Pont Saint-Esprit</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_famille_roche">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_familleRoche = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_familleRoche';
                        });
                        $vin_familleRoche = reset($vin_familleRoche);

                        if ($vin_familleRoche) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_familleRoche['filepath']). '?v=' . time(); ?>" alt="Vin Rouge">
                        <?php else : ?>
                            <img src="CSS/images/vin_famille_roche.webp" alt="Vin Rouge Famille Roche Pont Saint-Esprit">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_familleRoche">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_famille_roche = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_famille_roche';
                        });
                        $para_vin_famille_roche = reset($para_vin_famille_roche);

                        if ($para_vin_famille_roche) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_famille_roche['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_famille_roche">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_famille_benoit = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_famille_benoit';
                        });
                        $titre_vin_famille_benoit = reset($titre_vin_famille_benoit);

                        if ($titre_vin_famille_benoit) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_famille_benoit['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de la famille Benoît de Carsan</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_famille_benoit">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_familleBenoit = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_familleBenoit';
                        });
                        $vin_familleBenoit = reset($vin_familleBenoit);

                        if ($vin_familleBenoit) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_familleBenoit['filepath']). '?v=' . time(); ?>" alt="Vin Rouge">
                        <?php else : ?>
                            <img src="CSS/images/vin_famille_Benoit_Carsan.webp" alt="Vin Rouge Famille Benoît de Carsan">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_familleBenoit">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_famille_benoit = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_famille_benoit';
                        });
                        $para_vin_famille_benoit = reset($para_vin_famille_benoit);

                        if ($para_vin_famille_benoit) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_famille_benoit['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_famille_benoit">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_famille_gerus = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_famille_gerus';
                        });
                        $titre_vin_famille_gerus = reset($titre_vin_famille_gerus);

                        if ($titre_vin_famille_gerus) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_famille_gerus['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de la famille Gerus Casadeval</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_famille_gerus">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_familleGerus = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_familleGerus';
                        });
                        $vin_familleGerus = reset($vin_familleGerus);

                        if ($vin_familleGerus) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_familleGerus['filepath']). '?v=' . time(); ?>" alt="Vin Rouge Famille Gerus Casadeval Saint Étienne des sorts">
                        <?php else : ?>
                            <img src="CSS/images/vin_famille_Gerus.webp" alt="Vin Rouge Famille Gerus Casadeval Saint Étienne des sorts">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_familleGerus">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_famille_gerus = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_famille_gerus';
                        });
                        $para_vin_famille_gerus = reset($para_vin_famille_gerus);

                        if ($para_vin_famille_gerus) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_famille_gerus['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_famille_gerus">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_famille_jouve = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_famille_jouve';
                        });
                        $titre_vin_famille_jouve = reset($titre_vin_famille_jouve);

                        if ($titre_vin_famille_jouve) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_famille_jouve['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de la famille Jouve de Laval</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_famille_jouve">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_familleJouve = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_familleJouve';
                        });
                        $vin_familleJouve = reset($vin_familleJouve);

                        if ($vin_familleJouve) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_familleJouve['filepath']). '?v=' . time(); ?>" alt="Vin Rouge Famille Jouve de Laval Saint Roman">
                        <?php else : ?>
                            <img src="CSS/images/vin_famille_Jouve.webp" alt="Vin Rouge Famille Jouve de Laval Saint Roman">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_familleJouve">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_famille_jouve = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_famille_jouve';
                        });
                        $para_vin_famille_jouve = reset($para_vin_famille_jouve);

                        if ($para_vin_famille_jouve) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_famille_jouve['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_famille_jouve">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item5">
                    <div class="centre_edit">
                        <?php
                        $titre_vin_famille_jocteur = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_vin_famille_jocteur';
                        });
                        $titre_vin_famille_jocteur = reset($titre_vin_famille_jocteur);

                        if ($titre_vin_famille_jocteur) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_vin_famille_jocteur['content']); ?></h3>
                        <?php else : ?>
                            <h3>Vin de la cave Jocteur</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_vin_famille_jocteur">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $vin_caveJocteur = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'vin_caveJocteur';
                        });
                        $vin_caveJocteur = reset($vin_caveJocteur);

                        if ($vin_caveJocteur) :
                        ?>
                            <img src="<?php echo htmlspecialchars($vin_caveJocteur['filepath']). '?v=' . time(); ?>" alt="Vin Rouge Famille Jouve de Laval Saint Roman">
                        <?php else : ?>
                            <img src="CSS/images/vin_cave_Jocteur.webp" alt="Vin de la cave Jocteur">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="vin_caveJocteur">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_vin_famille_jocteur = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_vin_famille_jocteur';
                        });
                        $para_vin_famille_jocteur = reset($para_vin_famille_jocteur);

                        if ($para_vin_famille_jocteur) :
                        ?>
                            <p><?php echo htmlspecialchars($para_vin_famille_jocteur['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_vin_famille_jocteur">
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