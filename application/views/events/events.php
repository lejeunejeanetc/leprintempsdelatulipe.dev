<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
    <h1>Nos Evenements</h1>
    <?php
    foreach($query->result() as $row){ 
        $format_date = "Y-m-d H:i:s";
         $time = time();
         $date = date($format_date,$time); 
        if ($date<$row->date_event){
        ?>
        <h1>Evenements à venir</h1>
         <div class="row">
            <div class="col-xs-3 col-xs-push-3">
                <div class="cadre panel panel-default">
                    <div class="panel panel-content">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <?php echo $row->nom; ?>
                            </li>
                             <li class="list-group-item">
                                <?php //echo $row->date_event;
                                
                                  $formatdayweek = "w";
                                  $formatday = "d";
                                  $formatmonth = "m";
                                  $formatyear = "Y";
                                  $formatHour = "H";
                                   $formatmin = "i";
                                  $formatted_dayweek = idate($formatdayweek,strtotime($row->date_event));
                                  $formatted_day = idate($formatday,strtotime($row->date_event));
                                  $formatted_month = idate($formatmonth,strtotime($row->date_event));
                                  $formatted_year = idate($formatyear,strtotime($row->date_event));
                                  $formatted_hour = idate($formatHour,strtotime($row->date_event));
                                  $formatted_min = idate($formatmin,strtotime($row->date_event));
                                    $format_day= convert_day(  $formatted_dayweek );
                                $formatted_date = array(
                                    $formatdayweek => $format_day,
                                    $formatday =>  $formatted_day,
                                    $formatmonth  => $formatted_month,
                                    $formatyear => $formatted_year,
                                    $formatHour => $formatted_hour,
                                    $formatmin   =>$formatted_min
                                    );

                                
                                   
                                  $format = "Le %s %d/%d/%d à %d:%d";
                                  echo sprintf($format,$format_day,$formatted_day,$formatted_month,$formatted_year,$formatted_hour,$formatted_min);
                                                                         
                                 ?>
                            </li>
                            <li class="list-group-item">
                                <img class="img-responsive img-projets" src="<?= $row->image; ?>" </li>
                                <li class="list-group-item">
                                    <?php echo $row->adresse; ?>
                                </li>

                                <li class="list-group-item">
                                    <a href="<?php echo $row->lien; ?>"><?php echo $row->nom; ?></a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-xs-push-3 events-description">
                <div class="panel panel-content">
                    <div class="list-group">
                        <div class="list-group-item">
                            <?php echo $row->description; ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url("Events/more/$row->id")?>" class="btn btn-primary">En savoir plus</a>

        </div> 
     <?php 
} 
else { ?>
        <h1>Evenements Passés</h1>
        <div class="row">
            <div class="col-xs-3 col-xs-push-3">
                <div class="cadre panel panel-default">
                    <div class="panel panel-content">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <?php echo $row->nom; ?>
                            </li>
                              <li class="list-group-item">
                                   <?php
                                   $formatdayweek = "w";
                                  $formatday = "d";
                                  $formatmonth = "m";
                                  $formatyear = "Y";
                                  $formatHour = "H";
                                   $formatmin = "i";
                                  $formatted_dayweek = idate($formatdayweek,strtotime($row->date_event));
                                  $formatted_day = idate($formatday,strtotime($row->date_event));
                                  $formatted_month = idate($formatmonth,strtotime($row->date_event));
                                  $formatted_year = idate($formatyear,strtotime($row->date_event));
                                  $formatted_hour = idate($formatHour,strtotime($row->date_event));
                                  $formatted_min = idate($formatmin,strtotime($row->date_event));
                                    $format_day= convert_day(  $formatted_dayweek );
                                $formatted_date = array(
                                    $formatdayweek => $format_day,
                                    $formatday =>  $formatted_day,
                                    $formatmonth  => $formatted_month,
                                    $formatyear => $formatted_year,
                                    $formatHour => $formatted_hour,
                                    $formatmin   =>$formatted_min
                                    );

                                
                                   
                                  $format = "Le %s %d/%d/%d à %d:%d0";
                                  echo sprintf($format,$format_day,$formatted_day,$formatted_month,$formatted_year,$formatted_hour,$formatted_min);
                                               
                                  ?>
                            </li>
                            <li class="list-group-item">
                                <img class="img-responsive img-projets" src="<?= $row->image; ?>" </li>
                                <li class="list-group-item">
                                    <?php echo $row->adresse; ?>
                                </li>

                                <li class="list-group-item">
                                    <a href="<?php echo $row->lien; ?>"><?php echo $row->nom; ?></a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-5 col-xs-push-3 events-description">
                <div class="panel panel-content">
                    <div class="list-group">
                        <div class="list-group-item">
                            <?php echo $row->description; ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url("Events/more/$row->id")?>" class="btn btn-primary">En savoir plus</a>

        </div>
<?php 
}
}

 ?>