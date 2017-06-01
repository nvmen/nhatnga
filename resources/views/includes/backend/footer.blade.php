

<!-- Modal -->
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
                                <div id="dragandrophandler">Drag & Drop Files Here or
                                    <input type="file" name="files[]" id="file" class="box__file" multiple="true">
                                </div>
                                <div id="status1"></div>
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

    $("#file").on("change", function (e) {
        var files = $(this)[0].files;
        var status1 = $("#status1");
        handleFileUpload(files,status1);
    });

    function sendFileToServer(formData,status)
    {

        formData  = formData.append('_token', '{{ csrf_token() }}');
        var uploadURL ="{{route('backend.media.upload')}}"; //Upload URL
        var extraData ={}; //Extra Data.
        var jqXHR=$.ajax({
            xhr: function() {
                var xhrobj = $.ajaxSettings.xhr();
                if (xhrobj.upload) {
                    xhrobj.upload.addEventListener('progress', function(event) {
                        var percent = 0;
                        var position = event.loaded || event.position;
                        var total = event.total;
                        if (event.lengthComputable) {
                            percent = Math.ceil(position / total * 100);
                        }
                        //Set progress
                        status.setProgress(percent);
                    }, false);
                }
                return xhrobj;
            },
            url: uploadURL,
            type: "POST",
            contentType:false,
            processData: false,
            cache: false,
            data: formData,
            success: function(data){
                status.setProgress(100);

                $("#status1").append("File upload Done<br>");
            }
        });

        status.setAbort(jqXHR);
    }

    var rowCount=0;
    function createStatusbar(obj)
    {
        rowCount++;
        var row="odd";
        if(rowCount %2 ==0) row ="even";
        this.statusbar = $("<div class='statusbar "+row+"'></div>");
        this.filename = $("<div class='filename'></div>").appendTo(this.statusbar);
        this.size = $("<div class='filesize'></div>").appendTo(this.statusbar);
        this.progressBar = $("<div class='progressBar'><div></div></div>").appendTo(this.statusbar);
        this.abort = $("<div class='abort'>Abort</div>").appendTo(this.statusbar);
        obj.after(this.statusbar);

        this.setFileNameSize = function(name,size)
        {
            var sizeStr="";
            var sizeKB = size/1024;
            if(parseInt(sizeKB) > 1024)
            {
                var sizeMB = sizeKB/1024;
                sizeStr = sizeMB.toFixed(2)+" MB";
            }
            else
            {
                sizeStr = sizeKB.toFixed(2)+" KB";
            }

            this.filename.html(name);
            this.size.html(sizeStr);
        }
        this.setProgress = function(progress)
        {
            var progressBarWidth =progress*this.progressBar.width()/ 100;
            this.progressBar.find('div').animate({ width: progressBarWidth }, 10).html(progress + "% ");
            if(parseInt(progress) >= 100)
            {
                this.abort.hide();
            }
        }
        this.setAbort = function(jqxhr)
        {
            var sb = this.statusbar;
            this.abort.click(function()
            {
                jqxhr.abort();
                sb.hide();
            });
        }
    }
    function handleFileUpload(files,obj)
    {
        for (var i = 0; i < files.length; i++)
        {
            var fd = new FormData();
            fd.append('file', files[i]);


          //  _token={{ csrf_token() }}
            var status = new createStatusbar(obj); //Using this we can set progress.
            status.setFileNameSize(files[i].name,files[i].size);
            sendFileToServer(fd,status);

        }
    }
    $(document).ready(function()
    {
        var obj = $("#dragandrophandler");
        var status1 = $("#status1");
        obj.on('dragenter', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
            $(this).css('border', '2px solid #0B85A1');
        });
        obj.on('dragover', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('drop', function (e)
        {

            $(this).css('border', '2px dotted #0B85A1');
            e.preventDefault();
            var files = e.originalEvent.dataTransfer.files;

            //We need to send dropped files to Server
            handleFileUpload(files,status1);
        });
        $(document).on('dragenter', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        $(document).on('dragover', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
            obj.css('border', '2px dotted #0B85A1');
        });
        $(document).on('drop', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });

    });
</script>
