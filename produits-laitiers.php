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
    <link rel="stylesheet" href="CSS/produits-laitiers.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="CSS/images/LOGO_CISSONIERE.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <title>Venez découvrir tous les produits laitiers de La Cissonière</title>
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
                    <a href="/"><img src="<?php echo htmlspecialchars($logoHeader['filepath']) . '?v=' . time(); ?>" id="Logo" alt="Logo La Cissoniere"></a>
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
                    <li class="espacement_links">|</li>
                    <li class="container_links">
                        <a href="produits-laitiers.php" class="laitier">Produits Laitiers</a>
                        <ul>
                            <li>
                                <a href="produits-laitiers.php#fromage_brebis" class="link_laitier">Fromage Brebis</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#fromage_chevre" class="link_laitier">Fromage Chèvre</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#fromage_vache" class="link_laitier">Fromage Vache</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#cremerie" class="link_laitier LinkProduits_redirect">Crèmerie</a>
                            </li>
                            <li>
                                <a href="produits-laitiers.php#saison" class="link_laitier">Saison</a>
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
                                        <a href="produits-laitiers.php#fromage_brebis" class="link_laitier">Fromage Brebis</a>
                                    </li>
                                    <li>
                                        <a href="produits-laitiers.php#fromage_chevre" class="link_laitier">Fromage Chèvre</a>
                                    </li>
                                    <li>
                                        <a href="produits-laitiers.php#fromage_vache" class="link_laitier">Fromage Vache</a>
                                    </li>
                                    <li>
                                        <a href="produits-laitiers.php#cremerie" class="link_laitier LinkProduits_redirect">Crèmerie</a>
                                    </li>
                                    <li>
                                        <a href="produits-laitiers.php#saison" class="link_laitier">Saison</a>
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
                            <a href="#fromage_brebis" class="produits">Fromage Brebis</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#fromage_chevre" class="produits">Fromage Chèvre</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#fromage_vache" class="produits">Fromage Vache</a>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#cremerie" class="cremerie_produits">Crèmerie</a>
                            <ul>
                                <li>
                                    <a href="produits-laitiers.php#cremerie" class="link_cremerie">Yaourt Chèvre</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#cremerie" class="link_cremerie">Yaourt Vache</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#cremerie" class="link_cremerie">Crème Fraîche Cru</a>
                                </li>
                                <li>
                                    <a href="produits-laitiers.php#cremerie" class="link_cremerie">Beurre Cru</a>
                                </li>
                            </ul>
                        </li>
                        <li class="espacement_links">|</li>
                        <li class="container_links">
                            <a href="#saison" class="produits">Saison</a>
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
                                    <a href="#fromage_brebis" class="closeByLinks">Section Fromage Brebis &#10153;</a>
                                </li>
                                <li>
                                    <a href="#fromage_chevre" class="closeByLinks">Section Fromage Chèvre &#10153;</a>
                                </li>
                                <li>
                                    <a href="#fromage_vache" class="closeByLinks">Section Fromage Vache &#10153;</a>
                                </li>
                                <li>
                                    <a href="#cremerie" class="closeByLinks">Section Crèmerie &#10153;</a>
                                </li>
                                <li>
                                    <a href="#saison" class="closeByLinks">Section Saison &#10153;</a>
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

        <section class="section" id="fromage_brebis">
            <div class="centre_edit">
                <?php
                $titre_fromage_brebis = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_fromage_brebis';
                });
                $titre_fromage_brebis = reset($titre_fromage_brebis);

                if ($titre_fromage_brebis) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_fromage_brebis['content']); ?></h2>
                <?php else : ?>
                    <h2>Fromage Brebis</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_fromage_brebis">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_brebis1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_brebis1';
                        });
                        $titre_fromage_brebis1 = reset($titre_fromage_brebis1);

                        if ($titre_fromage_brebis1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_brebis1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_brebis1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_brebis1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_brebis1';
                        });
                        $img_fromage_brebis1 = reset($img_fromage_brebis1);

                        if ($img_fromage_brebis1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_brebis1['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_brebis 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_brebis 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_brebis1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_brebis1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_brebis1';
                        });
                        $para_fromage_brebis1 = reset($para_fromage_brebis1);

                        if ($para_fromage_brebis1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_brebis1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_brebis1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_brebis2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_brebis2';
                        });
                        $titre_fromage_brebis2 = reset($titre_fromage_brebis2);

                        if ($titre_fromage_brebis2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_brebis2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_brebis2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_brebis2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_brebis2';
                        });
                        $img_fromage_brebis2 = reset($img_fromage_brebis2);

                        if ($img_fromage_brebis2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_brebis2['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_brebis 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_brebis 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_brebis2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_brebis2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_brebis2';
                        });
                        $para_fromage_brebis2 = reset($para_fromage_brebis2);

                        if ($para_fromage_brebis2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_brebis2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_brebis2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_brebis3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_brebis3';
                        });
                        $titre_fromage_brebis3 = reset($titre_fromage_brebis3);

                        if ($titre_fromage_brebis3) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_brebis3['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_brebis3">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_brebis3 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_brebis3';
                        });
                        $img_fromage_brebis3 = reset($img_fromage_brebis3);

                        if ($img_fromage_brebis3) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_brebis3['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_brebis 3">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_brebis 3">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_brebis3">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_brebis3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_brebis3';
                        });
                        $para_fromage_brebis3 = reset($para_fromage_brebis3);

                        if ($para_fromage_brebis3) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_brebis3['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_brebis3">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_brebis4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_brebis4';
                        });
                        $titre_fromage_brebis4 = reset($titre_fromage_brebis4);

                        if ($titre_fromage_brebis4) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_brebis4['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_brebis4">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_brebis4 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_brebis4';
                        });
                        $img_fromage_brebis4 = reset($img_fromage_brebis4);

                        if ($img_fromage_brebis4) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_brebis4['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_brebis 4">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_brebis 4">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_brebis4">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_brebis4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_brebis4';
                        });
                        $para_fromage_brebis4 = reset($para_fromage_brebis4);

                        if ($para_fromage_brebis4) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_brebis4['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_brebis4">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="fromage_chevre">
            <div class="centre_edit">
                <?php
                $titre_fromage_chevre = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_fromage_chevre';
                });
                $titre_fromage_chevre = reset($titre_fromage_chevre);

                if ($titre_fromage_chevre) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_fromage_chevre['content']); ?></h2>
                <?php else : ?>
                    <h2>Fromage Chèvre</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_fromage_chevre">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <h3>Les petits chèvres, Picodons, pelardons et chèvre du Garn</h3>
                    <div class="centre_edit">
                        <?php
                        $petit_chèvres = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'petit_chèvres';
                        });
                        $petit_chèvres = reset($petit_chèvres);

                        if ($petit_chèvres) :
                        ?>
                            <img src="<?php echo htmlspecialchars($petit_chèvres['filepath']) . '?v=' . time(); ?>" alt="Les petits chèvres, Picodons, pelardons et chèvre du Garn">
                        <?php else : ?>
                            <img src="CSS/images/petit-chèvres-picodons-pelardons-chèvre-du-Garn.webp" alt="Les petits chèvres, Picodons, pelardons et chèvre du Garn">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="petit_chèvres">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                        voluptatibus quidem odit quod.</p>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_chevre2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_chevre2';
                        });
                        $titre_fromage_chevre2 = reset($titre_fromage_chevre2);

                        if ($titre_fromage_chevre2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_chevre2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_chevre2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_chevre2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_chevre2';
                        });
                        $img_fromage_chevre2 = reset($img_fromage_chevre2);

                        if ($img_fromage_chevre2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_chevre2['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_chevre 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_chevre 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_chevre2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_chevre2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_chevre2';
                        });
                        $para_fromage_chevre2 = reset($para_fromage_chevre2);

                        if ($para_fromage_chevre2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_chevre2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_chevre2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_chevre3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_chevre3';
                        });
                        $titre_fromage_chevre3 = reset($titre_fromage_chevre3);

                        if ($titre_fromage_chevre3) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_chevre3['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_chevre3">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_chevre3 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_chevre3';
                        });
                        $img_fromage_chevre3 = reset($img_fromage_chevre3);

                        if ($img_fromage_chevre3) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_chevre3['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_chevre 3">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_chevre 3">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_chevre3">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_chevre3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_chevre3';
                        });
                        $para_fromage_chevre3 = reset($para_fromage_chevre3);

                        if ($para_fromage_chevre3) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_chevre3['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_chevre3">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_chevre4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_chevre4';
                        });
                        $titre_fromage_chevre4 = reset($titre_fromage_chevre4);

                        if ($titre_fromage_chevre4) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_chevre4['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_chevre4">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_chevre4 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_chevre4';
                        });
                        $img_fromage_chevre4 = reset($img_fromage_chevre4);

                        if ($img_fromage_chevre4) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_chevre4['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_chevre 4">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_chevre 4">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_chevre4">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_chevre4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_chevre4';
                        });
                        $para_fromage_chevre4 = reset($para_fromage_chevre4);

                        if ($para_fromage_chevre4) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_chevre4['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_chevre4">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="fromage_vache">
            <div class="centre_edit">
                <?php
                $titre_fromage_vache = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_fromage_vache';
                });
                $titre_fromage_vache = reset($titre_fromage_vache);

                if ($titre_fromage_vache) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_fromage_vache['content']); ?></h2>
                <?php else : ?>
                    <h2>Fromage Vache</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_fromage_vache">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_vache1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_vache1';
                        });
                        $titre_fromage_vache1 = reset($titre_fromage_vache1);

                        if ($titre_fromage_vache1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_vache1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_vache1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_vache1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_vache1';
                        });
                        $img_fromage_vache1 = reset($img_fromage_vache1);

                        if ($img_fromage_vache1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_vache1['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_vache 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_vache 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_vache1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_vache1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_vache1';
                        });
                        $para_fromage_vache1 = reset($para_fromage_vache1);

                        if ($para_fromage_vache1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_vache1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_vache1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_vache2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_vache2';
                        });
                        $titre_fromage_vache2 = reset($titre_fromage_vache2);

                        if ($titre_fromage_vache2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_vache2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_vache2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_vache2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_vache2';
                        });
                        $img_fromage_vache2 = reset($img_fromage_vache2);

                        if ($img_fromage_vache2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_vache2['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_vache 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_vache 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_vache2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_vache2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_vache2';
                        });
                        $para_fromage_vache2 = reset($para_fromage_vache2);

                        if ($para_fromage_vache2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_vache2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_vache2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_vache3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_vache3';
                        });
                        $titre_fromage_vache3 = reset($titre_fromage_vache3);

                        if ($titre_fromage_vache3) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_vache3['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_vache3">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_vache3 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_vache3';
                        });
                        $img_fromage_vache3 = reset($img_fromage_vache3);

                        if ($img_fromage_vache3) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_vache3['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_vache 3">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_vache 3">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_vache3">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_vache3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_vache3';
                        });
                        $para_fromage_vache3 = reset($para_fromage_vache3);

                        if ($para_fromage_vache3) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_vache3['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_vache3">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_fromage_vache4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_fromage_vache4';
                        });
                        $titre_fromage_vache4 = reset($titre_fromage_vache4);

                        if ($titre_fromage_vache4) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_fromage_vache4['content']); ?></h3>
                        <?php else : ?>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_fromage_vache4">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_fromage_vache4 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_fromage_vache4';
                        });
                        $img_fromage_vache4 = reset($img_fromage_vache4);

                        if ($img_fromage_vache4) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_fromage_vache4['filepath']) . '?v=' . time(); ?>" alt="Image de fromage_vache 4">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage_vache 4">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_fromage_vache4">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_fromage_vache4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_fromage_vache4';
                        });
                        $para_fromage_vache4 = reset($para_fromage_vache4);

                        if ($para_fromage_vache4) :
                        ?>
                            <p><?php echo htmlspecialchars($para_fromage_vache4['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_fromage_vache4">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="cremerie">
            <div class="centre_edit">
                <?php
                $titre_cremerie = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_cremerie';
                });
                $titre_cremerie = reset($titre_cremerie);

                if ($titre_cremerie) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_cremerie['content']); ?></h2>
                <?php else : ?>
                    <h2>Crèmerie</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_cremerie">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="container">
                <div class="item item1">
                    <div class="centre_edit">
                        <?php
                        $titre_Cremerie1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Cremerie1';
                        });
                        $titre_Cremerie1 = reset($titre_Cremerie1);

                        if ($titre_Cremerie1) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Cremerie1['content']); ?></h3>
                        <?php else : ?>
                            <h3>Yaourt Chèvre</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Cremerie1">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Cremerie1 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Cremerie1';
                        });
                        $img_Cremerie1 = reset($img_Cremerie1);

                        if ($img_Cremerie1) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Cremerie1['filepath']) . '?v=' . time(); ?>" alt="Image Crèmerie 1">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image Crèmerie 1">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Cremerie1">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Cremerie1 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Cremerie1';
                        });
                        $para_Cremerie1 = reset($para_Cremerie1);

                        if ($para_Cremerie1) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Cremerie1['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Cremerie1">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item2">
                    <div class="centre_edit">
                        <?php
                        $titre_Cremerie2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Cremerie2';
                        });
                        $titre_Cremerie2 = reset($titre_Cremerie2);

                        if ($titre_Cremerie2) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Cremerie2['content']); ?></h3>
                        <?php else : ?>
                            <h3>Yaourt Vache</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Cremerie2">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Cremerie2 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Cremerie2';
                        });
                        $img_Cremerie2 = reset($img_Cremerie2);

                        if ($img_Cremerie2) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Cremerie2['filepath']) . '?v=' . time(); ?>" alt="Image Crèmerie 2">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image Crèmerie 2">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Cremerie2">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Cremerie2 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Cremerie2';
                        });
                        $para_Cremerie2 = reset($para_Cremerie2);

                        if ($para_Cremerie2) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Cremerie2['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Cremerie2">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item3">
                    <div class="centre_edit">
                        <?php
                        $titre_Cremerie3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Cremerie3';
                        });
                        $titre_Cremerie3 = reset($titre_Cremerie3);

                        if ($titre_Cremerie3) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Cremerie3['content']); ?></h3>
                        <?php else : ?>
                            <h3>Crème Fraîche Cru</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Cremerie3">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Cremerie3 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Cremerie3';
                        });
                        $img_Cremerie3 = reset($img_Cremerie3);

                        if ($img_Cremerie3) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Cremerie3['filepath']) . '?v=' . time(); ?>" alt="Image Crèmerie 3">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image Crèmerie 3">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Cremerie3">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Cremerie3 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Cremerie3';
                        });
                        $para_Cremerie3 = reset($para_Cremerie3);

                        if ($para_Cremerie3) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Cremerie3['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Cremerie3">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
                <div class="item item4">
                    <div class="centre_edit">
                        <?php
                        $titre_Cremerie4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_Cremerie4';
                        });
                        $titre_Cremerie4 = reset($titre_Cremerie4);

                        if ($titre_Cremerie4) :
                        ?>
                            <h3><?php echo htmlspecialchars($titre_Cremerie4['content']); ?></h3>
                        <?php else : ?>
                            <h3>Beurre Cru</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_Cremerie4">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $img_Cremerie4 = array_filter($rows_images, function ($image) {
                            return $image['filename'] === 'img_Cremerie4';
                        });
                        $img_Cremerie4 = reset($img_Cremerie4);

                        if ($img_Cremerie4) :
                        ?>
                            <img src="<?php echo htmlspecialchars($img_Cremerie4['filepath']) . '?v=' . time(); ?>" alt="Image Crèmerie 4">
                        <?php else : ?>
                            <img src="CSS/images/qui_sommes_opti.jpg" alt="Image Crèmerie 4">
                        <?php endif; ?>
                        <div class="image-container editPage" data-image-id="img_Cremerie4">
                            <button class="add-file-form">Modifier l'Image</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="centre_edit">
                        <?php
                        $para_Cremerie4 = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'para_Cremerie4';
                        });
                        $para_Cremerie4 = reset($para_Cremerie4);

                        if ($para_Cremerie4) :
                        ?>
                            <p><?php echo htmlspecialchars($para_Cremerie4['content']); ?></p>
                        <?php else : ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                voluptatibus quidem odit quod.</p>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="para_Cremerie4">
                            <button class="add-text-form">Modifier le Paragraphe</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section_2" id="saison">
            <div class="centre_edit">
                <?php
                $titre_saison = array_filter($rows_texts, function ($text) {
                    return $text['name'] === 'titre_saison';
                });
                $titre_saison = reset($titre_saison);

                if ($titre_saison) :
                ?>
                    <h2><?php echo htmlspecialchars($titre_saison['content']); ?></h2>
                <?php else : ?>
                    <h2>Saison</h2>
                <?php endif; ?>
                <div class="text-container editPage" data-text-id="titre_saison">
                    <button class="add-text-form">Modifier le Titre</button>
                    <div class="form-area"></div>
                </div>
            </div>
            <div class="saison">

                <div class="ete">
                    <div class="centre_edit">
                        <?php
                        $titre_été = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_été';
                        });
                        $titre_été = reset($titre_été);

                        if ($titre_été) :
                        ?>
                            <h3 class="titre_saison"><?php echo htmlspecialchars($titre_été['content']); ?></h3>
                        <?php else : ?>
                            <h3 class="titre_saison">Été</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_été">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="item item1">
                            <div class="centre_edit">
                                <?php
                                $titre_gorgonzola = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_gorgonzola';
                                });
                                $titre_gorgonzola = reset($titre_gorgonzola);

                                if ($titre_gorgonzola) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_gorgonzola['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Gorgonzola</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_gorgonzola">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_gorgonzola = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_gorgonzola';
                                });
                                $img_gorgonzola = reset($img_gorgonzola);

                                if ($img_gorgonzola) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_gorgonzola['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Gorgonzola">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Gorgonzola">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_gorgonzola">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_gorgonzola = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_gorgonzola';
                                });
                                $para_gorgonzola = reset($para_gorgonzola);

                                if ($para_gorgonzola) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_gorgonzola['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_gorgonzola">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item2">
                            <div class="centre_edit">
                                <?php
                                $titre_feta = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_feta';
                                });
                                $titre_feta = reset($titre_feta);

                                if ($titre_feta) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_feta['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Feta</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_feta">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_feta = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_feta';
                                });
                                $img_feta = reset($img_feta);

                                if ($img_feta) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_feta['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Feta">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Feta">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_feta">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_feta = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_feta';
                                });
                                $para_feta = reset($para_feta);

                                if ($para_feta) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_feta['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_feta">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item3">
                            <div class="centre_edit">
                                <?php
                                $titre_burrata = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_burrata';
                                });
                                $titre_burrata = reset($titre_burrata);

                                if ($titre_burrata) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_burrata['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Burrata</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_burrata">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_burrata = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_burrata';
                                });
                                $img_burrata = reset($img_burrata);

                                if ($img_burrata) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_burrata['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Burrata">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Burrata">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_burrata">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_burrata = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_burrata';
                                });
                                $para_burrata = reset($para_burrata);

                                if ($para_burrata) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_burrata['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_burrata">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item4">
                            <div class="centre_edit">
                                <?php
                                $titre_scamorza = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_scamorza';
                                });
                                $titre_scamorza = reset($titre_scamorza);

                                if ($titre_scamorza) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_scamorza['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Scamorza</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_scamorza">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_scamorza = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_scamorza';
                                });
                                $img_scamorza = reset($img_scamorza);

                                if ($img_scamorza) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_scamorza['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Scamorza">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Scamorza">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_scamorza">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_scamorza = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_scamorza';
                                });
                                $para_scamorza = reset($para_scamorza);

                                if ($para_scamorza) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_scamorza['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_scamorza">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hiver">
                    <div class="centre_edit">
                        <?php
                        $titre_hiver = array_filter($rows_texts, function ($text) {
                            return $text['name'] === 'titre_hiver';
                        });
                        $titre_hiver = reset($titre_hiver);

                        if ($titre_hiver) :
                        ?>
                            <h3 class="titre_saison"><?php echo htmlspecialchars($titre_hiver['content']); ?></h3>
                        <?php else : ?>
                            <h3 class="titre_saison">Hiver</h3>
                        <?php endif; ?>
                        <div class="text-container editPage" data-text-id="titre_hiver">
                            <button class="add-text-form">Modifier le Titre</button>
                            <div class="form-area"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="item item1">
                            <div class="centre_edit">
                                <?php
                                $titre_raclette = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_raclette';
                                });
                                $titre_raclette = reset($titre_raclette);

                                if ($titre_raclette) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_raclette['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Raclette</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_raclette">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_raclette = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_raclette';
                                });
                                $img_raclette = reset($img_raclette);

                                if ($img_raclette) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_raclette['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Raclette">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Raclette">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_raclette">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_raclette = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_raclette';
                                });
                                $para_raclette = reset($para_raclette);

                                if ($para_raclette) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_raclette['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_raclette">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item2">
                            <div class="centre_edit">
                                <?php
                                $titre_montDOR = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_montDOR';
                                });
                                $titre_montDOR = reset($titre_montDOR);

                                if ($titre_montDOR) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_montDOR['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Mont d'Or</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_montDOR">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_montDOR = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_montDOR';
                                });
                                $img_montDOR = reset($img_montDOR);

                                if ($img_montDOR) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_montDOR['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Mont d'Or">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Mont d'Or">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_montDOR">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_montDOR = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_montDOR';
                                });
                                $para_montDOR = reset($para_montDOR);

                                if ($para_montDOR) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_montDOR['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_montDOR">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item3">
                            <div class="centre_edit">
                                <?php
                                $titre_vacherin_fribourgeois = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_vacherin_fribourgeois';
                                });
                                $titre_vacherin_fribourgeois = reset($titre_vacherin_fribourgeois);

                                if ($titre_vacherin_fribourgeois) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_vacherin_fribourgeois['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Vacherin Fribourgeois</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_vacherin_fribourgeois">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_vacherin_fribourgeois = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_vacherin_fribourgeois';
                                });
                                $img_vacherin_fribourgeois = reset($img_vacherin_fribourgeois);

                                if ($img_vacherin_fribourgeois) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_vacherin_fribourgeois['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Vacherin Fribourgeois">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Vacherin Fribourgeois">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_vacherin_fribourgeois">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_vacherin_fribourgeois = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_vacherin_fribourgeois';
                                });
                                $para_vacherin_fribourgeois = reset($para_vacherin_fribourgeois);

                                if ($para_vacherin_fribourgeois) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_vacherin_fribourgeois['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_vacherin_fribourgeois">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item4">
                            <div class="centre_edit">
                                <?php
                                $titre_fondue_savoyarde = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_fondue_savoyarde';
                                });
                                $titre_fondue_savoyarde = reset($titre_fondue_savoyarde);

                                if ($titre_fondue_savoyarde) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_fondue_savoyarde['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Fondue Savoyarde</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_fondue_savoyarde">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_fondue_savoyarde = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_fondue_savoyarde';
                                });
                                $img_fondue_savoyarde = reset($img_fondue_savoyarde);

                                if ($img_fondue_savoyarde) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_fondue_savoyarde['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Fondue Savoyarde">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Fondue Savoyarde">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_fondue_savoyarde">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_fondue_savoyarde = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_fondue_savoyarde';
                                });
                                $para_fondue_savoyarde = reset($para_fondue_savoyarde);

                                if ($para_fondue_savoyarde) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_fondue_savoyarde['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_fondue_savoyarde">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="item item5">
                            <div class="centre_edit">
                                <?php
                                $titre_fondue_suisse = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'titre_fondue_suisse';
                                });
                                $titre_fondue_suisse = reset($titre_fondue_suisse);

                                if ($titre_fondue_suisse) :
                                ?>
                                    <h3><?php echo htmlspecialchars($titre_fondue_suisse['content']); ?></h3>
                                <?php else : ?>
                                    <h3>Fondue Suisse</h3>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="titre_fondue_suisse">
                                    <button class="add-text-form">Modifier le Titre</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $img_fondue_suisse = array_filter($rows_images, function ($image) {
                                    return $image['filename'] === 'img_fondue_suisse';
                                });
                                $img_fondue_suisse = reset($img_fondue_suisse);

                                if ($img_fondue_suisse) :
                                ?>
                                    <img src="<?php echo htmlspecialchars($img_fondue_suisse['filepath']) . '?v=' . time(); ?>" alt="Image de fromage de Fondue Suisse">
                                <?php else : ?>
                                    <img src="CSS/images/qui_sommes_opti.jpg" alt="Image de fromage de Fondue Suisse">
                                <?php endif; ?>
                                <div class="image-container editPage" data-image-id="img_fondue_suisse">
                                    <button class="add-file-form">Modifier l'Image</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                            <div class="centre_edit">
                                <?php
                                $para_fondue_suisse = array_filter($rows_texts, function ($text) {
                                    return $text['name'] === 'para_fondue_suisse';
                                });
                                $para_fondue_suisse = reset($para_fondue_suisse);

                                if ($para_fondue_suisse) :
                                ?>
                                    <p><?php echo htmlspecialchars($para_fondue_suisse['content']); ?></p>
                                <?php else : ?>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad itaque iste iure animi omnis
                                        voluptate! Libero facere recusandae dolores vitae ducimus at fuga velit, nostrum numquam
                                        voluptatibus quidem odit quod.</p>
                                <?php endif; ?>
                                <div class="text-container editPage" data-text-id="para_fondue_suisse">
                                    <button class="add-text-form">Modifier le Paragraphe</button>
                                    <div class="form-area"></div>
                                </div>
                            </div>
                        </div>
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
                    <a href="/"><img id="logo_footer" src="<?php echo htmlspecialchars($logoFooter['filepath']) . '?v=' . time(); ?>" alt="Logo La Cissoniere"></a>
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
                        <a href="/"><img id="logo_footer" src="<?php echo htmlspecialchars($logoFooter['filepath']) . '?v=' . time(); ?>" alt="Logo La Cissoniere"></a>
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