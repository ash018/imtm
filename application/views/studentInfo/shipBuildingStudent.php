<div id="menu_area"></div>
<div id="banner"></div>

<div id="container">
    <div id="content_area">
        <div class="content">
            <div class="entry">
                <h1>Ship Building</h1>                
                <div id="custom_sorting">
                    <div class="orderby">
                        <form method="get" action="https://dpi.gov.bd/student-info/architecture/" class="form-inline">
                            <div class="form-group">
                                <label for="orderby">Order By</label>
                                <select name="order_by" class="form-control">
                                    <option value="semester" selected="selected">Semester</option>
                                    <option value="shift" >Shift</option>
                                    <option value="group" >Group</option>
                                    <option value="roll" >Roll</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="submit" class="sr-only">Submit</label>
                                <input type="submit" value="Submit" class="btn btn-default" />
                            </div>
                        </form>
                    </div>                    
                    <div class="orderby">
                        <form method="get" action="https://dpi.gov.bd/student-info/architecture/" class="form-inline">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select name="semester" class="form-control">
                                    <option value="1" >1st</option>
                                    <option value="2" >2nd</option>
                                    <option value="3" >3rd</option>
                                    <option value="4" >4th</option>
                                    <option value="5" >5th</option>
                                    <option value="6" >6th</option>
                                    <option value="7" >7th</option>
                                    <option value="8" >8th</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="submit" class="sr-only">Submit</label>
                                <input type="submit" value="Submit" class="btn btn-default" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>Sl.No.</td>
                            <td>Roll</td>
                            <td>Reg. No.</td>
                            <td>Name</td>
                            <td>Shift</td>
                            <td>Semester</td>
                            <td>Group</td>
                            <td>View</td>
                        </tr>

                    </table>
                </div>

<!--                <div id="pagination">
                    <div class='wp-pagenavi'>
                        <span class='pages'>Page 1 of 3</span><span class='current'>1</span><a class="page larger" title="Page 2" href="page/2/index.html">2</a><a class="page larger" title="Page 3" href="page/3/index.html">3</a><a class="nextpostslink" rel="next" href="page/2/index.html">»</a>
                    </div>                </div>-->


            </div>
        </div>
    </div>

    <div id="left-sidebar">
        <div class="widget">
            <h2>Student Info</h2>
            <ul>
                <li class="page_item page-item-161 current_page_item"><a href="<?php echo base_url('Menu/ShipBuildingStudentInfo')?>">Ship Building</a></li>
                <li class="page_item page-item-163"><a href="<?php echo base_url('Menu/MarineTechnologyStudentInfo')?>">Marine Technology</a></li>
                
            </ul>
        </div>
    </div>    
</div>