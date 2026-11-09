<?php
declare(strict_types=1);

/*
 * missions. 'media' is either ['type'=>'youtube','id'=>...] or ['type'=>'image','src'=>...].
 * 'span' => 2 makes the card two columns wide on desktop.
 */
return [
    'categories' => [
        'all'        => 'All',
        'game-dev'   => 'Game Dev',
        'data'       => 'Data',
        'systems'    => 'Systems',
        'networking' => 'Networking',
        'web'        => 'Web',
    ],

    'items' => [
        [
            'title' => 'TCsMusic',
            'cat'   => 'web',
            'date'  => 'Oct 2026',
            'short' => 'A piano assistant and music-theory learning site.',
            'body'  => 'When I first conceptualized this, I thought I was going to only make it for myself, I wanted a piano guider to help me play and learn faster, so I created a system for it. It was
			originally a chord guide for me to understand where the chords placer are, a scale and progression guide for me to memorize it. But as I go along creating this project. I thought that I should expand it,
   make it more available to other struggling self-taught players like me. So I improved on it, referenced other systems such as FL Studio. Now this is the current version of my TCsMusic',
            'stack' => ['Python', 'Django', 'PythonAnywhere'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/tcsmusic.png', 'alt' => 'TCsMusic homepage screenshot'],
            'links' => [
                ['Live Site', 'https://tcsm.pythonanywhere.com'],
                ['Source Code', 'https://github.com/TCsM23/CreatingPianoAssistant.git'],   // delete this line if you have no repo link
            ],
        ],
        [
            'title' => 'TCsMetroid',
            'cat'   => 'web',
            'date'  => 'Oct 2026',
            'short' => 'A Metroidvania route planner and randomizer built on graphs.',
            'body'  => 'I created this because I am planning to make a Metroidvania game, but I stuggle on how the map layout should look like, so I thought of an idea that I should
			make a system for it. A system that will help me to create map templates for matroidvanias. This will not only help me, but other metroidvania game developers.',
            'stack' => ['Python', 'Flask', 'Graphs / DSA', 'Render'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/tcsmetroid.png', 'alt' => 'TCsMetroid route planner screenshot'],
            'links' => [
                ['Live App', 'https://tcsmetroid.onrender.com'],
                ['Source Code', 'https://github.com/TCsM23/YOUR-REPO'],   // delete this line if you have no repo link
            ],
        ],
        [
            'title' => 'TCsMovement',
            'cat'   => 'systems',
            'date'  => 'Oct 17, 2026',
            'short' => 'An exercise planner for building routines and logging workouts, built with Django.',
            'body'  => 'An exercise planner I designed and built with Django. You can create your own exercises and put them into routines with a warm-up, a workout, and a cool-down, including stretching routines. It has user accounts and a database, and is deployed on Render.',
            'stack' => ['Python', 'Django', 'Render'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/tcsmovement.png', 'alt' => 'TCsMovement screenshot'],
            'links' => [
                ['Live Site', 'https://tcsmovement.onrender.com'],
                ['Source Code', 'https://github.com/TCsM23/TCsMovement'],
            ],
        ],

        [
            'title' => 'Network Infrastructure of a High School',
            'cat'   => 'networking',
            'date'  => 'Apr 28, 2026',
            'short' => 'Connecting routers, switches, and end devices, and making FTPs, HTTPs, and DNS',
            'body'  => "I created a Network Infrastructure of my High School. I used Cisco Packet Tracer for it, I designed the network with 1 main router, and 4 helper routers, I divided the school's infrastructure by categorization, I took all public areas and created pools for the public, I took all the internal areas and created pools for the internal part of the school, the ComLabs have their own pools as well. I added FTP, HTTP, and DNS to it to showcase how the network actually flows in packet tracer.",
            'stack' => ['Cisco Packet Tracer', 'Networking'],
            'media' => ['type' => 'youtube', 'id' => 'jhulM61cWGE', 'title' => 'Reviewing a Network Infrastructure for a High School | Cisco Packet Tracer'],
            'links' => [['YT Link', 'https://www.youtube.com/watch?v=jhulM61cWGE']],
        ],
        [
            'title' => 'Flappy Bird - Pygame',
            'cat'   => 'game-dev',
            'date'  => 'Jun 26, 2026',
            'short' => 'A cloned Flappy Bird game using Pygame',
            'body'  => 'Using Python and the Pygame Library. I cloned the Flappy Bird game, by using some assets from the internet and watched tutorial on how to use the pygame library, I thought of my own way on how to make the gravity and the movement of the pipes, it was hard but eventually, I got the gist of it.',
            'stack' => ['Python', 'pygame-ce'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/flappy-bird.png', 'alt' => 'Flappy Bird clone screenshot'],
            'links' => [['Source Code', 'https://github.com/TCsM23/CreatingFlappyBirdFinal']],
        ],
        [
            'title' => 'XOR Neural Network',
            'cat'   => 'systems',
            'date'  => 'Jul 02, 2026',
            'short' => 'XOR implemented with raw NumPy, no frameworks.',
            'body'  => 'Probably the hardest thing to learn, never touch ML without having a significant background and knowledge on coding.',
            'stack' => ['Python', 'NumPy'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/XOR.png', 'alt' => 'XOR Neural Network output'],
            'links' => [['Source Code', 'https://github.com/TCsM23/XOR-Simple-Neural']],
        ],
        [
            'title' => 'Pong - Pygame',
            'cat'   => 'game-dev',
            'date'  => 'Jun 26, 2026',
            'short' => 'A cloned Pong game using Pygame',
            'body'  => 'Same thing with the Flappy Bird game, this was the first game I coded from scratch using pygame, discovering timers, and events.',
            'stack' => ['Python', 'pygame-ce'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/pong.png', 'alt' => 'Pong clone screenshot'],
            'links' => [['Source Code', 'https://github.com/TCsM23/CreatingPong']],
        ],
        [
            'title' => 'Snake - Pygame',
            'cat'   => 'game-dev',
            'date'  => 'Jun 12, 2026',
            'short' => 'A cloned Snake game using Pygame',
            'body'  => 'The first thing I coded in Summer of 2026, I wanted to learn how to make a snake game, but this was tutorial-based. I was introduced to pygame and the more I used it the more I wanted to make more games.',
            'stack' => ['Python', 'pygame-ce'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/snake.png', 'alt' => 'Snake clone screenshot'],
            'links' => [['Source Code', 'https://github.com/TCsM23/CreatingSnakeWithPygame']],
        ],
        [
            'title' => 'Spaceship - Pygame',
            'cat'   => 'game-dev',
            'date'  => 'Jun 15, 2026',
            'short' => 'An inspired Spaceship game of GALAGA from the original ATARI using Pygame',
            'body'  => 'The second tutorial-based pygame game I created, it was the first time I was introduced to events in pygame. Making this was the first time I discovered how to use display surfaces.',
            'stack' => ['Python', 'pygame-ce'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/spaceship.png', 'alt' => 'Spaceship game screenshot'],
            'links' => [['Source Code', 'https://github.com/TCsM23/CreatingSpaceshipGame']],
        ],
        [
            'title' => 'Student Management System',
            'cat'   => 'data',
            'date'  => 'Jun 24, 2026',
            'short' => 'A Student Management System using TKinter, MySQL, and Python.',
            'body'  => 'This is a Student Grade Management System that I created, because I was inspired by the first-years that I paneled and graded. I wanted to create something of my own, and utilize my knowledge in MySQL and Python.',
            'stack' => ['MySQL', 'Python', 'TKinter'],
            'media' => ['type' => 'image', 'src' => 'images/projects-info/student-management.png', 'alt' => 'Student Management System screenshot'],
            'links' => [['Source Code', 'https://github.com/TCsM23/Student-Grade-Management-System']],
        ],
    ],
];
