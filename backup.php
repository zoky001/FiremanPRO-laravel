<?php
require_once "vendor/autoload.php";
use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxFile;
$dbuser='root';
$dbpass='4AKA7mzJ';
$dbname='firemanpro';
// launch backup via command
exec("mysqldump -u $dbuser -p$dbpass $dbname | gzip > db_backup.sql.gz");
// now you have a database dumped and compressed using gzip and placed in your project root folder
$app = new \Kunnu\Dropbox\DropboxApp("eagnltxxkiguaf9", "pehdi0oor7y2no5", 'c314PqyZo0AAAAAAAAAAEAhtegwtOOzYP1wJMMxqRml29gfKq2u3Ox5KiAca8yEV');
$dropbox = new Dropbox($app);




// prepare file for upload 
$dropboxFile = new DropboxFile(__DIR__ . "/db_backup.sql.gz");

$dt=(new DateTime())->format("Y-m-d_H-i_s");
try{
    $file=$dropbox->upload($dropboxFile, "/backups/bcp".$dt, ['autorename' => true]);
    echo $file->getName();

}catch(Exception $e){
    echo $e;
}
//
//file uploaded 
//