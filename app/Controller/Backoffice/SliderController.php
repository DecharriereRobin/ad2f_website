<?php

namespace Controller\Backoffice;

use Model\SliderModel as Slider;
use Model\MediaModel as Media;

  /**
   * Slider Edit
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
        // Only Admin User allowed for Back Office function
        $this->allowTo('admin'); 
        $slider = new Slider();

        // Get Path information from DB
        for ($i=1 ; $i<=3 ; $i++){

            $sliderImages[] = $slider->getSliderImage($i);
        }


        // Get Updated images
        if(isset($_POST['editSlider'])){


            foreach($_FILES as $key => $file){

                if($file['error'] == 0){
                    $errorMessages = [];
                    // Define accepted MIME type
                    $fileType = ["image/png", "image/gif", "image/jpg", "image/jpeg", "application/pdf"];

                    // Check if uploaded image match MIME type
                    if(in_array($file['type'], $fileType)){

                        $sliderPicture = new Media();

                        $fileName = pathinfo($file['name']);

                        // Set unique target name
                        $targetName = $fileName['filename']."-".date("d-m-Y")."-".uniqid().".".$fileName['extension'];

                        // Set destination PATH
                        $currentFolder = "/public/upload/";

                        // Get temporary uploaded image
                        $sourceFile = $file['tmp_name'];


                    } else{
                        $errorMessages[] = "<div class='alert alert-danger'>Extension de fichier invalide<br/>
                                     Les types d'image acceptés sont: JPEG, JPG, GIF et PNG<br />
                                     Pour plus d'informations, rendez-vous sur le site:</div>";
                    }


                    // If no error in previous process, images are processed for reduction and data is inserted to DB 
                    if(count($errorMessages)== 0){
                        // Process Image for reduction to fit slider specification
                        Utils\Resize::resizeImageToFit($sourceFile, $targetName, 1200, 310);

                        // Get ID from the view
                        $id = substr($key ,-1);


                         // Insert Image Metadata in Media DB
                        $getId = $sliderPicture->insert([
                        'filename' => $targetName,
                        'filesize' => $file['size'],
                        'date'     => (new \DateTime('now'))->format('Y-m-d'),
                        'title'    => $fileName['filename'],
                        'path'     => $currentFolder.$targetName
                        ], true);

                        // Get Last Insert ID
                        $mediaId = $getId['id'];

                        // Update media id relationship in Slider DB
                        $slider->update([
                            'media_id' => $mediaId,
                        ], $id , true);

                        $message[] = "<div class='alert alert-success'>L'image #". $id ." a été modifiée avec succés.</div>";

                    } else {

                    $errorMessages[] = "<div class='alert alert-danger'>Aucune image n'a été modifiée.</div>";
                    }

                }// End If/.No error
            } //End Foreach

            // Return Session Error
            isset($errorMessages)? $_SESSION['message'] = implode('<br>', $errorMessages) : $_SESSION['message'] = implode('<br>', $message);
            $this->redirectToRoute('backoffice_Slider');

        }

        $this->show('backoffice//slider/sliderSettings', ['sliderImages' => $sliderImages,]);

    }
 
    
}