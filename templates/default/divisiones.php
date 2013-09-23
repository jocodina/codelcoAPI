<?php require_once 'header.php'; ?>
<section class="section-wrapper medium-gray">
    <div class="row container">
        <header class="inner-header">
            <h2>Divisiones</h2>
            <span class="secondary-meta in-header">Última actualización el 19 de Agosto de 2013</span>
            <dl class="simbologia">
                <dt class="green-bg">E</dt>
                <dd class="green-txt">Enfocado</dd>
                <dt class="yellow-bg">D</dt>
                <dd class="yellow-txt">Desviado</dd>
                <dt class="red-bg">AD</dt>
                <dd class="red-txt">Altamente Desviado</dd>
            </dl>
        </header>
        <article id="andina" class="block medium-gray shadow-box clearfix mbottom-55">
            <section class="info-block-wrapper ohidden">
            <header class="prelative">
                <h3>Andina</h3>
                <select name="fecha">
                    <option value="2013-08">Agosto 2013</option>
                    <option value="2013-07">Julio 2013</option>
                    <option value="2013-06">Junio 2013</option>
                    <option value="2013-05">Mayo 2013</option>
                    <option value="2013-04">Abril 2013</option>
                    <option value="2013-03">Marzo 2013</option>
                    <option value="2013-02">Febrero 2013</option>
                    <option value="2013-01">Enero 2013</option>
                </select>
                <aside>
                    <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                </aside>
            </header>
            <div class="proyectos">
                <div class="values-group clearfix">
                    <div class="values">
                        <span class="secondary-meta">Monto Total(uK$)</span>
                        <span class="value" data-montoTotalSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Monto Anual(uK$)</span>
                        <span class="value" data-montoAnualSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Proyectos</span>
                        <span class="value" data-count></span>
                    </div>
                </div>
                <div class='treemap-wrapp'>
                    <div class="treemap" data-mes="09" data-ano="2013" data-grupo="principales">
                        <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                    </div>
                </div>
            </div>
            </section>
            <section class="sub-section">
                <div class="clearfix">
                    <button class="btn menos evt" data-func="openDetails" data-deploy="false">Ocultar detalle</button> 
                </div>
                <div id="swiper-container-0" class="swipe">
                    <div class="swiper-scrollbar"></div> 
                    <div class="swiper-wrapper">
                         <div class="swiper-slide">
                <table class="medium-gray daTable">
                    <thead>
                        <tr>
                            <th class="proyectos">Proyectos</th>
                            <th>Justific.</th>
                            <th>Ejecutor</th>
                            <th>Inversión Autorizada</th>
                            <th>VAN prometido en API</th>
                            <th>Tendencia<small>Últimos 5 meses</small></th>
                            <th class="order" data-sort="date">Última Fecha Eval.</th>
                            <th class="destacada">Próxima eval.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Sistema de Relaves</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>593.123</td>
                            <td>N/A</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='8' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                         <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='10' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='9' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='6' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Ene</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='2' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Ene</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Dic</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='5' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        
                       
                    </tbody>
                </table>
                         </div>
                    </div>
                </div>
            </section>
            <button class="btn more evt" data-func="openDetails" data-deploy="false">Ver detalle</button> 
        </article>
        <article id="chuquicamata" class="block medium-gray shadow-box clearfix mbottom-55">
            <section class="info-block-wrapper ohidden">
            <header class="prelative">
                <h3>Chuquicamata</h3>
                <select name="fecha">
                    <option value="2013-08">Agosto 2013</option>
                    <option value="2013-07">Julio 2013</option>
                    <option value="2013-06">Junio 2013</option>
                    <option value="2013-05">Mayo 2013</option>
                    <option value="2013-04">Abril 2013</option>
                    <option value="2013-03">Marzo 2013</option>
                    <option value="2013-02">Febrero 2013</option>
                    <option value="2013-01">Enero 2013</option>
                </select>
                <aside>
                    <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" data-svg="http://codelco.ida.cl/templates/default/images/logo-codelco.png" alt="Portal de Avance de Proyectos" />
                </aside>
            </header>
            <div class="proyectos">
                <div class="values-group clearfix">
                    <div class="values">
                        <span class="secondary-meta">Monto Total(uK$)</span>
                        <span class="value" data-montoTotalSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Monto Anual(uK$)</span>
                        <span class="value" data-montoAnualSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Proyectos</span>
                        <span class="value" data-count></span>
                    </div>
                </div>
                <div class='treemap-wrapp'>
                    <div class="treemap" data-mes="09" data-ano="2013" data-grupo="directorio">
                        <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                    </div>
                </div>
            </div>
            </section>
            <section class="sub-section">
                <div class="clearfix">
                    <button class="btn menos evt" data-func="openDetails" data-deploy="false">Ocultar detalle</button> 
                </div>
                <div id="swiper-container-1" class="swipe">
                    <div class="swiper-scrollbar"></div> 
                    <div class="swiper-wrapper">
                         <div class="swiper-slide">
                <table class="medium-gray daTable">
                    <thead>
                        <tr>
                            <th class="proyectos">Proyectos</th>
                            <th>Justific.</th>
                            <th>Ejecutor</th>
                            <th>Inversión Autorizada</th>
                            <th>VAN prometido en API</th>
                            <th>Tendencia<small>Últimos 5 meses</small></th>
                            <th class="order" data-sort="date">Última Fecha Eval.</th>
                            <th class="destacada">Próxima eval.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Sistema de Relaves</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>593.123</td>
                            <td>N/A</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='8' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                         <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='10' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='9' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='6' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='2' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='5' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        
                    </tbody>
                </table>
                         </div>
                    </div>
                </div>
            </section>
            <button class="btn more evt" data-func="openDetails" data-deploy="false">Ver detalle</button> 
        </article>
        <article class="block medium-gray shadow-box clearfix mbottom-55">
            <section class="info-block-wrapper ohidden">
            <header class="prelative">
                <h3>El Teniente</h3>
                <select name="fecha">
                    <option value="2013-08">Agosto 2013</option>
                    <option value="2013-07">Julio 2013</option>
                    <option value="2013-06">Junio 2013</option>
                    <option value="2013-05">Mayo 2013</option>
                    <option value="2013-04">Abril 2013</option>
                    <option value="2013-03">Marzo 2013</option>
                    <option value="2013-02">Febrero 2013</option>
                    <option value="2013-01">Enero 2013</option>
                </select>
               <aside>
                    <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" data-svg="http://codelco.ida.cl/templates/default/images/logo-codelco.png" alt="Portal de Avance de Proyectos" />
                </aside>
            </header>
            <div class="proyectos">
                <div class="values-group clearfix">
                    <div class="values">
                        <span class="secondary-meta">Monto Total(uK$)</span>
                        <span class="value" data-montoTotalSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Monto Anual(uK$)</span>
                        <span class="value" data-montoAnualSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Proyectos</span>
                        <span class="value" data-count></span>
                    </div>
                </div>
                <div class='treemap-wrapp'>
                    <div class="treemap" data-mes="09" data-ano="2013" data-grupo="principales">
                        <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                    </div>
                </div>
            </div>
            </section>
            <section class="sub-section">
                <div class="clearfix">
                    <button class="btn menos evt" data-func="openDetails" data-deploy="false">Ocultar detalle</button> 
                </div>
                <div id="swiper-container-2" class="swipe">
                    <div class="swiper-scrollbar"></div> 
                    <div class="swiper-wrapper">
                         <div class="swiper-slide">
                <table class="medium-gray daTable">
                    <thead>
                        <tr>
                            <th class="proyectos">Proyectos</th>
                            <th>Justific.</th>
                            <th>Ejecutor</th>
                            <th>Inversión Autorizada</th>
                            <th>VAN prometido en API</th>
                            <th>Tendencia<small>Últimos 5 meses</small></th>
                            <th class="order" data-sort="table">Última Fecha Eval.</th>
                            <th class="destacada">Próxima eval.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Sistema de Relaves</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>593.123</td>
                            <td>N/A</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='8' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                         <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='10' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='9' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='6' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='2' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='5' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
                         </div>
                    </div>
                </div>
            </section>
            <button class="btn more evt" data-func="openDetails" data-deploy="false">Ver detalle</button> 
        </article>
        <article id="minera-gaby" class="block medium-gray shadow-box clearfix mbottom-55">
            <section class="info-block-wrapper ohidden">
            <header class="prelative">
                <h3>Minera Gaby</h3>
                <select name="fecha">
                    <option value="2013-08">Agosto 2013</option>
                    <option value="2013-07">Julio 2013</option>
                    <option value="2013-06">Junio 2013</option>
                    <option value="2013-05">Mayo 2013</option>
                    <option value="2013-04">Abril 2013</option>
                    <option value="2013-03">Marzo 2013</option>
                    <option value="2013-02">Febrero 2013</option>
                    <option value="2013-01">Enero 2013</option>
                </select>
                <aside>
                    <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" data-svg="http://codelco.ida.cl/templates/default/images/logo-codelco.png" alt="Portal de Avance de Proyectos" />
                </aside>
            </header>
            <div class="proyectos">
                <div class="values-group clearfix">
                    <div class="values">
                        <span class="secondary-meta">Monto Total(uK$)</span>
                        <span class="value" data-montoTotalSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Monto Anual(uK$)</span>
                        <span class="value" data-montoAnualSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Proyectos</span>
                        <span class="value" data-count></span>
                    </div>
                </div>
                <div class='treemap-wrapp'>
                    <div class="treemap" data-mes="09" data-ano="2013" data-grupo="directorio">
                        <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                    </div>
                </div>
            </div>
            </section>
            <section class="sub-section">
                <div class="clearfix">
                    <button class="btn menos evt" data-func="openDetails" data-deploy="false">Ocultar detalle</button> 
                </div>
                <div id="swiper-container-3" class="swipe">
                    <div class="swiper-scrollbar"></div> 
                    <div class="swiper-wrapper">
                         <div class="swiper-slide">
                              <div class="swiper-slide">
                <table class="medium-gray daTable">
                    <thead>
                        <tr>
                            <th class="proyectos">Proyectos</th>
                            <th>Justific.</th>
                            <th>Ejecutor</th>
                            <th>Inversión Autorizada</th>
                            <th>VAN prometido en API</th>
                            <th>Tendencia<small>Últimos 5 meses</small></th>
                            <th class="order" data-sort="table">Última Fecha Eval.</th>
                            <th class="destacada">Próxima eval.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Sistema de Relaves</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>593.123</td>
                            <td>N/A</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='8' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                         <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='10' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='9' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='6' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='2' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='5' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
                              </div>
                         </div>
                    </div>
                </div>
            </section>
            <button class="btn more evt" data-func="openDetails" data-deploy="false">Ver detalle</button> 
        </article>
        <article id="ministro-hales" class="block medium-gray shadow-box clearfix mbottom-55">
            <section class="info-block-wrapper ohidden">
            <header class="prelative">
                <h3>Ministro Hales</h3>
                <select name="fecha">
                    <option value="2013-08">Agosto 2013</option>
                    <option value="2013-07">Julio 2013</option>
                    <option value="2013-06">Junio 2013</option>
                    <option value="2013-05">Mayo 2013</option>
                    <option value="2013-04">Abril 2013</option>
                    <option value="2013-03">Marzo 2013</option>
                    <option value="2013-02">Febrero 2013</option>
                    <option value="2013-01">Enero 2013</option>
                </select>
                <aside>
                    <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" data-svg="http://codelco.ida.cl/templates/default/images/logo-codelco.png" alt="Portal de Avance de Proyectos" />
                </aside>
            </header>
            <div class="proyectos">
                <div class="values-group clearfix">
                    <div class="values">
                        <span class="secondary-meta">Monto Total(uK$)</span>
                        <span class="value" data-montoTotalSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Monto Anual(uK$)</span>
                        <span class="value" data-montoAnualSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Proyectos</span>
                        <span class="value" data-count></span>
                    </div>
                </div>
                <div class='treemap-wrapp'>
                    <div class="treemap" data-mes="09" data-ano="2013" data-grupo="principales">
                        <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                    </div>
                </div>
            </div>
            </section>
            <section class="sub-section">
                <div class="clearfix">
                    <button class="btn menos evt" data-func="openDetails" data-deploy="false">Ocultar detalle</button> 
                </div>
                <div id="swiper-container-4" class="swipe">
                    <div class="swiper-scrollbar"></div> 
                    <div class="swiper-wrapper">
                         <div class="swiper-slide">
                <table class="medium-gray daTable">
                    <thead>
                        <tr>
                            <th class="proyectos">Proyectos</th>
                            <th>Justific.</th>
                            <th>Ejecutor</th>
                            <th>Inversión Autorizada</th>
                            <th>VAN prometido en API</th>
                            <th>Tendencia<small>Últimos 5 meses</small></th>
                            <th class="order" data-sort="table">Última Fecha Eval.</th>
                            <th class="destacada">Próxima eval.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Sistema de Relaves</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>593.123</td>
                            <td>N/A</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='8' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                         <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='10' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='9' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='6' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='2' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='5' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        
                       
                    </tbody>
                </table>
                         </div>
                    </div>
                </div>
            </section>
            <button class="btn more evt" data-func="openDetails" data-deploy="false">Ver detalle</button> 
        </article>
        <article id="ramiro-tomic" class="block medium-gray shadow-box clearfix mbottom-55">
            <section class="info-block-wrapper ohidden">
            <header class="prelative">
                <h3>Radomiro Tomic</h3>
                <select name="fecha">
                    <option value="2013-08">Agosto 2013</option>
                    <option value="2013-07">Julio 2013</option>
                    <option value="2013-06">Junio 2013</option>
                    <option value="2013-05">Mayo 2013</option>
                    <option value="2013-04">Abril 2013</option>
                    <option value="2013-03">Marzo 2013</option>
                    <option value="2013-02">Febrero 2013</option>
                    <option value="2013-01">Enero 2013</option>
                </select>
                <aside>
                    <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" data-svg="http://codelco.ida.cl/templates/default/images/logo-codelco.png" alt="Portal de Avance de Proyectos" />
                </aside>
            </header>
            <div class="proyectos">
                <div class="values-group clearfix">
                    <div class="values">
                        <span class="secondary-meta">Monto Total(uK$)</span>
                        <span class="value" data-montoTotalSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Monto Anual(uK$)</span>
                        <span class="value" data-montoAnualSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Proyectos</span>
                        <span class="value" data-count></span>
                    </div>
                </div>
                <div class='treemap-wrapp'>
                    <div class="treemap" data-mes="09" data-ano="2013" data-grupo="directorio">
                        <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                    </div>
                </div>
            </div>
            </section>
            <section class="sub-section">
                <div class="clearfix">
                    <button class="btn menos evt" data-func="openDetails" data-deploy="false">Ocultar detalle</button> 
                </div>
                <div id="swiper-container-5" class="swipe">
                    <div class="swiper-scrollbar"></div> 
                    <div class="swiper-wrapper">
                         <div class="swiper-slide">
                <table class="medium-gray daTable">
                    <thead>
                        <tr>
                            <th class="proyectos">Proyectos</th>
                            <th>Justific.</th>
                            <th>Ejecutor</th>
                            <th>Inversión Autorizada</th>
                            <th>VAN prometido en API</th>
                            <th>Tendencia<small>Últimos 5 meses</small></th>
                            <th class="order" data-sort="table">Última Fecha Eval.</th>
                            <th class="destacada">Próxima eval.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Sistema de Relaves</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>593.123</td>
                            <td>N/A</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='8' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                         <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='10' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='9' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='6' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='2' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='5' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
                         </div>
                    </div>
                </div>
            </section>
            <button class="btn more evt" data-func="openDetails" data-deploy="false">Ver detalle</button> 
        </article>
        <article id="casa-matriz" class="block medium-gray shadow-box clearfix mbottom-55">
            <section class="info-block-wrapper ohidden">
            <header class="prelative">
                <h3>Casa Matriz</h3>
                <select name="fecha">
                    <option value="2013-08">Agosto 2013</option>
                    <option value="2013-07">Julio 2013</option>
                    <option value="2013-06">Junio 2013</option>
                    <option value="2013-05">Mayo 2013</option>
                    <option value="2013-04">Abril 2013</option>
                    <option value="2013-03">Marzo 2013</option>
                    <option value="2013-02">Febrero 2013</option>
                    <option value="2013-01">Enero 2013</option>
                </select>
                <aside>
                    <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" data-svg="http://codelco.ida.cl/templates/default/images/logo-codelco.png" alt="Portal de Avance de Proyectos" />
                </aside>
            </header>
            <div class="proyectos">
                <div class="values-group clearfix">
                    <div class="values">
                        <span class="secondary-meta">Monto Total(uK$)</span>
                        <span class="value" data-montoTotalSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Monto Anual(uK$)</span>
                        <span class="value" data-montoAnualSuma></span>
                    </div>
                    <div class="values">
                        <span class="secondary-meta">Proyectos</span>
                        <span class="value" data-count></span>
                    </div>
                </div>
                <div class='treemap-wrapp'>
                    <div class="treemap" data-mes="09" data-ano="2013" data-grupo="principales">
                        <img class="ajax-loader" src="http://codelco.ida.cl/templates/default/images/iconos/ajax-loader.gif" alt="Portal de Avance de Proyectos" />
                    </div>
                </div>
            </div>
            </section>
            <section class="sub-section">
                <div class="clearfix">
                    <button class="btn menos evt" data-func="openDetails" data-deploy="false">Ocultar detalle</button> 
                </div>
                <div id="swiper-container-6" class="swipe">
                    <div class="swiper-scrollbar"></div> 
                    <div class="swiper-wrapper">
                         <div class="swiper-slide">
                <table class="medium-gray daTable">
                    <thead>
                        <tr>
                            <th class="proyectos">Proyectos</th>
                            <th>Justific.</th>
                            <th>Ejecutor</th>
                            <th>Inversión Autorizada</th>
                            <th>VAN prometido en API</th>
                            <th>Tendencia<small>Últimos 5 meses</small></th>
                            <th class="order" data-sort="table">Última Fecha Eval.</th>
                            <th class="destacada">Próxima eval.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Sistema de Relaves</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>593.123</td>
                            <td>N/A</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='8' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                         <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='10' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='9' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='6' data-tend='up'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='2' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left" data-val='5' data-tend='down'></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                        <tr>
                            <td><a href="/ficha/" title="Sistema de Relaves" rel="contents">Mina Subterránea</a><span class="reformulado">Ref.</span></td>
                            <td>Info.</td>
                            <td>VP</td>
                            <td>165.911</td>
                            <td>5.911</td>
                            <td class="tend"><span class="sparklines" data-ano="2013" data-mes="09" data-proyect="01"></span><span class="estado-text right"></span></td>
                            <td><strong>Nov</strong></td>
                            <td class="last-tend"><span class="future-tend estado-text left"></span><a href="/ficha/" title="Sistema de Relaves" rel="contents">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
                         </div>
                    </div>
                </div>
            </section>
            <button class="btn more evt" data-func="openDetails" data-deploy="false">Ver detalle</button> 
        </article>
    </div>
</section>

<?php require_once 'footer.php'; ?>