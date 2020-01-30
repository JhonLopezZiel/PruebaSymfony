<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEmpleado
 *
 * @ORM\Table(name="tb_empleado")
 * @ORM\Entity
 */
class TbEmpleado
{

    const RESPUESTA_EXITOSA = "Registro Exitoso";
    /**
     * @var int
     *
     * @ORM\Column(name="empleado_codigo", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $empleadoCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="empleado_nombrecompleto", type="string", length=250, nullable=false, options={"fixed"=true})
     */
    private $empleadoNombrecompleto;

    public function getEmpleadoCodigo(): ?string
    {
        return $this->empleadoCodigo;
    }


    public function getEmpleadoNombrecompleto(): ?string
    {
        return $this->empleadoNombrecompleto;
    }

    public function setEmpleadoNombrecompleto(string $empleadoNombrecompleto): self
    {
        $this->empleadoNombrecompleto = $empleadoNombrecompleto;

        return $this;
    }


}
