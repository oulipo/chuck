<?php 
$citations = ["Quand Chuck Norris fait l'épreuve des araignées dans Fort Boyard, elles sortent elles-mêmes les petits papiers et lisent à voix haute.",
"Chuck Norris peut écrire un traitement de texte avec la souris.",
"Peter Parker a été mordu par une araignée, Clark Kent a été mordu par Chuck Norris",
"Rien ne sert de jouer aux échecs avec Chuck Norris, il ne connait pas l'échec.",
"Chuck Norris ne prends jamais de laxatif; personne ne fait chier Chuck Norris !",
"Le papier WC de Chuck Norris n'a pas de fin. Chuck Norris n'est jamais au bout du rouleau.",
"Chuck Norris a gagné la guerre du Golf, en 18 trous.",
"Les portraits de Chuck Norris ne sont pas a vendre. On ne se paie pas la tête de Chuck Norris.",
"L'ordinateur de Chuck Norris n'a pas de bouton \"CRTL\". Chuck Norris a toujours le contrôle.",
"Chuck Norris a deja reussi a casser 3 pattes a un canard.",
"En Avril dernier, Chuk Norris a fait un barbecue... et les aéroports européens ont été fermés pendant une semaine...",
"Depuis le 11 septembre 2001 Chuck Norris ne lance plus d'avions en papier.",
"Le nombre de choses impossibles pour Chuck Norris est inférieur à zéro.",
"Un jour, Chuck Norris a plongé dans la Mer Rouge. Moïse en a profité pour passer.",
"Quand chuck norris dit qu'il a inventé les ricolas<br />Les Suisses ferment leurs gueules",
"M.Propre était videur et ne voulait pas laisser chuck rentrer en boite, maintenant il est femme de ménage !!",
"Chuck Norris mange ses oranges tout rond: Chuck Norris fait pas de quartier.",
"Chuck Norris a déjà tabassé l homme invisible parce qu il lui gâchait la vue",
"Chuck Norris ne s'est jamais rendu à l'école.<br />Chuck Norris ne se rend jamais ...",
"Quand Chuck Norris va au Mcdo, les hamburgers sont aussi bien que sur les photos, même mieux.",
"Chuck Norris ne ment jamais, c'est la vérité qui se trompe.",
"Chuck Norris ne fume pas car la santé de Chuck Norris est dangereuse pour le tabac.",
"Chuck norris a joué au roi du silence avec un muet... et il a gagné",
"Quand Chuck Norris regarde le soleil c'est le soleil qui a mal aux yeux"];

function citationAuHasard($liste) {
    $hasard = random_int(0, count($liste) - 1);
    return $liste[$hasard];
}

echo json_encode(citationAuHasard($citations));