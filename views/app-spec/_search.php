<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AppSpecSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="app-spec-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'brand_id') ?>

    <?= $form->field($model, 'model_id') ?>

    <?= $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'trim') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'tagline') ?>

    <?php // echo $form->field($model, 'review') ?>

    <?php // echo $form->field($model, 'summary') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'cc_car') ?>

    <?php // echo $form->field($model, 'price_off') ?>

    <?php // echo $form->field($model, 'price_on') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'mobil_tipe') ?>

    <?php // echo $form->field($model, 'overall_length') ?>

    <?php // echo $form->field($model, 'dimensi') ?>

    <?php // echo $form->field($model, 'overall_width') ?>

    <?php // echo $form->field($model, 'overall_height') ?>

    <?php // echo $form->field($model, 'front_tread') ?>

    <?php // echo $form->field($model, 'rear_tread') ?>

    <?php // echo $form->field($model, 'curb_weight') ?>

    <?php // echo $form->field($model, 'gross_veh_weight') ?>

    <?php // echo $form->field($model, 'ground_clearance') ?>

    <?php // echo $form->field($model, 'min_turning_radius') ?>

    <?php // echo $form->field($model, 'boot_capacity_min') ?>

    <?php // echo $form->field($model, 'boot_capacity_max') ?>

    <?php // echo $form->field($model, 'towing_limit') ?>

    <?php // echo $form->field($model, 'whellbase') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'type_2') ?>

    <?php // echo $form->field($model, 'cylinder') ?>

    <?php // echo $form->field($model, 'cc') ?>

    <?php // echo $form->field($model, 'bore_x_stroke') ?>

    <?php // echo $form->field($model, 'compression_ratio') ?>

    <?php // echo $form->field($model, 'max_power') ?>

    <?php // echo $form->field($model, 'max_torque') ?>

    <?php // echo $form->field($model, 'fuel_system') ?>

    <?php // echo $form->field($model, 'fuel_type') ?>

    <?php // echo $form->field($model, 'wheel_drive') ?>

    <?php // echo $form->field($model, 'max_speed_mt') ?>

    <?php // echo $form->field($model, 'seratus_km_mt') ?>

    <?php // echo $form->field($model, 'urban_km_ltr_mt') ?>

    <?php // echo $form->field($model, 'extra_urban_km_lt_mt') ?>

    <?php // echo $form->field($model, 'combined_km_lt_mt') ?>

    <?php // echo $form->field($model, 'max_speed_km_at') ?>

    <?php // echo $form->field($model, 'seratus_km_at') ?>

    <?php // echo $form->field($model, 'urban_km_at') ?>

    <?php // echo $form->field($model, 'extra_urban_km_lt_at') ?>

    <?php // echo $form->field($model, 'combined_km_lt_at') ?>

    <?php // echo $form->field($model, 'fuel_tank_capacity_lt') ?>

    <?php // echo $form->field($model, 'type_trans') ?>

    <?php // echo $form->field($model, 'gear_ratio_1') ?>

    <?php // echo $form->field($model, 'gear_ratio_2') ?>

    <?php // echo $form->field($model, 'gear_ratio_3') ?>

    <?php // echo $form->field($model, 'gear_ratio_4') ?>

    <?php // echo $form->field($model, 'gear_ratio_5') ?>

    <?php // echo $form->field($model, 'gear_ratio_6') ?>

    <?php // echo $form->field($model, 'gear_ratio_7') ?>

    <?php // echo $form->field($model, 'gear_ratio_8') ?>

    <?php // echo $form->field($model, 'gear_ratioreverse') ?>

    <?php // echo $form->field($model, 'final_gear_ratio') ?>

    <?php // echo $form->field($model, 'steering') ?>

    <?php // echo $form->field($model, 'front_suspension') ?>

    <?php // echo $form->field($model, 'rear_suspension') ?>

    <?php // echo $form->field($model, 'front_break') ?>

    <?php // echo $form->field($model, 'rear_break') ?>

    <?php // echo $form->field($model, 'wheel_size_front') ?>

    <?php // echo $form->field($model, 'alloy_wheels') ?>

    <?php // echo $form->field($model, 'tire_size_front') ?>

    <?php // echo $form->field($model, 'seating_person') ?>

    <?php // echo $form->field($model, 'fuel_tank_capacity_lt_cap') ?>

    <?php // echo $form->field($model, 'front_seat_belt_pre_tensioners') ?>

    <?php // echo $form->field($model, 'child_safety_lock') ?>

    <?php // echo $form->field($model, 'central_lock') ?>

    <?php // echo $form->field($model, 'alarm') ?>

    <?php // echo $form->field($model, 'immobiliser') ?>

    <?php // echo $form->field($model, 'driver_airbag') ?>

    <?php // echo $form->field($model, 'passenger_airbag') ?>

    <?php // echo $form->field($model, 'front_side_airbags') ?>

    <?php // echo $form->field($model, 'front_seat_belt') ?>

    <?php // echo $form->field($model, 'front_seat_belt_pre_tensioners_safe') ?>

    <?php // echo $form->field($model, 'rear_seat_belt') ?>

    <?php // echo $form->field($model, 'rear_reflector') ?>

    <?php // echo $form->field($model, 'rain_censor') ?>

    <?php // echo $form->field($model, 'rear_packing_sensor') ?>

    <?php // echo $form->field($model, 'anti_lock_braking_system') ?>

    <?php // echo $form->field($model, 'electronic_stability_program') ?>

    <?php // echo $form->field($model, 'euro_ncap_overall_rating') ?>

    <?php // echo $form->field($model, 'euro_ncap_occupant_protection') ?>

    <?php // echo $form->field($model, 'euro_ncap_child_protection') ?>

    <?php // echo $form->field($model, 'euro_ncap_pedestrian_protection') ?>

    <?php // echo $form->field($model, 'air_conditioner') ?>

    <?php // echo $form->field($model, 'climate_control') ?>

    <?php // echo $form->field($model, 'seat_material') ?>

    <?php // echo $form->field($model, 'power_windows') ?>

    <?php // echo $form->field($model, 'power_steering') ?>

    <?php // echo $form->field($model, 'tilt_steering') ?>

    <?php // echo $form->field($model, 'cruise_control') ?>

    <?php // echo $form->field($model, 'audio_system') ?>

    <?php // echo $form->field($model, 'rear_seat_entertainment_system') ?>

    <?php // echo $form->field($model, 'satelite_navigation') ?>

    <?php // echo $form->field($model, 'center_stack') ?>

    <?php // echo $form->field($model, 'speakers') ?>

    <?php // echo $form->field($model, 'seat_belt_reminder') ?>

    <?php // echo $form->field($model, 'light_off_key_reminder') ?>

    <?php // echo $form->field($model, 'rear_window_defogger') ?>

    <?php // echo $form->field($model, 'satellite_navigation') ?>

    <?php // echo $form->field($model, 'speakers_pcs') ?>

    <?php // echo $form->field($model, 'door_ajar_warning_lamp') ?>

    <?php // echo $form->field($model, 'rear_seat_3_row') ?>

    <?php // echo $form->field($model, 'split_fold_rear_seat') ?>

    <?php // echo $form->field($model, 'leather_seats') ?>

    <?php // echo $form->field($model, 'foldable_grip_assist') ?>

    <?php // echo $form->field($model, 'door_pocket') ?>

    <?php // echo $form->field($model, 'ashtray') ?>

    <?php // echo $form->field($model, 'front_head_rest') ?>

    <?php // echo $form->field($model, 'rear_head_rest') ?>

    <?php // echo $form->field($model, 'tachnometer') ?>

    <?php // echo $form->field($model, 'seat_back_pocket') ?>

    <?php // echo $form->field($model, 'front_seat_under_tray') ?>

    <?php // echo $form->field($model, 'accessory_socket') ?>

    <?php // echo $form->field($model, 'inside_rear_view_mirror') ?>

    <?php // echo $form->field($model, 'vanity_mirror') ?>

    <?php // echo $form->field($model, 'steering_wheel') ?>

    <?php // echo $form->field($model, 'body_color_door_handle') ?>

    <?php // echo $form->field($model, 'roof_rail') ?>

    <?php // echo $form->field($model, 'manual_sunroof') ?>

    <?php // echo $form->field($model, 'electric_sunroof') ?>

    <?php // echo $form->field($model, 'fog_lamps') ?>

    <?php // echo $form->field($model, 'front_wiper') ?>

    <?php // echo $form->field($model, 'rear_wiper') ?>

    <?php // echo $form->field($model, 'electric_mirrors') ?>

    <?php // echo $form->field($model, 'electric_front_windows') ?>

    <?php // echo $form->field($model, 'electric_rear_windows') ?>

    <?php // echo $form->field($model, 'osrvm') ?>

    <?php // echo $form->field($model, 'grille_chrome') ?>

    <?php // echo $form->field($model, 'muffler_tail_pipe_chrome') ?>

    <?php // echo $form->field($model, 'lips_front_bumper') ?>

    <?php // echo $form->field($model, 'lips_rear_bumper') ?>

    <?php // echo $form->field($model, 'side_skirt') ?>

    <?php // echo $form->field($model, 'chmsl') ?>

    <?php // echo $form->field($model, 'colors') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'is_update') ?>

    <?php // echo $form->field($model, 'car_merk') ?>

    <?php // echo $form->field($model, 'car_model') ?>

    <?php // echo $form->field($model, 'counterview') ?>

    <?php // echo $form->field($model, 'car_video') ?>

    <?php // echo $form->field($model, 'default_image') ?>

    <?php // echo $form->field($model, 'default_image_2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
