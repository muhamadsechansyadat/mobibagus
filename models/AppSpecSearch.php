<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AppSpec;

/**
 * AppSpecSearch represents the model behind the search form of `app\models\AppSpec`.
 */
class AppSpecSearch extends AppSpec
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'brand_id', 'model_id', 'type_id', 'cc_car', 'rating', 'is_deleted', 'is_update', 'car_merk', 'car_model', 'counterview'], 'integer'],
            [['trim', 'name', 'tagline', 'review', 'summary', 'year', 'mobil_tipe', 'overall_length', 'dimensi', 'overall_width', 'overall_height', 'front_tread', 'rear_tread', 'curb_weight', 'gross_veh_weight', 'ground_clearance', 'min_turning_radius', 'boot_capacity_min', 'boot_capacity_max', 'towing_limit', 'whellbase', 'type', 'type_2', 'cylinder', 'cc', 'bore_x_stroke', 'compression_ratio', 'max_power', 'max_torque', 'fuel_system', 'fuel_type', 'wheel_drive', 'max_speed_mt', 'seratus_km_mt', 'urban_km_ltr_mt', 'extra_urban_km_lt_mt', 'combined_km_lt_mt', 'max_speed_km_at', 'seratus_km_at', 'urban_km_at', 'extra_urban_km_lt_at', 'combined_km_lt_at', 'fuel_tank_capacity_lt', 'type_trans', 'gear_ratio_1', 'gear_ratio_2', 'gear_ratio_3', 'gear_ratio_4', 'gear_ratio_5', 'gear_ratio_6', 'gear_ratio_7', 'gear_ratio_8', 'gear_ratioreverse', 'final_gear_ratio', 'steering', 'front_suspension', 'rear_suspension', 'front_break', 'rear_break', 'wheel_size_front', 'alloy_wheels', 'tire_size_front', 'seating_person', 'fuel_tank_capacity_lt_cap', 'front_seat_belt_pre_tensioners', 'child_safety_lock', 'central_lock', 'alarm', 'immobiliser', 'driver_airbag', 'passenger_airbag', 'front_side_airbags', 'front_seat_belt', 'front_seat_belt_pre_tensioners_safe', 'rear_seat_belt', 'rear_reflector', 'rain_censor', 'rear_packing_sensor', 'anti_lock_braking_system', 'electronic_stability_program', 'euro_ncap_overall_rating', 'euro_ncap_occupant_protection', 'euro_ncap_child_protection', 'euro_ncap_pedestrian_protection', 'air_conditioner', 'climate_control', 'seat_material', 'power_windows', 'power_steering', 'tilt_steering', 'cruise_control', 'audio_system', 'rear_seat_entertainment_system', 'satelite_navigation', 'center_stack', 'speakers', 'seat_belt_reminder', 'light_off_key_reminder', 'rear_window_defogger', 'satellite_navigation', 'speakers_pcs', 'door_ajar_warning_lamp', 'rear_seat_3_row', 'split_fold_rear_seat', 'leather_seats', 'foldable_grip_assist', 'door_pocket', 'ashtray', 'front_head_rest', 'rear_head_rest', 'tachnometer', 'seat_back_pocket', 'front_seat_under_tray', 'accessory_socket', 'inside_rear_view_mirror', 'vanity_mirror', 'steering_wheel', 'body_color_door_handle', 'roof_rail', 'manual_sunroof', 'electric_sunroof', 'fog_lamps', 'front_wiper', 'rear_wiper', 'electric_mirrors', 'electric_front_windows', 'electric_rear_windows', 'osrvm', 'grille_chrome', 'muffler_tail_pipe_chrome', 'lips_front_bumper', 'lips_rear_bumper', 'side_skirt', 'chmsl', 'colors', 'car_video', 'default_image', 'default_image_2'], 'safe'],
            [['price_off', 'price_on'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AppSpec::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'model_id' => $this->model_id,
            'type_id' => $this->type_id,
            'year' => $this->year,
            'cc_car' => $this->cc_car,
            'price_off' => $this->price_off,
            'price_on' => $this->price_on,
            'rating' => $this->rating,
            'is_deleted' => $this->is_deleted,
            'is_update' => $this->is_update,
            'car_merk' => $this->car_merk,
            'car_model' => $this->car_model,
            'counterview' => $this->counterview,
        ]);

        $query->andFilterWhere(['like', 'trim', $this->trim])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'tagline', $this->tagline])
            ->andFilterWhere(['like', 'review', $this->review])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'mobil_tipe', $this->mobil_tipe])
            ->andFilterWhere(['like', 'overall_length', $this->overall_length])
            ->andFilterWhere(['like', 'dimensi', $this->dimensi])
            ->andFilterWhere(['like', 'overall_width', $this->overall_width])
            ->andFilterWhere(['like', 'overall_height', $this->overall_height])
            ->andFilterWhere(['like', 'front_tread', $this->front_tread])
            ->andFilterWhere(['like', 'rear_tread', $this->rear_tread])
            ->andFilterWhere(['like', 'curb_weight', $this->curb_weight])
            ->andFilterWhere(['like', 'gross_veh_weight', $this->gross_veh_weight])
            ->andFilterWhere(['like', 'ground_clearance', $this->ground_clearance])
            ->andFilterWhere(['like', 'min_turning_radius', $this->min_turning_radius])
            ->andFilterWhere(['like', 'boot_capacity_min', $this->boot_capacity_min])
            ->andFilterWhere(['like', 'boot_capacity_max', $this->boot_capacity_max])
            ->andFilterWhere(['like', 'towing_limit', $this->towing_limit])
            ->andFilterWhere(['like', 'whellbase', $this->whellbase])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'type_2', $this->type_2])
            ->andFilterWhere(['like', 'cylinder', $this->cylinder])
            ->andFilterWhere(['like', 'cc', $this->cc])
            ->andFilterWhere(['like', 'bore_x_stroke', $this->bore_x_stroke])
            ->andFilterWhere(['like', 'compression_ratio', $this->compression_ratio])
            ->andFilterWhere(['like', 'max_power', $this->max_power])
            ->andFilterWhere(['like', 'max_torque', $this->max_torque])
            ->andFilterWhere(['like', 'fuel_system', $this->fuel_system])
            ->andFilterWhere(['like', 'fuel_type', $this->fuel_type])
            ->andFilterWhere(['like', 'wheel_drive', $this->wheel_drive])
            ->andFilterWhere(['like', 'max_speed_mt', $this->max_speed_mt])
            ->andFilterWhere(['like', 'seratus_km_mt', $this->seratus_km_mt])
            ->andFilterWhere(['like', 'urban_km_ltr_mt', $this->urban_km_ltr_mt])
            ->andFilterWhere(['like', 'extra_urban_km_lt_mt', $this->extra_urban_km_lt_mt])
            ->andFilterWhere(['like', 'combined_km_lt_mt', $this->combined_km_lt_mt])
            ->andFilterWhere(['like', 'max_speed_km_at', $this->max_speed_km_at])
            ->andFilterWhere(['like', 'seratus_km_at', $this->seratus_km_at])
            ->andFilterWhere(['like', 'urban_km_at', $this->urban_km_at])
            ->andFilterWhere(['like', 'extra_urban_km_lt_at', $this->extra_urban_km_lt_at])
            ->andFilterWhere(['like', 'combined_km_lt_at', $this->combined_km_lt_at])
            ->andFilterWhere(['like', 'fuel_tank_capacity_lt', $this->fuel_tank_capacity_lt])
            ->andFilterWhere(['like', 'type_trans', $this->type_trans])
            ->andFilterWhere(['like', 'gear_ratio_1', $this->gear_ratio_1])
            ->andFilterWhere(['like', 'gear_ratio_2', $this->gear_ratio_2])
            ->andFilterWhere(['like', 'gear_ratio_3', $this->gear_ratio_3])
            ->andFilterWhere(['like', 'gear_ratio_4', $this->gear_ratio_4])
            ->andFilterWhere(['like', 'gear_ratio_5', $this->gear_ratio_5])
            ->andFilterWhere(['like', 'gear_ratio_6', $this->gear_ratio_6])
            ->andFilterWhere(['like', 'gear_ratio_7', $this->gear_ratio_7])
            ->andFilterWhere(['like', 'gear_ratio_8', $this->gear_ratio_8])
            ->andFilterWhere(['like', 'gear_ratioreverse', $this->gear_ratioreverse])
            ->andFilterWhere(['like', 'final_gear_ratio', $this->final_gear_ratio])
            ->andFilterWhere(['like', 'steering', $this->steering])
            ->andFilterWhere(['like', 'front_suspension', $this->front_suspension])
            ->andFilterWhere(['like', 'rear_suspension', $this->rear_suspension])
            ->andFilterWhere(['like', 'front_break', $this->front_break])
            ->andFilterWhere(['like', 'rear_break', $this->rear_break])
            ->andFilterWhere(['like', 'wheel_size_front', $this->wheel_size_front])
            ->andFilterWhere(['like', 'alloy_wheels', $this->alloy_wheels])
            ->andFilterWhere(['like', 'tire_size_front', $this->tire_size_front])
            ->andFilterWhere(['like', 'seating_person', $this->seating_person])
            ->andFilterWhere(['like', 'fuel_tank_capacity_lt_cap', $this->fuel_tank_capacity_lt_cap])
            ->andFilterWhere(['like', 'front_seat_belt_pre_tensioners', $this->front_seat_belt_pre_tensioners])
            ->andFilterWhere(['like', 'child_safety_lock', $this->child_safety_lock])
            ->andFilterWhere(['like', 'central_lock', $this->central_lock])
            ->andFilterWhere(['like', 'alarm', $this->alarm])
            ->andFilterWhere(['like', 'immobiliser', $this->immobiliser])
            ->andFilterWhere(['like', 'driver_airbag', $this->driver_airbag])
            ->andFilterWhere(['like', 'passenger_airbag', $this->passenger_airbag])
            ->andFilterWhere(['like', 'front_side_airbags', $this->front_side_airbags])
            ->andFilterWhere(['like', 'front_seat_belt', $this->front_seat_belt])
            ->andFilterWhere(['like', 'front_seat_belt_pre_tensioners_safe', $this->front_seat_belt_pre_tensioners_safe])
            ->andFilterWhere(['like', 'rear_seat_belt', $this->rear_seat_belt])
            ->andFilterWhere(['like', 'rear_reflector', $this->rear_reflector])
            ->andFilterWhere(['like', 'rain_censor', $this->rain_censor])
            ->andFilterWhere(['like', 'rear_packing_sensor', $this->rear_packing_sensor])
            ->andFilterWhere(['like', 'anti_lock_braking_system', $this->anti_lock_braking_system])
            ->andFilterWhere(['like', 'electronic_stability_program', $this->electronic_stability_program])
            ->andFilterWhere(['like', 'euro_ncap_overall_rating', $this->euro_ncap_overall_rating])
            ->andFilterWhere(['like', 'euro_ncap_occupant_protection', $this->euro_ncap_occupant_protection])
            ->andFilterWhere(['like', 'euro_ncap_child_protection', $this->euro_ncap_child_protection])
            ->andFilterWhere(['like', 'euro_ncap_pedestrian_protection', $this->euro_ncap_pedestrian_protection])
            ->andFilterWhere(['like', 'air_conditioner', $this->air_conditioner])
            ->andFilterWhere(['like', 'climate_control', $this->climate_control])
            ->andFilterWhere(['like', 'seat_material', $this->seat_material])
            ->andFilterWhere(['like', 'power_windows', $this->power_windows])
            ->andFilterWhere(['like', 'power_steering', $this->power_steering])
            ->andFilterWhere(['like', 'tilt_steering', $this->tilt_steering])
            ->andFilterWhere(['like', 'cruise_control', $this->cruise_control])
            ->andFilterWhere(['like', 'audio_system', $this->audio_system])
            ->andFilterWhere(['like', 'rear_seat_entertainment_system', $this->rear_seat_entertainment_system])
            ->andFilterWhere(['like', 'satelite_navigation', $this->satelite_navigation])
            ->andFilterWhere(['like', 'center_stack', $this->center_stack])
            ->andFilterWhere(['like', 'speakers', $this->speakers])
            ->andFilterWhere(['like', 'seat_belt_reminder', $this->seat_belt_reminder])
            ->andFilterWhere(['like', 'light_off_key_reminder', $this->light_off_key_reminder])
            ->andFilterWhere(['like', 'rear_window_defogger', $this->rear_window_defogger])
            ->andFilterWhere(['like', 'satellite_navigation', $this->satellite_navigation])
            ->andFilterWhere(['like', 'speakers_pcs', $this->speakers_pcs])
            ->andFilterWhere(['like', 'door_ajar_warning_lamp', $this->door_ajar_warning_lamp])
            ->andFilterWhere(['like', 'rear_seat_3_row', $this->rear_seat_3_row])
            ->andFilterWhere(['like', 'split_fold_rear_seat', $this->split_fold_rear_seat])
            ->andFilterWhere(['like', 'leather_seats', $this->leather_seats])
            ->andFilterWhere(['like', 'foldable_grip_assist', $this->foldable_grip_assist])
            ->andFilterWhere(['like', 'door_pocket', $this->door_pocket])
            ->andFilterWhere(['like', 'ashtray', $this->ashtray])
            ->andFilterWhere(['like', 'front_head_rest', $this->front_head_rest])
            ->andFilterWhere(['like', 'rear_head_rest', $this->rear_head_rest])
            ->andFilterWhere(['like', 'tachnometer', $this->tachnometer])
            ->andFilterWhere(['like', 'seat_back_pocket', $this->seat_back_pocket])
            ->andFilterWhere(['like', 'front_seat_under_tray', $this->front_seat_under_tray])
            ->andFilterWhere(['like', 'accessory_socket', $this->accessory_socket])
            ->andFilterWhere(['like', 'inside_rear_view_mirror', $this->inside_rear_view_mirror])
            ->andFilterWhere(['like', 'vanity_mirror', $this->vanity_mirror])
            ->andFilterWhere(['like', 'steering_wheel', $this->steering_wheel])
            ->andFilterWhere(['like', 'body_color_door_handle', $this->body_color_door_handle])
            ->andFilterWhere(['like', 'roof_rail', $this->roof_rail])
            ->andFilterWhere(['like', 'manual_sunroof', $this->manual_sunroof])
            ->andFilterWhere(['like', 'electric_sunroof', $this->electric_sunroof])
            ->andFilterWhere(['like', 'fog_lamps', $this->fog_lamps])
            ->andFilterWhere(['like', 'front_wiper', $this->front_wiper])
            ->andFilterWhere(['like', 'rear_wiper', $this->rear_wiper])
            ->andFilterWhere(['like', 'electric_mirrors', $this->electric_mirrors])
            ->andFilterWhere(['like', 'electric_front_windows', $this->electric_front_windows])
            ->andFilterWhere(['like', 'electric_rear_windows', $this->electric_rear_windows])
            ->andFilterWhere(['like', 'osrvm', $this->osrvm])
            ->andFilterWhere(['like', 'grille_chrome', $this->grille_chrome])
            ->andFilterWhere(['like', 'muffler_tail_pipe_chrome', $this->muffler_tail_pipe_chrome])
            ->andFilterWhere(['like', 'lips_front_bumper', $this->lips_front_bumper])
            ->andFilterWhere(['like', 'lips_rear_bumper', $this->lips_rear_bumper])
            ->andFilterWhere(['like', 'side_skirt', $this->side_skirt])
            ->andFilterWhere(['like', 'chmsl', $this->chmsl])
            ->andFilterWhere(['like', 'colors', $this->colors])
            ->andFilterWhere(['like', 'car_video', $this->car_video])
            ->andFilterWhere(['like', 'default_image', $this->default_image])
            ->andFilterWhere(['like', 'default_image_2', $this->default_image_2]);

        return $dataProvider;
    }
}
