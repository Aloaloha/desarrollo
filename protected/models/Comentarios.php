<?php

/**
 * This is the model class for table "comentarios".
 *
 * The followings are the available columns in table 'comentarios':
 * @property integer $cod_coment
 * @property string $fecha
 * @property string $comentario
 * @property integer $puntuacion
 * @property integer $id_usercoment
 */
class Comentarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comentarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha', 'required'),
			array('puntuacion, id_usercoment', 'numerical', 'integerOnly'=>true),
			array('fecha', 'length', 'max'=>20),
			array('comentario', 'length', 'max'=>140),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_coment, fecha, comentario, puntuacion, id_usercoment', 'safe', 'on'=>'search'),
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
			'cod_coment' => 'Cod Coment',
			'fecha' => 'Fecha',
			'comentario' => 'Comentario',
			'puntuacion' => 'Puntuacion',
			'id_usercoment' => 'Id Usercoment',
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

		$criteria->compare('cod_coment',$this->cod_coment);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('puntuacion',$this->puntuacion);
		$criteria->compare('id_usercoment',$this->id_usercoment);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comentarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
