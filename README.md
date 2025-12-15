<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Projet Laravel 9 - Gestion de Modules et Clients

## 📋 Description

Application web développée avec Laravel 9 pour la gestion de clients, modules, groupes et attributions. Ce projet a été créé dans le cadre d'un cours Laravel et intègre des fonctionnalités d'authentification avancées avec Laravel Jetstream.

## ✨ Fonctionnalités Principales

### 🔐 Authentification & Sécurité
- **Laravel Jetstream** avec stack Livewire
- **Laravel Sanctum** pour l'authentification API
- **Laravel Fortify** pour la gestion complète de l'authentification : 
  - Inscription des utilisateurs
  - Connexion / Déconnexion
  - Réinitialisation de mot de passe
  - Authentification à deux facteurs (2FA)
  - Mise à jour du profil utilisateur
  - Suppression de compte

### 📦 Gestion des Ressources
- **Gestion des Clients** - CRUD complet pour les clients
- **Gestion des Modules** - Création, modification, suppression et activation/désactivation de modules
- **Gestion des Groupes** - Organisation des utilisateurs en groupes
- **Gestion des Attributions** - Système d'attribution de modules aux clients
- **Gestion des Accès** - Contrôle des permissions et accès utilisateurs

### 🎨 Interface Utilisateur
- Interface moderne avec **Tailwind CSS**
- Composants réactifs avec **Livewire**
- Navigation responsive avec menu personnalisé
- Dashboard administrateur protégé

## 🛠️ Technologies Utilisées

### Backend
- **PHP** ^8.0.2
- **Laravel Framework** ^9.19
- **Laravel Jetstream** ^2.12 (Livewire Stack)
- **Laravel Sanctum** ^3.0
- **Laravel Fortify** (inclus avec Jetstream)
- **Livewire** ^2.5
- **Guzzle HTTP** ^7.2
- **Intervention Image** ^2.7 (traitement d'images)

### Frontend
- **Blade Templates** (51. 2% du code)
- **Tailwind CSS**
- **Alpine.js** (via Jetstream)
- **Vite** (Build tool moderne)
- **Livewire** (composants réactifs)

### Développement
- **Laravel Breeze** ^1.18
- **Laravel Pint** (code styling)
- **Laravel Sail** (environnement Docker)
- **PHPUnit** ^9.5.10 (tests)
- **Faker** (données de test)

## 📁 Structure du Projet

```
Laravel-9_git/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── ClientController.php
│   │       ├── ModuleController.php
│   │       ├── GroupeController.php
│   │       ├── AttributionController.php
│   │       └── AccesController.php
│   └── Providers/
│       ├── FortifyServiceProvider.php
│       ├── JetstreamServiceProvider.php
│       └── RouteServiceProvider.php
├── resources/
│   ├── views/
│   │   ├── Back/partials/main.blade.php (Dashboard)
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   └── guest.blade.php
│   │   └── welcome.blade.php
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php
│   └── api.php
└── config/
    ├── jetstream.php
    ├── fortify.php
    └── app.php
```

## 🚀 Installation

### Prérequis
- PHP >= 8.0.2
- Composer
- Node.js & NPM
- MySQL ou PostgreSQL
- Serveur web (Apache/Nginx)

### Étapes d'installation

1. **Cloner le repository**
```bash
git clone https://github.com/thetaf313/Laravel-9_git.git
cd Laravel-9_git
```

2. **Installer les dépendances PHP**
```bash
composer install
```

3. **Installer les dépendances Node.js**
```bash
npm install
```

4. **Configuration de l'environnement**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configurer la base de données**
Éditer le fichier `.env` avec vos paramètres de connexion : 
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=votre_base_de_donnees
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

6. **Exécuter les migrations**
```bash
php artisan migrate
```

7. **Compiler les assets**
```bash
npm run dev
```

8. **Lancer le serveur de développement**
```bash
php artisan serve
```

L'application sera accessible sur `http://localhost:8000`

## 🔑 Routes Principales

### Routes Publiques
- `GET /` - Page d'accueil

### Routes Authentifiées
- `GET /dashboard` - Tableau de bord principal
- `RESOURCE /app/client` - CRUD complet pour les clients
- `RESOURCE /app/Module` - CRUD complet pour les modules
- `GET /module-activation/{id}` - Activation/désactivation d'un module
- `RESOURCE /app/Groupe` - Gestion des groupes (présumé)
- `RESOURCE /app/Attribution` - Gestion des attributions (présumé)
- `RESOURCE /app/Acces` - Gestion des accès (présumé)

### Routes Jetstream (automatiques)
- `/login` - Connexion
- `/register` - Inscription
- `/forgot-password` - Mot de passe oublié
- `/user/profile` - Profil utilisateur
- `/user/two-factor-authentication` - Configuration 2FA

## 🔒 Sécurité

Ce projet utilise plusieurs couches de sécurité : 
- Middleware d'authentification sur toutes les routes sensibles
- Protection CSRF sur tous les formulaires
- Authentification à deux facteurs (2FA) disponible
- Rate limiting sur les routes de connexion
- Session sécurisée avec Laravel Sanctum

## 📝 Configuration Jetstream

Le projet utilise : 
- **Stack** : Livewire (pas Inertia)
- **Features activées** : 
  - Suppression de compte
  - Mise à jour du profil
  - Authentification à deux facteurs
  - Réinitialisation de mot de passe

## 🧪 Tests

Exécuter les tests :
```bash
php artisan test
```

ou avec PHPUnit :
```bash
./vendor/bin/phpunit
```

## 📦 Build pour Production

```bash
npm run build
php artisan config:cache
php artisan route: cache
php artisan view:cache
```

## 🤝 Contributing

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir une issue ou soumettre une pull request.

## 📄 License

Ce projet est sous licence [MIT](https://opensource.org/licenses/MIT).

## 👨‍💻 Auteur

**thetaf313**
- GitHub:  [@thetaf313](https://github.com/thetaf313)

## 📚 Ressources Laravel

- [Documentation Laravel](https://laravel.com/docs)
- [Laravel Jetstream](https://jetstream.laravel.com)
- [Livewire](https://laravel-livewire.com)
- [Tailwind CSS](https://tailwindcss.com)
- [Laracasts](https://laracasts.com)

---

**Note** : Ce projet a été créé dans le cadre d'un cours Laravel pour l'apprentissage du framework. 
```
