<div class="row">
    <div class="col-md-7">
        <div class="row m-3">
            <div class="col-md-12 text-center bg-warning">
                <p class="h5 font-weight-bold text-white mt-2">Fotos de la vivienda</p>
            </div>
        </div>
        
        <div class="border border-primary mt-2 position-relative" id="image-drop-container">
            {{-- Preloader --}}
            <img class="loading-image position-absolute d-none preloader1" src="{{url('/images/preloader1.svg')}}" id='preloader-image-publish'>
            <div class="dragspace-overlay d-none" id='dragspace-image-publish'></div>
            {{-- End Preloader --}}
            
            <div class="position-absolute centered-overlay d-none" id="image-drop-text"> Arrastra una imagen aquí </div>
            <div class="row m-3">
                <div class="col-md-12 text-center font-weight-bold">
                    <p>Arrastre las fotos que desea cargar en cada uno de los recuadros</p>
                </div>
            </div>

            <div class="row m-3" id="images-container-1">
                <div class="col-md-1 border border-primary position-relative ml-5 image-box">
                </div>
                <div class="col-md-1 border border-primary ml-4 image-box">
                </div>
                <div class="col-md-1 border border-primary ml-4 image-box">
                </div>
                <div class="col-md-1 border border-primary ml-4 image-box">
                </div>
                <div class="col-md-1 border border-primary ml-4 image-box">
                </div>
                <div class="col-md-1 border border-primary ml-4 image-box">
                </div>
                <div class="col-md-1 border border-primary ml-4 image-box">
                </div>
            </div>

            <div class="row m-3" id="images-container-2">
                <div class="col-md-1 border border-primary ml-5 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
            </div>

            <div class="row m-3" id="images-container-3">
                <div class="col-md-1 ml-4"></div>
                <div class="col-md-1 border border-primary ml-5 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
                <div class="col-md-1 border border-primary ml-4 image-box"></div>
            </div>
        </div>
    </div>

    <div class="col-md-5">

        <div class="row m-3">
            <div class="col-md-12 text-center bg-warning">
                <p class="h5 font-weight-bold text-white mt-2">¿Desea agregar videos?</p>
            </div>
        </div>

        <div class="border border-primary mt-2" id="video-drop-container" >
            {{-- Preloader --}}
            <img class="loading-image position-absolute d-none preloader1" src="{{url('/images/preloader1.svg')}}" id='preloader-video-publish'>
            <div class="dragspace-overlay d-none" id='dragspace-video-publish'></div>
            {{-- End Preloader --}}
            

            <div class="position-absolute centered-overlay d-none" id="video-drop-text"> Arrastra un video aquí </div>

            <div class="row m-3">
                <div class="col-md-2"></div>
                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio-btn-video" id="radio-btn-video-1" value=1>
                        <label class="form-check-label sm-text">
                          Sí
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio-btn-video" id="exampleRadios2" value=0>
                        <label class="form-check-label sm-text">
                          No
                        </label>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class ="container" id="video-info-yes">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <span class="badge badge-info">Cantidad de videos</span>
                    </div>
                    
                    <div class="col-md-5">
                        <select class="form-control sm-text" id="select-video-amnt">
                            <option value=2>Hasta 2</option>
                            <option value=5>Hasta 5</option>
                        </select>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                
                <div class="row m-3 d-flex justify-content-center" id="video-container">
                    <div class="col-md-2 border border-primary ml-n1 video-box">
                        <div class='video-overlay'></div>
                        <div class='icon-container play-btn'><i class="far fa-play-circle play-icon"></i></div>
                        <video class="video-tag" id="frag1" preload="metadata" width="720px" height="540px">
                            <source src="http://localhost:8000/uploads/videos/flower.webm#t=3.0"
                                    type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'
                            >
                        </video>
                    </div>
                    <div class="col-md-2 border border-primary ml-3 video-box"></div>
                    <div class="col-md-2 border border-primary ml-3 video-box d-none"></div>
                    <div class="col-md-2 border border-primary ml-3 video-box d-none"></div>
                    <div class="col-md-2 border border-primary ml-3 video-box d-none"></div>
                </div>
            </div>

        </div>

        <script>
            var image_post_url = "{{ url('/dwelling/post_image')}}";
            var image_remove_url = "{{ url('/dwelling/remove_image')}}";
            var video_post_url = "{{ url('/dwelling/post_video')}}";
            var video_remove_url = "{{ url('/dwelling/remove_video')}}";
        </script>
    </div>

</div>