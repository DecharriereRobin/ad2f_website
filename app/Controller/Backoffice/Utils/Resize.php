<?php

namespace Controller\Backoffice\Utils;

/**
   * Resize Image
   * @package    Controller\Backoffice\Utils
   * @author     VINCENT GOSSEY <vincent.gossey@gmail.com>
   */

class Resize
{    
    
    /**
    * Resize Image with original ratio
    * @link Use of Imagine with GD. Doc here https://imagine.readthedocs.io/en/latest/
    * @Param mixed $sourceFile Image source to process
    * @Param mixed $targetName result Image name
    * @Param int   $width user define target width
    * @Param int   $height user define target height
    */
    public static function resizeImageProportionally($sourceFile, $targetName, $width , $height)
    {   
        // Set PHP memory limit to higher value to avoid GD fatal error deflatting image. Check if compatible with hosting
        ini_set ('memory_limit', '512M');
        $destination = __UPLOAD__.$targetName;
        
        // Define Compression Quality
        $options = array(
            'jpeg_quality' => 90,
            'png_compression_level' => 9,
        );

        $imagine   = (new \Imagine\GD\Imagine())->open($sourceFile);
        
        //Get Source file size
        $getOrigineSize     = $imagine->getSize();
        $getOrigineWidth    = $getOrigineSize->getWidth();
        $getOrigineHeight   = $getOrigineSize->getHeight();
        
        // Calculate picture ratio for scaling
        $scale = min($width/$getOrigineWidth, $height/$getOrigineHeight);
        $targetWidth = ceil($scale*$getOrigineWidth);
        $targetHeight = ceil($scale*$getOrigineHeight);
        
        if($getOrigineWidth < $width && $getOrigineHeight < $height){
            // Save Upscaled and resized picture in destination folder
            $resizeimg = $imagine ->resize(new \Imagine\Image\Box($targetWidth, $targetHeight))
                              ->save($destination, $options);
            
        }else{
            $size = new \Imagine\Image\Box($targetWidth, $targetHeight);
            $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
            
            // Save resized picture in defined destination folder
            $resizeimg = $imagine ->thumbnail($size, $mode)
                              ->save($destination, $options);
        }
    }
    
    /**
    * Crop image size
    * @link Use of Imagine with GD. Doc here https://imagine.readthedocs.io/en/latest/
    * @Param mixed $sourceFile Image source to process
    * @Param mixed $targetName result Image name
    * @Param int   $width user define cropping width
    * @Param int   $height user define cropping height
    */    
    public static function resizeImageToFit($sourceFile, $targetName, $width , $height)
    {
        // Set PHP memory limit to higher value to avoid GD fatal error deflatting image. Check if compatible with hosting
        ini_set ('memory_limit', '512M');
        $destination = __UPLOAD__.$targetName;
        //Process Image
        $box = new \Imagine\Image\Box($width, $height);
        $imagine   = (new \Imagine\GD\Imagine())->open($sourceFile);
        
        
        //Get Source file size
        $getOrigineSize   = $imagine->getSize();
        $getOrigineWidth  = $getOrigineSize->getWidth();
        $getOrigineHeight = $getOrigineSize->getHeight();
        
        // Get origine point for cropping  
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
        
        // Check if original image is larger than define size. If original image width is bigger than height the function gets the ratio by width to upscale image in user's define box. Same for height. If original image is bigger 
        if($getOrigineWidth < $width){
            // Calculate picture ratio for scaling
            $scale = $width/$getOrigineWidth;
            $targetWidth = ceil($scale*$getOrigineWidth);
            $targetHeight = ceil($scale*$getOrigineHeight);
            $resizeimg = $imagine ->resize( new \Imagine\Image\Box($targetWidth, $targetHeight));
        } elseif($getOrigineHeight < $height) {
            $scale = $width/$getOrigineHeight;
            $targetWidth = ceil($scale*$getOrigineWidth);
            $targetHeight = ceil($scale*$getOrigineHeight);
            $resizeimg = $imagine ->resize( new \Imagine\Image\Box($targetWidth, $targetHeight));
        } else {
            // Crop the previous box with user's define box
            $resizeimg = $imagine ->thumbnail($thumbBox, $mode);
        }
    
        // Save resized and cropped picture in defined destination folder
        $resizeimg ->crop($cropBy, $box)
                    ->save($destination);
        
    }
}