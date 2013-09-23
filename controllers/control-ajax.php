<?php

class Ajax {
    function __construct() {
        if( !empty( $_REQUEST['func'] ) && method_exists($this, $_REQUEST['func']) ){ $this->{$_REQUEST['func']}(); }
        else { die('status : error D: !'); }
    }
    
    function getJson(){ 
        if($_GET['type'] == 'charts'){
            if($_GET['proyect'] == '01'){
                if($_GET['mes'] == '09'){
                    $datos = array(
                    'valores' => array(
                        'abril' => 1,
                        'mayo' => 2,
                        'junio' => 3,
                        'julio' => 4,
                        'agosto' => 7,
                        'septiembre' => 9
                     ),
                    'tendencia' => 'up',
                    'tendenciaFutura' => 'down',
                    'valorFuturo' => '1',
                    'comentariosExcerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                    'comentarios' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida purus mi, eget ultrices enim scelerisque id. Pellentesque bibendum, libero at fringilla venenatis, nisi massa sollicitudin magna, a auctor velit ligula non nunc. Integer adipiscing vel neque imperdiet fringilla. Donec non sapien consequat, lacinia magna eget, posuere leo. Nunc gravida libero et ipsum fermentum, quis eleifend arcu tincidunt. Morbi venenatis mi id velit consectetur sagittis id vitae ante. Curabitur sollicitudin pellentesque ipsum eu lobortis. In in bibendum nibh, et pharetra magna. Nunc id turpis purus. Aliquam eget odio et sem accumsan fermentum.</p>'
                    );
                }elseif($_GET['mes'] == '08'){
                    $datos = array(
                    'valores' => array(
                        'abril' => 5,
                        'mayo' => 2,
                        'junio' => 8,
                        'julio' => 4,
                        'agosto' => 5,
                        'septiembre' => 5
                     ),
                    'tendencia' => 'up',
                    'tendenciaFutura' => 'down',
                    'valorFuturo' => '5',
                    'comentariosExcerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                    'comentarios' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida purus mi, eget ultrices enim scelerisque id. Pellentesque bibendum, libero at fringilla venenatis, nisi massa sollicitudin magna, a auctor velit ligula non nunc. Integer adipiscing vel neque imperdiet fringilla. Donec non sapien consequat, lacinia magna eget, posuere leo. Nunc gravida libero et ipsum fermentum, quis eleifend arcu tincidunt. Morbi venenatis mi id velit consectetur sagittis id vitae ante. Curabitur sollicitudin pellentesque ipsum eu lobortis. In in bibendum nibh, et pharetra magna. Nunc id turpis purus. Aliquam eget odio et sem accumsan fermentum.</p>'
                    );
                }elseif($_GET['mes'] == '07'){
                    $datos = array(
                    'valores' => array(
                        'abril' => 5,
                        'mayo' => 4,
                        'junio' => 3,
                        'julio' => 7,
                        'agosto' => 7,
                        'septiembre' => 1
                     ),
                    'tendencia' => 'down',
                    'tendenciaFutura' => 'down',
                    'valorFuturo' => '10',
                    'comentariosExcerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                    'comentarios' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida purus mi, eget ultrices enim scelerisque id. Pellentesque bibendum, libero at fringilla venenatis, nisi massa sollicitudin magna, a auctor velit ligula non nunc. Integer adipiscing vel neque imperdiet fringilla. Donec non sapien consequat, lacinia magna eget, posuere leo. Nunc gravida libero et ipsum fermentum, quis eleifend arcu tincidunt. Morbi venenatis mi id velit consectetur sagittis id vitae ante. Curabitur sollicitudin pellentesque ipsum eu lobortis. In in bibendum nibh, et pharetra magna. Nunc id turpis purus. Aliquam eget odio et sem accumsan fermentum.</p>'
                    );
                }else{
                     $datos = array(
                    'valores' => array(
                        'abril' => 10,
                        'mayo' => 2,
                        'junio' => 5,
                        'julio' => 2,
                        'agosto' => 3,
                        'septiembre' => 10
                     ),
                    'tendencia' => 'down',
                    'tendenciaFutura' => 'down',
                    'comentariosExcerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                    'comentarios' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida purus mi, eget ultrices enim scelerisque id. Pellentesque bibendum, libero at fringilla venenatis, nisi massa sollicitudin magna, a auctor velit ligula non nunc. Integer adipiscing vel neque imperdiet fringilla. Donec non sapien consequat, lacinia magna eget, posuere leo. Nunc gravida libero et ipsum fermentum, quis eleifend arcu tincidunt. Morbi venenatis mi id velit consectetur sagittis id vitae ante. Curabitur sollicitudin pellentesque ipsum eu lobortis. In in bibendum nibh, et pharetra magna. Nunc id turpis purus. Aliquam eget odio et sem accumsan fermentum.</p>'
                    );
                }
                
            }elseif($_GET['proyect'] == '02'){
                $datos = array(
                'valores' => array(
                    'abril' => 3,
                    'mayo' => 2,
                    'junio' => 6,
                    'julio' => 8,
                    'agosto' => 6,
                    'septiembre' => 5
                 ),
                'tendencia' => 'up',
                'tendenciaFutura' => 'down',
                'comentariosExcerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'comentarios' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida purus mi, eget ultrices enim scelerisque id. Pellentesque bibendum, libero at fringilla venenatis, nisi massa sollicitudin magna, a auctor velit ligula non nunc. Integer adipiscing vel neque imperdiet fringilla. Donec non sapien consequat, lacinia magna eget, posuere leo. Nunc gravida libero et ipsum fermentum, quis eleifend arcu tincidunt. Morbi venenatis mi id velit consectetur sagittis id vitae ante. Curabitur sollicitudin pellentesque ipsum eu lobortis. In in bibendum nibh, et pharetra magna. Nunc id turpis purus. Aliquam eget odio et sem accumsan fermentum.</p><ul><li>Lorem iopsum dolor sit amet</li><li>Lorem ipsum dolors it amet</li><li>Lorem ipsum dolors it amet</li></ul>'
                );
            }elseif($_GET['proyect'] == '03'){
                $datos = array(
                'valores' => array(
                    'abril' => 1,
                    'mayo' => 4,
                    'junio' => 3,
                    'julio' => 7,
                    'agosto' => 7,
                    'septiembre' => 3
                 ),
                'tendencia' => 'down',
                'tendenciaFutura' => 'down',
                'comentariosExcerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'comentarios' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida purus mi, eget ultrices enim scelerisque id. Pellentesque bibendum, libero at fringilla venenatis, nisi massa sollicitudin magna, a auctor velit ligula non nunc. Integer adipiscing vel neque imperdiet fringilla. Donec non sapien consequat, lacinia magna eget, posuere leo. Nunc gravida libero et ipsum fermentum, quis eleifend arcu tincidunt. Morbi venenatis mi id velit consectetur sagittis id vitae ante. Curabitur sollicitudin pellentesque ipsum eu lobortis. In in bibendum nibh, et pharetra magna. Nunc id turpis purus. Aliquam eget odio et sem accumsan fermentum.</p>'
                );
            }
            
            die(json_encode($datos));
        }
        else if($_GET['type'] == 'proyectInfo'){
            if($_GET['proyect'] == '01'){
                $datos = array(
                    'montoTotal' => 2456078,
                    'montoAnual' => 456078,
                    'division' => 'Chuqicamata',
                    'duracion' => '12 meses',
                    'termino' => 'Agosto 2014',
                    'ejecutor' => 'GPRO',
                    'gerente' => 'Jorge Codina Negrete',
                    'autorizacion' => '31 de Julio 2012',
                    'dueno' => 'Cargo del responsable financiero',
                    'etapa' => 'Factibilidad',
                    'justificacion' => 'Información',
                    'cliente' => 'Operador organización externa',
                    'montoTotalOriginal' => 2600008,
                    'duracionOriginal' => '6 meses',
                    'terminoOriginal' => 'Octubre 2013',
                    'gerenteOriginal' => 'Juan Perez Castro',
                    'avance' => '100%'
                );  
            }elseif($_GET['proyect'] == '02'){
                $datos = array(
                    'montoTotal' => 456078,
                    'montoAnual' => 6078,
                    'division' => 'Chuqicamata',
                    'duracion' => '12 meses',
                    'termino' => 'Agosto 2014',
                    'ejecutor' => 'GPRO',
                    'gerente' => 'Jorge Codina Negrete',
                    'autorizacion' => '31 de Julio 2012',
                    'dueno' => 'Cargo del responsable financiero',
                    'etapa' => 'Factibilidad',
                    'justificacion' => 'Información',
                    'cliente' => 'Operador organización externa',
                    'montoTotalOriginal' => 2600008,
                    'duracionOriginal' => '6 meses',
                    'terminoOriginal' => 'Octubre 2013',
                    'gerenteOriginal' => 'Juan Perez Castro',
                    'avance' => '0.9%'
                );  
            }elseif($_GET['proyect'] == '03'){
                $datos = array(
                    'montoTotal' => 6078,
                    'montoAnual' => 78,
                    'division' => 'Chuqicamata',
                    'duracion' => '12 meses',
                    'termino' => 'Agosto 2014',
                    'ejecutor' => 'GPRO',
                    'gerente' => 'Jorge Codina Negrete',
                    'autorizacion' => '31 de Julio 2012',
                    'dueno' => 'Cargo del responsable financiero',
                    'etapa' => 'Factibilidad',
                    'justificacion' => 'Información',
                    'cliente' => 'Operador organización externa',
                    'montoTotalOriginal' => 2600008,
                    'duracionOriginal' => '6 meses',
                    'terminoOriginal' => 'Octubre 2013',
                    'gerenteOriginal' => 'Juan Perez Castro',
                    'avance' => '43%'
                );  
            }
            
            die(json_encode($datos));
        }elseif($_GET['type'] == 'treemaps'){
            if($_GET['grupo'] == 'directorio'){
                $datos = array(
                    array(
                        'label' => 'Factibilidad Nueva Andina Fase II',
                        'montoTotal' => 56078,
                        'montoAnual' => 6078,
                        'valor' => 10,
                        'tendencia' => 'down',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Ubicación Portales Inyección de Aire',
                        'montoTotal' => 56078,
                        'montoAnual' => 6078,
                        'valor' => 9,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Construcción Obras Tempranas Nodo 3500',
                        'montoTotal' => 78,
                        'montoAnual' => 8,
                        'valor' => 8,
                        'tendencia' => 'up',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Nuevo Sistema Traspaso',
                        'montoTotal' => 456078,
                        'montoAnual' => 56078,
                        'valor' => 7,
                        'tendencia' => 'down',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Expansión Andina',
                        'montoTotal' => 56078,
                        'montoAnual' => 6078,
                        'valor' => 5,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Mina Ministro Hales',
                        'montoTotal' => 78,
                        'montoAnual' => 8,
                        'valor' => 5,
                        'tendencia' => 'up',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Explotación Recursos Lixiviables',
                        'montoTotal' => 5974,
                        'montoAnual' => 974,
                        'valor' => 5,
                        'tendencia' => 'up',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Aguas Drenajes',
                        'montoTotal' => 62374,
                        'montoAnual' => 2374,
                        'tendencia' => 'up',
                        'valor' => 5,
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Tratamiento de Aguas Ácidas',
                        'montoTotal' => 2355,
                        'montoAnual' => 355,
                        'valor' => 4,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Factibilidad Proyecto Mina Chuqui Subterránea',
                        'montoTotal' => 18268,
                        'montoAnual' => 8268,
                        'valor' => 5,
                        'tendencia' => 'down',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Mina Chuqui Subterránea',
                        'montoTotal' => 333395,
                        'montoAnual' => 3395,
                        'valor' => 5,
                        'tendencia' => 'up',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Mejor Piso Settler',
                        'montoTotal' => 2135,
                        'montoAnual' => 135,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Mejoramiento Ruta 50',
                        'montoTotal' => 464,
                        'montoAnual' => 64,
                        'valor' => 1,
                        'tendencia' => 'down',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Construcción y limpieza de escoria',
                        'montoTotal' => 7155,
                        'montoAnual' => 155,
                        'valor' => 4,
                        'tendencia' => 'up',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'San Antonio Óxidos',
                        'montoTotal' => 3616,
                        'montoAnual' => 616,
                        'valor' => 3,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Rampa Salida de emergencia',
                        'montoTotal' => 1276,
                        'montoAnual' => 276,
                        'valor' => 2,
                        'tendencia' => 'up',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Explotación Diablo Fase III',
                        'montoTotal' => 4932,
                        'montoAnual' => 932,
                        'valor' => 1,
                        'tendencia' => 'up',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Construcción Plataforma Confluencia',
                        'montoTotal' => 22836,
                        'montoAnual' => 2836,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Explotación Rajo Sur Obras Tempranas',
                        'montoTotal' => 5226,
                        'montoAnual' => 226,
                        'valor' => 10,
                        'tendencia' => 'down',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Explotación Rajo Sur Mina',
                        'montoTotal' => 41965,
                        'montoAnual' => 1965,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Nuevo Nivel Mina',
                        'montoTotal' => 652,
                        'montoAnual' => 52,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Explotación Diablo Fase IV',
                        'montoTotal' => 1913,
                        'montoAnual' => 913,
                        'valor' => 10,
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Construcción de Obras Tempranas',
                        'montoTotal' => 592,
                        'montoAnual' => 92,
                        'valor' => 10,
                        'tendencia' => 'down',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Explotación Sector Norte',
                        'montoTotal' => 200,
                        'montoAnual' => 2,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Explotación Pacífico Superior',
                        'montoTotal' => 3450,
                        'montoAnual' => 450,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Aplicación Minería Contínua',
                        'montoTotal' => 65911,
                        'montoAnual' => 5911,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '01',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Delineamiento y otros',
                        'montoTotal' => 6827,
                        'montoAnual' => 827,
                        'valor' => 10,
                        'tendencia' => 'up',
                        'proyectID' => '02',
                        'url' => 'http://codelco.ida.cl/ficha'
                    ),
                    array(
                        'label' => 'Norma de Instalación',
                        'montoTotal' => 45785,
                        'montoAnual' => 5785,
                        'valor' => 10,
                        'tendencia' => 'down',
                        'proyectID' => '03',
                        'url' => 'http://codelco.ida.cl/ficha'
                    )
                );  
            }elseif($_GET['grupo'] == 'principales'){
                $datos = array(
                array(
                    'label' => 'Factibilidad Nueva Andina Fase II',
                    'montoTotal' => 534805,
                    'montoAnual' => 165911,
                    'valor' => 10,
                    'tendencia' => 'down',
                    'proyectID' => '01',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Ubicación Portales Inyección de Aire',
                    'montoTotal' => 165911,
                    'montoAnual' => 65911,
                    'valor' => 9,
                    'tendencia' => 'up',
                    'proyectID' => '02',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Construcción Obras Tempranas Nodo 3500',
                    'montoTotal' => 626078,
                    'montoAnual' => 8,
                    'valor' => 8,
                    'tendencia' => 'up',
                    'proyectID' => '03',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Nuevo Sistema Traspaso',
                    'montoTotal' => 3968078,
                    'montoAnual' => 56078,
                    'valor' => 7,
                    'tendencia' => 'down',
                    'proyectID' => '01',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Expansión Andina',
                    'montoTotal' => 2555078,
                    'montoAnual' => 6078,
                    'valor' => 5,
                    'tendencia' => 'up',
                    'proyectID' => '02',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Mina Ministro Hales',
                    'montoTotal' => 386078,
                    'montoAnual' => 34728,
                    'valor' => 5,
                    'tendencia' => 'up',
                    'proyectID' => '03',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Explotación Recursos Lixiviables',
                    'montoTotal' => 87974,
                    'montoAnual' => 974,
                    'valor' => 5,
                    'tendencia' => 'up',
                    'proyectID' => '01',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Aguas Drenajes',
                    'montoTotal' => 91374,
                    'montoAnual' => 2374,
                    'tendencia' => 'up',
                    'valor' => 5,
                    'proyectID' => '02',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Tratamiento de Aguas Ácidas',
                    'montoTotal' => 8412355,
                    'montoAnual' => 355,
                    'valor' => 4,
                    'tendencia' => 'up',
                    'proyectID' => '02',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Factibilidad Proyecto Mina Chuqui Subterránea',
                    'montoTotal' => 97268,
                    'montoAnual' => 8268,
                    'valor' => 5,
                    'tendencia' => 'down',
                    'proyectID' => '03',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Mina Chuqui Subterránea',
                    'montoTotal' => 103395,
                    'montoAnual' => 3395,
                    'valor' => 5,
                    'tendencia' => 'up',
                    'proyectID' => '01',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Mejor Piso Settler',
                    'montoTotal' => 27135,
                    'montoAnual' => 135,
                    'valor' => 10,
                    'tendencia' => 'up',
                    'proyectID' => '02',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Mejoramiento Ruta 50',
                    'montoTotal' => 18464,
                    'montoAnual' => 64,
                    'valor' => 1,
                    'tendencia' => 'down',
                    'proyectID' => '03',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Construcción y limpieza de escoria',
                    'montoTotal' => 54155,
                    'montoAnual' => 155,
                    'valor' => 4,
                    'tendencia' => 'up',
                    'proyectID' => '01',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'San Antonio Óxidos',
                    'montoTotal' => 8714616,
                    'montoAnual' => 616,
                    'valor' => 3,
                    'tendencia' => 'up',
                    'proyectID' => '02',
                    'url' => 'http://codelco.ida.cl/ficha'
                ),
                array(
                    'label' => 'Rampa Salida de emergencia',
                    'montoTotal' => 1276,
                    'montoAnual' => 276,
                    'valor' => 2,
                    'tendencia' => 'up',
                    'proyectID' => '03',
                    'url' => 'http://codelco.ida.cl/ficha'
                )
            );  
            }
            
            
            
            die(json_encode($datos));
        }
        
    }
}
                    

?>