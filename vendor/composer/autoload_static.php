<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf96186934418d323a92dd5731bba9af1
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\Seeders\\' => 17,
            'Database\\Factories\\' => 19,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/seeders',
        ),
        'Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/factories',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Console\\Kernel' => __DIR__ . '/../..' . '/app/Console/Kernel.php',
        'App\\Exceptions\\Handler' => __DIR__ . '/../..' . '/app/Exceptions/Handler.php',
        'App\\Exports\\EssaysExport' => __DIR__ . '/../..' . '/app/Exports/EssaysExport.php',
        'App\\Http\\Controllers\\Admin\\Authentication' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Authentication.php',
        'App\\Http\\Controllers\\Admin\\CategoriesTags' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/CategoriesTags.php',
        'App\\Http\\Controllers\\Admin\\Clients' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Clients.php',
        'App\\Http\\Controllers\\Admin\\Editors' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Editors.php',
        'App\\Http\\Controllers\\Admin\\EssayPrompt' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/EssayPrompt.php',
        'App\\Http\\Controllers\\Admin\\Essays' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Essays.php',
        'App\\Http\\Controllers\\Admin\\Export' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Export.php',
        'App\\Http\\Controllers\\Admin\\Mentors' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Mentors.php',
        'App\\Http\\Controllers\\Admin\\Program' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Program.php',
        'App\\Http\\Controllers\\Admin\\Universities' => __DIR__ . '/../..' . '/app/Http/Controllers/Admin/Universities.php',
        'App\\Http\\Controllers\\CRM\\Clients' => __DIR__ . '/../..' . '/app/Http/Controllers/CRM/Clients.php',
        'App\\Http\\Controllers\\CRM\\Mentors' => __DIR__ . '/../..' . '/app/Http/Controllers/CRM/Mentors.php',
        'App\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Http/Controllers/Controller.php',
        'App\\Http\\Controllers\\Editor\\Authentication' => __DIR__ . '/../..' . '/app/Http/Controllers/Editor/Authentication.php',
        'App\\Http\\Controllers\\Editor\\Dashboard' => __DIR__ . '/../..' . '/app/Http/Controllers/Editor/Dashboard.php',
        'App\\Http\\Controllers\\Editor\\Essays' => __DIR__ . '/../..' . '/app/Http/Controllers/Editor/Essays.php',
        'App\\Http\\Controllers\\Editor\\Profile' => __DIR__ . '/../..' . '/app/Http/Controllers/Editor/Profile.php',
        'App\\Http\\Controllers\\ManagingEditor\\AllEditorMenu' => __DIR__ . '/../..' . '/app/Http/Controllers/ManagingEditor/AllEditorMenu.php',
        'App\\Http\\Controllers\\ManagingEditor\\AllEssaysMenu' => __DIR__ . '/../..' . '/app/Http/Controllers/ManagingEditor/AllEssaysMenu.php',
        'App\\Http\\Controllers\\ManagingEditor\\CategoriesTags' => __DIR__ . '/../..' . '/app/Http/Controllers/ManagingEditor/CategoriesTags.php',
        'App\\Http\\Controllers\\ManagingEditor\\EssayListMenu' => __DIR__ . '/../..' . '/app/Http/Controllers/ManagingEditor/EssayListMenu.php',
        'App\\Http\\Controllers\\ManagingEditor\\ReportListMenu' => __DIR__ . '/../..' . '/app/Http/Controllers/ManagingEditor/ReportListMenu.php',
        'App\\Http\\Controllers\\ManagingEditor\\Universities' => __DIR__ . '/../..' . '/app/Http/Controllers/ManagingEditor/Universities.php',
        'App\\Http\\Controllers\\Mentor\\Authentication' => __DIR__ . '/../..' . '/app/Http/Controllers/Mentor/Authentication.php',
        'App\\Http\\Controllers\\Mentor\\EssaysMenu' => __DIR__ . '/../..' . '/app/Http/Controllers/Mentor/EssaysMenu.php',
        'App\\Http\\Controllers\\Mentor\\NewRequestMenu' => __DIR__ . '/../..' . '/app/Http/Controllers/Mentor/NewRequestMenu.php',
        'App\\Http\\Controllers\\Mentor\\StudentsMenu' => __DIR__ . '/../..' . '/app/Http/Controllers/Mentor/StudentsMenu.php',
        'App\\Http\\Kernel' => __DIR__ . '/../..' . '/app/Http/Kernel.php',
        'App\\Http\\Middleware\\Authenticate' => __DIR__ . '/../..' . '/app/Http/Middleware/Authenticate.php',
        'App\\Http\\Middleware\\CheckLogin' => __DIR__ . '/../..' . '/app/Http/Middleware/CheckLogin.php',
        'App\\Http\\Middleware\\Cors' => __DIR__ . '/../..' . '/app/Http/Middleware/Cors.php',
        'App\\Http\\Middleware\\EncryptCookies' => __DIR__ . '/../..' . '/app/Http/Middleware/EncryptCookies.php',
        'App\\Http\\Middleware\\IsAdmin' => __DIR__ . '/../..' . '/app/Http/Middleware/IsAdmin.php',
        'App\\Http\\Middleware\\IsEditor' => __DIR__ . '/../..' . '/app/Http/Middleware/IsEditor.php',
        'App\\Http\\Middleware\\PreventRequestsDuringMaintenance' => __DIR__ . '/../..' . '/app/Http/Middleware/PreventRequestsDuringMaintenance.php',
        'App\\Http\\Middleware\\RedirectIfAuthenticated' => __DIR__ . '/../..' . '/app/Http/Middleware/RedirectIfAuthenticated.php',
        'App\\Http\\Middleware\\TrimStrings' => __DIR__ . '/../..' . '/app/Http/Middleware/TrimStrings.php',
        'App\\Http\\Middleware\\TrustHosts' => __DIR__ . '/../..' . '/app/Http/Middleware/TrustHosts.php',
        'App\\Http\\Middleware\\TrustProxies' => __DIR__ . '/../..' . '/app/Http/Middleware/TrustProxies.php',
        'App\\Http\\Middleware\\VerifyCsrfToken' => __DIR__ . '/../..' . '/app/Http/Middleware/VerifyCsrfToken.php',
        'App\\Models\\Admin' => __DIR__ . '/../..' . '/app/Models/Admin.php',
        'App\\Models\\CRM\\Alumni' => __DIR__ . '/../..' . '/app/Models/CRM/Alumni.php',
        'App\\Models\\CRM\\AlumniDetail' => __DIR__ . '/../..' . '/app/Models/CRM/AlumniDetail.php',
        'App\\Models\\CRM\\Client' => __DIR__ . '/../..' . '/app/Models/CRM/Client.php',
        'App\\Models\\CRM\\Editor' => __DIR__ . '/../..' . '/app/Models/CRM/Editor.php',
        'App\\Models\\CRM\\Mentor' => __DIR__ . '/../..' . '/app/Models/CRM/Mentor.php',
        'App\\Models\\CRM\\Program' => __DIR__ . '/../..' . '/app/Models/CRM/Program.php',
        'App\\Models\\CRM\\School' => __DIR__ . '/../..' . '/app/Models/CRM/School.php',
        'App\\Models\\CRM\\StudentMentor' => __DIR__ . '/../..' . '/app/Models/CRM/StudentMentor.php',
        'App\\Models\\CRM\\StudentProgram' => __DIR__ . '/../..' . '/app/Models/CRM/StudentProgram.php',
        'App\\Models\\CRM\\University' => __DIR__ . '/../..' . '/app/Models/CRM/University.php',
        'App\\Models\\Category' => __DIR__ . '/../..' . '/app/Models/Category.php',
        'App\\Models\\Client' => __DIR__ . '/../..' . '/app/Models/Client.php',
        'App\\Models\\Editor' => __DIR__ . '/../..' . '/app/Models/Editor.php',
        'App\\Models\\EssayClients' => __DIR__ . '/../..' . '/app/Models/EssayClients.php',
        'App\\Models\\EssayEditors' => __DIR__ . '/../..' . '/app/Models/EssayEditors.php',
        'App\\Models\\EssayFeedbacks' => __DIR__ . '/../..' . '/app/Models/EssayFeedbacks.php',
        'App\\Models\\EssayPrompts' => __DIR__ . '/../..' . '/app/Models/EssayPrompts.php',
        'App\\Models\\EssayReject' => __DIR__ . '/../..' . '/app/Models/EssayReject.php',
        'App\\Models\\EssayRevise' => __DIR__ . '/../..' . '/app/Models/EssayRevise.php',
        'App\\Models\\EssayStatus' => __DIR__ . '/../..' . '/app/Models/EssayStatus.php',
        'App\\Models\\EssayTags' => __DIR__ . '/../..' . '/app/Models/EssayTags.php',
        'App\\Models\\Mentor' => __DIR__ . '/../..' . '/app/Models/Mentor.php',
        'App\\Models\\PositionEditor' => __DIR__ . '/../..' . '/app/Models/PositionEditor.php',
        'App\\Models\\Programs' => __DIR__ . '/../..' . '/app/Models/Programs.php',
        'App\\Models\\Status' => __DIR__ . '/../..' . '/app/Models/Status.php',
        'App\\Models\\Tags' => __DIR__ . '/../..' . '/app/Models/Tags.php',
        'App\\Models\\Token' => __DIR__ . '/../..' . '/app/Models/Token.php',
        'App\\Models\\University' => __DIR__ . '/../..' . '/app/Models/University.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/Models/User.php',
        'App\\Models\\WorkDuration' => __DIR__ . '/../..' . '/app/Models/WorkDuration.php',
        'App\\Providers\\AppServiceProvider' => __DIR__ . '/../..' . '/app/Providers/AppServiceProvider.php',
        'App\\Providers\\AuthServiceProvider' => __DIR__ . '/../..' . '/app/Providers/AuthServiceProvider.php',
        'App\\Providers\\BroadcastServiceProvider' => __DIR__ . '/../..' . '/app/Providers/BroadcastServiceProvider.php',
        'App\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/app/Providers/EventServiceProvider.php',
        'App\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/app/Providers/RouteServiceProvider.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database\\Factories\\UserFactory' => __DIR__ . '/../..' . '/database/factories/UserFactory.php',
        'Database\\Seeders\\DatabaseSeeder' => __DIR__ . '/../..' . '/database/seeders/DatabaseSeeder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf96186934418d323a92dd5731bba9af1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf96186934418d323a92dd5731bba9af1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf96186934418d323a92dd5731bba9af1::$classMap;

        }, null, ClassLoader::class);
    }
}
