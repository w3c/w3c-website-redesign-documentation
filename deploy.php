<?php

namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'W3C 2020 site redesign - Project docs site');

// Project repository
set('repository', 'git@github.com:studio24/w3c-website-redesign-documentation');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
set('shared_dirs', ['.well-known']);

// Custom
set('keep_releases', 10);
set('allow_anonymous_stats', false);

// Hosts
host('production')
    ->stage('production')
    ->hostname('63.34.69.8')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/w3c/production')
    ->set('branch', 'master');

host('staging')
    ->stage('staging')
    ->hostname('63.34.69.8')
    ->user('deploy')
    ->set('deploy_path','/data/var/www/vhosts/w3c/staging');

// Tasks
desc('Deploy ' . get('application'));
task('deploy', [
    'deploy:info',
    'deploy:build_prod',
    'deploy:build_stage',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

task('deploy:build_prod', function () {
    writeln("<info>Building site files in Jekyll</info>");
    run('JEKYLL_ENV=production bundle exec jekyll build');
})->local()->onStage('production');

task('deploy:build_stage', function () {
    writeln("<info>Building site files in Jekyll</info>");
    run('JEKYLL_ENV=staging bundle exec jekyll build --config _config.yml,_config_staging.yml');
})->local()->onStage('staging');

task('deploy:update_code', function () {
    writeln("<info>Uploading files to server</info>");
	upload(__DIR__  . '/_site', '{{release_path}}');
});

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

