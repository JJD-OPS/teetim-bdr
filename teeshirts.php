<?php
// Librairie du catalogue de produits.

/** @var stdClass $_ : raccourci pour la section texte de cette page. */
/** @var stdClass $_ : raccourci pour la section texte de cette page. */
// Définir la variable $page pour indiquer la page affichée.
$page = 'teeshirts';

include('lib/catalogue.lib.php');
// Inclure la partie de haut de la page.
include('parties-communes/entete.php');

/******* Gestion du TRI */ ///
$tri = isset($_GET["tri"]) ? $_GET["tri"] : "aleatoire";

[$themes, $produits] = obtenirCatalogue($page, $langue, $tri);

// Formatteur des montants d'argent
?>
<main class="page-produits page-teeshirts">
	<article class="amorce">
		<h1><?= $_->titrePage ?></h1>
		<form class="controle">
			<div class="filtre">
				<label for="filtre">Filtrer par thème : </label>
				<select name="filtre" id="filtre">
					<option value="tous">Tous les produits</option>

					<!-- Gabarit pour le choix d'un thème -->

					<?php foreach ($themes as $codeTheme => $nomTheme) : ?>
						<option value="<?= $codeTheme; ?>">
							<?= $nomTheme; ?>
						</option>
					<?php endforeach; ?>


				</select>
			</div>
			<div class="tri">
				<label for="tri">Trier par : </label>
				<select name="tri" id="tri">
					<option <?= ($tri == "aleatoire") ? "selected" : ''; ?> value="aleatoire">Aléatoire</option>
					<option <?= ($tri == "ventesDesc") ? "selected" : ''; ?> value="ventesDesc">Meilleur vendeur</option>
					<option <?= ($tri == "prixAsc") ? "selected" : ''; ?> value="prixAsc">Prix / ascendant</option>
					<option <?= ($tri == "prixDesc") ? "selected" : ''; ?> value="prixDesc">Prix / descendant</option>
					<option <?= ($tri == "nomAsc") ? "selected" : ''; ?> value="nomAsc">Alpha / ascendant</option>
					<option <?= ($tri == "nomDesc") ? "selected" : ''; ?> value="nomDesc">Alpha / descendant</option>
					<option <?= ($tri == "dacDesc") ? "selected" : ''; ?> value="dacDesc">Nouveauté</option>
					<?php
					// Librairie du catalogue de produits.
					/** @var stdClass $_ : raccourci pour la section texte de cette page. */
					/** @var stdClass $_ : raccourci pour la section texte de cette page. */
					// Définir la variable $page pour indiquer la page affichée.
					$page = 'teeshirts';

					include('lib/catalogue.lib.php');
					// Inclure la partie de haut de la page.
					include('parties-communes/entete.php');

					[$themes, $produits] = obtenirCatalogue($page, $langue);

					/******* Gestion du TRI */ ///
					// $tri = isset($_GET["tri"]) ? $_GET["tri"] : "aleatoire";

					// Trier les produits aléatoirement.
					// shuffle($produits);

					// Formatteur des montants d'argent
					/** @var stdClass $_ : raccourci pour la section texte de cette page. */
					?>
					<main class="page-produits page-teeshirts">
						<article class="amorce">
							<h1><?= $_->titrePage ?></h1>
							<form class="controle">
								<div class="filtre">
									<label for="filtre">Filtrer par thème : </label>
									<select name="filtre" id="filtre">
										<option value="tous">Tous les produits</option>

										<!-- Gabarit pour le choix d'un thème -->

										<?php foreach ($themes as $codeTheme => $nomTheme) : ?>
											<option value="<?= $codeTheme; ?>">
												<?= $nomTheme; ?>
											</option>
										<?php endforeach; ?>

									</select>
								</div>
								<div class="tri">
									<label for="tri">Trier par : </label>
									<select name="tri" id="tri">
										<option <?= ($tri == "") ? "selected" : ''; ?> value="aleatoire">Aléatoire</option>
										<option <?= ($tri == "") ? "selected" : ''; ?> value="ventesDesc">Meilleur vendeur</option>
										<option <?= ($tri == "") ? "selected" : ''; ?> value="prixAsc">Prix / ascendant</option>
										<option <?= ($tri == "") ? "selected" : ''; ?> value="prixDesc">Prix / descendant</option>
										<option <?= ($tri == "") ? "selected" : ''; ?> value="nomAsc">Alpha / ascendant</option>
										<option <?= ($tri == "") ? "selected" : ''; ?> value="nomDesc">Alpha / descendant</option>
										<option <?= ($tri == "") ? "selected" : ''; ?> value="dacDesc">Nouveauté</option>
									</select>
								</div>
							</form>
						</article>
						<article class="principal">
							<!-- Gabarit -->
							<?php foreach ($produits as $prd) : ?>
								<div class="produit">
									<span class="image">
										<img
											src="images/produits/teeshirts/<?= $prd->id; ?>.webp"
											alt="<?= $prd->nom->$langue; ?>">
									</span>
									<span class="nom"><?= $prd->nom->$langue; ?></span>
									<span class="prix">
										<?= $prd->prix; ?>
									</span>
								</div>
							<?php endforeach; ?>
						</article>
					</main>
					<?php include('parties-communes/pied2page.php'); ?>