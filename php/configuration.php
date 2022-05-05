<?php

error_reporting(E_ALL);

// Errors
ini_set('display_errors', 'on');
error_reporting(E_ALL);

// PHP memory
ini_set('memory_limit', '2G');
ini_set('upload_max_filesize', '64M');
ini_set('post_max_size', '512M');

// JIT enabling
ini_set('opcache.enable', 'on');
ini_set('opcache.enable_cli', 'on');
ini_set('opcache.jit_buffer_size', '128M');

// Zend
ini_set('zend.enable_gc', 'on');
ini_set('zend.multibyte', 'on');

// Time limits
ini_set('max_execution_time', 30);