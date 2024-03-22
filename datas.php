<?php 

class Datas{
    public $json_data;
    function __construct($json_data)
    {
        $this->json_data = file_get_contents('ArtGallery.json');
    }

    function gallery(){
        $gallery_datas = json_decode($this->json_data,true);
        return $gallery_datas['Tbl_Gallery'];
    }

    function arts(){
        $arts_datas = json_decode($this->json_data,true);
        return $arts_datas['Tbl_Art'];
    }

    function artists(){
        $artists_datas = json_decode($this->json_data,true);
        return $artists_datas['Tbl_Artist'];
    }
}

?>