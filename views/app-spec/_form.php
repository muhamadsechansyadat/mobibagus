<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\AppSpec */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-spec-form">

    <?php $form = ActiveForm::begin(); ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>asd</strong></div>
                    <div class="panel-body">
                        <?= $form->field($model, 'category_id')->textInput() ?>

                        <?= $form->field($model, 'brand_id')->textInput() ?>

                        <?= $form->field($model, 'model_id')->dropDownList($listModel,['prompt' => '--Select Model--']) ?>

                        <?= $form->field($model, 'type_id')->dropDownList($listTipe,['prompt' => '--Select Tipe--']) ?>

                        <?= $form->field($model, 'trim')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'tagline')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'review')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'summary')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'cc_car')->textInput() ?>

                        <?= $form->field($model, 'price_off')->textInput() ?>

                        <?= $form->field($model, 'price_on')->textInput() ?>

                        <?= $form->field($model, 'rating')->textInput() ?>

                        <?= $form->field($model, 'mobil_tipe')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'overall_length')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'dimensi')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'overall_width')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'overall_height')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_tread')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_tread')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'curb_weight')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gross_veh_weight')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'ground_clearance')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'min_turning_radius')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'boot_capacity_min')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'boot_capacity_max')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'towing_limit')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'whellbase')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'type_2')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'cylinder')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'cc')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'bore_x_stroke')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'compression_ratio')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'max_power')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'max_torque')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'fuel_system')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'fuel_type')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'wheel_drive')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'max_speed_mt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'seratus_km_mt')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>      
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>asd</strong></div>
                    <div class="panel-body">
                        <?= $form->field($model, 'urban_km_ltr_mt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'extra_urban_km_lt_mt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'combined_km_lt_mt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'max_speed_km_at')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'seratus_km_at')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'urban_km_at')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'extra_urban_km_lt_at')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'combined_km_lt_at')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'fuel_tank_capacity_lt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'type_trans')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_1')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_2')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_3')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_4')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_5')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_6')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_7')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratio_8')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'gear_ratioreverse')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'final_gear_ratio')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'steering')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_suspension')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_suspension')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_break')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_break')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'wheel_size_front')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'alloy_wheels')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'tire_size_front')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'seating_person')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'fuel_tank_capacity_lt_cap')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_seat_belt_pre_tensioners')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'child_safety_lock')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'central_lock')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'alarm')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'immobiliser')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'driver_airbag')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'passenger_airbag')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_side_airbags')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_seat_belt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_seat_belt_pre_tensioners_safe')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_seat_belt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_reflector')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rain_censor')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>      
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>asd</strong></div>
                    <div class="panel-body">
                        <?= $form->field($model, 'rear_packing_sensor')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'anti_lock_braking_system')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'electronic_stability_program')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'euro_ncap_overall_rating')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'euro_ncap_occupant_protection')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'euro_ncap_child_protection')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'euro_ncap_pedestrian_protection')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'air_conditioner')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'climate_control')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'seat_material')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'power_windows')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'power_steering')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'tilt_steering')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'cruise_control')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'audio_system')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_seat_entertainment_system')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'satelite_navigation')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'center_stack')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'speakers')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'seat_belt_reminder')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'light_off_key_reminder')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_window_defogger')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'satellite_navigation')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'speakers_pcs')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'door_ajar_warning_lamp')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_seat_3_row')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'split_fold_rear_seat')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'leather_seats')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'foldable_grip_assist')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'door_pocket')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'ashtray')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_head_rest')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_head_rest')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'tachnometer')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>      
            </div>

            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>asd</strong></div>
                    <div class="panel-body">
                        <?= $form->field($model, 'seat_back_pocket')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_seat_under_tray')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'accessory_socket')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'inside_rear_view_mirror')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'vanity_mirror')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'steering_wheel')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'body_color_door_handle')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'roof_rail')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'manual_sunroof')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'electric_sunroof')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'fog_lamps')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'front_wiper')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'rear_wiper')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'electric_mirrors')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'electric_front_windows')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'electric_rear_windows')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'osrvm')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'grille_chrome')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'muffler_tail_pipe_chrome')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'lips_front_bumper')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'lips_rear_bumper')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'side_skirt')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'chmsl')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'colors')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'car_merk')->textInput() ?>

                        <?= $form->field($model, 'car_model')->textInput() ?>

                        <?= $form->field($model, 'counterview')->textInput() ?>

                        <?= $form->field($model, 'car_video')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'default_image')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'default_image_2')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    

    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
