<?php
namespace Deployer;

require 'recipe/symfony.php';

// Config

set('repository', 'git@github.com:coudenysj/symfony-deployer.git');
set('http_user', 'jachimbe');
set('writable_mode', 'chown');

//add('shared_files', []);
//add('shared_dirs', []);
//add('writable_dirs', []);

// Hosts

host('ssh.jachim.be')
    ->set('remote_user', 'jachimbe')
    ->set('deploy_path', '~/symfony-deployer');

// Hooks

/*task('deploy:vendors', function () {
    runLocally('composer install');
    //run('cd {{release_or_current_path}} && {{bin/composer}} {{composer_action}} {{composer_options}} 2>&1');
});
*/

after('deploy:failed', 'deploy:unlock');
