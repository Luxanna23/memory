<?php
class Card {

    // Les Attributs
    public $image;
    private $id;
    private $state;
    private $items;

    // public $etat;

    // Le Constructeur
    // public function __construct($idCard) {
	// 	$ToutesLesImages = ['image/card1.jpg', 'image/card2.jpg', 'image/card3.jpg', 'image/card4.jpg', 'image/card5.jpg', 'image/card6.jpg', 'image/card7.jpg', 'image/card8.jpg', 'image/card9.jpg', 'image/card10.jpg', 'image/card11.jpg', 'image/card12.jpg'];
	// 	$this->setImage($ToutesLesImages[$idCard]);
	// }

    // Les Methodes
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }
}
?>