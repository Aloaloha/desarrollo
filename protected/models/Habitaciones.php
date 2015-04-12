<?php

/**
 * This is the model class for table "habitaciones".
 *
 * The followings are the available columns in table 'habitaciones':
 * @property integer $cod_hab
 * @property integer $tipo
 * @property integer $numero
 * @property integer $estado
 * @property integer $precio
 * @property string $imagenes
 * @property integer $cod_estPerten
 */
class Habitaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'habitaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo, numero, estado, precio, imagenes, cod_estPerten', 'required'),
			array('tipo, numero, estado, precio, cod_estPerten', 'numerical', 'integerOnly'=>true),
			array('imagenes', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_hab, tipo, numero, estado, precio, imagenes, cod_estPerten', 'safe', 'on'=>'search'),
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
			'cod_hab' => 'Cod Hab',
			'tipo' => 'Tipo',
			'numero' => 'Numero',
			'estado' => 'Estado',
			'precio' => 'Precio',
			'imagenes' => 'Imagenes',
			'cod_estPerten' => 'Cod Est Perten',
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

		$criteria->compare('cod_hab',$this->cod_hab);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('estado',$this->estado);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('imagenes',$this->imagenes,true);
		$criteria->compare('cod_estPerten',$this->cod_estPerten);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Habitaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
