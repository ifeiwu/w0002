<?php $o=array();



############### GET ###############

$o['GET']=array();

#==== GET tokenauth/key

$o['GET']['tokenauth/key']=array (
  'class_name' => 'TokenAuth',
  'method_name' => 'key',
  'arguments' => 
  array (
  ),
  'defaults' => 
  array (
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 0,
);

#==== GET admin/files

$o['GET']['admin/files']=array (
  'class_name' => 'Admin',
  'method_name' => 'getFiles',
  'arguments' => 
  array (
    'dir' => 0,
    'ext' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/files/:dir

$o['GET']['admin/files/:dir']=array (
  'class_name' => 'Admin',
  'method_name' => 'getFiles',
  'arguments' => 
  array (
    'dir' => 0,
    'ext' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/files/:dir/:ext

$o['GET']['admin/files/:dir/:ext']=array (
  'class_name' => 'Admin',
  'method_name' => 'getFiles',
  'arguments' => 
  array (
    'dir' => 0,
    'ext' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/file

$o['GET']['admin/file']=array (
  'class_name' => 'Admin',
  'method_name' => 'getFile',
  'arguments' => 
  array (
    'filename' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/file/:filename

$o['GET']['admin/file/:filename']=array (
  'class_name' => 'Admin',
  'method_name' => 'getFile',
  'arguments' => 
  array (
    'filename' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/backup

$o['GET']['admin/backup']=array (
  'class_name' => 'Admin',
  'method_name' => 'getBackup',
  'arguments' => 
  array (
    'type' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/backup/:type

$o['GET']['admin/backup/:type']=array (
  'class_name' => 'Admin',
  'method_name' => 'getBackup',
  'arguments' => 
  array (
    'type' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/one

$o['GET']['admin/one']=array (
  'class_name' => 'Admin',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/one/:id

$o['GET']['admin/one/:id']=array (
  'class_name' => 'Admin',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/one/:id/:column

$o['GET']['admin/one/:id/:column']=array (
  'class_name' => 'Admin',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/images

$o['GET']['admin/images']=array (
  'class_name' => 'Admin',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/images/:pid

$o['GET']['admin/images/:pid']=array (
  'class_name' => 'Admin',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/error

$o['GET']['admin/error']=array (
  'class_name' => 'Admin',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/error/:message

$o['GET']['admin/error/:message']=array (
  'class_name' => 'Admin',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/error/:message/:data

$o['GET']['admin/error/:message/:data']=array (
  'class_name' => 'Admin',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/success

$o['GET']['admin/success']=array (
  'class_name' => 'Admin',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/success/:message

$o['GET']['admin/success/:message']=array (
  'class_name' => 'Admin',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/success/:message/:data

$o['GET']['admin/success/:message/:data']=array (
  'class_name' => 'Admin',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/result

$o['GET']['admin/result']=array (
  'class_name' => 'Admin',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/result/:code

$o['GET']['admin/result/:code']=array (
  'class_name' => 'Admin',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/result/:code/:message

$o['GET']['admin/result/:code/:message']=array (
  'class_name' => 'Admin',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET admin/result/:code/:message/:data

$o['GET']['admin/result/:code/:message/:data']=array (
  'class_name' => 'Admin',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/data

$o['GET']['site/data']=array (
  'class_name' => 'Site',
  'method_name' => 'getData',
  'arguments' => 
  array (
  ),
  'defaults' => 
  array (
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/stylecode

$o['GET']['site/stylecode']=array (
  'class_name' => 'Site',
  'method_name' => 'getStyleCode',
  'arguments' => 
  array (
  ),
  'defaults' => 
  array (
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/one

$o['GET']['site/one']=array (
  'class_name' => 'Site',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/one/:id

$o['GET']['site/one/:id']=array (
  'class_name' => 'Site',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/one/:id/:column

$o['GET']['site/one/:id/:column']=array (
  'class_name' => 'Site',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/images

$o['GET']['site/images']=array (
  'class_name' => 'Site',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/images/:pid

$o['GET']['site/images/:pid']=array (
  'class_name' => 'Site',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/error

$o['GET']['site/error']=array (
  'class_name' => 'Site',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/error/:message

$o['GET']['site/error/:message']=array (
  'class_name' => 'Site',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/error/:message/:data

$o['GET']['site/error/:message/:data']=array (
  'class_name' => 'Site',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/success

$o['GET']['site/success']=array (
  'class_name' => 'Site',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/success/:message

$o['GET']['site/success/:message']=array (
  'class_name' => 'Site',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/success/:message/:data

$o['GET']['site/success/:message/:data']=array (
  'class_name' => 'Site',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/result

$o['GET']['site/result']=array (
  'class_name' => 'Site',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/result/:code

$o['GET']['site/result/:code']=array (
  'class_name' => 'Site',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/result/:code/:message

$o['GET']['site/result/:code/:message']=array (
  'class_name' => 'Site',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET site/result/:code/:message/:data

$o['GET']['site/result/:code/:message/:data']=array (
  'class_name' => 'Site',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/one

$o['GET']['item/one']=array (
  'class_name' => 'Item',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/one/:id

$o['GET']['item/one/:id']=array (
  'class_name' => 'Item',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/one/:id/:column

$o['GET']['item/one/:id/:column']=array (
  'class_name' => 'Item',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/images

$o['GET']['item/images']=array (
  'class_name' => 'Item',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/images/:pid

$o['GET']['item/images/:pid']=array (
  'class_name' => 'Item',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/error

$o['GET']['item/error']=array (
  'class_name' => 'Item',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/error/:message

$o['GET']['item/error/:message']=array (
  'class_name' => 'Item',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/error/:message/:data

$o['GET']['item/error/:message/:data']=array (
  'class_name' => 'Item',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/success

$o['GET']['item/success']=array (
  'class_name' => 'Item',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/success/:message

$o['GET']['item/success/:message']=array (
  'class_name' => 'Item',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/success/:message/:data

$o['GET']['item/success/:message/:data']=array (
  'class_name' => 'Item',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/result

$o['GET']['item/result']=array (
  'class_name' => 'Item',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/result/:code

$o['GET']['item/result/:code']=array (
  'class_name' => 'Item',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/result/:code/:message

$o['GET']['item/result/:code/:message']=array (
  'class_name' => 'Item',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET item/result/:code/:message/:data

$o['GET']['item/result/:code/:message/:data']=array (
  'class_name' => 'Item',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/pathfolder

$o['GET']['finder/pathfolder']=array (
  'class_name' => 'Finder',
  'method_name' => 'getPathFolder',
  'arguments' => 
  array (
    'foid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/pathfolder/:foid

$o['GET']['finder/pathfolder/:foid']=array (
  'class_name' => 'Finder',
  'method_name' => 'getPathFolder',
  'arguments' => 
  array (
    'foid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/one

$o['GET']['finder/one']=array (
  'class_name' => 'Finder',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/one/:id

$o['GET']['finder/one/:id']=array (
  'class_name' => 'Finder',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/one/:id/:column

$o['GET']['finder/one/:id/:column']=array (
  'class_name' => 'Finder',
  'method_name' => 'getOne',
  'arguments' => 
  array (
    'id' => 0,
    'column' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/images

$o['GET']['finder/images']=array (
  'class_name' => 'Finder',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/images/:pid

$o['GET']['finder/images/:pid']=array (
  'class_name' => 'Finder',
  'method_name' => 'getImages',
  'arguments' => 
  array (
    'pid' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/error

$o['GET']['finder/error']=array (
  'class_name' => 'Finder',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/error/:message

$o['GET']['finder/error/:message']=array (
  'class_name' => 'Finder',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/error/:message/:data

$o['GET']['finder/error/:message/:data']=array (
  'class_name' => 'Finder',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/success

$o['GET']['finder/success']=array (
  'class_name' => 'Finder',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/success/:message

$o['GET']['finder/success/:message']=array (
  'class_name' => 'Finder',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/success/:message/:data

$o['GET']['finder/success/:message/:data']=array (
  'class_name' => 'Finder',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/result

$o['GET']['finder/result']=array (
  'class_name' => 'Finder',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/result/:code

$o['GET']['finder/result/:code']=array (
  'class_name' => 'Finder',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/result/:code/:message

$o['GET']['finder/result/:code/:message']=array (
  'class_name' => 'Finder',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET finder/result/:code/:message/:data

$o['GET']['finder/result/:code/:message/:data']=array (
  'class_name' => 'Finder',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/file

$o['GET']['uploader/file']=array (
  'class_name' => 'Uploader',
  'method_name' => 'getFile',
  'arguments' => 
  array (
  ),
  'defaults' => 
  array (
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/error

$o['GET']['uploader/error']=array (
  'class_name' => 'Uploader',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/error/:message

$o['GET']['uploader/error/:message']=array (
  'class_name' => 'Uploader',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/error/:message/:data

$o['GET']['uploader/error/:message/:data']=array (
  'class_name' => 'Uploader',
  'method_name' => 'error',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/success

$o['GET']['uploader/success']=array (
  'class_name' => 'Uploader',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/success/:message

$o['GET']['uploader/success/:message']=array (
  'class_name' => 'Uploader',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/success/:message/:data

$o['GET']['uploader/success/:message/:data']=array (
  'class_name' => 'Uploader',
  'method_name' => 'success',
  'arguments' => 
  array (
    'message' => 0,
    'data' => 1,
  ),
  'defaults' => 
  array (
    0 => '',
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/result

$o['GET']['uploader/result']=array (
  'class_name' => 'Uploader',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/result/:code

$o['GET']['uploader/result/:code']=array (
  'class_name' => 'Uploader',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/result/:code/:message

$o['GET']['uploader/result/:code/:message']=array (
  'class_name' => 'Uploader',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== GET uploader/result/:code/:message/:data

$o['GET']['uploader/result/:code/:message/:data']=array (
  'class_name' => 'Uploader',
  'method_name' => 'result',
  'arguments' => 
  array (
    'code' => 0,
    'message' => 1,
    'data' => 2,
  ),
  'defaults' => 
  array (
    0 => 0,
    1 => '',
    2 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);


############### POST ###############

$o['POST']=array();

#==== POST admin/login

$o['POST']['admin/login']=array (
  'class_name' => 'Admin',
  'method_name' => 'postLogin',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 0,
);

#==== POST admin/password

$o['POST']['admin/password']=array (
  'class_name' => 'Admin',
  'method_name' => 'postPassword',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/password/:id

$o['POST']['admin/password/:id']=array (
  'class_name' => 'Admin',
  'method_name' => 'postPassword',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/password2

$o['POST']['admin/password2']=array (
  'class_name' => 'Admin',
  'method_name' => 'postPassword2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/add

$o['POST']['admin/add']=array (
  'class_name' => 'Admin',
  'method_name' => 'postAdd',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/update

$o['POST']['admin/update']=array (
  'class_name' => 'Admin',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/update/:id

$o['POST']['admin/update/:id']=array (
  'class_name' => 'Admin',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/delete

$o['POST']['admin/delete']=array (
  'class_name' => 'Admin',
  'method_name' => 'postDelete',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/upgrade

$o['POST']['admin/upgrade']=array (
  'class_name' => 'Admin',
  'method_name' => 'postUpgrade',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/clearcache

$o['POST']['admin/clearcache']=array (
  'class_name' => 'Admin',
  'method_name' => 'postClearCache',
  'arguments' => 
  array (
  ),
  'defaults' => 
  array (
  ),
  'metadata' => 
  array (
    'return' => '()rray',
    'description' => '清除缓存',
  ),
  'method_flag' => 3,
);

#==== POST admin/filewrite

$o['POST']['admin/filewrite']=array (
  'class_name' => 'Admin',
  'method_name' => 'postFileWrite',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/page

$o['POST']['admin/page']=array (
  'class_name' => 'Admin',
  'method_name' => 'postPage',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/all

$o['POST']['admin/all']=array (
  'class_name' => 'Admin',
  'method_name' => 'postAll',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/find

$o['POST']['admin/find']=array (
  'class_name' => 'Admin',
  'method_name' => 'postFind',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/removeimage

$o['POST']['admin/removeimage']=array (
  'class_name' => 'Admin',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/removeimage/:id

$o['POST']['admin/removeimage/:id']=array (
  'class_name' => 'Admin',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/removeimage/:id/:prefix

$o['POST']['admin/removeimage/:id/:prefix']=array (
  'class_name' => 'Admin',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/removeimage2

$o['POST']['admin/removeimage2']=array (
  'class_name' => 'Admin',
  'method_name' => 'postRemoveImage2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/removefile2

$o['POST']['admin/removefile2']=array (
  'class_name' => 'Admin',
  'method_name' => 'postRemoveFile2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST admin/field

$o['POST']['admin/field']=array (
  'class_name' => 'Admin',
  'method_name' => 'postField',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/save

$o['POST']['site/save']=array (
  'class_name' => 'Site',
  'method_name' => 'postSave',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/skin

$o['POST']['site/skin']=array (
  'class_name' => 'Site',
  'method_name' => 'postSkin',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/page

$o['POST']['site/page']=array (
  'class_name' => 'Site',
  'method_name' => 'postPage',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/all

$o['POST']['site/all']=array (
  'class_name' => 'Site',
  'method_name' => 'postAll',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/add

$o['POST']['site/add']=array (
  'class_name' => 'Site',
  'method_name' => 'postAdd',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/update

$o['POST']['site/update']=array (
  'class_name' => 'Site',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/update/:id

$o['POST']['site/update/:id']=array (
  'class_name' => 'Site',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/delete

$o['POST']['site/delete']=array (
  'class_name' => 'Site',
  'method_name' => 'postDelete',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/find

$o['POST']['site/find']=array (
  'class_name' => 'Site',
  'method_name' => 'postFind',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/removeimage

$o['POST']['site/removeimage']=array (
  'class_name' => 'Site',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/removeimage/:id

$o['POST']['site/removeimage/:id']=array (
  'class_name' => 'Site',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/removeimage/:id/:prefix

$o['POST']['site/removeimage/:id/:prefix']=array (
  'class_name' => 'Site',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/removeimage2

$o['POST']['site/removeimage2']=array (
  'class_name' => 'Site',
  'method_name' => 'postRemoveImage2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/removefile2

$o['POST']['site/removefile2']=array (
  'class_name' => 'Site',
  'method_name' => 'postRemoveFile2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST site/field

$o['POST']['site/field']=array (
  'class_name' => 'Site',
  'method_name' => 'postField',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/page

$o['POST']['item/page']=array (
  'class_name' => 'Item',
  'method_name' => 'postPage',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/all

$o['POST']['item/all']=array (
  'class_name' => 'Item',
  'method_name' => 'postAll',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/add

$o['POST']['item/add']=array (
  'class_name' => 'Item',
  'method_name' => 'postAdd',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/update

$o['POST']['item/update']=array (
  'class_name' => 'Item',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/update/:id

$o['POST']['item/update/:id']=array (
  'class_name' => 'Item',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/delete

$o['POST']['item/delete']=array (
  'class_name' => 'Item',
  'method_name' => 'postDelete',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/find

$o['POST']['item/find']=array (
  'class_name' => 'Item',
  'method_name' => 'postFind',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/removeimage

$o['POST']['item/removeimage']=array (
  'class_name' => 'Item',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/removeimage/:id

$o['POST']['item/removeimage/:id']=array (
  'class_name' => 'Item',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/removeimage/:id/:prefix

$o['POST']['item/removeimage/:id/:prefix']=array (
  'class_name' => 'Item',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/removeimage2

$o['POST']['item/removeimage2']=array (
  'class_name' => 'Item',
  'method_name' => 'postRemoveImage2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/removefile2

$o['POST']['item/removefile2']=array (
  'class_name' => 'Item',
  'method_name' => 'postRemoveFile2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST item/field

$o['POST']['item/field']=array (
  'class_name' => 'Item',
  'method_name' => 'postField',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/find

$o['POST']['finder/find']=array (
  'class_name' => 'Finder',
  'method_name' => 'postFind',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/add

$o['POST']['finder/add']=array (
  'class_name' => 'Finder',
  'method_name' => 'postAdd',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/createfolder

$o['POST']['finder/createfolder']=array (
  'class_name' => 'Finder',
  'method_name' => 'postCreateFolder',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/isfileexist

$o['POST']['finder/isfileexist']=array (
  'class_name' => 'Finder',
  'method_name' => 'postIsFileExist',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/delete

$o['POST']['finder/delete']=array (
  'class_name' => 'Finder',
  'method_name' => 'postDelete',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/page

$o['POST']['finder/page']=array (
  'class_name' => 'Finder',
  'method_name' => 'postPage',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/all

$o['POST']['finder/all']=array (
  'class_name' => 'Finder',
  'method_name' => 'postAll',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/update

$o['POST']['finder/update']=array (
  'class_name' => 'Finder',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/update/:id

$o['POST']['finder/update/:id']=array (
  'class_name' => 'Finder',
  'method_name' => 'postUpdate',
  'arguments' => 
  array (
    'id' => 0,
    'request_data' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/removeimage

$o['POST']['finder/removeimage']=array (
  'class_name' => 'Finder',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/removeimage/:id

$o['POST']['finder/removeimage/:id']=array (
  'class_name' => 'Finder',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/removeimage/:id/:prefix

$o['POST']['finder/removeimage/:id/:prefix']=array (
  'class_name' => 'Finder',
  'method_name' => 'postRemoveImage',
  'arguments' => 
  array (
    'id' => 0,
    'prefix' => 1,
  ),
  'defaults' => 
  array (
    0 => NULL,
    1 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/removeimage2

$o['POST']['finder/removeimage2']=array (
  'class_name' => 'Finder',
  'method_name' => 'postRemoveImage2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/removefile2

$o['POST']['finder/removefile2']=array (
  'class_name' => 'Finder',
  'method_name' => 'postRemoveFile2',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST finder/field

$o['POST']['finder/field']=array (
  'class_name' => 'Finder',
  'method_name' => 'postField',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST uploader/image

$o['POST']['uploader/image']=array (
  'class_name' => 'Uploader',
  'method_name' => 'postImage',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);

#==== POST uploader/file

$o['POST']['uploader/file']=array (
  'class_name' => 'Uploader',
  'method_name' => 'postFile',
  'arguments' => 
  array (
    'request_data' => 0,
  ),
  'defaults' => 
  array (
    0 => NULL,
  ),
  'metadata' => 
  array (
  ),
  'method_flag' => 3,
);
return $o;