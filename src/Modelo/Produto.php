<?php 

class Produto 
{
    private int $id;
    private string $name;
    private string $description;
    private string $imagem;
    private float $price;

    public function __construct(int $id, string $name, string $description, string $imagem, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->imagem = $imagem;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;  
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getPrice():float
    {
        return $this->price;
    }
}