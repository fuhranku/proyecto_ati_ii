
<div class="row h-100" id="{{$modal_id}}" class="modal-window">
    <div class="col-sm-12 my-auto">
        <div class="w-30 mx-auto  bg-white pb-3 modal-content">
            <div class="row text-center modal-header grid-container">
                <div class="col-sm-9">
                    <div class="bg-blue text-white font-weight-bold modal-title">
                        {{ $header }}
                    </div>
                </div>
                <div class="col-sm-1">
                    <button type="button" id='sign-in-min-btn' class="close">
                        <span>-</span>
                    </button>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="icon">
                        <span>&#9633;</span>
                    </button>
                </div>
                <div class="col-sm-1">
                    <button type="button" id='sign-in-close-btn' class="close">
                        <span>×</span>
                    </button>
                </div>
            </div>
            <div class="container pr-4 pl-4 pb-4 modal-container">
                <div class="row">
                    <div class="col-sm-12 mt-2 md-text text-blue font-weight-bold">
                        {{-- {{ $title }} --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-2 sm-text">
                        <p id="modal-info-comfort">
                        {{ $content }}
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>