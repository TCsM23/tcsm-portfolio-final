<?php
declare(strict_types=1);

/* everything shown on the site lives in these arrays. Edit here, not in the page files. */

return [
    'nav' => [
        'index'    => ['Log',      'index.php'],
        'projects' => ['Missions', 'projects.php'],
        'about'    => ['Loadout',  'about.php'],
        'contact'  => ['Transmit', 'contact.php'],
    ],

    'socials' => [
        ['FB', 'Facebook', 'https://www.facebook.com/yvesjerico.repayo'],
        ['GH', 'GitHub',   'https://github.com/TCsM23'],
        ['YT', 'YouTube',  'https://www.youtube.com/@tcsm0023'],
    ],

    'email' => 'yvesjericorepayo@gmail.com',

    'resume' => ['files/resume_yves_jerico_repayo.pdf', 'Download Resume (PDF)'],

    'hero_reel' => ['8fC8Ao0-UB4', 'CHANNEL TRAILER / DEMO REEL | TCsM - Yves Jerico Repayo'],

    'intro' => [
        'greeting' => 'Salutations!',
        'line1'    => "Je m'appelle",
        'name'     => 'Yves Jerico M. Repayo',
        'roles'    => 'Student / Video Editor / Piano Larper / Aspiring Game Developer',
        'motto'    => 'Learning through one project at a time.',
    ],

    'claimed' => [
        ['Metroidvania Documentary', 'Video essay charting the history of the metroidvania genre.'],
        ['Flappy Bird From Scratch', 'Successfully cloned the Flappy Bird game from scratch using Pygame.'],
        ['RTS Documentary',  'A documentary of the RTS genre, its beginnings, its peak, and its fall..'],
        ['TCsMetroid', 'Metroidvania template-maker to make it easier for game developers to visualize their maps.'],
        ['TCsMusic', 'A Piano Assistant for self-taught players.'],
    ],

    'ongoing' => [
        ['Network Monitor Dashboard (FastAPI)', 'A live TUI is a good networking tool, and Scapy teaches packets (only on networks you own or have permission to test)', 10],
        ['Metroidvania Game (Python - pygame)',           'Built-in Tiled map support and a platformer physics engine, which saves weeks of collision work', 15],
        ['Interpreter Build (Python)',         'Working through Ruslan Spivak\'s "Let\'s Build a Simple Interpreter."', 40],
    ],

    'youtube' => [
        'handle'  => '@tcsm0023',
        'url'     => 'https://www.youtube.com/@tcsm0023',
        'desc'    => 'Gameplay, IT stuff, and Documentaries. Creating videos, pleasing my viewers, and doing things that I enjoy.',
        'videos'  => [
            ['Ee-V3XdmNcM', 'Resurgence: The Genre That Refused to Die'],
            ['jhulM61cWGE', 'Reviewing a Network Infrastructure for a High School | Cisco Packet Tracer'],
            ['LBxhcQClx58', 'The Faithful: Shall Be Rewarded'],
        ],
    ],

    'contact_blurb' => 'If you have a project in mind and want to collaborate, do not hesitate to reach out. Open to any opportunities and collaborations.',
];
