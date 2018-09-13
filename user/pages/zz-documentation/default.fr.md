---
title: Documentation
media_order: 'Capture d’écran 2018-06-13 à 18.38.34.png,Capture d’écran 2018-06-13 à 18.35.59.png,Capture d’écran 2018-06-13 à 18.36.11.png,Capture d’écran 2018-06-13 à 18.43.45.png,Capture d’écran 2018-06-13 à 18.36.45.png,Capture d’écran 2018-06-13 à 18.55.15.png,Capture d’écran 2018-06-13 à 18.59.31.png,Capture d’écran 2018-06-13 à 19.01.34.png,Capture d’écran 2018-06-13 à 19.05.23.png,Capture d’écran 2018-06-13 à 19.21.09.png,Capture d’écran 2018-06-13 à 19.21.20.png,Capture d’écran 2018-06-18 à 14.18.57.png,Capture d’écran 2018-06-18 à 14.55.16.png,Capture d’écran 2018-06-18 à 15.28.10.png'
published: true
body_classes: doc
---

# Fonctionnement de l'interface d'administration

* [Présentation de l'administration des pages](#pages)
* [Ajouter un article](#ajout)
* [Remplir un article](#remplir)
	* 	[Insérer un lien](#lien)
	* 	[Insérer une image](#image)
	* 	[Insérer une vidéo](#video)
	* 	[Insérer un son depuis Soundcloud](#son)
	* 	[Insérer un carousel](#carousel)
	* 	[Choisir une date de mise en ligne d'un article](#date)
	* 	[Mettre un article en actualités](#categories)
* [En cas d'erreur de création](#erreur)
* [Les pages qui ne sont pas des articles](#autres)

<hr>

## Présentation de l'administration des pages {#pages}

Dans la partie "Pages" de l'administration : 
* certaines sont bleues, c'est à dire qu'elles sont publiées et visible dans le menu principale 
* certaines sont grises, elles sont publiées mais ne doivent pas apparaitre dans le menu sous le logo (exemple : contact)
* certaines ont un cercle rouge, elles ne sont pas publiées, elles n'apparaitront pas 

Pour naviguer dans l'arborescence de pages, il faut utiliser le bouton "+"/"-" à côté du titre de la page.  
Exemple d'arborescence dépliée :  
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-18%20a%CC%80%2015.28.10.png)

Pour éditer une page, il faut cliquer sur son nom.
<hr>

## Ajouter un article {#ajout}

* Dans le menu de gauche, se rendre dans la partie "Pages"  
	![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.35.59.png)
* Une fois la page chargée, cliquer sur le bouton "Ajouter" dans le bandeau tout en haut  
	![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.36.11.png)
* Remplir les champs de la fenêtre  
	![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.38.34.png)	 	
	* "Titre de la page"
	* Laisser le "Nom du dossier" se remplir automatiquement
	* vérifier qu'il ne contient pas d'accents ou d'appostrophes
	* dans "Page parente", choisir "Articles"
	* dans "Template de la page", choisir "item"
	* "Visible", laisser en "auto"

<hr>

## Remplir un article {#remplir}

Le titre de l'article sera déjà présent dans le champs "Titre"  
S'il y a une information supplémentaire, la mettre dans le champs "Sous-titre"  
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.43.45.png) 

Explications de la barre d'outils (de gauche à droite)
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.36.45.png)
* Annuler la dernière action
* Rétablir l'action annulée
* Niveaux de titre : ne pas utiliser `h1`, il ne doit y en avoir qu'un seul par page
* Gras
* Italique
* Barré
* Délimiteur de résumé, génère le code `===` permet d'avoir des résumés pour les listes d'articles
* Insérer un lien -> voir la partie dédiée
* Insérer une image -> voir la partie dédiée
* Insérer une citation
* Liste non ordonnée
* Liste ordonnée
* Insérer une vidéo Vimeo
* Insérer une vidéo Youtube

Tout à droite
* Éditeur : permet d'éditer le code
* Aperçu du rendu
* Passer le champs de saisie en plein écran

#### Subtilités de l'éditeur :
* il utilise le langage markdown, d'où la syntaxe qui peut étonner
* pour faire un retour à la ligne, il faut mettre 2 espaces en fin de ligne

<hr class="small">

### Insérer un lien {#lien}
Pour ajouter un lien, utiliser le bouton ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.55.15.png)  
La syntaxe suivante sera ajoutée []().  
Il faut remplir suivant un ordre précis.   
Entre les crochets `[]`, mettre le texte qui apparaitra et qui sera cliquable. Entre les parenthèses `()`, il faut insérer le lien de la page destination.

Exemples : 
* `[site de l'iscra](https://iscra.org)` donnera [site de l'iscra](http://iscra.org)  
On voit ici qu'il y a une icône qui est rajoutée à côté du lien, c'est qu'il s'agit d'un lien vers une page externe.
* `[Inauguration de l'exposition Nous](articles/inauguration-de-lexposition-nous)` donnera [Inauguration de l'exposition Nous](articles/inauguration-de-lexposition-nous)  

<hr class="small">

### Insérer une image {#image}

Déjà il faut éviter que l'image soit trop grande. Pour celà, il faut la redimensionner.  
Pour redimensionner une image : [Resize your image](http://resizeyourimage.com/FR/).  
Largeur maximum d'affichage : 255px.

Il faut ensuite l'envoyer sur le site.   
Pour cela, sous la partie de contenu, il y a une partie `Médias de la page`. Celle-ci sert à insérer des images dans le contenu.  
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2019.01.34.png)  
En cliquant dessus (ou en glissant déposant les images voulues), les images vont être envoyées sur le serveur.

Il faudra enfin les insérer.  
Pour insérer l'image, il faut survoler l'image choisie, puis cliquer sur l'icône `+` tout en haut.  
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2019.05.23.png)

Un code ressemblant s'affichera `![](mon-image.jpg)`

Il est aussi possible d'ajouter une image venant d'un autre site en cliquant sur le bouton ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.59.31.png)   
Là il faudra remplir le code comme dans l'exemple ci-dessous  
`![] (http://adresse.fr/de/mon-image.jpg)`

<hr class="small">

### Insérer une vidéo {#video}

En fonction du service il faudra choisir entre : 

* Vimeo ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2019.21.09.png)
* Youtube ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2019.21.20.png)

Les 2 vont ouvrir une fenêtre qui permettra d'inserer l'adresse de la vidéo.  
* Le code généré pour Vimeo sera dans le genre `[plugin:vimeo] (https://vimeo.com/272263498)`
* Le code généré pour Youtube sera dans le genre `[plugin:youtube] (https://www.youtube.com/watch?v=befyJOxtBHY)`

<hr class="small">

### Insérer un son depuis Soundcloud {#son}

#### Uploader un son 
Une fois connecté sur [Souncloud](https://soundcloud.com/), cliquer sur le bouton "Uploader" dans la barre tout en haut du site.  
Dans la page qui s'ouvre, cliquer sur le bouton orange "Sélectionner un fichier à uploader".  Dans la fenêtre qui s'ouvrira, choisir le ou les fichiers à envoyer.  
S'il y a plusieurs fichiers, Soundcloud créera une playlist, ce qui permettra d'insérer un seul code sur le site de l'ISCRA et que les pistes se lisent automatiquement les unes après les autres.  

#### Insérer une ou des pistes sur le site ISCRA
Sur Soundcloud, se rendre sur la [page de l'ISCRA](https://soundcloud.com/iscra-mediterranee), choisir le fichier ou la playlist à insérer.   
Sous chacun se trouve un bouton "partager" ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-18%20a%CC%80%2014.18.57.png).   
Au clique, un fenêtre s'ouvre, il faut se rendre dans l'onglet "intégrer".  
Il y a 2 affichages prévus pour les pistes et les playlists et un 3ème seulement pour les pistes. Celui-ci est plus léger en affichage.
Dans le cas où une des 2 premières options d'affichage est choisie, il faut décocher toutes les cases présentent dans la fenêtre.  
Une fois ces actions effectuées, il faut copier le contenu sous le titre "code". Il commence par `<iframe width="100%"`  
Retourner sur l'article ISCRA en cours d'édition, positionner le curseur à l'endroit où l'on veut les pistes audio et coller le code copié précédement.  
Cela devrait ressembler à `<iframe width="100%" height="20" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/457687311&color=%23ff5500&inverse=false&auto_play=false&show_user=true"></iframe>`

Les différentes options d'affichages pour pistes et playlists : 

<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/457687311&color=%23ff5500&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false&show_teaser=false&visual=true"></iframe>

<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/457687311&color=%23ff5500&auto_play=false&hide_related=true&show_comments=false&show_user=true&show_reposts=false&show_teaser=false"></iframe>

Seulement pour les pistes : 

<iframe width="100%" height="20" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/457687311&color=%23ff5500&inverse=false&auto_play=false&show_user=true"></iframe>

<hr class=small>

### Insérer un carousel {#carousel}

Un carousel est un une liste d'images mise dans un plugin.

Le code a insérer sera donc le suivant  
[`owl-carousel items=1 loop=true nav=true`]  
`![](image-1.jpg)`  
`![](image-2.jpg)`  
`![](image-3.jpg)`  
[`/owl-carousel`]

[owl-carousel  items=1 loop=true nav=true] 
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.38.34.png)
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-18%20a%CC%80%2014.55.16.png)
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-18%20a%CC%80%2015.28.10.png)
[/owl-carousel] 

<hr class="small">

### Choisir une date de mise en ligne d'un article {#date}
Au dessus du champs "Titre" se trouvent 3 onglets : "Contenu", "Options" et "Avancé".  
Pour cette manipulation, il faut se rendre dans "Options"  
Une des parties de cette page se nomme "Publication"  
 
Dans les pages de thèmes ou interventions, les articles sont triés par date.  
Si aucune modification de date n'est faite, le dernier article ajouté sera le premier affiché.  
Il est possible de remplir une date antérieure à la date du jour afin qu'un article ancien arrive avant les plus récents.  
Pour cela il faut cliquer dans le champs nommé "Date", de choisir une date correspondant approximativement à la date voulue et d'enregistrer.
 
Il est possible de choisir une date de publication et de dépublication en cas d'article temporaire.  

<hr class="small">

### Mettre un article dans une catégorie {#categories}
Au dessus du champs "Titre" se trouvent 3 onglets : "Contenu", "Options" et "Avancé".  
Pour cette manipulation, il faut se rendre dans "Options"  
Une des parties de cette page se nomme "Taxonomies"  
Dedans se trouvent les champs "Actualités", "Themes", "Interventions", "Medias".  

#### Pour mettre un article en page d'accueil (actualités)
Cliquer dans le champs "Actualités", le mot "Oui" apparait. En cliquant dessus, il va s'inscrire dans le champs.   
Après enregistrement, il sera affiché sur la page d'accueil.  

#### Insérer l'article dans un thème et/ou une intervention
Même fonctionnement que pour les actualités. En cliquant dans le champs en face du titre "Themes" ou "Interventions", il y a une liste pré-remplie.   
Il faut choisir les thèmes et interventions liées à l'article puis enregistrer.
L'article apparaitra ainsi dans les pages dédiées aux thèmes ou interventions choisies

Exemple :   
![](Capture%20d%E2%80%99e%CC%81cran%202018-06-18%20a%CC%80%2014.55.16.png)

#### Spécifier les médias contenus par l'article
Même fonctionnement que pour les actualités. En cliquant dans le champs en face du titre "Medias" ou l y a une liste pré-remplie.   
Il faut choisir le ou les médias liés à l'article puis enregistrer.
Ceux-ci apparaitront dans la liste d'articles.

<hr>

## En cas d'erreur de création {#erreur}
Au dessus du champs "Titre" se trouvent 3 onglets : "Contenu", "Options" et "Avancé".  
Pour cette manipulation, il faut se rendre dans "Avancé".  

Si l'article n'apparait pas, cela peut venir de plusieurs choses : 


* Il n'est pas rangé dans la partie "articles"  
Cela est visible dans la champs "Parent". Si l'affichage n'est pas "/articles", le sélectionner dans la liste déroulante et enregistrer.
* Il ne s'agit pas d'un "item".  
Cela est visible dans la champs "Template de page". Si ce n'est pas "item", le choisir dans la liste déroulante et enregistrer.

<hr>

## Les pages qui ne sont pas des articles {#autres}

### Actualités
Cette page est générée automatiquement.

### L'ISCRA
Contenu éditable.

* Présentation -> Contenu éditable
* Membres associés et administrateurs -> page générée, liste les sous-pages qui doivent être avec le template de page "item"
* Intervenants permanents et associés -> page générée, liste les sous-pages qui doivent être avec le template de page "item"

Afin d'ajouter une personne, le processus est le même que pour "ajouter un article" mais au lieu de spécifier la page parent "/articles" il faut spécifier soit "Membres associés et administrateurs" ou "Intervenants permanents et associés".

### Thèmes et interventions
Contenu éditable.

Toutes les sous-pages sont générées, elles listent les articles ayant le thème ou l'intervention définis.

### Articles 
Liste de tous les articles présents sur le site.

### Archives 
Pour l'instant cette page n'est pas publiée.

### Contact
Page éditable avec les informations pour contacter l'ISCRA.

### Mentions légales
Texte obligatoire, changer les coordonnées au besoin.

### Plan du site
Cette page est générée automatiquement.

### Réseau 
Liste des liens de l'ISCRA avec d'autres organismes, personnes.

### Documentation
Cette page-ci.