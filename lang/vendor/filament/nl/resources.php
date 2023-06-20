<?php

return [
    'navigations' => [
        'Dashboard' => 'Dashboard',
        'Hotel' => 'Hotel',
        'Website' => 'Website',
        'Help Center' => 'Helpcentrum',
        'Administration' => 'Administratie',
        'User Management' => 'Gebruikersbeheer',
    ],

    'resources' => [
        'dashboard' => [
            'navigation_label' => 'Dashboard'
        ],
        'achievements' => [
            'navigation_label' => 'Beheer Prestaties',
            'label' => 'Prestatie',
            'plural' => 'Prestaties',
        ],
        'emulator-settings' => [
            'navigation_label' => 'Emulatorinstellingen',
            'label' => 'Instelling',
            'plural' => 'Emulatorinstellingen',
        ],
        'article' => [
            'navigation_label' => 'Beheer Artikelen',
            'label' => 'Artikel',
            'plural' => 'Artikelen',
        ],
        'cms-settings' => [
            'navigation_label' => 'CMS-instellingen',
            'label' => 'Instelling',
            'plural' => 'CMS-instellingen',
        ],
        'help-questions-categories' => [
            'navigation_label' => 'Beheer Categorieën',
            'label' => 'Categorie',
            'plural' => 'Vraagcategorieën',
        ],
        'help-questions' => [
            'navigation_label' => 'Beheer Vragen',
            'label' => 'Vraag',
            'plural' => 'Vragen',
        ],
        'tags' => [
            'navigation_label' => 'Beheer Tags',
            'label' => 'Tag',
            'plural' => 'Tags',
        ],
        'bans' => [
            'navigation_label' => 'Beheer Verbanningen',
            'label' => 'Verbanning',
            'plural' => 'Verbanningen',
        ],
        'users' => [
            'navigation_label' => 'Beheer Gebruikers',
            'label' => 'Gebruiker',
            'plural' => 'Gebruikers',
        ],

        // Relations
        'settings' => [
            'navigation_label' => 'Instellingen',
            'label' => 'Instelling',
            'plural' => 'Instellingen',
        ],
        'badges' => [
            'navigation_label' => 'Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
    ],

    'common' => [
        'All' => 'Alle',
        'Yes' => 'Ja',
        'No' => 'Nee',
        'Sucessfull' => 'Succesvol',
        'Never' => 'Nooit',
        'Account' => 'Account',
        'IP' => 'IP',
        'Machine' => 'Machine',
        'Super' => 'Super',
        'Male' => 'Man',
        'Female' => 'Vrouw',
        'Credits' => 'Credits',
        'Duckets' => 'Duckets',
        'Diamonds' => 'Diamanten',
        'Points' => 'Punten',
    ],

    'helpers' => [
        'achievement_points' => 'Punten voor het behalen van een prestatie',
        'achievement_progress_needed' => 'Voortgang nodig om de prestatie te voltooien',
        'help_questions_category_icon' => 'Je kunt hier elke afbeeldingslink gebruiken. We raden aan om een afbeelding met een formaat van 20x20 te gebruiken.',
        'change_username_description' => 'Sta deze gebruiker toe om zijn gebruikersnaam te wijzigen (binnen de client)',
        'change_password_description' => 'Laat leeg om het huidige wachtwoord te behouden',
    ],

    'tabs' => [
        'Home' => 'Home',
        'Main' => 'Hoofd',
        'Configurations' => 'Configuraties',
        'General Information' => 'Algemene Informatie',
        'Currencies' => 'Valuta',
        'Security' => 'Beveiliging',
        'Change Username' => 'Gebruikersnaam Wijzigen',
        'Change Email' => 'E-mail Wijzigen',
        'Change Password' => 'Wachtwoord Wijzigen',
        'Change Rank' => 'Rang Wijzigen',
        'Account Data' => 'Accountgegevens',
        'Extra Settings' => 'Extra Instellingen',
    ],

    'inputs' => [
        'key' => 'Sleutel',
        'value' => 'Waarde',
        'comment' => 'Opmerking',
        'name' => 'Naam',
        'level' => 'Niveau',
        'email' => 'E-mail',
        'category' => 'Categorie',
        'visible' => 'Zichtbaar',
        'reward_type' => 'Beloningstype',
        'reward_amount' => 'Beloningsbedrag',
        'points' => 'Punten',
        'progress_needed' => 'Benodigde Voortgang',
        'fixed' => 'Vast',
        'allow_comments' => 'Reacties toestaan',
        'title' => 'Titel',
        'description' => 'Omschrijving',
        'image' => 'Afbeelding',
        'icon' => 'Pictogram',
        'content' => 'Inhoud',
        'is_promotion' => 'Is dit artikel een promotie?',
        'promotion_ends_at' => 'Promotie eindigt op',
        'categories' => 'Categorieën',
        'background_color' => 'Achtergrondkleur',
        'expires_at' => 'Verloopt op',
        'reason' => 'Reden',
        'type' => 'Type',
        'username' => 'Gebruikersnaam',
        'motto' => 'Motto',
        'gender' => 'Geslacht',
        'created_at' => 'Aangemaakt op',
        'last_login' => 'Laatste Login',
        'last_online' => 'Laatst Online',
        'ip_register' => 'Registratie-IP',
        'ip_current' => 'Huidige IP',
        'referral_code' => 'Verwijzingscode',
        'referrer_code' => 'Verwijzer Code',
        'allow_change_username' => 'Gebruikersnaam wijzigen toestaan',
        'new_password' => 'Nieuw Wachtwoord',
        'new_password_confirmation' => 'Bevestig Nieuw Wachtwoord',
        'rank' => 'Rang',
        'badge_code' => 'Badge Code',
        'achievement_score' => 'Prestatiescore',
        'respects_received' => 'Ontvangen Respect',
        'can_trade' => 'Kan Handelen?',
        'block_following' => 'Volgen Blokkeren',
        'block_friendrequests' => 'Vriendverzoeken Blokkeren',
        'block_roominvites' => 'Kameruitnodigingen Blokkeren',
        'max_rooms' => 'Maximale Kamers',
        'max_friends' => 'Maximale Vrienden',
        'old_chat' => 'Oude Chat',
        'block_camera_follow' => 'Camera Volgen Blokkeren',
        'ignore_bots' => 'Bots negeren',
        'ignore_pets' => 'Huisdieren negeren',
    ],

    'columns' => [
        'id' => 'ID',
        'badge' => 'Badge',
        'name' => 'Naam',
        'level' => 'Niveau',
        'category' => 'Categorie',
        'visible' => 'Zichtbaar',
        'key' => 'Sleutel',
        'value' => 'Waarde',
        'title' => 'Titel',
        'image' => 'Afbeelding',
        'by' => 'Door',
        'fixed' => 'Vast',
        'allow_comments' => 'Reacties toestaan',
        'comment' => 'Opmerking',
        'order' => 'Volgorde',
        'icon' => 'Pictogram',
        'questions_count' => 'Gekoppelde Vragen',
        'background_color' => 'Achtergrondkleur',
        'avatar' => 'Avatar',
        'username' => 'Gebruikersnaam',
        'reason' => 'Reden',
        'type' => 'Type',
        'banned_at' => 'Verbannen Op',
        'expires_at' => 'Verloopt Op',
        'email' => 'E-mail',
        'motto' => 'Motto',
        'created_at' => 'Aangemaakt Op',
        'online' => 'Online?',
        'badge_code' => 'Badge Code',
        'equipped' => 'Uitgerust?',
        'achievement_score' => 'Prestatiescore',
        'respects_received' => 'Ontvangen Respect',
        'online_time' => 'Online Tijd',
        'can_trade' => 'Kan Handelen?',
        'can_change_name' => 'Kan Naam Wijzigen?',
    ]
];