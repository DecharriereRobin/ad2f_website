<?php

namespace Controller\Backoffice\Utils;


class Resize extends \W\Controller\Controller
{
    
    public static function resizeimage($sourceFile, $targetName, $width , $height)
    {
              
                    $destination = __UPLOAD__.$targetName;
                    //$width  = 800; // Define targeted width size
                    //$height = 600; // Define targeted height size
                    $maxFileSize = ""; // Define picture max File Size
                    $getFileSize = $_FILES['file']['size'];

                    $imagine   = (new \Imagine\GD\Imagine())->open($sourceFile);
                    $sizeR     = $imagine->getSize();
                    $widthR    = $sizeR->getWidth();
                    $heightR   = $sizeR->getHeight();

                    $scale = min($width/$widthR, $height/$heightR);
                    $targetWidth = ceil($scale*$widthR);
                    $targetHeight = ceil($scale*$heightR);

                    $size      = new \Imagine\Image\Box($targetWidth, $targetHeight);
                    $mode      = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;

                    $resizeimg = $imagine ->thumbnail($size, $mode)
                                          ->save($destination);
        
    }
        
}