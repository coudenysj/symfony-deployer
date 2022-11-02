<?php
namespace Deployer;

require 'recipe/symfony.php';

// Config

set('repository', 'git@github.com:coudenysj/symfony-deployer.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('ssh.jachim.be')
    ->set('remote_user', 'jachimbe')
    ->set('deploy_path', '~/symfony-deployer');

// Hooks

after('deploy:failed', 'deploy:unlock');
