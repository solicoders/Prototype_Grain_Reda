# Base de données

## Commande utilisées

**Création de table 'Car':**
`php artisan make:migration CarTable`

**Création de table 'Models':**
`php artisan make:migration ModelsTable`

**Run Migration**
`php artisan migrate`

## MLD

- Car (Id, Car_Name, Car_Color, Model_Id, Date_de_creation, Date_de_modification, Reference)
- Model (Id, Model_Name, Model_Year, Date_de_creation, Date_de_modification, Reference)
