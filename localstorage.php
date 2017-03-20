<?php include("html/layout.html"); ?>
    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Show visits</button>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Latests visits</h4>
                </div>
                <div class="modal-body table-overflow">
                    <table class="table">
                        <thead>
                            <td>Date</td>
                            <td>Time</td>
                            <td>Timestamp</td>
                        </thead>
                        <tbody id="tableBody">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/localstorage.js"></script>
<?php include("html/close.html"); ?>
