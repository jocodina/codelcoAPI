window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){console.log(Array.prototype.slice.call(arguments))}};
(function( window, $, undefined ){
    "use strict";
    if (!$.support.transition){
        $.fn.transition = $.fn.animate;
        var noTransition = true;
    }
    if($('.lt-ie9').length > 0){
        var oldIE = true;
    }
    if($('.ie7').length > 0){
        var ie7 = true;
    }
   
    /***
     * Constructor del objeto SiteHandler
     * 
     * Se ejecuta en el DOM ready para setear todos los valores, checkeos y delegaciones del sitio
     * Este objeto cuenta con dos agrupaciones de métodos. El objeto handlers tendrá todas las funciones delegadas y el objeto methods tendrá las funciones ejecutables.
     * 
     */
    window.SiteHandler = function(){//Init para los methodos y funciones del sitio en general   
        var esto = this;
        esto.myScroll = {};
        
        
        esto.transitionendProperty = 'webkitTransitionEnd mozTransitionend oTransitionEnd MSTransitionEnd transitionend';
        //Objeto que contiene métodos y funciones generales del sitio que se ejecutarán en el Init
        var methods;
        methods = {
            /**
             * handlerEvents
             * 
             * @param : items (nodo Jquery). Set de nodos JQuery al cual aplicar las delegaciones
             * @return : void.
             * 
             * Este metodo se encarga de delegar automáticamente los objetos dentro del set de nodos $elements
             * a los métodos listados abajo.
             * El método al cual se delegara estará sujeto al valor del atributo "data-func" de cada elemento
             * Opcionalmente cada elemento puede tener definido el atributo "data-event" cuyo valor debe ser un tipo de evento
             * valido en javascript y válido para el elemento. La existencia de este atributo en el elemento cambiará
             * la delegación por defecto (click) por el evento (o sets de eventos separados por espacio) que traiga este atributo
             * 
             */
            handlerEvents : function(items){
                if( ! items.length){ //Si no encuentra elementos, entonces no hace nada
                    return;
                }
                $.each(items,function(i,item) {
                    var $item = $(item); //se almacena el elemento html en la variable $item
                    var func = $item.attr("data-func"); //se almacena el valor del atributo 'data-func' del elemento html
                    var event = $item.attr("data-event") ? $item.attr("data-event") : 'click'; //Si no existe valor definido del atributo 'data-event' del elemento, por defecto el evento a delegar será 'click'
                    if( func && $.isFunction(handlers[ func ]) && ! $item.data('delegated') ){ //Si existe func y además el valor del atributo 'data-func' existe como función dentro del objeto 'handlers' y además el elemento html no tiene el atributo personalziado 'delegated', la delegación se hará efectiva.
                        $item.off(event, handlers[ func ]);//desactiva la delegación del evento para no producir multiples delegaciones
                        $item.on(event,{ globalesto : esto }, handlers[ func ]);//activa la delegación del evento
                        $item.attr('data-delegated', true);//al elemento html se le asigna un atributo personalizado 'delegated' con valor 'true' para comprobar luego si ha sido delegado anteriormente el evento.
                    }
                });
            },
             /**
             * equalizeHeights
             * 
             * @param : $elements (nodo Jquery). Set de nodos JQuery al cual aplicar las delegaciones
             * @return : void.
             * 
             * Hace que todos los elementos dentro del set $elements tengan la altura del
             * elemento más alto del set.
             */
            equalizeHeights : function( $elements , $sum ){
                if(!$sum){
                    $sum = 0; //Se inicializa una variable en 0 en caso de que no exista.
                }
                
                var heightArray = [],
                    maxValue;
            
                $elements.height('auto');//se resetea la altura
                $.each($elements, function(index, elm){
                    heightArray.push( $(elm).height() ); // incluye la altura por cada elemento en el array
                });
                maxValue = Math.max.apply( Math, heightArray ); // saca el valor mas alto del array
                $elements.height( maxValue + $sum ); // Se setea la nueva altura
            },
            /**
             * detectTouchDevices
             * 
             * @return : boolean.
             * 
             * Detecta a través de los eventos 'ontouchstart' y 'msPointer' si se está desplegando el sitio desde un dispositivo móbil.
             */        
            detectTouchDevices : function(){
                var supportsTouch = false;
                if(Modernizr.mq('only screen and (max-device-width : 1280px)')){ //utilizando Modernizer, detectamos si se está visualizando desde algún dispositivo móvil con tamaño de pantalla máximo de 1280px
                    if ('ontouchstart' in window) {
                        supportsTouch = true; //Si se dispara el evento 'ontouchstart' significa que es un dispositivo móvil
                    } else if(window.navigator.msPointerEnabled && event.isPrimary) {
                        supportsTouch = true; //Si existe 'msPointerEnabled y además event.isPrimary significa que es dispositivo móvil con IE10
                    }
                }
                return supportsTouch;//retorna boolean
            },
            /**
             * svgFallBack
             * Detecta a través de Modernizr si el navegador soporta imagenes en formato SVG, de lo contrario, despliega la imagen en PNG almacenada en el atributo data-svg de la imagen
             */
            svgFallBack : function() {
                if( !Modernizr.svg ) { 
                    var svgObjects = $('[data-svg]');
                    $.each(svgObjects, function(i, elm){
                        $(elm).attr('src', $(elm).attr('data-svg'));
                    });
                }
            },
            /**
             * initializeSlider
             * 
             * @param : $sliderContainer (nodo Jquery). contenedor HTML donde se encuentra la estructura del carrusel 
             * Inicializa la estructura del carrusel de proyectos en la home
             */
            initializeSlider : function($sliderContainer, index){
                var touchStartX, touchStartY, touchMoveX, touchMoveY, touchEndX, deltaX, deltaY, finaldeltaX, finaldeltaY;
                var $slides = $sliderContainer.find('ul.slider-ul').children('li'); //Slides
                var cantidad = $sliderContainer.attr('data-visuals'); //obtengo la cantidad de tabs a mostrar en primera instancia.
                var $ul = $sliderContainer.find('ul.slider-ul'); //Contenedor de Slides
                var ulWidth = $ul.width();
                var containerWidth = $sliderContainer.width(); //Ancho del Contenedor total
                if(!cantidad){cantidad = 3;} // por defecto muestra tres tabs
                var slidesWidth = containerWidth / parseInt(cantidad, 10); //Divide el ancho del contenedor total en 3 para definir el ancho de los slides
                var agrega = 0;
                var padding;
              
                var onStart = function( event ){
                    touchStartX = event.type === 'MSPointerDown' ? event.originalEvent.pageX : event.originalEvent.touches[0].pageX; //Se obtiene el pixel relativo a la pantalla del tocuh inicial  
                    touchStartY = event.type === 'MSPointerDown' ? event.originalEvent.pageY : event.originalEvent.touches[0].pageY;
                    $ul.on('touchmove MSPointerMove', onMove);
                };
                var onMove = function( event ){
                    touchMoveX = event.type === 'MSPointerMove' ? event.originalEvent.pageX : event.originalEvent.touches[0].pageX;//Se obtiene el píxel relativo a la pantalla del touch en movimiento
                    touchMoveY = event.type === 'MSPointerMove' ? event.originalEvent.pageY : event.originalEvent.touches[0].pageY;
                    
                    if(Math.abs((touchMoveX - touchStartX)) > Math.abs((touchMoveY - touchStartY))){
                        event.preventDefault();
                    }
                    
                    deltaX = (touchMoveX - touchStartX) + (finaldeltaX ? finaldeltaX : 0);//Se calcula el valor delta para obtener la posición actual.

                    if((touchMoveX > touchStartX) && (Math.abs((touchMoveX - touchStartX)) > 50)){
                        $sliderContainer.find('.prev').trigger('click');
                    }else if((touchMoveX < touchStartX) && (Math.abs((touchMoveX - touchStartX)) > 50)){
                        $sliderContainer.find('.next').trigger('click');
                    }
                };
                var onEnd = function (event){
                    finaldeltaX = deltaX; //Se almacena el valor de delta al final, para saber cuanto se ha movido el <ul>
                    finaldeltaY = deltaY;
                    $ul.off('touchmove MSPointerMove', onMove);
                };
                
                if(ie7){
                    padding = $slides.innerWidth() - $slides.width();
                    agrega = padding * $slides.length;
                }
                $slides.css('width',slidesWidth+'px'); //Implementa el ancho calculado a los slides
                $ul.width(($slides.length * slidesWidth) + agrega); //El ancho del contenedor de los slides debe ser suficientemente grande para contenerlos a todos
                
                if(ie7){
                    $slides.width(slidesWidth - padding);
                }
                
                if(index){
                    var calculo = containerWidth * (index - 1);
                    $ul.transition({ x: '-'+ calculo +'px' }, function(){
                        if(ie7){
                           $ul.animate({
                              left :  '-'+ calculo +'px'
                           });
                        }
                       
                       if(Math.abs($ul.position().left) >= Math.abs($ul.width() - slidesWidth)){
                           $sliderContainer.find('.navigation .next').transition({ scale: 0, delay: 100 });
                       }
                       if($ul.position().left < 0){
                           $sliderContainer.find('.navigation .prev').transition({ scale: 1, delay: 100 });
                       }
                    });
                    
                    
                }
                
                $ul.on('touchstart MSPointerDown', onStart);
                $ul.on('touchend MSPointerUp', onEnd);
                
                
            },
            /**
             * setChart
             * 
             * @param : $charts (nodo Jquery). Set de elementos donde se desplegarán los gráficos
             * Itera sobre los elementos para crear los gráficos
             */        
            setChart : function($charts){
                var esto = $(this);
                $.each($charts, function(index, item){
                      var mes = $(item).attr('data-mes');
                      var ano = $(item).attr('data-ano');
                      var proyectID = $(item).attr('data-proyect');
                      
                      $.getJSON( "/ajax.php", { func: 'getJson', type: 'charts', proyect: proyectID, ano: ano, mes: mes } )
                      .success(function( json ) {
                        methods.makechart($(item), json);
                      });
                });
                
            },
            /**
             * makechart
             * 
             * @param : $item (nodo Jquery). Contenedor donde se insertará el gráfico
             * @param : jsonData (Set de datos en formato JSON). Set de datos en formato JSON obtenidos desde un atributo personalizado
             * Crea el gráfico utilizando API de Highcharts
             */ 
            makechart : function($item, jsonData){
                    var estado;
                    var color;
                    var $parentItem = $item.parent().parent();
                    var $rotulo = $item.next();
                    var tendencia = $item.attr('data-tend');
                    var $ficha = $('#ficha-info');
                    var valores = methods.separateValues(jsonData.valores, 'val');
                    var meses = methods.separateValues(jsonData.valores, 'meses');
                    var arrow = jsonData.tendencia;
                    
                    $item.next().removeClass('up').removeClass('down').addClass(arrow);

                    valores = $.map(valores, function(value, index){
                                  estado = parseInt(value),
                                  color = "#6BAD3F";
                                  if(estado <= 3){
                                      color = '#B82A34';
                                  }
                                  else if(estado > 3 && estado <= 6){
                                      color = '#F09C28';
                                  }
                                  return {
                                      name : value.name,
                                      y: estado,
                                      marker: {
                                        fillColor: color,
                                        lineWidth: 0,
                                        lineColor: null // inherit from series
                                     }
                                  };
                                });
                                
                    var rotuloEstado;
                    if(estado > 6){
                        $parentItem.addClass('enfocado').removeClass('desviado').removeClass('altamente-desviado');;
                        $rotulo.text('Enfocado');
                        $ficha.addClass('enfocado').removeClass('desviado').removeClass('altamente-desviado');
                        $item.parents('.lightbox').find('.asp-wrapp').addClass('enfocado');
                    }else if(estado > 3 && estado <= 6){
                        $parentItem.addClass('desviado').removeClass('enfocado').removeClass('altamente-desviado');;
                        $rotulo.text('Desviado');
                        $ficha.addClass('desviado').removeClass('enfocado').removeClass('altamente-desviado');
                        $item.parents('.lightbox').find('.asp-wrapp').addClass('desviado');
                    }else if(estado <= 3){
                        $parentItem.addClass('altamente-desviado').removeClass('desviado').removeClass('enfocado');;
                        $rotulo.text('Altamente desviado');
                        $ficha.addClass('altamente-desviado').removeClass('desviado').removeClass('enfocado');
                        $item.parents('.lightbox').find('.asp-wrapp').addClass('altamente-desviado');
                    }
                    $rotulo.addClass(tendencia);
                    
                    color = oldIE ? '#ffffff' : color;
                    
                    $item.highcharts({
                        chart: {
                            plotBorderWidth: 1,
                            plotBorderColor: '#ECECEC',
                            margin: [0, 5, 0, 5],
                            backgroundColor: null
                        },
                        credits: {
                            enabled: false
                        },
                        legend: {
                            enabled: false
                        },
                        title: {
                            text: null
                        },
                        xAxis: {
                            categories: meses,
                            min: 0.5,
                            max: 4.5,
                            labels: {
                                enabled: false,
                                overflow: 'justify'
                            },
                            plotBands: [{
                                color: {
                                    linearGradient:  [0, 4, 0, 3.9],
                                    stops: [
                                        [0, '#f4f4f4'],
                                        [1, color]
                                    ]
                                },
                                from: 0,
                                to: 1
                            },{
                                color: {
                                    linearGradient:  [0, 4, 0, 3.9],
                                    stops: [
                                        [0, '#ffffff'],
                                        [1, color]
                                    ]
                                },
                                from: 1,
                                to: 2
                            },{
                                color: {
                                    linearGradient:  [0, 4, 0, 3.9],
                                    stops: [
                                        [0, '#f4f4f4'],
                                        [1, color]
                                    ]
                                },
                                from: 2,
                                to: 3
                            },{
                                color: {
                                    linearGradient:  [0, 4, 0, 3.9],
                                    stops: [
                                        [0, '#ffffff'],
                                        [1, color]
                                    ]
                                },
                                from: 3,
                                to: 4
                            },{
                                color: {
                                    linearGradient:  [0, 4, 0, 3.9],
                                    stops: [
                                        [0, '#f4f4f4'],
                                        [1, color]
                                    ]
                                },
                                from: 4,
                                to: 5
                            }]
                        },
                        yAxis: {
                            title: {
                                text: null
                            },  
                            labels: {
                                enabled: false
                            },
                            gridLineColor: '#DFDFDF',
                            tickInterval: 2,
                            maxPadding: 0.25
                        },
                        series: [{
                              name: 'Valor Tendencia',
                              data: valores,  
                              lineColor: '#999999'
                        }]
                    });
                    var nextDiv = $item.parent().next();
                    if(nextDiv.hasClass('last')){
                         nextDiv.append('<p>'+ jsonData.comentariosExcerpt +'</p>') ;
                         nextDiv.find('.lighbox-button').data('comments', $($.parseHTML(jsonData.comentarios)));
                         nextDiv.find('.ajax-loader').remove();
                    }
            },
            separateValues : function(datos, retorno){
                var valores = new Array();
                var meses = new Array();
                var cont = 0;
                $.each(datos,function(key, val){//Separa los valores y los meses en arrays diferentes
                    valores[cont] = val; 
                    meses[cont] = key;
                    cont++;
                });
                if(retorno === 'val')
                    return valores;
                else(retorno === 'meses')
                    return meses;
            },
            setTreemap : function($containers){
                
                $.each($containers, function(index, value){
                    var grupo = $(value).attr('data-grupo');
                    var mes = $(value).attr('data-mes');
                    var ano = $(value).attr('data-ano');
                    
                    $.getJSON( "/ajax.php", { func: 'getJson', type: 'treemaps', ano: ano, mes: mes, grupo: grupo } )
                      .success(function( json ) {
                        methods.makeTreemap($(value), json);
                      });
                });
                
            },
            makeTreemap : function ($container, jsonData){
                var maxVal = 0;
                var cont = 0;
                var contAD = 0;
                var contD = 0;
                var sumaTotal = 0;
                var sumaAnual = 0;
                var appVal, result, dataTypeCount, dataTypeTotal, dataTypeAnual;
                var desviados = "";
                var altamenteDesviados = "";
                var list = "";
                
                $.each(jsonData,function(index, value){
                    if(maxVal < value.montoTotal){
                        maxVal = value.montoTotal;
                    }
                    sumaTotal = sumaTotal + value.montoTotal;
                    sumaAnual = sumaAnual + value.montoAnual;
                    cont++;
                    if(value.valor <= 3){
                        altamenteDesviados += '<li><a href="'+ value.url +'" title="Ver ficha detallada de proyecto '+ value.label +'" rel="contents">'+ value.label +'</a></li>'
                        contAD++;
                    }else if(value.valor > 3 && value.valor <= 6){
                        desviados += '<li><a href="'+ value.url +'" title="Ver ficha detallada de proyecto '+ value.label +'" rel="contents">'+ value.label +'</a></li>'
                        contD++;
                    }
                });
                
                sumaTotal = methods.currency(sumaTotal, 0, ['.', ".", '.']);
                sumaAnual = methods.currency(sumaAnual, 0, ['.', ".", '.']);
                
                if(altamenteDesviados !== ""){
                    list += '<span class="red-txt proyect-list-title"><span class="number">'+ contAD +'</span> Altamente Desviados</span>';
                    list += '<ul class="proyect-list">';
                    list += altamenteDesviados;
                    list += '</ul>';
                }
                if(desviados !== ""){
                    list += '<span class="yellow-txt proyect-list-title"><span class="number">'+ contD +'</span> Altamente Desviados</span>';
                    list += '<ul class="proyect-list">';
                    list += desviados;
                    list += '</ul>';
                }
                $container.parents('.proyectos').prev().find('aside').html(list, function(){});
                
                var parentHeight = $container.parent().parent().prev().find('aside').height();
                parentHeight = parentHeight >= 460 ? parentHeight : 460;
                
                $container.css('height', parentHeight);
                
                $.each(jsonData,function(index, value){
                    result = (value.montoTotal * 100) / maxVal;
                    value.montoTotal = result < 10 ? 10 : result ;
                });
                
                
                $container.treemap(jsonData, {
                        nodeClass: function(node, box){
                            if(node.valor <= 3){
                                    return 'minor';
                            }else if(node.valor > 3 && node.valor <= 6){
                                    return 'middle';
                            }
                            return 'major';
                        },
                        paintCallback: function ($label, node) {
                            dataTypeCount = $container.parent().prev().find('[data-count]');
                            dataTypeTotal = $container.parent().prev().find('[data-montoTotalSuma]');
                            dataTypeAnual = $container.parent().prev().find('[data-montoAnualSuma]');
                            
                            dataTypeCount.html(cont);
                            dataTypeTotal.html(sumaTotal);
                            dataTypeAnual.html(sumaAnual);
                            
                            methods.handlerEvents($('.evt'));
                        },
                        smallestFontSize: 12, // If your label doesn't fit below this text size, it isn't added
                        startingFontSize: 12 // Labels start this size (in px) and may be smaller to accommodate text
                });
                
                
            },
            deploySubMenu : function ($submenu){
                $submenu.on('mouseenter', function( event ){
                    var nav = $('nav').height();
                    $(this).find('.wraper-submenu').transition({
                        opacity: '1',
                        y: nav+'px'
                    });
                });
                $submenu.on('mouseleave', function( event ){
                    var nav = $('nav').height();
                    $(this).find('.wraper-submenu').transition({ 
                        opacity: '0',
                        y: '0px'
                    });
                });
            },
            loadInfoFicha : function ($container){
                     $.each($container, function(index, item){
                         methods.insertData($(item));
                     });
            },
            insertData : function($container){
                var dataType;
                var ano = $container.attr('data-ano');
                var mes = $container.attr('data-mes');
                var proyectID = $container.attr('data-proyect');

                $.getJSON( "/ajax.php", { func: 'getJson', type: 'proyectInfo', proyect: proyectID, ano: ano, mes: mes } )
                          .success(function( json ) {
                             json.montoTotal = methods.currency(json.montoTotal, 0, ['.', ".", '.']);
                             json.montoAnual = methods.currency(json.montoAnual, 0, ['.', ".", '.']);
                             json.montoTotalOriginal = methods.currency(json.montoTotalOriginal, 0, ['.', ".", '.']);

                             $.each(json,function(index, value){
                                 dataType = $container.find('[data-'+ index +']');
                                 if(dataType.hasClass('orange-txt')){
                                     value = value +' (Original)';
                                 }
                                 if(index === 'avance'){
                                     value = 'Avance de '+ value;
                                 }
                                 dataType.html(value);
                             });
                          });
            },
            currency : function(value, decimals, separators) {
                decimals = decimals >= 0 ? parseInt(decimals, 0) : 2;
                separators = separators || ['.', "'", ','];
                var number = (parseFloat(value) || 0).toFixed(decimals);
                if (number.length <= (4 + decimals))
                    return number.replace('.', separators[separators.length - 1]);
                var parts = number.split(/[-.]/);
                value = parts[parts.length > 1 ? parts.length - 2 : 0];
                var result = value.substr(value.length - 3, 3) + (parts.length > 1 ?
                    separators[separators.length - 1] + parts[parts.length - 1] : '');
                var start = value.length - 6;
                var idx = 0;
                while (start > -3) {
                    result = (start > 0 ? value.substr(start, 3) : value.substr(0, 3 + start))
                        + separators[idx] + result;
                    idx = (++idx) % 2;
                    start -= 3;
                }
                return (parts.length == 3 ? '-' : '') + result;
            },
                    /**
             * makeSparklines
             * 
             * @param : $container (nodo Jquery). Contenedor donde se insertará el sparkline
             * Crea el sparkline utilizando API de Jquey Sparklines
             */ 
           setSparklines : function ($container){
                $.each($container, function(index, val){
                    var singleContainer = $(this);
                    var ano = singleContainer.attr('data-ano');
                    var mes = singleContainer.attr('data-mes');
                    var proyectID = singleContainer.attr('data-proyect');
                    $.getJSON( "/ajax.php", { func: 'getJson', type: 'charts', ano: ano, mes: mes, proyect: proyectID } )
                      .success(function( json ) {
                        methods.makeSparklines(singleContainer, json);
                      });
                    
                });
            },
           makeSparklines : function($container, jsonData){
                var valores = methods.separateValues(jsonData.valores, 'val');
                var lastValue = valores[valores.length - 1];
                var color = "#6BAD3F";
                var estado = 'enfocado';
                var tendencia = jsonData.tendencia;
                
                  if(lastValue <= 3){
                      color = '#B82A34';
                      estado = 'altamente-desviado';
                  }
                  else if(lastValue > 3 && lastValue <= 6){
                      color = '#F09C28';
                      estado = 'desviado';
                  }

                $container.parents('td').addClass(estado);
                $container.parents('tr').find('td:first-child').addClass(estado);
                $container.next().addClass(tendencia);

                $container.sparkline(valores, {
                    type: 'line',
                    width: '35',
                    height: '25',
                    lineWidth: 2,
                    lineColor: color,
                    fillColor: '#E4E4E4',
                    spotColor: false,
                    minSpotColor: false,
                    maxSpotColor: false,
                    highlightSpotColor: false,
                    highlightLineColor: false,
                    disableTooltips: true,
                    spotRadius: 0});

                var nextTend = $container.parents('tr').find('.future-tend');
                var nextValue = jsonData.valorFuturo;
                var nextArrow = jsonData.tendenciaFutura;
                var nextEstado = 'enfocado';

                if(nextValue <= 3){
                      nextEstado = 'altamente-desviado';
                  }
                  else if(nextValue > 3 && nextValue <= 6){
                      nextEstado = 'desviado';
                  }
               nextTend.parent().addClass(nextEstado);
               nextTend.addClass(nextArrow);
            },
           stickyNav : function ($nav, navWidth){
                var offset = $nav.offset().top;
                $(window).on('scroll',function(){
                    var scrollTop = $(window).scrollTop();
                
                    if(scrollTop > offset){
                        $nav.addClass('fixed');
                        if(navWidth){$nav.css('width',navWidth);}
                    }else if(scrollTop < offset){
                        $nav.removeClass('fixed');
                    }
                });
                
            },
           scrollingTables : function ($container){
               var $swipercontainerCount = $container.length;
               for(var i = 0; i < $swipercontainerCount; i ++){
                   var mySwiper = $('#swiper-container-'+ i).swiper({
                        scrollContainer: true,
                        scrollbar: {
                          container: '.swiper-scrollbar'
                        }
                  });
               }
           },
          date_from_string : function ( str ){
                var months = ["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"];
                var key;
                
                $.each(months, function(index, elem){
                    if(str === elem ){
                        key = index;
                    }
                });
                return key;
          }         
        };
        //Objeto que contiene métodos y funciones generales del sitio que se ejecutarán al ser delegadas por algún evento.
        var handlers = {
            
            moveCarrousel : function ( event ){
                var esto = event.data.globalesto;
                var $item = $(this);
                var $sliderContainer = $item.parent().parent();
                var movementValue = $sliderContainer.attr('data-visuals');
                var sliderContainerWidth = $sliderContainer.outerWidth();
                var $ul = $sliderContainer.find('ul');
                var ulWidth = $ul.outerWidth(true);
                var $slides = $sliderContainer.find('li');
                var slidesWidth = $slides.outerWidth(true);
                
                
                
                if($item.hasClass('next') && !$item.hasClass('moving')){
                    $item.prev().transition({ scale: 1, delay: 100 }, function(){
                        $item.prev().css('display','block');
                    });
                    var calculo = Math.abs($ul.position().left) + parseInt(slidesWidth, 10);
                    if(calculo !== (ulWidth - sliderContainerWidth) + slidesWidth){
                        $item.addClass('moving');
                        $ul.transition({ x: '-'+ calculo +'px' },function(){
                            if(oldIE){
                                $ul.animate({
                                    left : '-'+ calculo +'px'
                                },200);
                            }
                            $item.removeClass('moving');
                        });
                        
                    }
                    $item.attr('data-moving','false');
                    
                    if(movementValue === "1"){
                        sliderContainerWidth = $sliderContainer.outerWidth();
                    }
                    if(calculo >= ulWidth - sliderContainerWidth){
                        $item.transition({ scale: 0, delay: 100 },function(){
                            if(oldIE){
                                $item.css('display','none');
                            }
                        });
                    }
                }else if($item.hasClass('prev') && !$item.hasClass('moving')){
                    $item.next().transition({ scale: 1, delay: 100 }, function(){
                        $item.next().css('display','block');
                    });
                    var calculo = Math.abs($ul.position().left) - parseInt(slidesWidth, 10);
                    $item.addClass('moving');
                    $ul.transition({ x: '-'+ calculo +'px' },function(){
                        if(oldIE){
                            $ul.animate({
                                left : '-'+ calculo +'px'
                            },200);
                        }
                        $item.removeClass('moving');
                    });
                    if(calculo === 0){
                        $item.transition({ scale: 0, delay: 100 }, function(){
                            $item.css('display','none');
                        });
                    }
                }
                
            },
            openDetails : function ( event ){
                var $item = $(this);
                var deploy = $item.attr('data-deploy');
                var originalValue = $('.original-value');
                
                if($item.hasClass('more')){
                    var $container = $item.parent().find('.sub-section');
                    if(deploy === 'false'){
                        originalValue.transition({ scale: 1, delay: 100 });
                        if(!ie7){
                            originalValue.css({
                                'margin-bottom':'20px',
                                'height' : 'auto'
                            });
                        }else{
                            $container.css('display','block');
                        }

                        originalValue.prev().css('margin-bottom','5px');
                        
                        $container.addClass('toggled');
                        $item.attr('data-deploy','true').addClass('menos').html('Ocultar detalle');
                    }else{
                        originalValue.transition({ scale: 0, delay: 100 });
                        if(!ie7){
                           originalValue.css({
                                'margin-bottom':'0px',
                                'height' : '0'
                            }); 
                        }else{
                            $container.css('display','none');
                        }
                        originalValue.prev().css('margin-bottom','20px');
                        
                        $container.removeClass('toggled');
                        $item.attr('data-deploy','false').removeClass('menos').html('Ver detalle');
                    }
                }else{
                    var $container = $item.parents('.sub-section');
                    var $daButton = $item.parents('.sub-section').next();
                    $container.removeClass('toggled');
                    $daButton.attr('data-deploy','false').removeClass('menos').html('Ver detalle');
                    
                }
                
            },
            deployAsp : function( event ){
                var index = $(this).attr('data-index');
                
                var cortina = '<div class="cortina ficha"></div>';
                var lightbox = '<div id="slider" class="lightbox asp medium-gray shadow-box" data-visuals="1">';
                        lightbox += '<div class="ohidden">';
                            lightbox += '<ul class="slider-ul">';
                            
                                lightbox += '<li class="enfocado">';
                                    lightbox += '<div class="asp-wrapp">';
                                        lightbox += '<h2 class="equal-header-asp">Seguridad y Medio Ambiente</h2>';
                                        lightbox += '<span class="estado-text">Enfocado</span>';
                                        lightbox += '<div class="article-wrapper">';
                                            lightbox += '<h4>Índice de frecuencia::</h4>';
                                            lightbox += '<span class="secondary-meta">Real</span>';
                                            lightbox += '<span class="value">3,6</span>';
                                            lightbox += '<span class="secondary-meta">Meta</span>';
                                            lightbox += '<span class="value">< 1,8</span>';
                                        lightbox += '</div>';
                                        lightbox += '<div class="article-wrapper">';
                                            lightbox += '<div class="eval-group clearfix">';
                                                lightbox += '<span class="symbol green-bg">E</span>';
                                                lightbox += '<span class="eval">Permisos</span>';
                                            lightbox += '</div>';
                                            lightbox += '<div class="eval-group">';
                                                lightbox += '<span class="symbol yellow-bg">D</span>';
                                                lightbox += '<span class="eval">Compromisos</span>';
                                            lightbox += '</div>';
                                        lightbox += '</div>';
                                    lightbox += '<div class="article-wrapper">';
                                        lightbox += '<h4>Observaciones:</h4>';
                                        lightbox += '<p>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</p>';
                                        lightbox += '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
                                        lightbox += '<ul>';
                                            lightbox += '<li>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</li>';
                                            lightbox += '<li>Lorem ipsum dolor sit amet.</li>';
                                        lightbox += '</ul>';
                                    lightbox += '</div>';
                                    lightbox += '</div>';   
                                    lightbox += '<span class="estado-text">Enfocado</span>';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="desviado">';
                                    lightbox += '<div class="asp-wrapp">';
                                        lightbox += '<h2 class="equal-header-asp">Alcance Técnico</h2>';
                                        lightbox += '<span class="estado-text">Desviado</span>';
                                        lightbox += '<div class="article-wrapper">';
                                            lightbox += '<div class="eval-group clearfix">';
                                                lightbox += '<span class="symbol green-bg">E</span>';
                                                lightbox += '<span class="eval">Capacidad</span>';
                                            lightbox += '</div>';
                                            lightbox += '<div class="eval-group">';
                                                lightbox += '<span class="symbol yellow-bg">D</span>';
                                                lightbox += '<span class="eval">Optimización</span>';
                                            lightbox += '</div>';
                                            lightbox += '<div class="eval-group clearfix">';
                                                lightbox += '<span class="symbol red-bg">AD</span>';
                                                lightbox += '<span class="eval">Instalaciones</span>';
                                            lightbox += '</div>';
                                            lightbox += '<div class="eval-group">';
                                                lightbox += '<span class="symbol green-bg">E</span>';
                                                lightbox += '<span class="eval">Equipos Principales</span>';
                                            lightbox += '</div>';
                                            lightbox += '<div class="eval-group">';
                                                lightbox += '<span class="symbol green-bg">E</span>';
                                                lightbox += '<span class="eval">Incorporaciones</span>';
                                            lightbox += '</div>';
                                            lightbox += '<div class="eval-group">';
                                                lightbox += '<span class="symbol yellow-bg">D</span>';
                                                lightbox += '<span class="eval">OExclusiones</span>';
                                            lightbox += '</div>';
                                        lightbox += '</div>';
                                    lightbox += '<div class="article-wrapper">';
                                        lightbox += '<h4>Observaciones:</h4>';
                                        lightbox += '<p>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</p>';
                                        lightbox += '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
                                        lightbox += '<ul>';
                                            lightbox += '<li>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</li>';
                                            lightbox += '<li>Lorem ipsum dolor sit amet.</li>';
                                        lightbox += '</ul>';
                                    lightbox += '</div>';
                                    lightbox += '</div>';   
                                    lightbox += '<span class="estado-text">Desviado</span>';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="altamente-desviado">';
                                    lightbox += '<div class="asp-wrapp">';
                                        lightbox += '<h2 class="equal-header-asp">Costo</h2>';
                                        lightbox += '<span class="estado-text">Altamente Desviado</span>';
                                        lightbox += '<div class="article-wrapper">';
                                            lightbox += '<span class="secondary-meta">Autorizado (uk$)</span>';
                                            lightbox += '<span class="value">456.078</span>';
                                            lightbox += '<span class="secondary-meta">Proyectado (uK$)</span>';
                                            lightbox += '<span class="value">924.007</span>';
                                            lightbox += '<span class="secondary-meta">Desviación</span>';
                                            lightbox += '<span class="value">-4%</span>';
                                        lightbox += '</div>';
                                    lightbox += '<div class="article-wrapper">';
                                        lightbox += '<h4>Observaciones:</h4>';
                                        lightbox += '<p>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</p>';
                                        lightbox += '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
                                        lightbox += '<ul>';
                                            lightbox += '<li>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</li>';
                                            lightbox += '<li>Lorem ipsum dolor sit amet.</li>';
                                        lightbox += '</ul>';
                                    lightbox += '</div>';
                                    lightbox += '</div>';   
                                    lightbox += '<span class="estado-text">Altamente Desviado</span>';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="desviado">';
                                    lightbox += '<div class="asp-wrapp">';
                                        lightbox += '<h2 class="equal-header-asp">Avance Físico</h2>';
                                        lightbox += '<span class="estado-text">Desviado</span>';
                                        lightbox += '<div class="article-wrapper">';
                                            lightbox += '<div class="middle-col">';
                                            lightbox += '<h4>Fecha de Término:</h4>';
                                            lightbox += '<span class="secondary-meta">Autorizado</span>';
                                            lightbox += '<span class="value">2013-07-31</span>';
                                            lightbox += '<span class="secondary-meta">Proyectado</span>';
                                            lightbox += '<span class="value">2012-01-03</span>';
                                            lightbox += '<span class="secondary-meta">Desviación</span>';
                                            lightbox += '<span class="value">10%</span>';
                                        lightbox += '</div>';
                                        lightbox += '<div class="middle-col">';
                                            lightbox += '<h4>Avance Físico:</h4>';
                                            lightbox += '<span class="secondary-meta">Programado</span>';
                                            lightbox += '<span class="value">10%</span>';
                                            lightbox += '<span class="secondary-meta">Real</span>';
                                            lightbox += '<span class="value">9%</span>';
                                        lightbox += '</div>';
                                    lightbox += '</div>';
                                    lightbox += '<div class="article-wrapper">';
                                        lightbox += '<h4>Observaciones:</h4>';
                                        lightbox += '<p>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</p>';
                                        lightbox += '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
                                        lightbox += '<ul>';
                                            lightbox += '<li>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</li>';
                                            lightbox += '<li>Lorem ipsum dolor sit amet.</li>';
                                        lightbox += '</ul>';
                                    lightbox += '</div>';
                                    lightbox += '</div>';   
                                    lightbox += '<span class="estado-text">Desviado</span>';
                                lightbox += '</li>';
                                
                                lightbox += '<li>';
                                    lightbox += '<div class="asp-wrapp empty">';
                                        lightbox += '<h2>Alcance de gestión</h2>';
                                        lightbox += '<div class="article-wrapper">';
                                            lightbox += '<h3>Aspecto no evaluado</h3>';
                                        lightbox += '</div>';
                                    lightbox += '</div>';   
                                lightbox += '</li>';
                                
                                lightbox += '<li class="enfocado">';
                                    lightbox += '<div class="asp-wrapp">';
                                    lightbox += '<h2 class="equal-header-asp">Aseguramiento de las promesas</h2>';
                                    lightbox += '<span class="estado-text">Enfocado</span>';
                                    lightbox += '<div class="article-wrapper">';
                                    lightbox += '<div class="eval-group">';
                                            lightbox += '<span class="symbol yellow-bg">D</span>';
                                            lightbox += '<span class="eval">Confiabilidad Operacional</span>';
                                    lightbox += '</div>';
                                    lightbox += '<div class="eval-group">';
                                            lightbox += '<span class="symbol green-bg">E</span>';
                                            lightbox += '<span class="eval">Diseño Organizacional</span>';
                                    lightbox += '</div>'; 
                                    lightbox += '<div class="eval-group">';
                                            lightbox += '<span class="symbol yellow-bg">D</span>';
                                            lightbox += '<span class="eval">Plan de Implementación</span>';
                                    lightbox += '</div>';
                                    lightbox += '</div>';
                                    lightbox += '<div class="article-wrapper">';
                                        lightbox += '<h4>Observaciones:</h4>';
                                        lightbox += '<p>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</p>';
                                        lightbox += '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
                                        lightbox += '<ul>';
                                            lightbox += '<li>El Proyecto Mina Chuqui Subterránea se compone del Estudio de Factibilidad Proyecto.</li>';
                                            lightbox += '<li>Lorem ipsum dolor sit amet.</li>';
                                        lightbox += '</ul>';
                                    lightbox += '</div>';
                                    lightbox += '</div>';   
                                    lightbox += '<span class="estado-text">Enfocado</span>';
                                lightbox += '</li>';
                                
                                lightbox += '<li>';
                                    lightbox += '<div class="asp-wrapp empty">';
                                        lightbox += '<h2>Economicos</h2>';
                                        lightbox += '<div class="article-wrapper">';
                                            lightbox += '<h3>Aspecto no evaluado</h3>';
                                        lightbox += '</div>';
                                    lightbox += '</div>';   
                                lightbox += '</li>';
                                
                            lightbox += '</ul>';
                        lightbox += '</div>';
                        lightbox += '<div class="navigation">';
                        lightbox += '<button class="prev evt" data-func="moveCarrousel" data-moving="false">Anterior</button>';
                        lightbox += '<button class="next evt" data-func="moveCarrousel" data-moving="false">Siguiente</button>';
                        lightbox += '</div>';
                        lightbox += '<button class="cerrar-button evt" data-func="closeLightbox">Cerrar</button>';
                    lightbox += '</div>';
                
                $('body').append(cortina);
                $('.cortina').height($(document).height()).append(lightbox);
                $('html, body').animate({scrollTop:0}, 'slow');
                methods.handlerEvents($('.evt'));
                methods.initializeSlider($('.lightbox'), index);
                methods.equalizeHeights($('.lightbox .asp-wrapp'));
                
                
            },
            deployLightbox : function( event ){
        
                var $item = $(this);
                var ano = $item.attr('data-ano');
                var mes = $item.attr('data-mes');
                var proyect = $item.attr('data-proyect');
                var comments = $item.data('comments');
                
                var cortina = '<div class="cortina ficha"></div>';
                var lightbox = '<div class="lightbox for-chart asp medium-gray shadow-box" data-visuals="1">';
                        lightbox += '<div class="asp-wrapp">';
                                lightbox += '<h2 class="chart-title">Gráfico de Evaluación general Agosto 2013:</h2>';
                                lightbox += '<div class="chart-lightbox" data-proyect="'+proyect+'" data-mes="'+mes+'" data-ano="'+ano+'"><img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" /></div>';
                                lightbox += '<span class="estado-text mbottom-20"></span>';
                                lightbox += '<h3>Comentarios:</h3>';
                        lightbox += '</div>';
                        lightbox += '<button class="cerrar-button evt" data-func="closeLightbox">Cerrar</button>';
                    lightbox += '</div>';
                
                
                $('body').append(cortina);
                $('.cortina').height($(document).height()).append(lightbox);
                $('.cortina').find('.asp-wrapp').append(comments);
                $('html, body').animate({scrollTop:0}, 'slow');
                methods.setChart($('.chart-lightbox'));
                methods.handlerEvents($('.evt'));
                
            },
            closeLightbox : function ( event ){
                $('.cortina').remove();
            },
            deployMonedas : function ( event ){
                var $item = $(this);
                
                $('.date').removeClass('active');
                $('.moneda-content').removeClass('orange-border');
                $('.moneda-wrapp').addClass('transition');
                
                $item.parents('.mbottom-20').find('button').addClass('transition').addClass('active');
                $item.parents('.mbottom-20').find('.moneda-content').addClass('transition').addClass('orange-border');
            },
            getGlosario : function ( event ){
                var $item = $(this);
                $item.siblings().addClass('t');
                $item.siblings().removeClass('active');
                $item.addClass('active');
            },
            changeDateFicha : function( event ){
                window.location.href = "http://www.codelco.ida.cl/ficha";
            } ,
            clickBoxTreemap : function (event){
                var $item = $(this);
                var $treemapContainer = $item.parent();
                var $label = $item.find('.treemap-label');
                var url = $label.attr('href');
                var proyectID = $item.attr('data-proyect');
                var url = $item.attr('data-url');
                var deploy = $item.attr('data-deploy');
                var estado = 'enfocado';
                var mes = $treemapContainer.attr('data-mes');
                var ano = $treemapContainer.attr('data-ano');

                var innerHtml = '';
                
                innerHtml += '<button class="cerrar-button">Cerrar</button>';
                innerHtml += '<div class="article-wrapper ajaxLoadInfo" data-mes='+ mes +' data-ano="'+ ano +'" data-proyect="'+ proyectID +'">';
                innerHtml += '<div class="article-wrapp">';
                innerHtml += '<span class="secondary-meta">Monto Total(uK$)</span>';
                innerHtml += '<span class="value" data-montoTotal></span>';
                innerHtml += '<span class="secondary-meta">Noviembre 2013</span>';
                innerHtml += '<span class="value" data-avance></span>';
                innerHtml += '</div>';
                innerHtml += '<div class="chart-lightbox" data-proyect="'+ proyectID +'" data-mes='+ mes +' data-ano='+ ano +'" data-proyect="'+ proyectID +'"><img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" /></div>';
                innerHtml += '</div>';
                
                if(deploy === 'false' && !$item.hasClass('disabled')){
                    var styleItem = $item.attr('style');
                    var styleLabel = $label.attr('style');
                    
                    $item.attr('data-styleItem', styleItem);
                    $item.attr('data-styleLabel', styleLabel);
                    
                    if($item.hasClass('middle')){
                        estado = 'desviado';
                    }else if($item.hasClass('minor')){
                        estado = 'altamente-desviado';
                    }

                    var rotulo = estado.charAt(0).toUpperCase() + estado.slice(1);
                        rotulo = rotulo.split(' ');
                        rotulo = rotulo.join(' ');

                    $item.removeAttr('style').addClass('t big shadow-box').attr('data-deploy','true');
                    $item.siblings().css('opacity','0.2').addClass('disabled');
                    $label.wrap('<header />');
                    $label.removeAttr('style').off('click.bigblock');
                    $item.append(innerHtml);
                    $item.append('<a class="go-link top" href="'+ url +'" title="Ver Cartera de '+ $label.text() +'">Ver ficha Completa</a>');
                    methods.loadInfoFicha($('.ajaxLoadInfo'));
                   
                    $('.treemapBack').on('click.bigblock', function( event ){
                        event.preventDefault();
                    });
                    
                    setTimeout(function(){
                        methods.setChart($('.chart-lightbox'));
                        $item.find('.chart-lightbox').after('<span class="estado-text">'+ rotulo +'</span>');
                    },1000);

                }else if(deploy === 'true' && !$item.hasClass('disabled')){
                    var styleItem = $item.attr('data-styleitem');
                    var styleLabel = $label.attr('data-stylelabel');
                    
                    $item.find('.estado-text').remove();
                    $item.find('.ajaxLoadInfo').remove();
                    $item.find('.go-link').remove();
                    $item.find('.cerrar-button').remove();
                    
                    $item.attr({
                        'style' : styleItem,
                        'data-deploy' : 'false'   
                    }).removeClass('big shadow-box enfocado altamente-desviado desviado');
                    $label.attr('style', styleLabel).on('click.bigblock').unwrap();
                    $item.siblings().css('opacity','1.0').removeClass('disabled');
                }
                
            },
            deployMenu : function ( event ){
                var $item = $(this);
                var $nav = $item.next();
                var deploy = $nav.attr('data-deploy');
                var maxHeight = $nav.find('ul').height();
                $nav.addClass('t');
                
                if(deploy === "false"){
                    $nav.css('height', maxHeight);
                    $nav.attr('data-deploy','true');
                }else{
                    $nav.css('height', '1px');
                    $nav.attr('data-deploy','false');
                }
                
            },
            galleryShow : function ( event ){
                var index = $(this).attr('data-index');
                var cortina = '<div class="cortina ficha"></div>';
                var lightbox = '<div id="slider" class="lightbox for-gallery asp medium-gray shadow-box" data-visuals="1">';
                        lightbox += '<div class="ohidden">';
                            lightbox += '<ul class="slider-ul">';
                            
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                                
                                lightbox += '<li class="asp-wrapp">';
                                      lightbox += '<img src="http://codelco.ida.cl/templates/default/images/examples/image-big.jpg" alt="Portal de Avance de Proyectos" />';
                                lightbox += '</li>';
                            lightbox += '</ul>';
                        lightbox += '</div>';
                        lightbox += '<div class="navigation">';
                        lightbox += '<button class="prev evt" data-func="moveCarrousel" data-moving="false">Anterior</button>';
                        lightbox += '<button class="next evt" data-func="moveCarrousel" data-moving="false">Siguiente</button>';
                        lightbox += '</div>';
                        lightbox += '<button class="cerrar-button evt" data-func="closeLightbox">Cerrar</button>';
                  lightbox += '</div>';
                    
                $('body').append(cortina);
                $('.cortina').height($(document).height()).append(lightbox);;
                $('html, body').animate({scrollTop:0}, 'slow');
                methods.initializeSlider($('.lightbox'), index);
                methods.handlerEvents($('.evt'));
            }        
                    
        };
       
        
       var slider = $('#slider');
       var sliderVisual = 3;
       
        methods.handlerEvents($('.evt'));//Inicializa la función 'handlerEvents' para todos los elementos HTML con la clase 'evt' asignada
        if(slider.length > 0){
             methods.initializeSlider(slider); //Inicializa la estructura del slider de proyectos en la home
        }
        
         if(slider.length > 0 && Modernizr.mq('only screen and (max-width: 900px)')){
              sliderVisual = 2;
         }
         
         if(slider.length > 0 && Modernizr.mq('only screen and (max-width: 600px)')){
              sliderVisual = 1;
         }
         
         if(slider.length > 0 && Modernizr.mq('only screen and (max-width: 900px)')){
             slider.attr('data-visuals',sliderVisual);
            methods.initializeSlider(slider, 1);
         }
         
        
        $(window).on('resize',function(){
             if(slider.length > 0 && Modernizr.mq('only screen and (min-width: 900px)')){
                sliderVisual = 3;
             }
             if(slider.length > 0 && Modernizr.mq('only screen and (max-width: 900px)')){
                 sliderVisual = 2;
             }
             if(slider.length > 0 && Modernizr.mq('only screen and (max-width: 600px)')){
                 sliderVisual = 1;
             }
             slider.attr('data-visuals',sliderVisual);
             methods.initializeSlider(slider, 1);
             
             methods.setTreemap($('.treemap'));
              
        });
        
        if($('.ajaxLoadInfo')){
            methods.loadInfoFicha($('.ajaxLoadInfo'));
        }

        methods.deploySubMenu($('.submenu-container'));

        if(!oldIE && !Modernizr.touch){
            methods.stickyNav($('.navigationMenu'));
            if($('.sticky').length > 0)
                methods.stickyNav($('.sticky'), $('.sticky').outerWidth());
        }
       
        
        methods.equalizeHeights($('.equal'));
        methods.equalizeHeights($('.equal-asp'));
        methods.equalizeHeights($('.equal-header-asp'));
        methods.equalizeHeights($('.equal-asp-middle'));
        methods.equalizeHeights($('.observaciones'));
        
         if(!oldIE){
            Modernizr.load([{
                            test : $('.swipe').length,
                            yep : ['http://codelco.ida.cl/templates/default/js/idangerous.swiper-2.1.min.js', 'http://codelco.ida.cl/templates/default/js/idangerous.swiper.scrollbar-2.1.js'],
                            callback : function(test, key){
                                if(test){
                                    methods.scrollingTables($('.swipe'));
                                }
                            }
                }]);
        }
        Modernizr.load([{
            test : $('.chart').length || $('.treemap'),
            yep : ['http://codelco.ida.cl/templates/default/js/highcharts.js'],
            callback : function(test, key){
                if(test){
                    methods.setChart($('.chart'));
                }
            }
        },{
            test : $('.treemap').length,
            yep : ['http://codelco.ida.cl/templates/default/js/treemaps.js'],
            callback : function(test, key){
                if(test){
                    methods.setTreemap($('.treemap'));
                }
            }
        },{
            test : $('.sparklines').length,
            yep : ['http://codelco.ida.cl/templates/default/js/sparklines.js'],
            callback : function(test, key){
                if(test){
                    methods.setSparklines($('.sparklines'));
                }
            }
        },{
            test : $('.daTable').length,
            yep : ['http://codelco.ida.cl/templates/default/js/stupidtable.js'],
            callback : function(test, key){
                if(test){
                   $('.daTable').stupidtable({
                       "date":function(a,b){
                            var aDate = methods.date_from_string(a);
                            var bDate = methods.date_from_string(b);
                            
                            return parseInt(aDate,10) - parseInt(bDate,10);
                        }
                   }); 
                }
            }
        }
        ]);
     
    };
    
    window.SiteHandler.prototype = window.SiteHandler.methods;

    $(document).ready(function(){
        window.app = new window.SiteHandler();
    });
    
}(this, jQuery));
