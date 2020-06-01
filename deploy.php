<?php

namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'W3C Document Portal');

// Project repository
set('repository', 'git@github.com:studio24/w3c-website-redesign-documentation');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
set('shared_files', ['config/wp-config.local.php']);
set('shared_dirs', ['web/wp-content/uploads','.well-known']);

// Writable dirs by web server
set('writable_dirs', ['web/wp-content/uploads']);
set('allow_anonymous_stats', false);

// Custom
set('keep_releases', 10);


// Hosts

host('production')
    ->hostname('63.34.69.8')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/w3c/production');

host('staging')
    ->stage('staging')
    ->hostname('63.34.69.8')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/w3c/staging');


// Tasks

desc('Deploy W3C Document Portal');
task('deploy', [
    'deploy:info',
    'build',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
//    'deploy:composer:s3',
//    'deploy:composer:theme',
//    'deploy:shared',
//    'deploy:writable',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

task('build', function () {
    run('bundle exec jekyll build --config _config.yml,_config_development.yml');
})->local();

task('deploy:update_code', function () {
    writeln("<info>Uploading files to server</info>");
	upload(__DIR__  . '/_site', '{{release_path}}');
});

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

