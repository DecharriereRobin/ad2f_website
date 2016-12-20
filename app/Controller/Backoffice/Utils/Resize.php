<?php

namespace Controller\Backoffice\Utils;

/**
   * List of event
   *
   *
   * @package    Controller\Backoffice\Utils
   * @author     VINCENT GOSSEY <vincent.gossey@gmail.com>
   */

class Resize
{    
    
    /**
    * @link Use of Imagine with GD. Doc here https://imagine.readthedocs.io/en/latest/
    */
    public static function resizeImageProportionally($sourceFile, $targetName, $width , $height)
    {   
        // Set PHP memory limit to higher value to avoid GD fatal error deflatting image. Check if compatible with hosting
        ini_set ('memory_limit', '512M');
        $destination = __UPLOAD__.$targetName;

        $imagine   = (new \Imagine\GD\Imagine())->open($sourceFile);
        
        //Get Source file size
        $getOrigineSize     = $imagine->getSize();
        $getOrigineWidth    = $getOrigineSize->getWidth();
        $getOrigineHeight   = $getOrigineSize->getHeight();

        // Calculate picture ratio for scaling
        $scale = min($width/$getOrigineWidth, $height/$getOrigineHeight);
        $targetWidth = ceil($scale*$getOrigineWidth);
        $targetHeight = ceil($scale*$getOrigineHeight);

        $size      = new \Imagine\Image\Box($targetWidth, $targetHeight);
        $mode      = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;

        $options = array(
            'jpeg_quality' => 90,
            'png_compression_level' => 9,
        );

        // Save resized picture in defined destination folder
        $resizeimg = $imagine ->thumbnail($size, $mode)
                              ->save($destination, $options);
                    
        
    }
    
    public static function resizeImageToFit($sourceFile, $targetName, $width , $height)
    {
        // Set PHP memory limit to higher value to avoid GD fatal error deflatting image. Check if compatible with hosting
        ini_set ('memory_limit', '512M');
        $destination = __UPLOAD__.$targetName;
        //Process Image
        $box = new \Imagine\Image\Box($width, $height);
        $imagine   = (new \Imagine\GD\Imagine())->open($sourceFile);
        
        
        //Get Source file size
        $getOrigineSize = $imagine->getSize();
        $getOrigineWidth    = $getOrigineSize->getWidth();
        $getOrigineHeight  = $getOrigineSize->getHeight();
        
        
        // Landscape Image. crop image horizontally
        if ($width > $height) {
            $targetWidth  = $getOrigineWidth*($box->getHeight()/$getOrigineHeight); 
            $targetHeight =  $box->getHeight();
            //Point centered in relation to Width
            $cropBy = new \Imagine\Image\Point((max($targetWidth - $box->getWidth(),0))/2, 0);
        } else{
            $targetWidth  = $box->getWidth();
            $targetHeight =  $getOrigineHeight*($box->getWidth()/$getOrigineWidth);
            //Point centered in relation to Height
            $cropBy = new \Imagine\Image\Point(0,(max($targetHeight - $box->getHeight(),0))/2);
            
        }
        
        
        //Resize temp box
        $thumbBox = new \Imagine\Image\Box($width, $height);
        $mode     = \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
        
        
        // Crop the previous with user's define
        $resizeimg = $imagine ->thumbnail($thumbBox, $mode);
    
        // Save resized and cropped picture in defined destination folder
        $resizeimg ->crop($cropBy, $box)
                    ->save($destination);
        
    }
}