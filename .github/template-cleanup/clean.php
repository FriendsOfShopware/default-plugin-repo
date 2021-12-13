<?php

$re = '/(?<prefix>^[A-Z][a-z1-9]*)(?<name>.*)/m';

$repoName = $_SERVER['argv'][1] ?? 'FroshExample';
preg_match($re, $repoName, $match);

$vars = [
    'REPO-NAME' => $repoName,
    'EXT-SHORT' => $match['prefix'],
    'EXT-NAME' => $match['name'],
    'COMPOSER-SHORT' => mb_strtolower($match['prefix']),
    'COMPOSER-NAME' => mb_strtolower($match['name']),
];

function renderFile(string $file)
{
    global $vars;
    $file = dirname(__DIR__, 2) . '/' . $file;

    $content = file_get_contents($file);
    $content = str_replace(array_keys($vars), array_values($vars), $content);

    file_put_contents($file, $content);
}


renderFile('composer.json');
renderFile('src/REPONAME.php');
rename(dirname(__DIR__, 2) . '/src/REPONAME.php', sprintf('src/%s.php', $repoName));
copy(__DIR__ . '/README.md', dirname(__DIR__, 2) . '/README.md');
renderFile('/README.md');