<?php

namespace App\Controller;

use App\Entity\TbEmpleado;
use App\Form\EmpleadoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmpleadoController extends AbstractController
{
    /**
     * @Route("/empleado", name="empleado")
     */
    public function index(Request $request)
    {
        //importacion de la Entidad
        $empleado = new TbEmpleado();
        //Declaracion para formulario de Creacion 
        $form = $this->createForm(EmpleadoType::class,$empleado);
        $form->handleRequest($request);//Respuesta del formulario fue Recibido
        //Validacion de envio de datos del formulario metodo Submit
        if($form->isSubmitted() && $form->isValid()){
            $ent = $this->getDoctrine()->getManager();
            $ent->persist($empleado);
            $ent->flush();
            $this->addFlash("mensaje",TbEmpleado::RESPUESTA_EXITOSA);
            return $this->redirectToRoute("empleado");
        }
        //llamado a render del formulario para ejecucion del controlador
        return $this->render('empleado/index.html.twig', [
            'controller_name' => 'EmpleadoController',
            'FormularioEmpleado' => $form->createView(),
            'Nombre_Digitado' => $form->get('empleadoNombrecompleto')->getData(),
        ]);
    }
    /**
     * @Route("/empleado/{id}", name="empleado_show")
     */
    public function show($id)
    {
        $empleado = $this->getDoctrine()
            ->getRepository(TbEmpleado::class)
            ->find($id);

        if (!$empleado) {
            throw $this->createNotFoundException(
                'No empleado found for id '.$id
            );
        }
        return $this->render('empleado/show.html.twig', ['empleado' => $empleado]);
        

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['empleado' => $empleado]);
    }
}
