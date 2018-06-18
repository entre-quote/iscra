---
title: Documentation
media_order: 'Capture d’écran 2018-06-13 à 18.38.34.png,Capture d’écran 2018-06-13 à 18.35.59.png,Capture d’écran 2018-06-13 à 18.36.11.png,Capture d’écran 2018-06-13 à 18.43.45.png,Capture d’écran 2018-06-13 à 18.36.45.png,Capture d’écran 2018-06-13 à 18.55.15.png,Capture d’écran 2018-06-13 à 18.59.31.png,Capture d’écran 2018-06-13 à 19.01.34.png,Capture d’écran 2018-06-13 à 19.05.23.png,Capture d’écran 2018-06-13 à 19.21.09.png,Capture d’écran 2018-06-13 à 19.21.20.png'
published: true
---

# Fonctionnement de l'interface d'administration

## Ajouter un article

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

## Remplir un article

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

### Insérer un lien
Pour ajouter un lien, utiliser le bouton ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2018.55.15.png)  
La syntaxe suivante sera ajoutée []().  
Il faut remplir suivant un ordre précis.   
Entre les crochets `[]`, mettre le texte qui apparaitra et qui sera cliquable. Entre les parenthèses `()`, il faut insérer le lien de la page destination.

Exemples : 
* `[site de l'iscra](https://iscra.org)` donnera [site de l'iscra](http://iscra.org)  
On voit ici qu'il y a une icône qui est rajoutée à côté du lien, c'est qu'il s'agit d'un lien vers une page externe.
* `[Inauguration de l'exposition Nous](articles/inauguration-de-lexposition-nous)` donnera [Inauguration de l'exposition Nous](articles/inauguration-de-lexposition-nous)  

## Insérer une image

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

## Insérer une vidéo

En fonction du service il faudra choisir entre : 

* Vimeo ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2019.21.09.png)
* Youtube ![](Capture%20d%E2%80%99e%CC%81cran%202018-06-13%20a%CC%80%2019.21.20.png)

Les 2 vont ouvrir une fenêtre qui permettra d'inserer l'adresse de la vidéo.  
* Le code généré pour Vimeo sera dans le genre `[plugin:vimeo] (https://vimeo.com/272263498)`
* Le code généré pour Youtube sera dans le genre `[plugin:youtube] (https://www.youtube.com/watch?v=befyJOxtBHY)`

## Insérer un son depuis Soundcloud

