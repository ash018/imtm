<div id="menu_area"></div>
<div id="banner"></div>

<div id="container">
    <div id="content_area">
        <div class="content">
            <div class="entry">
                <h1>Job Seeker</h1>                <div id="custom_sorting">
                    <div class="orderby">
                        <form method="get" action="https://dpi.gov.bd/job-placement/job-seeker/" class="form-inline">
                            <div class="form-group">
                                <label for="orderby">Select Technology </label>
                                <select name="technology" class="form-control">
                                    <option value="architecture">Ship Building</option>
                                    <option value="automobile">Marine Technology</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="submit" class="sr-only">Search</label>
                                <input type="submit" value="Submit" class="btn btn-default" />
                            </div>
                        </form>
                    </div>                    
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Sl.NO.</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Technology</th>
                                <th>Job Status</th>
                                <th>Details</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr id="job-seeker-9">
                                <td>1</td>
                                <td>Md Sumon Haji</td>
                                <td>374354</td>
                                <td>Computer</td>
                                <td>On Job</td>
                                <td style="max-width:210px">
                                    Passing Year : 2014<br />
                                    District : Barisal<br />
                                    Designation : IT Executive<br />
                                    Company : DigiLab Medical Service Ltd.<br />
                                    Address : 460, East Rampura                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div id="left-sidebar">
        <div class="widget">
            <h2>Job Placement</h2>
            <ul>
                <li class="page_item page-item-4336"><a href="<?php echo base_url('Menu/IMTMPlacementCell')?>">IMTM Placement Cell</a></li>
                <li class="page_item page-item-4338"><a href="<?php echo base_url('Menu/JobOpportunity')?>">Job Opportunity</a></li>
                <li class="page_item page-item-4340 current_page_item"><a href="<?php echo base_url('Menu/JobSeeker')?>">Job Seeker</a></li>
            </ul>
        </div>
    </div>    
</div>