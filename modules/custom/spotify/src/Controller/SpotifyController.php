<?php

/**
 * @file
 * Contains \Drupal\spotify\Controller\SpotifyController.
 */

namespace Drupal\spotify\Controller;


use Drupal\Core\Controller\ControllerBase;


class SpotifyController extends ControllerBase {

    public function lanzamientos(){

        $curl = curl_init();

        $url = "https://api.spotify.com/v1/albums";

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
           'Client-Id: ab2b70b90d49417d970d581e94cd5e23',
           'Client-Secret: 6f7545be42bf4dbdb56dac9ec7c8f685',
           'Content-Type: application/json'
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
     
        // EXECUTE:
        $result = curl_exec($curl);
        if(!$result){die("Connection Failure");}
        curl_close($curl);


        $build = [
            '#theme' => 'lanzamientos',
            '#result' => $this->t($result),
        ];
        return $build;
    }
}