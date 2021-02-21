<?php
echo '<link rel="stylesheet" type="text/css" href="style.css" media="screen" />';

$mokiniai = [
    '5b' => [
        1 => [
            'vardas' => 'vardenis1',
            'pavarde' => 'pavardenis1',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        2 => [
            'vardas' => 'vardenis2',
            'pavarde' => 'pavardenis2',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        3 => [
            'vardas' => 'vardenis3',
            'pavarde' => 'pavardenis3',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        4 => [
            'vardas' => 'vardenis4',
            'pavarde' => 'pavardenis4',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        5 => [
            'vardas' => 'vardenis5',
            'pavarde' => 'pavardenis5',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        6 => [
            'vardas' => 'vardenis6',
            'pavarde' => 'pavardenis6',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        7 => [
            'vardas' => 'vardenis7',
            'pavarde' => 'pavardenis7',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        8 => [
            'vardas' => 'vardenis8',
            'pavarde' => 'pavardenis8',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        9 => [
            'vardas' => 'vardenis9',
            'pavarde' => 'pavardenis9',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ],
        10 => [
            'vardas' => 'vardenis10',
            'pavarde' => 'pavardenis10',
            'pazymiai' => [
                'matematika' => 5,
                'informacines technologijos' => 9,
                'anglu' => 10            
                ]
        ]
    ]
];

?>

<table>
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Vidurkis</th>
        <th>Data</th>
    </tr>
    <?php foreach ($mokiniai['5b'] as $key):
    ?>
    <tr>
        <td><?php echo array_keys($mokiniai)[0]; ?></td>
        <td><?php echo (rand(1, 100)); ?></td>
        <td><?php echo strtoupper($key['vardas']); ?></td>
        <td><?php echo strtoupper($key['pavarde']); ?></td>
        <td><?php echo array_sum($key['pazymiai'])/count($key['pazymiai']); ?></td>
        <td><?php echo date("Y-m-d"); ?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>


