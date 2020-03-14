<div class="modal fade" id="{{$modal_id}}">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ $title }}</h4>
                        <button type="button" id='sign-in-min-btn' class="close" data-dismiss="modal">
                            <span>-</span>
                        </button>
                        <button type="button" class="icon" data-dismiss="modal">
                            <span>&#9633;</span>
                        </button>
                        <button type="button" id='sign-in-close-btn' class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    {{ $content }}
                    

                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>