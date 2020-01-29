<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEstado
 *
 * @ORM\Table(name="tb_estado")
 * @ORM\Entity
 */
class TbEstado
{
    /**
     * @var int
     *
     * @ORM\Column(name="estado_codigo", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $estadoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_nombre", type="string", length=250, nullable=false, options={"fixed"=true})
     */
    private $estadoNombre;

    public function getEstadoCodigo(): ?string
    {
        return $this->estadoCodigo;
    }

    public function getEstadoNombre(): ?string
    {
        return $this->estadoNombre;
    }

    public function setEstadoNombre(string $estadoNombre): self
    {
        $this->estadoNombre = $estadoNombre;

        return $this;
    }


}
