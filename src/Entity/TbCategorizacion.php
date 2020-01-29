<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCategorizacion
 *
 * @ORM\Table(name="tb_categorizacion")
 * @ORM\Entity
 */
class TbCategorizacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="categorizacion_codigo", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categorizacionCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="categorizacion_nombre", type="string", length=250, nullable=false, options={"fixed"=true})
     */
    private $categorizacionNombre;

    public function getCategorizacionCodigo(): ?string
    {
        return $this->categorizacionCodigo;
    }

    public function getCategorizacionNombre(): ?string
    {
        return $this->categorizacionNombre;
    }

    public function setCategorizacionNombre(string $categorizacionNombre): self
    {
        $this->categorizacionNombre = $categorizacionNombre;

        return $this;
    }


}
