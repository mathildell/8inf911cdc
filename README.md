# Projet CDC

## Installation
```sh 
git clone https://github.com/mathildell/8inf911cdc.git
```

When rolling onto serveur, change DB file in `model/Database.php`

Development scss:
```sh 
sass --watch view/assets/scss:view/assets/css --style compressed
```

Users:
mlucelucas / mathilde@example.com / p@ssw0rd

Forms ID:
  - 0 register


Templates faits:
  - Home (/)
         (/home)
  - 404 (/fshds)
  - Profils (/profile)
  - Discover (/discover)
  - Book (/book)
  - Salons (/salons)
  - Login/Register (/login)
  - Admin dashboard (/admin)

TODO:
  - Formulaires (validation & BDD)
  - Admin / BDD (API?)
    - Google Books
  - Pages books: liens amazon
  - Pages salons: chatroom 
  - Pages simples (conditions utilisations)
  - Textes
  - Feedback alert users