<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Symfony\Component\HttpFoundation\File\File as SymfoFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClothesRepository")
 * @Vich\Uploadable
 */
class Clothes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=100)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=255)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="firstImage", type="string", length=255)
     */
    private $firstImage;

    /**
     * @var string
     *
     * @Vich\UploadableField(mapping="images_file", fileNameProperty="firstImage")
     * @var File
     */
    private $firstImageFile;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Clothes
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Clothes
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return Clothes
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param string $size
     * @return Clothes
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Clothes
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Set firstImage
     *
     * @param string $firstImage
     *
     * @return Clothes
     */
    public function setFirstImage($firstImage)
    {
        $this->firstImage = $firstImage;

        return $this;
    }

    /**
     * Get firstImage
     *
     * @return string
     */
    public function getFirstImage()
    {
        return $this->firstImage;
    }

    /**
     * Set firstImageFile
     *
     * @param string $firstImageFile
     *
     * @return Clothes
     */
    public function setFirstImageFile(SymfoFile $image = null)
    {
        $this->firstImageFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * Get firstImageFile
     *
     * @return string
     */
    public function getFirstImageFile()
    {
        return $this->firstImageFile;
    }


    // add your own fields
}
