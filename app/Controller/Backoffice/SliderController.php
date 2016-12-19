<?php

namespace Controller\Backoffice;

use Model\SliderModel as Slider;
use Model\MediaModel as Media;

  /**
   * List of event
   *
   *
   * @package    W
   * @subpackage Controller
   * @author     VINCENT GOSSEY <vincent.gossey@gmail.com>
   */
class SliderController extends \W\Controller\Controller
{
    
    
    public function sliderSettings()
    {
    //$this->allowTo('admin'); // Only Admin User allowed for Back Office function
    $slider = new Slider();
        
    
    // Get Path information from DB
    for ($i=1 ; $i<=3 ; $i++){
        
        $sliderImages[] = $slider->getSliderImage($i);
    }
    
        
    // Get Updated images
        
    if(isset($_POST['editSlider'])){
        
        var_dump($_FILES);
        
        foreach($_FILES as $key => $file){
            
            if($file[$key]['error'] == 0 ){
            
                
            }
        
            
            
            var_dump(pathinfo($_FILES[$key]['name']));
            $fileName = pathinfo($_FILES[$key]['name']);
            var_dump($fileName['filename']);
            
        }
        
        
    }
        
        
    
    $this->show('backoffice//slider/sliderSettings', ['sliderImages' => $sliderImages]);
    
    }
 
    
}