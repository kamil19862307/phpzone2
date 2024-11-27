@extends('admin.layout')

@section('title', 'Admin panel | Gallery')

@section('content')

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Gallery Example</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div id="port-folio">
            <div class="row " >
                <ul id="filters" >
                    <li><span class="filter active" data-filter="landscape nature awesome">All </span></li>
                    <li><span class="filter active">/</span></li>
                    <li><span class="filter" data-filter="landscape">Landscape</span></li>
                    <li><span class="filter">/</span></li>
                    <li><span class="filter" data-filter="nature">Nature</span></li>
                    <li><span class="filter">/</span></li>
                    <li><span class="filter" data-filter="awesome">Awesome</span></li>
                </ul>
                <div class="col-md-4 ">

                    <div class="portfolio-item awesome mix_all" data-cat="awesome" >


                        <img src="{{ asset('storage/images/gallery') }}/g.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info " title="Image Title Here" href="{{ asset('storage/images/gallery') }}/g.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div class="portfolio-item landscape mix_all" data-cat="landscape" >


                        <img src="{{ asset('storage/images/gallery') }}/b.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="{{ asset('storage/images/gallery') }}/b.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="{{ asset('storage/images/gallery') }}/c.png" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="{{ asset('storage/images/gallery') }}/c.png"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row " style="padding-top: 50px;">
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="{{ asset('storage/images/gallery') }}/d.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info " title="Image Title Here" href="{{ asset('storage/images/gallery') }}/d.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="{{ asset('storage/images/gallery') }}/e.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="{{ asset('storage/images/gallery') }}/e.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="{{ asset('storage/images/gallery') }}/h.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="{{ asset('storage/images/gallery') }}/h.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row "  style="padding-top: 50px;" >
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="{{ asset('storage/images/gallery') }}/g.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview  btn btn-info" title="Image Title Here" href="{{ asset('storage/images/gallery') }}/g.jpg"> <i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item awesome mix_all" data-cat="awesome" >


                        <img src="{{ asset('storage/images/gallery') }}/b.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="{{ asset('storage/images/gallery') }}/b.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature landscape mix_all" data-cat="nature landscape" >


                        <img src="{{ asset('storage/images/gallery/c.png') }}" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>

                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="{{ asset('storage/images/gallery') }}/c.png"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- /. PAGE INNER  -->

@endsection
