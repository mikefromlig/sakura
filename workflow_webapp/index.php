<!--Code started by Michael Ortega for the LIG-->
<!--Started on: October 10th, 2016-->

<!doctype html>
    <head> 
    <meta charset="UTF-8" />
    
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jsPlumb-2.1.7.js"></script>
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
    
    </head>
    
    <body>
        <div class="container theme-showcase" role="main">
            <br>
            <div id ="sakura_menu_div" class="sakura_menu">
                <table width="100%" height="38" border="1" >
                    <tr>
                    <td style=" padding: 8px;">
                        <div class="btn-group btn-group-xs">
                            <a class="btn btn-default btn-xs dropdown-toggle" type="button" id="dp_menu_project" data-toggle="dropdown">Project<span class="fa fa-caret-down"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#" onclick="new_project()">New</a></li>
                                <li><a href="#" onclick="load_project()">Load</a></li>
                                <li><a href="#" onclick="save_project()">Save</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-default btn-xs" type="button" id="dp_menu_project" onclick="open_op_select_modal();">Operators</button>
                        <button class="btn btn-default btn-xs" type="button" id="dp_menu_help" onclick="not_yet()">help</button>
                </table>
            </div>            
            <table width="100%">
                <tr>
                    <td width="250px">
                        <div id="sakura_left_div" class="sakura_left_tab">
                        </div>
                    <td>
                        <div id="sakura_main_div" class="sakura_main">
                        </div>
            </table>
        </div>
        
        <div id="sakura_operator_contextMenu" class="dropdown clearfix">
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
                <li><a tabindex="-1" href="#">Delete</a></li>
            </ul>
        </div>
        <div class="modal fade" id="modal_op_selector" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Operators Selection</h2>
                    </div>
                    <div class="modal-body">
                        <div class="dropdown open">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="op_tags_list" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Selecte tags
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="op_tags_list">
                                <li><a class="dropdown-item" onclick="add_tag_in_templist('Tag1');">Tag1</a></li>
                                <li><a class="dropdown-item" onclick="add_tag_in_templist('Tag2');">Tag2</a></li>
                                <li><a class="dropdown-item" onclick="add_tag_in_templist('Tag3');">Tag3</a></li>
                            </ul>
                        </div>
                        <br>
                        <div id="op_selected_tags_list" class="btn-group"></div>
                        <hr width="50%" align="left">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary"onclick="select_operators();">Make a panel</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/general.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
