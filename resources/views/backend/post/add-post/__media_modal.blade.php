<div class="modal fade" id="defaultModalSuccess" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:70%!important;height:100vh;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Meadia Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <div class="row">
                    @foreach ($media as $medium)
                        <div class="col-md-3 mb-3 col-12">
                            <img class="galleryImage" src="{{ $medium->link }}" width="100%" height="auto"
                                data-dismiss="modal">
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- modal body end --}}
        </div>
    </div>
</div>
