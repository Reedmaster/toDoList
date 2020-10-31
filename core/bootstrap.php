<?php 

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::makeConnection(App::get('config')['database'])
));