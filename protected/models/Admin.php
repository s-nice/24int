<?php

/**
 * This is the model class for table "{{admin}}".
 *
 * The followings are the available columns in table '{{admin}}':
 * @property string $id
 * @property string $user_name
 * @property string $real_name
 * @property string $password
 * @property integer $gender
 * @property string $phone
 * @property string $email
 * @property string $qq
 * @property string $status
 * @property integer $login_num
 * @property string $last_login_time
 * @property string $last_login_ip
 * @property string $create_time
 * @property string $update_time
 */
class Admin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{admin}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, password', 'required'),
			array('gender, login_num', 'numerical', 'integerOnly'=>true),
			array('user_name, real_name, last_login_ip', 'length', 'max'=>20),
			array('password', 'length', 'max'=>64),
			array('phone', 'length', 'max'=>15),
			array('email', 'length', 'max'=>50),
			array('qq', 'length', 'max'=>12),
			array('status', 'length', 'max'=>1),
			array('last_login_time, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_name, real_name, password, gender, phone, email, qq, status, login_num, last_login_time, last_login_ip, create_time, update_time', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'user_name' => '用户名',
			'real_name' => '真实姓名',
			'password' => '密码',
			'gender' => '性别',
			'phone' => '手机号码',
			'email' => '邮箱',
			'qq' => 'QQ号码',
			'status' => '状态',
			'login_num' => '登录次数',
			'last_login_time' => '最后登录时间',
			'last_login_ip' => '最后登录IP',
			'create_time' => '创建时间',
			'update_time' => '修改时间',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('real_name',$this->real_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('qq',$this->qq,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('login_num',$this->login_num);
		$criteria->compare('last_login_time',$this->last_login_time,true);
		$criteria->compare('last_login_ip',$this->last_login_ip,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
