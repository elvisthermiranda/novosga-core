<?php

namespace Novosga\Entity;

use Doctrine\ORM\Mapping as ORM;
use Novosga\Repository\PrioridadeRepository;

#[ORM\Entity(repositoryClass: PrioridadeRepository::class)]
#[ORM\Table(name: 'prioridades')]
class Prioridade implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: "string")]
    private string $nome;

    #[ORM\Column(type: "text")]
    private string $descricao;

    #[ORM\Column(type: "integer")]
    private int $peso;

    #[ORM\Column(type: "string", nullable: true)]
    private ?string $cor;

    #[ORM\Column(type: "boolean")]
    private bool $ativo;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTime $createdAt;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTime $updatedAt;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTime $deletedAt;

    public function __construct()
    {
        $this->ativo = true;
    }

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setId(mixed $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getPeso(): int
    {
        return $this->peso;
    }

    public function setPeso(int $peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    public function isAtivo(): bool
    {
        return $this->ativo;
    }

    public function setAtivo(bool $ativo): self
    {
        $this->ativo = $ativo;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTime $deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    public function getCor(): ?string
    {
        return $this->cor;
    }

    public function setCor(?string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getNome();
    }

    public function jsonSerialize(): array
    {
        return [
            'id'        => $this->getId(),
            'nome'      => $this->getNome(),
            'descricao' => $this->getDescricao(),
            'peso'      => $this->getPeso(),
            'cor'       => $this->getCor(),
            'ativo'     => $this->isAtivo(),
            'createdAt' => $this->getCreatedAt() ? $this->getCreatedAt()->format('Y-m-d\TH:i:s') : null,
            'updatedAt' => $this->getUpdatedAt() ? $this->getUpdatedAt()->format('Y-m-d\TH:i:s') : null,
            'deletedAt' => $this->getDeletedAt() ? $this->getDeletedAt()->format('Y-m-d\TH:i:s') : null,
        ];
    }
}
