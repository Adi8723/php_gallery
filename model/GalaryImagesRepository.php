<?php
class GalaryImagesRepository{

    public function __construct(private PDO $pdo){}


    public function fetchAll(){
        $stmt = $this->pdo->prepare('SELECT * FROM `images` ORDER BY `id` ASC');
        $stmt->execute();
        
       $results = $stmt->fetchAll(PDO::FETCH_CLASS, GallaryImageModel::class);

       return $results;
 

        // return [
        //     new GallaryImageModel('pexels-josh-hild-2629233.jpg' , 'Wandern macht Spaß!'),
        //     new GallaryImageModel('pexels-stein-egil-liland-3408744.jpg' , 'Polarlichter im Schnee'),
        //     new GallaryImageModel('pexels-matthew-montrone-1179229.jpg' , 'Ein schöner Wald'),
        //     new GallaryImageModel('pexels-tobias-bjorkli-2113566.jpg' , 'Polarlichter bei Nacht')
        // ];
    }
}

?>