<?php

namespace common\models;

use Yii;
use common\models\Countries;

/**
 * This is the model class for table "employee".
 *
 * @property integer $emp_id
 * @property integer $sex
 * @property string $title
 * @property string $name
 * @property string $surname
 * @property string $address
 * @property string $zip_code
 * @property string $birthday
 * @property string $email
 * @property string $mobile_phone
 * @property string $modify_date
 * @property string $create_date
 * @property string $position
 * @property integer $salary
 * @property string $expire_date
 * @property string $website
 * @property string $skill
 * @property string $countries
 * @property integer $age
 * @property string $experience
 * @property string $personal_id
 * @property integer $marital
 * @property string $province
 * @property string $amphur
 * @property string $district
 * @property string $office
 * @property string $social
 * @property string $resume
 * @property string $token_forupload
 * @property integer $count_download_resume
 */
class Employee extends \yii\db\ActiveRecord {

    const SEX_MEN = 1;
    const SEX_WOMEN = 2;
    const MARITAL_SINGLE = 1;
    const MARITAL_MARRIED = 2;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['sex', 'salary', 'age', 'marital', 'count_download_resume'], 'integer'],
            [['address'], 'string'],
            [['birthday', 'modify_date', 'create_date', 'expire_date'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['name', 'surname', 'email', 'office', 'resume', 'token_forupload'], 'string', 'max' => 100],
            [['zip_code', 'countries', 'experience'], 'string', 'max' => 10],
            [['mobile_phone', 'personal_id'], 'string', 'max' => 20],
            [['position', 'website', 'social'], 'string', 'max' => 150],
            [['skill'], 'string', 'max' => 255],
            [['province', 'amphur', 'district'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'emp_id' => Yii::t('app', 'Emp ID'),
            'sex' => Yii::t('app', 'เพศ'),
            'title' => Yii::t('app', 'คำนำหน้า'),
            'name' => Yii::t('app', 'ชื่อ'),
            'surname' => Yii::t('app', 'นามสกุล'),
            'fullName' => Yii::t('app', 'ชื่อ-สกุล'),
            'address' => Yii::t('app', 'ที่อยู่'),
            'zip_code' => Yii::t('app', 'รหัสไปรษณีย์'),
            'birthday' => Yii::t('app', 'วันเกิด'),
            'email' => Yii::t('app', 'อีเมล์'),
            'mobile_phone' => Yii::t('app', 'เบอร์มือถือ'),
            'modify_date' => Yii::t('app', 'แก้ไขวันที่'),
            'create_date' => Yii::t('app', 'สร้างวันที่'),
            'position' => Yii::t('app', 'ตำแหน่งงาน'),
            'salary' => Yii::t('app', 'เงินเดือน'),
            'expire_date' => Yii::t('app', 'วันที่ลาออก'),
            'website' => Yii::t('app', 'Website'),
            'skill' => Yii::t('app', 'Skill'),
            'countries' => Yii::t('app', 'ประเทศ'),
            'age' => Yii::t('app', 'อายุ'),
            'experience' => Yii::t('app', 'ประสบการณ์การทำงาน'),
            'personal_id' => Yii::t('app', 'เลขที่บัตรประชาชน'),
            'marital' => Yii::t('app', 'สถานนะภาพการสมรส'),
            'province' => Yii::t('app', 'จังหวัด'),
            'amphur' => Yii::t('app', 'อำเภอ'),
            'district' => Yii::t('app', 'ตำบล'),
            'office' => Yii::t('app', 'สถานที่ปฏิบัติงาน'),
            'social' => Yii::t('app', 'ใช้ social network อะไรบ้าง'),
            'resume' => Yii::t('app', 'ไฟล์ resume'),
            'token_forupload' => Yii::t('app', 'Token Forupload'),
            'count_download_resume' => Yii::t('app', 'นับจำนวนที่ download resume'),
        ];
    }

    /**
     * @inheritdoc
     * @return EmployeeQuery the active query used by this AR class.
     */
    public static function find() {
        return new EmployeeQuery(get_called_class());
    }

    public static function itemAlias($type) {
        $items = [
            'sex' => [
                self::SEX_MEN => 'ชาย',
                self::SEX_WOMEN => 'หญิง'
            ],
            'marital' => [
                self::MARITAL_SINGLE => 'โสด',
                self::MARITAL_MARRIED => 'สมรส'
            ]
        ];
        return array_key_exists($type, $items) ? $items[$type] : [];
        //
    }

    public function getItemSex() {
        return self::itemAlias('sex');
    }

    public function getSexName() {
        $items = self::itemAlias('sex');
        return array_key_exists($this->sex, $items) ? $items[$this->sex] :null;
    }

    public function getItemMarital() {
        return self::itemAlias('marital');
    }

    public function getMaritalName() {
        $items = self::itemAlias('marital');
        return array_key_exists($this->marital, $items) ? $items[$this->marital] : null;
    }
    
    public function getFullName(){
        return $this->title.$this->name.' '.$this->surname;
    }
    
    public function getCountry(){
        return @$this->hasOne(Countries::className(),['country_code'=>'countries']);
    }

    public function getCountryName(){
        return @$this->country->country_name;
    }
}
