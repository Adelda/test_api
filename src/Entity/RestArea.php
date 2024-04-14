<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata as Api;
use App\Repository\RestAreaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: RestAreaRepository::class)]
#[Api\ApiResource(
    normalizationContext: [
        'groups' => [
            'read_rest_area'
        ]
    ],
    operations: [
        new Api\GetCollection(),
        new Api\Get(),
    ]
)]
#[Api\ApiFilter(SearchFilter::class, properties: [ 'name' => 'ipartial' ])]
class RestArea
{
    use TimestampableEntity;
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['read_rest_area'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['read_rest_area'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['read_rest_area'])]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
