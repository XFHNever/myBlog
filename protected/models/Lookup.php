<?php

/**
 * This is the model class for table "lookup".
 *
 * The followings are the available columns in table 'lookup':
 * @property integer $lookup_id
 * @property string $lookup_name
 * @property integer $code
 * @property string $type
 * @property integer $position
 */
class Lookup extends CActiveRecord
{
    
        private static $_items = array();
        
        private static function loadItem($type){
            self::$_items[$type]=array();
            $models = self::model()->findAll(array(
                'condition'=>'type=:type',
                'params'=>array(':type'=>$type),
            ));
            foreach ($models as $model){
                self::$_items[$type][$model->code] = $model->lookup_name;
            }
        }
        
        public static function items($type){
            if(!isset(self::$_items[$type])){
                self::loadItem($type);
            }
            
            return self::$_items[$type];
        }
        
        public static function item($type,$code){
            if(!isset(self::$_items[$type])){
                self::loadItem($type);
            }
            
            return isset(self::$_items[$type][$code])?self::$_items[$type][$code]:FALSE;
        }

        
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lookup';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lookup_name, code, type, position', 'required'),
			array('code, position', 'numerical', 'integerOnly'=>true),
			array('lookup_name, type', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('lookup_id, lookup_name, code, type, position', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'lookup_id' => 'Lookup',
			'lookup_name' => 'Lookup Name',
			'code' => 'Code',
			'type' => 'Type',
			'position' => 'Position',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('lookup_id',$this->lookup_id);
		$criteria->compare('lookup_name',$this->lookup_name,true);
		$criteria->compare('code',$this->code);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('position',$this->position);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lookup the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
