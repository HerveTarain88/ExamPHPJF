# ExamenPHPJF
README/

Bienvenue sur le projet de générateur de ticket. J'ai pris l'idée d'Elodie pour reprendre notre projet et le réaliser en PHP. On repart de zéro pour rebalayer les bases de PHP.

Le but du générateur de ticket est bien évidemment de créer un ticket avec plusieurs paramètres.

1. Sur le générateur nous pouvons choisir dans une liste déroulante qui récupère les données via une BDD :

- un élève(ou noob). Nous trouvons tous les élèves de la promo 13.
- une raison pour laquelle nous souhaitons générer un ticket
- le formateur(ou boss) qui va gérer ce ticket
- l'urgence, si celle ci nécessite une prise en comte rapide ou non

Ici, nous pouvons dire que nous faisons appel à un READ du CRUD.

2. Une fois les options choisies, nous pouvons appuyer sur le bouton générer un ticket.
Nous avons dès lors une liste récapitulatif des options choisies, avec un numéro de ticket qui s'affiche.

Le ticket généré prends les références des options choisies via leurs ID. Le ticket se crée également dans la BDD.

Ici, nous pouvons dire que nous faisons appel à un CREATE du CRUD.

3. Parmis les options dans le ticket et la liste des tickets, nous avons un bouton supprimer. Nous pouvons alors effacer
le ticket pour dire que la personne à été prise en compte et que le ticket/problème est résolu.

Le ticket se supprime de la BDD.

Ici, nous pouvons dire que nous faisons appel à un DELETE du CRUD.







//Commentaire : Théorie du service Container et Injection de dépendances : 

Les conteneurs d'injection de dépendance et l'injection de dépendance sont deux choses différentes :

L'injection de dépendance est une méthode pour écrire un meilleur code.
Un conteneur est un outil d'aide à l'injection de dépendances.
Nou n'avons pas besoin d'un conteneur pour faire  de l'injection de dépendance. Cependant, un conteneur peut aider.
"# ExamPHPJF" 
