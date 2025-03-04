# gabon-chronologie-historique
```
Frise chronologique retraçant les moments clés de l'histoire du Gabon, 
de la période précoloniale à nos jours. Ce projet vise à offrir une vue 
d'ensemble des événements majeurs qui ont façonné le pays, incluant les 
périodes précoloniale, coloniale, l'indépendance et l'ère contemporaine.
```

### Mise en place de docker
```docker-compose build```

```docker-compose up -d```

```docker ps```

```docker exec -ti framework_web_projet_gabon bash```

### Création du projet
```symfony new gabon_app --webapp --no-git```

### Ajout de bootstrap
````symfony composer remove symfony/ux-turbo symfony/asset-mapper symfony/stimulus-bundle````

````symfony composer require symfony/webpack-encore-bundle symfony/ux-turbo symfony/stimulus-bundle````

````npm install````

````npm install bootstrap````

````npm install bootstrap-icons````

````npm run dev````

### Activation base de données
````symfony console doctrine:database:create````

### Création de l'entité "Evenement"
````symfony console make:entity````

````symfony console make:migration````

````symfony console doctrine:migrations:migrate````

### Implémentation de fixtures
````symfony console make:fixture````

````symfony console doctrine:fixtures:load````