<?php require_once 'meta-header.php'; ?>
<body>
    <!--Comienzo del Header-->    
    <header class="main-header med-white-bg">
        <section class="header-wrapp row container">
            <section class="clearfix">
                <ul class="inline-list secondary-nav fright">
                    <li><a href="http://codelco.ida.cl/glosario" title="Ir al glosario"  rel="help">Glosario</a></li>
                    <li><span>Conectado como <strong>Jorge Codina</strong></span><button class="close-btn invisible-text">Cerrar Sesión</button></li>
                </ul>
            </section>
            <section>
                <div class="col-left">
                    <a class="img-box" href="http://codelco.ida.cl/" title="Volver al Inicio" rel="home"><img src="http://codelco.ida.cl/templates/default/images/logo-codelco.png" data-svg="http://codelco.ida.cl/templates/default/images/logo-codelco.png" alt="Portal de Avance de Proyectos" /></a>
                    <h2 class="tagline"><a href="/" title="Volver al Inicio" rel="home">Informe de Avances</a></h2>
                    <h1 class="title"><a href="/" title="Volver al Inicio" rel="home">Portal de Avance de Proyecto</a></h1>
                </div>
                <div class="col-right">
                    <form action="/buscador" method="post">
                        <input class="search" type="search" name="s" placeholder="Buscar Por..." x-webkit-speech="x-webkit-speech" />
                        <input class="submit" type="submit" value="" />
                    </form>
                </div>
            </section>
        </section>
        <section class="navigationMenu orange-gradient">
            <button class="btn menu evt" data-func="deployMenu" data-deploy="false">Menú</button>
            <nav class="row container">
                <ul>
                    <li><a href="http://codelco.ida.cl/" class="active" rel="home" title="Ir al Inicio">Inicio</a></li>
                    <li><a href="http://codelco.ida.cl/carteras" rel="contents" title="Ver cartera">Cartera</a></li>
                    <li class="submenu-container"><a href="http://codelco.ida.cl/divisiones" class="dropdown" rel="contents" title="Ver Todas las Divisiones">Divisiones</a>
                        <div class="wraper-submenu">
                            <ul class="submenu shadow-box clearfix">
                                <li><a href="/divisiones/#andina" title="ver división Andina" rel="contents">Andina</a></li>
                                <li><a href="/divisiones/#chuquicamata" title="ver división Chuquicamata" rel="contents">Chuquicamata</a></li>
                                <li><a href="/divisiones/#el-teniente" title="ver división El Teniente" rel="contents">El Teniente</a></li>
                                <li><a href="/divisiones/#minera-gaby" title="ver división Minera Gaby" rel="contents">Minera Gaby</a></li>
                                <li><a href="/divisiones/#ministro-hales" title="ver división Ministro Hales" rel="contents">Ministro Hales</a></li>
                                <li><a href="/divisiones/#radomiro-tomic" title="ver división Radomiro Tomic" rel="contents">Radomiro Tomic</a></li>
                                <li><a href="/divisiones/#casa-matriz" title="ver división Casa Matriz" rel="contents">Casa Matriz</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="http://codelco.ida.cl/evaluaciones" rel="contents" title="Ver Evaluaciones">Evaluaciones</a></li>
                    <li><a href="http://codelco.ida.cl/sobreestesitio" rel="help" title="Información sobre este sitio">Sobre este sitio</a></li>
                </ul>
            </nav>
        </section>
    </header>
