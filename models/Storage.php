<?php
/**
 * Created by PhpStorm.
 * User: zidni
 * Date: 03/07/18
 * Time: 14.54
 */

namespace app\models;

use Yii;
use yii\base\Model;

class Storage extends Model
{
    private $aws;
    private $s3;

    function __construct()
    {
        $this->aws = Yii::$app->awssdk->getAwsSdk();
        $this->s3 = $this->aws->createS3();
    }

    public function browse($bucket = '', $prefix = '')
    {
        $result = $this->s3->listObjects(['Bucket' => $bucket, "Prefix" => $prefix])->toArray();
        foreach ($result as $r) {
            if (is_array($r)) {
                if (array_key_exists('statusCode', $r)) {
                    echo 'Effective URL: ' . $r['effectiveUri'] . '<br />';
                } else {
                    foreach ($r as $item) {
                        echo $item['Key'] . '<br />';
                    }
                }
            } else {
                echo $r . '<br />';
            }
        }
    }

    public function upload($bucket, $keyname, $filepath)
    {
        $result = $this->s3->putObject(array(
            'Bucket' => $bucket,
            'Key' => $keyname,
            'Body' => fopen($filepath, 'rb'),
            'ContentType' => 'file',
            'ACL' => 'public-read',
            'StorageClass' => 'REDUCED_REDUNDANCY',
            'Metadata' => array(
                'param1' => 'value 1',
                'param2' => 'value 2'
            )
        ));
        return $result;
    }

    public function delete($bucket, $keyname)
    {
        $result = $this->s3->deleteObjects([
            'Bucket' => $bucket,
            'Key' => $keyname
        ]);

        return $result;
    }
}