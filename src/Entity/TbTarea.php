<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTarea
 *
 * @ORM\Table(name="tb_tarea", indexes={@ORM\Index(name="fk_tb_tarea_categorizacion_codigo", columns={"categorizacion_codigo"}), @ORM\Index(name="fk_tb_tarea_empleado_codigo", columns={"empleado_codigo"}), @ORM\Index(name="fk_tb_tarea_estadp_codigo", columns={"estado_codigo"})})
 * @ORM\Entity
 */
class TbTarea
{
    /**
     * @var int
     *
     * @ORM\Column(name="tarea_codigo", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tareaCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tarea_descripcion", type="string", length=250, nullable=false, options={"fixed"=true})
     */
    private $tareaDescripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="tarea_descripcion_detallada", type="text", length=65535, nullable=false)
     */
    private $tareaDescripcionDetallada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tarea_fechavencimiento", type="date", nullable=false)
     */
    private $tareaFechavencimiento;

    /**
     * @var \TbCategorizacion
     *
     * @ORM\ManyToOne(targetEntity="TbCategorizacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorizacion_codigo", referencedColumnName="categorizacion_codigo")
     * })
     */
    private $categorizacionCodigo;

    /**
     * @var \TbEmpleado
     *
     * @ORM\ManyToOne(targetEntity="TbEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empleado_codigo", referencedColumnName="empleado_codigo")
     * })
     */
    private $empleadoCodigo;

    /**
     * @var \TbEstado
     *
     * @ORM\ManyToOne(targetEntity="TbEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado_codigo", referencedColumnName="estado_codigo")
     * })
     */
    private $estadoCodigo;

    public function getTareaCodigo(): ?string
    {
        return $this->tareaCodigo;
    }

    public function getTareaDescripcion(): ?string
    {
        return $this->tareaDescripcion;
    }

    public function setTareaDescripcion(string $tareaDescripcion): self
    {
        $this->tareaDescripcion = $tareaDescripcion;

        return $this;
    }

    public function getTareaDescripcionDetallada(): ?string
    {
        return $this->tareaDescripcionDetallada;
    }

    public function setTareaDescripcionDetallada(string $tareaDescripcionDetallada): self
    {
        $this->tareaDescripcionDetallada = $tareaDescripcionDetallada;

        return $this;
    }

    public function getTareaFechavencimiento(): ?\DateTimeInterface
    {
        return $this->tareaFechavencimiento;
    }

    public function setTareaFechavencimiento(\DateTimeInterface $tareaFechavencimiento): self
    {
        $this->tareaFechavencimiento = $tareaFechavencimiento;

        return $this;
    }

    public function getCategorizacionCodigo(): ?TbCategorizacion
    {
        return $this->categorizacionCodigo;
    }

    public function setCategorizacionCodigo(?TbCategorizacion $categorizacionCodigo): self
    {
        $this->categorizacionCodigo = $categorizacionCodigo;

        return $this;
    }

    public function getEmpleadoCodigo(): ?TbEmpleado
    {
        return $this->empleadoCodigo;
    }

    public function setEmpleadoCodigo(?TbEmpleado $empleadoCodigo): self
    {
        $this->empleadoCodigo = $empleadoCodigo;

        return $this;
    }

    public function getEstadoCodigo(): ?TbEstado
    {
        return $this->estadoCodigo;
    }

    public function setEstadoCodigo(?TbEstado $estadoCodigo): self
    {
        $this->estadoCodigo = $estadoCodigo;

        return $this;
    }


}
