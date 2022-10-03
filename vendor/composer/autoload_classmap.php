<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Console\\Kernel' => $baseDir . '/app/Console/Kernel.php',
    'App\\Exceptions\\Handler' => $baseDir . '/app/Exceptions/Handler.php',
    'App\\Exports\\EssaysExport' => $baseDir . '/app/Exports/EssaysExport.php',
    'App\\Http\\Controllers\\Admin\\Authentication' => $baseDir . '/app/Http/Controllers/Admin/Authentication.php',
    'App\\Http\\Controllers\\Admin\\CategoriesTags' => $baseDir . '/app/Http/Controllers/Admin/CategoriesTags.php',
    'App\\Http\\Controllers\\Admin\\Clients' => $baseDir . '/app/Http/Controllers/Admin/Clients.php',
    'App\\Http\\Controllers\\Admin\\Editors' => $baseDir . '/app/Http/Controllers/Admin/Editors.php',
    'App\\Http\\Controllers\\Admin\\EssayPrompt' => $baseDir . '/app/Http/Controllers/Admin/EssayPrompt.php',
    'App\\Http\\Controllers\\Admin\\Essays' => $baseDir . '/app/Http/Controllers/Admin/Essays.php',
    'App\\Http\\Controllers\\Admin\\Export' => $baseDir . '/app/Http/Controllers/Admin/Export.php',
    'App\\Http\\Controllers\\Admin\\Mentors' => $baseDir . '/app/Http/Controllers/Admin/Mentors.php',
    'App\\Http\\Controllers\\Admin\\Program' => $baseDir . '/app/Http/Controllers/Admin/Program.php',
    'App\\Http\\Controllers\\Admin\\Universities' => $baseDir . '/app/Http/Controllers/Admin/Universities.php',
    'App\\Http\\Controllers\\CRM\\Clients' => $baseDir . '/app/Http/Controllers/CRM/Clients.php',
    'App\\Http\\Controllers\\CRM\\Mentors' => $baseDir . '/app/Http/Controllers/CRM/Mentors.php',
    'App\\Http\\Controllers\\Controller' => $baseDir . '/app/Http/Controllers/Controller.php',
    'App\\Http\\Controllers\\Editor\\Authentication' => $baseDir . '/app/Http/Controllers/Editor/Authentication.php',
    'App\\Http\\Controllers\\Editor\\Dashboard' => $baseDir . '/app/Http/Controllers/Editor/Dashboard.php',
    'App\\Http\\Controllers\\Editor\\Essays' => $baseDir . '/app/Http/Controllers/Editor/Essays.php',
    'App\\Http\\Controllers\\Editor\\Profile' => $baseDir . '/app/Http/Controllers/Editor/Profile.php',
    'App\\Http\\Controllers\\ManagingEditor\\AllEditorMenu' => $baseDir . '/app/Http/Controllers/ManagingEditor/AllEditorMenu.php',
    'App\\Http\\Controllers\\ManagingEditor\\AllEssaysMenu' => $baseDir . '/app/Http/Controllers/ManagingEditor/AllEssaysMenu.php',
    'App\\Http\\Controllers\\ManagingEditor\\CategoriesTags' => $baseDir . '/app/Http/Controllers/ManagingEditor/CategoriesTags.php',
    'App\\Http\\Controllers\\ManagingEditor\\EssayListMenu' => $baseDir . '/app/Http/Controllers/ManagingEditor/EssayListMenu.php',
    'App\\Http\\Controllers\\ManagingEditor\\ReportListMenu' => $baseDir . '/app/Http/Controllers/ManagingEditor/ReportListMenu.php',
    'App\\Http\\Controllers\\ManagingEditor\\Universities' => $baseDir . '/app/Http/Controllers/ManagingEditor/Universities.php',
    'App\\Http\\Controllers\\Mentor\\Authentication' => $baseDir . '/app/Http/Controllers/Mentor/Authentication.php',
    'App\\Http\\Controllers\\Mentor\\EssaysMenu' => $baseDir . '/app/Http/Controllers/Mentor/EssaysMenu.php',
    'App\\Http\\Controllers\\Mentor\\NewRequestMenu' => $baseDir . '/app/Http/Controllers/Mentor/NewRequestMenu.php',
    'App\\Http\\Controllers\\Mentor\\StudentsMenu' => $baseDir . '/app/Http/Controllers/Mentor/StudentsMenu.php',
    'App\\Http\\Kernel' => $baseDir . '/app/Http/Kernel.php',
    'App\\Http\\Middleware\\Authenticate' => $baseDir . '/app/Http/Middleware/Authenticate.php',
    'App\\Http\\Middleware\\CheckLogin' => $baseDir . '/app/Http/Middleware/CheckLogin.php',
    'App\\Http\\Middleware\\Cors' => $baseDir . '/app/Http/Middleware/Cors.php',
    'App\\Http\\Middleware\\EncryptCookies' => $baseDir . '/app/Http/Middleware/EncryptCookies.php',
    'App\\Http\\Middleware\\IsAdmin' => $baseDir . '/app/Http/Middleware/IsAdmin.php',
    'App\\Http\\Middleware\\IsEditor' => $baseDir . '/app/Http/Middleware/IsEditor.php',
    'App\\Http\\Middleware\\PreventRequestsDuringMaintenance' => $baseDir . '/app/Http/Middleware/PreventRequestsDuringMaintenance.php',
    'App\\Http\\Middleware\\RedirectIfAuthenticated' => $baseDir . '/app/Http/Middleware/RedirectIfAuthenticated.php',
    'App\\Http\\Middleware\\TrimStrings' => $baseDir . '/app/Http/Middleware/TrimStrings.php',
    'App\\Http\\Middleware\\TrustHosts' => $baseDir . '/app/Http/Middleware/TrustHosts.php',
    'App\\Http\\Middleware\\TrustProxies' => $baseDir . '/app/Http/Middleware/TrustProxies.php',
    'App\\Http\\Middleware\\VerifyCsrfToken' => $baseDir . '/app/Http/Middleware/VerifyCsrfToken.php',
    'App\\Models\\Admin' => $baseDir . '/app/Models/Admin.php',
    'App\\Models\\CRM\\Alumni' => $baseDir . '/app/Models/CRM/Alumni.php',
    'App\\Models\\CRM\\AlumniDetail' => $baseDir . '/app/Models/CRM/AlumniDetail.php',
    'App\\Models\\CRM\\Client' => $baseDir . '/app/Models/CRM/Client.php',
    'App\\Models\\CRM\\Editor' => $baseDir . '/app/Models/CRM/Editor.php',
    'App\\Models\\CRM\\Mentor' => $baseDir . '/app/Models/CRM/Mentor.php',
    'App\\Models\\CRM\\Program' => $baseDir . '/app/Models/CRM/Program.php',
    'App\\Models\\CRM\\School' => $baseDir . '/app/Models/CRM/School.php',
    'App\\Models\\CRM\\StudentMentor' => $baseDir . '/app/Models/CRM/StudentMentor.php',
    'App\\Models\\CRM\\StudentProgram' => $baseDir . '/app/Models/CRM/StudentProgram.php',
    'App\\Models\\CRM\\University' => $baseDir . '/app/Models/CRM/University.php',
    'App\\Models\\Category' => $baseDir . '/app/Models/Category.php',
    'App\\Models\\Client' => $baseDir . '/app/Models/Client.php',
    'App\\Models\\Editor' => $baseDir . '/app/Models/Editor.php',
    'App\\Models\\EssayClients' => $baseDir . '/app/Models/EssayClients.php',
    'App\\Models\\EssayEditors' => $baseDir . '/app/Models/EssayEditors.php',
    'App\\Models\\EssayFeedbacks' => $baseDir . '/app/Models/EssayFeedbacks.php',
    'App\\Models\\EssayPrompts' => $baseDir . '/app/Models/EssayPrompts.php',
    'App\\Models\\EssayReject' => $baseDir . '/app/Models/EssayReject.php',
    'App\\Models\\EssayRevise' => $baseDir . '/app/Models/EssayRevise.php',
    'App\\Models\\EssayStatus' => $baseDir . '/app/Models/EssayStatus.php',
    'App\\Models\\EssayTags' => $baseDir . '/app/Models/EssayTags.php',
    'App\\Models\\Mentor' => $baseDir . '/app/Models/Mentor.php',
    'App\\Models\\PositionEditor' => $baseDir . '/app/Models/PositionEditor.php',
    'App\\Models\\Programs' => $baseDir . '/app/Models/Programs.php',
    'App\\Models\\Status' => $baseDir . '/app/Models/Status.php',
    'App\\Models\\Tags' => $baseDir . '/app/Models/Tags.php',
    'App\\Models\\Token' => $baseDir . '/app/Models/Token.php',
    'App\\Models\\University' => $baseDir . '/app/Models/University.php',
    'App\\Models\\User' => $baseDir . '/app/Models/User.php',
    'App\\Models\\WorkDuration' => $baseDir . '/app/Models/WorkDuration.php',
    'App\\Providers\\AppServiceProvider' => $baseDir . '/app/Providers/AppServiceProvider.php',
    'App\\Providers\\AuthServiceProvider' => $baseDir . '/app/Providers/AuthServiceProvider.php',
    'App\\Providers\\BroadcastServiceProvider' => $baseDir . '/app/Providers/BroadcastServiceProvider.php',
    'App\\Providers\\EventServiceProvider' => $baseDir . '/app/Providers/EventServiceProvider.php',
    'App\\Providers\\RouteServiceProvider' => $baseDir . '/app/Providers/RouteServiceProvider.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Database\\Factories\\UserFactory' => $baseDir . '/database/factories/UserFactory.php',
    'Database\\Seeders\\DatabaseSeeder' => $baseDir . '/database/seeders/DatabaseSeeder.php',
);
