<?php

/**
 * This is the model class for table "establecimiento".
 *
 * The followings are the available columns in table 'establecimiento':
 * @property integer $cod_est
 * @property string $razonsocial
 * @property string $cif
 * @property string $dir
 * @property string $localidad
 * @property string $telf
 * @property integer $cpostal
 * @property string $CC
 * @property string $email
 * @property string $zona
 * @property integer $img
 */
class Establecimiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'establecimiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('localidad, cpostal, CC, zona, img', 'required'),
			array('cpostal, img', 'numerical', 'integerOnly'=>true),
			array('razonsocial, zona', 'length', 'max'=>50),
			array('cif', 'length', 'max'=>9),
			array('dir', 'length', 'max'=>150),
			array('localidad', 'length', 'max'=>10),
			array('telf', 'length', 'max'=>15),
			array('CC', 'length', 'max'=>25),
			array('email', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod_est, razonsocial, cif, dir, localidad, telf, cpostal, CC, email, zona, img', 'safe', 'on'=>'search'),
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
			'cod_est' => 'Cod Est',
			'razonsocial' => 'Razonsocial',
			'cif' => 'Cif',
			'dir' => 'Dir',
			'localidad' => 'Localidad',
			'telf' => 'Telf',
			'cpostal' => 'Cpostal',
			'CC' => 'Cc',
			'email' => 'Email',
			'zona' => 'Zona',
			'img' => 'Img',
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

		$criteria->compare('cod_est',$this->cod_est);
		$criteria->compare('razonsocial',$this->razonsocial,true);
		$criteria->compare('cif',$this->cif,true);
		$criteria->compare('dir',$this->dir,true);
		$criteria->compare('localidad',$this->localidad,true);
		$criteria->compare('telf',$this->telf,true);
		$criteria->compare('cpostal',$this->cpostal);
		$criteria->compare('CC',$this->CC,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('zona',$this->zona,true);
		$criteria->compare('img',$this->img);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Establecimiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
