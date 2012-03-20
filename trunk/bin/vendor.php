#!/usr/bin/env php
<?php
/*
 * Custom version of Symfony2's vendor script
 * Put this file in /bin and make a deps.ini file in the root, looking like this:
 * 
 * [some_name]
 *   git=REPO
 *   target=path/to/vendor/name
 *   version=COMMITISH
 * [some_other_name]
 *   svn=REPO
 *   target=path/to/other/vendor/name
 *   version=number
 *   ...  
 */

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

set_time_limit(0);

$rootDir = dirname(__DIR__);
if (!is_dir("$rootDir/vendor")) {
    mkdir("$rootDir/vendor", 0755, true);
}

$deps = parse_ini_file($rootDir.'/deps.ini', true, INI_SCANNER_RAW);
if (false === $deps) {
    exit("The deps.ini file is not valid ini syntax. Perhaps missing a trailing newline?\n");
}

foreach ($deps as $name => $dep) 
{
    $dep = array_map('trim', $dep);
    if(!(isset($dep['git']) && !isset($dep['svn'])) || !isset($dep['version']) || !isset($dep['target'])) {
        exit("deps: Missing variables in [$name]".PHP_EOL);
    }

    $installDir = $rootDir.'/'.$dep['target'];
    $install = false;
    if (!is_dir($installDir)) {
        $install = true;
        echo "> Installing $name\n";

        if (isset($dep['git'])) {
            $install = sprintf('git clone %s %s', escapeshellarg($dep['git']), escapeshellarg($installDir));
        } elseif (isset($dep['svn'])) {
            $install = sprintf('svn checkout %s %s', escapeshellarg($dep['svn']), escapeshellarg($installDir));
        }
        system($install);
    }

    if (!$install) {
        echo "> Updating $name\n";
    }

    if (isset($dep['git'])) {
        $update = sprintf('cd %s && git fetch origin && git fetch --tags origin && git reset --hard %s', escapeshellarg($installDir), escapeshellarg($dep['version']));
    } elseif (isset($dep['svn'])) {
        $update = sprintf('cd %s && svn update -r %d', escapeshellarg($installDir), escapeshellarg($dep['version']));
    }

    system($update);
}
