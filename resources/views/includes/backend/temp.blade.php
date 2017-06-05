
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Insert Media</h4>
            </div>
            <div class="modal-body">
                <div class="panel with-nav-tabs">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Upload Files</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Media Library</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                                <form action="{{route('backend.media.upload')}}" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                        <input name="hidden" type="_token" value ='{{ csrf_token() }}' />
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab2default">Media Library</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>


</script>
