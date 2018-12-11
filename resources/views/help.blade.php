@extends('layout')

@section('conteudo-principal')
 <div class="row justify-content-sm-center">
            <nav id="carouselSite" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselSite" data-slide-to="1"></li>
                    <li data-target="#carouselSite" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/01.jpg" class="img-fluid d-block">
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h1>Lorem Ipsum</h1>
                            <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/02.jpg" class="img-fluid d-block">
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h1>Lorem Ipsum</h1>
                            <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/03.jpg" class="img-fluid d-block">
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h1>Lorem Ipsum</h1>
                            <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
                        </div>
                    </div>
                </div>
                
                <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon "></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                    <span class="carousel-control-next-icon "></span>
                    <span class="sr-only">Avançar</span>
                </a>
            </nav>
        </div>
        
            <nav class="container">
                <div class="row">
                    <div class="col-12 text-center my-5">
                        <h1 display-3>ENCONTRE A OFICINA MAIS PERTO DE VOCÊ</h1>
                        <p>O Help! pode lhe ajudar a encontrar a Oficina mais próxima da sua localização em apenas alguns passos.</p>
                    </div>
                </div>
                <div class="row justify-content-sm-center mb-5">
                    
                    <!-- MAP'S -->
                        <iframe height="800px" width="1000px" src="https://www.google.com/maps/d/embed?mid=1K8mUplbJ3qdQ8sWPqkqvSfuzQuouQYH4&hl=pt-BR" width="640" height="480"></iframe>
                    


                </div>
                                <!-- CARDS -->


                <div class="row justify-content-sm-center">
                    <div class="col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="img/oficina-01.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Unidade 1</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Macapá - AP</h6>
                                <p class="card-text">Av. Padre Júlio Maria Lombard, 603 - Centro. CEP 68900-000<br>
                                Tel. (96) 3222-2222
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Troca de Pneu's</li>
                                <li class="list-group-item">Mecânica</li>
                                <li class="list-group-item">Revisão</li>
                            </ul>
                            <div class="card-body">    
                                <a href="#" class="card-link">Mais..</a>
                                <!--
                                <a href="#" class="card-link">Ou mais..</a>
                                -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="img/oficina-02.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Unidade 2</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Macapá - AP</h6>
                                <p class="card-text">Av. Cora de Carvalho, 9999 - Santa Rita. CEP 68901-000<br>
                                Tel. (96) 3222-2223</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Consertos</li>
                                <li class="list-group-item">Troca de Óleo</li>
                                <li class="list-group-item">Mecânica</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Mais..</a>
                                <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">Modal..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="img/oficina-03.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Unidade 3</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Santana - AP</h6>
                                <p class="card-text">Av. Antônio Coelho de Carvalho, 999 - Santa Rita. CEP 68900-002<br>
                                Tel. (96) 3222-2224</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Revisão</li>
                                <li class="list-group-item">Troca de Óleo</li>
                                <li class="list-group-item">Consertos</li>
                            </ul>
                            <div class="card-body">    
                                <a href="#" class="card-link">Mais..</a>
                                <!--
                                <a href="#" class="card-link">Ou mais..</a>
                                -->
                            </div>
                        </div>
                    </div>
                    <!-- 

                    <div class="col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="img/exame.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Lorem Ipsum</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                                <p class="card-text">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico.</p>
                                <a href="#" class="card-link">Mais..</a>
                                <a href="#" class="card-link">Ou mais..</a>
                            </div>
                            <div class="card-footer text-muted">
                                Richard McClintock, um professor
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="img/exame.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Lorem Ipsum</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                                <p class="card-text">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico.</p>
                                <a href="#" class="card-link">Mais..</a>
                                <a href="#" class="card-link">Ou mais..</a>
                            </div>
                            <div class="card-footer text-muted">
                                Richard McClintock, um professor
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card mb-5">
                            <img src="img/exame.png" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Lorem Ipsum</h4>
                                <h6 class="card-subtitle mb-2 text-muted">Subtitulo</h6>
                                <p class="card-text">Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico.</p>
                                <a href="#" class="card-link">Mais..</a>
                                <a href="#" class="card-link">Ou mais..</a>
                            </div>
                            <div class="card-footer text-muted">
                                Richard McClintock, um professor
                            </div>
                        </div>
                    </div>
                    -->
                </div>
                
                    <!-- FIM CARDS -->
                
            </nav>
@stop