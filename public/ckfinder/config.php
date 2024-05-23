<?php

return [
    'licenseName' => '',
    'licenseKey'  => '',
    'privateDir' => [
        'backend' => 'default',
        'tags'   => '.ckfinder/tags',
        'logs'   => '.ckfinder/logs',
        'cache'  => '.ckfinder/cache',
        'thumbs' => '.ckfinder/cache/thumbs',
    ],
    'images' => [
        'maxWidth'  => 1600,
        'maxHeight' => 1200,
        'quality'   => 80,
        'sizes' => [
            'small'  => [480, 320, true],
            'medium' => [600, 480, true],
            'large'  => [800, 600, true]
        ],
    ],
    'backends' => [
        'default' => [
            'name'    => 'default',
            'adapter' => 'local',
            'baseUrl' => '/uploads',
            'root'    => public_path('/uploads'),
            'chmodFiles' => 0777,
            'chmodFolders' => 0755,
            'filesystemEncoding' => 'UTF-8',
        ],
    ],
    'resourceTypes' => [
        [
            'name'              => 'Files',
            'directory'         => 'files',
            'maxSize'           => 0,
            'allowedExtensions' => '7z,aiff,asf,avi,bmp,csv,doc,docx,flac,flv,gif,gz,gzip,jpeg,jpg,mid,midi,mov,mp3,mp4,mpeg,mpg,ods,odt,pdf,png,ppt,pptx,rar,tar,tgz,tiff,txt,wav,wma,wmv,xls,xlsx,zip',
            'deniedExtensions'  => '',
            'backend'           => 'default'
        ],
        [
            'name'              => 'Images',
            'directory'         => 'images',
            'maxSize'           => 0,
            'allowedExtensions' => 'bmp,gif,jpeg,jpg,png',
            'deniedExtensions'  => '',
            'backend'           => 'default'
        ],
    ],
    'accessControl' => [
        [
            'role' => '*',
            'resourceType' => '*',
            'folder' => '/',
            'FOLDER_VIEW' => true,
            'FOLDER_CREATE' => true,
            'FOLDER_RENAME' => true,
            'FOLDER_DELETE' => true,
            'FILE_VIEW' => true,
            'FILE_CREATE' => true,
            'FILE_RENAME' => true,
            'FILE_DELETE' => true,
            'IMAGE_RESIZE' => true,
            'IMAGE_RESIZE_CUSTOM' => true,
        ],
    ],
    'overwriteOnUpload' => false,
    'checkDoubleExtension' => true,
    'disallowUnsafeCharacters' => false,
    'secureImageUploads' => true,
    'checkSizeAfterScaling' => true,
    'htmlExtensions' => ['html', 'htm', 'xml', 'js'],
    'hideFolders' => ['.*', 'CVS', '__thumbs'],
    'hideFiles' => ['.*'],
    'forceAscii' => false,
    'xSendfile' => false,
    'debug' => false,
    'pluginsDirectory' => __DIR__ . '/Plugins',
    'plugins' => [],
    'cache' => [
        'imagePreview' => 24 * 3600,
        'thumbnails' => 24 * 3600 * 365,
    ],
    'tempDirectory' => sys_get_temp_dir(),
    'sessionWriteClose' => true,
];
