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
    <link rel="stylesheet" href="CSS/viande.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="CSS/images/LOGO_CISSONIERE.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>Venez découvrir tous les viandes de La Cissonière</title>
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
                                <a href="viande.php#boeuf" class="link_viandes">Bœuf</a>
                            </li>
                            <li class="li_market">
                                <a href="viande.php#porc" class="link_viandes">Porc</a>
                                <a href="viande.php#porc" class="icon_market_link"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li class="li_market">
                                <a href="viande.php#volaille" class="link_viandes">Volaille</a>
                                <a href="viande.php#volaille" class="icon_market_link"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                            </li>
                            <li>
                                <a href="viande.php#veau" class="link_viandes">Veau</a>
                            </li>
                            <li>
                                <a href="viande.php#agneau" class="link_viandes">Agneau</a>
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
                                        <a href="viande.php#boeuf" class="link_viandes">Bœuf</a>
                                    </li>
                                    <li class="li_market">
                                        <a href="viande.php#porc" class="link_viandes">Porc</a>
                                        <a href="viande.php#porc" class="icon_market_link"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                    </li>
                                    <li class="li_market">
                                        <a href="viande.php#volaille" class="link_viandes">Volaille</a>
                                        <a href="viande.php#volaille" class="icon_market_link"><img src="CSS/images/market-stall_modif.svg" class="market_icon" alt="icon market"></a>
                                    </li>
                                    <li>
                                        <a href="viande.php#veau" class="link_viandes">Veau</a>
                                    </li>
                                    <li>
                                        <a href="viande.php#agneau" class="link_viandes">Agneau</a>
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
                <nav id="navbar_sticky_produits" class="hideOnPhone">
                    <ul>
                        <li class="container_links">
                            <a href="#boeuf" class="produits">Bœuf</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#porc" class="produits_NextToIcon">Porc</a>
                            <a href="#porc" class="produits_icon"><img src="CSS/images/market-stall_modif_beige_produits.svg" alt="icon market beige"></a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#volaille" class="produits_NextToIcon">Volaille</a>
                            <a href="#volaille" class="produits_icon"><img src="CSS/images/market-stall_modif_beige_produits.svg" alt="icon market beige"></a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#veau" class="produits">Veau</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#agneau" class="produits">Agneau</a>
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
                                    <a href="#boeuf" class="closeByLinks">Section Bœuf &#10153;</a>
                                </li>
                                <li>
                                    <a href="#porc" class="closeByLinks">Section Porc &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="#volaille" class="closeByLinks">Section Volaille &#10153;</a>
                                    <img src="CSS/images/market-stall_modif_beige.svg" class="market_icon" alt="icon market">
                                </li>
                                <li>
                                    <a href="#veau" class="closeByLinks">Section Veau &#10153;</a>
                                </li>
                                <li>
                                    <a href="#agneau" class="closeByLinks">Section Agneau &#10153;</a>
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

        <section class="section" id="boeuf">
            <div class="centre_edit">
                <?php
                $titre_boeuf = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_boeuf';
                });
                $titre_boeuf = reset($titre_boeuf);

                if ($titre_boeuf) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_boeuf['content']); ?></h2>
                    <?php else : ?>
                        <h2>Bœuf</h2>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="titre_boeuf">
                        <button class="add-text-form">Modifier le Titre</button>
                        <div class="form-area"></div>
                    </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_Boeuf1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Boeuf1';
                        });
                        $titre_Boeuf1 = reset($titre_Boeuf1);

                        if ($titre_Boeuf1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Boeuf1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Boeuf1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Boeuf1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Boeuf1';
                        });
                        $img_Boeuf1 = reset($img_Boeuf1);

                        if ($img_Boeuf1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Boeuf1['filepath']). '?v=' . time(); ?>" alt="Image de viande de Boeuf 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Boeuf 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Boeuf1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Boeuf1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Boeuf1';
                        });
                        $para_Boeuf1 = reset($para_Boeuf1);

                        if ($para_Boeuf1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Boeuf1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Boeuf1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_Boeuf2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Boeuf2';
                        });
                        $titre_Boeuf2 = reset($titre_Boeuf2);

                        if ($titre_Boeuf2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Boeuf2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Boeuf2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Boeuf2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Boeuf2';
                        });
                        $img_Boeuf2 = reset($img_Boeuf2);

                        if ($img_Boeuf2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Boeuf2['filepath']). '?v=' . time(); ?>" alt="Image de viande de Boeuf 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Boeuf 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Boeuf2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Boeuf2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Boeuf2';
                        });
                        $para_Boeuf2 = reset($para_Boeuf2);

                        if ($para_Boeuf2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Boeuf2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Boeuf2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="porc">
            <div class="centre_edit">
                <?php
                $titre_porc = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_porc';
                });
                $titre_porc = reset($titre_porc);

                if ($titre_porc) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_porc['content']); ?></h2>
                    <?php else : ?>
                        <h2>Porc</h2>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="titre_porc">
                        <button class="add-text-form">Modifier le Titre</button>
                        <div class="form-area"></div>
                    </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_Porc1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Porc1';
                        });
                        $titre_Porc1 = reset($titre_Porc1);

                        if ($titre_Porc1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Porc1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Porc1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Porc1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Porc1';
                        });
                        $img_Porc1 = reset($img_Porc1);

                        if ($img_Porc1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Porc1['filepath']). '?v=' . time(); ?>" alt="Image de viande de Porc 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Porc 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Porc1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Porc1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Porc1';
                        });
                        $para_Porc1 = reset($para_Porc1);

                        if ($para_Porc1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Porc1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Porc1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_Porc2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Porc2';
                        });
                        $titre_Porc2 = reset($titre_Porc2);

                        if ($titre_Porc2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Porc2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Porc2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Porc2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Porc2';
                        });
                        $img_Porc2 = reset($img_Porc2);

                        if ($img_Porc2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Porc2['filepath']). '?v=' . time(); ?>" alt="Image de viande de Porc 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Porc 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Porc2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Porc2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Porc2';
                        });
                        $para_Porc2 = reset($para_Porc2);

                        if ($para_Porc2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Porc2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Porc2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="volaille">
            <div class="centre_edit">
                <?php
                $titre_volaille = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_volaille';
                });
                $titre_volaille = reset($titre_volaille);

                if ($titre_volaille) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_volaille['content']); ?></h2>
                    <?php else : ?>
                        <h2>Volaille</h2>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="titre_volaille">
                        <button class="add-text-form">Modifier le Titre</button>
                        <div class="form-area"></div>
                    </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_Volaille1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Volaille1';
                        });
                        $titre_Volaille1 = reset($titre_Volaille1);

                        if ($titre_Volaille1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Volaille1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Volaille1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Volaille1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Volaille1';
                        });
                        $img_Volaille1 = reset($img_Volaille1);

                        if ($img_Volaille1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Volaille1['filepath']). '?v=' . time(); ?>" alt="Image de viande de Volaille 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Volaille 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Volaille1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Volaille1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Volaille1';
                        });
                        $para_Volaille1 = reset($para_Volaille1);

                        if ($para_Volaille1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Volaille1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Volaille1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_Volaille2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Volaille2';
                        });
                        $titre_Volaille2 = reset($titre_Volaille2);

                        if ($titre_Volaille2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Volaille2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Volaille2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Volaille2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Volaille2';
                        });
                        $img_Volaille2 = reset($img_Volaille2);

                        if ($img_Volaille2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Volaille2['filepath']). '?v=' . time(); ?>" alt="Image de viande de Volaille 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Volaille 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Volaille2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Volaille2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Volaille2';
                        });
                        $para_Volaille2 = reset($para_Volaille2);

                        if ($para_Volaille2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Volaille2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Volaille2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="veau">
            <div class="centre_edit">
                <?php
                $titre_veau = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_veau';
                });
                $titre_veau = reset($titre_veau);

                if ($titre_veau) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_veau['content']); ?></h2>
                    <?php else : ?>
                        <h2>Veau</h2>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="titre_veau">
                        <button class="add-text-form">Modifier le Titre</button>
                        <div class="form-area"></div>
                    </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_Veau1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Veau1';
                        });
                        $titre_Veau1 = reset($titre_Veau1);

                        if ($titre_Veau1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Veau1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Veau1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Veau1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Veau1';
                        });
                        $img_Veau1 = reset($img_Veau1);

                        if ($img_Veau1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Veau1['filepath']). '?v=' . time(); ?>" alt="Image de viande de Veau 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Veau 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Veau1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Veau1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Veau1';
                        });
                        $para_Veau1 = reset($para_Veau1);

                        if ($para_Veau1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Veau1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Veau1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_Veau2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Veau2';
                        });
                        $titre_Veau2 = reset($titre_Veau2);

                        if ($titre_Veau2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Veau2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Veau2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Veau2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Veau2';
                        });
                        $img_Veau2 = reset($img_Veau2);

                        if ($img_Veau2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Veau2['filepath']). '?v=' . time(); ?>" alt="Image de viande de Veau 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Veau 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Veau2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Veau2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Veau2';
                        });
                        $para_Veau2 = reset($para_Veau2);

                        if ($para_Veau2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Veau2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Veau2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="agneau">

            <div class="centre_edit">
                <?php
                $titre_agneau = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_agneau';
                });
                $titre_agneau = reset($titre_agneau);

                if ($titre_agneau) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_agneau['content']); ?></h2>
                    <?php else : ?>
                        <h2>Agneau</h2>
                    <?php endif; ?>
                    <div class="text-container editPage" data-text-id="titre_agneau">
                        <button class="add-text-form">Modifier le Titre</button>
                        <div class="form-area"></div>
                    </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_Agneau1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Agneau1';
                        });
                        $titre_Agneau1 = reset($titre_Agneau1);

                        if ($titre_Agneau1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Agneau1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Agneau1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Agneau1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Agneau1';
                        });
                        $img_Agneau1 = reset($img_Agneau1);

                        if ($img_Agneau1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Agneau1['filepath']). '?v=' . time(); ?>" alt="Image de viande de Agneau 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Agneau 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Agneau1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Agneau1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Agneau1';
                        });
                        $para_Agneau1 = reset($para_Agneau1);

                        if ($para_Agneau1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Agneau1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Agneau1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_Agneau2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Agneau2';
                        });
                        $titre_Agneau2 = reset($titre_Agneau2);

                        if ($titre_Agneau2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Agneau2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Agneau2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Agneau2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Agneau2';
                        });
                        $img_Agneau2 = reset($img_Agneau2);

                        if ($img_Agneau2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Agneau2['filepath']). '?v=' . time(); ?>" alt="Image de viande de Agneau 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de viande de Agneau 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Agneau2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Agneau2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Agneau2';
                        });
                        $para_Agneau2 = reset($para_Agneau2);

                        if ($para_Agneau2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Agneau2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Agneau2">
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